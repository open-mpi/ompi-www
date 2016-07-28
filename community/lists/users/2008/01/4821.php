<?
$subject_val = "[OMPI users] OpenMP + OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 12 21:17:50 2008" -->
<!-- isoreceived="20080113021750" -->
<!-- sent="Sat, 12 Jan 2008 21:16:48 -0500" -->
<!-- isosent="20080113021648" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMP + OMPI" -->
<!-- id="309AA089-D16E-48F9-8E6F-E82BA5CE4F63_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMP + OMPI<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-12 21:16:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4820.php">rahmani: "Re: [OMPI users] openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey guys,
<br>
I know that threading is very immature (or broken) in the 1.2  
<br>
series,  But what happens if a user wants to use a threaded BLAS  
<br>
(GOTO) library with their MPI code and never has OpenMP/pthreads  
<br>
parallel regions with MPI calls?  Would this work?
<br>
<p>What about using OpenMP in their code but again all MPI calls happen  
<br>
outside parallel regions.  How would a process who is behind in  
<br>
execution handle a incoming message when it has not yet hit outside  
<br>
the threaded region ware the MPI_Recv() is called?  Would the library  
<br>
just hold on to it (if below the eager limit) and wait until someone  
<br>
calls the Recv that matches the message?
<br>
<p><p>Brock Palen
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
<li><strong>Next message:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4820.php">rahmani: "Re: [OMPI users] openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
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
