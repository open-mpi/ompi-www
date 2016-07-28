<?
$subject_val = "[OMPI users] Address not mapped segmentation fault with 1.4.2 ...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 10:45:23 2010" -->
<!-- isoreceived="20100610144523" -->
<!-- sent="Thu, 10 Jun 2010 10:44:14 -0400" -->
<!-- isosent="20100610144414" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="[OMPI users] Address not mapped segmentation fault with 1.4.2 ..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E258E50D3E8E9_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Address not mapped segmentation fault with 1.4.2 ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 10:44:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Previous message:</strong> <a href="13294.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Reply:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Reply:</strong> <a href="13297.php">Ralph Castain: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I am upgrading from 1.4.1 to 1.4.2 on both a cluster with IB and one without.
<br>
I have no problem on the GE cluster without IB which requires no special configure
<br>
options for the IB.  1.4.2 works perfectly there with both the latest Intel and PGI
<br>
compiler.
<br>
<p>On the IB system 1.4.1 has worked fine with the following configure line:
<br>
<p>./configure CC=icc CXX=icpc F77=ifort FC=ifort --enable-openib-ibcm --with-openib --prefix=/share/apps/openmpi-intel/1.4.1 --with-tm=/share/apps/pbs/10.1.0.91350
<br>
<p>I have now built 1.4.2. with the almost identical:
<br>
<p>&nbsp;$ ./configure CC=icc CXX=icpc F77=ifort FC=ifort --enable-openib-ibcm --with-openib --prefix=/share/apps/openmpi-intel/1.4.2 --with-tm=/share/apps/pbs/default
<br>
<p>When I run a basic MPI test program with:
<br>
<p>/share/apps/openmpi-intel/1.4.2/bin/mpirun -np 16 -machinefile $PBS_NODEFILE ./hello_mpi.exe
<br>
<p>which defaults to using the IB switch, or with:
<br>
<p>/share/apps/openmpi-intel/1.4.2/bin/mpirun -mca btl tcp,self -np 16 -machinefile $PBS_NODEFILE ./hello_mpi.exe
<br>
<p>which forces the use of GE, I get the same error:
<br>
<p>[compute-0-3:22515] *** Process received signal ***
<br>
[compute-0-3:22515] Signal: Segmentation fault (11)
<br>
[compute-0-3:22515] Signal code: Address not mapped (1)
<br>
[compute-0-3:22515] Failing at address: 0x3f
<br>
[compute-0-3:22515] [ 0] /lib64/libpthread.so.0 [0x3639e0e7c0]
<br>
[compute-0-3:22515] [ 1] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so(discui_+0x84) [0x2b7b546dd3d0]
<br>
[compute-0-3:22515] [ 2] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so(diswsi+0xc3) [0x2b7b546da9e3]
<br>
[compute-0-3:22515] [ 3] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so [0x2b7b546d868c]
<br>
[compute-0-3:22515] [ 4] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so(tm_init+0x1fe) [0x2b7b546d8978]
<br>
[compute-0-3:22515] [ 5] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so [0x2b7b546d791c]
<br>
[compute-0-3:22515] [ 6] /share/apps/openmpi-intel/1.4.2/bin/mpirun [0x404c27]
<br>
[compute-0-3:22515] [ 7] /share/apps/openmpi-intel/1.4.2/bin/mpirun [0x403e38]
<br>
[compute-0-3:22515] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x363961d994]
<br>
[compute-0-3:22515] [ 9] /share/apps/openmpi-intel/1.4.2/bin/mpirun [0x403d69]
<br>
[compute-0-3:22515] *** End of error message ***
<br>
/var/spool/PBS/mom_priv/jobs/9909.bob.csi.cuny.edu.SC: line 42: 22515 Segmentation fault      /share/apps/openmpi-intel/1.4.2/bin/mpirun -mca btl tcp,self -np 16 -machinefile $PBS_NODEFILE ./hello_mpi.exe
<br>
<p>When compiling with the PGI compiler suite I get the same result
<br>
although the traceback gives less detail.  I notice postings that suggest
<br>
the if I disable the memory-manager I might be able to get around
<br>
this problem, but that will result in a performance hit on this IB
<br>
system.
<br>
<p>Have others seen this?  Suggestions?
<br>
<p>Thanks,
<br>
<p>Richard Walsh
<br>
CUNY HPC Center
<br>
<p>&nbsp;&nbsp;&nbsp;Richard Walsh
<br>
&nbsp;&nbsp;&nbsp;Parallel Applications and Systems Manager
<br>
&nbsp;&nbsp;&nbsp;CUNY HPC Center, Staten Island, NY
<br>
&nbsp;&nbsp;&nbsp;718-982-3319
<br>
&nbsp;&nbsp;&nbsp;612-382-4620
<br>
<p>&nbsp;&nbsp;&nbsp;Mighty the Wizard
<br>
&nbsp;&nbsp;&nbsp;Who found me at sunrise
<br>
&nbsp;&nbsp;&nbsp;Sleeping, and woke me
<br>
&nbsp;&nbsp;&nbsp;And learn'd me Magic!
<br>
<p>Think green before you print this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Previous message:</strong> <a href="13294.php">David Zhang: "Re: [OMPI users] mpi_iprobe not behaving as expect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Reply:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Reply:</strong> <a href="13297.php">Ralph Castain: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
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
