<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 09:45:22 2008" -->
<!-- isoreceived="20080407134522" -->
<!-- sent="Mon, 7 Apr 2008 16:45:12 +0300" -->
<!-- isosent="20080407134512" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="20080407134512.GP3614_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C41F7D87.CF92%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Affect of compression on modex and launch messages<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 09:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 07, 2008 at 07:28:07AM -0600, Ralph H Castain wrote:
<br>
<span class="quotelev2">&gt; &gt; Also can you explain how
</span><br>
<span class="quotelev2">&gt; &gt; allgather is implemented in orte (sorry if you already explained this once
</span><br>
<span class="quotelev2">&gt; &gt; and I missed it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default method is for each proc to send its modex data to its local
</span><br>
<span class="quotelev1">&gt; daemon. The local daemon collects the messages until all of its local procs
</span><br>
<span class="quotelev1">&gt; have contributed, then sends the collected data to the rank=0 application
</span><br>
<span class="quotelev1">&gt; proc. One rank=0 has received a message from every daemon, it xcasts the
</span><br>
<span class="quotelev1">&gt; collected result to all procs in its job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Only collected result is compressed or messages from each proc to local
<br>
daemon and messages from local daemon to rank=0 are compressed too?
<br>
And, may be a stupid question, but I have to ask :) When rank=0 xcast
<br>
collected modex it compress it once or for each rank separately.
<br>
Also I think if rank=0 will compress each modex message during
<br>
receive it can save some work during xcast.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
