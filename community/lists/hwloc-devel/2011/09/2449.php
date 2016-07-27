<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:50:58 2011" -->
<!-- isoreceived="20110923195058" -->
<!-- sent="Fri, 23 Sep 2011 21:50:53 +0200" -->
<!-- isosent="20110923195053" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="4E7CE31D.5010802_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="21A4D442-13AF-429E-A559-17AE0D4DEC01_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 15:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/09/2011 21:43, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 23, 2011, at 3:40 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a reason to not have it as an .am?  I don't really care other than uniformity, I think -- if there's just *one* Makefile that's different, it's one more thing that has to be remembered, etc.
</span><br>
<span class="quotelev2">&gt;&gt; The easiest way to make it a .am would be to add this directory to
</span><br>
<span class="quotelev2">&gt;&gt; SUBDIRS but use rules names that are not recognized by automake (so that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;all&quot; does nothing). It's probably already the case (current rules are
</span><br>
<span class="quotelev2">&gt;&gt; &quot;missing&quot; and &quot;useless&quot;, with a common dependency called &quot;prepare&quot;). If
</span><br>
<span class="quotelev2">&gt;&gt; you're confident that those will never conflict with automake, I can
</span><br>
<span class="quotelev2">&gt;&gt; make this a Makefile.am and we're done.
</span><br>
<span class="quotelev1">&gt; Just because you have a Makefile.am (and therefore generated Makefile.in / Makefile), you don't have to list that dir in SUBDIRS.  So &quot;make all&quot; will never traverse down there, etc.
</span><br>
<p>AFAIK configure will not generate Makefile[.in] unless the dir is in
<br>
SUBDIRS. Otherwise we would have Makefile[.in] generated in
<br>
tests/embedded (I don't have any).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
