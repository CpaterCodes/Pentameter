Feature: Pentameter
  As a User, so that I can draw an even star, I would like to know the angle of
  a single vertex based on the number of vertices.

  As a User, so that I can also corroborate angle metrics and can work with a
  compass, I would like to also know the length of the lines between vertices.

  Scenario: Enter a number of vertices and a circumference
    Given I am using the site
    When I fill in "vertex-count" with "5"
    And I fill in "circumference" with "10"
    And I press "submit"
    Then I should see "9.511"
  Scenario: Enter a number of vertices only

  Scenario: Enter a circumference only
