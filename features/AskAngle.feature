Feature: Angles
  As a User, so that I can draw an even star, I would like to know the angle of
  a single vertex based on the number of vertices.

  Scenario: Enter a number of vertices
    When I request the angle measurement for a star with 5 sides
    Then I should get an angle of 36 degrees

    When I request the angle measurement for a star with 6 sides
    Then I should get an angle of 60 degrees

    When I request the angle measurement for a star with 8 sides
    Then I should get an angle of 90 degrees

    When I request the angle measurement for a star with 9 sides
    Then I should get an angle of 100 degrees

    When I request the angle measurement for a star with 13 sides
    Then I should get an angle of 124.615 degrees
