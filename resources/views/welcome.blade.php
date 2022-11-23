@extends('layouts.footer')
@section('content')


<div class="container mx-auto pl-[153px] pr-[58px]" id="home">
    <div class="grid grid-cols-2">
        <div>
            <h1 class="font-bold text-start text-[34px] mt-[128px]">Lorem Ipsum is simply dummy text of the printing and typesetting.</h1>
            <h2 class="text-[20px] mt-[20px] text-justify">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when unknown printer took a galley of type.</h2>
            <span>
                <button type="submit" class="w-[174px] h-[44px] mt-[35px] mb-[145px] bg-[#4641A7] rounded-[15px] text-white font-bold transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:shadow-[0px 0px 5px] hover:shadow-black">Start Learn
                </button>
                <button type="submit" class="w-[174px] h-[44px] mt-[35px] mb-[145px] ml-[37px] font-bold border-[3px] border-[#4641A7] rounded-[15px] transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:shadow-[0px 0px 5px] hover:shadow-black">
                    About Us
                </button>
            </span>
        </div>
        <div>
            <img
                src="assets/main.png"
                class="w-[521px] h-[397px] mt-[100px] mb-[127px] ml-[33px]"
            />
        </div>
    </div>
</div>

<div class="container mx-auto bg-[#E3F0FA] max-w-full h-full">
    <div class="text-center">
        <h1 class="pt-[90px] font-bold font-[Readex Pro] text-[36px]" id="material">
            Browse our material
        </h1>
        <p class="font-normal text-[20px] mt-[17px]">
            Lorem Ipsum has been the industry's standard dummy text ever.
        </p>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-[46px] flex justify-center mt-[67px] mx-[108px]">
            <button class="card1 container w-[218px] h-[204px] bg-white rounded-[25px] transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:bg-[#4641A7] hover:text-white hover:shadow-[0px 0px 5px] hover:shadow-black">
                <div class="flex justify-center ">
                    <img src="assets/lcard.png" class="mt-[16px] w-[140px] h-[116px]"/><br>
                </div>
                <p class="font-semibold text-center text-[14px] mx-[26px] mb-[22px] mt-[8px]">Introducing Yourself and Other</p>
            </button>
            <button class="card2 container w-[218px] h-[204px] bg-white rounded-[25px] transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:bg-[#4641A7] hover:text-white hover:shadow-[0px 0px 5px] hover:shadow-black">
                <div class="flex justify-center ">
                    <img src="assets/lcard.png" class="mt-[16px] w-[140px] h-[116px]"/><br>
                </div>
                <p class="font-semibold text-center text-[14px] mx-[26px] mb-[22px] mt-[8px]">Congratulation and Compliment</p>
            </button>
            <button class="card3 container w-[218px] h-[204px] bg-white rounded-[25px] transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:bg-[#4641A7] hover:text-white hover:shadow-[0px 0px 5px] hover:shadow-black">
                <div class="flex justify-center ">
                    <img src="assets/lcard.png" class="mt-[16px] w-[140px] h-[116px]"/><br>
                </div>
                <p class="font-semibold text-center text-[14px] mx-[26px] mb-[22px] mt-[8px]">Expressing Intention and Willingness</p>
            </button>
            <button class="card4 container w-[218px] h-[204px] bg-white rounded-[25px] transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:bg-[#4641A7] hover:text-white hover:shadow-[0px 0px 5px] hover:shadow-black">
                <div class="flex justify-center ">
                    <img src="assets/lcard.png" class="mt-[16px] w-[140px] h-[116px]"/><br>
                </div>
                <p class="font-semibold text-center text-[14px] mx-[26px] mb-[22px] mt-[8px]">Simple Past VS Perfect Tense</p>
            </button>
        </div>
    </div>
    <div class="text-center mt-[48px]">
        <a href="./textlearning.blade.php">
            <button type="submit" class="rounded-[15px] w-[174px] h-[44px] border-[3px] border-[#4641A7] text-center text-[14px] transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:bg-[#4641A7] hover:text-white hover:shadow-[0px 0px 5px] hover:shadow-black ">See All Material</button>
        </a>
    </div>
    <div class="container">
        <div class="text-center ml-[80px]">
            <h1 class="pt-[90px] font-bold text-[36px]">
                Learn from Video
            </h1>
            <p class="font-normal text-[20px] mt-[21px]">
                Lorem Ipsum has been the industry's standard dummy text ever.
            </p>
        </div>
        <div class="container flex justify-center ml-[50px]">
            <div class="grid grid-cols-3 gap-[35px] mt-[28px]">
                <div class="vid1 transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:shadow-[0px 0px 5px] hover:shadow-black">
                    <iframe src="https://www.youtube.com/embed/58Tvo2HfDtI" frameborder="1" class="w-[350px] h-[250px] rounded-[25px]"></iframe>
                </div>
                <div class="vid2 transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:shadow-[0px 0px 5px] hover:shadow-black">
                    <iframe src="https://www.youtube.com/embed/b_rPSf16ehY" frameborder="0" class="w-[350px] h-[250px] rounded-[25px]"></iframe>
                </div>
                <div class="vid3 transition-all duration-[200ms] ease-in-out hover:scale-[1.1] hover:shadow-[0px 0px 5px] hover:shadow-black">
                    <iframe src="https://www.youtube.com/embed/qsGZ-Z5YT0k" frameborder="0" class="w-[350px] h-[250px] rounded-[25px]"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex mt-[152px] ml-[130px] pb-[103px]">
            <div class="bg-[#4641A7] w-[398px] h-[160px] flex justify-center" style="border-radius:70px 0px 0px 70px;">
                <img src="assets/ftb3.png" class="w-[332px] h-[146px]" alt="foto">
            </div>
            <div class="bg-[#FFFFFF] w-[750px] h-[160px]" style="border-radius:0px 70px 70px 0px;">
                <h1 class="text-start font-bold font-[Poppins] text-[32px]" style="padding:46px 0 9px 41px;">Easy learning on here</h1>
                <p class="text-[20px] font-light font-[Poppins] pl-[41px] pb-[45px]">Lorem Ipsum has been the industry's standard dummy text ever.</p>
            </div>
        </div>
    </div>



@endsection


