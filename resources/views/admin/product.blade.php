<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insert') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class=" mx-auto mt-20 mb-20">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
                            @foreach ($products as $product)
                                <div class="col col-xs-12 col-sm-6 col-lg-3 col-xxl-3 container d-flex justify-content-center">
                                    <div class="s card flex-row flex-wrap border-0" style="width: 15rem;">
                                        <img src="/images/{{ $product->p_img }}" class="card-img-left img-fluid productpng"
                                            alt="..." onclick="window.location.href='water-bank-product.html';">
                                        <div class="card-body">
                                            <h6 class="card-title text-center" style="font-size:16px">{{ $product->p_name_fr }}
                                            </h6>
                                            <h6 class="card-title text-center" style="font-size:16px">{{ $product->p_name_ar }}
                                            </h6>
                                            <button class="btn rounded-5 btn btn-primary col-11"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                onclick="window.location.href='{{ route('edit_product', $product->id) }}';">
                                                <span class="text">edit</span>
                                            </button>
                                            <button class="btn rounded-5 btn btn-danger col-11"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                onclick="window.location.href='{{ route('destroy_product', $product->id) }}';">
                                                <span class="text">delet</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
