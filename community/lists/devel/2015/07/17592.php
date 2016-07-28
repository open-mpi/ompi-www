<?
$subject_val = "Re: [OMPI devel] error in test/threads/opal_condition.c";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 18:17:13 2015" -->
<!-- isoreceived="20150701221713" -->
<!-- sent="Thu, 2 Jul 2015 07:17:12 +0900" -->
<!-- isosent="20150701221712" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] error in test/threads/opal_condition.c" -->
<!-- id="CAAkFZ5smfL7CH_nTY2yeztHE7-dr-07e=OY8z-mh_OPJkzKnpA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150701144715.GA22264_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 18:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17593.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>Previous message:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>In reply to:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In other places, initialization looks like
<br>
opal_mutex_t mutex = {{0}};
<br>
<p>Btw, opal_condition is a standalone binary (e.g. Not part of ompi library),
<br>
so I do not think uninitialized common hurts here.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wednesday, July 1, 2015, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGI no longer suprises me with how bad it is. The lines in question look
</span><br>
<span class="quotelev1">&gt; ok to me. We can fix this (and remove the common symbols) by removing
</span><br>
<span class="quotelev1">&gt; the initializers and making the variables static. I will go ahead and do
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 01, 2015 at 05:41:59AM -0700, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    I find that PGI version 9, 10, 11, 12, 13 and 14 all fail &quot;make check&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    with last night's master tarball.  All expect 9 fail with pretty much
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;    same message:
</span><br>
<span class="quotelev2">&gt; &gt;      CC       opal_condition.o
</span><br>
<span class="quotelev2">&gt; &gt;    PGC-S-0155-Empty initializer not supported
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
</span><br>
<span class="quotelev2">&gt; &gt;    48)
</span><br>
<span class="quotelev2">&gt; &gt;    PGC-S-0155-Empty initializer not supported
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
</span><br>
<span class="quotelev2">&gt; &gt;    49)
</span><br>
<span class="quotelev2">&gt; &gt;    PGC-S-0155-Empty initializer not supported
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  (/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-2014-gc8730b5/test/threads/opal_condition.c:
</span><br>
<span class="quotelev2">&gt; &gt;    50)
</span><br>
<span class="quotelev2">&gt; &gt;    PGC/x86-64 Linux 14.7-0: compilation completed with severe errors
</span><br>
<span class="quotelev2">&gt; &gt;    make[3]: *** [opal_condition.o] Error 2
</span><br>
<span class="quotelev2">&gt; &gt;    Those lines are:
</span><br>
<span class="quotelev2">&gt; &gt;    opal_mutex_t mutex = {};
</span><br>
<span class="quotelev2">&gt; &gt;    opal_condition_t thr1_cond = {};
</span><br>
<span class="quotelev2">&gt; &gt;    opal_condition_t thr2_cond = {};
</span><br>
<span class="quotelev2">&gt; &gt;    I have no clue why pgi won't accept that when every other compiler
</span><br>
<span class="quotelev1">&gt; does.
</span><br>
<span class="quotelev2">&gt; &gt;    Tests were on NERSC's Hopper and Carver, where Howard should be able
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;    reproduce.
</span><br>
<span class="quotelev2">&gt; &gt;    -Paul
</span><br>
<span class="quotelev2">&gt; &gt;    --
</span><br>
<span class="quotelev2">&gt; &gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17580.php">http://www.open-mpi.org/community/lists/devel/2015/07/17580.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17592/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17593.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>Previous message:</strong> <a href="17591.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI 1.8.6 memory leak"</a>
<li><strong>In reply to:</strong> <a href="17583.php">Nathan Hjelm: "Re: [OMPI devel] error in test/threads/opal_condition.c"</a>
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
