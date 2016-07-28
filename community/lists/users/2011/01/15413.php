<?
$subject_val = "[OMPI users] MPI_Allreduce for MPI_INTEGER8 in 1.5.1?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 17:33:49 2011" -->
<!-- isoreceived="20110124223349" -->
<!-- sent="Mon, 24 Jan 2011 23:33:42 +0100" -->
<!-- isosent="20110124223342" -->
<!-- name="Harald Anlauf" -->
<!-- email="anlauf_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allreduce for MPI_INTEGER8 in 1.5.1?" -->
<!-- id="4D3DFE46.4050800_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allreduce for MPI_INTEGER8 in 1.5.1?<br>
<strong>From:</strong> Harald Anlauf (<em>anlauf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 17:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15414.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO ?"</a>
<li><strong>Previous message:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>MPI_Allreduce works for me with MPI_INTEGER8 for all OpenMPI
<br>
versions up to 1.4.3.  However, with OpenMPI 1.5.1 I get a
<br>
failure at runtime:
<br>
<p>[proton:23642] *** An error occurred in MPI_Allreduce: the reduction
<br>
operation MPI_SUM is not defined on the MPI_INTEGER8 datatype
<br>
[proton:23642] *** on communicator MPI_COMM_WORLD
<br>
[proton:23642] *** MPI_ERR_OP: invalid reduce operation
<br>
[proton:23642] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>Funnily the reduction operation works for MPI_REAL8.
<br>
<p>Both 1.4.3 and 1.5.1 have been configured with Intel Fortran 12,
<br>
but I get the failure only for 1.5.1 and only for integer8.
<br>
<p>% /opt/ifort12/openmpi-1.4/bin/ompi_info -all |grep integer8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer8: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 align: 1
<br>
% /opt/ifort12/openmpi-1.5/bin/ompi_info -all |grep integer8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer8: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 align: 1
<br>
<p>Can anybody reproduce this?
<br>
<p>Cheers,
<br>
Harald
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15414.php">Mohamed Husain A.K: "[OMPI users] Serial Rapid IO ?"</a>
<li><strong>Previous message:</strong> <a href="15412.php">Jeff Squyres: "Re: [OMPI users] bash: orted: ... / Kedar Soparkar"</a>
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
