<?
$subject_val = "Re: [OMPI users] Job fails after hours of running on a specific node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 04:06:48 2009" -->
<!-- isoreceived="20090921080648" -->
<!-- sent="Mon, 21 Sep 2009 11:06:35 +0300" -->
<!-- isosent="20090921080635" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job fails after hours of running on a specific node" -->
<!-- id="4AB7340B.9040504_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40909200830g68f08509jc036c2a4486f2b1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job fails after hours of running on a specific node<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 04:06:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10706.php">Pavel Shamis (Pasha): "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>In reply to:</strong> <a href="10700.php">Sangamesh B: "[OMPI users] Job fails after hours of running on a specific node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sangamesh,
<br>
<p>The ib tunings that you added to your command line only delay the 
<br>
problem but doesn't resolve it.
<br>
The node-0-2.local gets asynchronous event &quot;IBV_EVENT_PORT_ERROR&quot; and as 
<br>
result
<br>
the processes fails to deliver packets to some remote hosts and as 
<br>
result you see bunch of IB errors.
<br>
<p>The IBV_EVENT_PORT_ERROR error means that the IB port gone from ACTIVE 
<br>
state do DOWN state.
<br>
Or in other words you have problem with your IB networks that cause all 
<br>
these networks errors.
<br>
Source cause of such issue maybe some bad cable or some problematic port 
<br>
on switch.
<br>
<p>For the IB network debug I propose you use Ibdiaget, it is open source 
<br>
IB network diagnostic tool :
<br>
<a href="http://linux.die.net/man/1/ibdiagnet">http://linux.die.net/man/1/ibdiagnet</a>
<br>
The tool is part of OFED distribution.
<br>
<p>Pasha.
<br>
<p><p>Sangamesh B wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      The CPMD application which is compiled with OpenMPI-1.3 (Intel 
</span><br>
<span class="quotelev1">&gt; 10.1 compilers) on CentOS-4.5, fails only, when a specific node i.e. 
</span><br>
<span class="quotelev1">&gt; node-0-2 is involved. But runs well on other nodes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       Initially job failed after 5-10 mins (on node-0-2 + some other 
</span><br>
<span class="quotelev1">&gt; nodes). After googling error, I added options &quot;-mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20&quot; to 
</span><br>
<span class="quotelev1">&gt; mpirun command in the SGE script:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ cat cpmdrun.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N cpmd-acw
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -e err.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev1">&gt; #$ -o out.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev1">&gt; #$ -pe ib 32
</span><br>
<span class="quotelev1">&gt; unset SGE_ROOT  
</span><br>
<span class="quotelev1">&gt; PP_LIBRARY=/home/user1/cpmdrun/wac/prod/PP
</span><br>
<span class="quotelev1">&gt; CPMD=/opt/apps/cpmd/3.11/ompi/SOURCE/cpmd311-ompi-mkl.x
</span><br>
<span class="quotelev1">&gt; MPIRUN=/opt/mpi/openmpi/1.3/intel/bin/mpirun
</span><br>
<span class="quotelev1">&gt; $MPIRUN -np $NSLOTS -hostfile $TMPDIR/machines -mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20 $CPMD 
</span><br>
<span class="quotelev1">&gt; wac_md26.in &lt;<a href="http://wac_md26.in">http://wac_md26.in</a>&gt;  $PP_LIBRARY &gt; wac_md26.out
</span><br>
<span class="quotelev1">&gt; After adding these options, job executed for 24+ hours then failed 
</span><br>
<span class="quotelev1">&gt; with the same error as earlier. The error is:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ cat err.6186.cpmd-acw
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics stack has reported a network error event.  Open MPI
</span><br>
<span class="quotelev1">&gt; will try to continue, but your job may end up failing.
</span><br>
<span class="quotelev1">&gt;   Local host:        node-0-2.local
</span><br>
<span class="quotelev1">&gt;   MPI process PID:   11840
</span><br>
<span class="quotelev1">&gt;   Error number:      10 (IBV_EVENT_PORT_ERR)
</span><br>
<span class="quotelev1">&gt; This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev1">&gt; please contact your system administrator.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 7 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 7 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 7 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 7 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 7 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 1 more process has sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 15 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 16 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [node-0-2.local:11836] 16 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev1">&gt; [[718,1],20][btl_openib_component.c:2902:handle_wc] from 
</span><br>
<span class="quotelev1">&gt; node-0-22.local to: node-0-2 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev1">&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev1">&gt; (section 12.7.38):
</span><br>
<span class="quotelev1">&gt;     The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev1">&gt;     retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev1">&gt;     completion error.
</span><br>
<span class="quotelev1">&gt; This error typically means that there is something awry within the
</span><br>
<span class="quotelev1">&gt; InfiniBand fabric itself.  You should note the hosts on which this
</span><br>
<span class="quotelev1">&gt; error has occurred; it has been observed that rebooting or removing a
</span><br>
<span class="quotelev1">&gt; particular host from the job can sometimes resolve this issue.
</span><br>
<span class="quotelev1">&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt; respect to the retry count:
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt;   attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt;   to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt;      4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt;   See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev1">&gt; peer to which it was connected:
</span><br>
<span class="quotelev1">&gt;   Local host:   node-0-22.local
</span><br>
<span class="quotelev1">&gt;   Local device: mthca0
</span><br>
<span class="quotelev1">&gt;   Peer host:    node-0-2
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 
</span><br>
<span class="quotelev1">&gt; for wr_id 66384128 opcode 128 qp_idx 3
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 20 with PID 10425 on
</span><br>
<span class="quotelev1">&gt; node ibc22 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; rm: cannot remove `/tmp/6186.1.iblong.q/rsh': No such file or directory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The openibd service is running fine:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; $ service openibd status
</span><br>
<span class="quotelev1">&gt;   HCA driver loaded
</span><br>
<span class="quotelev1">&gt; Configured devices:
</span><br>
<span class="quotelev1">&gt; ib0
</span><br>
<span class="quotelev1">&gt; Currently active devices:
</span><br>
<span class="quotelev1">&gt; ib0
</span><br>
<span class="quotelev1">&gt; The following OFED modules are loaded:
</span><br>
<span class="quotelev1">&gt;   rdma_ucm
</span><br>
<span class="quotelev1">&gt;   ib_sdp
</span><br>
<span class="quotelev1">&gt;   rdma_cm
</span><br>
<span class="quotelev1">&gt;   ib_addr
</span><br>
<span class="quotelev1">&gt;   ib_ipoib
</span><br>
<span class="quotelev1">&gt;   mlx4_core
</span><br>
<span class="quotelev1">&gt;   mlx4_ib
</span><br>
<span class="quotelev1">&gt;   ib_mthca
</span><br>
<span class="quotelev1">&gt;   ib_uverbs
</span><br>
<span class="quotelev1">&gt;   ib_umad
</span><br>
<span class="quotelev1">&gt;   ib_ucm
</span><br>
<span class="quotelev1">&gt;   ib_sa
</span><br>
<span class="quotelev1">&gt;   ib_cm
</span><br>
<span class="quotelev1">&gt;   ib_mad
</span><br>
<span class="quotelev1">&gt;   ib_core
</span><br>
<span class="quotelev1">&gt; But still the job is failing after hours of running, that to for a 
</span><br>
<span class="quotelev1">&gt; particular node. What's the wrong with node-0-2? How can it be resolved?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10706.php">Pavel Shamis (Pasha): "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10704.php">Brian Powell: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>In reply to:</strong> <a href="10700.php">Sangamesh B: "[OMPI users] Job fails after hours of running on a specific node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11447.php">Sangamesh B: "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
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
