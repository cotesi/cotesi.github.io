import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "./globals.css";

const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "IX COTESI",
  description: "IX Congresso de Tecnologia e Sistemas de Informação do Instituto Federal de São Paulo, Campus Votuporanga",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <head>
        <link rel="icon" href="/logo.svg" sizes="any" /> 
      </head>
      <body className={inter.className}>{children}</body>
    </html>
  );
}
