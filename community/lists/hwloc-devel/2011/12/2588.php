<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 06:11:34 2011" -->
<!-- isoreceived="20111209111134" -->
<!-- sent="Fri, 9 Dec 2011 06:11:30 -0500" -->
<!-- isosent="20111209111130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022" -->
<!-- id="BB42E141-0E3A-4053-9369-72E7DAE53684_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE1C0DC.2050807_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 06:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2589.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>Previous message:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2586.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2011, at 3:03 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Looks like pkg-config support is broken now, we just get &quot;cannot check
</span><br>
<span class="quotelev1">&gt; without pkg-config&quot; everywhere it's used in configure.
</span><br>
<span class="quotelev1">&gt; There are still multiple instances of $HWLOC_PKG_CONFIG in our
</span><br>
<span class="quotelev1">&gt; config/*.m4, should we replace them as well?
</span><br>
<p>Yes, that was exactly the issue -- sorry about that.  I focused on just that one .m4 macro and forgot about the rest of the script.  Duh.
<br>
<p>Fixed in r4030/r4031.
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
<li><strong>Next message:</strong> <a href="2589.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>Previous message:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2586.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
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
