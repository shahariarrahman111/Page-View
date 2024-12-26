<div class="layout-right">
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-content ">
                <div class="page-title">
                    <div>
                        <h5 class="fw-600">Add Products</h5>
                    </div>
                </div>
                <div class="page-wrapper mt-3">
                    <div class="products">
                        <div class="product-form">
                            <form action="">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group position-relative mb-3">
                                            <label class="form-label">Product gallery (size: 350 X 350 &amp;
                                                Max 5 images)</label>
                                            <div class="image-upload-container d-flex flex-column">
                                                <div class="productMain-image">
                                                    <div class="dragDrop-area">
                                                        <input type="file" accept="image/*" name="image"
                                                               class="form-control image-upload" id="files" multiple="">
                                                        <label
                                                            class="w-100 h-100 font-14 fw-500  d-flex flex-column gap-1 align-items-center justify-content-center"
                                                            for="files">
                                                            <img src="./assets/images/icon/img_upload.svg" alt=""
                                                                 class="w-auto h-auto">
                                                            <span class="d-flex gap-2">
                                                         <p class="font-14 fw-500 ">Upload gallery or drag and drop
                                                            here</p>
                                                      </span>
                                                            <small class=" font-14 fw-400">PNG/JPEG</small></label>
                                                    </div>
                                                </div>
                                                <div class="gallery_images d-flex gap-4">
                                                    <div class="dragDrop-area position-relative">
                                                        <input type="file" class="image-upload" accept="image/*">
                                                        <label for="image-upload" class="upload-label">
                                                            <img src="../images/img_upload.png" alt="" class="w-auto h-auto">
                                                        </label>
                                                        <div class="image-preview-container">
                                                            <img class="image-preview" src="./assets/images/product.png"
                                                                 alt="Image Preview">
                                                            <img src="./assets/images/icon/close_icon_upload_img.svg" alt=""
                                                                 class="close-icon">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group position-relative mb-3">
                                            <label for="name" class="form-label">Product name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Product name">
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label for="SKU" class="form-label d-flex align-items-center gap-2">SKU
                                                <img src="./assets/images/icon/alert_16.svg" class="w-auto h-auto"
                                                     alt=""></label>
                                            <input type="text" class="form-control" id="SKU" placeholder="SKU">
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="form-label">Category</label>
                                            <div class="custom-select">
                                                <select class="select3">
                                                    <option value="">Select</option>
                                                    <option value="1">Cloth</option>
                                                    <option value="2">Mobile</option>
                                                    <option value="3">Destop</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="form-label">Sub Category</label>
                                            <div class="custom-select">
                                                <select class="select3">
                                                    <option value="">Select</option>
                                                    <option value="1">Cloth</option>
                                                    <option value="2">Mobile</option>
                                                    <option value="3">Destop</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label for="Price" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="Price" placeholder="Price">
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="" id="description" cols="1" rows="2" class="form-control"
                                                      placeholder="Type product details"></textarea>
                                        </div>
                                        <button class="btn btn-primary btn-md w-100 mt-3">Add product</button>


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
