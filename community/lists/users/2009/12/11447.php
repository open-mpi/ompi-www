<?
$subject_val = "Re: [OMPI users] Job fails after hours of running on a specific node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 04:14:18 2009" -->
<!-- isoreceived="20091207091418" -->
<!-- sent="Mon, 7 Dec 2009 14:44:13 +0530" -->
<!-- isosent="20091207091413" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job fails after hours of running on a specific node" -->
<!-- id="cb60cbc40912070114o7a7879a0sb0ff66e7fb263d67_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AB7340B.9040504_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-07 04:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11448.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11446.php">Eugene Loh: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Pasha,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As the error was not repeating frequently, I didn't look into the
<br>
issue from a long time. But now I started to diagnose it:
<br>
<p>Initially I tested with ibv_rc_pingpong (Master node to all compute nodes
<br>
using a for loop). Its working for each of the nodes.
<br>
<p>The files generated out of the command &quot;ibdiagnet -v -r -o .&quot; are attached
<br>
herewith. The ibcheckerrors shows following error message:
<br>
<p># ibcheckerrors
<br>
#warn: counter RcvSwRelayErrors = 408   (threshold 100)
<br>
Error check on lid 2 (MT47396 Infiniscale-III Mellanox Technologies) port
<br>
all:  FAILED
<br>
#warn: counter RcvSwRelayErrors = 179   (threshold 100)
<br>
Error check on lid 2 (MT47396 Infiniscale-III Mellanox Technologies) port
<br>
7:  FAILED
<br>
# Checked Switch: nodeguid 0x000b8cffff00551b with failure
<br>
<p>## Summary: 25 nodes checked, 0 bad nodes found
<br>
##          48 ports checked, 1 ports have errors beyond threshold
<br>
<p>Are these messages helpful to  find the issue with node-0-2? Can you please
<br>
help us to diagnose further?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p><p>On Mon, Sep 21, 2009 at 1:36 PM, Pavel Shamis (Pasha) &lt;pashash_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Sangamesh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ib tunings that you added to your command line only delay the problem
</span><br>
<span class="quotelev1">&gt; but doesn't resolve it.
</span><br>
<span class="quotelev1">&gt; The node-0-2.local gets asynchronous event &quot;IBV_EVENT_PORT_ERROR&quot; and as
</span><br>
<span class="quotelev1">&gt; result
</span><br>
<span class="quotelev1">&gt; the processes fails to deliver packets to some remote hosts and as result
</span><br>
<span class="quotelev1">&gt; you see bunch of IB errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The IBV_EVENT_PORT_ERROR error means that the IB port gone from ACTIVE
</span><br>
<span class="quotelev1">&gt; state do DOWN state.
</span><br>
<span class="quotelev1">&gt; Or in other words you have problem with your IB networks that cause all
</span><br>
<span class="quotelev1">&gt; these networks errors.
</span><br>
<span class="quotelev1">&gt; Source cause of such issue maybe some bad cable or some problematic port on
</span><br>
<span class="quotelev1">&gt; switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the IB network debug I propose you use Ibdiaget, it is open source IB
</span><br>
<span class="quotelev1">&gt; network diagnostic tool :
</span><br>
<span class="quotelev1">&gt; <a href="http://linux.die.net/man/1/ibdiagnet">http://linux.die.net/man/1/ibdiagnet</a>
</span><br>
<span class="quotelev1">&gt; The tool is part of OFED distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;       The CPMD application which is compiled with OpenMPI-1.3 (Intel 10.1
</span><br>
<span class="quotelev2">&gt;&gt; compilers) on CentOS-4.5, fails only, when a specific node i.e. node-0-2 is
</span><br>
<span class="quotelev2">&gt;&gt; involved. But runs well on other nodes.
</span><br>
<span class="quotelev2">&gt;&gt;        Initially job failed after 5-10 mins (on node-0-2 + some other
</span><br>
<span class="quotelev2">&gt;&gt; nodes). After googling error, I added options &quot;-mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20&quot; to mpirun
</span><br>
<span class="quotelev2">&gt;&gt; command in the SGE script:
</span><br>
<span class="quotelev2">&gt;&gt;  $ cat cpmdrun.sh
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N cpmd-acw
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -e err.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev2">&gt;&gt; #$ -o out.$JOB_ID.$JOB_NAME
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe ib 32
</span><br>
<span class="quotelev2">&gt;&gt; unset SGE_ROOT  PP_LIBRARY=/home/user1/cpmdrun/wac/prod/PP
</span><br>
<span class="quotelev2">&gt;&gt; CPMD=/opt/apps/cpmd/3.11/ompi/SOURCE/cpmd311-ompi-mkl.x
</span><br>
<span class="quotelev2">&gt;&gt; MPIRUN=/opt/mpi/openmpi/1.3/intel/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; $MPIRUN -np $NSLOTS -hostfile $TMPDIR/machines -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20 $CPMD
</span><br>
<span class="quotelev2">&gt;&gt; wac_md26.in &lt;<a href="http://wac_md26.in">http://wac_md26.in</a>&gt;  $PP_LIBRARY &gt; wac_md26.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After adding these options, job executed for 24+ hours then failed with
</span><br>
<span class="quotelev2">&gt;&gt; the same error as earlier. The error is:
</span><br>
<span class="quotelev2">&gt;&gt;  $ cat err.6186.cpmd-acw
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The OpenFabrics stack has reported a network error event.  Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; will try to continue, but your job may end up failing.
</span><br>
<span class="quotelev2">&gt;&gt;  Local host:        node-0-2.local
</span><br>
<span class="quotelev2">&gt;&gt;  MPI process PID:   11840
</span><br>
<span class="quotelev2">&gt;&gt;  Error number:      10 (IBV_EVENT_PORT_ERR)
</span><br>
<span class="quotelev2">&gt;&gt; This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev2">&gt;&gt; please contact your system administrator.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 7 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev2">&gt;&gt; to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 7 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 7 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 7 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 7 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 15 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 16 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [node-0-2.local:11836] 16 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-btl-openib.txt / of error event
</span><br>
<span class="quotelev2">&gt;&gt; [[718,1],20][btl_openib_component.c:2902:handle_wc] from node-0-22.local
</span><br>
<span class="quotelev2">&gt;&gt; to: node-0-2
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev2">&gt;&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev2">&gt;&gt; (section 12.7.38):
</span><br>
<span class="quotelev2">&gt;&gt;    The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev2">&gt;&gt;    retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev2">&gt;&gt;    completion error.
</span><br>
<span class="quotelev2">&gt;&gt; This error typically means that there is something awry within the
</span><br>
<span class="quotelev2">&gt;&gt; InfiniBand fabric itself.  You should note the hosts on which this
</span><br>
<span class="quotelev2">&gt;&gt; error has occurred; it has been observed that rebooting or removing a
</span><br>
<span class="quotelev2">&gt;&gt; particular host from the job can sometimes resolve this issue.
</span><br>
<span class="quotelev2">&gt;&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev2">&gt;&gt; respect to the retry count:
</span><br>
<span class="quotelev2">&gt;&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev2">&gt;&gt;  attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev2">&gt;&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev2">&gt;&gt;  to 10).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev2">&gt;&gt;     4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev2">&gt;&gt;  See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev2">&gt;&gt; Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev2">&gt;&gt; peer to which it was connected:
</span><br>
<span class="quotelev2">&gt;&gt;  Local host:   node-0-22.local
</span><br>
<span class="quotelev2">&gt;&gt;  Local device: mthca0
</span><br>
<span class="quotelev2">&gt;&gt;  Peer host:    node-0-2
</span><br>
<span class="quotelev2">&gt;&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev2">&gt;&gt; problem fixed.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for
</span><br>
<span class="quotelev2">&gt;&gt; wr_id 66384128 opcode 128 qp_idx 3
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 20 with PID 10425 on
</span><br>
<span class="quotelev2">&gt;&gt; node ibc22 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; rm: cannot remove `/tmp/6186.1.iblong.q/rsh': No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;  The openibd service is running fine:
</span><br>
<span class="quotelev2">&gt;&gt;  $ service openibd status
</span><br>
<span class="quotelev2">&gt;&gt;  HCA driver loaded
</span><br>
<span class="quotelev2">&gt;&gt; Configured devices:
</span><br>
<span class="quotelev2">&gt;&gt; ib0
</span><br>
<span class="quotelev2">&gt;&gt; Currently active devices:
</span><br>
<span class="quotelev2">&gt;&gt; ib0
</span><br>
<span class="quotelev2">&gt;&gt; The following OFED modules are loaded:
</span><br>
<span class="quotelev2">&gt;&gt;  rdma_ucm
</span><br>
<span class="quotelev2">&gt;&gt;  ib_sdp
</span><br>
<span class="quotelev2">&gt;&gt;  rdma_cm
</span><br>
<span class="quotelev2">&gt;&gt;  ib_addr
</span><br>
<span class="quotelev2">&gt;&gt;  ib_ipoib
</span><br>
<span class="quotelev2">&gt;&gt;  mlx4_core
</span><br>
<span class="quotelev2">&gt;&gt;  mlx4_ib
</span><br>
<span class="quotelev2">&gt;&gt;  ib_mthca
</span><br>
<span class="quotelev2">&gt;&gt;  ib_uverbs
</span><br>
<span class="quotelev2">&gt;&gt;  ib_umad
</span><br>
<span class="quotelev2">&gt;&gt;  ib_ucm
</span><br>
<span class="quotelev2">&gt;&gt;  ib_sa
</span><br>
<span class="quotelev2">&gt;&gt;  ib_cm
</span><br>
<span class="quotelev2">&gt;&gt;  ib_mad
</span><br>
<span class="quotelev2">&gt;&gt;  ib_core
</span><br>
<span class="quotelev2">&gt;&gt; But still the job is failing after hours of running, that to for a
</span><br>
<span class="quotelev2">&gt;&gt; particular node. What's the wrong with node-0-2? How can it be resolved?
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11447/IBtest_ibdiagnet.tar.gz">IBtest_ibdiagnet.tar.gz</a>
</ul>
<!-- attachment="IBtest_ibdiagnet.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11448.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11446.php">Eugene Loh: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<!-- nextthread="start" -->
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
