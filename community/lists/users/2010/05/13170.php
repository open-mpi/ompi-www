<?
$subject_val = "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 08:11:06 2010" -->
<!-- isoreceived="20100527121106" -->
<!-- sent="Thu, 27 May 2010 08:11:00 -0400" -->
<!-- isosent="20100527121100" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="3FB71798-2EF4-4481-938C-54BD06F6019C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BFD7747.5070905_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 08:11:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 26, 2010, at 3:32 PM, Michael E. Thomadakis wrote:
<br>
<p><span class="quotelev1">&gt; How do you handle thread/task and memory affinity? Do you pass the requested affinity desires to the batch scheduler and them let it issue the specific placements for threads to the nodes ? 
</span><br>
<p>Not as of yet, no.  At the moment, Open MPI only obeys its own affinity settings, usually passed via mpirun (see mpirun(1)).
<br>
<p><span class="quotelev1">&gt; This is something we are concerned as we are running multiple jobs on same node and we don't want to oversubscribe cores by binding there threads inadvertandly. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at ompi_info 
</span><br>
<span class="quotelev1">&gt;  $ ompi_info | grep -i aff
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does this mean we have the full affinity support included or do I need to involve HWLOC in any way ?
</span><br>
<p>Yes, Open MPI processes can bind themselves to sockets / cores.  The 1.4 series uses PLPA behind the scenes for processor affinity stuff (the first_use stuff is for memory affinity).  The 1.5 series will eventually use hwloc (we just recently imported it into our development trunk, but it's still &quot;soaking&quot; before moving over to the v1.5 branch (we've found at least one minor problem so far).  It'll likely be there for the v1.5.1 series.
<br>
<p>That being said, you can certainly ignore OMPI's intrinsic binding capabilities and use a standalone program like hwloc-bind or taskset to bind MPI processes.
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
<li><strong>Next message:</strong> <a href="13171.php">Shaun Jackman: "Re: [OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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
