<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Add Burger Food</h1>

<div class="card mb-4 mt-4 col-md-8">
<div class="card-header">
<i class="fas fa-table me-1"></i>
Add Burger Food
</div>
<div class="card-body">
<form>

<div class="form-group mt-3">
<label class="text-success">Select Burger CategoryName </label>
<select  name="categoryname" placeholder="Burger Category"  class="form-control mt-2">
<option value="">-select Burger Category-</option>
<option value=""></option>    
</select>
</div>
<div class="form-group mt-3">
<label class="text-success">Enter Burger Food Name </label>
<input type="text" name="burgername" placeholder="Burger Category"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">select Burger Photo </label>
<input type="file"  name="photo" placeholder="Burger Photo"  class="form-control mt-2">
</div>
<div class="form-group mt-3">
<label class="text-success">select qty </label>
<input type="number" value="1" min="1" max="100" name="qty" placeholder="Burger Category"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter Old Price </label>
<input type="text"  name="old-price" placeholder="Burger Old Price"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter New Price </label>
<input type="text"  name="new-price" placeholder="Burger New Price"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<label class="text-success">Enter Burger Details </label>
<textarea type="text"  name="details" placeholder="Burger Burger Details"  class="form-control mt-2"></textarea>    
</div>

<div class="form-group mt-3">
<label class="text-success">Added Date </label>
<input type="date" name="added_date" placeholder="Added Date"  class="form-control mt-2">
</div>

<div class="form-group mt-3">
<input type="submit" name="add-food" class="btn btn-dark text-white mt-2" value="Add Food">
<input type="reset" name="reset"  class="btn btn-danger text-white mt-2" value="Reset"> 
</div>
</form>
</div>
</div>
</div>

</div>
</div>