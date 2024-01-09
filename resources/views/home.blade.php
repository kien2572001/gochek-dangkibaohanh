@extends('layout')


@section('content')
    {{--Main Form--}}
    <div class="w-full bg-background text-white">
        <div class="w-[960px] mx-auto grid grid-cols-2">
            <div class="row-span-1">
                <div class="text-[40px] font-bold py-10 text-left">
                    KÍCH HOẠT
                    <br>
                    BẢO HÀNH
                    <br>
                    ĐIỆN TỬ
                </div>
                <span class="">
                Quý khách kích hoạt bảo hành điện tử ngay sau khi mua hàng để đảm bảo nhận được quyền lợi tối đa
            </span>
            </div>
            <div class="row-span-1 p-5">
                <form class="rounded-md text-black bg-[#454545] px-5 py-5">
                    <div class="text-white text-lg my-2">Vui lòng điền đầy đủ các thông tin sau</div>
                    <input type="text" placeholder="Họ và tên" class="w-full px-5 py-3 my-2 bg-white">
                    <input type="text" placeholder="Số điện thoại" class="w-full px-5 py-3 my-2 bg-white">
                    <input type="text" placeholder="Mã bảo hành" class="w-full px-5 py-3 my-2 bg-white">
                    <select class="w-full px-5 py-3 my-2 bg-white">
                        <option value="">Cửa hàng đại lý ủy quyền</option>
                        <option value="">Facebook</option>
                        <option value="">Tiktok Shop</option>
                        <option value="">Shopee</option>
                        <option value="">Lazada</option>
                        <option value="">Website</option>
                    </select>
                    <div class="flex justify-between mt-3">
                        <button class="bg-[#962805] px-3 py-4 text-white font-bold text-[15px]"
                             type="submit">
                            Kích hoạt bảo hành ngay
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--End Main Form--}}

    {{--Tutorial Box--}}
    <div class="w-full bg-white text-black">
        <div class="w-[960px] mx-auto flex flex-col items-center">
            <div class="text-[35px] font-bold pt-5 pb-3 text-center">
                VỊ TRÍ MÃ BẢO HÀNH
            </div>
            <div class="w-1/5 border-b border-dashed border-[#36383f] mb-4"></div>
            <span class="font-bold text-[22px]">
            Mã bảo hành được in trên Thẻ bảo hành
        </span>
            <span class="text-[14px]">
            (Mỗi một sản phẩm có một mã bảo hành riêng)
        </span>
        </div>
    </div>
    {{--End Tutorial Box--}}
@endsection
