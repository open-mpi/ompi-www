<?
$subject_val = "Re: [hwloc-devel] Pgcc issues fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 08:05:51 2009" -->
<!-- isoreceived="20091109130551" -->
<!-- sent="Mon, 9 Nov 2009 08:05:47 -0500" -->
<!-- isosent="20091109130547" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Pgcc issues fixed?" -->
<!-- id="C4F764F3-0DE2-45BA-B280-0944CBBDC72D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091109101203.GO5728_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Pgcc issues fixed?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 08:05:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2009, at 5:12 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; What I dislike in that approach is that it means we'd have to closely
</span><br>
<span class="quotelev1">&gt; follow future changes in the kernel ABI, while the API is not supposed
</span><br>
<span class="quotelev1">&gt; to change (even if it has in the past).  Also, now that glibc provides
</span><br>
<span class="quotelev1">&gt; pthread_setaffinity_np, we should take advantage of it to implement
</span><br>
<span class="quotelev1">&gt; hwloc_set_thread_cpubind, and there is no way we can re-implement it
</span><br>
<span class="quotelev1">&gt; ourselves (the missing piece is the pthread_t -&gt; tid translation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Fair enough.  What about if we have an AC check for  
<br>
pthread_setaffinity_np and use that if it exists, and if it doesn't  
<br>
use the PLPA way?  So if the timeline looks like this:
<br>
<p>----- way in the past (time flows down)
<br>
&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;-----&gt; &quot;bad&quot; setaffinity days of kernel/glibc mixing
<br>
&nbsp;&nbsp;&nbsp;|      PLPA method is known to work here
<br>
&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;-----&gt; pthread_setaffinity_np is introduced, fixes problems
<br>
&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;\|/
<br>
----- present
<br>
<p>Then if AC causes hwloc to prefer pthread_setaffinity_np(), then we're  
<br>
covered for all the old systems with either old kernels and/or old  
<br>
glibc where problems occur.
<br>
<p>BTW, how does pthread_setaffinity_np() work?  Does it check the  
<br>
running kernel and ensure to do the Right Thing?  That was definitely  
<br>
a problem in the past -- kernel and glibc would mismatch in terms of  
<br>
set/getaffinity (which was included in many distros).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0353.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
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
