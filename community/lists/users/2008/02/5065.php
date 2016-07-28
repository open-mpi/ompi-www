<?
$subject_val = "Re: [OMPI users] openmpi/openib problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 20:01:07 2008" -->
<!-- isoreceived="20080222010107" -->
<!-- sent="Thu, 21 Feb 2008 17:00:46 -0800" -->
<!-- isosent="20080222010046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/openib problems" -->
<!-- id="4DACFACF-345D-418C-A503-F83B229A92EE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47BC692A.2090700_at_uni.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/openib problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 20:00:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5066.php">John Markus Bjørndalen: "[OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2008, at 9:53 AM, jessie puls wrote:
<br>
<p><span class="quotelev1">&gt; Secifically Jobs are not being handed to other nodes ever.  Running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl openib,self -np 20 /bin/hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will return the same hostname 20 times, even if I specify -bynode as  
</span><br>
<span class="quotelev1">&gt; an argument.
</span><br>
<p><p>This is normal, and not an InfiniBand issue.  You need to tell Open  
<br>
MPI where to run your jobs (i.e., which hosts).  If you don't, Open  
<br>
MPI assumes you want to run on the localhost.
<br>
<p>A simple way to specify where to run is to use a hostfile:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#simple-launch">http://www.open-mpi.org/faq/?category=running#simple-launch</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5066.php">John Markus Bjørndalen: "[OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5064.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5052.php">jessie puls: "Re: [OMPI users] openmpi/openib problems"</a>
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
