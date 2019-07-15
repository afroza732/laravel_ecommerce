
@extends('front_End.master')
@section('main_content')
@section('title')
shipping info || shop ecommerce
@endsection

<div class="main">
    <div class="content">
        <div class="register_account">
            <h3>Shipping  Info</h3>
            {!! Form::open(array('url'=>'/save-shipping','method'=>'post')) !!}
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <input type="text" required=""  name="shipping_name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Name';
                                        }" >
                            </div>
                        </td>

                        <td>
                            <div>
                                <input type="text" required=""  name="email_address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'E-Mail';
                                        }">
                            </div>
                        </td>   
                    <tr/>               
                    <tr>
                        <td>
                            <div>
                                <input type="text" required=""  name="password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Password';
                                        }" >
                            </div>
                        <td>
                            <div>
                                <input type="text" required=""  name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Phone';
                                        }" >
                            </div>
                        </td>
                        
                    <tr>
                        <td>
                            <div>
                                <input type="text" required=""  name="address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Address';
                                        }">
                            </div>
                        </td> 
                        <td>
                            <div>
                                <input type="text" required=""  name="city" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'City';
                                        }">
                            </div>
                        </td>
                    </tr> 
                    <tr/>
                    <tr>
                        <td>
                            <div>
                                <input type="text" required=""  name="country" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Country';
                                        }">
                            </div>
                        </td>
                        <td>
                            <div>
                                <input type="text" required=""  name="zip_code" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Zip Code';
                                        }">
                            </div>
                        </td>
                    </tr>  
                </tbody>
            </table> 

            <div class="search"><div><button class="grey">Submit</button></div></div>
        </div>
        {!! Form::close() !!}
    </div>  

    <div class="clear"></div>
</div>
<br/>
<br/>
@endsection