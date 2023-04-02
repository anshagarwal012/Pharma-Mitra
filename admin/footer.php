</div>
<div id="x-teleport-target"></div>
<script src="
https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js
"></script>
<script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());

    function tableToCSV() {
        csv_data = [];
        var hea = document.querySelectorAll('table th.gridjs-th');
        hea = Array.from(hea);
        hea.shift()
        console.log(hea);
        data = dta
        data.reverse();
        var row = []
        for (let i = 0; i < hea.length; i++) {
            row.push(hea[i].textContent.trim());
        }
        data.unshift(row);
        for (let j = 0; j < data.length; j++) {
            var da = data[j].map(e=>{
               return '"'+ e + '"';
            })
            csv_data.push(da.join(','));
        }
        downloadCSVFile(csv_data.join('\n'));
    }

    function downloadCSVFile(csv_data) {
        CSVFile = new Blob([csv_data], {
            type: "text/csv"
        });
        var temp_link = document.createElement('a');
        temp_link.download = "donwload.csv";
        var url = window.URL.createObjectURL(CSVFile);
        temp_link.href = url;
        temp_link.style.display = "none";
        document.body.appendChild(temp_link);
        temp_link.click();
        document.body.removeChild(temp_link);
    }
    da = [];
    $('.delete_').on('click',function(){
        $('input.multi_select:checked').each(function(e){
        da.push($(this).val())
        })
        if(da.length == 0){
            alert("Please Select At Least One");
        }else{
            var table = '';
            if(window.location.pathname.includes('/home')){
                table = 'funding';
            }else if(window.location.pathname.includes('/lp')){
                table = 'lp';
            }else{
                table = "contacts";
            }
            var url = window.location.origin+"/admin/delete.php?table="+table+"&id=";
           var l = confirm("Are You Sure You Want To Delete This ?")
           if(l){
               window.location.href = url+JSON.stringify(da);
           }
        }
    })

</script>
</body>

</html>
<?php
mysqli_close($conn);
