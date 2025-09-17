import { create } from 'zustand';
import { wordpress } from '../api/wordpress';
import type { Post } from '../types/wordpress';

interface Posts {
  posts: Post[];
  currentPost: Post | null;
  isLoading: boolean;

  fetchPosts: () => Promise<void>;
  fetchPost: (slug: string) => Promise<void>;
  setCurrentPost: (post: Post | null) => void;
}

export const usePostStore = create<Posts>((set) => ({
  posts: [],
  currentPost: null,
  isLoading: false,

  fetchPosts: async () => {
    set({ isLoading: true });

    try {
      const posts = await wordpress.getPosts({ per_page: 20 });
      set({ posts, isLoading: false });
    } catch (error) {
      set({ isLoading: false });
      console.error('Failed to fetch posts:', error);
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
