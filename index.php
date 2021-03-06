<!DOCTYPE html>
<html>
<head>
  <title></title>

<script>

  function subsetSum(numbers, target, partial) {
  var s, n, remaining;

  partial = partial || [];

  // sum partial
  s = partial.reduce(function (a, b) {
    return a + b;
  }, 0);

  // check if the partial sum is equals to target
  if (s === target) {
    console.log("%s=%s", partial.join("+"), target)
  }

  if (s >= target) {
    return;  // if we reach the number why bother to continue
  }

  for (var i = 0; i < numbers.length; i++) {
    n = numbers[i];
    remaining = numbers.slice(i + 1);
    subsetSum(remaining, target, partial.concat([n]));
  }
}
  
subsetSum([1,3,2,19,5,4,1],8);

</script>
</head>
<body>

<div class="list">
  <ul id="listing"></ul>
</div>
</body>
</html>