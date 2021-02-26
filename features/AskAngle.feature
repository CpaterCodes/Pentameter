Feature: Angles
  As a User, so that I can draw an even star, I would like to know the angle of
  a single vertex based on the number of vertices.

  As a User, so that the page remains calm and collected amidst shenanigans,
  I would like inapplicable inputs to be handled with a dedicated error message.

  As a User, so that I can rule out obviously absurd results, I would like to be
  informed of an error if the angle equals or falls below 0.
  
  Scenario: Enter a number of vertices

    When I request the angle measurement for a star with 5 sides
    Then I should get an angle of 36

    When I request the angle measurement for a star with 6 sides
    Then I should get an angle of 60

    When I request the angle measurement for a star with 13 sides
    Then I should get an angle of 124.615

  Scenario: Enter a non-integer

    When I request the angle measurement for a star with 2.5 sides
    Then I should get an angle of "Please use a valid integer"

    When I request the angle measurement for a star with "foo" sides
    Then I should get an angle of "Please use a valid integer"

  Scenario: Enter a vertex number that doesn't make for a valid star

    When I request the angle measurement for a star with 4 sides
    Then I should get an angle of "Request doesn't create a valid star"

    When I request the angle measurement for a star with 3 sides
    Then I should get an angle of "Request doesn't create a valid star"
