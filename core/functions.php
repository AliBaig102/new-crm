<?php

function printPre($array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function redirect(string $location): void
{
    header('Location: ' . BASE_URL . $location);
    exit;
}

function redirectWithSuccess(string $location, string $message): void
{
    $_SESSION['success_message'] = $message;
    redirect($location);
}

function redirectWithError(string $location, string $message): void
{
    $_SESSION['error_message'] = $message;
    redirect($location);
}

function authRedirect(): void
{
    if (!isset($_SESSION['auth'])) {
        redirectWithError('login.php', 'You must be logged in to access this page.');
    }
}

function displaySuccessMessage(): void
{
    if (isset($_SESSION['success_message'])) {
        echo ' <div class="m-3 alert alert-success bg-transparent text-success alert-dismissible fade show" role="alert">
                <i class="ri-close-circle-line me-1 align-middle fs-16"></i>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                ' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']); // Remove a message after displaying
    }
}

function displayErrorMessage(): void
{
    if (isset($_SESSION['error_message'])) {
        echo ' <div style="font-size: 12px" class="m-2 alert alert-danger bg-transparent text-danger alert-dismissible fade show" role="alert">
                 <i class="ri-check-line me-1 align-middle fs-16"></i>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                ' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); // Remove a message after displaying
    }
}


function getRole()
{
    return isset($_SESSION['auth']) ? $_SESSION['auth']['role'] : 'booker';

}
function onlyAdminAccess(): void
{
    if (!isset($_SESSION['auth']['role']) || $_SESSION['auth']['role'] !== 'admin') {
        echo "<script>
            alert('Access denied. Admins only!');
            window.history.back();
        </script>";
        exit;
    }
}


