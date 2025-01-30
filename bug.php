function foo(array $arr) {
  foreach ($arr as $value) {
    // Missing check for null or undefined values
    echo $value->someProperty;
  }
}