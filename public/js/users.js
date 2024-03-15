$(document).ready(function () {
    // Your code here
    const $updateForm = $('#updateForm');
    const $addForm = $('#add-user');
    const $updateRoute = $('#updateUserRoute');
    const $addRoute = $('#addUserRoute');
    const $message = $('#message');

    // Update & Validate User Function to handle form submission
    $updateForm.validate({
        // Specify your validation rules and messages here
        rules: {
            // Example rule for 'name' field
            name: {
                required: true
            },
            // Example rule for 'email' field
            email: {
                required: true,
                email: true
            }
            // Add more rules as needed
        },
        submitHandler: function (form) {
            const formData = $(form).serialize(); // Serialize form data
            const updateRoute = $updateRoute.val(); // Get the route URL from the hidden input field

            // Call the reusable function
            sendAjaxRequest(updateRoute, formData, handleSuccessResponse, handleErrorResponse);
        }
    });

    // Add & Validate User Function to handle form submission
    $addForm.validate({
        // Specify your validation rules and messages here
        rules: {
            // Example rule for 'name' field
            name: {
                required: true
            },
            // Example rule for 'email' field
            email: {
                required: true,
                email: true
            }
            // Add more rules as needed
        },
        submitHandler: function (form) {
            const formData = $(form).serialize(); // Serialize form data
            const addRoute = $addRoute.val(); // Get the route URL from the hidden input field

            // Call the reusable function
            sendAjaxRequest(addRoute, formData, handleSuccessResponse, handleErrorResponse);
        }
    });

    // Function to handle success response
    function handleSuccessResponse(response) {
        toastr.success(response.message);

        // Reset the update form if it exists
        if ($updateForm.length > 0) {
            window.location.href = url('users', false);
        }

        // Reset the add form if it exists
        if ($addForm.length > 0) {
            $addForm[0].reset();
        }
    }

    // Function to handle error response
    function handleErrorResponse(xhr) {
        const errors = xhr.responseJSON.errors;
        let errorMessage = '';
        $.each(errors, (key, value) => {
            errorMessage += value;
            errorMessage += '<br>';
        });
        toastr.error(errorMessage);
    }
});
