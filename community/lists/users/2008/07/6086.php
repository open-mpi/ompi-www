<?
$subject_val = "[OMPI users] Getting default hostfile on Open MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 10:10:41 2008" -->
<!-- isoreceived="20080716141041" -->
<!-- sent="Wed, 16 Jul 2008 11:09:01 -0300" -->
<!-- isosent="20080716140901" -->
<!-- name="Daniel Felix Ferber" -->
<!-- email="danielsforummail_at_[hidden]" -->
<!-- subject="[OMPI users] Getting default hostfile on Open MPI 1.3" -->
<!-- id="487E00FD.5000804_at_terra.com.br" -->
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
<strong>Subject:</strong> [OMPI users] Getting default hostfile on Open MPI 1.3<br>
<strong>From:</strong> Daniel Felix Ferber (<em>danielsforummail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-16 10:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6087.php">Adam Jundt: "[OMPI users] Open MPI on Cray XT4"</a>
<li><strong>Previous message:</strong> <a href="6085.php">Rolf vandeVaart: "Re: [OMPI users] vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6248.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6248.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Open MPI 1.2, I used following command to get the default host file:
<br>
ompi_info -a --parseable | grep rds_hostfile_path
<br>
<p>Now, on Open MPI 1.3, the parameter does not seem to exist anymore. I 
<br>
checked that there is another parameter 
<br>
(mca:orte:base:param:orte_default_hostfile), but its value is always empty.
<br>
<p>Which file whould I used for a system-wide default host file? Is there 
<br>
another way to query the path for this default host file? Or is a 
<br>
command to query which hosts are going to be used by mpi by default?
<br>
<p>Best regards,
<br>
Daniel Felix Ferber
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6087.php">Adam Jundt: "[OMPI users] Open MPI on Cray XT4"</a>
<li><strong>Previous message:</strong> <a href="6085.php">Rolf vandeVaart: "Re: [OMPI users] vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6248.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6248.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
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
