@extends('base.base')

@section('styles')
@endsection

@section('content')
<div class="container outer min-h-svh py-5 mx-auto ">
    {{-- headline --}}
    <div class="block mb-4 mx-auto border-b border-slate-300 pb-2 max-w-[360px]">
        <a 
            target="_blank" 
            href="https://www.material-tailwind.com/docs/html/card" 
            class="block w-full px-4 py-2 text-center text-slate-700 transition-all"
        >
            We Trust in <b>Black Mamba</b>.
        </a>
    </div>

    {{-- button Create --}}
    <div class="mb-4 max-w-7xl mx-auto ps-4">
        <a href="{{ route('crud.create') }}" class="flex items-center justify-center max-w-24 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm  py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Create 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" class="ml-2">
                <rect width="16" height="16" fill="none"/>
                <path d="M12 2v20M2 12h20" stroke="#000" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>
    </div>
    

    {{-- landing Card--}}   
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
        <!-- Card 1 -->
        <div class="relative flex flex-col text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl w-72 mx-auto">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-72">
                <img
                    src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                    alt="card-image" class="object-cover w-full h-full" />
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        Apple AirPods
                    </p>
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        $95.00
                    </p>
                </div>
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                    With plenty of talk and listen time, voice-activated Siri access, and an
                    available wireless charging case.
                </p>
            </div>
            <div class="p-6 pt-0">
                <div class=" space-y-3">
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Add to Cart
                    </button>
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none w-full bg-blue-600 text-white shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Buy Now
                    </button>
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none w-full bg-gray-300 text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                        type="button">
                        Detail
                    </button>
                </div>
            </div>
            
        </div>

            <!-- Card 1 -->
            <div class="relative flex flex-col text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl w-72 mx-auto">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-72">
                <img
                    src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                    alt="card-image" class="object-cover w-full h-full" />
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        Apple AirPods
                    </p>
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        $95.00
                    </p>
                </div>
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                    With plenty of talk and listen time, voice-activated Siri access, and an
                    available wireless charging case.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                    type="button">
                    Add to Cart
                </button>
            </div>
        </div>

            <!-- Card 1 -->
            <div class="relative flex flex-col text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl w-72 mx-auto">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-72">
                <img
                    src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                    alt="card-image" class="object-cover w-full h-full" />
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        Apple AirPods
                    </p>
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        $95.00
                    </p>
                </div>
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                    With plenty of talk and listen time, voice-activated Siri access, and an
                    available wireless charging case.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                    type="button">
                    Add to Cart
                </button>
            </div>
        </div>

            <!-- Card 1 -->
            <div class="relative flex flex-col text-gray-700 bg-white shadow-lg bg-clip-border rounded-xl w-72 mx-auto">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-72">
                <img
                    src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                    alt="card-image" class="object-cover w-full h-full" />
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        Apple AirPods
                    </p>
                    <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                        $95.00
                    </p>
                </div>
                <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-700 opacity-75">
                    With plenty of talk and listen time, voice-activated Siri access, and an
                    available wireless charging case.
                </p>
            </div>
            <div class="p-6 pt-0">
                <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                    type="button">
                    Add to Cart
                </button>
            </div>
        </div>

        
    </div>

    {{-- landing table --}}
    
</div>





<!-- component -->     
@endsection

@section('scripts')
@endsection