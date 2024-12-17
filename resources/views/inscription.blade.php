<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Multi-étapes avec Barre de Progression</title>

    <!-- Lier le CSS -->
    <link href="{{ asset('css/inscription.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Trigger Button -->
<button type="button" class="btn btn-primary mt-5 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#signupModal">
    Open Registration Form
</button>

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Progress Bar -->
                <div class="progress mb-3">
                    <div id="progress-bar" class="progress-bar bg-primary" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">Step 1</div>
                </div>

                <!-- Form Steps -->
                <form id="signupForm">
                    <!-- Step 1: Name -->
                    <div class="step active" id="step1">
                        <div class="step-title">Step 1: Enter your Full Name</div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                    </div>

                    <!-- Step 2: Email -->
                    <div class="step" id="step2">
                        <div class="step-title">Step 2: Enter your Email</div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <!-- Step 3: Password -->
                    <div class="step" id="step3">
                        <div class="step-title">Step 3: Create a Password</div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Create a password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="d-flex justify-content-between">
                        <button type="button" id="prevBtn" class="btn btn-secondary" style="display:none;">Previous</button>
                        <button type="button" id="nextBtn" class="btn btn-primary">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Lier le JS -->
<script src="{{ asset('js/inscription.js') }}"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
