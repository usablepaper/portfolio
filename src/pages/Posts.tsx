import { useEffect, useCallback } from 'react';
import { usePostStore } from '../store';
import PostCard from '../components/PostCard';
import Loading from '../components/Loading.tsx';

export default function Posts() {
  const { posts, isLoading, hasMore, fetchPosts, fetchMorePosts } = usePostStore();

  useEffect(() => {
    if (!posts?.length) {
      void fetchPosts();
    }
  }, []);

  const handleScroll = useCallback(() => {
    if (isLoading || !hasMore) return;

    const scrollTop = window.scrollY;
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;

    if (scrollTop + windowHeight >= documentHeight - 200) {
      void fetchMorePosts();
    }
  }, [isLoading, hasMore, fetchMorePosts]);

  useEffect(() => {
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, [handleScroll]);

  if (isLoading && posts.length === 0) {
    return <Loading />;
  }

  return (
    <>
      {posts.length > 0 ? (
        <>
          {posts.map((post) => (
            <PostCard key={post.id} post={post} />
          ))}
          {isLoading && <Loading />}
        </>
      ) : (
        <p>No posts found.</p>
      )}
    </>
  );
}
