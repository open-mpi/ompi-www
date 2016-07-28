<?
$subject_val = "Re: [OMPI users] Openmpi not using IB and no warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 12:42:19 2009" -->
<!-- isoreceived="20091014164219" -->
<!-- sent="Wed, 14 Oct 2009 12:42:10 -0400" -->
<!-- isosent="20091014164210" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi not using IB and no warning message" -->
<!-- id="67D37BC8-8BF6-4C5A-845B-17D05054C3F7_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="cb60cbc40910120038s117e975u8ac3bb015fedae03_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-14 12:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10916.php">Abhinav Vishnu: "[OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Reply:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sangamesh,
<br>
<p>If there is a version issue with OFED it will be detected at configure  
<br>
time. If you manage to compile and install Open MPI there should be no  
<br>
issues with OFED.
<br>
<p>What I can tell is that &quot;--mca btl openib,self&quot; will not allow any  
<br>
other network (with the exception of Infiniband) to be used for  
<br>
communications between MPI processes. However, our runtime is still  
<br>
allowed to use TCP, and this is what you see on your netstat. These  
<br>
are not performance critical communications (i.e. only startup the  
<br>
job, distribute the contact informations and so on).
<br>
<p>Have you run the IB tests to validate the IB network?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 12, 2009, at 03:38 , Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; Any hint for the previous mail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does Open MPI-1.3.3 support only a limited versions of OFED?
</span><br>
<span class="quotelev1">&gt; Or any version is ok?
</span><br>
<span class="quotelev1">&gt; On Sun, Oct 11, 2009 at 3:55 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A fortran application is installed with Intel Fortran 10.1, MKL-10  
</span><br>
<span class="quotelev1">&gt; and Openmpi-1.3.3 on a Rocks-5.1 HPC Linux cluster. The jobs are not  
</span><br>
<span class="quotelev1">&gt; scaling when more than one node is used. The cluster has Intel Quad  
</span><br>
<span class="quotelev1">&gt; core Xeon (E5472) @ 3.00GHz Dual processor (total 8 cores per node,  
</span><br>
<span class="quotelev1">&gt; 16GB RAM) and Infiniband interconnectivity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are some of the timings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 12 cores (Node 1: 8 cores, Node2: 4 cores)  --  No progress in the job
</span><br>
<span class="quotelev1">&gt;  8 cores (Node 1: 8 cores)
</span><br>
<span class="quotelev1">&gt;    -- 21 hours (38 CG move steps)
</span><br>
<span class="quotelev1">&gt;  4 cores (Node 1: 4 cores)                           -- 25 hours
</span><br>
<span class="quotelev1">&gt; 12 cores (Node 1, Node 2, Node 3: 4cores each) -- No progress
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Later to check, whether Open MPI is using IB or not, I used --mca  
</span><br>
<span class="quotelev1">&gt; btl openib. But the job failed with following error message:
</span><br>
<span class="quotelev1">&gt; # cat /home1/g03/apps_test/amber/test16/err.352.job16
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[23671,1],12]) is on host: compute-0-12.local
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[23671,1],12]) is on host: compute-0-12.local
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-12.local:5496] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:6916] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:6914] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:6915] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:6913] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 12 with PID 5496 on
</span><br>
<span class="quotelev1">&gt; node compute-0-12.local exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:06910] 15 more processes have sent help message  
</span><br>
<span class="quotelev1">&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:06910] Set MCA parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [compute-0-5.local:06910] 15 more processes have sent help message  
</span><br>
<span class="quotelev1">&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[23958,1],2]) is on host: compute-0-5.local
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[23958,1],2]) is on host: compute-0-5.local
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then added 'self' to --mca btl openib,. With this it started  
</span><br>
<span class="quotelev1">&gt; running, but I can make sure its not using IB as I observed it from  
</span><br>
<span class="quotelev1">&gt; the netstat -i command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1st Snap:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every 2.0s: netstat - 
</span><br>
<span class="quotelev1">&gt; i 
</span><br>
<span class="quotelev1">&gt;                                                                                                                Sun 
</span><br>
<span class="quotelev1">&gt;  Oct 11 15:29:29 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kernel Interface table
</span><br>
<span class="quotelev1">&gt; Iface       MTU Met    RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX- 
</span><br>
<span class="quotelev1">&gt; DRP TX-OVR Flg
</span><br>
<span class="quotelev1">&gt; eth0       1500   0  1847619      0     0    0  2073010    0       
</span><br>
<span class="quotelev1">&gt; 0      0 BMRU
</span><br>
<span class="quotelev1">&gt; ib0      65520   0     708      0     0    0      509    0       
</span><br>
<span class="quotelev1">&gt; 5      0 BMRU
</span><br>
<span class="quotelev1">&gt; lo        16436   0     5731      0     0    0     5731    0       
</span><br>
<span class="quotelev1">&gt; 0      0 LRU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2nd Snap:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every 2.0s: netstat - 
</span><br>
<span class="quotelev1">&gt; i 
</span><br>
<span class="quotelev1">&gt;                                                                                                                Sun 
</span><br>
<span class="quotelev1">&gt;  Oct 11 15:29:57 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kernel Interface table
</span><br>
<span class="quotelev1">&gt; Iface       MTU Met    RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX- 
</span><br>
<span class="quotelev1">&gt; DRP TX-OVR Flg
</span><br>
<span class="quotelev1">&gt; eth0       1500   0  1847647      0     0    0  2073073    0       
</span><br>
<span class="quotelev1">&gt; 0      0 BMRU
</span><br>
<span class="quotelev1">&gt; ib0      65520   0     708      0     0    0      509    0       
</span><br>
<span class="quotelev1">&gt; 5      0 BMRU
</span><br>
<span class="quotelev1">&gt; lo        16436   0     5731      0     0    0     5731    0       
</span><br>
<span class="quotelev1">&gt; 0      0 LRU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why OpenMPI is not able to use IB?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ldd to the executable shows, no IB libraries are linked. Is this  
</span><br>
<span class="quotelev1">&gt; the reason:
</span><br>
<span class="quotelev1">&gt; ldd /opt/apps/siesta/siesta_mpi
</span><br>
<span class="quotelev1">&gt;     /opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_intel_lp64.so  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaaaaad000)
</span><br>
<span class="quotelev1">&gt;     /opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_intel_thread.so  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaaadc2000)
</span><br>
<span class="quotelev1">&gt;     /opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_core.so  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaab2ad000)
</span><br>
<span class="quotelev1">&gt;     libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000034a6200000)
</span><br>
<span class="quotelev1">&gt;     libmpi_f90.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so.0 (0x00002aaaab4a0000)
</span><br>
<span class="quotelev1">&gt;     libmpi_f77.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0 (0x00002aaaab6a3000)
</span><br>
<span class="quotelev1">&gt;     libmpi.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaab8db000)
</span><br>
<span class="quotelev1">&gt;     libopen-rte.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so.0 (0x00002aaaabbaa000)
</span><br>
<span class="quotelev1">&gt;     libopen-pal.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0 (0x00002aaaabe07000)
</span><br>
<span class="quotelev1">&gt;     libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000034a5e00000)
</span><br>
<span class="quotelev1">&gt;     libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000034a8200000)
</span><br>
<span class="quotelev1">&gt;     libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000034a6600000)
</span><br>
<span class="quotelev1">&gt;     libifport.so.5 =&gt; /opt/intel/fce/10.1.008/lib/libifport.so.5  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaac09a000)
</span><br>
<span class="quotelev1">&gt;     libifcoremt.so.5 =&gt; /opt/intel/fce/10.1.008/lib/libifcoremt.so.5  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaac1d0000)
</span><br>
<span class="quotelev1">&gt;     libimf.so =&gt; /opt/intel/cce/10.1.018/lib/libimf.so  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaac401000)
</span><br>
<span class="quotelev1">&gt;     libsvml.so =&gt; /opt/intel/cce/10.1.018/lib/libsvml.so  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaac766000)
</span><br>
<span class="quotelev1">&gt;     libm.so.6 =&gt; /lib64/libm.so.6 (0x00000034a6e00000)
</span><br>
<span class="quotelev1">&gt;     libguide.so =&gt; /opt/intel/mkl/10.0.5.025/lib/em64t/libguide.so  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaac8f1000)
</span><br>
<span class="quotelev1">&gt;     libintlc.so.5 =&gt; /opt/intel/cce/10.1.018/lib/libintlc.so.5  
</span><br>
<span class="quotelev1">&gt; (0x00002aaaaca65000)
</span><br>
<span class="quotelev1">&gt;     libc.so.6 =&gt; /lib64/libc.so.6 (0x00000034a5a00000)
</span><br>
<span class="quotelev1">&gt;     libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00000034a7e00000)
</span><br>
<span class="quotelev1">&gt;     /lib64/ld-linux-x86-64.so.2 (0x00000034a5600000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the help of Open MPI FAQ:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # /opt/mpi/openmpi/1.3.3/intel/bin/ompi_info --param btl openib
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;,  
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the btl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Output some verbose OpenIB BTL information  
</span><br>
<span class="quotelev1">&gt; (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_warn_no_device_params_found&quot; (current value: &quot;1&quot;, data  
</span><br>
<span class="quotelev1">&gt; source: default value, synonyms:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev1">&gt;                           Warn when no device-specific parameters  
</span><br>
<span class="quotelev1">&gt; are found in the INI file specified by the  
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA parameter (0 =
</span><br>
<span class="quotelev1">&gt;                           do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;1&quot;, data  
</span><br>
<span class="quotelev1">&gt; source: default value, deprecated, synonym of:
</span><br>
<span class="quotelev1">&gt;                           btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev1">&gt;                           Warn when no device-specific parameters  
</span><br>
<span class="quotelev1">&gt; are found in the INI file specified by the  
</span><br>
<span class="quotelev1">&gt; btl_openib_device_param_files MCA parameter (0 =
</span><br>
<span class="quotelev1">&gt;                           do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;1&quot;, data  
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;                           Warn when there is more than one active  
</span><br>
<span class="quotelev1">&gt; ports and at least one of them connected to the network with only  
</span><br>
<span class="quotelev1">&gt; default GID prefix
</span><br>
<span class="quotelev1">&gt;                           configured (0 = do not warn; any other  
</span><br>
<span class="quotelev1">&gt; value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_warn_nonexistent_if&quot; (current value: &quot;1&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                           Warn if non-existent devices and/or ports  
</span><br>
<span class="quotelev1">&gt; are specified in the btl_openib_if_[in|ex]clude MCA parameters (0 =  
</span><br>
<span class="quotelev1">&gt; do not warn; any
</span><br>
<span class="quotelev1">&gt;                           other value = warn)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During Open MPI install I've used --with-openib=/usr. So I believe  
</span><br>
<span class="quotelev1">&gt; its compiled with IB support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The IB utilities such as ibv_rc_pingpong are working fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not getting why its OMPI is not using IB? Please help me to  
</span><br>
<span class="quotelev1">&gt; resolve this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li><strong>Next message:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10916.php">Abhinav Vishnu: "[OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Reply:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
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
