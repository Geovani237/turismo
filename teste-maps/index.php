<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps Api</title>
    <link rel="stylesheet" href="style.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Pontos Turisticos</h1>

    <div id="map"></div>

    <!-- Colocar um PHP passando as variáveis do banco, e depois no JavaScript colocar essa variáveis em outras variáveis, e passar para o MarkerArray para colocar outro ponto na tela!-->


    <?php


    // Conexão com o banco de dados
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'db_maps');

    // Consulta SQL para obter as informações do banco
    $sql = "SELECT nome, telefone, endereco, foto, link , latitude, longitude FROM t_cadastro";

    // Executa a consulta e armazena os resultados em um array
    $resultado = mysqli_query($conn, $sql);
    //$dados = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    // Converte os dados para o formato JSON
    //$json = json_encode($dados);


    $marcas = [];
    while ($dados = mysqli_fetch_assoc($resultado)) {

        $local = [
            'location' => [
                'lat' => $dados["latitude"],
                'lng' =>  $dados["longitude"]
            ],
            'content' => '<a href='. $dados["link"] . ' target="_blank"><img src="' . $dados["foto"] . '" width="400" height="300" alt="foto"> </a>
            <br>
            <h2>' . $dados["nome"] . ' </h2>
            <p>' . $dados["endereco"] . '</p>
            <p>' . $dados["telefone"] . '</p> '
        ];
        array_push($marcas, $local);
    }

    $jsonMarcas = json_encode($marcas, JSON_NUMERIC_CHECK);

    

    ?>











    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGfsr1MLtt0mYOVw_7n6YBYyUQgr0HpTQ&callback=initMap">
    </script>

    <script>
        function initMap() {

            /*var dados = <?php echo $json; ?>; */
            // Map option

            var options = {
                center: {
                    lat: -22.7388,
                    lng: -47.3319
                },
                zoom: 12
            }

            //New Map
            map = new google.maps.Map(document.getElementById("map"), options)

            //listen for click on map location

            // google.maps.event.addListener(map, "click", (event) => {
            //     //add Marker
            //     addMarker({ location: event.latLng });
            // })



            //Marker
            /*
                const marker = new google.maps.Marker({
                position:{lat: 37.9922, lng: -1.1307},
                map:map,
                icon:"https://img.icons8.com/nolan/2x/marker.png"
                });
                //InfoWindow
                const detailWindow = new google.maps.InfoWindow({
                    content: `<h2>Murcia City</h2>`
                });
                marker.addListener("mouseover", () =>{
                    detailWindow.open(map, marker);
                })
                */

            //Add Markers to Array

            // $.ajax({
            //     type: "POST",
            //     url: "http://localhost/turismo/teste-maps/conexao.php",
            //     dataType: "json",
            //     success: function(data) {

            //         let nome = data.nome
            //         let telefone = data.telefone
            //         console.log(nome)
            //     }
            // });

            let MarkerArray = <?php echo $jsonMarcas; ?>;

            /*
            // let MarkerArray = <?php echo $marcas; ?>;
            // let MarkerArray2 = JSON.parse(<?php echo $jsonMarcas; ?>);
            */


            // console.dir(MarkerArray);

            /*let MarkerArray = [{
                    location: {
                        lat: -22.75797,
                        lng: -47.3535
                    },
                    content: `<img src="img/botanico.jpg" width="400" height="300" alt="foto">
                             <br> 
                            <h2>Jardim Botânico</h2>
                             <p> Endereço: Av. Brasil Sul, 400 - Parque Res. Nardini, Americana - SP, 13465-810</p>
                              <p> Telefone: (19) 3407-4452 </p> `
                },
                {
                    location: {
                        lat: -22.7388,
                        lng: -47.3251
                    },
                    content: "<img src=\"img/img/1679091986.\" width=\"400\" height=\"300\" alt=\"foto\">\r\n            <br>\r\n            <h2>Adonópolis </h2>\r\n            <p>R. José Bonifácio, 174 - Chácara Machadinho I,Americana - SP, 13478-040</p>\r\n            <p>(19) 3471-5608</p> "
                }
            ]*/

            /*let marcas = <?php echo $json; ?>;
            console.dir(marcas);
            for (var i = 0; i < marcas.length; i++) {
                // aparentemente é aqui onde devo pegar os dados do array;
              
                console.log(marcas[i].nome)
                
            }*/




            // console.dir(MarkerArray)
            // console.dir(MarkerArray2)


            // loop through marker
            console.log(MarkerArray);
            for (let i = 0; i < MarkerArray.length; i++) {
                // console.dir(MarkerArray[i])
                addMarker(MarkerArray[i]);

            }

            // Add Marker

            function addMarker(property) {

                const marker = new google.maps.Marker({
                    position: property.location,
                    map: map,
                    //icon: property.imageIcon
                });

                // for (var i = 0; i < dados.length; i++) {
                //     var ponto = dados[i];
                //     var marker = new google.maps.Marker({
                //         position: new google.maps.LatLng(ponto.latitude, ponto.longitude),
                //         map: map,
                //         title: ponto.nome,

                //     });
                // }


                // Check for custom Icon

                if (property.imageIcon) {
                    // set image icon
                    marker.setIcon(property.imageIcon)
                }

                if (property.content) {

                    const detailWindow = new google.maps.InfoWindow({
                        content: property.content
                    });

                    marker.addListener("click", () => {
                        detailWindow.open(map, marker);
                    })
                }





            }





        }
    </script>
</body>

</html>