<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 01:53:51 2011" -->
<!-- isoreceived="20111214065351" -->
<!-- sent="Wed, 14 Dec 2011 07:53:44 +0100" -->
<!-- isosent="20111214065344" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD" -->
<!-- id="4EE847F8.4040200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE83F8E.6010106_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 01:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>Previous message:</strong> <a href="10095.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>In reply to:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10098.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10098.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/12/2011 07:17, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; My OpenBSD and NetBSD testers have the same behavior, but now I see
</span><br>
<span class="quotelev1">&gt; that I was at warned...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On all the affected systems I found the following (modulo the system
</span><br>
<span class="quotelev1">&gt; tuple) in the configure output:
</span><br>
<span class="quotelev2">&gt;&gt; checking which OS support to include... Unsupported!
</span><br>
<span class="quotelev2">&gt;&gt; (x86_64-unknown-openbsd5.0)
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************************************
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** hwloc does not support this system.
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** hwloc will *attempt* to build (but it may not
</span><br>
<span class="quotelev2">&gt;&gt; work).
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** hwloc run-time results may be reduced to
</span><br>
<span class="quotelev2">&gt;&gt; showing just one processor.
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** You have been warned.
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Pausing to give you time to read this message...
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:
</span><br>
<span class="quotelev2">&gt;&gt; ***********************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clearly my failures are &quot;known&quot; to somebody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I have multiple &quot;issues&quot; with the current behavior.
</span><br>
<span class="quotelev1">&gt; 1) At an minimum the WARNING mention --without-hwloc
</span><br>
<span class="quotelev1">&gt; 2) Is this &quot;build and pray&quot; approach to unknown platforms really wise?
</span><br>
<span class="quotelev1">&gt; 3) Shouldn't something appear in the README about this?  The
</span><br>
<span class="quotelev1">&gt; --without-hwloc option doesn't even appear in README.
</span><br>
<p>Maybe the wording is a bit too strong, but you can ignore this. What
<br>
happens in the vast majority of cases like this is that hwloc will only
<br>
know how many processors the system has, and hwloc won't be able to bind
<br>
tasks to processors. But that's still not worse than disabling hwloc.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>Previous message:</strong> <a href="10095.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: VT check failures on *BSD (with patch)."</a>
<li><strong>In reply to:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10098.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10098.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
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
