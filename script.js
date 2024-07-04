document.getElementById('price-check-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var distance = document.getElementById('distance').value;
    var costPerKm = 15000;
    var totalCost = distance * costPerKm;
    
    document.getElementById('result').innerText = 'Total Biaya: Rp. ' + totalCost.toLocaleString();
});