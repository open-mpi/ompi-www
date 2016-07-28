<?
$subject_val = "Re: [OMPI devel] error in test/threads/opal_condition.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 10:47:19 2015" -->
<!-- isoreceived="20150701144719" -->
<!-- sent="Wed, 1 Jul 2015 08:47:15 -0600" -->
<!-- isosent="20150701144715" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] error in test/threads/opal_condition.c" -->
<!-- id="20150701144715.GA22264_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17V-6L-CcgYJPx87oS=A22EXfkGeNm65GvPy4Nxz9p65Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] error in test/threads/opal_condition.c<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 10:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17584.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17582.php">Paul Hargrove: "[OMPI devel] NetBSD regression on master"</a>
<li><strong>In reply to:</strong> <a href="17580.php">Paul Hargrove: "[OMPI devel] error in test/threads/opal_condition.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17592.php">Gilles Gouaillardet: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Reply:</strong> <a href="17592.php">Gilles Gouaillardet: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PGI no longer suprises me with how bad it is. The lines in question look
<br>
ok to me. We can fix this (and remove the common symbols) by removing
<br>
the initializers and making the variables static. I will go ahead and do
<br>
this.
<br>
<p>-Nathan
<br>
<p>On Wed, Jul 01, 2015 at 05:41:59AM -0700, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;    I find that PGI version 9, 10, 11, 12, 13 and 14 all fail &quot;make check&quot;
</span><br>
<span class="quotelev1">&gt;    with last night's master tarball.  All expect 9 fail with pretty much the
</span><br>
<span class="quotelev1">&gt;    same message:
</span><br>
<span class="quotelev1">&gt;      CC       opal_condition.o
</span><br>
<span class="quotelev1">&gt;    PGC-S-0155-Empty initializer not supported
</span><br>
<span class="quotelev1">&gt;     (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
</span><br>
<span class="quotelev1">&gt;    48)
</span><br>
<span class="quotelev1">&gt;    PGC-S-0155-Empty initializer not supported
</span><br>
<span class="quotelev1">&gt;     (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
</span><br>
<span class="quotelev1">&gt;    49)
</span><br>
<span class="quotelev1">&gt;    PGC-S-0155-Empty initializer not supported
</span><br>
<span class="quotelev1">&gt;     (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
</span><br>
<span class="quotelev1">&gt;    50)
</span><br>
<span class="quotelev1">&gt;    PGC/x86-64 Linux 14.7-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt;    make[3]: *** [opal_condition.o] Error 2
</span><br>
<span class="quotelev1">&gt;    Those lines are:
</span><br>
<span class="quotelev1">&gt;    opal_mutex_t mutex = {};
</span><br>
<span class="quotelev1">&gt;    opal_condition_t thr1_cond = {};
</span><br>
<span class="quotelev1">&gt;    opal_condition_t thr2_cond = {};
</span><br>
<span class="quotelev1">&gt;    I have no clue why pgi won't accept that when every other compiler does.
</span><br>
<span class="quotelev1">&gt;    Tests were on NERSC's Hopper and Carver, where Howard should be able to
</span><br>
<span class="quotelev1">&gt;    reproduce.
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17580.php">http://www.open-mpi.org/community/lists/devel/2015/07/17580.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17583/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17584.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17582.php">Paul Hargrove: "[OMPI devel] NetBSD regression on master"</a>
<li><strong>In reply to:</strong> <a href="17580.php">Paul Hargrove: "[OMPI devel] error in test/threads/opal_condition.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17592.php">Gilles Gouaillardet: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<li><strong>Reply:</strong> <a href="17592.php">Gilles Gouaillardet: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
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
