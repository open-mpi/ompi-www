<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 25 08:46:03 2010" -->
<!-- isoreceived="20101125134603" -->
<!-- sent="Thu, 25 Nov 2010 08:46:01 -0500" -->
<!-- isosent="20101125134601" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="07F6D1A8-4623-4F9D-A53B-9EB84E65E384_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CED8CD6.6090408_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-25 08:46:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1620.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1618.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2010, at 5:08 PM, Pavan Balaji wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So my question -- per prior email -- is: why not use
</span><br>
<span class="quotelev2">&gt;&gt; --disable-embedded-mode, and --disable-shared --enable-static? (vs.
</span><br>
<span class="quotelev2">&gt;&gt; patching) IIRC, I put --disable-embedded-mode there exactly for the
</span><br>
<span class="quotelev2">&gt;&gt; case of projects that want to embed but don't want to call our m4
</span><br>
<span class="quotelev2">&gt;&gt; directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use an AC_CONFIG_SUBDIR-style macro for launching the hwloc configure (but slightly modified to do a sandbox-configure so we can catch errors). So, the configure arguments come from what the user specified. We have capability to internally add extra configure arguments specifically for hwloc, but I was trying to avoid that. Besides, other projects might not have the same macros that MPICH2 has.
</span><br>
<p>Ah, I see.
<br>
<p>Can you setenv enable_shared=no (for example) before calling CONFIG_SUBDIRS?
<br>
<p>(this may be moot if you end up calling our m4 directly, but I'm still curious)
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
<li><strong>Next message:</strong> <a href="1620.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1618.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
