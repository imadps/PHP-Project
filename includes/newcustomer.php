<div class="row">

<div class="col-xs-6 col-md-6">
    <div class="panel panel-default">

  <div class="panel-heading">New Customer</div>
<h4 style="padding-left:16px;"> Services </h4> 

<form action="" method="post" name="formsubmit" enctype="multipart/form-data">
<input type="hidden" name="type" id="type" value="Citizen" />
<div class="radio">
  <label><input type="radio" name="service" value="Housing">Housing</label>
</div>
              
       


              <div class="radio">
  <label><input type="radio" name="service" value="Benefits">Benefits</label>
</div>
              
                   
              <div class="radio">
      <label>  <input type="radio" name="service" value="Council Tax"> Council Tax</label>


</div>
              <div class="radio">
        <label><input type="radio" name="service" value="Fly-tipping"> Fly-tipping</label>


</div>
              <div class="radio">
       <label> <input type="radio" name="service" value="Missed Bin"> Missed Bin</label>



</div>


<div class="btn-group" role="group" style="padding:20px;">
  <button type="button" class="btn btn-primary active" id="show_names" onclick="document.getElementById('type').value = 'Citizen';">Citizen</button>
  <button type="button" id="show_org" class="btn btn-primary" onclick="document.getElementById('type').value = 'Organisation';">Organisation</button>
  <button type="button" id="hide_names" class="btn btn-primary" onclick="document.getElementById('type').value = 'Anonymous';">Anonymous</button>
</div>

 <style>#organisation_field{display:none}</style>
 <div class="form-group" id="organisation_field">
  <label for="organisation">Organisation name</label>
  <input type="text" class="form-control" name="organisation">
 </div>
 
 
 <div style="" id="names_">
 
<div class="form-group">
   <label for="title">Title</label>
  <select   class="form-control" name="title" id="">
                          
                                 <option value="Mr.">Mr. </option>
                                   <option value="Mrs.">Mrs. </option>
                                     <option value="Miss.">Miss. </option>
                           </select>
       </div>                    


<div class="form-group">
  <label for="first_name">First Name</label>
  <input type="text" class="form-control" name="first_name">
</div>



<div class="form-group">
  <label for="last_name">Last Name</label>
  <input type="text" class="form-control" name="last_name">
</div>
  </div>
  <br />
   <input class="btn btn-primary" type="submit" name="submit" value="Submit" style="margin:16px;" onclick="document.getElementById('formsubmit').submit();" >


  
    </div>
</div>
</form>