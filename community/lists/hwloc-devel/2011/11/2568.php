<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 16:42:12 2011" -->
<!-- isoreceived="20111130214212" -->
<!-- sent="Wed, 30 Nov 2011 22:42:07 +0100" -->
<!-- isosent="20111130214207" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006" -->
<!-- id="4ED6A32F.4080501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DFA97F9-25AD-4B17-9F18-D9638688ACF7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 16:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2569.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4009)"</a>
<li><strong>Previous message:</strong> <a href="2567.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<li><strong>In reply to:</strong> <a href="2567.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 30/11/2011 22:36, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Nov 30, 2011, at 6:42 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see how libnuma is Linux-specific; but is the level of memory binding uniform across all other OS's?  I.e., do we need to print the same kind of granularity of memory support for other OS's?
</span><br>
<span class="quotelev2">&gt;&gt; It'd be tedious. The difference, however, is that other OS's usually
</span><br>
<span class="quotelev2">&gt;&gt; include everything they can for that, and to get the support you'd have
</span><br>
<span class="quotelev2">&gt;&gt; to upgrade the OS, not just install e.g. libnuma. Linux is a bit
</span><br>
<span class="quotelev2">&gt;&gt; particular in that regard in that libnuma is not installed by default.
</span><br>
<span class="quotelev1">&gt; Hmm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is significantly less appealing to me, now.  Given that this is Linux-specific, and the information is already displayed above, I'm seeing less value in this (probably related to the fact that this will be more maintenance hassle / less uniform experience for the user).
</span><br>
<p>We could just print something like &quot;libnuma support: yes/no&quot; depending
<br>
on whether libnuma+numa.h are installed. It is quite common not to have
<br>
libnuma installed, so having this in the summary is good. But having a
<br>
very old libnuma installed without migratepages+mbind+setmempolicy
<br>
should be pretty rare nowadays, so having these details in the summary
<br>
shouldn't be needed.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2569.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4009)"</a>
<li><strong>Previous message:</strong> <a href="2567.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
<li><strong>In reply to:</strong> <a href="2567.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4006"</a>
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
