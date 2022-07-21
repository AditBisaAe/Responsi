function save() {
    if(window.confirm("Are you sure about this?")){
            var nama = document.val.nama.value;
            var alamat = document.val.alamat.value;
            
        
            document.write(nama);
            document.write("<br>" + alamat);
    } 
    else {
        window.alert("failed to upload file!");
    }
}