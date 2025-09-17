import { Link } from 'react-router-dom';
import type { Post } from '../types/wordpress';
import { usePostStore } from '../store/posts';

interface Props {
  post: Post;
}

export default function PostCard({ post }: Props) {
  const { setCurrentPost } = usePostStore();
  return (
    <div className="overflow-hidden">
      {post.featured_image && (
        <div className="aspect-video overflow-hidden">
          <img
            src={post.featured_image}
            alt={post.title}
            className="w-full h-full object-cover"
          />
        </div>
      )}
      <Link to={`/posts/${post.slug}`} onClick={() => setCurrentPost(post)}>
        <h3>{post.title}</h3>
      </Link>
    </div>
  );
}
