<?
$subject_val = "Re: [OMPI users] Highly variable performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 06:42:52 2010" -->
<!-- isoreceived="20100623104252" -->
<!-- sent="Wed, 23 Jun 2010 12:44:16 +0200" -->
<!-- isosent="20100623104416" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Highly variable performance" -->
<!-- id="87mxumrptr.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87zkzdtbmw.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Highly variable performance<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 06:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13400.php">Jeff Squyres: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up on this, I have partial resolution.  The primary culprit
<br>
appears to be stale files in a ramdisk non-uniformly distributed across
<br>
the sockets, thus interactingly poorly with NUMA.  The slow runs
<br>
invariably have high numa_miss and numa_foreign counts.  I still have
<br>
trouble making it explain up to a factor of 10 degredation, but it
<br>
certainly explains a factor of 3.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13400.php">Jeff Squyres: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
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
