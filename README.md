 # **Pentameter: A helper for sketching Pentacles and related shapes**

Ever found yourself trying to sketch a 5-point star and thought
"wait, how do I get this to be even? What angle should I start with?" after
your first couple sketches come out a little odd? Well, good news:

The answer is 36°.
But wait, there's more!

This project is going to be a fun little tool to provide some helpful metrics
for sketching more intricate stars, but also my attempt at a simple application
performing complex operations in PHP.

## User stories

```
As a User
So that I can draw an even star
I would like to know the angle of a single vertex based on the number of vertices.
[progress: completed]
```

```
As a User
So that I can also corroborate angle metrics and can work with a compass
I would like to also know the length of the lines between vertices.
[progress: completed]
```

```
As a User
So that I can rule out obviously absurd results,
I would like to be informed of an error if the angle equals or falls below 0.
[progress: pending]
```

```
As a User
So that the page remains calm and collected amidst shenanigans
I would like non-integer inputs to be handled with a dedicated error message
[progress: pending]
```
## Installation

1. Fork and clone this repo

2. Run 'composer install'

## Testing

1. Run "php -S localhost:8000" in the project root to start a server instance

2. Run "behat-bin/behat" to ensure that all tests are passing

3. Feel free to play with the tool yourself!
