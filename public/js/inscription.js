let currentStep = 1;
const totalSteps = 3;
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const progressBar = document.getElementById('progress-bar');
const steps = document.querySelectorAll('.step');

function updateFormStep() {
    // Hide all steps
    steps.forEach(step => step.classList.remove('active'));

    // Show the current step
    document.getElementById('step' + currentStep).classList.add('active');

    // Update progress bar and step text
    let progress = (currentStep / totalSteps) * 100;
    progressBar.style.width = progress + '%';
    progressBar.setAttribute('aria-valuenow', progress);
    progressBar.textContent = 'Step ' + currentStep + ' (' + Math.round(progress) + '%)';

    // Handle Previous button visibility
    if (currentStep === 1) {
        prevBtn.style.display = 'none';
    } else {
        prevBtn.style.display = 'inline-block';
    }

    // Handle Next button text and behavior
    if (currentStep === totalSteps) {
        nextBtn.textContent = 'Submit';
    }
}

// Navigate between steps
nextBtn.addEventListener('click', () => {
    if (currentStep < totalSteps) {
        currentStep++;
        updateFormStep();
    }
});

prevBtn.addEventListener('click', () => {
    if (currentStep > 1) {
        currentStep--;
        updateFormStep();
    }
});
