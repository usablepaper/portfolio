export default function Footer() {
  return (
    <footer className="bg-gray-900 text-white p-3">
      <p className="text-gray-300">
        © {new Date().getFullYear()} Portfolio. All rights reserved.
      </p>
    </footer>
  );
}
