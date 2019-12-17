@extends('_layouts.master')

@section('style')
    <style>
        div {
            /* border: solid ; */
        }
    </style>
@endsection
@section('content')
    <main class="main pt-0 sm:flex sm:flex-row sm:items-start">
        <div class="sm:w-2/3 bg-gray-800 text-gray-100 px-4 pb-10">
            <div>
                <div class="w-full text-right ">
                    <div class="font-light text-6xl">
                        Hello.
                    </div>
                    <div class="text-5xl">
                        I'm <span class="font-bold text-teal-200">Boumedyen</span>
                    </div>
                    <div class="text-2xl text-white">
                        I'm a web dev and a maker.
                    </div>
                </div>
                <hr class="border-t border-b-0 border-white-800 w-full  my-10">
                <div class="w-full">
                    <div class="text-2xl text-white font-hairline text-justify">
                        I am a full-stack PHP developer.
                        From a very early age I've been fascinated with computers,
                        which led me to pursue a degree in
                        <span class="inline-block bg-teal-700 px-1 rounded leading-tight font-medium"
                              style="transform: skew(-10deg, 0deg)">Computer Science</span>. Later, I fell in love with
                        <span class="inline-block bg-teal-700 px-1 rounded leading-tight font-medium"
                              style="transform: skew(-10deg, 0deg)">web development</span>
                        and never looked back.
                        <br>
                        Currently I work full time as a Laravel developer,
                        building internal apps and tools for my employer.

                    </div>
                </div>
                <hr class="border-t border-b-0 border-white-800 w-full  my-10">
                <div class="w-full">
                    <div class="font-light text-5xl text-gray-700 text-right">
                        Professional work
                    </div>
                    <div class="font-light text-2xl text-white text-justify">
                        Through the years i had the chance to participate in many projects.
                    </div>
                    <div>
                        <h2 class="font-bold text-3xl text-gray-700 text-justify">Transportation</h2>
                        <div class="font-light text-2xl text-white text-justify">
                            Full lifecycle app for receiving cargo shipping orders,
                            processing pickups and deliveries, and generating bills of lading.
                            Internal/external APIs connecting various systems.
                        </div>
                        <h3 class="font-bold text-3xl text-white text-left"> Tech</h3>
                        <div class="italic semi-bold text-gray-700 text-1xl">
                            Laravel/PHP • Vue.js/JavaScript • TailwindCSS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bio" class="sm:w-1/3 mx-4  px-4 bg-gray-200 w-full mb-10 pt-10">
            <div class="flex flex-col items-center justify-center">
                <div class="mx-auto">
                    <img src="{{  'assets/images/profile.jpg'  }}" alt="Picture of me" title="Picture of me"
                         class=" mx-auto rounded-full border-8 border-double border-gray-700 w-64 h-64">
                </div>
                <div>
                    <a href="https://github.com/benboubekeur" class="mx-2 text-green-500 hover:text-green-700"
                       title="Find my projects on Github - @benbouekeur"
                       aria-label="Find my projects on Github - @benoubekeur">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        >
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                        </svg>
                    </a>
                </div>
            </div>

                <h2 class="font-bold text-4xl text-teal-600 ">Bio:</h2>
                <hr class="m-0 mb-4 border-b-2 border-gray-400 w-16 text-left">
                <div class="text-gray-700">
                    <div class="mb-5">
                        <h2 class="font-black font-bold">LIVING IN</h2>
                        <p>Tlemcen, ALGERIA</p>
                    </div>
                    <div class="mb-5">
                        <h2 class="font-black font-bold">INTERESTS</h2>
                        <p>⌨️ Coding • 🛠 Making things • 💪 Bodybuilding • 🚲 Cycling (sometimes) • 📖 Reading • Real
                            Madrid</p>
                    </div>
                    <h2 class="font-bold text-4xl text-teal-600 ">Tech stack:</h2>
                    <hr class="m-0 mb-4 border-b-2 border-gray-400 w-16 text-left">
                    <div class="mb-5">
                        <ul>
                            <li class="mb-4 text-gray-700 uppercase">Laravel</li>

                            <li class="mb-4 text-gray-700 uppercase">Vue.js</li>

                            <li class="mb-4 text-gray-700 uppercase">TailwindCSS</li>
                        </ul>
                    </div>
                    <h2 class="font-bold text-4xl text-teal-600 ">This website:</h2>
                    <hr class="m-0 mb-4 border-b-2 border-gray-400 w-16 text-left">
                    <div class="mb-5">
                        <ul class="flex flex-col">
                            <li class="mb-4">
                                Built with ❤️ and...
                            </li>
                            <li class="mb-4">
                                <a href="https://jigsaw.tighten.co/" title="Jigsaw by Tighten.co"
                                   class="inline-flex items-center font-black uppercase">
                                    Jigsaw <span class="ml-1 text-gray-500"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="20" height="20"
                                                                                 viewBox="0 0 24 24" fill="none"
                                                                                 stroke="currentColor" stroke-width="2"
                                                                                 stroke-linecap="round"
                                                                                 stroke-linejoin="round"
                                                                                 class="feather feather-external-link">
    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline
                                                    points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21"
                                                                                             y2="3"></line>
</svg>
</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="https://tailwindcss.com/" title="TailwindCSS"
                                   class="inline-flex items-center font-black uppercase">
                                    TailwindCSS <span class="ml-1 text-gray-500"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                      width="20" height="20"
                                                                                      viewBox="0 0 24 24" fill="none"
                                                                                      stroke="currentColor"
                                                                                      stroke-width="2"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"
                                                                                      class="feather feather-external-link">
    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline
                                                    points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21"
                                                                                             y2="3"></line>
</svg>
</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                Hosted on
                                <a href="https://www.netlify.com/" title="Hosted on Netlify"
                                   class="inline-flex items-center font-black uppercase">
                                    Netlify <span class="ml-1 text-gray-500"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="20" height="20"
                                                                                  viewBox="0 0 24 24" fill="none"
                                                                                  stroke="currentColor" stroke-width="2"
                                                                                  stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  class="feather feather-external-link">
    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline
                                                    points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21"
                                                                                             y2="3"></line>
</svg>
</span>
                                </a>
                            </li>
                        </ul>
                    </div>

            </div>
        </div>
    </main>
@endsection
