<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<!--                <x-jet-welcome />-->

                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header">Bank Details</div>
                                <div class="card-body">
                                    <a href="{{ url('/bankDetailsController/create') }}" class="btn btn-success btn-sm" title="Add New Bank">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Bank
                                    </a>
                                    <br/>
                                    <br/>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Telephone</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
<!--                                            <tbody>-->
<!--                                            @foreach($bankDetailsController as $item)-->
<!--                                            <tr>-->
<!--                                                <td>{{ $loop->iteration }}</td>-->
<!--                                                <td>{{ $item-> }}</td>-->
<!--                                                <td>{{ $item->address }}</td>-->
<!--                                                <td>{{ $item->mobile }}</td>-->
<!--                                                <td>-->
<!--                                                    <a href="{{ url('/bankDetails/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>-->
<!--                                                    <a href="{{ url('/bankDetails/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>-->
<!--                                                    <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">-->
<!--                                                        {{ method_field('DELETE') }}-->
<!--                                                        {{ csrf_field() }}-->
<!--                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>-->
<!--                                                    </form>-->
<!--                                                </td>-->
<!--                                            </tr>-->
<!--                                            @endforeach-->
<!--                                            </tbody>-->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
