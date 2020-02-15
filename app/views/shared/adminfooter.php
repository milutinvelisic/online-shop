</div>
<script src="public/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!--<script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>-->
<!--<script src="public/assets/vendor/slimscroll/jquery.slimscroll.js"></script>-->
<!--<script src="public/assets/vendor/multi-select/js/jquery.multi-select.js"></script>-->
<!--<script src="public/assets/libs/js/main-js.js"></script>-->
<!--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
<!--<script src="public/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>-->
<!--<script src="public/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>-->
<!--<script src="public/assets/vendor/datatables/js/data-table.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>-->
<!--<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>-->
<script src="public/node_modules/toastr/toastr.js"></script>

<script type="text/javascript">

    $(document).on("click", ".deleteUser", function (e) {
        e.preventDefault()

        let id = $(this).data('id')

        $.ajax({
            url : "index.php?page=deleteUser",
            method : "POST",
            type : "JSON",
            data : {
                id : id
            },
            success : function (data) {
                toastr.success("User deleted")
                generateUserTable(data)
            },
            error : function (xhr) {
                toastr.error(xhr.text)
            }
        })
    })

    if($("#btnInsertUser")){
        $("#btnInsertUser").click(function (e) {
            e.preventDefault()

            let username = $("#username").val()
            let password = $("#password").val()
            let email = $("#email").val()
            let address = $("#address").val()
            let postalCode = $("#postalCode").val()

            let nameReg = /^[A-z]{6,}\d*/;
            let postalCodeReg = /^\d{5}$/;
            let emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

            if(username == ""){
                toastr.error("Username must be filled!")
                return false
            }

            if(!nameReg.test(username)){
                toastr.error("Username should be atleast 6 characters long")
                return false
            }

            if(password == ""){
                toastr.error("Password must be filled!")
                return false
            }

            if(!nameReg.test(password)){
                toastr.error("Email should be atleast 6 characters long")
                return false
            }

            if(email == ""){
                toastr.error("Email must be filled!")
                return false
            }

            if(!emailReg.test(email)){
                toastr.error("Email isnt in right format")
                return false
            }

            if(address == ""){
                toastr.error("Address must be filled!")
                return false
            }

            if(postalCode == ""){
                toastr.error("Password must be filled!")
                return false
            }

            if(!postalCodeReg.test(postalCode)){
                toastr.error("Postal Code must be 5 numbers long")
                return false
            }

            $.ajax({
                url : "index.php?page=insertUser",
                method : "POST",
                type : "JSON",
                data : {
                    username : username,
                    password : password,
                    email : email,
                    address : address,
                    postalCode : postalCode
                },
                success : function (data) {
                    toastr.success("User inserted")
                    generateUserTable(data)
                },
                error : function (xhr) {
                    toastr.error(xhr.text)
                }
            })
        })
    }

    $(document).on("click", ".deleteProduct", function (e) {
        e.preventDefault()

        let id = $(this).data('id')

        $.ajax({
            url : "index.php?page=deleteProduct",
            method : "POST",
            type : "JSON",
            data : {
                id : id
            },
            success : function (data) {
                toastr.success("Product deleted")
                generateProductTable(data)
            },
            error : function (xhr) {
                toastr.error(xhr.text)
            }
        })
    })

    if($("#btnInsertProduct")){
        $("#btnInsertProduct").click(function (e) {
            e.preventDefault()
            let str = $("#insertProduct").serialize();
            let productName = $("#productName").val()
            let description = $("#description").val()
            let productPrice = $("#productPrice").val()
            let cat = $("#cat").val()
            let gender = $("#gender").val()
            let brands = $("#brands").val()
            let sizes = $("#sizes").val()
            let quantity = $("#quantity").val()
            let productPicture = document.getElementById("productPicture").files[0];
            let productPictureName = $("#productPicture").val().split("\\")[2]

            if(productName == ""){
                toastr.error("Product name must be filled!")
                return false
            }


            if(description == ""){
                toastr.error("Description must be filled!")
                return false
            }


            if(productPrice == ""){
                toastr.error("Product price must be filled!")
                return false
            }

            if(sizes == ""){
                toastr.error("Sizes field must be filled!")
                return false
            }

            if(quantity == ""){
                toastr.error("Quantity field must be filled!")
                return false
            }

            var formData = new FormData();
            formData.append("productName", productName);
            formData.append("description", description);
            formData.append("productPrice", productPrice);
            formData.append("cat", cat);
            formData.append("gender", gender);
            formData.append("brands", brands);
            formData.append("sizes", sizes);
            formData.append("quantity", quantity);
            formData.append("productPicture", productPicture);

            $.ajax({
                url : "index.php?page=insertProduct",
                method : "POST",
                contentType: false,
                data : formData,
                processData: false,
                success : function (data, text, hr) {
                    toastr.success("Product inserted")
                    console.table(data)
                    console.warn(text)
                    console.warn(hr)
                    generateProductTable(data)
                },
                error : function (xhr) {
                    toastr.error(xhr.text)
                    console.error(xhr)
                }
            })
        })
    }

    function generateUserTable(data) {
        let html = ''

        for(let d of data){
            html += `<tr>
                        <td>${d.idUser}</td>
                        <td>${d.username}</td>
                        <td>${d.password}</td>
                        <td>${d.email}</td>
                        <td>${d.address}</td>
                        <td>${d.postalCode}</td>
                        <td><a href="#" class="deleteUser" data-id="${d.idUser}"><i class="fa fa-close pl-3"></i></a></td>
                    </tr>`
        }

        $("#generateUserTable").html(html)

        document.getElementById("insertUser").reset();

    }

    function generateProductTable(data) {
        let html = ''

        for(let d of data){
            html += `<tr>
                        <td>${d.idProduct}</td>
                        <td>${d.productName}</td>
                        <td>${d.productDescription}</td>
                        <td>${d.productPrice}.00$</td>
                        <td>${d.CategoryName}</td>
                        <td>${d.GenderName}</td>
                        <td>${d.BrandName}</td>
                        <td><a href="#" class="deleteProduct" data-id="${d.idProduct}"><i class="fa fa-close pl-3"></i></a></td>
                    </tr>`
        }

        $("#generateProductTable").html(html)

        document.getElementById("insertProduct").reset();

    }

</script>
</body>

</html>