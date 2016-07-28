<?
$subject_val = "Re: [OMPI devel] memory manager RFC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 17:21:53 2008" -->
<!-- isoreceived="20080604212153" -->
<!-- sent="Wed, 4 Jun 2008 17:21:43 -0400 (EDT)" -->
<!-- isosent="20080604212143" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory manager RFC" -->
<!-- id="Pine.LNX.4.64.0806041719420.13559_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4846EC56.4040803_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory manager RFC<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 17:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4097.php">Jeff Squyres: "[OMPI devel] heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="4095.php">Ralf Wildenhues: "[OMPI devel] some Makefile.am questions"</a>
<li><strong>In reply to:</strong> <a href="4093.php">Paul H. Hargrove: "Re: [OMPI devel] memory manager RFC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 4 Jun 2008, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Brian states
</span><br>
<span class="quotelev2">&gt;&gt; This will allow users to turn ptmalloc2 support on/off at application 
</span><br>
<span class="quotelev2">&gt;&gt; link time instead of MPI compile time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Where I assume &quot;MPI compile time&quot; means when the MPI *implementation* is
</span><br>
<span class="quotelev1">&gt; compiled.
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; So what about LD_PRELOAD?  Can the user defer the decision to use
</span><br>
<span class="quotelev1">&gt; ptmalloc until application launch?
</span><br>
<span class="quotelev1">&gt; If so, this begs the question of an mpirun option to &quot;enable
</span><br>
<span class="quotelev1">&gt; leave_pinned, placing libompi-malloc.so in LD_PRELOAD if required&quot;.
</span><br>
<span class="quotelev1">&gt; Can/will/should such an option exist?
</span><br>
<p>Such an option can definitely exist.  However, there's no way that I can 
<br>
work on this, so it isn't going to happen any time soon.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4097.php">Jeff Squyres: "[OMPI devel] heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="4095.php">Ralf Wildenhues: "[OMPI devel] some Makefile.am questions"</a>
<li><strong>In reply to:</strong> <a href="4093.php">Paul H. Hargrove: "Re: [OMPI devel] memory manager RFC"</a>
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
