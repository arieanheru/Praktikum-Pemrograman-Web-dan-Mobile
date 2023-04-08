import 'package:flutter/material.dart';

class Button extends StatefulWidget {
  const Button({super.key});

  @override
  State<Button> createState() => _ButtonState();
}

class _ButtonState extends State<Button> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        body: Center(
          child: Container(
            width: 250,
            height: 50,
            child: ElevatedButton(
              style: ElevatedButton.styleFrom(
                backgroundColor: Color.fromARGB(255, 16, 111, 164),
                shape: RoundedRectangleBorder(
                  borderRadius: BorderRadius.circular(40.0)
                ),
              ),
              onPressed:() {},
              child: Text(
                'Mulai',
                style: TextStyle(fontWeight: FontWeight.w800, fontSize: 17),
              ),
            ),
          )
        ),
      ),
    );
  }
}