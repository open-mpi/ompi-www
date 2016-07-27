<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 17:59:08 2010" -->
<!-- isoreceived="20100401215908" -->
<!-- sent="Thu, 1 Apr 2010 17:59:02 -0400" -->
<!-- isosent="20100401215902" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896" -->
<!-- id="248ECC1B-9F83-4EF9-899B-70E341837A6F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BB51433.4080100_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 17:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0855.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1897)"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>In reply to:</strong> <a href="0853.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2010, at 5:46 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Yes, it's fixed in 1.6.3.
</span><br>
<p>Ah, I see the problem -- I upgraded to 1.6.3 as part of the &quot;wtf?&quot; process to try to fix the problem, but I was still seeing badness.  But that's because of hwloc's configure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AM_CONDITIONAL([HWLOC_DOXYGEN_BROKEN_SHORT_NAMES], [test &quot;$DOXYGEN_VERSION&quot; = &quot;1.6.2&quot;])
<br>
<p>Meaning: I hadn't re-run configure.  I just upgraded doxygen in place and didn't realize that we had something in hwloc keying off its version number.
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
<li><strong>Next message:</strong> <a href="0855.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1897)"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
<li><strong>In reply to:</strong> <a href="0853.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1896"</a>
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
