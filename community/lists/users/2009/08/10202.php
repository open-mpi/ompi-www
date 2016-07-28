<?
$subject_val = "[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 08:42:47 2009" -->
<!-- isoreceived="20090805124247" -->
<!-- sent="Wed, 05 Aug 2009 14:42:40 +0200" -->
<!-- isosent="20090805124240" -->
<!-- name="Torgny Faxen" -->
<!-- email="faxen_at_[hidden]" -->
<!-- subject="[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI" -->
<!-- id="4A797E40.8060200_at_nsc.liu.se" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI<br>
<strong>From:</strong> Torgny Faxen (<em>faxen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-05 08:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10203.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10201.php">Jean-Christophe Ducom: "[OMPI users] Kerberos ticket forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10203.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10203.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe reply:</strong> <a href="10208.php">Terry Dontje: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe reply:</strong> <a href="10210.php">Terry Dontje: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
we are seeing a large difference in performance for some applications 
<br>
depending on what MPI is being used.
<br>
<p>Attached are performance numbers and oprofile output (first 30 lines) 
<br>
from one out of 14 nodes from one application run using OpenMPI, 
<br>
IntelMPI and Scali MPI respectively.
<br>
<p>Scali MPI is faster the other two MPI:s with a factor of 1.6 and 1.75:
<br>
<p>ScaliMPI: walltime for the whole application is 214 seconds
<br>
OpenMPI: walltime for the whole application is 376 seconds
<br>
Intel MPI: walltime for the whole application is 346 seconds.
<br>
<p>The application is running with the main send receive commands being:
<br>
MPI_Bsend
<br>
MPI_Iprobe followed by MPI_Recv (in case of there being a message). 
<br>
Quite often MPI_Iprobe is being called just to check whether there is a 
<br>
certain message pending.
<br>
<p>Any idea on tuning tips, performance analysis, code modifications to 
<br>
improve the OpenMPI performance? A lot of time is being spent in 
<br>
&quot;mca_btl_sm_component_progress&quot;, &quot;btl_openib_component_progress&quot; and 
<br>
other internal routines.
<br>
<p>The code is running on a cluster with 140 HP ProLiant DL160 G5 compute 
<br>
servers. Infiniband interconnect. Intel Xeon E5462 processors. The 
<br>
profiled application is using 144 cores on 18 nodes over Infiniband.
<br>
<p>Regards / Torgny
<br>
=====================================================================================================================0
<br>
OpenMPI  1.3b2
<br>
=====================================================================================================================0
<br>
<p>Walltime: 376 seconds
<br>
<p>CPU: CPU with timer interrupt, speed 0 MHz (estimated)
<br>
Profiling through timer interrupt
<br>
samples  %        image name               app name                 
<br>
symbol name
<br>
668288   22.2113  mca_btl_sm.so            rco2.24pe                
<br>
mca_btl_sm_component_progress
<br>
441828   14.6846  rco2.24pe                rco2.24pe                step_
<br>
335929   11.1650  libmlx4-rdmav2.so        rco2.24pe                (no 
<br>
symbols)
<br>
301446   10.0189  mca_btl_openib.so        rco2.24pe                
<br>
btl_openib_component_progress
<br>
161033    5.3521  libopen-pal.so.0.0.0     rco2.24pe                
<br>
opal_progress
<br>
157024    5.2189  libpthread-2.5.so        rco2.24pe                
<br>
pthread_spin_lock
<br>
99526     3.3079  no-vmlinux               no-vmlinux               (no 
<br>
symbols)
<br>
93887     3.1204  mca_btl_sm.so            rco2.24pe                
<br>
opal_using_threads
<br>
69979     2.3258  mca_pml_ob1.so           rco2.24pe                
<br>
mca_pml_ob1_iprobe
<br>
58895     1.9574  mca_bml_r2.so            rco2.24pe                
<br>
mca_bml_r2_progress
<br>
55095     1.8311  mca_pml_ob1.so           rco2.24pe                
<br>
mca_pml_ob1_recv_request_match_wild
<br>
49286     1.6381  rco2.24pe                rco2.24pe                tracer_
<br>
41946     1.3941  libintlc.so.5            rco2.24pe                
<br>
__intel_new_memcpy
<br>
40730     1.3537  rco2.24pe                rco2.24pe                scobi_
<br>
36586     1.2160  rco2.24pe                rco2.24pe                state_
<br>
20986     0.6975  rco2.24pe                rco2.24pe                diag_
<br>
19321     0.6422  libmpi.so.0.0.0          rco2.24pe                
<br>
PMPI_Unpack
<br>
18552     0.6166  libmpi.so.0.0.0          rco2.24pe                
<br>
PMPI_Iprobe
<br>
17323     0.5757  rco2.24pe                rco2.24pe                clinic_
<br>
16194     0.5382  rco2.24pe                rco2.24pe                k_epsi_
<br>
15330     0.5095  libmpi.so.0.0.0          rco2.24pe                
<br>
PMPI_Comm_f2c
<br>
13778     0.4579  libmpi_f77.so.0.0.0      rco2.24pe                
<br>
mpi_iprobe_f
<br>
13241     0.4401  rco2.24pe                rco2.24pe                s_recv_
<br>
12386     0.4117  rco2.24pe                rco2.24pe                growth_
<br>
11699     0.3888  rco2.24pe                rco2.24pe                
<br>
testnrecv_
<br>
11268     0.3745  libmpi.so.0.0.0          rco2.24pe                
<br>
mca_pml_base_recv_request_construct
<br>
10971     0.3646  libmpi.so.0.0.0          rco2.24pe                
<br>
ompi_convertor_unpack
<br>
10034     0.3335  mca_pml_ob1.so           rco2.24pe                
<br>
mca_pml_ob1_recv_request_match_specific
<br>
10003     0.3325  libimf.so                rco2.24pe                exp.L
<br>
9375      0.3116  rco2.24pe                rco2.24pe                
<br>
subbasin_
<br>
8912      0.2962  libmpi_f77.so.0.0.0      rco2.24pe                
<br>
mpi_unpack_f
<br>
<p><p><p>=====================================================================================================================0
<br>
Intel MPI, version 3.2.0.011/
<br>
=====================================================================================================================0
<br>
<p>Walltime: 346 seconds
<br>
<p>CPU: CPU with timer interrupt, speed 0 MHz (estimated)
<br>
Profiling through timer interrupt
<br>
samples  %        image name               app name                 
<br>
symbol name
<br>
486712   17.7537  rco2                     rco2                     step_
<br>
431941   15.7558  no-vmlinux               no-vmlinux               (no 
<br>
symbols)
<br>
212425    7.7486  libmpi.so.3.2            rco2                     
<br>
MPIDI_CH3U_Recvq_FU
<br>
188975    6.8932  libmpi.so.3.2            rco2                     
<br>
MPIDI_CH3I_RDSSM_Progress
<br>
172855    6.3052  libmpi.so.3.2            rco2                     
<br>
MPIDI_CH3I_read_progress
<br>
121472    4.4309  libmpi.so.3.2            rco2                     
<br>
MPIDI_CH3I_SHM_read_progress
<br>
64492     2.3525  libc-2.5.so              rco2                     
<br>
sched_yield
<br>
52372     1.9104  rco2                     rco2                     tracer_
<br>
48621     1.7735  libmpi.so.3.2            rco2                     .plt
<br>
45475     1.6588  libmpiif.so.3.2          rco2                     
<br>
pmpi_iprobe__
<br>
44082     1.6080  libmpi.so.3.2            rco2                     
<br>
MPID_Iprobe
<br>
42788     1.5608  libmpi.so.3.2            rco2                     
<br>
MPIDI_CH3_Stop_recv
<br>
42754     1.5595  libpthread-2.5.so        rco2                     
<br>
pthread_mutex_lock
<br>
42190     1.5390  libmpi.so.3.2            rco2                     
<br>
PMPI_Iprobe
<br>
41577     1.5166  rco2                     rco2                     scobi_
<br>
40356     1.4721  libmpi.so.3.2            rco2                     
<br>
MPIDI_CH3_Start_recv
<br>
38582     1.4073  libdaplcma.so.1.0.2      rco2                     (no 
<br>
symbols)
<br>
37545     1.3695  rco2                     rco2                     state_
<br>
35597     1.2985  libc-2.5.so              rco2                     free
<br>
34019     1.2409  libc-2.5.so              rco2                     malloc
<br>
31841     1.1615  rco2                     rco2                     s_recv_
<br>
30955     1.1291  libmpi.so.3.2            rco2                     
<br>
__I_MPI___intel_new_memcpy
<br>
27876     1.0168  libc-2.5.so              rco2                     
<br>
_int_malloc
<br>
26963     0.9835  rco2                     rco2                     
<br>
testnrecv_
<br>
23005     0.8391  libpthread-2.5.so        rco2                     
<br>
__pthread_mutex_unlock_usercnt
<br>
22290     0.8131  libmpi.so.3.2            rco2                     
<br>
MPID_Segment_manipulate
<br>
22086     0.8056  libmpi.so.3.2            rco2                     
<br>
MPIDI_CH3I_read_progress_expected
<br>
19146     0.6984  rco2                     rco2                     diag_
<br>
18250     0.6657  rco2                     rco2                     clinic_
<br>
=====================================================================================================================0
<br>
Scali MPI, version 3.13.10-59413
<br>
=====================================================================================================================0
<br>
<p>Walltime:
<br>
<p>CPU: CPU with timer interrupt, speed 0 MHz (estimated)
<br>
Profiling through timer interrupt
<br>
samples  %        image name               app name                 
<br>
symbol name
<br>
484267   30.0664  rco2.24pe                rco2.24pe                step_
<br>
111949    6.9505  libmlx4-rdmav2.so        rco2.24pe                (no 
<br>
symbols)
<br>
73930     4.5900  libmpi.so                rco2.24pe                
<br>
scafun_rq_handle_body
<br>
57846     3.5914  libmpi.so                rco2.24pe                
<br>
invert_decode_header
<br>
55836     3.4667  libpthread-2.5.so        rco2.24pe                
<br>
pthread_spin_lock
<br>
53703     3.3342  rco2.24pe                rco2.24pe                tracer_
<br>
40934     2.5414  rco2.24pe                rco2.24pe                scobi_
<br>
40244     2.4986  libmpi.so                rco2.24pe                
<br>
scafun_request_probe_handler
<br>
37399     2.3220  rco2.24pe                rco2.24pe                state_
<br>
30455     1.8908  libmpi.so                rco2.24pe                
<br>
invert_matchandprobe
<br>
29707     1.8444  no-vmlinux               no-vmlinux               (no 
<br>
symbols)
<br>
29147     1.8096  libmpi.so                rco2.24pe                
<br>
FMPI_scafun_Iprobe
<br>
27969     1.7365  libmpi.so                rco2.24pe                
<br>
decode_8_u_64
<br>
27475     1.7058  libmpi.so                rco2.24pe                
<br>
scafun_rq_anysrc_fair_one
<br>
25966     1.6121  libmpi.so                rco2.24pe                
<br>
scafun_uxq_probe
<br>
24380     1.5137  libc-2.5.so              rco2.24pe                memcpy
<br>
22615     1.4041  libmpi.so                rco2.24pe                .plt
<br>
21172     1.3145  rco2.24pe                rco2.24pe                diag_
<br>
20716     1.2862  libc-2.5.so              rco2.24pe                memset
<br>
18565     1.1526  libmpi.so                rco2.24pe                
<br>
openib_wrapper_poll_cq
<br>
18192     1.1295  rco2.24pe                rco2.24pe                clinic_
<br>
17135     1.0638  libmpi.so                rco2.24pe                
<br>
PMPI_Iprobe
<br>
16685     1.0359  rco2.24pe                rco2.24pe                k_epsi_
<br>
16236     1.0080  libmpi.so                rco2.24pe                
<br>
PMPI_Unpack
<br>
15563     0.9662  libmpi.so                rco2.24pe                
<br>
scafun_r_rq_append
<br>
14829     0.9207  libmpi.so                rco2.24pe                
<br>
scafun_rq_test_finished
<br>
13349     0.8288  rco2.24pe                rco2.24pe                s_recv_
<br>
12490     0.7755  libmpi.so                rco2.24pe                
<br>
flop_matchandprobe
<br>
12427     0.7715  libibverbs.so.1.0.0      rco2.24pe                (no 
<br>
symbols)
<br>
12272     0.7619  libmpi.so                rco2.24pe                
<br>
scafun_rq_handle
<br>
12146     0.7541  rco2.24pe                rco2.24pe                growth_
<br>
10175     0.6317  libmpi.so                rco2.24pe                
<br>
wrp2p_test_finished
<br>
9888      0.6139  libimf.so                rco2.24pe                exp.L
<br>
9179      0.5699  rco2.24pe                rco2.24pe                
<br>
subbasin_
<br>
9082      0.5639  rco2.24pe                rco2.24pe                
<br>
testnrecv_
<br>
8901      0.5526  libmpi.so                rco2.24pe                
<br>
openib_wrapper_purge_requests
<br>
7425      0.4610  rco2.24pe                rco2.24pe                
<br>
scobimain_
<br>
7378      0.4581  rco2.24pe                rco2.24pe                
<br>
scobi_interface_
<br>
6530      0.4054  rco2.24pe                rco2.24pe                setvbc_
<br>
6471      0.4018  libfmpi.so               rco2.24pe                
<br>
pmpi_iprobe
<br>
6341      0.3937  rco2.24pe                rco2.24pe                snap_
<br>
<p><p><pre>
-- 
---------------------------------------------------------
   Torgny Fax&#195;&#169;n		
   National Supercomputer Center
   Link&#195;&#182;ping University	
   S-581 83 Link&#195;&#182;ping
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
<li><strong>Next message:</strong> <a href="10203.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10201.php">Jean-Christophe Ducom: "[OMPI users] Kerberos ticket forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10203.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Reply:</strong> <a href="10203.php">Pavel Shamis (Pasha): "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe reply:</strong> <a href="10208.php">Terry Dontje: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Maybe reply:</strong> <a href="10210.php">Terry Dontje: "Re: [OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
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
