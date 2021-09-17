@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="login ">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                      <div class="logo">
                          <img src="{{ url('assets/img/logo-lick 1.svg') }}" alt="">
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Email</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Senha</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row center-align">
                        <button class="btn waves-effect btn-large waves-light" type="submit" name="action">Login

                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
