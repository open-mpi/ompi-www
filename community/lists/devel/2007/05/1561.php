<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 18:04:19 2007" -->
<!-- isoreceived="20070518220419" -->
<!-- sent="Fri, 18 May 2007 18:04:07 -0400" -->
<!-- isosent="20070518220407" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="464E22D7.6090504_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070518092726.GD32628_at_minantech.com" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 18:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1560.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Change to default xcast mode [RFC]"</a>
<li><strong>In reply to:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb,
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; new madvice flag was implemented that allows userspace to mark certain
</span><br>
<span class="quotelev1">&gt; memory to not be copied to a child process. This memory is not mapped in
</span><br>
<span class="quotelev1">&gt; a child at all, no even VMA created for it. In the parent this memory is
</span><br>
<p>Ah, that explain your previous mention of segfault. For static 
<br>
registrations, the ones that are the real problem with fork because of 
<br>
the infinite exposure, it's much simpler to use MAP_SHARED...
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1560.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Change to default xcast mode [RFC]"</a>
<li><strong>In reply to:</strong> <a href="1558.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1562.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
