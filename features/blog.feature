Feature: Blog
    In order to read entries
    As a reader
    I need to be able to go through every post

    Rules:
    - Posts have no link to description

    Scenario: Listing all entries
        Given There are 3 blog entries
        When I go to "/blog"
        Then I should see "Hello 1"
        And I should see "Hello 2"
        And I should see "Hello 3"
