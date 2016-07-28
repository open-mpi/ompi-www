<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 09:28:23 2008" -->
<!-- isoreceived="20080407132823" -->
<!-- sent="Mon, 07 Apr 2008 07:28:07 -0600" -->
<!-- isosent="20080407132807" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="C41F7D87.CF92%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080407131534.GO3614_at_minantech.com" -->
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
<strong>Date:</strong> 2008-04-07 09:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3671.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3671.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/7/08 7:15 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 07, 2008 at 07:07:38AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 4/7/08 7:04 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Apr 04, 2008 at 10:52:38AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With compression &quot;on&quot;, you will get output telling you the original size of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the message and its compressed size so you can see what was done.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see this output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uncompressed allgather msg orig size 67521 compressed size 4162.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is &quot;allgather msg&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is the modex message - it is &quot;shared&quot; across all the procs via an
</span><br>
<span class="quotelev2">&gt;&gt; allgather procedure
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; If I'll divide allgather msg size by number of processes I should get a
</span><br>
<span class="quotelev1">&gt; modex size of one process. Is this correct?
</span><br>
<p>Pretty much - there is some slight overhead added so orte knows what to do
<br>
with the message, but that is only a few bytes.
<br>
<p><span class="quotelev1">&gt; Also can you explain how
</span><br>
<span class="quotelev1">&gt; allgather is implemented in orte (sorry if you already explained this once
</span><br>
<span class="quotelev1">&gt; and I missed it).
</span><br>
<p>The default method is for each proc to send its modex data to its local
<br>
daemon. The local daemon collects the messages until all of its local procs
<br>
have contributed, then sends the collected data to the rank=0 application
<br>
proc. One rank=0 has received a message from every daemon, it xcasts the
<br>
collected result to all procs in its job.
<br>
<p>I am currently working on a more scalable version of this that has the
<br>
daemons do a tree-like gather instead of just sending everything to rank=0.
<br>
Probably about a week from completion.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3671.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3671.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3673.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
