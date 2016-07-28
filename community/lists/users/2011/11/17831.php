<?
$subject_val = "[OMPI users] file view with struct data type";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 25 02:34:35 2011" -->
<!-- isoreceived="20111125073435" -->
<!-- sent="Fri, 25 Nov 2011 15:34:30 +0800" -->
<!-- isosent="20111125073430" -->
<!-- name="Thomas Anderson" -->
<!-- email="t.dt.aanderson_at_[hidden]" -->
<!-- subject="[OMPI users] file view with struct data type" -->
<!-- id="CAGnxGJ2=gUcVTpBvetgMVYXzvHi9SApEzCDUUvrEM_P6M3dDeQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] file view with struct data type<br>
<strong>From:</strong> Thomas Anderson (<em>t.dt.aanderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-25 02:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I read some examples either to open file/ set file view[1][2] or to
<br>
use struct data type[3] only. How if a developer wants to set file
<br>
view with struct data type (as file type)? I notice that mpi_set_view
<br>
requires parameters `MPI_Datatype etype, MPI_Datatype filetype.'
<br>
However, for struct data type, it has multiple elementary types
<br>
(ARRAY_OF_TYPES). How can a developer determine which data type is the
<br>
elementary type in view? In addition, is it necessary (or a must have
<br>
step) to set view if one decides to open file?
<br>
<p>Thanks
<br>
<p>[1]. <a href="http://sirius2.umdnj.edu/~rossiar/hpcworkshop/hpc_files/Introduction_to_MPI/resources/mpi/paralle_io/1224.html">http://sirius2.umdnj.edu/~rossiar/hpcworkshop/hpc_files/Introduction_to_MPI/resources/mpi/paralle_io/1224.html</a>
<br>
[2]. <a href="https://www.cac.cornell.edu/VW/MPIAdvTopics/fileviewex.aspx">https://www.cac.cornell.edu/VW/MPIAdvTopics/fileviewex.aspx</a>
<br>
[3]. <a href="http://users.abo.fi/Mats.Aspnas/PP2010/examples/MPI/datatype.c">http://users.abo.fi/Mats.Aspnas/PP2010/examples/MPI/datatype.c</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17832.php">Reuti: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17830.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
