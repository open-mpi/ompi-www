<?
$subject_val = "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:43:53 2016" -->
<!-- isoreceived="20160616014353" -->
<!-- sent="Thu, 16 Jun 2016 10:43:49 +0900" -->
<!-- isosent="20160616014349" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures" -->
<!-- id="4f5eca25-c48e-0e8d-e10d-07dc9e08c8cd_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA14XvGWAxRikDKTs17A0PMvU+=UTgBkynOd53Wg7fjdzBg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19111.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] build failure on ppc32 and arm"</a>
<li><strong>Previous message:</strong> <a href="19109.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>In reply to:</strong> <a href="19106.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19113.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Reply:</strong> <a href="19113.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p><p>NAG related stuff was added in <a href="https://github.com/open-mpi/ompi/pull/1295">https://github.com/open-mpi/ompi/pull/1295</a>
<br>
<p>Milestone was set to v2.0.1 so no PR was even issued (yet) for the v2.x 
<br>
branch.
<br>
<p>If there is a consensus to update the milestone to v2.0.0, i ll be happy 
<br>
to PR
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/16/2016 10:32 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I am seeing the following errors when using NAG Fortran (v5 or v6):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: 
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-2.0.0rc3-linux-x86_64-nagfor-5/openmpi-2.0.0rc3/ompi/mpi/fortran/use-mpi-tkr/mpi_comm_spawn_multiple_f90.f90: 
</span><br>
<span class="quotelev1">&gt; Argument 3 to MPI_COMM_SPAWN_MULTIPLE has data type DOUBLE PRECISION 
</span><br>
<span class="quotelev1">&gt; in reference from MPI_COMM_SPAWN_MULTIPLEN and CHARACTER in reference 
</span><br>
<span class="quotelev1">&gt; from MPI_COMM_SPAWN_MULTIPLEA
</span><br>
<span class="quotelev1">&gt; Error: 
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-2.0.0rc3-linux-x86_64-nagfor-5/openmpi-2.0.0rc3/ompi/mpi/fortran/use-mpi-tkr/mpi_testall_f90.f90: 
</span><br>
<span class="quotelev1">&gt; Argument 4 to MPI_TESTALL has data type DOUBLE PRECISION in reference 
</span><br>
<span class="quotelev1">&gt; from MPI_TESTALLI and INTEGER in reference from MPI_TESTALLS
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
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19106.php">http://www.open-mpi.org/community/lists/devel/2016/06/19106.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19111.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] build failure on ppc32 and arm"</a>
<li><strong>Previous message:</strong> <a href="19109.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] OpenBSD/ROMIO"</a>
<li><strong>In reply to:</strong> <a href="19106.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19113.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Reply:</strong> <a href="19113.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
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
