<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 09:19:27 2011" -->
<!-- isoreceived="20110214141927" -->
<!-- sent="Mon, 14 Feb 2011 15:19:19 +0100" -->
<!-- isosent="20110214141919" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="20110214141919.GA4532_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="640212482.54061.1297691805897.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 09:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1941.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1941.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1941.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 14 Feb 2011 14:56:45 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 14, 2011, at 8:23 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Let's not use &quot;cpu&quot; -- how about get_current_cpubind?  (vs. get_cpubind)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The point is precisely that it's not the cpu binding, but where the
</span><br>
<span class="quotelev2">&gt; &gt; thread is actually _running_ precisely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm; ok.  I like the word &quot;current&quot; in here, somehow.  Gives the connotation that it might change in the future (if it's not bound).
</span><br>
<p>Well, I prefer &quot;last&quot; because it even expresses that it's probably
<br>
already expired :)
<br>
<p><span class="quotelev1">&gt; Maybe get_current_cpuset?
</span><br>
<p>It seems to me that may bring confusion with cpubind (and linux' cpuset
<br>
:) )
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1941.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1939.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1941.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1941.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
