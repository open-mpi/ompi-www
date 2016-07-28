<?
$subject_val = "[OMPI users] Installing MPE on existing Open-MPI installation for C++ programs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 11 14:08:54 2010" -->
<!-- isoreceived="20100411180854" -->
<!-- sent="Sun, 11 Apr 2010 14:08:29 -0400" -->
<!-- isosent="20100411180829" -->
<!-- name="Ridhi Dua" -->
<!-- email="duaridhi_at_[hidden]" -->
<!-- subject="[OMPI users] Installing MPE on existing Open-MPI installation for C++ programs" -->
<!-- id="h2wdcee974f1004111108l4afd6138z472ca563a3a70948_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="k2udcee974f1004110956haa69f91i12905eea653f3523_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs<br>
<strong>From:</strong> Ridhi Dua (<em>duaridhi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-11 14:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12603.php">Baowei Liu: "[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12601.php">Fernando Lemos: "Re: [OMPI users] Adding new process to running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12611.php">chan_at_[hidden]: "Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<li><strong>Maybe reply:</strong> <a href="12611.php">chan_at_[hidden]: "Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I have successfully installed MPE for my existing Open-MPI installation and
<br>
have been able compile using the compiler wrapper 'mpecc'.
<br>
But, I have some C++ MPI programs which cannot be compiled using mpecc. How
<br>
do I achieve this,or do I need to make changes to my MPE installation
<br>
procedure? I used the following command for my current installation.
<br>
<p>./configure --prefix=/gpfs/fs3/home/xxx/mybin \
<br>
MPI_CC=/sw/openmpi/bin/mpicc \
<br>
--disable-f77 \
<br>
--with-java=/usr/java/jdk1.6.0_13
<br>
<p>(Also, I have managed to use mpecc, but not 'mpicc -mpilog hello.c' Is this
<br>
assumption even correct for Open-MPI or is it an option only for MPICH )
<br>
<p>Thank you.
<br>
~ ridZ
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12603.php">Baowei Liu: "[OMPI users] openMPI configure/Installing problem on Mac with gnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12601.php">Fernando Lemos: "Re: [OMPI users] Adding new process to running job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12611.php">chan_at_[hidden]: "Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<li><strong>Maybe reply:</strong> <a href="12611.php">chan_at_[hidden]: "Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
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
