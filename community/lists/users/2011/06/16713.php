<?
$subject_val = "Re: [OMPI users] Deadlock with barrier und RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 12:12:03 2011" -->
<!-- isoreceived="20110613161203" -->
<!-- sent="Mon, 13 Jun 2011 16:11:44 +0000" -->
<!-- isosent="20110613161144" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with barrier und RMA" -->
<!-- id="CA1B8C17.538F%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="73C589B5-16F7-48D8-8CCA-229628C26C6E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock with barrier und RMA<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-13 12:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16714.php">George Bosilca: "[OMPI users] Deadline Extension: HeteroPAR @ Euro-Par 2011"</a>
<li><strong>Previous message:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are no missing calls to MPI_WIN_FENCE as the code is using passive
<br>
synchronization (lock/unlock).  The test code looks correct, I think this
<br>
is a bug in Open MPI.  The code also fails on the development trunk, so
<br>
upgrading will not fix the bug.  I've filed a bug (#2809).  Unfortunately,
<br>
I'm not sure when I'll have time to investigate further.
<br>
<p>One other note...  Even when everything works correctly, Open MPI's
<br>
passive target synchronization implementation is pretty poor (this coming
<br>
from the guy who wrote the code).  Open MPI doesn't offer asynchronous
<br>
progress for lock/unlock, so all processes have to be entering in the MPI
<br>
library for progress.  Also, the latency isn't the best.
<br>
<p>Brian
<br>
<p>On 6/13/11 6:41 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I think your program has a compile error in the Win_create() line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But other than that, I think you're missing some calls to MPI_WIN_FENCE.
</span><br>
<span class="quotelev1">&gt;The one-sided stuff in MPI-2 is really, really confusing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Others on this list disagree with me, but I actively discourage people
</span><br>
<span class="quotelev1">&gt;from using it.  Instead, especially if you're just starting with MPI, you
</span><br>
<span class="quotelev1">&gt;might want to use MPI_SEND and MPI_RECV (and friends).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'd also suggest installing your own version of OMPI; the v1.0 series is
</span><br>
<span class="quotelev1">&gt;several years out of date (either get your admin to install a more recent
</span><br>
<span class="quotelev1">&gt;version, or install a personal copy, as someone outlined earlier in this
</span><br>
<span class="quotelev1">&gt;thread).  There have been oodles of bug fixes and new features added
</span><br>
<span class="quotelev1">&gt;since the v1.0 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 11, 2011, at 10:43 AM, Ole Kliemann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to use MPI on a cluster running OpenMPI 1.2.4 and starting
</span><br>
<span class="quotelev2">&gt;&gt; processes through PBSPro_11.0.2.110766. I've been running into a couple
</span><br>
<span class="quotelev2">&gt;&gt; of performance and deadlock problems and like to check whether I'm
</span><br>
<span class="quotelev2">&gt;&gt; making a mistake.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One of the deadlocks I managed to boil down to the attached example. I
</span><br>
<span class="quotelev2">&gt;&gt; run it on 8 cores. It usually deadlocks with all except one process
</span><br>
<span class="quotelev2">&gt;&gt; showing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     start barrier
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as last output.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The one process out of order shows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     start getting local
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question at this point is simply whether this is expected behaviour
</span><br>
<span class="quotelev2">&gt;&gt; of OpenMPI. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt; Ole
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpi_barrier.cc&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16714.php">George Bosilca: "[OMPI users] Deadline Extension: HeteroPAR @ Euro-Par 2011"</a>
<li><strong>Previous message:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>In reply to:</strong> <a href="16712.php">Jeff Squyres: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
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
