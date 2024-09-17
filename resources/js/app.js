import './bootstrap';

function closeAlert() {
    document.getElementById('alert').style.display = 'none';
}

function calculateLTV() {
    const loan = parseFloat(document.getElementById('loan').value) || 0;
    const value = parseFloat(document.getElementById('value').value) || 0;
    const ltv = value ? ((loan / value) * 100).toFixed(2) : 0;
    document.getElementById('ltv').value = `${ltv}%`;
}

document.getElementById('loan').addEventListener('input', calculateLTV);
document.getElementById('value').addEventListener('input', calculateLTV);
document.addEventListener('DOMContentLoaded', calculateLTV);

window.calculateLTV = calculateLTV;
window.closeAlert = closeAlert;
