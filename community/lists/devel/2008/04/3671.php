<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 09:15:42 2008" -->
<!-- isoreceived="20080407131542" -->
<!-- sent="Mon, 7 Apr 2008 16:15:34 +0300" -->
<!-- isosent="20080407131534" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="20080407131534.GO3614_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C41F78BA.CF8B%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-04-07 09:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3670.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3670.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 07, 2008 at 07:07:38AM -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/7/08 7:04 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Apr 04, 2008 at 10:52:38AM -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With compression &quot;on&quot;, you will get output telling you the original size of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the message and its compressed size so you can see what was done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see this output:
</span><br>
<span class="quotelev2">&gt; &gt; uncompressed allgather msg orig size 67521 compressed size 4162.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What is &quot;allgather msg&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is the modex message - it is &quot;shared&quot; across all the procs via an
</span><br>
<span class="quotelev1">&gt; allgather procedure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If I'll divide allgather msg size by number of processes I should get a
<br>
modex size of one process. Is this correct? Also can you explain how
<br>
allgather is implemented in orte (sorry if you already explained this once
<br>
and I missed it).
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Previous message:</strong> <a href="3670.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>In reply to:</strong> <a href="3670.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3672.php">Ralph H Castain: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
