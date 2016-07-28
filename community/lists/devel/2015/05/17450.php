<?
$subject_val = "Re: [OMPI devel] 1.8.6rc1 ready for test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 01:24:55 2015" -->
<!-- isoreceived="20150525052455" -->
<!-- sent="Sun, 24 May 2015 22:24:42 -0700" -->
<!-- isosent="20150525052442" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.6rc1 ready for test" -->
<!-- id="CAAvDA14ao_3APd2Nv+e3ncArGg37=Qb2Tg=08t19=c8wrGVkng_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="908AB2A2-218E-403E-AA36-269EB0F30B00_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.6rc1 ready for test<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-25 01:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17451.php">Gilles Gouaillardet: "[OMPI devel] Jenkins and coverity logs"</a>
<li><strong>Previous message:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17447.php">Ralph Castain: "[OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17454.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Reply:</strong> <a href="17454.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still have some slow emulated ARM and MIPS testers running (though some
<br>
positive ARM results are in).
<br>
I will report the MIPS and remaining ARM results when they are all ready
<br>
(probably Tue AM).
<br>
<p>However, with 70 configurations tested the only issue I've seen is the
<br>
ROMIO build failure on OpenBSD-5.7.
<br>
<p>-Paul
<br>
<p>On Sat, May 23, 2015 at 1:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.8.6
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fixed memory leak on Mac OS-X exposed by TCP keepalive
</span><br>
<span class="quotelev1">&gt; - Fixed keepalive support to ensure that daemon/node failure
</span><br>
<span class="quotelev1">&gt;   results in complete job cleanup
</span><br>
<span class="quotelev1">&gt; - Update Java binding support
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_THREAD_MULTIPLE bug in vader shared memory BTL
</span><br>
<span class="quotelev1">&gt; - Fixed issue during shutdown when CUDA initialization wasn't complete
</span><br>
<span class="quotelev1">&gt; - Fixed orted environment when no prefix given
</span><br>
<span class="quotelev1">&gt; - Fixed trivial typo in MPI_Neighbor_allgather manpage
</span><br>
<span class="quotelev1">&gt; - Fixed tree-spawn support for sh and ksh shells
</span><br>
<span class="quotelev1">&gt; - Several data type fixes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17447.php">http://www.open-mpi.org/community/lists/devel/2015/05/17447.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17451.php">Gilles Gouaillardet: "[OMPI devel] Jenkins and coverity logs"</a>
<li><strong>Previous message:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17447.php">Ralph Castain: "[OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17454.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Reply:</strong> <a href="17454.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
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
