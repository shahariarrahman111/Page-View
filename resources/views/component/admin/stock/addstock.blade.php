<div class="layout-right">
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-content ">
                <div class="page-title d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="fw-600">Add stock</h5>
                    </div>
                    <div class="d-flex gap-4 sfbtn">
                        <a href="productdetails.html"
                           class="btn btn-primary btn-sm d-flex justify-content-center align-items-center">
                            View product
                        </a>

                    </div>
                </div>
                <div class="page-wrapper mt-3">
                    <div class="stock">
                        <div class="product-name d-flex gap-5 align-items-center justify-content-between mb-4">
                            <h6 class="w-75">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate
                                libero et
                                velit.
                            </h6>
                            <p class="w-25 text-end">Added on: 15 July, 2023</p>
                        </div>

                        <div class="addstock-form">
                            <form action="">
                                <div class="d-flex gap-4">
                                    <div class="w-50">
                                        <div class="form-group position-relative mb-3">
                                            <label for="name" class="form-label">Size</label>
                                            <div class="custom-select">
                                                <select class="select3">
                                                    <option value="">Select</option>
                                                    <option value="1">M</option>
                                                    <option value="2">SM</option>
                                                    <option value="3">L</option>
                                                    <option value="7">LX</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label for="name" class="form-label">Color</label>
                                            <div class="custom-select">
                                                <select class="select3">
                                                    <option value="">Select</option>
                                                    <option value="1">Red</option>
                                                    <option value="2">Blue</option>
                                                    <option value="3">Green</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label for="quantity" class="form-label">Stock Quantity</label>
                                            <input type="text" class="form-control" id="quantity" placeholder="quantity">
                                        </div>


                                    </div>
                                    <div class="w-50">
                                        <div class="form-group position-relative mb-3">
                                            <label for="min-quantity" class="form-label">Low Stock Warning</label>
                                            <input type="text" class="form-control" id="min-quantity"
                                                   placeholder="Low stock warning">
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label for="min-quantity" class="form-label">Note</label>
                                            <textarea name="" id="" cols="1" rows="2" class="form-control"
                                                      placeholder="Note"></textarea>
                                        </div>

                                        <button class="btn btn-primary btn-md w-100 mt-4">Save</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
