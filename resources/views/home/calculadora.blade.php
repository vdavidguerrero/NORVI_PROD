@extends('layout')

@section('content')


    <h1>Datos del prestamo</h1>


    <form class="form" method="POST" action="/home/calcular">
        {{csrf_field()}}
        <div class="row">
            <div class="col-3">

                <div class="form-group">
                    <label for="exampleInputEmail1">Monto</label>
                    <input name="monto" type="input" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" required value={{old('monto')}}>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Plazo (meses)</label>
                    <input value="{{old('plazo')}}" name="plazo" type="input" class="form-control"
                           id="exampleInputPassword1" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Interes Mensual</label>
                    <input value="{{old('interes')}}" name="interes" type="input" class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp" required>
                </div>
            </div>


            <div class="col-4">

                <div class="form-group">
                    <label for="exampleInputPassword1">Gastos De Cierre</label>
                    <input value="{{old('gastosDeCierre')}}" name="gastosDeCierre" type="input" class="form-control"
                           id="exampleInputPassword1" required>
                </div>

                <div class="form-group">
                    <label for="exampleSelect2">Tipo De Calculo</label>
                    <select multiple class="form-control" id="exampleSelect2" name="tipo" required>
                        <option value="amortizado">Amortizado</option>
                        <option value="interesSolamente">Solo Interes</option>
                        <option value="interesFijo">Interes Fijo</option>
                        <option value="inversion">Inversion</option>
                    </select>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <button class="btn btn-secondary btn-lg" type="submit">Calcular</button>
                </div>
            </div>
        </div>
    </form>




    </div>


    @include ('errors')


    <div class="row">

        <div class="col-7">
            @if (!empty($cuota))
                {{$cuota}}

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Pago</th>
                            <th>Capital</th>
                            <th>Interes</th>
                            <th>Balance</th>
                        </tr>
                        </thead>


                        @if (mont(old('monto')>0))
                            <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>Lorem</td>
                                <td>ipsum</td>
                                <td>dolor</td>
                                <td>sit</td>
                                <td>sit</td>
                            </tr>
                            </tbody>
                        @endif


                    </table>
                </div>

            @endif
        </div>

    </div>

@endsection
