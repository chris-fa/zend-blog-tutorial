Feature: TODO
    In order to remember my tasks
    As a user
    I want to be able to records todo items

    Scenario: Listing all todo items
        # Given

        # When
        When I go to "/todo"

        # Then
        Then the response status code should be 200

    # Scenario: Create a todo item
    #     # Given
    #     Given I go to "/todo/create"

    #     # When
    #     When I fill in "name" with "Christopher"
    #     And I press "Create"

    #     # Then
    #     Then I should see "Usuario creado exitosamente"

