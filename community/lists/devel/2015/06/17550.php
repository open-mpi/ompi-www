<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 02:22:49 2015" -->
<!-- isoreceived="20150626062249" -->
<!-- sent="Thu, 25 Jun 2015 23:22:42 -0700" -->
<!-- isosent="20150626062242" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="CAAvDA14iqRW2gYzzgc7-9yOKUGhW88Driv-Zmf4cRes8pcs--A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="558CE79A.8020304_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 02:22:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17551.php">Алексей Рыжих: "[OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Previous message:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 25, 2015 at 10:48 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i assume you ran the test with Open MPI configured with --disable-dlopen,
</span><br>
<span class="quotelev1">&gt; right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --disable-dlopen is like forcing coll_ml to be loaded first, hence the
</span><br>
<span class="quotelev1">&gt; crash, even with --mca coll ^ml
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; without --disable-dlopen, and with default coll_ml_priority=0, the crash
</span><br>
<span class="quotelev1">&gt; only occurs if coll_ml is loaded before coll_hcoll.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, that is correct: I tested with --disable-dlopen
<br>
<p>-Paul
<br>
<pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17551.php">Алексей Рыжих: "[OMPI devel] the bug in btl_openib_connect_sl.c"</a>
<li><strong>Previous message:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>In reply to:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
