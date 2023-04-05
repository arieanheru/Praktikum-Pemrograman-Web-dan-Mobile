//Variabel list yang berisikan map
void main() {
  List<Map<String, dynamic>> dataList = [
    {
      'name': 'Akbar Hidayah', 
      'age': '30', 
      'gender': 'Male', 
      'address' :       
      {
        'city' : 'Jakarta', 
        'region' : 'Indonesia'
        }
    },
        {
      'name': 'Naura', 
      'age': '25', 
      'gender': 'Female', 
      'address' :       
      {
        'city' : 'Tangerang', 
        'region' : 'Indonesia'
        }
    },
        {
      'name': 'Claude de Rant', 
      'age': '18', 
      'gender': 'Male', 
      'address' :       
      {
        'city' : 'Bogor', 
        'region' : 'Indonesia'
        }
    }
  ];

  var text = ('List berikut:');
  //pengulangan dilakukan sampai panjang map dataList
  for (var i = 0; i < dataList.length; i++) {
    print(text);
    print(dataList[i]['name']);
    print(dataList[i]['age']);
    print(dataList[i]['gender']);
    print(dataList[i]['address']['city']);
    print(dataList[i]['address']['region']);
  }
}