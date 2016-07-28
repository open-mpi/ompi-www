<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 11:11:08 2007" -->
<!-- isoreceived="20070521151108" -->
<!-- sent="Mon, 21 May 2007 08:10:48 -0700" -->
<!-- isosent="20070521151048" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE local rank" -->
<!-- id="449EE621-0A57-4F11-BF3F-B2662AEACAC4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2770FC7.9365%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 11:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1564.php">Ralph H Castain: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>Previous message:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1564.php">Ralph H Castain: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>Reply:</strong> <a href="1564.php">Ralph H Castain: "Re: [OMPI devel] ORTE local rank"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph!  (Adding devel_at_[hidden] to this thread; I think  
<br>
others may be interested, such as Myricom and QLogic)
<br>
<p>How do we get access to these values; are they in global variables  
<br>
somewhere, or do we make a function call to get them?
<br>
<p><p>On May 21, 2007, at 7:58 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Well, it took awhile longer than I had thought to get around to  
</span><br>
<span class="quotelev1">&gt; dealing with
</span><br>
<span class="quotelev1">&gt; this. However, I have finally put this functionality in the OMPI  
</span><br>
<span class="quotelev1">&gt; trunk as of
</span><br>
<span class="quotelev1">&gt; r14707.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The local rank and number of local procs now get passed as part of  
</span><br>
<span class="quotelev1">&gt; the ORTE
</span><br>
<span class="quotelev1">&gt; name passing system. So, once you get through orte_init (specifically,
</span><br>
<span class="quotelev1">&gt; stage1 as this is broken out in mpi_init), you have both those  
</span><br>
<span class="quotelev1">&gt; pieces of
</span><br>
<span class="quotelev1">&gt; information available to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if you encounter any difficulties.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1564.php">Ralph H Castain: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>Previous message:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1564.php">Ralph H Castain: "Re: [OMPI devel] ORTE local rank"</a>
<li><strong>Reply:</strong> <a href="1564.php">Ralph H Castain: "Re: [OMPI devel] ORTE local rank"</a>
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
