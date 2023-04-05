//Variabel list di dalam sebuah map
void main() {
  Map<String, List<String>> jual = {
    'kode': ['2139A', '2139B', '2139C'],
    'judul': ['Anamorphe', 'Jealou', 'Krisp'],
    'jenis': ['Novel', 'Buku', 'Buku'],
  };

  print(jual['kode']);
  print(jual['judul']);
  print(jual['jenis']);
}