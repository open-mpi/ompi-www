<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 10:13:59 2008" -->
<!-- isoreceived="20080407141359" -->
<!-- sent="Mon, 7 Apr 2008 17:13:49 +0300" -->
<!-- isosent="20080407141349" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="20080407141349.GQ3614_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C41F83BE.CF9A%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-04-07 10:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3676.php">Ralph H Castain: "[OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Previous message:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 07, 2008 at 07:54:38AM -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/7/08 7:45 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Apr 07, 2008 at 07:28:07AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also can you explain how
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; allgather is implemented in orte (sorry if you already explained this once
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and I missed it).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The default method is for each proc to send its modex data to its local
</span><br>
<span class="quotelev3">&gt; &gt;&gt; daemon. The local daemon collects the messages until all of its local procs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have contributed, then sends the collected data to the rank=0 application
</span><br>
<span class="quotelev3">&gt; &gt;&gt; proc. One rank=0 has received a message from every daemon, it xcasts the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collected result to all procs in its job.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Only collected result is compressed or messages from each proc to local
</span><br>
<span class="quotelev2">&gt; &gt; daemon and messages from local daemon to rank=0 are compressed too?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The individual inbound messages are not currently compressed prior to
</span><br>
<span class="quotelev1">&gt; sending - too small to bother
</span><br>
Make sense.
<br>
<p><span class="quotelev2">&gt; &gt; Also I think if rank=0 will compress each modex message during
</span><br>
<span class="quotelev2">&gt; &gt; receive it can save some work during xcast.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems to me like one compress of the entire message has to be a great deal
</span><br>
<span class="quotelev1">&gt; faster than N compressions of N small messages...
</span><br>
The idea is that modex receive and compress will overlap.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3676.php">Ralph H Castain: "[OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Previous message:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3674.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
