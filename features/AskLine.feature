Feature: Sides
  As a User, so that I can also corroborate angle metrics and can work with a
  compass, I would like to also know the length of the lines between vertices.

  Scenario: Enter a number of vertices and a circumference
    When I request the length for 5 sides and a circumference of 10 cm
    Then I should get a length of 9.511 cm
