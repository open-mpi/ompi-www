<?
$subject_val = "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 10:57:19 2010" -->
<!-- isoreceived="20100610145719" -->
<!-- sent="Thu, 10 Jun 2010 08:57:08 -0600" -->
<!-- isosent="20100610145708" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..." -->
<!-- id="37C2BF52-0993-4667-89FE-020FDA95ADD1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E258E50D3E8E9_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 10:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Previous message:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>In reply to:</strong> <a href="13295.php">Richard Walsh: "[OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Reply:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That error would indicate something wrong with the pbs connection - it is tm_init that is crashing. I note that you did --with-tm pointing to a different location - was that intentional? Could be something wrong with that pbs build
<br>
<p>On Jun 10, 2010, at 8:44 AM, Richard Walsh wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am upgrading from 1.4.1 to 1.4.2 on both a cluster with IB and one without.
</span><br>
<span class="quotelev1">&gt; I have no problem on the GE cluster without IB which requires no special configure
</span><br>
<span class="quotelev1">&gt; options for the IB.  1.4.2 works perfectly there with both the latest Intel and PGI
</span><br>
<span class="quotelev1">&gt; compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the IB system 1.4.1 has worked fine with the following configure line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --enable-openib-ibcm --with-openib --prefix=/share/apps/openmpi-intel/1.4.1 --with-tm=/share/apps/pbs/10.1.0.91350
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have now built 1.4.2. with the almost identical:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./configure CC=icc CXX=icpc F77=ifort FC=ifort --enable-openib-ibcm --with-openib --prefix=/share/apps/openmpi-intel/1.4.2 --with-tm=/share/apps/pbs/default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run a basic MPI test program with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-intel/1.4.2/bin/mpirun -np 16 -machinefile $PBS_NODEFILE ./hello_mpi.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which defaults to using the IB switch, or with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-intel/1.4.2/bin/mpirun -mca btl tcp,self -np 16 -machinefile $PBS_NODEFILE ./hello_mpi.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which forces the use of GE, I get the same error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] Failing at address: 0x3f
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 0] /lib64/libpthread.so.0 [0x3639e0e7c0]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 1] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so(discui_+0x84) [0x2b7b546dd3d0]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 2] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so(diswsi+0xc3) [0x2b7b546da9e3]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 3] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so [0x2b7b546d868c]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 4] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so(tm_init+0x1fe) [0x2b7b546d8978]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 5] /share/apps/openmpi-intel/1.4.2/lib/openmpi/mca_plm_tm.so [0x2b7b546d791c]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 6] /share/apps/openmpi-intel/1.4.2/bin/mpirun [0x404c27]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 7] /share/apps/openmpi-intel/1.4.2/bin/mpirun [0x403e38]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x363961d994]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] [ 9] /share/apps/openmpi-intel/1.4.2/bin/mpirun [0x403d69]
</span><br>
<span class="quotelev1">&gt; [compute-0-3:22515] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /var/spool/PBS/mom_priv/jobs/9909.bob.csi.cuny.edu.SC: line 42: 22515 Segmentation fault      /share/apps/openmpi-intel/1.4.2/bin/mpirun -mca btl tcp,self -np 16 -machinefile $PBS_NODEFILE ./hello_mpi.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When compiling with the PGI compiler suite I get the same result
</span><br>
<span class="quotelev1">&gt; although the traceback gives less detail.  I notice postings that suggest
</span><br>
<span class="quotelev1">&gt; the if I disable the memory-manager I might be able to get around
</span><br>
<span class="quotelev1">&gt; this problem, but that will result in a performance hit on this IB
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have others seen this?  Suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Richard Walsh
</span><br>
<span class="quotelev1">&gt;   Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt;   CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt;   718-982-3319
</span><br>
<span class="quotelev1">&gt;   612-382-4620
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Mighty the Wizard
</span><br>
<span class="quotelev1">&gt;   Who found me at sunrise
</span><br>
<span class="quotelev1">&gt;   Sleeping, and woke me
</span><br>
<span class="quotelev1">&gt;   And learn'd me Magic!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think green before you print this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Previous message:</strong> <a href="13296.php">Jed Brown: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>In reply to:</strong> <a href="13295.php">Richard Walsh: "[OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
<li><strong>Reply:</strong> <a href="13298.php">Jeff Squyres: "Re: [OMPI users] Address not mapped segmentation fault with 1.4.2 ..."</a>
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
