@extends('layouts.app')

@section('content')
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="mw6 center items-center flex flex-column ph2" style="max-width:30rem">
            
            
                    
                    <section class="tl pa4 w-100 b--light-blue bg-shadow black flex flex-column ba h-100">
                        <form action="{{url('/login')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <p class="fw6 tc w-100 f3 pv3 ttu dark-blue">Sign In</p>
                            
                            <div class="fl w-100 mv3">
                                <label class="pv1 f6">Email</label>
                                <div class="bg-white br1 ba b--light-blue br2 flex">
                                    <input type="email" name="email" class="w-100 br2 bn pa2"/>
                                </div>
                            </div>

                            <div class="fl w-100 mv3">
                                <label class="pv1 f6">Password</label>
                                <div class="bg-white br1 ba b--light-blue br2 flex">
                                    <input type="password" required name="password" class="w-100 br2 bn pa2"/>
                                </div>
                            </div>
                            
                            <div class="fl w-100 mv3">
                                <button type="submit" class="bg-blue tc heartbeat pa3 white w-100 br2 f5 f4-ns">Sign in</button>
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </section>
@endsection