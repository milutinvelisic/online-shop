<!--::footer_part start::-->
<footer class="footer_part">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Category</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Male</a></li>
                        <li><a href="#">Female</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Fashion</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Company</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://www.linkedin.com/in/milutin-velisic-25203a135/">Author</a></li>
                        <li><a href="Documentation.pdf">Documentation</a></li>
                        <li><a href="https://github.com/milutinvelisic/online-shop">GitHub Code</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <h4>Address</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">200, Green block, NewYork</a></li>
                        <li><a href="#">+10 456 267 1678</a></li>
                        <li><span>contact89@winter.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_footer_part">

                    <div class="social_icon">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="copyright_text">
                    <P>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </P>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="public/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="public/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="public/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="public/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="public/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="public/js/mixitup.min.js"></script>
<!-- particles js -->
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="public/js/slick.min.js"></script>
<script src="public/js/jquery.counterup.min.js"></script>
<script src="public/js/waypoints.min.js"></script>
<script src="public/js/contact.js"></script>
<script src="public/js/jquery.ajaxchimp.min.js"></script>
<script src="public/js/jquery.form.js"></script>
<script src="public/js/jquery.validate.min.js"></script>
<script src="public/js/mail-script.js"></script>
<!-- custom js -->
<script src="public/js/custom.js"></script>

