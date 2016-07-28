<?
$subject_val = "Re: [OMPI users] disabling tcp altogether";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 13:52:29 2008" -->
<!-- isoreceived="20080604175229" -->
<!-- sent="Wed, 4 Jun 2008 13:52:12 -0400" -->
<!-- isosent="20080604175212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] disabling tcp altogether" -->
<!-- id="9C4D658E-DD76-418F-8348-FD42AE2EC574_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4846A924.5080505_at_ceng.metu.edu.tr" -->
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
<strong>Subject:</strong> Re: [OMPI users] disabling tcp altogether<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 13:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5807.php">Jeff Squyres: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5798.php">tayfun sen: "[OMPI users] disabling tcp altogether"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2008, at 10:39 AM, tayfun sen wrote:
<br>
<p><span class="quotelev1">&gt; I would like to run an OpenMPI application on one node and since I  
</span><br>
<span class="quotelev1">&gt; think
</span><br>
<span class="quotelev1">&gt; it would be better performance wise I want it to use shared memory for
</span><br>
<span class="quotelev1">&gt; communication and not tcp. Is it possible to use shared memory not  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; for MPI communication but also for control messages and other similar
</span><br>
<span class="quotelev1">&gt; inner MPI related communication? (so no tcp communication whatsoever  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; used).
</span><br>
<p>I'm afraid not -- the only &quot;oob&quot; component (&quot;out of band&quot;, meaning  
<br>
&quot;not user-level MPI communication&quot;) that we have written is the TCP  
<br>
component.  We've toyed with the idea of writing others, but have  
<br>
never done it.
<br>
<p>The oob component is mainly used during process startup and shutdown.   
<br>
So it doesn't really affect your steady-state MPI performance.
<br>
<p><span class="quotelev1">&gt; # mpirun --host localhost --mca btl sm,self --mca oob ^tcp -n 2 hello
</span><br>
<span class="quotelev1">&gt; [myhost:08491] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<p>[snip]
<br>
<p>This is OMPI's way of telling you that by deselecting the tcp oob, it  
<br>
can't find any others to use.
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
<li><strong>Next message:</strong> <a href="5807.php">Jeff Squyres: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="5805.php">Jeff Squyres: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5798.php">tayfun sen: "[OMPI users] disabling tcp altogether"</a>
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
