$('body').on('change','#taxStatus',function(){
// alert('ok');
var id=$(this).attr('data-id');
if (this.checked){
    var status ='active';
}else {
    status = 'inactive';
}
$('.loader__').show();
$.ajax({
url:"tax/update-status/" + id + '/' + status,
method:'get',
success:function (result) {
    $('.loader__').hide();
}
});
});


$(document).ready(function(){
  


///confirmDelete of record
// $(".confirmDelete").click(function(){
// var name = $(this).attr("name");
// if(confirm("Are you sure to delete this "+name+"?")) {
//   return true;
//
// }
// return false;
// });

const site_url = "http://localhost/crm/public/";
//COnfirm Delete with Sweet Alert




  $(document).on("click",".confirmDelete",function(){
  var record = $(this).attr("record");
   var recordid = $(this).attr("recordid");
   Swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to revert this!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
     if (result.isConfirmed) {
       Swal.fire(
         'Deleted!',
         'Your file has been deleted.',
         'success'
       )
       window.location.href=site_url +"delete-"+record+"/"+recordid;
 
     }
   });
 
  });


});
