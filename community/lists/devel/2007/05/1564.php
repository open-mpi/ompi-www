<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 11:39:07 2007" -->
<!-- isoreceived="20070521153907" -->
<!-- sent="Mon, 21 May 2007 09:39:00 -0600" -->
<!-- isosent="20070521153900" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE local rank" -->
<!-- id="C2771934.936B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="449EE621-0A57-4F11-BF3F-B2662AEACAC4_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 11:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1565.php">Ethan Mallove: "[OMPI devel] Outdated PMB_2.2 test suite"</a>
<li><strong>Previous message:</strong> <a href="1563.php">Jeff Squyres: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>In reply to:</strong> <a href="1563.php">Jeff Squyres: "Re: [OMPI devel] ORTE local rank"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They are sitting in the orte_process_info global variable:
<br>
<p>orte_process_info.local_rank
<br>
orte_process_info.num_local_procs
<br>
<p>Ralph
<br>
<p>On 5/21/07 9:10 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph!  (Adding devel_at_[hidden] to this thread; I think
</span><br>
<span class="quotelev1">&gt; others may be interested, such as Myricom and QLogic)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do we get access to these values; are they in global variables
</span><br>
<span class="quotelev1">&gt; somewhere, or do we make a function call to get them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 21, 2007, at 7:58 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, it took awhile longer than I had thought to get around to
</span><br>
<span class="quotelev2">&gt;&gt; dealing with
</span><br>
<span class="quotelev2">&gt;&gt; this. However, I have finally put this functionality in the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; trunk as of
</span><br>
<span class="quotelev2">&gt;&gt; r14707.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The local rank and number of local procs now get passed as part of
</span><br>
<span class="quotelev2">&gt;&gt; the ORTE
</span><br>
<span class="quotelev2">&gt;&gt; name passing system. So, once you get through orte_init (specifically,
</span><br>
<span class="quotelev2">&gt;&gt; stage1 as this is broken out in mpi_init), you have both those
</span><br>
<span class="quotelev2">&gt;&gt; pieces of
</span><br>
<span class="quotelev2">&gt;&gt; information available to you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if you encounter any difficulties.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1565.php">Ethan Mallove: "[OMPI devel] Outdated PMB_2.2 test suite"</a>
<li><strong>Previous message:</strong> <a href="1563.php">Jeff Squyres: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>In reply to:</strong> <a href="1563.php">Jeff Squyres: "Re: [OMPI devel] ORTE local rank"</a>
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
