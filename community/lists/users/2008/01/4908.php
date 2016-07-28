<?
$subject_val = "[OMPI users] process placement with toruqe and OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 14:07:10 2008" -->
<!-- isoreceived="20080129190710" -->
<!-- sent="Tue, 29 Jan 2008 14:06:01 -0500" -->
<!-- isosent="20080129190601" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] process placement with toruqe and OpenMP" -->
<!-- id="E0119DF4-E172-49EE-B72F-CDB31AC5533E_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] process placement with toruqe and OpenMP<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 14:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4909.php">Terry Frankcombe: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4909.php">Terry Frankcombe: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Reply:</strong> <a href="4909.php">Terry Frankcombe: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok so I ask the mpirun masters how would you do the following:
<br>
<p>I submit a job with torque (we use --with-tm) like the following:
<br>
<p>nodes=4:ppn=2
<br>
<p>My desired outcome is to have 1 mpi process per 2 cpus and use  
<br>
threaded blas (or my own OpenMP take your pick)
<br>
<p>Our cluster has some 4 core machines thus the above job sometimes  
<br>
ends up looking like
<br>
<p>nodes=1:ppn=4+nodes=2:ppn=2
<br>
<p>The mpirun -bynode command will work in the case i get 4 nodes with  
<br>
only 2 cpus free.  But if any machine other than the first machine is  
<br>
my node with 4 cores free given to me by moab, I would end up  
<br>
starting a extra process on the first node, where mpirun thinks  
<br>
another cpu is free, but that cpu is really to be used by OpenMP, and  
<br>
that the last process should be placed on the node that has 4 cpus free.
<br>
<p>I hope that wasn't to confusing, Its how to i launch hybrid jobs and  
<br>
make sure the process started by mpirun go where i want when my nodes  
<br>
have different core counts, and I am running via torque so using -H  
<br>
wont work, Also would prefer that all processes be started via TM.
<br>
<p>Is this posable ?
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
<li><strong>Next message:</strong> <a href="4909.php">Terry Frankcombe: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4909.php">Terry Frankcombe: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Reply:</strong> <a href="4909.php">Terry Frankcombe: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
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
