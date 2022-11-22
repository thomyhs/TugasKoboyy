@extends('layouts.master') @section('header')
<nav class="h-max border-[1px]">
    <div class="flex justify-between items-center">
        <span>
            <p>
                <a href="#" class="w-[41px] h-[17px] mt-[31px] mb-[29px] ml-[153px] font-bold">LOGO</a>
            </p>
        </span>
        <a href="#" class="w-[42px] h-[21px] ml-[298px] mt-[22px] mb-[26px] mr-[83px] font-normal block">
            <p>Home</p>
        </a>
        <a href="#">
            <p class="w-[57px] h-[21px] mr-[75px] block font-normal">Material</p>
        </a>
        <a href="#">
            <p class="mr-[70px] font-normal">About</p>
        </a>
        <div class="search relative">
            <input type="text" placeholder="Search" class="h-[38px] bg-[#E3F0FA] outline-none rounded-full pl-[20px]"/>
            <i class="fa-solid fa-magnifying-glass absolute w-[17px] h-[17px] top-[12px] right-[20px]"></i>
        </div>

        <a href="#" class="ml-[55px] mr-[148px]">
            <button class="bg-[#4641A7] w-[150px] h-[38px] rounded-full border-2 border-[#4641A7] text-white font-bold">Sign In</button>
        </a>
    </div>
</nav>
@endsection
