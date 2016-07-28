<?
$subject_val = "[OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 15:12:37 2011" -->
<!-- isoreceived="20111216201237" -->
<!-- sent="Fri, 16 Dec 2011 20:12:29 +0000" -->
<!-- isosent="20111216201229" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="[OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="762096C11C5A044A9D92961C2E1A7CE8192A3AA5_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 15:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17994.php">Radomir Szewczyk: "[OMPI users] bruteforce searching"</a>
<li><strong>Previous message:</strong> <a href="17992.php">Jeff Squyres: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18015.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18015.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Working through a stock rebuild of OpenMPI 1.5.4 and 1.4.4 with
<br>
the most current compiler suites from both PGI and Intel:
<br>
<p>&nbsp;&nbsp;&nbsp;1.  PGI,  Version 11.10
<br>
<p>&nbsp;&nbsp;&nbsp;2.  Intel,  Version 12.1.0.233 Build 20110811
<br>
<p>My 1.5.4 'config.log' header looks like this for Intel:
<br>
<p>./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-openib --prefix=/share/apps/openmpi-intel/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
<br>
<p>and this for PGI:
<br>
<p>./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --with-openib --prefix=/share/apps/openmpi-pgi/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
<br>
<p>This configure line has been used successfully before.  Configuration, build, and install
<br>
for BOTH compilers seems to work OK; however, my 'mpicc' build of my basic test
<br>
program ONLY works with the PGI built version of 'mpicc' for either the 1.4.4 or the 1.5.4
<br>
will compile the code.
<br>
<p>The Intel 1.4.4 and 1.5.4 'mpicc' wrapper-compilers produce an immediate segmentation
<br>
fault:
<br>
<p>.[richard.walsh_at_bob pbs]$ ./compile_it
<br>
./compile_it: line 10: 19163 Segmentation fault      /share/apps/openmpi-intel/1.5.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
<br>
[richard.walsh_at_bob pbs]$
<br>
[richard.walsh_at_bob pbs]$ ./compile_it
<br>
./compile_it: line 10: 19515 Segmentation fault      /share/apps/openmpi-intel/1.4.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
<br>
<p>This Intel stack is from the most recent release of their ICS released
<br>
in late October before SC11:
<br>
<p>[richard.walsh_at_bob pbs]$ icc -V
<br>
Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
<br>
<p>[richard.walsh_at_bob pbs]$ ifort -V
<br>
Intel(R) Fortran Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
<br>
<p>Has anyone else encountered this problem ... ??  Suggestions ... ??
<br>
<p>Thanks,
<br>
<p>rbw
<br>
<p><p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
W: 718-982-3319
<br>
M: 612-382-4620
<br>
<p>Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
<br>
<p><p>________________________________
<br>
<p>Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
<br>
Tobacco-Free Campus as of July 1, 2012.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17994.php">Radomir Szewczyk: "[OMPI users] bruteforce searching"</a>
<li><strong>Previous message:</strong> <a href="17992.php">Jeff Squyres: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18015.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18015.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
