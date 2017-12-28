@extends('layout.default') 
@section ('content')
<body>
<div id="wrapper" class="container-fluid">
<div id="content-wrap">
		<div class="row">
			<div class="col-md-12">
                <div class="top-title">
                    <h1>VACCINATION MANAGEMENT</h1>
                    <div class="top-title-right">
                       <input type="button" class="cmn-btn btn-green" value="Save"/>
                       <input type="button" class="cmn-btn btn-blue" value="+ Add New"/>
                       
                    </div>
                </div>
                <div class="row">
                  <div class="grid">
                        <form class="vacccin-manage-form" id='myform'  method='POST' action='#'>
                            <table class="tbl">
                        <tr>
                            <th>Vaccine Name</th>
                            <th>Brand</th>
                            <th>Lower Age/Upper Age</th>
                            <th>Age Group</th>
                            <th>Dependent</th>
                            <th>Predecessor</th>
                            <th>Deactivate/Activate</th>
                         </tr>
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="BCG" disabled></td>
                            <td><label class="normal-w">Tubervac</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>Birth</option>
                                        <option>Birth</option>
                                        <option>Birth</option>
                                        <option>Birth</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>
                                
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="HEP B1" disabled></td>
                            <td><label class="normal-w">On, Top, Mk</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>Birth</option>
                                        <option>Birth</option>
                                        <option>Birth</option>
                                        <option>Birth</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox" checked>
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>
                                
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="OPV 0" disabled></td>
                            <td><label class="normal-w">Biomed</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>
                            <tr>
                            <td><input type="text" class="normal-w vacc-name" value="DTP 1" disabled></td>
                            <td><label class="normal-w">Newut</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="HIB 1" disabled></td>
                            <td><label class="normal-w">Himalaya</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>        
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="HEB B2" disabled></td>
                            <td><label class="normal-w">Tubervac, On</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr> 
                            <tr>
                            <td><input type="text" class="normal-w vacc-name" value="PCV 1" disabled></td>
                            <td><label class="normal-w">Tubervac, Mk</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox" checked>
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>  
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="DTP 2" disabled></td>
                            <td><label class="normal-w">Tubervac</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox" checked>
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr> 
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="OPV-D" disabled></td>
                            <td><label class="normal-w">Newut</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>
                         <tr>
                            <td><input type="text" class="normal-w vacc-name" value="Rotavirus 1" disabled></td>
                            <td><label class="normal-w">Newut</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox" checked>
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>
                        <tr>
                            <td><input type="text" class="normal-w vacc-name" value="DTwP2" disabled></td>
                            <td><label class="normal-w">Himalaya</label></td>
                            <td><label class="medium-w">0-1825 days</label></td>
                            <td><select class="medium-w age"><option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                        <option>6 weeks</option>
                                </select>
                            </td>
                            <td>
                                <select class="small-w"><option>On</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                                <div class="quantity-sec">
                                    <input type='button' value='-' class='qtyminus' field='quantity' />
                                    <input type='text' name='quantity' value='0' class='qty' />
                                    <input type='button' value='+' class='qtyplus' field='quantity' />
                                </div>
                            </td>
                            <td>
                                 <select class="medium-w"><option>Select</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                        <option>sub</option>
                                </select>
                            </td>
                            <td>
                                <div class="medium-w center">
                                  <label class="switch">
                                      <input type="checkbox">
                                      <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                          </tr>
                        
                      
                    
                         
                       
                    </table>    
                </form> 
                </div>
                </div>
				
                
			</div>
		</div>
		</div>
		</div>
		</body>
@endsection
		
		
		