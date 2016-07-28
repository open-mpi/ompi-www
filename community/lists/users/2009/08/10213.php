<?
$subject_val = "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 11:32:05 2009" -->
<!-- isoreceived="20090805153205" -->
<!-- sent="Wed, 05 Aug 2009 17:32:00 +0200" -->
<!-- isosent="20090805153200" -->
<!-- name="Torgny Faxen" -->
<!-- email="faxen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI" -->
<!-- id="4A79A5F0.40409_at_nsc.liu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0908050721k6dcd8982h78367cd72600a7b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI<br>
<strong>From:</strong> Torgny Faxen (<em>faxen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 11:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10214.php">Eli Morris: "[OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="10212.php">Ralph Castain: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="10212.php">Ralph Castain: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
I can't get &quot;opal_paffinity_alone&quot; to work (see below). However, there 
<br>
is a &quot;mpi_affinity_alone&quot; that I tried without any improvement.
<br>
<p>However, setting:
<br>
&nbsp;-mca btl_openib_eager_limit 65536
<br>
gave a 15% improvement so OpenMPI is now down to 326 (from previous 376 
<br>
seconds). Still a lot more than ScaliMPI with 214 seconds.
<br>
<p>Looking at the profile data my gut feeling is that the performance 
<br>
suffers due to the frequent calls to MPI_IPROBE. I will look at this and 
<br>
count the number of calls but it could easily be 10 times more calls to 
<br>
MPI_IPROBE thanto  MPI_BSEND.
<br>
<p>/Torgny
<br>
<p>n70 462% ompi_info --param all all | grep opal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA opal: parameter &quot;opal_signal&quot; (current value: 
<br>
&quot;6,7,8,11&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA opal: parameter &quot;opal_set_max_sys_limits&quot; (current 
<br>
value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA opal: parameter &quot;opal_event_include&quot; (current value: 
<br>
&quot;poll&quot;, data source: default value)
<br>
n70 463% ompi_info --param all all | grep paffinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
<br>
value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current 
<br>
value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level of the paffinity framework
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;, 
<br>
data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for the 
<br>
paffinity framework (&lt;none&gt; means use all components that can be found)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current 
<br>
value: &quot;10&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Priority of the linux paffinity component
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: information &quot;paffinity_linux_plpa_version&quot; 
<br>
(value: &quot;1.2rc2&quot;, data source: default value)
<br>
<p><p><p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Okay, one problem is fairly clear. As Terry indicated, you have to 
</span><br>
<span class="quotelev1">&gt; tell us to bind or else you lose a lot of performace. Set -mca 
</span><br>
<span class="quotelev1">&gt; opal_paffinity_alone 1 on your cmd line and it should make a 
</span><br>
<span class="quotelev1">&gt; significant difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 5, 2009 at 8:10 AM, Torgny Faxen &lt;faxen_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:faxen_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph,
</span><br>
<span class="quotelev1">&gt;     I am running through a locally provided wrapper but  it translates to:
</span><br>
<span class="quotelev1">&gt;     /software/mpi/openmpi/1.3b2/i101017/bin/mpirun -np 144 -npernode 8
</span><br>
<span class="quotelev1">&gt;     -mca mpi_show_mca_params env,file /nobac
</span><br>
<span class="quotelev1">&gt;     kup/rossby11/faxen/RCO_scobi/src_161.openmpi/rco2.24pe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     a) Upgrade.. This will take some time, it will have to go through
</span><br>
<span class="quotelev1">&gt;     the administrator, this is a production cluster
</span><br>
<span class="quotelev1">&gt;     b) -mca .. see output below
</span><br>
<span class="quotelev1">&gt;     c) I used exactly the same optimization flags for all three
</span><br>
<span class="quotelev1">&gt;     versions (ScaliMPI, OpenMPI and IntelMPI) and this is Fortran so I
</span><br>
<span class="quotelev1">&gt;     am using mpif90 :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards / Torgny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [n70:30299] ess=env (environment)
</span><br>
<span class="quotelev1">&gt;     [n70:30299] orte_ess_jobid=482607105 (environment)
</span><br>
<span class="quotelev1">&gt;     [n70:30299] orte_ess_vpid=0 (environment)
</span><br>
<span class="quotelev1">&gt;     [n70:30299] mpi_yield_when_idle=0 (environment)
</span><br>
<span class="quotelev1">&gt;     [n70:30299] mpi_show_mca_params=env,file (environment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Could you send us the mpirun cmd line? I wonder if you are
</span><br>
<span class="quotelev1">&gt;         missing some options that could help. Also, you might:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         (a) upgrade to 1.3.3 - it looks like you are using some kind
</span><br>
<span class="quotelev1">&gt;         of pre-release version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         (b) add -mca mpi_show_mca_params env,file - this will cause
</span><br>
<span class="quotelev1">&gt;         rank=0 to output what mca params it sees, and where they came from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         (c) check that you built a non-debug version, and remembered
</span><br>
<span class="quotelev1">&gt;         to compile your application with a -O3 flag - i.e., &quot;mpicc -O3
</span><br>
<span class="quotelev1">&gt;         ...&quot;. Remember, OMPI does not automatically add optimization
</span><br>
<span class="quotelev1">&gt;         flags to mpicc!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks
</span><br>
<span class="quotelev1">&gt;         Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Wed, Aug 5, 2009 at 7:15 AM, Torgny Faxen &lt;faxen_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:faxen_at_[hidden]&gt; &lt;mailto:faxen_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:faxen_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Pasha,
</span><br>
<span class="quotelev1">&gt;            no collectives are being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            A simple grep in the code reveals the following MPI functions
</span><br>
<span class="quotelev1">&gt;            being used:
</span><br>
<span class="quotelev1">&gt;            MPI_Init
</span><br>
<span class="quotelev1">&gt;            MPI_wtime
</span><br>
<span class="quotelev1">&gt;            MPI_COMM_RANK
</span><br>
<span class="quotelev1">&gt;            MPI_COMM_SIZE
</span><br>
<span class="quotelev1">&gt;            MPI_BUFFER_ATTACH
</span><br>
<span class="quotelev1">&gt;            MPI_BSEND
</span><br>
<span class="quotelev1">&gt;            MPI_PACK
</span><br>
<span class="quotelev1">&gt;            MPI_UNPACK
</span><br>
<span class="quotelev1">&gt;            MPI_PROBE
</span><br>
<span class="quotelev1">&gt;            MPI_GET_COUNT
</span><br>
<span class="quotelev1">&gt;            MPI_RECV
</span><br>
<span class="quotelev1">&gt;            MPI_IPROBE
</span><br>
<span class="quotelev1">&gt;            MPI_FINALIZE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            where MPI_IPROBE is the clear winner in terms of number of
</span><br>
<span class="quotelev1">&gt;         calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            /Torgny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Do you know if the application use some collective
</span><br>
<span class="quotelev1">&gt;         operations ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Torgny Faxen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Hello,
</span><br>
<span class="quotelev1">&gt;                    we are seeing a large difference in performance for
</span><br>
<span class="quotelev1">&gt;         some
</span><br>
<span class="quotelev1">&gt;                    applications depending on what MPI is being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Attached are performance numbers and oprofile output
</span><br>
<span class="quotelev1">&gt;                    (first 30 lines) from one out of 14 nodes from one
</span><br>
<span class="quotelev1">&gt;                    application run using OpenMPI, IntelMPI and Scali MPI
</span><br>
<span class="quotelev1">&gt;                    respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Scali MPI is faster the other two MPI:s with a
</span><br>
<span class="quotelev1">&gt;         factor of
</span><br>
<span class="quotelev1">&gt;                    1.6 and 1.75:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    ScaliMPI: walltime for the whole application is 214
</span><br>
<span class="quotelev1">&gt;         seconds
</span><br>
<span class="quotelev1">&gt;                    OpenMPI: walltime for the whole application is 376
</span><br>
<span class="quotelev1">&gt;         seconds
</span><br>
<span class="quotelev1">&gt;                    Intel MPI: walltime for the whole application is
</span><br>
<span class="quotelev1">&gt;         346 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    The application is running with the main send receive
</span><br>
<span class="quotelev1">&gt;                    commands being:
</span><br>
<span class="quotelev1">&gt;                    MPI_Bsend
</span><br>
<span class="quotelev1">&gt;                    MPI_Iprobe followed by MPI_Recv (in case of there
</span><br>
<span class="quotelev1">&gt;         being a
</span><br>
<span class="quotelev1">&gt;                    message). Quite often MPI_Iprobe is being called
</span><br>
<span class="quotelev1">&gt;         just to
</span><br>
<span class="quotelev1">&gt;                    check whether there is a certain message pending.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Any idea on tuning tips, performance analysis, code
</span><br>
<span class="quotelev1">&gt;                    modifications to improve the OpenMPI performance? A
</span><br>
<span class="quotelev1">&gt;         lot of
</span><br>
<span class="quotelev1">&gt;                    time is being spent in &quot;mca_btl_sm_component_progress&quot;,
</span><br>
<span class="quotelev1">&gt;                    &quot;btl_openib_component_progress&quot; and other internal
</span><br>
<span class="quotelev1">&gt;         routines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    The code is running on a cluster with 140 HP ProLiant
</span><br>
<span class="quotelev1">&gt;                    DL160 G5 compute servers. Infiniband interconnect.
</span><br>
<span class="quotelev1">&gt;         Intel
</span><br>
<span class="quotelev1">&gt;                    Xeon E5462 processors. The profiled application is
</span><br>
<span class="quotelev1">&gt;         using
</span><br>
<span class="quotelev1">&gt;                    144 cores on 18 nodes over Infiniband.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Regards / Torgny
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;          =====================================================================================================================0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    OpenMPI  1.3b2
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;          =====================================================================================================================0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Walltime: 376 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    CPU: CPU with timer interrupt, speed 0 MHz (estimated)
</span><br>
<span class="quotelev1">&gt;                    Profiling through timer interrupt
</span><br>
<span class="quotelev1">&gt;                    samples  %        image name               app name
</span><br>
<span class="quotelev1">&gt;                                    symbol name
</span><br>
<span class="quotelev1">&gt;                    668288   22.2113  mca_btl_sm.so          
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           mca_btl_sm_component_progress
</span><br>
<span class="quotelev1">&gt;                    441828   14.6846  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           step_
</span><br>
<span class="quotelev1">&gt;                    335929   11.1650  libmlx4-rdmav2.so      
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           (no symbols)
</span><br>
<span class="quotelev1">&gt;                    301446   10.0189  mca_btl_openib.so      
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           btl_openib_component_progress
</span><br>
<span class="quotelev1">&gt;                    161033    5.3521  libopen-pal.so.0.0.0    
</span><br>
<span class="quotelev1">&gt;         rco2.24pe                           opal_progress
</span><br>
<span class="quotelev1">&gt;                    157024    5.2189  libpthread-2.5.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;                    &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;        rco2.24pe        
</span><br>
<span class="quotelev1">&gt;                           pthread_spin_lock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    99526     3.3079  no-vmlinux              
</span><br>
<span class="quotelev1">&gt;         no-vmlinux                          (no symbols)
</span><br>
<span class="quotelev1">&gt;                    93887     3.1204  mca_btl_sm.so          
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           opal_using_threads
</span><br>
<span class="quotelev1">&gt;                    69979     2.3258  mca_pml_ob1.so          
</span><br>
<span class="quotelev1">&gt;         rco2.24pe                           mca_pml_ob1_iprobe
</span><br>
<span class="quotelev1">&gt;                    58895     1.9574  mca_bml_r2.so          
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           mca_bml_r2_progress
</span><br>
<span class="quotelev1">&gt;                    55095     1.8311  mca_pml_ob1.so          
</span><br>
<span class="quotelev1">&gt;         rco2.24pe                          
</span><br>
<span class="quotelev1">&gt;         mca_pml_ob1_recv_request_match_wild
</span><br>
<span class="quotelev1">&gt;                    49286     1.6381  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           tracer_
</span><br>
<span class="quotelev1">&gt;                    41946     1.3941  libintlc.so.5          
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           __intel_new_memcpy
</span><br>
<span class="quotelev1">&gt;                    40730     1.3537  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scobi_
</span><br>
<span class="quotelev1">&gt;                    36586     1.2160  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           state_
</span><br>
<span class="quotelev1">&gt;                    20986     0.6975  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           diag_
</span><br>
<span class="quotelev1">&gt;                    19321     0.6422  libmpi.so.0.0.0        
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           PMPI_Unpack
</span><br>
<span class="quotelev1">&gt;                    18552     0.6166  libmpi.so.0.0.0        
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           PMPI_Iprobe
</span><br>
<span class="quotelev1">&gt;                    17323     0.5757  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           clinic_
</span><br>
<span class="quotelev1">&gt;                    16194     0.5382  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           k_epsi_
</span><br>
<span class="quotelev1">&gt;                    15330     0.5095  libmpi.so.0.0.0        
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           PMPI_Comm_f2c
</span><br>
<span class="quotelev1">&gt;                    13778     0.4579  libmpi_f77.so.0.0.0    
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           mpi_iprobe_f
</span><br>
<span class="quotelev1">&gt;                    13241     0.4401  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           s_recv_
</span><br>
<span class="quotelev1">&gt;                    12386     0.4117  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           growth_
</span><br>
<span class="quotelev1">&gt;                    11699     0.3888  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           testnrecv_
</span><br>
<span class="quotelev1">&gt;                    11268     0.3745  libmpi.so.0.0.0        
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                          
</span><br>
<span class="quotelev1">&gt;         mca_pml_base_recv_request_construct
</span><br>
<span class="quotelev1">&gt;                    10971     0.3646  libmpi.so.0.0.0        
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           ompi_convertor_unpack
</span><br>
<span class="quotelev1">&gt;                    10034     0.3335  mca_pml_ob1.so          
</span><br>
<span class="quotelev1">&gt;         rco2.24pe                          
</span><br>
<span class="quotelev1">&gt;         mca_pml_ob1_recv_request_match_specific
</span><br>
<span class="quotelev1">&gt;                    10003     0.3325  libimf.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           exp.L
</span><br>
<span class="quotelev1">&gt;                    9375      0.3116  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           subbasin_
</span><br>
<span class="quotelev1">&gt;                    8912      0.2962  libmpi_f77.so.0.0.0    
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           mpi_unpack_f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;          =====================================================================================================================0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Intel MPI, version 3.2.0.011/ &lt;<a href="http://3.2.0.011/">http://3.2.0.011/</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://3.2.0.011/">http://3.2.0.011/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;          =====================================================================================================================0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Walltime: 346 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    CPU: CPU with timer interrupt, speed 0 MHz (estimated)
</span><br>
<span class="quotelev1">&gt;                    Profiling through timer interrupt
</span><br>
<span class="quotelev1">&gt;                    samples  %        image name               app name
</span><br>
<span class="quotelev1">&gt;                                    symbol name
</span><br>
<span class="quotelev1">&gt;                    486712   17.7537  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    step_
</span><br>
<span class="quotelev1">&gt;                    431941   15.7558  no-vmlinux              
</span><br>
<span class="quotelev1">&gt;         no-vmlinux                          (no symbols)
</span><br>
<span class="quotelev1">&gt;                    212425    7.7486  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPIDI_CH3U_Recvq_FU
</span><br>
<span class="quotelev1">&gt;                    188975    6.8932  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPIDI_CH3I_RDSSM_Progress
</span><br>
<span class="quotelev1">&gt;                    172855    6.3052  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPIDI_CH3I_read_progress
</span><br>
<span class="quotelev1">&gt;                    121472    4.4309  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPIDI_CH3I_SHM_read_progress
</span><br>
<span class="quotelev1">&gt;                    64492     2.3525  libc-2.5.so &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;                         rco2            
</span><br>
<span class="quotelev1">&gt;                 sched_yield
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    52372     1.9104  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    tracer_
</span><br>
<span class="quotelev1">&gt;                    48621     1.7735  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    .plt
</span><br>
<span class="quotelev1">&gt;                    45475     1.6588  libmpiif.so.3.2          rco2    
</span><br>
<span class="quotelev1">&gt;                                    pmpi_iprobe__
</span><br>
<span class="quotelev1">&gt;                    44082     1.6080  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPID_Iprobe
</span><br>
<span class="quotelev1">&gt;                    42788     1.5608  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPIDI_CH3_Stop_recv
</span><br>
<span class="quotelev1">&gt;                    42754     1.5595  libpthread-2.5.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;                    &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;        rco2            
</span><br>
<span class="quotelev1">&gt;                            pthread_mutex_lock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    42190     1.5390  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    PMPI_Iprobe
</span><br>
<span class="quotelev1">&gt;                    41577     1.5166  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    scobi_
</span><br>
<span class="quotelev1">&gt;                    40356     1.4721  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPIDI_CH3_Start_recv
</span><br>
<span class="quotelev1">&gt;                    38582     1.4073  libdaplcma.so.1.0.2      rco2    
</span><br>
<span class="quotelev1">&gt;                                    (no symbols)
</span><br>
<span class="quotelev1">&gt;                    37545     1.3695  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    state_
</span><br>
<span class="quotelev1">&gt;                    35597     1.2985  libc-2.5.so &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;                         rco2            
</span><br>
<span class="quotelev1">&gt;                 free
</span><br>
<span class="quotelev1">&gt;                    34019     1.2409  libc-2.5.so &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;                         rco2            
</span><br>
<span class="quotelev1">&gt;                 malloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    31841     1.1615  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    s_recv_
</span><br>
<span class="quotelev1">&gt;                    30955     1.1291  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    __I_MPI___intel_new_memcpy
</span><br>
<span class="quotelev1">&gt;                    27876     1.0168  libc-2.5.so &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;                         rco2            
</span><br>
<span class="quotelev1">&gt;                 _int_malloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    26963     0.9835  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    testnrecv_
</span><br>
<span class="quotelev1">&gt;                    23005     0.8391  libpthread-2.5.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;                    &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;        rco2            
</span><br>
<span class="quotelev1">&gt;                            __pthread_mutex_unlock_usercnt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    22290     0.8131  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPID_Segment_manipulate
</span><br>
<span class="quotelev1">&gt;                    22086     0.8056  libmpi.so.3.2            rco2    
</span><br>
<span class="quotelev1">&gt;                                    MPIDI_CH3I_read_progress_expected
</span><br>
<span class="quotelev1">&gt;                    19146     0.6984  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    diag_
</span><br>
<span class="quotelev1">&gt;                    18250     0.6657  rco2                     rco2    
</span><br>
<span class="quotelev1">&gt;                                    clinic_
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;          =====================================================================================================================0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Scali MPI, version 3.13.10-59413
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;          =====================================================================================================================0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Walltime:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    CPU: CPU with timer interrupt, speed 0 MHz (estimated)
</span><br>
<span class="quotelev1">&gt;                    Profiling through timer interrupt
</span><br>
<span class="quotelev1">&gt;                    samples  %        image name               app name
</span><br>
<span class="quotelev1">&gt;                                    symbol name
</span><br>
<span class="quotelev1">&gt;                    484267   30.0664  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           step_
</span><br>
<span class="quotelev1">&gt;                    111949    6.9505  libmlx4-rdmav2.so      
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           (no symbols)
</span><br>
<span class="quotelev1">&gt;                    73930     4.5900  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scafun_rq_handle_body
</span><br>
<span class="quotelev1">&gt;                    57846     3.5914  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           invert_decode_header
</span><br>
<span class="quotelev1">&gt;                    55836     3.4667  libpthread-2.5.so
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;                    &lt;<a href="http://libpthread-2.5.so">http://libpthread-2.5.so</a>&gt;        rco2.24pe        
</span><br>
<span class="quotelev1">&gt;                           pthread_spin_lock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    53703     3.3342  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           tracer_
</span><br>
<span class="quotelev1">&gt;                    40934     2.5414  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scobi_
</span><br>
<span class="quotelev1">&gt;                    40244     2.4986  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scafun_request_probe_handler
</span><br>
<span class="quotelev1">&gt;                    37399     2.3220  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           state_
</span><br>
<span class="quotelev1">&gt;                    30455     1.8908  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           invert_matchandprobe
</span><br>
<span class="quotelev1">&gt;                    29707     1.8444  no-vmlinux              
</span><br>
<span class="quotelev1">&gt;         no-vmlinux                          (no symbols)
</span><br>
<span class="quotelev1">&gt;                    29147     1.8096  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           FMPI_scafun_Iprobe
</span><br>
<span class="quotelev1">&gt;                    27969     1.7365  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           decode_8_u_64
</span><br>
<span class="quotelev1">&gt;                    27475     1.7058  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scafun_rq_anysrc_fair_one
</span><br>
<span class="quotelev1">&gt;                    25966     1.6121  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scafun_uxq_probe
</span><br>
<span class="quotelev1">&gt;                    24380     1.5137  libc-2.5.so &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;                         rco2.24pe        
</span><br>
<span class="quotelev1">&gt;                memcpy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    22615     1.4041  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           .plt
</span><br>
<span class="quotelev1">&gt;                    21172     1.3145  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           diag_
</span><br>
<span class="quotelev1">&gt;                    20716     1.2862  libc-2.5.so &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://libc-2.5.so">http://libc-2.5.so</a>&gt;                         rco2.24pe        
</span><br>
<span class="quotelev1">&gt;                memset
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    18565     1.1526  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           openib_wrapper_poll_cq
</span><br>
<span class="quotelev1">&gt;                    18192     1.1295  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           clinic_
</span><br>
<span class="quotelev1">&gt;                    17135     1.0638  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           PMPI_Iprobe
</span><br>
<span class="quotelev1">&gt;                    16685     1.0359  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           k_epsi_
</span><br>
<span class="quotelev1">&gt;                    16236     1.0080  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           PMPI_Unpack
</span><br>
<span class="quotelev1">&gt;                    15563     0.9662  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scafun_r_rq_append
</span><br>
<span class="quotelev1">&gt;                    14829     0.9207  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scafun_rq_test_finished
</span><br>
<span class="quotelev1">&gt;                    13349     0.8288  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           s_recv_
</span><br>
<span class="quotelev1">&gt;                    12490     0.7755  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           flop_matchandprobe
</span><br>
<span class="quotelev1">&gt;                    12427     0.7715  libibverbs.so.1.0.0    
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           (no symbols)
</span><br>
<span class="quotelev1">&gt;                    12272     0.7619  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scafun_rq_handle
</span><br>
<span class="quotelev1">&gt;                    12146     0.7541  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           growth_
</span><br>
<span class="quotelev1">&gt;                    10175     0.6317  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           wrp2p_test_finished
</span><br>
<span class="quotelev1">&gt;                    9888      0.6139  libimf.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           exp.L
</span><br>
<span class="quotelev1">&gt;                    9179      0.5699  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           subbasin_
</span><br>
<span class="quotelev1">&gt;                    9082      0.5639  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           testnrecv_
</span><br>
<span class="quotelev1">&gt;                    8901      0.5526  libmpi.so              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           openib_wrapper_purge_requests
</span><br>
<span class="quotelev1">&gt;                    7425      0.4610  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scobimain_
</span><br>
<span class="quotelev1">&gt;                    7378      0.4581  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           scobi_interface_
</span><br>
<span class="quotelev1">&gt;                    6530      0.4054  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           setvbc_
</span><br>
<span class="quotelev1">&gt;                    6471      0.4018  libfmpi.so              
</span><br>
<span class="quotelev1">&gt;         rco2.24pe                           pmpi_iprobe
</span><br>
<span class="quotelev1">&gt;                    6341      0.3937  rco2.24pe              
</span><br>
<span class="quotelev1">&gt;          rco2.24pe                           snap_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                _______________________________________________
</span><br>
<span class="quotelev1">&gt;                users mailing list
</span><br>
<span class="quotelev1">&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            --    ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;             Torgny Fax&#233;n               National Supercomputer Center
</span><br>
<span class="quotelev1">&gt;             Link&#246;ping University       S-581 83 Link&#246;ping
</span><br>
<span class="quotelev1">&gt;             Sweden        
</span><br>
<span class="quotelev1">&gt;             Email:faxen_at_[hidden] &lt;mailto:Email%3Afaxen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:Email%3Afaxen_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:Email%253Afaxen_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Telephone: +46 13 285798 (office) +46 13 282535  (fax)
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>
</span><br>
<span class="quotelev1">&gt;            ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      Torgny Fax&#233;n          
</span><br>
<span class="quotelev1">&gt;      National Supercomputer Center
</span><br>
<span class="quotelev1">&gt;      Link&#246;ping University  
</span><br>
<span class="quotelev1">&gt;      S-581 83 Link&#246;ping
</span><br>
<span class="quotelev1">&gt;      Sweden        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Email:faxen_at_[hidden] &lt;mailto:Email%3Afaxen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      Telephone: +46 13 285798 (office) +46 13 282535  (fax)
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>
</span><br>
<span class="quotelev1">&gt;     ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
---------------------------------------------------------
   Torgny Fax&#233;n		
   National Supercomputer Center
   Link&#246;ping University	
   S-581 83 Link&#246;ping
   Sweden	
   Email:faxen_at_[hidden]
   Telephone: +46 13 285798 (office) +46 13 282535  (fax)
   <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>
---------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10214.php">Eli Morris: "[OMPI users] problem w sge 6.2 &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="10212.php">Ralph Castain: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>In reply to:</strong> <a href="10212.php">Ralph Castain: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10215.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and 	ScaliMPI"</a>
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
