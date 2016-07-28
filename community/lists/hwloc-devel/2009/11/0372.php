<?
$subject_val = "Re: [hwloc-devel] Pgcc issues fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 11:34:29 2009" -->
<!-- isoreceived="20091112163429" -->
<!-- sent="Thu, 12 Nov 2009 08:34:24 -0800" -->
<!-- isosent="20091112163424" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Pgcc issues fixed?" -->
<!-- id="06D9C7E3-118D-4056-8399-94C640E5E8FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091112005737.GI4729_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2009-11-12 11:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2009, at 4:57 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Maybe what we can do is using PLPA's functions if __GLIBC__ is &lt;=
</span><br>
<span class="quotelev1">&gt; 2 and __GLIBC_MINOR__ is &lt; the first version which is known to be
</span><br>
<span class="quotelev1">&gt; correct or if CPU_SET can't be compiled, and rely on the glibc
</span><br>
<span class="quotelev1">&gt; functions else.  Of course we have to rely on glibc in any case for
</span><br>
<span class="quotelev1">&gt; pthread_setaffinity_np().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>That sounds good.  Even after glibc was fixed, &quot;bad&quot; versions of it  
<br>
were still in many already-installed machines for many years (there's  
<br>
still lots of rhel4 machines out there; do we know of RH patched their  
<br>
rhel4 glibc to fix this problem?).
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
<li><strong>Next message:</strong> <a href="0373.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0365.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0375.php">Samuel Thibault: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
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
