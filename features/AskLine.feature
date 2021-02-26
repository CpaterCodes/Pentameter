Feature: Lines
  As a User, so that I can also corroborate angle metrics and can work with a
  compass, I would like to also know the length of the lines between vertices.

  As a User, so that the page remains calm and collected amidst shenanigans,
  I would like inapplicable inputs to be handled with a dedicated error message.

  Scenario: Enter a number of vertices and a circumference

    When I request the length for 5 sides and a circumference of 10
    Then I should get a length of 9.511

    When I request the length for 6 sides and a circumference of 7
    Then I should get a length of 6.062

  Scenario: Enter a non-numerical input for line

    When I request the length for 5 sides and a circumference of -2
    Then I should get a length of "Invalid circumference"

    When I request the length for 7 sides and a circumference of "potato"
    Then I should get a length of "Invalid circumference"
