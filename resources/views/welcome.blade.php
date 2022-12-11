@extends('layout')
@section('content')
<!--Product-->
<section id="product">
      <div class="container mt-[50px]">
        <div class="box-title text-center mb-[30px]">
          <h1>Product</h1>
          <img
            src="{{URL::asset('images/Active Indicator.png')}}"
            alt=""
            class="mx-auto pb-[40px]"
          />
          <h4 class="pb-[10px]">
            Vestibulum sit amet tortor sit amet libero lobortis semper at et
            odio.
          </h4>
        </div>
        @foreach($productList as $product)
        <div class="flex gap-5 justify-center">
        <div
          class="card flex flex-wrap lg:flex-nowrap justify-center gap-[50px] pt-[50px]"
        >
          <div
            class="box-title flex flex-col justify-center shadow-2xl lg:w-[300px] rounded-2xl"
          >
            <img
              src="{{asset('storage/product/'.$product->image)}}"
              alt=""
              class="w-[270px] h-[200px] rounded-[25px] mx-auto mt-[-60px] object-cover shadow-2xl"
            />
            <h4 class="pl-[15px] pt-[20px]"><b>{{$product->title}}</b></h4>
            <span class="text-[grey] pl-[15px]">Rp. {{$product->price}}</span>
            <a href="" class="text-[#E91E63] pl-[15px] pt-[10px] pb-[25px]">Detail Product</a>
          </div>
        </div>
        @endforeach
        
        </div>
      </div>
</section>
<!--BLOG-->
<section id="blog">
      <div class="container mt-[50px]">
        <div class="box-title text-center mb-[30px]">
          <h1>Blog and News</h1>
          <img
            src="{{URL::asset('images/Active Indicator.png')}}"
            alt=""
            class="mx-auto pb-[40px]"
          />
          <h4 class="pb-[10px]">
            Vestibulum sit amet tortor sit amet libero lobortis semper at et
            odio.
          </h4>
        </div>
        <div
          class="card flex flex-wrap lg:flex-nowrap justify-center gap-[50px] pt-[50px]"
        >
          <div
            class="box-title flex flex-col justify-center shadow-2xl lg:w-[400px] rounded-2xl"
          >
            <img
              src="{{URL::asset('images/arlington-research-kN_kViDchA0-unsplash.jpg')}}"
              alt=""
              class="w-[370px] h-[200px] rounded-[25px] mx-auto mt-[-60px] object-cover shadow-2xl"
            />
            <span class="text-[grey] pl-[15px] pt-[15px]">HEADLINE </span>
            <h4 class="pl-[15px]"><b>Set vitae viverra justo.</b></h4>
            <a href="" class="text-[#E91E63] pl-[15px] pb-0">Read more</a>
          </div>
          <div class="flex flex-col gap-[30px]">
            <div
              class="box-title flex justify-center shadow-2xl rounded-2xl lg:w-[500px] py-5"
            >
              <div>
                <img
                  src="{{URL::asset('images/pexels-pixabay-87452.jpg')}}"
                  alt=""
                  class="w-[115px] h-[100px] rounded-lg mx-auto object-cover shadow-2xl ml-[-15px]"
                />
              </div>
              <div>
                <span class="text-[grey] py-[30px] pl-[15px]">NEWS</span>
                <h5 class="pl-[15px]">
                  Vestibulum sit amet tortor sit amet libero lobortis
                </h5>
                <a href="" class="text-[#E91E63] pl-[15px] pt-[20px] pb-[15px]"
                  >Read more</a
                >
              </div>
            </div>
            <div
              class="box-title flex justify-center shadow-2xl rounded-2xl lg:w-[500px] py-5"
            >
              <div>
                <img
                  src="{{URL::asset('images/pexels-pixabay-33101.jpg')}}"
                  alt=""
                  class="w-[115px] h-[100px] rounded-lg mx-auto object-cover shadow-2xl ml-[-15px]"
                />
              </div>
              <div>
                <span class="text-[grey] py-[30px] pl-[15px]">NEWS</span>
                <h5 class="pl-[15px]">
                  Vestibulum sit amet tortor sit amet libero lobortis
                </h5>
                <a href="" class="text-[#E91E63] pl-[15px] pt-[20px] pb-[15px]"
                  >Read more</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection