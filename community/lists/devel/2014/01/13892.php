<?
$subject_val = "Re: [OMPI devel] [PATCH] mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 19:15:14 2014" -->
<!-- isoreceived="20140124001514" -->
<!-- sent="Thu, 23 Jan 2014 16:14:25 -0800" -->
<!-- isosent="20140124001425" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] mpirun hangs on ia64" -->
<!-- id="867E96AE-BD5F-4A53-AA24-9E74249BBEAD_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA140xcHrjBJxzs-dR_j30qkHoAeHZ1AnwuMF_AEUL5XWWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] mpirun hangs on ia64<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 19:14:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13893.php">Paul Hargrove: "[OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Previous message:</strong> <a href="13891.php">Paul Hargrove: "[OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>In reply to:</strong> <a href="13890.php">Paul Hargrove: "[OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13894.php">Paul Hargrove: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13894.php">Paul Hargrove: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I put it for 1.7.5 just for completeness - I agree that not many people will care, but we should reward your hard work!
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jan 23, 2014, at 2:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jan 23, 2014 at 1:16 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; I will retest ASAP and report with, I hope, an attachment to fix both IA64.asm and ia64/atomic.h
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eureka!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the bogus cast removed in both places, I can now run ring_c on linux/ia64.
</span><br>
<span class="quotelev1">&gt; The attached patch is against trunk, but applies cleanly to v1.7.
</span><br>
<span class="quotelev1">&gt; I fact, since the code has been incorrect for a long time it applies cleanly to v1.6 too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt; The code was broken by r3448, which apparently fixed some warnings but also added the incorrect narrowing casts to the 64-bit cmpset code.  So, IA64 *did* work prior to April 2010.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given the timeline, this can't possibly be a regression in the 1.7 series.
</span><br>
<span class="quotelev1">&gt; Additionally, with Sylvesrte Ledru having given up on ia64 nobody may care at all.
</span><br>
<span class="quotelev1">&gt; So, CMR to 1.7.4 vs .5 seems like a potentially moot point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; &lt;ia64-cmpset_64.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13893.php">Paul Hargrove: "[OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Previous message:</strong> <a href="13891.php">Paul Hargrove: "[OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>In reply to:</strong> <a href="13890.php">Paul Hargrove: "[OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13894.php">Paul Hargrove: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13894.php">Paul Hargrove: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
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
