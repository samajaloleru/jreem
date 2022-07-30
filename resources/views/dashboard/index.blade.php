@extends('layouts.app')

@section('content')
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="flex flex-row-l flex-column w-100">
                    @include('inc.sidebar')
                        
                    <div class="w-80">
                        <div class="cf w-100">
                            <div class="dt w-100 bg-black white pa3 br3 br--right  ">
                                <div class="dtc v-mid f3">
                                    Dashboard
                                </div>
                                <div class="dtc v-mid tr">
                                    Hi {{ $LoggedUserInfo['firstname']}} {{ $LoggedUserInfo['lastname']}}
                                </div>
                            </div>
                            <div class="fl f2 w-100 h5 bg-yellow">Dashboard</div>
                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
