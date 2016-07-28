<?
$subject_val = "[OMPI users] Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 08:05:13 2007" -->
<!-- isoreceived="20071107130513" -->
<!-- sent="Wed, 7 Nov 2007 05:05:06 -0800 (PST)" -->
<!-- isosent="20071107130506" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault" -->
<!-- id="968890.58665.qm_at_web57602.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 08:05:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="4430.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Maybe reply:</strong> <a href="4441.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder whether any suggestion can be offered about segmentation fault
<br>
occurring on running a docking program (DOCK 6.1, written in C) on Debian Linux
<br>
amd64 etch, i.e. dual opterons machine. Running DOCK6.1 parallel was OK until
<br>
yesterday. I vaguely remember that before these problems I carried out a
<br>
<p>apt-get upgrade
<br>
<p>and something was done for OpenMPI. 
<br>
<p>DOCK 6.1 was compiled:
<br>
<p>./configure gnu parallel
<br>
MPICH_HOME=/usr/local
<br>
export MPICH_HOME
<br>
make dock
<br>
<p>by pointing MPICH (for which DOCK 6.1 is configured, to my installation of
<br>
OpenMPI 1.2.3
<br>
<p>In my .bashrc:
<br>
<p>DOCK_HOME=/usr/local/dock6
<br>
PATH=$PATH:$DOCK_HOME/bib; export DOCK_HOME PATH
<br>
<p>MPI_HOME=/usr/local
<br>
export MPI_home
<br>
<p><p>which mpicxx
<br>
/usr/local/bin/mpicxx
<br>
<p><p><p>updatedb
<br>
locate mpi.h
<br>
/usr/include/sc/util/group/memmtmpi.h
<br>
/usr/include/sc/util/group/messmpi.h
<br>
/usr/dock6/src/dock/base_mpi.h
<br>
/usr/local/include/mpi.h
<br>
/usr/local/openmpi-1.2.3/ompi/include/mpi.h
<br>
/usr/local/openmpi-1.2.3/ompi/include/mpi.h.in
<br>
/usr/local/openmpi-1.2.3/ompi/mpi/f77/prototypes_mpi.h
<br>
-------
<br>
<p>On these basis, running:
<br>
<p>mpirun -np 4 dock6.mpi -i dock.in -o dock.out
<br>
<p>the process halted with error message:
<br>
<p>Initialing MPI routines ....
<br>
[deb64:03540] *** Process received signal ***
<br>
[deb64:03540] Signal: Segmentation fault (11)
<br>
[deb64:03540] Signal code: Address not mapped (1)
<br>
[deb64:03540] Failing at address: 0x2b9ef5691000
<br>
dock6.mpi[3540]: segfault at 00002b9ef56910000 rip 0000000000447b1b rsp
<br>
00007fff43c137b0 error 6
<br>
[deb64:03540] [0] /lib/libthread.so.0 [0x2b9e681bc410]
<br>
[deb64:03540] [1] dock6.mpi (_ZN60rient12match_ligandER7DOCKMol+0x40b)
<br>
[0x447b1b]
<br>
[deb64:03540] [2] dock6.mpi (main+0xaf5) [0x42cc75]
<br>
[deb64:03540] [3] dock6.mpi /lib/libc.so.6(__libc_start_main+0xda)
<br>
[0x2b9e682e14ca]
<br>
[deb64:03540] [4] dock6.mpi (__gxx_personality_v0+0xc2) [0x41b4ea]
<br>
[deb64:03540] *** End of error message ***
<br>
mpirun noticed that jpb rank 0 with PID 3537 on node deb64 exited on signal 15
<br>
(Terminated).
<br>
3 additional processes aborted (not shown)
<br>
<p><p>Thanks
<br>
francesco pietra
<br>
<p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="4430.php">Adrian Knoth: "Re: [OMPI users] problems compiling svn-version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="4432.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>Maybe reply:</strong> <a href="4441.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
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
