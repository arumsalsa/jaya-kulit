@extends('layout.app')

@section('content')

<div class="max-w-6xl mx-auto mt-10">

    <!-- WRAPPER -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden">

        <!-- IMAGE + CONTACT GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- LEFT IMAGE -->
            <div>
                <img 
                    src="{{ asset('images/jakett.jpeg') }}" 
                    class="w-full h-full object-cover"
                >
            </div>

            <!-- RIGHT CONTACT INFO -->
            <div class="p-10 flex flex-col justify-center">

                <h2 class="text-4xl font-bold mb-6">Contact Us</h2>

                <!-- INSTAGRAM -->
                <div class="flex items-center space-x-3 mb-4">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/instagram-new.png"/>
                    <span class="text-lg">@jaya_kulit</span>
                </div>

                <!-- FACEBOOK -->
                <div class="flex items-center space-x-3 mb-4">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-new.png"/>
                    <span class="text-lg">jayakulit</span>
                </div>

                <!-- WHATSAPP -->
                <div class="flex items-center space-x-3 mb-4">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/whatsapp.png"/>
                    <span class="text-lg">+62 857-3174-7963</span>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
