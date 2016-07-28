<?
$subject_val = "[OMPI users] Memory manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 23:13:12 2008" -->
<!-- isoreceived="20080513031312" -->
<!-- sent="Tue, 13 May 2008 13:12:57 +1000" -->
<!-- isosent="20080513031257" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="[OMPI users] Memory manager" -->
<!-- id="1210648377.5400.193.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] Memory manager<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 23:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5659.php">Rob Malpass: "[OMPI users] Migrating from lam-mpi"</a>
<li><strong>Previous message:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I'm trying to run an MPI app on an infiniband cluster with OpenMPI
<br>
1.2.6.
<br>
<p>When run on a single node, this app is grabbing large chunks of memory
<br>
(total per process ~8.5GB, including strace showing a single 4GB grab)
<br>
but not using it.  The resident memory use is ~40MB per process.  When
<br>
this app is compiled in serial mode (with conditionals to remove the MPI
<br>
calls) the memory use is more like what you'd expect, 40MB res and
<br>
~100MB vmem.
<br>
<p>Now I didn't write it so I'm not sure what extra stuff the MPI version
<br>
does, and we haven't tracked down the large memory grabs.
<br>
<p>Could it be that this vmem is being grabbed by the OpenMPI memory
<br>
manager rather than directly by the app?
<br>
<p>Ciao
<br>
Terry
<br>
<p><p><pre>
-- 
Dr. Terry Frankcombe
Research School of Chemistry, Australian National University
Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5659.php">Rob Malpass: "[OMPI users] Migrating from lam-mpi"</a>
<li><strong>Previous message:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Reply:</strong> <a href="5706.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
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
