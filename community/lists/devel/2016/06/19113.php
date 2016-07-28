<?
$subject_val = "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:50:15 2016" -->
<!-- isoreceived="20160616015015" -->
<!-- sent="Wed, 15 Jun 2016 18:50:11 -0700" -->
<!-- isosent="20160616015011" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures" -->
<!-- id="CAAvDA17hGVtyBASXpiGgoh7z1HdphvDZb1Ogq-Mzh9PbyL08mA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4f5eca25-c48e-0e8d-e10d-07dc9e08c8cd_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19114.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Previous message:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>In reply to:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I am just reporting all the issues I find in this RC.
<br>
It is up to the core Open MPI developers to decide which ones warrant
<br>
attention for 2.0.0.
<br>
<p>-Paul
<br>
<p>On Wed, Jun 15, 2016 at 6:43 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NAG related stuff was added in <a href="https://github.com/open-mpi/ompi/pull/1295">https://github.com/open-mpi/ompi/pull/1295</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Milestone was set to v2.0.1 so no PR was even issued (yet) for the v2.x
</span><br>
<span class="quotelev1">&gt; branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is a consensus to update the milestone to v2.0.0, i ll be happy
</span><br>
<span class="quotelev1">&gt; to PR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/16/2016 10:32 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing the following errors when using NAG Fortran (v5 or v6):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-2.0.0rc3-linux-x86_64-nagfor-5/openmpi-2.0.0rc3/ompi/mpi/fortran/use-mpi-tkr/mpi_comm_spawn_multiple_f90.f90:
</span><br>
<span class="quotelev1">&gt; Argument 3 to MPI_COMM_SPAWN_MULTIPLE has data type DOUBLE PRECISION in
</span><br>
<span class="quotelev1">&gt; reference from MPI_COMM_SPAWN_MULTIPLEN and CHARACTER in reference from
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN_MULTIPLEA
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-2.0.0rc3-linux-x86_64-nagfor-5/openmpi-2.0.0rc3/ompi/mpi/fortran/use-mpi-tkr/mpi_testall_f90.f90:
</span><br>
<span class="quotelev1">&gt; Argument 4 to MPI_TESTALL has data type DOUBLE PRECISION in reference from
</span><br>
<span class="quotelev1">&gt; MPI_TESTALLI and INTEGER in reference from MPI_TESTALLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am 99% certain this means the FC=-mismatch fix is missing.
</span><br>
<span class="quotelev1">&gt; To be precise, v2.x is missing
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/1ce5393f">https://github.com/open-mpi/ompi/commit/1ce5393f</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                           &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19106.php">http://www.open-mpi.org/community/lists/devel/2016/06/19106.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19110.php">http://www.open-mpi.org/community/lists/devel/2016/06/19110.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19113/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19114.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Previous message:</strong> <a href="19112.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>In reply to:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
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
