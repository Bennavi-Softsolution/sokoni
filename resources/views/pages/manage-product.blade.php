@extends('layouts.app2')

@section('manage-product')

<div class="container-fluid mt-4">
    <div class="row mb-3">
        <!--Add item button starts here-->
        <div class="col-md-6 text-right">
            <button type="button" class="btn" style="background-color:#EE1313;color:whitesmoke;" data-toggle="modal" data-target="#exampleModal">
                <i class="bi bi-plus-circle-fill"></i> Add Item
            </button>
        </div>
          <!--Add item button ends here-->

        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Search products...">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col"><div class="dropdown">
                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div></th>
                    <th scope="col"><div class="dropdown">
                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Brand
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div></th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Product 1</td>
                    <td>Category A</td>
                    <td>Brand X</td>
                    <td>10</td>
                    <td>$19.99</td>
                    <td>
                        <button href="#" class="btn btn-sm btn-outline-primary mb-1 mb-sm-0 mr-2" type="button"data-toggle="modal" data-target=".bd-example-modal-lg" >
                            <i class="bi bi-pencil-fill"></i> Edit
                        </button>
                        <a href="#" style="background-color:#EE1313;color:whitesmoke;" class="btn btn-sm btn-custom" onclick="return confirm('Are you sure?');">
                            <i class="bi bi-trash-fill"></i> Delete
                        </a>
                    </td>
                </tr>
                <!-- More rows... -->
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

</div>





<!--Add item popup message starts here-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" required>Product Name:</label>
            <input type="text" class="form-control" id="product-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Category:</label>
            <input type="text" class="form-control" id="category-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" required>Brand:</label>
            <input type="text" class="form-control" id="brand-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" required>Quantity:</label>
            <input type="text" class="form-control" id="quantity-size">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" required>Price:</label>
            <input type="text" class="form-control" id="item-price">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-custom">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Add item popup message ends here-->

<!-- Edit Product Pop up message starts here-->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" required>Product Name:</label>
            <input type="text" class="form-control" id="product-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Category:</label>
            <input type="text" class="form-control" id="category-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" required>Brand:</label>
            <input type="text" class="form-control" id="brand-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" required>Quantity:</label>
            <input type="text" class="form-control" id="quantity-size">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label" required>Price:</label>
            <input type="text" class="form-control" id="item-price">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-custom">Submit</button>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- Edit Product Pop up message ends here-->

<!-- CDN javascript linking starts here-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--CDN javascript linking ends here-->