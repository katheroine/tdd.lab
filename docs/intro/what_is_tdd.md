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

## History

Software engineer Kent Beck, who is credited with having developed or "rediscovered" the technique, stated in 2003 that TDD encourages simple designs and inspires confidence.

*The original description of TDD was in an ancient book about programming. It said you take the input tape, manually type in the output tape you expect, then program until the actual output tape matches the expected output. After I'd written the first xUnit framework in Smalltalk I remembered reading this and tried it out. That was the origin of TDD for me. When describing TDD to older programmers, I often hear, "Of course. How else could you program?" Therefore I refer to my role as "rediscovering" TDD.*

— Kent Beck, *Why does Kent Beck refer to the 'rediscovery' of test-driven development? What's the history of test-driven development before Kent Beck's rediscovery?*

-- [Wkipedia](https://en.wikipedia.org/wiki/Test-driven_development#History)

**Does the book, mentioned by Kent Beck in the quote: *The original description of TDD was in an ancient book about programming. It said you take the input tape, manually type in the output tape you expect, then program until the actual output tape matches the expected output.* really exisit?**

Yes, the book Kent Beck refers to absolutely exists. [1, 2]
While software pioneer [Kent Beck](https://www.google.com/search?q=kent+beck&kgmid=/m/04856#sv=CBwS1gMKpQMSogMK4gJBSmlUNHRJZDNmcDFSZEt5WjhvQm1sS2Vady1Gb05vUDBmLWU2WTBfRHF3YXJzeG93d0pDOHY3QmdYU0V0elh6ektseFU2YWV2UkU1YUxXT3NfSFVjQWxQSjBWZUVOR0R6d0cyMjMtYVRQNjh4MEVLU1k2bEVUN3BIWDhlRzNIWksxeHJfdU9RbWtULW1aNzBwWkJrZ3ZFX0paOFNlT0htMHpVVXY1YlR4bTRad1gtRk1Ndmk4OHpJZDJ2YnhsSG9peDhLRGotUjBOQ2lUVFdLMlhfc1RPUGN2a3JFZGZ3WVI0UW9KVVVPbFY3RmUzQm1KWTRNR21xbDBVNXEyaHREVVViZzNuWThPWDc4aVc3NWdpREdZQTFrY05fdHZMeFg3Qk03OWVZMWxsODc5bl9US3hwNVR3UmM2YTY0MmZuUkxnNFJxMWRPUlpJUEtCUFRUTkpIZktncDMySzJfaVZfd1ESF0k2eE9hcHZnTjZIRXdQQVA1OFMyOEE4GiJBRHNyOWZRNzAxbEFldlAtUmtTX0FWdTBReUR2bzhlS0ZBEgQ3ODU0GgEzIg4KAXESCWtlbnQgYmVjayIRCgVrZ21pZBIIL20vMDQ4NTYoABhFIKGm9fEN) famously paraphrased the concept from memory to explain why he "rediscovered" rather than invented [Test-Driven Development (TDD)](https://www.google.com/search?q=test-driven+development+%28tdd%29&kgmid=/m/01_2_v#sv=CBwSqwQK5QMS4gMKogNBSmlUNHRJV1QtTkRpZzg1Z2pvejZkWHN4d0RwQTVQcUVLWHF4QmFUcDVvOVozbThGR2E0dElaaDBXbkRUV3Fpc2kzbmFnRGk2NEJDZXltQ2YxY21rV0paaEZUZk14N2VCOWtUZHlCb2RQZk1WNmdwUXdsbGpTYTZzLXBqSVVOQThvZXlPSzRkUGgxbzFXSWREb1FLcjhOYWtpekx0RmI5anAya1EwWkk0QzRiRFotQ3VPT29Yc1VGdDZpdGJkZV8tYUFsYkstQmRXUHp3Q0Q1SVVqLVRYdFFocVliWl9tdlR6WndScHVHVk9iaVhjMFprS19zMHRfVGVVdXY2V0dxSVdoV213MFVtcmJQXzJiak9iMURCSDVlSjZSR3pGTWdaTTRDRWNxck4yZ0N4X1A2cnZGMWRLdUhyVVMzZC04blllYXNWTXlvQnJPZ3JvQUVseE1kMVVaVTkyZHdQcmNpQTBfUXRLMENoc1BhRUZzaVFnenpHNE1LalJzWTlKZThGMWhNeFBiWXYyNE82WTREV1pWLWxVRmE2anBYcWxobllnEhdJNnhPYXB2Z042SEV3UEFQNThTMjhBOBoiQURzcjlmU1l3Q0VGY0hpWXVFcE1TUzk5TGVqQW0xTWtrdxIENzg1NBoBMyIiCgFxEh10ZXN0LWRyaXZlbiBkZXZlbG9wbWVudCAodGRkKSISCgVrZ21pZBIJL20vMDFfMl92KAAYRSDuy77zDA), the specific text he was thinking of is a seminal 1957 textbook. [1, 3]

### The Identity of the "Ancient Book"

* Title: [Digital Computer Programming](https://www.google.com/search?q=digital+computer+programming&kgmid=/m/066vmyt#sv=CBwSqwQK5QMS4gMKogNBSmlUNHRMaWVDU1dFeXVKUXIzX1J0QXN6ZHdoRFRaUjJEQWtNOVBxOW5rQnMzWmhhWno5ZDFDNVVGOE1nbFVPU3VYbUlQNG5sY1p2eUhSRWVtYUZiU2ZBSzM5Ri11bnFMOGZSNDBpX2lRdnpFQ2dYbFFlbEpmRlhGMHJPbnZ6VDkwbUJuU01yMWp1b1M2MldwUlkzaVlLdkVLR0dSLWQyMjFxSmFVWS1sbXFqbGg5bjJLbzQ3VXZDTjF4Tl9JQ1VkanptZjg4TEliRHB2Y3QyMVVGNGRWU2t0VnJkLXZUX04wVHhmZHJyT1lRUklOT0R6UnI4cHhFLVRjRmVwMElGYlBZTnNXTmtGRWFZSjllcGtqNDlHRlBhRVRTbjl4dkxXQU00alhfcXRmOUpVU3BNRnBCQlMycldjdmwwNkhUaFh5WEdKZXdZNzZWYXNoUkZZSjVqNnVXMEw1SGZ0ZjB3SkVhUWVCYzRMY2QxUUxpQlZ0dW43dnI3N2tUYU1Pc3RKanFSekxzTUtncVJhTmtnRnUyZDFUNHQwS09JOTRZTDFnEhdJNnhPYXB2Z042SEV3UEFQNThTMjhBOBoiQURzcjlmU1FJcjllU2hRTFpoa29GRWNNdlk0YnhXSlZKdxIENzg1NBoBMyIhCgFxEhxkaWdpdGFsIGNvbXB1dGVyIHByb2dyYW1taW5nIhMKBWtnbWlkEgovbS8wNjZ2bXl0KAAYRSC58vdR)
* Author: Daniel D. McCracken
* Publication Year: 1957
* The Relevant Chapter: "Program Checkout" [1, 4]

### What the Book Actually Says

In 1957, software was handled on punched paper tapes or punch cards. In the "Program Checkout" chapter, McCracken describes a meticulous workflow designed to prevent errors before a developer ever touches the machine: [1, 5]

"The first attack on the checkout problem may be made before coding is begun. In order to fully ascertain the accuracy of the answers, it is necessary to have a hand-calculated check case with which to compare the answers which will later be calculated by the machine." [1]

### How It Connects to TDD

In the early days of computing, computer time was incredibly expensive and scarce. Programmers could not afford to write code and "see if it worked." They had to: [5]

   1. Define the inputs on a physical medium (the input tape).
   2. Calculate the expected outputs entirely by hand on paper (the expected output tape).
   3. Write the program and run it.
   4. Compare the final output to the hand-calculated baseline, iterating until they matched perfectly. [1, 5, 6]

This exact loop—Define expected behavior → Write code → Verify against expectation—is the precise conceptual blueprint for the modern Red-Green-Refactor TDD cycle. [7]
If you want to dig deeper into software history, would you like to explore other early precursors to modern development practices, or see how NASA used similar methodologies during the Project Mercury era? [8]

[1] [https://www.quora.com](https://www.quora.com/Why-does-Kent-Beck-refer-to-the-rediscovery-of-test-driven-development-Whats-the-history-of-test-driven-development-before-Kent-Becks-rediscovery)
[2] [https://www.oreilly.com](https://www.oreilly.com/library/view/test-driven-javascript-development/9781782174929/ch01s02.html)
[3] [https://en.wikipedia.org](https://en.wikipedia.org/wiki/Test-driven_development)
[4] [https://community.sap.com](https://community.sap.com/t5/application-development-and-automation-blog-posts/back-to-the-future-reloaded-part-2/ba-p/13381367)
[5] [https://www.practitest.com](https://www.practitest.com/resource-center/article/tdd-guide/)
[6] [https://arialdomartini.wordpress.com](https://arialdomartini.wordpress.com/2012/07/20/you-wont-believe-how-old-tdd-is/)
[7] [https://www.virtuosoqa.com](https://www.virtuosoqa.com/post/test-driven-development)
[8] [https://medium.com](https://medium.com/@cassiodias25/tl-dr-43336675f669)

-- [Gemini](https://share.google/aimode/1eNfwxYQSoUb1qHPW)

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
