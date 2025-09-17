import axios from 'axios';
import type { WordPressPost, WordPressMedia, Post } from '../types/wordpress';

const WORDPRESS_BASE_URL = import.meta.env.VITE_WORDPRESS_API_URL;

const api = axios.create({
  baseURL: WORDPRESS_BASE_URL,
  headers: {
    'Content-Type': 'application/json',
  },
});

export const wordpress = {
  async getRawPosts(params?: {
    page?: number;
    per_page?: number;
    categories?: number[];
    tags?: number[];
    search?: string;
  }): Promise<WordPressPost[]> {
    const response = await api.get('/posts', {
      params: { ...params, acf: 'all' },
    });

    return response.data;
  },

  async getRawPost(slug: string): Promise<WordPressPost> {
    const response = await api.get(`/posts?slug=${slug}&acf=all`);
    if (response.data.length === 0) {
      throw new Error('Post not found');
    }
    return response.data[0];
  },

  async fetchMedia(id: number): Promise<WordPressMedia> {
    const response = await api.get(`/media/${id}`);
    return response.data;
  },

  async transformPost(post: WordPressPost): Promise<Post> {
    let featuredMedia = '';
    if (post.featured_media) {
      try {
        const media = await this.fetchMedia(post.featured_media);
        featuredMedia = media.source_url;
      } catch (error) {
        console.warn(
          `Failed to fetch featured media for post ${post.id}`,
          error
        );
      }
    }

    return {
      id: post.id,
      title: post.title.rendered,
      content: post.content.rendered,
      excerpt: post.excerpt.rendered,
      slug: post.slug,
      date: post.date,
      featured_image: featuredMedia,
      acf_contents: post.acf?.contents,
      acf_year: post.acf?.year,
      acf_link: post.acf?.link,
      acf_gallery: post.acf?.gallery,
    };
  },

  async getPosts(params?: {
    page?: number;
    per_page?: number;
    categories?: number[];
  }): Promise<Post[]> {
    const posts = await this.getRawPosts(params);
    return Promise.all(posts.map((post) => this.transformPost(post)));
  },

  async getPost(slug: string): Promise<Post> {
    const post = await this.getRawPost(slug);
    return this.transformPost(post);
  },
};
