<?
$subject_val = "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 19:36:13 2015" -->
<!-- isoreceived="20150423233613" -->
<!-- sent="Thu, 23 Apr 2015 16:36:05 -0700" -->
<!-- isosent="20150423233605" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;maybe&amp;quot; issue in 1.8.5rc[23]" -->
<!-- id="CAAvDA17xZw-OV74jWWvBh_0m+exEg_W5uq3LgPAmiZG62FROFQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14M=nZUPLM9Uqjw3EtN90Rg__gfHRJFo-b6RmtN6_QkVw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 19:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17353.php">Paul Hargrove: "[OMPI devel] 1.8.5rc3 preliminary testing report"</a>
<li><strong>Previous message:</strong> <a href="17351.php">Paul Hargrove: "[OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>In reply to:</strong> <a href="17351.php">Paul Hargrove: "[OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Reply:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Exhibit 1: the smoking gun
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00000fffa4d6f184 in opal_atomic_cmpset_acq_32 (addr=Cannot access
<br>
memory at address 0xd8
<br>
)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/hargrov1/OMPI/openmpi-1.8.5rc3-linux-ppc64-xlc-11.1/openmpi-1.8.5rc3/opal/include/opal/sys/powerpc/atomic.h:158
<br>
<p><p>So, this is a new symptom of the known inability of this compiler to get
<br>
the inline asm right.
<br>
<p>Sorry for the false alarm,
<br>
-Paul
<br>
<p>On Thu, Apr 23, 2015 at 4:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a system w/ xlc-11.1.
</span><br>
<span class="quotelev1">&gt; It has essentially always failed &quot;make check&quot; in a LP64 build due to xlc
</span><br>
<span class="quotelev1">&gt; botching the atomics.
</span><br>
<span class="quotelev1">&gt; So, when it failed with 1.8.5.rc2 I didn't look closely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today it has failed with rc3 and I *did* look closely and here is what I
</span><br>
<span class="quotelev1">&gt; see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 5: 39766 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also see the same in the rc2 results I hadn't examined closely before.
</span><br>
<span class="quotelev1">&gt; Meanwhile the rc1 failure was the known atomics-related one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, UNLESS I find that the dlopen_test failure is related to the atomics
</span><br>
<span class="quotelev1">&gt; or some other problem specific to xlc, this may be a new issue related to
</span><br>
<span class="quotelev1">&gt; the elimination of the built-in libltdl.  Note that this system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's hoping this is a new symptom, and not a new problem.
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
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17353.php">Paul Hargrove: "[OMPI devel] 1.8.5rc3 preliminary testing report"</a>
<li><strong>Previous message:</strong> <a href="17351.php">Paul Hargrove: "[OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>In reply to:</strong> <a href="17351.php">Paul Hargrove: "[OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
<li><strong>Reply:</strong> <a href="17355.php">Nysal Jan K A: "Re: [OMPI devel] &quot;maybe&quot; issue in 1.8.5rc[23]"</a>
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