<script src="public/node_modules/toastr/toastr.js"></script>
<script src="public/js/main.js"></script>
<script type="text/javascript">

    if (document.getElementById('btnLogin')) {
        document.getElementById('btnLogin').addEventListener("click", checkLogin);
    }
    function checkLogin(e){
        e.preventDefault()

        let username = document.getElementById('username').value;
        let password =  document.getElementById('password').value;
        let greske = [];

        let usernameReg = /[A-z]{5,}\d*/;
        let passwordReg = /[A-z]{5,}\d*/;

        if (!usernameReg.test(username.trim())) {
            toastr.warning("Username must contain atleast 5 letters, number is optional");
            greske.push("Username is bad")
        }

        if (!passwordReg.test(password.trim())) {
            toastr.warning("Password should be atleast 5 characters long");
            greske.push("Password is bad")
        }

        e.returnValue = true;
    }

    if (document.getElementById('btnRegister')) {
        document.getElementById('btnRegister').addEventListener("click", checkRegister);
    }
    
    function checkRegister(e) {
        e.preventDefault();

        let username = document.getElementById('username').value;
        let password = document.getElementById('password').value;
        let email = document.getElementById('email').value;
        let address = document.getElementById('address').value;
        let postalCode = document.getElementById('postalCode').value;

        let usernamereg = /^[A-z]{5,}\d{0,}/;
        let passwordreg = /^[A-z]{6,}\d{0,}/;
        let emailreg = /^[a-z]{5,}\d{0,}\@(ict.edu.rs)|(gmail.com)|(hotmail.com)$/;
        let postalCodeReg = /\d{5,}/;

        if (username == "") {
            toastr.error("Username must be filled!");
            return false;
        }

        if (!usernamereg.test(username.trim())) {
            toastr.warning("Username should be atleast 5 characters long");
            return false;
        }

        if (password == "") {
            toastr.error("Password must be filled!");
            return false;
        }

        if (!passwordreg.test(password.trim())) {
            toastr.warning("Password should be atleast 6 characters long");
            return false;
        }

        if (email == "") {
            toastr.error("Email must be filled!");
            return false;
        }

        if (!emailreg.test(email.trim())) {
            toastr.warning("Email isnt in right format!");
            return false;
        }

        if (address == "") {
            toastr.error("Address must be filled!");
            return false;
        }

        if (postalCode == "") {
            toastr.error("Postal Code must be filled!");
            return false;
        }

        if (!postalCodeReg.test(postalCode.trim())) {
            toastr.warning("Postal Code isnt in right format!");
            return false;
        }

        e.returnValue = true;
    }

    if($(".brands")){
        $(".brands").change(filterBrands)
    }

    if($(".categories")){
        $(".categories").change(filterCategories)
    }

    if($(".gender")){
        $(".gender").change(filterGenders)
    }

    function  filterGenders() {

        let gender = [];
        let list = document.getElementsByClassName("gender");
        localStorage.removeItem("genderValue");
        for(let i=0; i<list.length; i++) {
          if(list[i].checked){
              gender.push(list[i].value);

              localStorage.setItem("genderValue", gender);
          }
        }

        dataHandler()
    }

    function filterCategories() {
        let categories = [];

        let list = document.getElementsByClassName("categories");
        localStorage.removeItem('categoriesValues');
        for(let i=0; i<list.length; i++) {
            if(list[i].checked){
                categories.push(list[i].value);

                localStorage.setItem('categoriesValues', categories);
            }
        }

        dataHandler()
    }



    function filterBrands() {
        let brands = [];

        let list = document.getElementsByClassName("brands");
        localStorage.removeItem('brandsValues');
        for(let i=0; i<list.length; i++) {
            if(list[i].checked){
                brands.push(list[i].value);

                localStorage.setItem('brandsValues', brands);
            }
        }

        dataHandler()
    }
    
    function dataHandler() {

        let params = {}

        if(localStorage.getItem('genderValue') != null && localStorage.getItem('genderValue') != 0){
            let nizGender = localStorage.getItem('genderValue').split(',');

            params.gender = nizGender;
        }else{
            params.gender = [0]
        }

        if(localStorage.getItem('categoriesValues') != null && localStorage.getItem('categoriesValues') != 0){
            let nizCat = localStorage.getItem('categoriesValues').split(',');

            params.categories = nizCat;
        }else{
            params.categories = [0]
        }


        if(localStorage.getItem('brandsValues') != null && localStorage.getItem('brandsValues') != 0){

            let nizBrands = localStorage.getItem('brandsValues').split(',');

            params.brands = nizBrands;
        }else{
            params.brands = [0]
        }

        console.log(params)

        $.ajax({
            url : "index.php?page=filterShop",
            data : params,
            method : "GET",
            success : function (data) {
                printProducts(data)
            },
            error : function (xhr, status, msg) {
                console.error(xhr)
            }
        })

    }

    /***********************************/

    if($("#hiddenId")){
        var productId = $("#hiddenId").val();

    }
    function printProducts(data) {

        let html = '';
        for(let d of data){
            html += `
                <div class="col-lg-4 col-sm-6">
                        <div class="single_category_product">
                            <div class="single_category_img">
                                <img src="public/img/${d.imageLarge}" alt="${d.productName}">
                                <div class="category_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-bag"></i></a></li>
                                    </ul>
                                </div>
                                <div class="category_product_text">
                                    <a href="index.php?page=product&id=${d.idProduct}">
                                        <h5>Long Sleeve TShirt</h5>
                                    </a>
                                    <p>$${d.productPrice}.00</p>
                                </div>
                            </div>
                        </div>
                    </div>`
        }

        document.getElementById('products').innerHTML = html
    }

    if($(".ti-minus")){
        $(".ti-minus").click(DecQt);
    }

    if($(".ti-plus")){
        $(".ti-plus").click(IncQt);
    }



    function DecQt(){
        var quntityBox = $("#quntityBox").val();
        if(quntityBox > 1){
            quntityBox -= 1;
            $("#quntityBox").val(quntityBox);
            GetPriceForProduct(productId, quntityBox);
        }
    }

    function IncQt(){
        var quntityBox = parseInt($("#quntityBox").val());
        quntityBox = quntityBox + 1;
        $("#quntityBox").val(quntityBox);
        GetPriceForProduct(productId, quntityBox);
        // console.log(productId)
    }

    function GetPriceForProduct(idProduct, quntityBox){
        $.ajax({
            url : "index.php?page=productPrice",
            data : {
                idProduct : idProduct
            },
            method : "GET",
            success : function(data){
                // console.log(data)
                document.querySelector("#priceBox").innerHTML="$"+ (data.productPrice) * quntityBox + ".00";
            },
            error: function(xhr,error,message){
                console.error(xhr);
            }
        })
    }

    if($("#addToCart")){
        $("#addToCart").click(addToCart)
    }

    function addToCart(e){
        e.preventDefault();

        let productId = $("#hiddenId").val();
        let quantity = $("#quntityBox").val();

        let priceBox = document.querySelector("#priceBox").textContent;
        let priceSplited = priceBox.split("$");

        let products = productsInCart();

        if(products) {
            if(productIsAlreadyInCart()) {
                updateQuantity();
            } else {
                addToLocalStorage()
            }
        } else {
            addFirstItemToLocalStorage();
        }

        // alert("Cart successfully updated!");

        toastr.success("Product Added To Cart!");

        function productsInCart() {
            return JSON.parse(localStorage.getItem("product"));
        }
        function productIsAlreadyInCart() {
            return products.filter(p => p.id == productId).length;
        }

        function updateQuantity() {
            let products = productsInCart();
            for(let i in products)
            {
                if(products[i].id == productId) {
                    products[i].quantity+=parseInt(quantity);
                    products[i].price+=parseInt(priceSplited[1]);
                    break;
                }
            }

            localStorage.setItem("product", JSON.stringify(products));
        }

        function addToLocalStorage() {
            let products = productsInCart();
            products.push({
                id : productId,
                quantity : parseInt(quantity),
                price : parseInt(priceSplited[1])
            });
            localStorage.setItem("product", JSON.stringify(products));
        }

        function addFirstItemToLocalStorage() {
            let products = [];
            products[0] = {
                id : productId,
                quantity : parseInt(quantity),
                price : parseInt(priceSplited[1])
            };
            localStorage.setItem("product", JSON.stringify(products));
        }
    }

    let products = productsInCart();

    function productsInCart() {
        return JSON.parse(localStorage.getItem("product"));
    }
    // total
    function cartTotal(){
        let products = productsInCart();
        let x = 0;
        for(let p of products){
            x += parseInt(p.price);
        }
        if(document.getElementById("total")){
            document.getElementById("total").innerHTML = "$" + x + ".00";
        }

    }


    if(!products.length){
        // showEmptyCart();
    }
    else{
        displayCartData();
    }



    function displayCartData() {
        let products = productsInCart();
        // numberInCart();

        $.ajax({
            url : "index.php?page=productCart",
            method: "GET",
            success : function(data) {
                // console.table(data)
                let converted = data;
                for(let c of converted){
                    for(let prod of products){
                        if(c.idProduct == prod.id){
                            prod.name = c.productName;
                            prod.img = c.imageLarge;
                        }
                    }
                }
                generateTable(products);
                generateOrderList(products)
                $(".ti-close").click(deleteFromCart);
                function deleteFromCart(){
                    let id = $(this).data("id");
                    let products = productsInCart();
                    let filtered = products.filter(p => p.id != id);

                    localStorage.setItem("product", JSON.stringify(filtered));
                    if(document.getElementById("total")){
                        var xx = document.getElementById("total").textContent.split("$")
                    }
                   if(xx){
                       if(parseInt(xx[1].split(".")[0]) != 0){
                           document.getElementById("checkout").style.display = "block";
                       }
                   }
                    displayCartData();

                }
            }
        });
        cartTotal();

    }

    function generateTable(products){
        if(document.getElementById("total")){
            var xx = document.getElementById("total").textContent.split("$")
        }


        var html = `
                    <table class="table" >
          <thead>
            <tr>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
        `;
        for(let p of products)
        {
            html += `
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img src="public/img/${p.img}" alt="${p.img}" style="height: 100px;" />
                  </div>
                  <div class="media-body">
                    <p>${p.name}</p>
                  </div>
                </div>
              </td>
              <td>
                <h5>$${p.price}.00</h5>
              </td>
              <td>
                <div class="product_count">
                  <input class="input-number" type="text" value="${p.quantity}" min="0" max="10">
                </div>
              </td>
              <td class="close-td"><i class="ti-close" data-id="${p.id}"></i></td>
            </tr>
            `;
        }
        html +=`
        </tbody>
            </table>
        `;
        if(document.getElementById("insertCart")){
            document.getElementById("insertCart").innerHTML = html;
        }


        if(xx){
            if(parseInt(xx[1].split(".")[0]) != 0){
                document.getElementById("checkout").style.display = "block";
            }
        }
    }

    function generateOrderList(data) {

        var html1 = `<div class="order_box">
            <h2>Your Order</h2>
            <ul class="list">
              <li>
                <a href="#">Product
                  <span>Total</span>
                </a>
              </li>`;
        for(let d of data){
            html1 += `<li>
                <a href="#" data-id="${d.id}" >${d.name}
                  <span class="middle">x ${d.quantity}</span>
                  <span class="last">$${d.price}.00</span>
                </a>
              </li>`;
        }

        let x = 0;
        for(let d of data){
            x += parseInt(d.price);
        }

        html1 += `</ul>
            <ul class="list list_2">

              <li>
                <a href="#" id="total">Total
                  <span>$${x}.00</span>
                </a>
              </li>
            </ul>
            <a class="btn_3" href="#" id="placeOrder">PAY</a>
          </div>`;



        if(document.getElementById("orderList")){
            document.getElementById("orderList").innerHTML = html1;
        }

        if($("#placeOrder")){
            $("#placeOrder").click(function (e) {

                e.preventDefault();
                placeOrder()
            });
        }
    }

    if($("#placeOrder")){
        $("#placeOrder").click(function (e) {

            e.preventDefault();
            placeOrder()
        });
    }

    function placeOrder(){
        let productsInStorage = productsInCart();
        console.log(productsInStorage)
        $.ajax({
            url: "index.php?page=inertOrder",
            method: "POST",
            data: {
                productsInStorage: productsInStorage
            },
            success: function(data){
                console.log(data)
                toastr.success("Successfully ordered!");
                localStorage.setItem('product',JSON.stringify([]));
                // generateList();
            },
            error: function(xhr, error, message){
                console.error(xhr);
            }
        })
    }


</script>
</body>

</html>
