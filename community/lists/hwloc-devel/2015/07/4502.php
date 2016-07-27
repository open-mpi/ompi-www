<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 00:50:26 2015" -->
<!-- isoreceived="20150721045026" -->
<!-- sent="Mon, 20 Jul 2015 21:50:20 -0700" -->
<!-- isosent="20150721045020" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="CAAvDA14c8rdQ8SWQ9u=r0g4ozhTe69WZiNv+cP=CkAy7+7JwsQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1A8CB06B-6298-447C-A5A3-849037E293E9_at_anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 00:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4501.php">Balaji, Pavan: "[hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4501.php">Balaji, Pavan: "[hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan,
<br>
<p>I can confirm that I see the same with PGI-13.10.
<br>
<p>I have a couple systems with 14.x installed but neither with 32-bit support.
<br>
I am downloading 32-bit support now (which I am assuming will work with the
<br>
existing license) and will report back.
<br>
<p>-Paul
<br>
<p>On Mon, Jul 20, 2015 at 9:00 PM, Balaji, Pavan &lt;balaji_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hwloc-1.11 build seems to fail with the pgi compiler on 32-bit
</span><br>
<span class="quotelev1">&gt; platforms.  I see the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt;   CC       topology-x86.lo
</span><br>
<span class="quotelev1">&gt; PGC-F-0000-Internal compiler error. unable to allocate a register       8
</span><br>
<span class="quotelev1">&gt; (topology-x86.c: 87)
</span><br>
<span class="quotelev1">&gt; PGC/x86 Linux 13.9-0: compilation aborted
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only tried pgi-13.7 and 13.9 (I don't have access to later compiler
</span><br>
<span class="quotelev1">&gt; versions).  It looks like the compiler doesn't like the assembly code in
</span><br>
<span class="quotelev1">&gt; include/private/cpuid-x86.h for 32-bit platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4501.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4501.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4501.php">Balaji, Pavan: "[hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4501.php">Balaji, Pavan: "[hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
