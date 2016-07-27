<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:40:07 2011" -->
<!-- isoreceived="20110923194007" -->
<!-- sent="Fri, 23 Sep 2011 21:40:01 +0200" -->
<!-- isosent="20110923194001" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="4E7CE091.60606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="676373DF-D248-42B3-AC90-AF2B921F7212_at_cisco.com" -->
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
<strong>Date:</strong> 2011-09-23 15:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/09/2011 21:33, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Sorry, I was OTP when I sent that, and not fully focused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My concern is that this file must be generated via an AC_CONFIG_FILE somewhere, right?  And therefore it must be included in the tarball, etc.
</span><br>
<p>Yes, and it's included in the tarball (see r3841).
<br>
<p><span class="quotelev1">&gt; I guess I'm just a little surprised that it's a .in and not a .am.  Just because we have a Makefile.am doesn't mean that &quot;make dist&quot; has to traverse down there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a reason to not have it as an .am?  I don't really care other than uniformity, I think -- if there's just *one* Makefile that's different, it's one more thing that has to be remembered, etc.
</span><br>
<p>The easiest way to make it a .am would be to add this directory to
<br>
SUBDIRS but use rules names that are not recognized by automake (so that
<br>
&quot;all&quot; does nothing). It's probably already the case (current rules are
<br>
&quot;missing&quot; and &quot;useless&quot;, with a common dependency called &quot;prepare&quot;). If
<br>
you're confident that those will never conflict with automake, I can
<br>
make this a Makefile.am and we're done.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2448.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
