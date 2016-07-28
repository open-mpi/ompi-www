<?
$subject_val = "Re: [OMPI users] process placement with toruqe and OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 12:04:56 2008" -->
<!-- isoreceived="20080207170456" -->
<!-- sent="Thu, 07 Feb 2008 12:04:55 -0500" -->
<!-- isosent="20080207170455" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] process placement with toruqe and OpenMP" -->
<!-- id="47AB3A37.2090105_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0119DF4-E172-49EE-B72F-CDB31AC5533E_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] process placement with toruqe and OpenMP<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 12:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Previous message:</strong> <a href="5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brock,
<br>
<p>As far as I know there is no way to do this with Open MPI and torque. I 
<br>
believe people usually use hostfiles to do this sort of thing, but 
<br>
hostfiles do not work with torque.
<br>
<p>You may want to look into the launcher commands to see if torque will do 
<br>
it for you. Slurm has an option '--cpus-per-task', but I just realized 
<br>
we don't handle that properly...
<br>
<p>Tim
<br>
<p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; Ok so I ask the mpirun masters how would you do the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I submit a job with torque (we use --with-tm) like the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nodes=4:ppn=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My desired outcome is to have 1 mpi process per 2 cpus and use  
</span><br>
<span class="quotelev1">&gt; threaded blas (or my own OpenMP take your pick)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our cluster has some 4 core machines thus the above job sometimes  
</span><br>
<span class="quotelev1">&gt; ends up looking like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nodes=1:ppn=4+nodes=2:ppn=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpirun -bynode command will work in the case i get 4 nodes with  
</span><br>
<span class="quotelev1">&gt; only 2 cpus free.  But if any machine other than the first machine is  
</span><br>
<span class="quotelev1">&gt; my node with 4 cores free given to me by moab, I would end up  
</span><br>
<span class="quotelev1">&gt; starting a extra process on the first node, where mpirun thinks  
</span><br>
<span class="quotelev1">&gt; another cpu is free, but that cpu is really to be used by OpenMP, and  
</span><br>
<span class="quotelev1">&gt; that the last process should be placed on the node that has 4 cpus free.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope that wasn't to confusing, Its how to i launch hybrid jobs and  
</span><br>
<span class="quotelev1">&gt; make sure the process started by mpirun go where i want when my nodes  
</span><br>
<span class="quotelev1">&gt; have different core counts, and I am running via torque so using -H  
</span><br>
<span class="quotelev1">&gt; wont work, Also would prefer that all processes be started via TM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this posable ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Previous message:</strong> <a href="5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
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
