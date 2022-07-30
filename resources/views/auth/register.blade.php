@extends('layouts.app')

@section('content')
    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="mw6 center items-center flex flex-column ph2" style="max-width:30rem">
            
                    <section class="tl pa4 w-100 b--light-blue bg-shadow black br3 flex flex-column ba h-100">
                        <form action="{{url('/register')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <p class="fw6 tc w-100 pv3 f3 ttu dark-blue">Register</p>
                            <div class="fl w-100">
                                <div class="fl w-50 pr2">
                                    <label class="pv1 f6">First Name</label>
                                    <div class="bg-white br1 ba b--light-blue br2">
                                        <input type="text" required name="firstname" class="w-100 br2 bn pa2"/>
                                    </div>
                                </div>
                                
                                <div class="fl w-50 pl2">
                                    <label class="pv1 f6">Last Name</label>
                                    <div class="bg-white br1 ba b--light-blue br2">
                                        <input type="text" required name="lastname" class="w-100 br2 bn pa2"/>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="fl w-100 mt3">
                                <div class="fl w-60 pr2">
                                    <label class="pv1 f6">Email</label>
                                    <div class="bg-white br1 ba b--light-blue br2">
                                        <input type="text" required name="email" class="w-100 br2 bn pa2"/>
                                    </div>                            
                                </div>
                                    
                                <div class="fl w-40 pl2">
                                    <label class="pv1 f6">Phone Number</label>
                                    <div class="bg-white br1 ba b--light-blue br2">
                                        <input type="tel" name="mobile" class="w-100 br2 bn pa2"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="fl w-100 mv3">
                                <label class="pv1 f6">Password</label>
                                <div class="bg-white br1 ba b--light-blue br2 flex">
                                    <input type="password" required name="password" class="w-100 br2 bn pa2"/>
                                </div>
                            </div>
                            
                            <div class="fl w-100 mv3">
                                <button type="submit" class="bg-blue tc heartbeat pa3 white w-100 br2 f5 f4-ns">Sign up</button>
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </section>
@endsection