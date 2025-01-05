import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  reactStrictMode: true,
  async headers() {
    return [
      {
        source: "/(.*)",
        headers: [
          {
            key: "Host",
            value: "foxin-studio.fr", // Votre domaine
          },
        ],
      },
    ];
  },
};

export default nextConfig;