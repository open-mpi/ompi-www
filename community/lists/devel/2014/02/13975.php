<?
$subject_val = "[OMPI devel] OMPI 1.7 compilation error with icc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 05:39:11 2014" -->
<!-- isoreceived="20140203103911" -->
<!-- sent="Mon, 3 Feb 2014 12:39:09 +0200" -->
<!-- isosent="20140203103909" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.7 compilation error with icc" -->
<!-- id="CAAO1KyZDpP0TN2GS0fQ3u+kRkKxVeSEvi+Fd3wUFHB9t9YKbzg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.7 compilation error with icc<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 05:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Previous message:</strong> <a href="13974.php">Paul Hargrove: "[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Reply:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(cd scripts &amp;&amp; make  top_distdir=../../../../../openmpi-1.7.4rc4git
<br>
distdir=../../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-tkr/scripts
<br>
\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
<br>
distdir)
<br>
make[4]: Entering directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr/scripts'
<br>
make[4]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr/scripts'
<br>
make[3]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-tkr'
<br>
&nbsp;(cd mpi/fortran/use-mpi-ignore-tkr &amp;&amp; make
<br>
&nbsp;top_distdir=../../../../openmpi-1.7.4rc4git
<br>
distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-ignore-tkr
<br>
\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
<br>
distdir)
<br>
make[3]: Entering directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-ignore-tkr'
<br>
make[3]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-ignore-tkr'
<br>
&nbsp;(cd mpi/fortran/use-mpi-f08 &amp;&amp; make
<br>
&nbsp;top_distdir=../../../../openmpi-1.7.4rc4git
<br>
distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-f08 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
<br>
distdir)
<br>
make[3]: Entering directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08'
<br>
make[3]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08'
<br>
&nbsp;(cd mpi/fortran/use-mpi-f08-desc &amp;&amp; make
<br>
&nbsp;top_distdir=../../../../openmpi-1.7.4rc4git
<br>
distdir=../../../../openmpi-1.7.4rc4git/ompi/mpi/fortran/use-mpi-f08-desc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=:
<br>
distdir)
<br>
make[3]: Entering directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08-desc'
<br>
&nbsp;&nbsp;FC       mpi-f08-types.lo
<br>
mpi-f08-types.f90(83): error #6418: This name has already been assigned a
<br>
data type.   [MPI_SUBARRAYS_SUPPORTED]
<br>
&nbsp;&nbsp;logical, parameter :: MPI_SUBARRAYS_SUPPORTED = .true.
<br>
------------------------^
<br>
compilation aborted for mpi-f08-types.f90 (code 1)
<br>
make[3]: *** [mpi-f08-types.lo] Error 1
<br>
make[3]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi/mpi/fortran/use-mpi-f08-desc'
<br>
make[2]: *** [distdir] Error 1
<br>
make[2]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7/ompi'
<br>
make[1]: *** [distdir] Error 1
<br>
make[1]: Leaving directory
<br>
`/hpc/local/benchmarks/hpc-stack-icc/src/install/ompi-v1.7'
<br>
make: *** [dist] Error 2
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Previous message:</strong> <a href="13974.php">Paul Hargrove: "[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Reply:</strong> <a href="13976.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.7 compilation error with icc"</a>
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
