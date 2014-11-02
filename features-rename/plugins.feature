Feature: Manage plugins
  In order to manage plugins
  As an admin
  I need to enable and disable plugins

  Background:
    Given I have a vanilla wordpress installation
      | name          | email                   | username | password |
      | BDD WordPress | tom.forrer@gmail.com    | admin    | test     |
    And I am logged in as "admin" with password "test"

  Scenario: Enable the BDD Plugin Example plugin
    Given there are plugins
      | plugin    | status  |
      | bdd-plugin-example/bdd-plugin-example.php | enabled |
    When I go to "/wp-admin/"
    Then I should see "BDD is awesome!"

  Scenario: Disable the BDD Plugin Example plugin
    Given there are plugins
      | plugin    | status   |
      | bdd-plugin-example/bdd-plugin-example.php | disabled |
    When I go to "/wp-admin/"
    Then I should not see "BDD is awesome!"
