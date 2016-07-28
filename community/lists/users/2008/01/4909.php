<?
$subject_val = "Re: [OMPI users] process placement with toruqe and OpenMP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 14:19:28 2008" -->
<!-- isoreceived="20080129191928" -->
<!-- sent="Tue, 29 Jan 2008 20:19:21 +0100 (CET)" -->
<!-- isosent="20080129191921" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] process placement with toruqe and OpenMP" -->
<!-- id="46794.85.224.10.8.1201634361.squirrel_at_webmail.chalmers.se" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 14:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4910.php">Jeff Squyres: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p>For the above, -np 4 --bynode should work.
<br>
<p>&lt;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>&gt;
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; wont%
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4910.php">Jeff Squyres: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="4908.php">Brock Palen: "[OMPI users] process placement with toruqe and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
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
