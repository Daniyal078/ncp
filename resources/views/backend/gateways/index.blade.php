@extends('backend.layout.master')

@section('content')
@php
$password = "Testing$9898";
@endphp
<script>
document.addEventListener('DOMContentLoaded', function() {
    var password = prompt("Please enter the password:");
    var correctPassword = @json($password);

    if (password !== correctPassword) {
        alert("Incorrect password. You will be redirected.");
        window.location.href = "{{ url('/admin/gateway') }}"; // Redirect to the desired page
    }
});
</script>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __($pageTitle) }}</h1>
            </div>

            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header px-0">
                            <a href="{{route('admin.gateway.create')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> {{__('Create Gateway')}}</a>
                        </div>
                        <div class="card-body p-0 table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Currency')}}</th>
                                        <th>{{__('Rate')}}</th>
                                        <th>{{__('status')}}</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse ($gateways as $gateway)
                                        <tr>
                                            <td>{{$gateway->gateway_name}}</td>
                                            <td>{{$gateway ?->gateway_parameters ?->gateway_currency}}</td>
                                            <td>{{$gateway->rate}}</td>
                                            <td>
                                                <a href="{{route('admin.gateway.edit', $gateway)}}" class="btn btn-primary btn-sm">{{__('Edit')}}</a>
                                            </td>
                                        </tr>
                                    @empty

                                    <tr>
                                        <td colspan="100%" class="text-center">{{__('No Gateways Found')}}</td>
                                    </tr>
                                    @endforelse

                                </tbody>

                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
