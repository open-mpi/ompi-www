<?
$subject_val = "[OMPI users] Open-MPI-1.3.2 compatibility with old torque?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 14:57:22 2009" -->
<!-- isoreceived="20090721185722" -->
<!-- sent="Tue, 21 Jul 2009 11:57:18 -0700" -->
<!-- isosent="20090721185718" -->
<!-- name="Song, Kai Song" -->
<!-- email="KSong_at_[hidden]" -->
<!-- subject="[OMPI users] Open-MPI-1.3.2 compatibility with old torque?" -->
<!-- id="f101b204110e.4a65ad1e_at_lbl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Open-MPI-1.3.2 compatibility with old torque?<br>
<strong>From:</strong> Song, Kai Song (<em>KSong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 14:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10023.php">Guillaume Sylvand: "[OMPI users] Failure in MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am building open-mpi-1.3.2 on centos-3.4, with torque-1.1.0p2-aspen3 and myrinet. I compiled it just fine with this configuration:
<br>
./configure --prefix=/home/software/ompi/1.3.2-pgi --with-gm=/usr/local/ --with-gm-libdir=/usr/local/lib64/ --enable-static --disable-shared --with-tm=/usr/ --without-threads CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77 LDFLAGS=-L/usr/lib64/torque/
<br>
<p>However, when I submit jobs for 2 or more nodes through the torque schedular, the jobs just hang here. It shows the RUN state, but no communication between the nodes, then jobs will die with timeout.  
<br>
<p>We have comfirmed that the myrinet is working because our lam-mpi-7.1 works just fine. We are having a really hard time determining what are the causes for this problem. So, we suspect it's because our torque is too old.
<br>
<p>What is the lowest version requirement of torque for open-mpi-1.3.2? The README file didn't specify this detail. Does anyone know more about it?
<br>
<p>Thanks in advance,
<br>
<p>Kai
<br>
--------------------
<br>
Kai Song
<br>
&lt;ksong_at_[hidden]&gt; 1.510.486.4894
<br>
High Performance Computing Services (HPCS) Intern
<br>
Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10023.php">Guillaume Sylvand: "[OMPI users] Failure in MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
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
