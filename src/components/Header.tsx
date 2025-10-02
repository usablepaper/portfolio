import { Link, useLocation } from 'react-router-dom';

export default function Header() {
  const location = useLocation();

  const navigation = [
    { name: 'Home', href: '/' },
    { name: 'About', href: '/about' },
  ];

  const isActive = (path: string) => location.pathname === path;

  return (
    <header className="fixed top-0 h-13 z-50 w-full border-b-1 border-black p-3">
      <nav>
        <ul className="flex gap-x-3 justify-center uppercase">
          {navigation.map((item) => (
            <li key={item.name}>
              <Link
                to={item.href}
                className={` ${
                  isActive(item.href)
                    ? 'text-black'
                    : 'text-grey-500 hover:text-black'
                }`}
              >
                {item.name}
              </Link>
            </li>
          ))}
        </ul>
      </nav>
    </header>
  );
}
