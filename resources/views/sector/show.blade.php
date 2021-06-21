@extends('layouts.app')

@section('contenu')


<section class="text-blueGray-600 ">
    <div class="container px-5 py-24 mx-auto">
        <div class="w-full mx-auto overflow-auto lg:w-2/3">
            <table class="w-full text-left whitespace-no-wrap table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> IP</th>
                        <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> CEFRAN</th>
                        <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> PCI</th>
                        <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> POSITION</th>
                        <th class="px-4 py-2 text-sm font-medium tracking-widest text-blueGray-500 title-font"> DIRECTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sectors as $sector)
                    <tr class="items-center">
                        <td class="px-4 py-2 text-black bg-blueGray-50">{{$sector->ipmonitoring}}</td>
                        <td class="px-4 py-2 text-black bg-blueGray-50">{{$sector->earfcn}}</td>
                        <td class="px-4 py-2 text-black bg-blueGray-50">{{$sector->pci}}</td>
                        <td class="px-4 py-2 text-black bg-blueGray-50">{{$sector->position}}</td>
                        <td class="px-4 py-2 text-black bg-blueGray-50">{{$sector->direction}}</td>
                        <td class="px-4 py-2 text-lg bg-blueGray-50">
                            <button role="button" class="px-4 py-2 mx-auto text-base font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">Buy Now </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection
