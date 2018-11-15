@extends('layout')

@section('content')




    <div class="container">
        <h1 class="card-title">Prestamo</h1>
        <form class="form" method="POST" action="loans">
            {{csrf_field()}}

            <div class="container">
                <div class="row">
                    <div class="col-8">

                        <div class="form-group">
                            <button class="btn btn-secondary" type="submit">Calcular</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-4">



                        <div class="form-group">
                            <label for="exampleInputEmail1">Monto</label>
                            <input name="amount" type="input" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" required value={{old('amount')}}>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Plazo (meses)</label>
                            <input value="{{old('term')}}" name="term" type="input" class="form-control"
                                   id="exampleInputPassword1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Interes Mensual</label>
                            <input value="{{old('interest')}}" name="interest" type="input" class="form-control"
                                   id="exampleInputEmail1"
                                   aria-describedby="emailHelp" required>
                        </div>


                    </div>


                    <div class="col-4">

                        <div class="form-group">
                            <label for="exampleInputPassword1">Gastos De Cierre</label>
                            <input value="{{old('origination_fee')}}" name="origination_fee" type="input"
                                   class="form-control"
                                   id="exampleInputPassword1" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect2">Tipo De Calculo</label>
                            <select multiple class="form-control"  name="type" required>
                                <option value="amortized">Amortizado</option>
                                <option value="interest_only">Solo Interes</option>
                                <option value="fixed_interest">Interes Fijo</option>
                            </select>
                        </div>


                    </div>

                </div>
            </div>
        </form>
    </div>

    @include ('errors')

    @include ('loans/paymentSchedule')

@endsection
