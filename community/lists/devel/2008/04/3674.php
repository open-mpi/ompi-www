<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 09:54:54 2008" -->
<!-- isoreceived="20080407135454" -->
<!-- sent="Mon, 07 Apr 2008 07:54:38 -0600" -->
<!-- isosent="20080407135438" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="C41F83BE.CF9A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080407134512.GP3614_at_minantech.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 09:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/7/08 7:45 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 07, 2008 at 07:28:07AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also can you explain how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allgather is implemented in orte (sorry if you already explained this once
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I missed it).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The default method is for each proc to send its modex data to its local
</span><br>
<span class="quotelev2">&gt;&gt; daemon. The local daemon collects the messages until all of its local procs
</span><br>
<span class="quotelev2">&gt;&gt; have contributed, then sends the collected data to the rank=0 application
</span><br>
<span class="quotelev2">&gt;&gt; proc. One rank=0 has received a message from every daemon, it xcasts the
</span><br>
<span class="quotelev2">&gt;&gt; collected result to all procs in its job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Only collected result is compressed or messages from each proc to local
</span><br>
<span class="quotelev1">&gt; daemon and messages from local daemon to rank=0 are compressed too?
</span><br>
<p>The individual inbound messages are not currently compressed prior to
<br>
sending - too small to bother
<br>
<p><span class="quotelev1">&gt; And, may be a stupid question, but I have to ask :) When rank=0 xcast
</span><br>
<span class="quotelev1">&gt; collected modex it compress it once or for each rank separately.
</span><br>
<p>No, it only compresses the total message
<br>
<p>So there is only one compress being done - the total modex message collected
<br>
&quot;raw&quot; and then is compressed just prior to xcast. Each proc then
<br>
uncompresses the result it receives from rank=0 before processing it.
<br>
<p><p><span class="quotelev1">&gt; Also I think if rank=0 will compress each modex message during
</span><br>
<span class="quotelev1">&gt; receive it can save some work during xcast.
</span><br>
<p>Seems to me like one compress of the entire message has to be a great deal
<br>
faster than N compressions of N small messages...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
