<link rel="stylesheet" type="text/css" href="styles/<?= basename(__FILE__, '.php') ?>.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="view-tab" data-toggle="tab" href="#view" role="tab" aria-controls="view"
               aria-selected="true">View</a>
        </li>
    <li class="nav-item">
        <a class="nav-link" id="shop-tab" data-toggle="tab" href="#shop" role="tab" aria-controls="shop"
           aria-selected="false">Shop CRUD</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order"
           aria-selected="false">Order CRUD</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="view-tab">
        <h2>Darova</h2>
    </div>
    <div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="shop-tab">

        <section class="data-section">
            <div>
                <h5>Shop</h5>
                <h5>Available shops</h5>
                <table id="shop-table">

                </table>
            </div>

            <div class="data-block">
                <div class="data-form">
                    <h5>Edit</h5>
                    <h6>Select shop:</h6>
                    <select id="shop-selector" onclick="loadShopSelector()" onmouseleave="shopSelected()">

                    </select>
                    <div>
                        <h6>Name</h6>
                        <input id="edit-shop-name" type="text" placeholder="Shop name">
                    </div>
                    <button class="btn btn-success" onclick="shopApplied()">Apply</button>
                    <button class="btn btn-danger" onclick="shopDeleted()">Delete</button>
                </div>

                <div class=data-form>
                    <h5>Add</h5>
                    <div>
                        <h6>Name</h6>
                        <input id="add-name-shop" type="text" placeholder="Shop name">
                    </div>
                    <button class="btn btn-success" onclick="shopAdd()">Add shop</button>
                </div>
            </div>
        </section>

        <section class="data-section">
            <div>
                <h5>Worker</h5>
                <h5>Available workers</h5>
                <table id="worker-table">

                </table>
            </div>

            <div class="data-block">
                <div class="data-form">
                    <h5>Edit</h5>
                    <select id="worker-selector" onclick="reloadWorkerSelector()" onmouseleave="workerSelected()">

                    </select>
                    <div>
                        <h6>Name</h6>
                        <input id="edit-name-worker" type="text" placeholder="Name">
                        <h6>Surname</h6>
                        <input id="edit-surname-worker" type="text" placeholder="Surname">
                        <h6>Rank</h6>
                        <input id="edit-rank-worker" type="text" placeholder="Rank">
                    </div>
                    <button class="btn btn-success" onclick="workerApplied()">Apply</button>
                    <button class="btn btn-danger" onclick="workerDeleted()">Delete</button>
                </div>

                <div class=data-form>
                    <h5>Add</h5>
                    <div>
                        <h6>Name</h6>
                        <input id="add-name-worker" type="text" placeholder="Name">
                        <h6>Surname</h6>
                        <input id="add-surname-worker" type="text" placeholder="Surname">
                        <h6>Rank</h6>
                        <input id="add-rank-worker" type="text" placeholder="Rank">
                    </div>
                    <button class="btn btn-success" onclick="workerAdd()">Add worker</button>
                </div>

            </div>
        </section>

        <section class="data-section">
            <div>
                <h5>Product</h5>
                <h5>Available products</h5>
                <table id="product-table">

                </table>
            </div>

            <div class="data-block">
                <div class="data-form">
                    <h5>Edit</h5>
                    <select id="product-selector" onmouseleave="productSelected()">

                    </select>
                    <div>
                        <h6>Count</h6>
                        <input id="edit-count-product" type="number" placeholder="Count">
                    </div>
                    <button class="btn btn-success" onclick="productApplied()">Apply</button>
                    <button class="btn btn-danger" onclick="productDeleted()">Delete</button>
                </div>

                <div class=data-form>
                    <h5>Add</h5>
                    <div>
                        <h6>Name</h6>
                        <input id="add-name-product" type="text" placeholder="Name">
                    </div>
                    <button class="btn btn-success" onclick="productAdd()">Add product</button>
                </div>

            </div>
        </section>

    </div>

    <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
        <section class="data-section">
            <div>
                <h5>Select shop</h5>
                <select id="order-shop-selector"
                        onclick="loadShopSelector(document.getElementById('order-shop-selector'))"
                        onmouseleave="orderShopSelected()">

                </select>
                <h5>Orders:</h5>
                <table id="order-table">

                </table>
            </div>

            <div class="data-block">
                <div class="data-form">
                    <!--                    <h5>Edit</h5>-->
                    <h5>Delete</h5>
                    <h6>Select order:</h6>
                    <select id="order-selector">

                    </select>

                    <!--                    <div>-->
                    <!--                        <h6>Client name</h6>-->
                    <!--                        <input id="edit-name-client-order" type="text" placeholder="Name">-->
                    <!--                        <h6>Client surname</h6>-->
                    <!--                        <input id="edit-surname-client-order" type="text" placeholder="Surname">-->
                    <!--                        <h6>Product</h6>-->
                    <!--                        <select id="edit-order-product-selector">-->
                    <!---->
                    <!--                        </select>-->
                    <!--                        <h6>Worker</h6>-->
                    <!--                        <select id="edit-order-worker-selector">-->
                    <!---->
                    <!--                        </select>-->
                    <!--                    </div>-->
                    <!--                    <button class="btn btn-success" onclick="orderApplied()">Apply</button>-->

                    <button class="btn btn-danger" onclick="orderDeleted()">Delete</button>
                </div>

                <div class=data-form>
                    <h5>Add</h5>
                    <div>
                        <h6>Client name</h6>
                        <input id="add-name-client-order" type="text" placeholder="Name">
                        <h6>Client surname</h6>
                        <input id="add-surname-client-order" type="text" placeholder="Surname">
                        <h6>Product</h6>
                        <select id="add-order-product-selector">

                        </select>
                        <h6>Worker</h6>
                        <select id="add-order-worker-selector">

                        </select>
                    </div>
                    <button class="btn btn-success" onclick="orderAdd()">Add order</button>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="src/<?= basename(__FILE__, '.php') ?>.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

