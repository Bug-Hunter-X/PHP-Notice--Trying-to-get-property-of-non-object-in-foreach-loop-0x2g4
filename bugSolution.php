function foo(array $arr) {
  foreach ($arr as $value) {
    // Check if value is an object and not null before accessing its property
    if (is_object($value) && isset($value->someProperty)) {
      echo $value->someProperty;
    } else {
      // Handle the case where the value is not an object or the property is not set
      echo "Value is not an object or property is not set.";
    }
  }
}

//Alternative solution using null coalescing operator
function foo(array $arr) {
  foreach ($arr as $value) {
    echo $value->someProperty ?? 'Property not set';
  }
}