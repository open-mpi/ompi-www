<?
$subject_val = "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 02:51:38 2016" -->
<!-- isoreceived="20160505065138" -->
<!-- sent="Thu, 5 May 2016 08:50:55 +0200" -->
<!-- isosent="20160505065055" -->
<!-- name="Giacomo Rossi" -->
<!-- email="giacombum_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="CAMP0BNaGS3P7M=d1OUpdS22afGEp=G19qFC05oybSNH_LYTcgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v<br>
<strong>From:</strong> Giacomo Rossi (<em>giacombum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 02:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;ve installed the latest version of Intel Parallel Studio (16.0.3), then
<br>
I&#226;&#128;&#153;ve downloaded the latest version of openmpi (1.10.2) and I&#226;&#128;&#153;ve compiled it
<br>
with
<br>
<p>`./configure CC=icc CXX=icpc F77=ifort FC=ifort
<br>
--prefix=/opt/openmpi/1.10.2/intel/16.0.3`
<br>
<p>then I've installed and everything seems ok, but when I try the simple
<br>
command
<br>
<p>' /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v'
<br>
<p>I receive the following error
<br>
<p>'Segmentation fault (core dumped)'
<br>
<p>I'm on ArchLinux, with kernel 4.5.1-1-ARCH; I've attache to this email the
<br>
config.log file compressed with bzip2.
<br>
<p>Any help will be appreciated!
<br>
<p>Giacomo Rossi Ph.D., Space Engineer
<br>
<p>Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot;
<br>
University of Rome
<br>
*p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e: *giacombum_at_[hidden]
<br>
&lt;giacomo.rossi_at_[hidden]&gt;
<br>
Member of Fortran-FOSS-programmers
<br>
&lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
<br>
<p>&#226;&#128;&#139;
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29087/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29087/config.log.tar.bz2">config.log.tar.bz2</a>
</ul>
<!-- attachment="config.log.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
