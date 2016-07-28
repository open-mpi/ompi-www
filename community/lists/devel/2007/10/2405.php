<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 14:11:41 2007" -->
<!-- isoreceived="20071008181141" -->
<!-- sent="Mon, 8 Oct 2007 14:11:36 -0400" -->
<!-- isosent="20071008181136" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-blocking modex" -->
<!-- id="57C6E8FB-2210-4456-AE98-43DBBD192EC4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B595AEC8-D853-4542-AC2A-3F961558D0B1_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 14:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2406.php">Andreas Knüpfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2404.php">Tim Prins: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2403.php">Brian Barrett: "Re: [OMPI devel] Non-blocking modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2404.php">Tim Prins: "Re: [OMPI devel] Non-blocking modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah the non-blocking interface has some fault tolerance benefits as  
<br>
Brian mentioned. We are not quite far enough along to use it yet. I  
<br>
think that we might need to extend it a bit, but I haven't looked at  
<br>
it in enough detail to say how exactly at the moment.
<br>
<p>So I would say for the moment leave it out, but leave a note in there  
<br>
that a non-blocking interface may be added in the future to aid in  
<br>
network path detection and recovery. Or something like that.
<br>
<p>-- Josh
<br>
<p>On Oct 8, 2007, at 2:04 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 8, 2007, at 11:55 AM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am working on implementing the RSL. Part of this is changing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use the process attribute system in the RSL. I had designed this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system to to include a non-blocking interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I have looked again and noticed that nobody is using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-blocking modex receive. Because of this I am inclined to not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such an interface in the RSL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hmm, would using a non-blocking modex recv improve performance in any
</span><br>
<span class="quotelev2">&gt;&gt; way, or have any other useful impacts?  If so, I would use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, no performance advantages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was originally intended to allow a BTL to subscribe to modex
</span><br>
<span class="quotelev1">&gt; information for a peer, and receive updates when that peer's
</span><br>
<span class="quotelev1">&gt; information changed (say, a NIC died mid-run or was restarted mid-
</span><br>
<span class="quotelev1">&gt; run).  Clearly, we haven't gone down that path at this time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2406.php">Andreas Knüpfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2404.php">Tim Prins: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2403.php">Brian Barrett: "Re: [OMPI devel] Non-blocking modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2404.php">Tim Prins: "Re: [OMPI devel] Non-blocking modex"</a>
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
