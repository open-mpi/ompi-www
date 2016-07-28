<?
$subject_val = "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 17:06:46 2009" -->
<!-- isoreceived="20090429210646" -->
<!-- sent="Wed, 29 Apr 2009 17:06:41 -0400" -->
<!-- isosent="20090429210641" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library" -->
<!-- id="01624B31-9F5D-4A71-8C9A-3A78FC568B83_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="79D9F0E6-9066-4793-B62D-1A6D6F1DCE3A_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 17:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="5911.php">Brian Blank: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="5911.php">Brian Blank: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Reply:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2009, at 5:03 PM, Brian Blank wrote:
<br>
<p><span class="quotelev1">&gt; Purify did find some other UMR (unitialize memory read) errors  
</span><br>
<span class="quotelev1">&gt; though, but they don't seem to be negativley impacting my  
</span><br>
<span class="quotelev1">&gt; application right now.  Nonetheless, I'll post them later today in  
</span><br>
<span class="quotelev1">&gt; case anyone is interested in them.
</span><br>
<p>Might as well; we've looked at such things before, but it's always  
<br>
good to refresh for bit rot, etc.  Many thanks!
<br>
<p><p><span class="quotelev1">&gt; Just to give you a sample of what it see's now, one of the UMR  
</span><br>
<span class="quotelev1">&gt; errors seems a little odd ... paffinity_solaris_module.c line 180.
</span><br>
<span class="quotelev1">&gt; if (P_ONLINE == pinfo.pi_state || P_NOINTR == pinfo.pi_state) {
</span><br>
<p>We'll have to throw this one to the Sun guys... that's their  
<br>
module.  :-)
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
<li><strong>Next message:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Previous message:</strong> <a href="5911.php">Brian Blank: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="5911.php">Brian Blank: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>Reply:</strong> <a href="5913.php">Terry Dontje: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
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
