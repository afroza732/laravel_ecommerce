
@extends('front_End.master')
@section('main_content')
@section('title')
checkout || laravel ecommerce
@endsection
<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            {!! Form::open(array('url'=>'/customer-login','method'=>'post')) !!}
            <input name="email_address" type="text"  value="Email" required="" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Email';
                    }">
                    <input name="password" type="password" value="Password" required="" class="field" onfocus="this.value = '';" onblur="if (this.value == '') {
                        this.value = 'Password';
                    }">
            <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
            <div class="buttons">
                <div>
                    <button class="grey">Sign In</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="register_account">
            <h3>Register New Account</h3>
            {!! Form::open(array('url'=>'/checkout-registration','method'=>'post')) !!}
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <input type="text" required=""  name="customer_name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Name';
                                        }" >
                            </div>
                        </td>
                    <tr/>
                    <tr>
                        <td>
                            <div>
                                <input type="text"  required="" name="email_address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'E-Mail';
                                        }">
                            </div>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <input type="text" required=""  name="password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Password';
                                        }">
                            </div>
                        </td>
                    </tr> 
                </tbody>
            </table> 
            <div class="search"><div><button class="grey">Create Account</button></div></div>
            <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
            <div class="clear"></div>
            {!! Form::close() !!}
        </div>  	
        <div class="clear"></div>
    </div>
</div>

<br/>
@endsection