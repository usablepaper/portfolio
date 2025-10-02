import { Link } from 'react-router-dom';
import type { Post } from '../types';
import { usePostStore } from '../store';

interface Props {
  post: Post;
}

export default function PostCard({ post }: Props) {
  const { setCurrentPost } = usePostStore();
  return (
    <Link
      className="overflow-hidden h-fit"
      to={`/posts/${post.slug}`}
      onClick={() => setCurrentPost(post)}
    >
      {post.featured_image && (
        <img src={post.featured_image} alt={post.title} />
      )}
      <h3>{post.title}</h3>
    </Link>
  );
}
