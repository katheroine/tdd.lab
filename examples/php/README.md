# The basics
# Example: Money

## The list

The vast majority of articles, tutorials, and courses on TDD describe its cycle in three standard steps:

1. Write a test and see it fail (Red).
2. Write the minimal amount of production code to make the test pass (Green).
3. Refactor the newly written code.

Kent Beck, who rediscovered TDD, calls this *the TDD mantra* in his book *Test-Driven Development: By Example*. However, he also emphasizes another crucial element of the process: *the test list*. This list is a dynamic, ever-evolving set of features the code unit should provide, problems to solve, or quality concerns the programmer needs to address. It helps maintain peace of mind, ensuring focus on the current step of the TDD cycle while keeping changes atomic.

Initially, the test list might consist of just the very first feature or behavior of the code unit. It is then continuously expanded as the programmer identifies new requirements. There is no need to map out everything from the start. Any ideas regarding what the code should handle, as well as thoughts on the architecture itself - such as its readability, robustness, and modularity - can simply be added to the list. By handling them at the right time, we prevent ourselves from overcomplicating the current TDD cycle and avoid the trap of trying to fix everything all at once.

[MoneyTest.php](./tests/Basics/MoneyTest.php)

```php
<?php
declare(strict_types=1);

namespace TddLab\Basics;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    #[Test]
    public function testMultiplication()
    {
        $three = new Money(3);
        $three->multiply(2);
        $this->assertEquals(6, $three->amount);
    }
}

```

```console
docker exec tdd-example-app phpunit
```

```console
PHPUnit 13.2.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.23
Configuration: /code/phpunit.xml

E                                                                   1 / 1 (100%)

Time: 00:00.008, Memory: 16.00 MB

There was 1 error:

1) TddLab\Basics\MoneyTest::testMultiplication
Error: Class "TddLab\Basics\Money" not found

/code/tests/Basics/MoneyTest.php:14

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
```

[Mpney.php](./src/Basics/Money.php)

```php
<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
}

```

```console
docker exec --user root tdd-example-app composer dump-autoload
```

```console
PHPUnit 13.2.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.23
Configuration: /code/phpunit.xml

E                                                                   1 / 1 (100%)

Time: 00:00.015, Memory: 16.00 MB

There was 1 error:

1) TddLab\Basics\MoneyTest::testMultiplication
Error: Call to undefined method TddLab\Basics\Money::multiply()

/code/tests/Basics/MoneyTest.php:15

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
```

```php
<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
    public function multiply()
    {
    }
}
```

```console
PHPUnit 13.2.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.23
Configuration: /code/phpunit.xml

F                                                                   1 / 1 (100%)

Time: 00:00.013, Memory: 16.00 MB

There was 1 failure:

1) TddLab\Basics\MoneyTest::testMultiplication
Failed asserting that null matches expected 6.

/code/tests/Basics/MoneyTest.php:16

--

1 test triggered 1 PHP warning:

1) /code/tests/Basics/MoneyTest.php:16
Undefined property: TddLab\Basics\Money::$amount

FAILURES!
Tests: 1, Assertions: 1, Failures: 1, Warnings: 1.
```

```php
<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
    public $amount;

    public function multiply()
    {
    }
}

```

```console
PHPUnit 13.2.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.23
Configuration: /code/phpunit.xml

F                                                                   1 / 1 (100%)

Time: 00:00.008, Memory: 16.00 MB

There was 1 failure:

1) TddLab\Basics\MoneyTest::testMultiplication
Failed asserting that null matches expected 6.

/code/tests/Basics/MoneyTest.php:16

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
```

```php
<?php
declare(strict_types=1);

namespace TddLab\Basics;

class Money
{
    public $amount = 6;

    public function multiply()
    {
    }
}
```

```console
PHPUnit 13.2.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.23
Configuration: /code/phpunit.xml

.                                                                   1 / 1 (100%)

Time: 00:00.004, Memory: 16.00 MB

OK (1 test, 1 assertion)
```

```php
    public $amount = 2 * 3;
```

```php
class Money
{
    public $amount = 2 * 3;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function multiply($value)
    {
        $this->amount *= $value;
    }
}
```
