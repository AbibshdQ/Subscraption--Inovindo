@extends('layouts.main')

@section('container')

 
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">{{ ('Detail Subscription') }}</h1>
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="" class="text-reset">{{ ('Home') }}</a>
                        <span>/</span>
                        <a href="" class="text-reset"><u>{{ ('Detail Subscription') }}</u></a>
                    </h6>
                </nav>
            </div>

            <div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div></div> <!-- Tempat untuk menjaga jarak dengan teks -->
                    <button class="btn btn-success" onclick="window.location.href='{{ route('cetak.user.pdf') }}'">
                        <i class="fa fa-print"></i> {{ ('Print') }}
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>{{ ('Name') }}:</strong> Habib Maulana Shidiq</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>{{ ('Institution') }}:</strong> Politeknik Negeri Padang</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>{{ ('Duration (Months)') }}:</strong> 5 Months</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>{{ ('Payment Status') }}:</strong> Paid</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <a href="{{ route('payments.index') }}" class="btn btn-primary">
                                {{ __('Generate') }}
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-server" class="table table-hover table-striped nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>{{ ('No') }}</th>
                                            <th>{{ ('Month') }}</th>
                                            <th>{{ ('Payment Date') }}</th>
                                            <th>{{ ('Amount') }}</th>
                                            <th>{{ ('Status') }}</th>
                                            <th>{{ ('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailSubscriptions as $index => $detailSubscription)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $detailSubscription->month }}</td>
                                            <td>{{ $detailSubscription->payment->payment_date }}</td>
                                            <td>{{ $detailSubscription->amount_paid }}</td>
                                            <td>{{ $detailSubscription->status }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
