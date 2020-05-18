## LeafletJS with Google Tag Manager and more geoJSON points
In this tutorial I introducing:
Leaflet supports all of the GeoJSON types above, but Features and FeatureCollections 
work best as they allow you to describe features with a set of properties. 
We can even use these properties to style our Leaflet vectors.
onEachFeature: A Function that will be called once
for each created Feature, after it has been created and styled. 
Useful for attaching events and popups to features.
pointToLayer: A Function defining how GeoJSON points spawn 
Leaflet layers. It is internally called when data is added, 
passing the GeoJSON point feature and its LatLng.

[codepen.io/pen/YzyJdyy](https://codepen.io/pjhooker/pen/YzyJdyy)

[YouTube video tutorial](https://youtu.be/TeXzuPxXrWg)