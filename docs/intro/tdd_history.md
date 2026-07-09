[⌂ Home](../../README.md)
[▲ Previous: What is TDD?](what_is_tdd.md)

## TDD history

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
