@extends('layouts.footer') @section('content')

@foreach ($material as $mat);

<div class="bg-[#E3F0FA] h-auto">
    <div class="container">
        <div class="flex pt-[45px] ml-[130px] pb-[103px]">
            <div class="bg-[#4641A7] w-[458px] h-[153px] flex justify-center" style="border-radius:25px 0px 0px 25px;">

            </div>
            <div class="bg-[#FFFFFF] w-auto h-[153px]" style="border-radius:0px 25px 25px 0px;">
                <h1 class="font-bold font-[Poppins] text-[36px]" style="padding: 50px 50px 58px 42px">
                    {{$mat['heading']}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="w-[1084px] h-auto bg-[#FFFFFF] text-start ml-[130px]" style="border-radius:25px 25px 0 0;">
            <h1 class="font-semibold font-[Readex Pro] text-[24px] text-white leading-[30px] bg-[#4641A7] "
                style="padding: 29px 0 30px 44px; border-radius: 25px 25px 0px 0px; ">1.
                Expressions of Introduction</h1>
            <iframe src="{{$mat['video']}}" frameborder="0"
                class="w-[1084px] h-[502px] rounded-[25px]" style="padding:34px 24px 39px 24px;"></iframe>
        </div>
    </div>


    <div class="container pb-[110px]">
        <div class="w-[1084px] h-auto bg-[#FFFFFF] text-start mt-[59px] ml-[130px]  rounded-[25px]"
            style="border-radius:25px 25px 0 0;">
            <h1 class="font-semibold font-[Readex Pro] text-[24px] text-white leading-[30px] bg-[#4641A7] "
                style="padding: 29px 0 30px 44px;">1.
                Expressions of Introduction</h1>
            <p
                class="pl-[44px] pr-[67px] pt-[28px] pb-[134px] text-justify font-[Poppins] font-light tracking-tighter leading-[21px] text-[14px]">
                {{$mat['text']}}
            </p>
        </div>
        <div>

        </div>
    </div>
</div>
@endsection
@endforeach
