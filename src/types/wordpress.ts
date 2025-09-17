export interface WordPressPost {
  id: number;
  date: string;
  slug: string;
  title: {
    rendered: string;
  };
  content: {
    rendered: string;
  };
  excerpt: {
    rendered: string;
  };
  featured_media: number;
  categories: number[];
  acf: {
    contents?: string;
    year?: string;
    link?: string;
    gallery?: string[];
  };
}

export interface WordPressMedia {
  id: number;
  source_url: string;
}

export interface Post {
  id: number;
  title: string;
  content: string;
  excerpt: string;
  slug: string;
  date: string;
  featured_image?: string;
  acf_contents?: string;
  acf_year?: string;
  acf_link?: string;
  acf_gallery?: string[];
}
