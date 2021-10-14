<p>Orders</p>
<select id="orders" onchange="getDetail(this.value);">
    
</select>

<p>Order details</p>
<select id="order-details" onchange="getProduct(this.value);">
    
</select>

<p>Product detail</p>
<div id="product"></div>

<script type="text/javascript">
    function getOrders() {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-orders.php", true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                var html = "<option>Select order</option>";
                for (var a = 0; a < response.length; a++) {
                    html += "<option value='" + response[a].orderNumber + "'>";
                        html += response[a].orderNumber;
                    html += "</option>";
                }
                document.getElementById("orders").innerHTML = html;
            }
        };
    }

    function getDetail(orderNumber) {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-order-detail.php?orderNumber=" + orderNumber, true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                var html = "<option>Select product code</option>";
                for (var a = 0; a < response.length; a++) {
                    html += "<option value='" + response[a].productCode + "'>";
                        html += response[a].productCode;
                    html += "</option>";
                }
                document.getElementById("order-details").innerHTML = html;
            }
        };
    }

    function getProduct(productCode) {
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "get-product.php?productCode=" + productCode, true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                var html = "";
                html += "<p>Title: " + response.productName + "</p>";
                
                document.getElementById("product").innerHTML = html;
            }
        };
    }

    getOrders();
</script>