<?
$subject_val = "Re: [OMPI users] Openmpi not using IB and no warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 02:14:10 2009" -->
<!-- isoreceived="20091015061410" -->
<!-- sent="Thu, 15 Oct 2009 11:44:05 +0530" -->
<!-- isosent="20091015061405" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi not using IB and no warning message" -->
<!-- id="cb60cbc40910142314l64a13627n7a664554230c62ef_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="67D37BC8-8BF6-4C5A-845B-17D05054C3F7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi not using IB and no warning message<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-15 02:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10919.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10917.php">George Bosilca: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>In reply to:</strong> <a href="10917.php">George Bosilca: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10965.php">Jeff Squyres: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Reply:</strong> <a href="10965.php">Jeff Squyres: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've run ibpingpong tests. They are working fine.
<br>
&nbsp;Are there any additional tests available which will make sure that &quot;there
<br>
is no problem with IB software and Open MPI. The problem is with Application
<br>
or IB hardware&quot;?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Because we've faced some critical problems:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/10/10843.php">http://www.open-mpi.org/community/lists/users/2009/10/10843.php</a>
<br>
<p>and
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/09/10700.php">http://www.open-mpi.org/community/lists/users/2009/09/10700.php</a>
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p>On Wed, Oct 14, 2009 at 10:12 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Sangamesh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is a version issue with OFED it will be detected at configure
</span><br>
<span class="quotelev1">&gt; time. If you manage to compile and install Open MPI there should be no
</span><br>
<span class="quotelev1">&gt; issues with OFED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I can tell is that &quot;--mca btl openib,self&quot; will not allow any other
</span><br>
<span class="quotelev1">&gt; network (with the exception of Infiniband) to be used for communications
</span><br>
<span class="quotelev1">&gt; between MPI processes. However, our runtime is still allowed to use TCP, and
</span><br>
<span class="quotelev1">&gt; this is what you see on your netstat. These are not performance critical
</span><br>
<span class="quotelev1">&gt; communications (i.e. only startup the job, distribute the contact
</span><br>
<span class="quotelev1">&gt; informations and so on).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you run the IB tests to validate the IB network?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 12, 2009, at 03:38 , Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Any hint for the previous mail?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does Open MPI-1.3.3 support only a limited versions of OFED?
</span><br>
<span class="quotelev2">&gt;&gt; Or any version is ok?
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Oct 11, 2009 at 3:55 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A fortran application is installed with Intel Fortran 10.1, MKL-10 and
</span><br>
<span class="quotelev2">&gt;&gt; Openmpi-1.3.3 on a Rocks-5.1 HPC Linux cluster. The jobs are not scaling
</span><br>
<span class="quotelev2">&gt;&gt; when more than one node is used. The cluster has Intel Quad core Xeon
</span><br>
<span class="quotelev2">&gt;&gt; (E5472) @ 3.00GHz Dual processor (total 8 cores per node, 16GB RAM) and
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband interconnectivity.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are some of the timings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 12 cores (Node 1: 8 cores, Node2: 4 cores)  --  No progress in the job
</span><br>
<span class="quotelev2">&gt;&gt;  8 cores (Node 1: 8 cores)
</span><br>
<span class="quotelev2">&gt;&gt;   -- 21 hours (38 CG move steps)
</span><br>
<span class="quotelev2">&gt;&gt;  4 cores (Node 1: 4 cores)                           -- 25 hours
</span><br>
<span class="quotelev2">&gt;&gt; 12 cores (Node 1, Node 2, Node 3: 4cores each) -- No progress
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Later to check, whether Open MPI is using IB or not, I used --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; openib. But the job failed with following error message:
</span><br>
<span class="quotelev2">&gt;&gt; # cat /home1/g03/apps_test/amber/test16/err.352.job16
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Process 1 ([[23671,1],12]) is on host: compute-0-12.local
</span><br>
<span class="quotelev2">&gt;&gt;  Process 2 ([[23671,1],12]) is on host: compute-0-12.local
</span><br>
<span class="quotelev2">&gt;&gt;  BTLs attempted: openib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-12.local:5496] Abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev2">&gt;&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-5.local:6916] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-5.local:6914] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-5.local:6915] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-5.local:6913] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 12 with PID 5496 on
</span><br>
<span class="quotelev2">&gt;&gt; node compute-0-12.local exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-5.local:06910] 15 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-5.local:06910] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev2">&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-5.local:06910] 15 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Process 1 ([[23958,1],2]) is on host: compute-0-5.local
</span><br>
<span class="quotelev2">&gt;&gt;  Process 2 ([[23958,1],2]) is on host: compute-0-5.local
</span><br>
<span class="quotelev2">&gt;&gt;  BTLs attempted: openib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then added 'self' to --mca btl openib,. With this it started running, but
</span><br>
<span class="quotelev2">&gt;&gt; I can make sure its not using IB as I observed it from the netstat -i
</span><br>
<span class="quotelev2">&gt;&gt; command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1st Snap:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Every 2.0s: netstat -i
</span><br>
<span class="quotelev2">&gt;&gt;                                                           Sun Oct 11
</span><br>
<span class="quotelev2">&gt;&gt; 15:29:29 2009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kernel Interface table
</span><br>
<span class="quotelev2">&gt;&gt; Iface       MTU Met    RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX-DRP
</span><br>
<span class="quotelev2">&gt;&gt; TX-OVR Flg
</span><br>
<span class="quotelev2">&gt;&gt; eth0       1500   0  1847619      0     0    0  2073010    0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; BMRU
</span><br>
<span class="quotelev2">&gt;&gt; ib0      65520   0     708      0     0    0      509    0      5      0
</span><br>
<span class="quotelev2">&gt;&gt; BMRU
</span><br>
<span class="quotelev2">&gt;&gt; lo        16436   0     5731      0     0    0     5731    0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; LRU
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2nd Snap:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Every 2.0s: netstat -i
</span><br>
<span class="quotelev2">&gt;&gt;                                                           Sun Oct 11
</span><br>
<span class="quotelev2">&gt;&gt; 15:29:57 2009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kernel Interface table
</span><br>
<span class="quotelev2">&gt;&gt; Iface       MTU Met    RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX-DRP
</span><br>
<span class="quotelev2">&gt;&gt; TX-OVR Flg
</span><br>
<span class="quotelev2">&gt;&gt; eth0       1500   0  1847647      0     0    0  2073073    0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; BMRU
</span><br>
<span class="quotelev2">&gt;&gt; ib0      65520   0     708      0     0    0      509    0      5      0
</span><br>
<span class="quotelev2">&gt;&gt; BMRU
</span><br>
<span class="quotelev2">&gt;&gt; lo        16436   0     5731      0     0    0     5731    0      0      0
</span><br>
<span class="quotelev2">&gt;&gt; LRU
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why OpenMPI is not able to use IB?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ldd to the executable shows, no IB libraries are linked. Is this the
</span><br>
<span class="quotelev2">&gt;&gt; reason:
</span><br>
<span class="quotelev2">&gt;&gt; ldd /opt/apps/siesta/siesta_mpi
</span><br>
<span class="quotelev2">&gt;&gt;    /opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_intel_lp64.so(0x00002aaaaaaad000)
</span><br>
<span class="quotelev2">&gt;&gt;    /opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_intel_thread.so(0x00002aaaaadc2000)
</span><br>
<span class="quotelev2">&gt;&gt;    /opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_core.so(0x00002aaaab2ad000)
</span><br>
<span class="quotelev2">&gt;&gt;    libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000034a6200000)
</span><br>
<span class="quotelev2">&gt;&gt;    libmpi_f90.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libmpi_f90.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaab4a0000)
</span><br>
<span class="quotelev2">&gt;&gt;    libmpi_f77.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libmpi_f77.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaab6a3000)
</span><br>
<span class="quotelev2">&gt;&gt;    libmpi.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaab8db000)
</span><br>
<span class="quotelev2">&gt;&gt;    libopen-rte.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libopen-rte.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaabbaa000)
</span><br>
<span class="quotelev2">&gt;&gt;    libopen-pal.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaabe07000)
</span><br>
<span class="quotelev2">&gt;&gt;    libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000034a5e00000)
</span><br>
<span class="quotelev2">&gt;&gt;    libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000034a8200000)
</span><br>
<span class="quotelev2">&gt;&gt;    libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000034a6600000)
</span><br>
<span class="quotelev2">&gt;&gt;    libifport.so.5 =&gt; /opt/intel/fce/10.1.008/lib/libifport.so.5
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaac09a000)
</span><br>
<span class="quotelev2">&gt;&gt;    libifcoremt.so.5 =&gt; /opt/intel/fce/10.1.008/lib/libifcoremt.so.5
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaac1d0000)
</span><br>
<span class="quotelev2">&gt;&gt;    libimf.so =&gt; /opt/intel/cce/10.1.018/lib/libimf.so (0x00002aaaac401000)
</span><br>
<span class="quotelev2">&gt;&gt;    libsvml.so =&gt; /opt/intel/cce/10.1.018/lib/libsvml.so
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaac766000)
</span><br>
<span class="quotelev2">&gt;&gt;    libm.so.6 =&gt; /lib64/libm.so.6 (0x00000034a6e00000)
</span><br>
<span class="quotelev2">&gt;&gt;    libguide.so =&gt; /opt/intel/mkl/10.0.5.025/lib/em64t/libguide.so(0x00002aaaac8f1000)
</span><br>
<span class="quotelev2">&gt;&gt;    libintlc.so.5 =&gt; /opt/intel/cce/10.1.018/lib/libintlc.so.5
</span><br>
<span class="quotelev2">&gt;&gt; (0x00002aaaaca65000)
</span><br>
<span class="quotelev2">&gt;&gt;    libc.so.6 =&gt; /lib64/libc.so.6 (0x00000034a5a00000)
</span><br>
<span class="quotelev2">&gt;&gt;    libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00000034a7e00000)
</span><br>
<span class="quotelev2">&gt;&gt;    /lib64/ld-linux-x86-64.so.2 (0x00000034a5600000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the help of Open MPI FAQ:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # /opt/mpi/openmpi/1.3.3/intel/bin/ompi_info --param btl openib
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                          Verbosity level of the BTL framework
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;, data
</span><br>
<span class="quotelev2">&gt;&gt; source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                          Default selection set of components for the btl
</span><br>
<span class="quotelev2">&gt;&gt; framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                          Output some verbose OpenIB BTL information (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no output, nonzero = output)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;btl_openib_warn_no_device_params_found&quot; (current value: &quot;1&quot;, data source:
</span><br>
<span class="quotelev2">&gt;&gt; default value, synonyms:
</span><br>
<span class="quotelev2">&gt;&gt;                          btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when no device-specific parameters are found
</span><br>
<span class="quotelev2">&gt;&gt; in the INI file specified by the btl_openib_device_param_files MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; (0 =
</span><br>
<span class="quotelev2">&gt;&gt;                          do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev2">&gt;&gt;                          btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when no device-specific parameters are found
</span><br>
<span class="quotelev2">&gt;&gt; in the INI file specified by the btl_openib_device_param_files MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; (0 =
</span><br>
<span class="quotelev2">&gt;&gt;                          do not warn; any other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn when there is more than one active ports and
</span><br>
<span class="quotelev2">&gt;&gt; at least one of them connected to the network with only default GID prefix
</span><br>
<span class="quotelev2">&gt;&gt;                          configured (0 = do not warn; any other value =
</span><br>
<span class="quotelev2">&gt;&gt; warn)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                          Warn if non-existent devices and/or ports are
</span><br>
<span class="quotelev2">&gt;&gt; specified in the btl_openib_if_[in|ex]clude MCA parameters (0 = do not warn;
</span><br>
<span class="quotelev2">&gt;&gt; any
</span><br>
<span class="quotelev2">&gt;&gt;                          other value = warn)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During Open MPI install I've used --with-openib=/usr. So I believe its
</span><br>
<span class="quotelev2">&gt;&gt; compiled with IB support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The IB utilities such as ibv_rc_pingpong are working fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not getting why its OMPI is not using IB? Please help me to resolve
</span><br>
<span class="quotelev2">&gt;&gt; this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10918/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10919.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10917.php">George Bosilca: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>In reply to:</strong> <a href="10917.php">George Bosilca: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10965.php">Jeff Squyres: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Reply:</strong> <a href="10965.php">Jeff Squyres: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
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
