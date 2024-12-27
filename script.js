// Menampilkan konfirmasi saat pemesanan
function confirmOrder() {
    const name = document.querySelector('input[name="customer_name"]').value;
    const address = document.querySelector('textarea[name="address"]').value;
    
    if (name === "" || address === "") {
        alert("Please fill in your details before placing the order!");
        return false;
    }
    
    const confirmAction = confirm(`Are you sure you want to place the order for ${name}?`);
    return confirmAction;
}
