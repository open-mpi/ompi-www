<?
$subject_val = "[OMPI users] Linking MPI applications with pgi IPA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 14:59:05 2009" -->
<!-- isoreceived="20090619185905" -->
<!-- sent="Fri, 19 Jun 2009 14:57:59 -0400" -->
<!-- isosent="20090619185759" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Linking MPI applications with pgi IPA" -->
<!-- id="02BF0806-DC1C-433F-BA22-44848A512771_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Linking MPI applications with pgi IPA<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 14:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9646.php">Rajesh Sudarsan: "[OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Reply:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When linking application that are being compiled and linked with the - 
<br>
Mipa=fast,inline option, the IPA stops with errors like this case  
<br>
with amber:
<br>
<p>The following function(s) are called, but no IPA information is  
<br>
available:
<br>
mpi_allgatherv_, mpi_gatherv_, mpi_bcast_, mpi_wait_, mpi_get_count_,  
<br>
mpi_recv_, mpi_isend_, mpi_gather_, mpi_allreduce_, mpi_abort_,  
<br>
mpi_finalize_, mpi_send_
<br>
Linking without IPA
<br>
<p>Is there a way to tell the compiler its ok to ignore the MPI library  
<br>
and do IPA for everything else?
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9646.php">Rajesh Sudarsan: "[OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Reply:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
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
