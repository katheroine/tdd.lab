[⌂ Home](../../README.md)
[▼ Next: TDD history](tdd_history.md)

# What is TDD

## Definition

**Test-driven development** (**TDD**) is *a way of writing code* that involves writing an automated *unit-level* test case that fails, then writing just enough code to make the test pass, then refactoring both the test code and the production code, then repeating with another new test case.

Alternative approaches to writing automated tests is to write all of the production code before starting on the test code or to write all of the test code before starting on the production code. With TDD, both are written together, therefore shortening debugging time necessities.

TDD is related to the *test-first* programming concepts of *extreme programming*, begun in 1999, but more recently has created more general interest in its own right.

Programmers also apply the concept to improving and debugging legacy code developed with older techniques.

-- [Wikipedia](https://en.wikipedia.org/wiki/Test-driven_development)

**Test-driven development** (**TDD**) is *an approach to software development* in which software tests are written before their corresponding functions.

Developers write enough code to pass each test, then both the test and code are refined before moving onto a new test and then a new feature.

*Test-driven development* essentially forces developers to slow down, validate and refine their code in shorter feedback cycles. While not required, DevOps teams encourage coders, from beginners to seasoned professionals, to use TDD across a wide range of programming languages. For example, Java, Python, and so on, application programming interfaces (APIs) and program applications.

Programming in this style strengthens the relationship between coding, testing (in the form of automated *unit-level* tests) and *code design*. While test-driven development might increase upfront development time, it has been demonstrated to improve code functionality and dexterity and save time overall.

By immediately identifying and addressing any errors, developers that use TDD can *prevent small issues from becoming larger problems*. *Test-driven development* forces developers to both validate and refine their code as they go, thus streamlining final quality checks and corrections.

Alternative testing frameworks include writing the production code before writing all the automated tests or writing the entire test suite before writing the production code. These methods, while not necessarily ineffective, have been shown to increase necessary debugging times, especially with larger and more complex projects.

While *test-driven development* is commonly used for the creation of new production code, it is also often applied to improve debugging legacy code developed with older or other techniques.

*Test-driven development* reverses the traditional development process by putting testing before development. As an iterative approach, *test-driven development* improves code quality and readability by promoting testable workflows that result in high-quality code at the unit level. When developers implement unit testing, they focus on a small portion of logic, such as an individual algorithm. Writing code specifically to make tests pass not only results in cleaner, more durable code but also helps improve documentation.

-- [IBM Website](https://www.ibm.com/think/topics/test-driven-development)

## Sequence

The TDD steps vary somewhat by author in count and description, but are generally as follows. These are based on the book Test-Driven Development by Example, and Kent Beck's Canon TDD article.

1. **List scenarios for the new feature**

List the expected variants in the new behavior. *There's the basic case & then what-if this service times out & what-if the key isn't in the database yet &…* The developer can discover these specifications by asking about use cases and user stories. A key benefit of TDD is that it makes the developer *focus on requirements before writing code*. This is in contrast with the usual practice, where *unit tests* are only written after code.

2. **Write a test for an item on the list**

Write an automated test that would pass if the variant in the new behavior is met.

3. **Run all tests. The new test should fail – for expected reasons**

This shows that new code is actually needed for the desired feature. It validates that the test harness is working correctly. It rules out the possibility that the new test is flawed and will always pass. [It also allows to ensure that the test makes its job - after the production code is provided - the test passes, before - it fails. -- KK]

4. **Write the simplest code that passes the new test**

Inelegant code and hard coding is acceptable. The code will be honed in Step `6`. No code should be added beyond the tested functionality.

5. **All tests should now pass**

If any fail, fix failing tests with minimal changes until all pass.

6. **Refactor as needed while ensuring all tests continue to pass**

Code is refactored for readability and maintainability. In particular, *hard-coded test data should be removed from the production code*. Running the test suite after each refactor ensures that no existing functionality is broken.

Examples of refactoring:

* moving code to where it most logically belongs
* removing duplicate code
* making names self-documenting
* splitting methods into smaller pieces
* re-arranging inheritance hierarchies

**Repeat**

Repeat the process, starting at step `2`, with each test on the list until all tests are implemented and passing.
Each tests should be small and commits made often. If new code fails some tests, the programmer can undo or revert rather than debug excessively.

When using external libraries, it is important not to write tests that are so small as to effectively test merely the library itself,[3] unless there is some reason to believe that the library is buggy or not feature-rich enough to serve all the needs of the software under development.

-- [Wikipedia](https://en.wikipedia.org/wiki/Test-driven_development#History)
