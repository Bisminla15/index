<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
    
    <style>
        .pic{
            width: 120px;
            height: 120px;
            margin: 20px;
            float: right;
        }
        .pic1{
            width: 120px;
            height: 120px;
            margin: 20px 150px;
            float: right;
        }
        .pic2{
            width: 120px;
            height: 120px;
            margin: 300px -500px;
            float: right;
        }
        .tex{
            color: rgb(16, 88, 26);
            background-color: rgb(219, 240, 144);
            text-align: center;
            float: none;
        }
    </style>
</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-6"></div>
                <h1>จังหวัดเชียงใหม่</h1>
                <img src="https://previous.thailandtourismdirectory.go.th/images/item-hilight/head-attraction.jpg" class="img-fluid"  alt="">
            </div>

            <div class="pic">
                <div class="col-3"></div>
                <figure class="figure">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU4KooE82SHkuee1hV12n3xF6JahJu-H-Y3A&usqp=CAU" class="rounded float-start" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption">ไร่ดอกลมหนาว ม่อนแจ่ม,เชียงใหม่</figcaption>
                </figure>
            </div>
            <div class="pic1">
                <div class="col-3"></div>
                <figure class="figure">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXEtn7i1qx1DqgWFuYBXaPpSXnOYORilZ1iw&usqp=CAU" class="rounded float-end" class="figure-img img-fluid rounded" alt="">
                    <figcaption class="figure-caption">ไร่ชาลุงเดช แม่แตง,เชียงใหม่</figcaption>
                </figure>
            </div> 
        </div>
    </div>
<br>
    <div class="pic2" class="row">
        <div class="col-6"></div>
        <button id="btnBack"> back </button>
        <div id="main">
            <table>
                <thead>
                    <tr>
                        <th>ID</th> <th>Title</th><th> Details </th>
                    </tr>
                </thead>
                <tbody id="tblPosts">
                </tbody>
            </table>
        </div>
        <script>
            function showDetails(id){
                $("#main").hide();
                $("#detail").show();
                var url = "https://jsonplaceholder.typicode.com/posts/"+id;
                $.getJSON(url)
                    .done((data)=>{
                        console.log(data);
                    })
                    .fail((xhr, status, error)=>{
                    })
            }
            function loadPosts(){
                var url = "https://jsonplaceholder.typicode.com/posts";
                var i = 0;
                $.getJSON(url)
                    .done((data)=>{
                        $.each(data, (k, item)=>{
                            // console.log(item);
                            var line = "<tr>";
                                line += "<td>"+ item.id + "</td>";
                                line += "<td><b>"+ item.title + "</b><br/>";
                                line += item.body + "</td>";
                                line += "<td> <button onClick='showDetails("+ item.id +");' > link </button> </td>";
                                line += "</tr>";
                            $("#tblPosts").append(line);
                            if (i == 10){
                                loadPosts().stop();
                            };
                        });
                        $("#main").show();
                    })
                    .fail((xhr, status, error)=>{
                    })
            }
            $(()=>{
                loadPosts();
                $("#btnBack").click(()=>{
                    $("#main").show();
                });
            })
        </script>
    </div>

    <br>
    <footer>
        <div class="tex">
            Name : Bisminla Bilreem
            <div> ID : 63123996</div>
        </div>
    </footer>
</body>
</html>
