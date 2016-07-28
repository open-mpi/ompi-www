<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 09:35:09 2011" -->
<!-- isoreceived="20110214143509" -->
<!-- sent="Mon, 14 Feb 2011 09:35:05 -0500" -->
<!-- isosent="20110214143505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="0C5635DC-5422-42C3-9DD5-FF05CFCB1A9B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110214141919.GA4532_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-02-14 09:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2011, at 9:19 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Hmm; ok.  I like the word &quot;current&quot; in here, somehow.  Gives the connotation that it might change in the future (if it's not bound).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I prefer &quot;last&quot; because it even expresses that it's probably
</span><br>
<span class="quotelev1">&gt; already expired :)
</span><br>
<p>Mmm... good point.  How about:
<br>
<p>hwloc_get_last_known_cpuset_where_i_was_running_but_might_not_be_anymore()
<br>
<p>I don't like &quot;last&quot; because it might imply that it's the *last* place you'll be running -- i.e., that it won't change.  How about using the word &quot;now&quot; in there somewhere?  That would certainly connote that as soon as the function returns, the information may be stale.
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
<li><strong>Next message:</strong> <a href="1942.php">Christopher Samuel: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
