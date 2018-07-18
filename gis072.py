import urllib
import urllib.request
import pprint
import json

# OK FUNZIONA
#jsonData = '{"address": ["Via+Tucidide,+54,+Milano","Via+Verdi,+4,+Milano","Piazza+Cordusio,+5,+Milano"]}'
#jsonToPython = json.loads(jsonData)

#TEST
#jsonData = open ('D:\ubicacionhospitaleslist.json').read ()
with open('D:\ubicacionhospitaleslist.json') as jsonData:
    jsonToPython = json.load(jsonData)
#jsonData = open ('D:\ubicacionhospitaleslist.json').read ()
#with open('D:\ubicacionhospitaleslist.json') as jsonData:
#jsonToPython = json.loads(jsonData)

    print jsonToPython['address']
    print jsonToPython['address'][0]
    number = 0
    for line in jsonToPython['address']:
    #       print(line)
        number += 1
        url = "https://maps.googleapis.com/maps/api/geocode/json?address="+line+"&key="+"--YOUR_GOOGLE_API_KEY--"
        print(url)
        json_response = urllib.request.urlopen(url)
        busqueda = json_response.read().decode('utf-8')
        busquedajson = json.loads(busqueda)
        archivolugares = open('D:\ubicacionhospitales.csv','a')
        lat=busquedajson['results'][0]['geometry']['location']['lat']
        lng=busquedajson['results'][0]['geometry']['location']['lng']
        print(busquedajson['results'][0]['geometry']['location']['lat'])
        print(busquedajson['results'][0]['geometry']['location']['lng'])
        tofile = str(number)+"|"+line+"|"+str(lat)+"|"+str(lng)+'\n'
        print(tofile)
        archivolugares.write(tofile)
        archivolugares.close()
        print("Good bye!")
