<?
$subject_val = "Re: [OMPI users] Deadlock with barrier und RMA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 08:41:53 2011" -->
<!-- isoreceived="20110613124153" -->
<!-- sent="Mon, 13 Jun 2011 08:41:48 -0400" -->
<!-- isosent="20110613124148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with barrier und RMA" -->
<!-- id="73C589B5-16F7-48D8-8CCA-229628C26C6E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110611144327.GB3672_at_telvanni.starfleet" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-13 08:41:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16713.php">Barrett, Brian W: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16711.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16713.php">Barrett, Brian W: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16713.php">Barrett, Brian W: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think your program has a compile error in the Win_create() line.
<br>
<p>But other than that, I think you're missing some calls to MPI_WIN_FENCE.  The one-sided stuff in MPI-2 is really, really confusing.  
<br>
<p>Others on this list disagree with me, but I actively discourage people from using it.  Instead, especially if you're just starting with MPI, you might want to use MPI_SEND and MPI_RECV (and friends).
<br>
<p>I'd also suggest installing your own version of OMPI; the v1.0 series is several years out of date (either get your admin to install a more recent version, or install a personal copy, as someone outlined earlier in this thread).  There have been oodles of bug fixes and new features added since the v1.0 series.
<br>
<p><p>On Jun 11, 2011, at 10:43 AM, Ole Kliemann wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to use MPI on a cluster running OpenMPI 1.2.4 and starting
</span><br>
<span class="quotelev1">&gt; processes through PBSPro_11.0.2.110766. I've been running into a couple
</span><br>
<span class="quotelev1">&gt; of performance and deadlock problems and like to check whether I'm
</span><br>
<span class="quotelev1">&gt; making a mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of the deadlocks I managed to boil down to the attached example. I
</span><br>
<span class="quotelev1">&gt; run it on 8 cores. It usually deadlocks with all except one process
</span><br>
<span class="quotelev1">&gt; showing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	start barrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as last output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The one process out of order shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	start getting local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question at this point is simply whether this is expected behaviour
</span><br>
<span class="quotelev1">&gt; of OpenMPI. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; Ole
</span><br>
<span class="quotelev1">&gt; &lt;mpi_barrier.cc&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16713.php">Barrett, Brian W: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Previous message:</strong> <a href="16711.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16703.php">Ole Kliemann: "[OMPI users] Deadlock with barrier und RMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16713.php">Barrett, Brian W: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
<li><strong>Reply:</strong> <a href="16713.php">Barrett, Brian W: "Re: [OMPI users] Deadlock with barrier und RMA"</a>
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
