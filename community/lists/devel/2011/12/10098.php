<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 02:01:50 2011" -->
<!-- isoreceived="20111214070150" -->
<!-- sent="Tue, 13 Dec 2011 23:01:24 -0800" -->
<!-- isosent="20111214070124" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD" -->
<!-- id="4EE849C4.4050302_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE847F8.4040200_at_inria.fr" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 02:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10099.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: elan"</a>
<li><strong>Previous message:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>In reply to:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/13/2011 10:53 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 14/12/2011 07:17, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; My OpenBSD and NetBSD testers have the same behavior, but now I see
</span><br>
<span class="quotelev2">&gt;&gt; that I was at warned...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On all the affected systems I found the following (modulo the system
</span><br>
<span class="quotelev2">&gt;&gt; tuple) in the configure output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking which OS support to include... Unsupported!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (x86_64-unknown-openbsd5.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***********************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** hwloc does not support this system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** hwloc will *attempt* to build (but it may not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** hwloc run-time results may be reduced to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; showing just one processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** You have been warned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** Pausing to give you time to read this message...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***********************************************************
</span><br>
<span class="quotelev2">&gt;&gt; Clearly my failures are &quot;known&quot; to somebody.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I have multiple &quot;issues&quot; with the current behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 1) At an minimum the WARNING mention --without-hwloc
</span><br>
<span class="quotelev2">&gt;&gt; 2) Is this &quot;build and pray&quot; approach to unknown platforms really wise?
</span><br>
<span class="quotelev2">&gt;&gt; 3) Shouldn't something appear in the README about this?  The
</span><br>
<span class="quotelev2">&gt;&gt; --without-hwloc option doesn't even appear in README.
</span><br>
<span class="quotelev1">&gt; Maybe the wording is a bit too strong, but you can ignore this. What
</span><br>
<span class="quotelev1">&gt; happens in the vast majority of cases like this is that hwloc will only
</span><br>
<span class="quotelev1">&gt; know how many processors the system has, and hwloc won't be able to bind
</span><br>
<span class="quotelev1">&gt; tasks to processors. But that's still not worse than disabling hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>I cannot even *build* OpenMPI on {Free,Open,Net}BSD systems unless I 
<br>
configure with --without-hwloc.
<br>
Thus I cannot agree w/ Brice's suggestion that I ignore this warning.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10099.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: elan"</a>
<li><strong>Previous message:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>In reply to:</strong> <a href="10096.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="10101.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
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
