@extends('layouts.master') @section('header')
<nav class="h-max border-b-[1px] bg-[#FFFFFF] sticky top-0"
    style="z-index:999; box-shadow: 0px 4px 20px rgba(227, 240, 250, 0.75);">
    <div class="flex justify-between items-center ">
        <span>
            <p>
                <a href="#" class="w-[41px] h-[17px] mt-[31px] mb-[29px] ml-[153px] font-bold">LOGO</a>
            </p>
        </span>
        <a href="#home" class="w-[42px] h-[21px] ml-[298px] mt-[22px] mb-[26px] mr-[83px] font-normal block">
            <p>Home</p>
        </a>
        <a href="#material" class="w-[57px] h-[21px] mt-[22px] mb-[26px] mr-[75px] font-normal block">
            <p>Material</p>
        </a>
        <a href="#" class="h-[21px] mr-[75px] mt-[22px] mb-[26px] font-normal">
            <p>About</p>
        </a>
        <div class="search relative">
            <input type="text" placeholder="Search"
                class="h-[38px] w-[216px] bg-[#E3F0FA] font-[Poppins] outline-none rounded-full pl-[20px] pr-[50px]" />
            <i class="fa-solid fa-magnifying-glass absolute w-[17px] h-[17px] top-[12px] right-[20px]"></i>
        </div>

        <a href="#" class="ml-[55px] mr-[148px]">
            <button
                class="bg-[#4641A7] w-[150px] h-[38px] rounded-full border-2 border-[#4641A7] text-white font-bold">Sign
                In</button>
        </a>
    </div>
</nav>
@endsection
