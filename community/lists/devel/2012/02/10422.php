<?
$subject_val = "[OMPI devel] 1.5 branch build failure on Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 05:59:21 2012" -->
<!-- isoreceived="20120215105921" -->
<!-- sent="Wed, 15 Feb 2012 02:59:16 -0800" -->
<!-- isosent="20120215105916" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5 branch build failure on Altix" -->
<!-- id="CAAvDA14qHaRLnwNcBSdmWpMTguYMx+SvLOFXiaohO_=AVtgzCQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5 branch build failure on Altix<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 05:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10423.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strangely enough, the 1.5 branch fails on Altix in a manner nearly opposite
<br>
that of the trunk:
<br>
<p>Making all in tools/wrappers
<br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/mnt/home/c_phargrov/OMPI/openmpi-1.5-latest-linux-ia64/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;   CC     opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_timer_linux_freq'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<p><p><p>It appears opal/mca/timer/altix was built, and opal/mca/timer/linux was not.
<br>
This is the reverse of the situation seen with the trunk.
<br>
<p>-Paul
<br>
<p>On Wed, Feb 15, 2012 at 12:41 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've configured the ompi trunk (nightly tarball 1.7a1r25927) on an SGI
</span><br>
<span class="quotelev1">&gt; Altix.
</span><br>
<span class="quotelev1">&gt; I used no special arguments indicating that this is an Altix, and there
</span><br>
<span class="quotelev1">&gt; does not appear to be an altix-specific file in contrib/platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My build fails as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/mnt/home/c_phargrov/OMPI/openmpi-trunk-linux-ia64/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt;   CC     opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `opal_timer_altix_mmdev_timer_addr'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `opal_timer_altix_freq'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure-generated opal_config.h contains
</span><br>
<span class="quotelev1">&gt; #define MCA_timer_IMPLEMENTATION_HEADER
</span><br>
<span class="quotelev1">&gt; &quot;opal/mca/timer/altix/timer_altix.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing appears to have been built in BUILDDIR/opal/mca/timer/altix.
</span><br>
<span class="quotelev1">&gt; However, BUILDDIR/opal/mca/timer/linux has been built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10422/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10423.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10421.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
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
