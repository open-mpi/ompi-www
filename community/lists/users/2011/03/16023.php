<?
$subject_val = "Re: [OMPI users] Shared Memory Performance Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 27 20:42:32 2011" -->
<!-- isoreceived="20110328004232" -->
<!-- sent="Sun, 27 Mar 2011 20:42:25 -0400" -->
<!-- isosent="20110328004225" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Performance Problem." -->
<!-- id="3DB9EAE2-7432-4540-A71C-20B5A46B45B4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9E590BC4-7B24-4932-8500-A62557E3B897_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Performance Problem.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-27 20:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16024.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16022.php">Jeff Squyres: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16027.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16027.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your program runs faster across 3 processes, 2 of which are local to each other, with --mca btl tcp,self compared to --mca btl tcp,sm,self, then something is very, very strange.
<br>
<p>Tim cites all kinds of things that can cause slowdowns, but it's still very, very odd that simply enabling using the shared memory communications channel in Open MPI *slows your overall application down*.
<br>
<p>How much does your application slow down in wall clock time?  Seconds?  Minutes?  Hours?  (anything less than 1 second is in the noise)
<br>
<p><p><p>On Mar 27, 2011, at 10:33 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2011, at 7:37 AM, Tim Prince wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/27/2011 2:26 AM, Michele Marena wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My application performs good without shared memory utilization, but with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared memory I get performance worst than without of it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I make a mistake? Don't I pay attention to something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know OpenMPI uses /tmp directory to allocate shared memory and it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the local filesystem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess you mean shared memory message passing.   Among relevant parameters may be the message size where your implementation switches from cached copy to non-temporal (if you are on a platform where that terminology is used).  If built with Intel compilers, for example, the copy may be performed by intel_fast_memcpy, with a default setting which uses non-temporal when the message exceeds about some preset size, e.g. 50% of smallest L2 cache for that architecture.
</span><br>
<span class="quotelev2">&gt;&gt; A quick search for past posts seems to indicate that OpenMPI doesn't itself invoke non-temporal, but there appear to be several useful articles not connected with OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; In case guesses aren't sufficient, it's often necessary to profile (gprof, oprofile, Vtune, ....) to pin this down.
</span><br>
<span class="quotelev2">&gt;&gt; If shared message slows your application down, the question is whether this is due to excessive eviction of data from cache; not a simple question, as most recent CPUs have 3 levels of cache, and your application may require more or less data which was in use prior to the message receipt, and may use immediately only a small piece of a large message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There were several papers published in earlier years about shared memory performance in the 1.2 series.There were known problems with that implementation, which is why it was heavily revised for the 1.3/4 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might also look at the following links, though much of it has been updated to the 1.3/4 series as we don't really support 1.2 any more:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prince
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="16024.php">Jack Bryan: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="16022.php">Jeff Squyres: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>In reply to:</strong> <a href="16015.php">Ralph Castain: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16027.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Reply:</strong> <a href="16027.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
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
