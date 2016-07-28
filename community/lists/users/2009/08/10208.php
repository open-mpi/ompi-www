<?
$subject_val = "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 09:56:58 2009" -->
<!-- isoreceived="20090805135658" -->
<!-- sent="Wed, 05 Aug 2009 09:55:42 -0400" -->
<!-- isosent="20090805135542" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI" -->
<!-- id="4A798F5E.3000002_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.12679.1249478600.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 09:55:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10207.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="10202.php">Torgny Faxen: "[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've found on certain applications binding to processors can have up to 
<br>
a 2x difference.  ScaliMPI automatically binds processes by socket so if 
<br>
you are not running a one process per cpu job each process will land on 
<br>
a different socket. 
<br>
<p>OMPI defaults to not binding at all.  You may want to try and use the 
<br>
rankfile option (see manpage) and see if that helps any.
<br>
<p>If the above doesn't improve anything the next question is do you know 
<br>
what the sizes of the messages are?  For very small messages I believe 
<br>
Scali shows a 2x better performance than Intel and OMPI (I think this is 
<br>
due to a fastpath optimization).
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 05 Aug 2009 15:15:52 +0200
</span><br>
<span class="quotelev1">&gt; From: Torgny Faxen &lt;faxen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Performance difference on OpenMPI, IntelMPI
</span><br>
<span class="quotelev1">&gt; 	and ScaliMPI
</span><br>
<span class="quotelev1">&gt; To: pasha_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4A798608.5030607_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha,
</span><br>
<span class="quotelev1">&gt; no collectives are being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A simple grep in the code reveals the following MPI functions being used:
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; MPI_wtime
</span><br>
<span class="quotelev1">&gt; MPI_COMM_RANK
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SIZE
</span><br>
<span class="quotelev1">&gt; MPI_BUFFER_ATTACH
</span><br>
<span class="quotelev1">&gt; MPI_BSEND
</span><br>
<span class="quotelev1">&gt; MPI_PACK
</span><br>
<span class="quotelev1">&gt; MPI_UNPACK
</span><br>
<span class="quotelev1">&gt; MPI_PROBE
</span><br>
<span class="quotelev1">&gt; MPI_GET_COUNT
</span><br>
<span class="quotelev1">&gt; MPI_RECV
</span><br>
<span class="quotelev1">&gt; MPI_IPROBE
</span><br>
<span class="quotelev1">&gt; MPI_FINALIZE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where MPI_IPROBE is the clear winner in terms of number of calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Torgny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Do you know if the application use some collective operations ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Torgny Faxen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; we are seeing a large difference in performance for some applications 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; depending on what MPI is being used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Attached are performance numbers and oprofile output (first 30 lines) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; from one out of 14 nodes from one application run using OpenMPI, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; IntelMPI and Scali MPI respectively.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Scali MPI is faster the other two MPI:s with a factor of 1.6 and 1.75:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ScaliMPI: walltime for the whole application is 214 seconds
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; OpenMPI: walltime for the whole application is 376 seconds
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Intel MPI: walltime for the whole application is 346 seconds.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; The application is running with the main send receive commands being:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPI_Bsend
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPI_Iprobe followed by MPI_Recv (in case of there being a message). 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Quite often MPI_Iprobe is being called just to check whether there is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; a certain message pending.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Any idea on tuning tips, performance analysis, code modifications to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; improve the OpenMPI performance? A lot of time is being spent in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; &quot;mca_btl_sm_component_progress&quot;, &quot;btl_openib_component_progress&quot; and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; other internal routines.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; The code is running on a cluster with 140 HP ProLiant DL160 G5 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; compute servers. Infiniband interconnect. Intel Xeon E5462 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; processors. The profiled application is using 144 cores on 18 nodes 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; over Infiniband.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Regards / Torgny
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; =====================================================================================================================0 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; OpenMPI  1.3b2
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; =====================================================================================================================0 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Walltime: 376 seconds
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; CPU: CPU with timer interrupt, speed 0 MHz (estimated)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Profiling through timer interrupt
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; samples  %        image name               app name                 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; symbol name
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 668288   22.2113  mca_btl_sm.so            rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mca_btl_sm_component_progress
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 441828   14.6846  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; step_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 335929   11.1650  libmlx4-rdmav2.so        rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (no symbols)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 301446   10.0189  mca_btl_openib.so        rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; btl_openib_component_progress
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 161033    5.3521  libopen-pal.so.0.0.0     rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; opal_progress
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 157024    5.2189  libpthread-2.5.so        rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; pthread_spin_lock
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 99526     3.3079  no-vmlinux               no-vmlinux               
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (no symbols)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 93887     3.1204  mca_btl_sm.so            rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; opal_using_threads
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 69979     2.3258  mca_pml_ob1.so           rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mca_pml_ob1_iprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 58895     1.9574  mca_bml_r2.so            rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mca_bml_r2_progress
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 55095     1.8311  mca_pml_ob1.so           rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mca_pml_ob1_recv_request_match_wild
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 49286     1.6381  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; tracer_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 41946     1.3941  libintlc.so.5            rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; __intel_new_memcpy
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 40730     1.3537  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scobi_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 36586     1.2160  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; state_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 20986     0.6975  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; diag_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 19321     0.6422  libmpi.so.0.0.0          rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; PMPI_Unpack
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 18552     0.6166  libmpi.so.0.0.0          rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; PMPI_Iprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 17323     0.5757  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; clinic_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 16194     0.5382  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; k_epsi_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 15330     0.5095  libmpi.so.0.0.0          rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; PMPI_Comm_f2c
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 13778     0.4579  libmpi_f77.so.0.0.0      rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mpi_iprobe_f
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 13241     0.4401  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; s_recv_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 12386     0.4117  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; growth_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 11699     0.3888  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; testnrecv_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 11268     0.3745  libmpi.so.0.0.0          rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mca_pml_base_recv_request_construct
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 10971     0.3646  libmpi.so.0.0.0          rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ompi_convertor_unpack
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 10034     0.3335  mca_pml_ob1.so           rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mca_pml_ob1_recv_request_match_specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 10003     0.3325  libimf.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; exp.L
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 9375      0.3116  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; subbasin_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 8912      0.2962  libmpi_f77.so.0.0.0      rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; mpi_unpack_f
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; =====================================================================================================================0 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Intel MPI, version 3.2.0.011/
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; =====================================================================================================================0 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Walltime: 346 seconds
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; CPU: CPU with timer interrupt, speed 0 MHz (estimated)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Profiling through timer interrupt
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; samples  %        image name               app name                 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; symbol name
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 486712   17.7537  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; step_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 431941   15.7558  no-vmlinux               no-vmlinux               
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (no symbols)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 212425    7.7486  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPIDI_CH3U_Recvq_FU
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 188975    6.8932  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPIDI_CH3I_RDSSM_Progress
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 172855    6.3052  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPIDI_CH3I_read_progress
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 121472    4.4309  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPIDI_CH3I_SHM_read_progress
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 64492     2.3525  libc-2.5.so              rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; sched_yield
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 52372     1.9104  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; tracer_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 48621     1.7735  libmpi.so.3.2            rco2                     .plt
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 45475     1.6588  libmpiif.so.3.2          rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; pmpi_iprobe__
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 44082     1.6080  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPID_Iprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 42788     1.5608  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPIDI_CH3_Stop_recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 42754     1.5595  libpthread-2.5.so        rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; pthread_mutex_lock
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 42190     1.5390  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; PMPI_Iprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 41577     1.5166  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scobi_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 40356     1.4721  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPIDI_CH3_Start_recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 38582     1.4073  libdaplcma.so.1.0.2      rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (no symbols)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 37545     1.3695  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; state_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 35597     1.2985  libc-2.5.so              rco2                     free
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 34019     1.2409  libc-2.5.so              rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; malloc
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 31841     1.1615  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; s_recv_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 30955     1.1291  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; __I_MPI___intel_new_memcpy
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 27876     1.0168  libc-2.5.so              rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _int_malloc
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 26963     0.9835  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; testnrecv_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 23005     0.8391  libpthread-2.5.so        rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; __pthread_mutex_unlock_usercnt
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 22290     0.8131  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPID_Segment_manipulate
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 22086     0.8056  libmpi.so.3.2            rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPIDI_CH3I_read_progress_expected
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 19146     0.6984  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; diag_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 18250     0.6657  rco2                     rco2                     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; clinic_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; =====================================================================================================================0 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Scali MPI, version 3.13.10-59413
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; =====================================================================================================================0 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Walltime:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; CPU: CPU with timer interrupt, speed 0 MHz (estimated)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Profiling through timer interrupt
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; samples  %        image name               app name                 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; symbol name
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 484267   30.0664  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; step_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 111949    6.9505  libmlx4-rdmav2.so        rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (no symbols)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 73930     4.5900  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scafun_rq_handle_body
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 57846     3.5914  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; invert_decode_header
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 55836     3.4667  libpthread-2.5.so        rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; pthread_spin_lock
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 53703     3.3342  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; tracer_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 40934     2.5414  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scobi_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 40244     2.4986  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scafun_request_probe_handler
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 37399     2.3220  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; state_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 30455     1.8908  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; invert_matchandprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 29707     1.8444  no-vmlinux               no-vmlinux               
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (no symbols)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 29147     1.8096  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; FMPI_scafun_Iprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 27969     1.7365  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; decode_8_u_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 27475     1.7058  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scafun_rq_anysrc_fair_one
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 25966     1.6121  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scafun_uxq_probe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 24380     1.5137  libc-2.5.so              rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; memcpy
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 22615     1.4041  libmpi.so                rco2.24pe                .plt
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 21172     1.3145  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; diag_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 20716     1.2862  libc-2.5.so              rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; memset
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 18565     1.1526  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; openib_wrapper_poll_cq
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 18192     1.1295  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; clinic_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 17135     1.0638  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; PMPI_Iprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 16685     1.0359  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; k_epsi_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 16236     1.0080  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; PMPI_Unpack
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 15563     0.9662  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scafun_r_rq_append
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 14829     0.9207  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scafun_rq_test_finished
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 13349     0.8288  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; s_recv_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 12490     0.7755  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; flop_matchandprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 12427     0.7715  libibverbs.so.1.0.0      rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; (no symbols)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 12272     0.7619  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scafun_rq_handle
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 12146     0.7541  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; growth_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 10175     0.6317  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; wrp2p_test_finished
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 9888      0.6139  libimf.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; exp.L
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 9179      0.5699  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; subbasin_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 9082      0.5639  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; testnrecv_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 8901      0.5526  libmpi.so                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; openib_wrapper_purge_requests
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 7425      0.4610  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scobimain_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 7378      0.4581  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; scobi_interface_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 6530      0.4054  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; setvbc_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 6471      0.4018  libfmpi.so               rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; pmpi_iprobe
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 6341      0.3937  rco2.24pe                rco2.24pe                
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; snap_
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- --------------------------------------------------------- Torgny 
</span><br>
<span class="quotelev1">&gt; Fax?n National Supercomputer Center Link?ping University S-581 83 
</span><br>
<span class="quotelev1">&gt; Link?ping Sweden
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10207.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="10202.php">Torgny Faxen: "[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10209.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
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
