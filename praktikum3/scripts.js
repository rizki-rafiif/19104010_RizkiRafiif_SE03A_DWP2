function tampil(){
    alert('Konichiwa!')
}

let warna = document.getElementById('warna')

warna.addEventListener('change', (event) =>{
    document.body.style.backgroundColor = warna.value
})

let x = window.prompt('Masukkan nama anda: ')
window.alert('Halo '+ x)