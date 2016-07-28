<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 15:03:14 2009" -->
<!-- isoreceived="20090120200314" -->
<!-- sent="Tue, 20 Jan 2009 15:03:02 -0500" -->
<!-- isosent="20090120200302" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="49762DF6.7020700_at_myri.com" -->
<!-- charset="Big5" -->
<!-- inreplyto="49762128.5080707_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 15:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<li><strong>Previous message:</strong> <a href="5242.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev2">&gt;&gt; replace the fifo&#161;&#166;s with a single link list per process in shared 
</span><br>
<span class="quotelev2">&gt;&gt; memory, with senders to this process adding match envelopes 
</span><br>
<span class="quotelev2">&gt;&gt; atomically, with each process reading its own link list (multiple 
</span><br>
<p><p><span class="quotelev1">&gt; *) Doesn't strike me as a &quot;simple&quot; change.
</span><br>
<p>Actually, it's much simpler than trying to optimize/scale the N^2
<br>
implementation, IMHO.
<br>
<p><span class="quotelev1">&gt; *) Not sure this addresses all-to-all well.  E.g., let's say you post a 
</span><br>
<span class="quotelev1">&gt; receive for a particular source.  Do you then wade through a long FIFO 
</span><br>
<span class="quotelev1">&gt; to look for your match?
</span><br>
<p>The tradeoff is between demultiplexing by the sender, which cost in time
<br>
and in space, or by the receiver, which cost an atomic inc. ANY_TAG
<br>
forces you to demultiplex on the receive side anyway. Regarding
<br>
all-to-all, it won't be more expensive if the receives are pre-posted,
<br>
and they should be.
<br>
<p><span class="quotelev1">&gt; What the RFC talks about is not the last SM development we'll ever 
</span><br>
<span class="quotelev1">&gt; need.  It's only supposed to be one step forward from where we are 
</span><br>
<span class="quotelev1">&gt; today.  The &quot;single queue per receiver&quot; approach has many advantages, 
</span><br>
<span class="quotelev1">&gt; but I think it's a different topic.
</span><br>
<p>But is this intermediate step worth it or should we (well, you :-) ) go
<br>
directly for the single queue model ?
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5244.php">Jeff Squyres: "Re: [OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<li><strong>Previous message:</strong> <a href="5242.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5246.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
