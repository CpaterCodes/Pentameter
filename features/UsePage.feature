Feature: Pentameter
  As a User, so that I can draw an even star, I would like to know the angle of
  a single vertex based on the number of vertices.

  As a User, so that I can also corroborate angle metrics and can work with a
  compass, I would like to also know the length of the lines between vertices.

  As a User, so that the page remains calm and collected amidst shenanigans,
  I would like inapplicable inputs to be handled with a dedicated error message.

  As a User, so that I can rule out obviously absurd results, I would like to be
  informed of an error if the angle equals or falls below 0.

  Scenario: Enter a number of vertices and a circumference
    Given I am on "http://localhost:8000/"
    And I fill in "vertex-count" with "5"
    And I fill in "circumference" with "10"
    And I press "Calculate"
    Then I should see "9.511"
    And I should see "36"

  Scenario: Enter a number of vertices only
    Given I am on "http://localhost:8000/"
    And I fill in "vertex-count" with "9"
    And I press "Calculate"
    Then I should see "100"
    And I should not see "Fatal error: Uncaught TypeError"

  Scenario: Enter a circumference only
    Given I am on "http://localhost:8000/"
    And I fill in "circumference" with "7"
    And I press "Calculate"
    Then I should see "Please provide a number of vertices"
