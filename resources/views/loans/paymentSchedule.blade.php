@if(isset($schedule))

    <div class="container">
        <div class="row">

            <div class="col-8">
                <div class="table-responsive text-center">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Pago</th>
                            <th>Capital</th>
                            <th>Interes</th>
                            <th>Balance</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($schedule as $payment)

                            <tr>
                                <td>{{number_format($payment['#'])}}</td>
                                <td>RD${{number_format($payment['payment'],2)}}</td>
                                <td>RD${{number_format($payment['capital'],2)}}</td>
                                <td>RD${{number_format($payment['interest'],2)}}</td>
                                <td>RD${{number_format($payment['balance'],2)}}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endif
