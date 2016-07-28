<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:01:44 2012" -->
<!-- isoreceived="20120210200144" -->
<!-- sent="Fri, 10 Feb 2012 15:01:31 -0500" -->
<!-- isosent="20120210200131" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)" -->
<!-- id="0E3A3335-49DE-4891-9581-901C801F6517_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F357060.8070909_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 15:01:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2863.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4297)"</a>
<li><strong>Previous message:</strong> <a href="2861.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>In reply to:</strong> <a href="2861.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2856.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed to v1.3.
<br>
<p><p>On Feb 10, 2012, at 2:30 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/10/2012 11:19 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll go compare.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I already did...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HWLOC (1.3.2rc1) tries:
</span><br>
<span class="quotelev1">&gt;            AC_LINK_IFELSE([AC_LANG_PROGRAM([[
</span><br>
<span class="quotelev1">&gt;                __attribute__((visibility(&quot;default&quot;))) int foo;
</span><br>
<span class="quotelev1">&gt;                ]],[[int i;]])],
</span><br>
<span class="quotelev1">&gt;                [],
</span><br>
<span class="quotelev1">&gt;                [hwloc_add=])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While OMPI (1.4.5rc5) tries:
</span><br>
<span class="quotelev1">&gt;            AC_TRY_LINK([
</span><br>
<span class="quotelev1">&gt;                    #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;                    __attribute__((visibility(&quot;default&quot;))) int foo;
</span><br>
<span class="quotelev1">&gt;                    void bar(void) { fprintf(stderr, &quot;bar\n&quot;); };
</span><br>
<span class="quotelev1">&gt;                    ],[],
</span><br>
<span class="quotelev1">&gt;                    [if test -s conftest.err ; then
</span><br>
<span class="quotelev1">&gt;                        $GREP -iq &quot;visibility&quot; conftest.err
</span><br>
<span class="quotelev1">&gt;                        if test &quot;$?&quot; = &quot;0&quot; ; then
</span><br>
<span class="quotelev1">&gt;                            ompi_cv_cc_fvisibility=&quot;no&quot;
</span><br>
<span class="quotelev1">&gt;                        else
</span><br>
<span class="quotelev1">&gt;                            ompi_cv_cc_fvisibility=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;                        fi
</span><br>
<span class="quotelev1">&gt;                     else
</span><br>
<span class="quotelev1">&gt;                        ompi_cv_cc_fvisibility=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;                     fi],
</span><br>
<span class="quotelev1">&gt;                    [ompi_cv_cc_fvisibility=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt;                ])
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2863.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4297)"</a>
<li><strong>Previous message:</strong> <a href="2861.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>In reply to:</strong> <a href="2861.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2856.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
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
