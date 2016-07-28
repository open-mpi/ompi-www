<?
$subject_val = "Re: [hwloc-devel] Pgcc issues fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:58:31 2009" -->
<!-- isoreceived="20091112165831" -->
<!-- sent="Thu, 12 Nov 2009 08:58:19 -0800" -->
<!-- isosent="20091112165819" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Pgcc issues fixed?" -->
<!-- id="6D030B24-FC9A-4365-8ECE-1D4EB7589D6B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091112164804.GH4729_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2009-11-12 11:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0376.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2009, at 8:48 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; On Nov 11, 2009, at 4:57 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Maybe what we can do is using PLPA's functions if __GLIBC__ is &lt;=
</span><br>
<span class="quotelev3">&gt; &gt; &gt;2 and __GLIBC_MINOR__ is &lt; the first version which is known to be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;correct or if CPU_SET can't be compiled, and rely on the glibc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;functions else.  Of course we have to rely on glibc in any case for
</span><br>
<span class="quotelev3">&gt; &gt; &gt;pthread_setaffinity_np().
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That sounds good.  Even after glibc was fixed, &quot;bad&quot; versions of it
</span><br>
<span class="quotelev2">&gt; &gt; were still in many already-installed machines for many years
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And these had a minor number earlier than the fixed glibc, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes -- that's why I'm saying your plan sounds good.  :-)
<br>
<p>The *only* weird possibility would be if RH (or Suse) patched their  
<br>
old glibcs to fix this problem but didn't update the minor number.   
<br>
Things like this have happened before; it's why I always prefer  
<br>
testing for behavior rather than version numbers.
<br>
<p>But I don't quite know how to probe for this in the running glibc --  
<br>
you *may or may not* encounter a problem if you have a size mismatch.   
<br>
Version number might be the best that we can do here.  :-\
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
<li><strong>Next message:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Previous message:</strong> <a href="0376.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0378.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
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
