<?
$subject_val = "[OMPI devel] [2.0.0rc3] NAG Fortran failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:32:27 2016" -->
<!-- isoreceived="20160616013227" -->
<!-- sent="Wed, 15 Jun 2016 18:32:14 -0700" -->
<!-- isosent="20160616013214" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc3] NAG Fortran failures" -->
<!-- id="CAAvDA14XvGWAxRikDKTs17A0PMvU+=UTgBkynOd53Wg7fjdzBg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc3] NAG Fortran failures<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 21:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Previous message:</strong> <a href="19105.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Reply:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing the following errors when using NAG Fortran (v5 or v6):
<br>
<p>Error:
<br>
/sandbox/hargrove/OMPI/openmpi-2.0.0rc3-linux-x86_64-nagfor-5/openmpi-2.0.0rc3/ompi/mpi/fortran/use-mpi-tkr/mpi_comm_spawn_multiple_f90.f90:
<br>
Argument 3 to MPI_COMM_SPAWN_MULTIPLE has data type DOUBLE PRECISION in
<br>
reference from MPI_COMM_SPAWN_MULTIPLEN and CHARACTER in reference from
<br>
MPI_COMM_SPAWN_MULTIPLEA
<br>
Error:
<br>
/sandbox/hargrove/OMPI/openmpi-2.0.0rc3-linux-x86_64-nagfor-5/openmpi-2.0.0rc3/ompi/mpi/fortran/use-mpi-tkr/mpi_testall_f90.f90:
<br>
Argument 4 to MPI_TESTALL has data type DOUBLE PRECISION in reference from
<br>
MPI_TESTALLI and INTEGER in reference from MPI_TESTALLS
<br>
<p>I am 99% certain this means the FC=-mismatch fix is missing.
<br>
To be precise, v2.x is missing
<br>
<a href="https://github.com/open-mpi/ompi/commit/1ce5393f">https://github.com/open-mpi/ompi/commit/1ce5393f</a>
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19106/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19107.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<li><strong>Previous message:</strong> <a href="19105.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] ppc64el/XLC crash in intercept_mmap()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
<li><strong>Reply:</strong> <a href="19110.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc3] NAG Fortran failures"</a>
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
