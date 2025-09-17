import { useEffect } from 'react';
import { usePostStore } from '../store/posts.ts';
import PostCard from '../components/PostCard';
import Loading from '../components/Loading.tsx';

export default function Posts() {
  const { posts, isLoading, fetchPosts } = usePostStore();

  useEffect(() => {
    if (!posts?.length) {
      void fetchPosts();
    }
  }, []);

  return (
    <>
      {isLoading ? (
        <Loading />
      ) : (
        <>
          {posts.length > 0 ? (
            <div className="grid grid-cols-4 gap-3">
              {posts.map((post) => (
                <PostCard key={post.id} post={post} />
              ))}
            </div>
          ) : (
            <p className="text-gray-600">No posts found.</p>
          )}
        </>
      )}
    </>
  );
}
