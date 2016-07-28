<?
$subject_val = "[OMPI devel] [PATCH] mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 17:06:44 2014" -->
<!-- isoreceived="20140123220644" -->
<!-- sent="Thu, 23 Jan 2014 14:06:43 -0800" -->
<!-- isosent="20140123220643" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] mpirun hangs on ia64" -->
<!-- id="CAAvDA140xcHrjBJxzs-dR_j30qkHoAeHZ1AnwuMF_AEUL5XWWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] mpirun hangs on ia64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 17:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13891.php">Paul Hargrove: "[OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>Previous message:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 23, 2014 at 1:16 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
[snip]
<br>
<p><span class="quotelev1">&gt; I will retest ASAP and report with, I hope, an attachment to fix both
</span><br>
<span class="quotelev1">&gt; IA64.asm and ia64/atomic.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
[snip]
<br>
<p>Eureka!!
<br>
<p>With the bogus cast removed in both places, I can now run ring_c on
<br>
linux/ia64.
<br>
The attached patch is against trunk, but applies cleanly to v1.7.
<br>
I fact, since the code has been incorrect for a long time it applies
<br>
cleanly to v1.6 too.
<br>
<p>FWIW:
<br>
The code was broken by r3448, which apparently fixed some warnings but also
<br>
added the incorrect narrowing casts to the 64-bit cmpset code.  So, IA64
<br>
*did* work prior to April 2010.
<br>
<p>Given the timeline, this can't possibly be a regression in the 1.7 series.
<br>
Additionally, with Sylvesrte Ledru having given up on ia64 nobody may care
<br>
at all.
<br>
So, CMR to 1.7.4 vs .5 seems like a potentially moot point.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13890/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13890/ia64-cmpset_64.patch">ia64-cmpset_64.patch</a>
</ul>
<!-- attachment="ia64-cmpset_64.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13891.php">Paul Hargrove: "[OMPI devel] yet another fortran (documentation) issue"</a>
<li><strong>Previous message:</strong> <a href="13889.php">Nathan Hjelm: "Re: [OMPI devel] vader on SGI UV?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
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
