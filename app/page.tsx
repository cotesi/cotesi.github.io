import Image from "next/image";

export default function Home() {
  return (
    <main className="flex min-h-screen flex-col items-center justify-between p-24">
      <div className="z-10 max-w-5xl w-full justify-end font-mono text-sm lg:flex">
        <div className="fixed bottom-0 left-0 flex h-48 w-full items-end justify-center bg-gradient-to-t from-white via-white dark:from-black dark:via-black lg:static lg:h-auto lg:w-auto lg:bg-none">
          <a
            className="pointer-events-none flex place-items-center gap-2 p-8 lg:pointer-events-auto lg:p-0"
            href="https://vercel.com?utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
            target="_blank"
            rel="noopener noreferrer"
          >
            Realização{" "}
            <Image
              src="/ifsp.png"
              alt="Vercel Logo"
              className=""
              width={150}
              height={48}
              priority
            />
          </a>
        </div>
      </div>

      <div className="text-center">
        <div className="relative flex place-items-center after:absolute after:-z-20 after:h-[100px] after:w-full sm:after:w-[380px] after:bg-gradient-conic after:from-sky-200 after:via-blue-200 after:blur-2xl after:content-[''] after:dark:from-sky-900 after:dark:via-[#0141ff] after:dark:opacity-40 z-[-1]">
          <Image
            className="relative dark:drop-shadow-[0_0_0.3rem_#ffffff70]"
            src="/cotesi.svg"
            alt="COTESI Logo"
            width={360}
            height={74}
            priority
          />
        </div>
        <p className="mt-4">
          Dos dias 13 a 17 de maio de 2024
        </p>
      </div>

      <div className="mb-32 mt-20 text-center align-middle justify-center lg:max-w-5xl lg:w-full lg:mb-0 lg:mt-0 lg:text-center">
        <h1>Patrocinadores</h1>
        <div className="grid align-middle lg:grid-cols-6">
          <a
            href="https://frontinsampa.com.br/"
            className="mt-3 lg:mt-0"
            target="_blank"
          >
          <Image
            src="/frontin.svg"
            alt="Frontin Sampa logo"
            width={150}
            height={150}
            priority
          />
          </a>
          <a
            href="https://www.scylladb.com/"
            className="mt-3 lg:mt-0"
            target="_blank"
          >
          <Image
            src="/scylla.png"
            alt="ScyllaDB logo"
            width={100}
            height={150}
            priority
          />
          </a>
          <a
            href="https://www.linuxtips.io"
            className="mt-3 lg:mt-0"
            target="_blank"
          >
          <Image
            src="/linuxtips.png"
            alt="LINUXtips logo"
            width={150}
            height={150}
            priority
          />
          </a>
          <a
            href="https://www.meteor.com/"
            className="mt-3 lg:mt-0"
            target="_blank"
          >
          <Image
            src="/meteor.webp"
            alt="Meteor logo"
            width={150}
            height={150}
            priority
          />
          </a>
          <a
            href="https://www.moclojer.com/"
            className="align-middle flex items-center justify-center gap-2 p-8 lg:p-0 mt-3 lg:mt-0"
            target="_blank"
          >
          <Image
            src="/moclojer.png"
            alt="Moclojer logo"
            width={50}
            height={150}
            priority
          />
          <div
            className="text-pink-500"
          >
            moclojer
          </div>
          </a>
          <a
            href="https://nimblevirtual.com.br/"
            className="mt-3 lg:mt-0"
            target="_blank"
          >
          <Image
            src="/nimble.png"
            alt="Nimble logo"
            width={150}
            height={150}
            priority
          />
          </a>
        {/*
        <a
          href="https://nextjs.org/docs?utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          target="_blank"
          rel="noopener noreferrer"
        >
          <h2 className={`mb-3 text-2xl font-semibold`}>
            Docs{" "}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              -&gt;
            </span>
          </h2>
          <p className={`m-0 max-w-[30ch] text-sm opacity-50`}>
            Find in-depth information about Next.js features and API.
          </p>
        </a>

        <a
          href="https://nextjs.org/learn?utm_source=create-next-app&utm_medium=appdir-template-tw&utm_campaign=create-next-app"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          target="_blank"
          rel="noopener noreferrer"
        >
          <h2 className={`mb-3 text-2xl font-semibold`}>
            Learn{" "}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              -&gt;
            </span>
          </h2>
          <p className={`m-0 max-w-[30ch] text-sm opacity-50`}>
            Learn about Next.js in an interactive course with&nbsp;quizzes!
          </p>
        </a>

        <a
          href="https://vercel.com/templates?framework=next.js&utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          target="_blank"
          rel="noopener noreferrer"
        >
          <h2 className={`mb-3 text-2xl font-semibold`}>
            Templates{" "}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              -&gt;
            </span>
          </h2>
          <p className={`m-0 max-w-[30ch] text-sm opacity-50`}>
            Explore starter templates for Next.js.
          </p>
        </a>

        <a
          href="https://vercel.com/new?utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
          className="group rounded-lg border border-transparent px-5 py-4 transition-colors hover:border-gray-300 hover:bg-gray-100 hover:dark:border-neutral-700 hover:dark:bg-neutral-800/30"
          target="_blank"
          rel="noopener noreferrer"
        >
          <h2 className={`mb-3 text-2xl font-semibold`}>
            Deploy{" "}
            <span className="inline-block transition-transform group-hover:translate-x-1 motion-reduce:transform-none">
              -&gt;
            </span>
          </h2>
          <p className={`m-0 max-w-[30ch] text-sm opacity-50 text-balance`}>
            Instantly deploy your Next.js site to a shareable URL with Vercel.
          </p>
        </a>
        */}
      </div>
      </div>
    </main>
  );
}
