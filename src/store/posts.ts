import { create } from 'zustand';
import { wordpress } from '../api';
import type { Post } from '../types';

interface Posts {
  posts: Post[];
  currentPost: Post | null;
  isLoading: boolean;
  hasMore: boolean;
  page: number;

  fetchPosts: () => Promise<void>;
  fetchMorePosts: () => Promise<void>;
  fetchPost: (slug: string) => Promise<void>;
  setCurrentPost: (post: Post | null) => void;
}

export const usePostStore = create<Posts>((set, get) => ({
  posts: [],
  currentPost: null,
  isLoading: false,
  hasMore: true,
  page: 1,

  fetchPosts: async () => {
    set({ isLoading: true });

    try {
      const posts = await wordpress.getPosts({ per_page: 20, page: 1 });
      set({ posts, isLoading: false, page: 1, hasMore: posts.length === 20 });
    } catch (error) {
      set({ isLoading: false });
      console.error('Failed to fetch posts:', error);
    }
  },

  fetchMorePosts: async () => {
    const { isLoading, hasMore, page, posts } = get();
    if (isLoading || !hasMore) return;

    set({ isLoading: true });

    try {
      const newPosts = await wordpress.getPosts({ per_page: 20, page: page + 1 });
      set({
        posts: [...posts, ...newPosts],
        page: page + 1,
        isLoading: false,
        hasMore: newPosts.length === 20,
      });
    } catch (error) {
      set({ isLoading: false });
      console.error('Failed to fetch more posts:', error);
    }
  },

  fetchPost: async (slug: string) => {
    set({ isLoading: true });

    try {
      const post = await wordpress.getPost(slug);
      set({ currentPost: post, isLoading: false });
    } catch (error) {
      set({ isLoading: false });
      console.error('Failed to fetch post:', error);
    }
  },

  setCurrentPost: (post: Post | null) => {
    set({ currentPost: post });
  },
}));
