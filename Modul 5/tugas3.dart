void main() {
  List<int> numbers = [5, 1, 6, 10, 15, 62, 71, 2, 3];

  // Menambahkan angka pada akhir list
  numbers.add(6);
  print('Setelah ditambahkan angka dalam list, $numbers');

  // Mengedit angka dalam list berdasarkan array
  numbers[0] = 13;
  print('Setelah diedit angka dalam array 0 dalam list, $numbers');

  // Menghapus angka dari list
  numbers.remove(10);
  print('Setelah dihapus angka dalam dalam list, $numbers');

  // Menghapus ankga dari list berdasarkan array
  numbers.removeAt(5);
  print('Setelah dihapus angka dalam dalam list berdasarkan array 1, $numbers');
}