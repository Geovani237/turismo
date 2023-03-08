function initMap() {

    // Map option

    var options = {
        center: { lat: -22.7388, lng:-47.3319 },
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

    let MarkerArray = [
        {
            location: { lat:-22.75797, lng:-47.3535 },
            content: 
            `<img src="img/botanico.jpg" width="400" height="300" alt="foto">
            <br> 
            <h2>Jardim Botânico</h2>
            <p> Endereço: Av. Brasil Sul, 400 - Parque Res. Nardini, Americana - SP, 13465-810</p>
            <p> Telefone: (19) 3407-4452 </p> `
        },

        { location: { lat:-22.7533, lng:-47.3528 },
            content: `<img src="img/ecologico.jpg" width="400" height="300" alt="foto"> <br> <h2>Parque Ecológico</h2> <p>Endereço: Av. Brasil, 2525 - Jardim Ipiranga, Americana - SP, 13468-000</p> <p>Telefone: (19) 3406-2075 </p>`
        },

        { location: { lat:-22.6950, lng:-47.3031 }, content: `<img src="img/casarao.jpg" width="400" height="300" alt="foto"> <br> <h2>Museu Casarão</h2> <p> Endereço: Av. Nicolau João Abdalla, 5005 - Vila Bertini, Americana - SP, 13473-625 </p> <p> Telefone: (19) 3469-1898 </p>` },

        {
            location: { lat: -22.7148, lng:-47.3294},
            content : `<img src="img/muller.jpg" width="400" height="300" <br> <h2>Casa de Cultura Hermann Müller</h2> <p>Endereço: R. Carioba, 2001 - Carioba, Americana - SP, 13472-560</p> <p>Telefone: (19) 3462-6048</p>`
        }



    ]

    // loop through marker
    for (let i = 0; i < MarkerArray.length; i++) {
        addMarker(MarkerArray[i]);

    }

    // Add Marker

    function addMarker(property) {

        const marker = new google.maps.Marker({
            position: property.location,
            map: map,
            //icon: property.imageIcon
        });

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