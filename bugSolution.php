function foo($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values explicitly
  }
  // ... rest of your function
  return $a + $b; //Example operation
}

//Demonstrates the issue
echo foo(5, null)."\n"; //Outputs nothing
echo foo(5, 10); //Outputs 15
