<?
$subject_val = "Re: [hwloc-devel] What does this C99 notation mean?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:57:17 2011" -->
<!-- isoreceived="20110214135717" -->
<!-- sent="Mon, 14 Feb 2011 08:57:03 -0500" -->
<!-- isosent="20110214135703" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What does this C99 notation mean?" -->
<!-- id="D5A08AAF-8F11-4ABA-9ED5-F33945A9DD00_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110214132932.GL8120_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] What does this C99 notation mean?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 08:57:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2011, at 8:29 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What I meant was: _distances is clearly a 1D array.  Does the above C99 notation say &quot;treat this 1D array like a 2D array of size [x][y]&quot;?  And then how it actually happens underneath is implementation dependent (e.g., whether it makes a silent/temporary array or pointers, or converts indexing)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think it can even be implementation dependent: here we just
</span><br>
<span class="quotelev1">&gt; define a pointer, and assign to it a casted value.
</span><br>
<p>Got it; thanks.
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
<li><strong>Next message:</strong> <a href="1940.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1938.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
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
