<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novotel</title>
</head>
<body>
    <header>
         <section>
               <div class="header_container xl:container xl:mx-auto">
                    <div class="header_row flex justify-between items-center">
                           <div class="header_logo flex items-center gap-x-4">
                               <div class="heaader_logo_img">
                                <svg width="30" height="40" viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.474 1.48017C12.0035 3.6732 12.1012 3.38256 12.1012 11.5178C12.1012 15.0772 12.1563 17.9892 12.2238 17.9892C12.4782 17.9892 16.046 15.7619 16.5493 15.2885C16.8387 15.0166 17.269 14.3955 17.5054 13.9087C17.9035 13.0893 17.931 12.5374 17.8759 6.51165L17.8163 0L15.474 1.48017ZM1.46841e-05 17.22C0.000687047 20.5718 0.101543 23.6962 0.224361 24.1629C0.561215 25.4438 1.68989 26.6037 3.88246 27.9227C4.97079 28.5773 5.90359 29.1129 5.95558 29.1129C6.00735 29.1129 6.04994 26.2494 6.04994 22.7497V16.3864L5.43361 15.1448C4.89482 14.0595 4.54945 13.7302 2.68812 12.5272C1.51709 11.7703 0.433017 11.1453 0.278822 11.1384C0.0616487 11.1285 -0.00110592 12.4948 1.46841e-05 17.22ZM23.981 17.1017C23.9821 23.4233 24.1056 24.4583 25.0077 25.7209C25.4216 26.3005 28.6826 28.5525 29.8684 29.0781C29.9719 29.1241 30.0257 26.1337 29.9879 22.4333L29.9188 15.7051L29.3274 14.7619C28.9139 14.1023 28.0938 13.414 26.5991 12.4723C25.4239 11.7315 24.3537 11.1256 24.221 11.1256C24.0549 11.1256 23.9801 12.9899 23.981 17.1017ZM15.9113 23.2084C14.8635 23.8519 13.7144 24.6684 13.3579 25.0227C12.1649 26.2078 12.1012 26.643 12.1012 33.6022C12.1012 37.1211 12.164 40 12.2404 40C12.317 40 13.2808 39.4507 14.3823 38.7795C16.5218 37.4754 17.6278 36.3107 17.8246 35.1543C17.8916 34.7605 17.9172 31.6482 17.8813 28.238L17.8163 22.038L15.9113 23.2084Z" fill="#2F7BEB"/>
                                </svg>
                               </div>
                               <div class="header_title">
                                   <h1 class="text-2xl font-medium leading-normal font-sans ">Novotel</h1>
                               </div>
                           </div>
                           <div class="header_link">
                            @if (Route::has('login'))
                            <nav class=" sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-black-600  dark:text-black-400">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-black-600  dark:text-black-400">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-black-600  dark:text-black-400">Register</a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                           </div>
                    </div>
               </div>
         </section>
    </header>
</body>
</html>