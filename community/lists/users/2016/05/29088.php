<?
$subject_val = "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 03:37:47 2016" -->
<!-- isoreceived="20160505073747" -->
<!-- sent="Thu, 5 May 2016 16:37:45 +0900" -->
<!-- isosent="20160505073745" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="CAAkFZ5vJZ+qgkjQO6+V=ZqZW_K4nmNDh24G8-tnUhFD-vPNMyQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMP0BNaGS3P7M=d1OUpdS22afGEp=G19qFC05oybSNH_LYTcgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 03:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Giacomo,
<br>
<p>could you also open the core file with gdb and post the backtrace ?
<br>
<p>can you also
<br>
ldd mpif90
<br>
and confirm no intel MPI library is used ?
<br>
<p>btw, the OpenMPI fortran wrapper is now mpifort
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, May 5, 2016, Giacomo Rossi &lt;giacombum_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','giacombum_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;ve installed the latest version of Intel Parallel Studio (16.0.3), then
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve downloaded the latest version of openmpi (1.10.2) and I&#226;&#128;&#153;ve compiled it
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi/1.10.2/intel/16.0.3`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then I've installed and everything seems ok, but when I try the simple
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ' /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I receive the following error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'Segmentation fault (core dumped)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm on ArchLinux, with kernel 4.5.1-1-ARCH; I've attache to this email the
</span><br>
<span class="quotelev1">&gt; config.log file compressed with bzip2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will be appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot;
</span><br>
<span class="quotelev1">&gt; University of Rome
</span><br>
<span class="quotelev1">&gt; *p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e: *giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
