import { useEffect } from 'react';
import { useParams, Link } from 'react-router-dom';
import { usePostStore } from '../store/posts.ts';
import Loading from '../components/Loading.tsx';

export default function PostDetail() {
  const { slug } = useParams<{ slug: string }>();
  const { currentPost, isLoading, fetchPost } = usePostStore();

  useEffect(() => {
    if (slug && (!currentPost || currentPost.slug !== slug)) {
      void fetchPost(slug);
    }
  }, [slug, currentPost]);

  return (
    <>
      {isLoading ? (
        <Loading />
      ) : (
        <>
          <Link to="/posts">← Back</Link>
          {currentPost ? (
            <article>
              {currentPost.featured_image && (
                <div className="mb-8">
                  <img
                    src={currentPost.featured_image}
                    alt={currentPost.title}
                    className="w-full object-cover "
                  />
                </div>
              )}

              <header className="mb-8">
                <h1 className="text-4xl font-bold text-gray-900 mb-4">
                  {currentPost.title}
                </h1>
                <time>
                  {new Date(currentPost.date).toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                  })}
                </time>
              </header>

              <div dangerouslySetInnerHTML={{ __html: currentPost.content }} />
            </article>
          ) : (
            <p className="text-gray-600 mb-4">Post not found</p>
          )}
        </>
      )}
    </>
  );
}
