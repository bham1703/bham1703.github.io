import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    //need to add logout button too
    return Scaffold(
      //removed const here as appbar can be changed
      appBar: AppBar(
        title: const Text('Health System App'), //no name for app yet
      ),
    );
  }
}
