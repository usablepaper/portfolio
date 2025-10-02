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
          <Link
            to="/"
            className="fixed top-0 h-13 flex items-center uppercase z-60"
          >
            ← Back
          </Link>
          {currentPost ? (
            <article className="col-span-4 grid grid-cols-4">
              {currentPost.featured_image && (
                <div className="col-span-2 row-start-1 row-end-3">
                  <img
                    src={currentPost.featured_image}
                    alt={currentPost.title}
                    className="w-full object-cover "
                  />
                </div>
              )}

              <header className="col-span-2">
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

              <div
                className="col-span-2 col-start-3"
                dangerouslySetInnerHTML={{ __html: currentPost.content }}
              />
            </article>
          ) : (
            <p>Post not found</p>
          )}
        </>
      )}
    </>
  );
}
