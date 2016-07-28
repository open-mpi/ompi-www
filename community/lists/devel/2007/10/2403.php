<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 14:04:34 2007" -->
<!-- isoreceived="20071008180434" -->
<!-- sent="Mon, 8 Oct 2007 12:04:24 -0600" -->
<!-- isosent="20071008180424" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-blocking modex" -->
<!-- id="B595AEC8-D853-4542-AC2A-3F961558D0B1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="470A6F03.4080000_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 14:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2404.php">Tim Prins: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>Previous message:</strong> <a href="2402.php">Andrew Friedley: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2402.php">Andrew Friedley: "Re: [OMPI devel] Non-blocking modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>Reply:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 8, 2007, at 11:55 AM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on implementing the RSL. Part of this is changing the  
</span><br>
<span class="quotelev2">&gt;&gt; modex
</span><br>
<span class="quotelev2">&gt;&gt; to use the process attribute system in the RSL. I had designed this
</span><br>
<span class="quotelev2">&gt;&gt; system to to include a non-blocking interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I have looked again and noticed that nobody is using the
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking modex receive. Because of this I am inclined to not have
</span><br>
<span class="quotelev2">&gt;&gt; such an interface in the RSL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hmm, would using a non-blocking modex recv improve performance in any
</span><br>
<span class="quotelev1">&gt; way, or have any other useful impacts?  If so, I would use it.
</span><br>
<p>No, no performance advantages.
<br>
<p>It was originally intended to allow a BTL to subscribe to modex  
<br>
information for a peer, and receive updates when that peer's  
<br>
information changed (say, a NIC died mid-run or was restarted mid- 
<br>
run).  Clearly, we haven't gone down that path at this time.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2404.php">Tim Prins: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>Previous message:</strong> <a href="2402.php">Andrew Friedley: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2402.php">Andrew Friedley: "Re: [OMPI devel] Non-blocking modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>Reply:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
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
