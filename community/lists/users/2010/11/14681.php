<?
$subject_val = "Re: [OMPI users] Question about collective messages implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 09:50:16 2010" -->
<!-- isoreceived="20101102135016" -->
<!-- sent="Tue, 2 Nov 2010 09:50:09 -0400" -->
<!-- isosent="20101102135009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about collective messages implementation" -->
<!-- id="ECDC7C2B-B1D2-42A2-9343-B56EB8BCB0D8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20101102T110423-356_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about collective messages implementation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 09:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14680.php">Jeff Squyres: "Re: [OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="14677.php">Jerome Reybert: "[OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2010, at 6:21 AM, Jerome Reybert wrote:
<br>
<p><span class="quotelev1">&gt; Each host_comm communicator is grouping tasks by machines. I ran this version,
</span><br>
<span class="quotelev1">&gt; but performances are worst than the current version (each task performing its
</span><br>
<span class="quotelev1">&gt; own Lapack function). I have several questions:
</span><br>
<p><span class="quotelev1">&gt;  - in my implementation, is MPI_Bcast aware that it should use shared memory
</span><br>
<span class="quotelev1">&gt; memory communication? Is data go through the network? It seems it is the case,
</span><br>
<span class="quotelev1">&gt; considering the first results.
</span><br>
<p>It should use shared memory by default.
<br>
<p><span class="quotelev1">&gt;  - is there any other methods to group task by machine, OpenMPI being aware
</span><br>
<span class="quotelev1">&gt; that it is grouping task by shared memory?
</span><br>
<p>The MPI API does not expose this kind of functionality, but there's at least 1 proposal in front of the MPI Forum to do this kind of thing.
<br>
<p>As Ashley mentioned, you might want to do this MPI_Comm_split once and then just use that communicator from then on.  The code snipit you sent leaks the host_comm, for example.
<br>
<p><span class="quotelev1">&gt;  - is it possible to assign a policy (in this case, a shared memory policy) to
</span><br>
<span class="quotelev1">&gt; a Bcast or a Barrier call?
</span><br>
<p>Not really, no.
<br>
<p><span class="quotelev1">&gt;  - do you have any better idea for this problem? :)
</span><br>
<p>Ashley probably hit the nail on the head.  The short version is that OMPI aggressively polls for progress.  Forcing the degraded mode will help (because it'll yield), but it won't solve the problem because it'll still be aggressively polling -- it'll just yield every time it polls.  But it's still polling.
<br>
<p>We've had many discussions about this topic, but have never really addressed it -- the need for low latency has been greater than the need for blocking/not-consuming-CPU progress.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="14682.php">Jim Kusznir: "[OMPI users] Building OpenMPI 1.5.x"</a>
<li><strong>Previous message:</strong> <a href="14680.php">Jeff Squyres: "Re: [OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="14677.php">Jerome Reybert: "[OMPI users] Question about collective messages implementation"</a>
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
