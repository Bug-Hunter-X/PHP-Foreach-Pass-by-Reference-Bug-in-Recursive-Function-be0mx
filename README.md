# PHP Foreach Pass-by-Reference Bug
This repository demonstrates a subtle bug in PHP related to the use of pass-by-reference in `foreach` loops when dealing with nested arrays and recursive functions.

The bug is that modifying a referenced element inside a recursive `foreach` loop will modify the original array elements in an unexpected way. This can lead to incorrect results if not handled carefully.

## How to Reproduce
1. Clone this repository.
2. Run the `bug.php` script.
3. Observe the unexpected output.

## Solution
The `bugSolution.php` file provides a corrected version of the code that avoids the unexpected modification of the original array elements.