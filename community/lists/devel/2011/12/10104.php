<?
$subject_val = "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 03:04:53 2011" -->
<!-- isoreceived="20111214080453" -->
<!-- sent="Wed, 14 Dec 2011 00:04:27 -0800" -->
<!-- isosent="20111214080427" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure" -->
<!-- id="4EE8588B.5030106_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE85562.7060209_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 03:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
<li><strong>Previous message:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
<li><strong>Reply:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/13/2011 11:50 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 14/12/2011 08:29, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I've attempted the build on MacOS 10.4 (Tiger) on x86-64, I hit the
</span><br>
<span class="quotelev2">&gt;&gt; same hwloc issue I've encountered on {Free,Open,Net}BSD.
</span><br>
<span class="quotelev2">&gt;&gt; The build fails with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    CCLD   opal_wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _opal_hwloc122_hwloc_backend_sysfs_exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _opal_hwloc122_hwloc_backend_sysfs_init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _opal_hwloc122_hwloc_look_linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _opal_hwloc122_hwloc_set_linux_hooks
</span><br>
<span class="quotelev1">&gt; At least FreeBSD and darwin should be detected by configure so the big
</span><br>
<span class="quotelev1">&gt; configure warning should not appear there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenBSD and NetBSD are not detected explicitly IIRC, so the warning is
</span><br>
<span class="quotelev1">&gt; expected there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But none of these cases should cause the Linux code to be built anyway
</span><br>
<span class="quotelev1">&gt; (the above symbols), so it seems to me that something is broken in the
</span><br>
<span class="quotelev1">&gt; way OMPI uses hwloc's configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I appear to have been mistaken about the big configure warning on the 
<br>
FreeBSD systems.
<br>
It was only on OpenBSD and NetBSD.
<br>
<p>I've just build a stand-alone hwloc-1.2.2 on FreeBSD-8.2 and it can 
<br>
&quot;make all install check&quot; w/o any problems.
<br>
It even appears to get the right topology:
<br>
<span class="quotelev1">&gt; *** Printing overall tree
</span><br>
<span class="quotelev1">&gt; Machine#0
</span><br>
<span class="quotelev1">&gt;   Socket#0
</span><br>
<span class="quotelev1">&gt;     L2#0(4096KB)
</span><br>
<span class="quotelev1">&gt;       L1#0(32KB)
</span><br>
<span class="quotelev1">&gt;         Core#0
</span><br>
<span class="quotelev1">&gt;           PU#0
</span><br>
<span class="quotelev1">&gt;   Socket#1
</span><br>
<span class="quotelev1">&gt;     L2#1(4096KB)
</span><br>
<span class="quotelev1">&gt;       L1#1(32KB)
</span><br>
<span class="quotelev1">&gt;         Core#0
</span><br>
<span class="quotelev1">&gt;           PU#1
</span><br>
<p>I can also build hwloc-1.2.2 on NetBSD-5.1 and OpenBSD-5.0, but don't 
<br>
get the full topology:
<br>
<span class="quotelev1">&gt; *** Printing overall tree
</span><br>
<span class="quotelev1">&gt; Machine#0
</span><br>
<span class="quotelev1">&gt;   PU#0
</span><br>
<span class="quotelev1">&gt;   PU#1
</span><br>
<p><p>So, I agree w/ Brice that OMPI is getting something wrong, as evidenced 
<br>
by the failures to link linux-specific hwloc symbols.
<br>
My reports (other than the one for RHL8) have been unfairly pointing at 
<br>
hwloc.
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
<li><strong>Next message:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
<li><strong>Previous message:</strong> <a href="10103.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>In reply to:</strong> <a href="10102.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
<li><strong>Reply:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
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
