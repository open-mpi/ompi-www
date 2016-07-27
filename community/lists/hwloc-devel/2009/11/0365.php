<?
$subject_val = "Re: [hwloc-devel] Pgcc issues fixed?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 19:57:42 2009" -->
<!-- isoreceived="20091112005742" -->
<!-- sent="Thu, 12 Nov 2009 01:57:37 +0100" -->
<!-- isosent="20091112005737" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Pgcc issues fixed?" -->
<!-- id="20091112005737.GI4729_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4F764F3-0DE2-45BA-B280-0944CBBDC72D_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 19:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0372.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 09 Nov 2009 08:05:47 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Fair enough.  What about if we have an AC check for  
</span><br>
<span class="quotelev1">&gt; pthread_setaffinity_np and use that if it exists, and if it doesn't  
</span><br>
<span class="quotelev1">&gt; use the PLPA way?
</span><br>
<p>Err, remember that pthread_setaffinity_np alone doesn't permit to bind
<br>
another process, and suffers from the same size parameter kludge (it has
<br>
been introduced in 2003).
<br>
<p><span class="quotelev1">&gt; BTW, how does pthread_setaffinity_np() work?  Does it check the  
</span><br>
<span class="quotelev1">&gt; running kernel and ensure to do the Right Thing?
</span><br>
<p>Like sched_setaffinity does, yes.
<br>
<p><span class="quotelev1">&gt; That was definitely a problem in the past -- kernel and glibc would
</span><br>
<span class="quotelev1">&gt; mismatch in terms of set/getaffinity (which was included in many
</span><br>
<span class="quotelev1">&gt; distros).
</span><br>
<p>They have been fixed at the same time, 2004-03-18.
<br>
<p>Maybe what we can do is using PLPA's functions if __GLIBC__ is &lt;=
<br>
2 and __GLIBC_MINOR__ is &lt; the first version which is known to be
<br>
correct or if CPU_SET can't be compiled, and rely on the glibc
<br>
functions else.  Of course we have to rely on glibc in any case for
<br>
pthread_setaffinity_np().
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0366.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0364.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0352.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
<li><strong>Reply:</strong> <a href="0372.php">Jeff Squyres: "Re: [hwloc-devel] Pgcc issues fixed?"</a>
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
