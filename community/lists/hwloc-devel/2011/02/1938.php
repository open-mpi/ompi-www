<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:56:30 2011" -->
<!-- isoreceived="20110214135630" -->
<!-- sent="Mon, 14 Feb 2011 08:56:25 -0500" -->
<!-- isosent="20110214135625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="748F7AAF-58DA-4000-A3B0-84F880560C70_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110214132314.GK8120_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] get cpu where a process/thread is executing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 08:56:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2011, at 8:23 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Let's not use &quot;cpu&quot; -- how about get_current_cpubind?  (vs. get_cpubind)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The point is precisely that it's not the cpu binding, but where the
</span><br>
<span class="quotelev1">&gt; thread is actually _running_ precisely.
</span><br>
<p>Hmm; ok.  I like the word &quot;current&quot; in here, somehow.  Gives the connotation that it might change in the future (if it's not bound).
<br>
<p>Maybe get_current_cpuset?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
