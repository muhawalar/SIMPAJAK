// custom.js

document.getElementById("status_wajib_pajak").addEventListener("change", function() {
    var selectedOption = this.options[this.selectedIndex];
    var selectedValue = selectedOption.value;
    var selectedTo = selectedOption.getAttribute("data-to");
    var selectedStatus = selectedOption.textContent.trim();
    var pesanTextarea = document.getElementById("pesan");
    var pesan = pesanTextarea.value.trim();

    if (selectedValue !== "" && selectedTo !== "") {
        var params = {
            'token': 'wciuqxangcor7rw7',
            'to': selectedTo,
            'body': pesan !== "" ? pesan : `WhatsApp API on UltraMsg.com works good - ${selectedStatus}`
        };

        fetch("https://api.ultramsg.com/instance54318/messages/chat", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams(params)
        })
        .then(response => response.json())
        .then(data => {
            // Lakukan sesuatu dengan data yang diterima jika diperlukan
            console.log(data);
        })
        .catch(error => console.error("Error sending message:", error));
    }
});
