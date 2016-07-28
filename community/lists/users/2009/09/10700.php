<?
$subject_val = "[OMPI users] Job fails after hours of running on a specific node";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 11:30:16 2009" -->
<!-- isoreceived="20090920153016" -->
<!-- sent="Sun, 20 Sep 2009 21:00:11 +0530" -->
<!-- isosent="20090920153011" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Job fails after hours of running on a specific node" -->
<!-- id="cb60cbc40909200830g68f08509jc036c2a4486f2b1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Job fails after hours of running on a specific node<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-20 11:30:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Reply:</strong> <a href="10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The CPMD application which is compiled with OpenMPI-1.3 (Intel 10.1
<br>
compilers) on CentOS-4.5, fails only, when a specific node i.e. node-0-2 is
<br>
involved. But runs well on other nodes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Initially job failed after 5-10 mins (on node-0-2 + some other
<br>
nodes). After googling error, I added options &quot;-mca
<br>
btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20&quot; to mpirun
<br>
command in the SGE script:
<br>
<p>$ cat cpmdrun.sh
<br>
#!/bin/bash
<br>
#$ -N cpmd-acw
<br>
#$ -S /bin/bash
<br>
#$ -cwd
<br>
#$ -e err.$JOB_ID.$JOB_NAME
<br>
#$ -o out.$JOB_ID.$JOB_NAME
<br>
#$ -pe ib 32
<br>
unset SGE_ROOT
<br>
PP_LIBRARY=/home/user1/cpmdrun/wac/prod/PP
<br>
CPMD=/opt/apps/cpmd/3.11/ompi/SOURCE/cpmd311-ompi-mkl.x
<br>
MPIRUN=/opt/mpi/openmpi/1.3/intel/bin/mpirun
<br>
$MPIRUN -np $NSLOTS -hostfile $TMPDIR/machines -mca
<br>
btl_openib_ib_min_rnr_timer 25 -mca btl_openib_ib_timeout 20 $CPMD
<br>
wac_md26.in  $PP_LIBRARY &gt; wac_md26.out
<br>
After adding these options, job executed for 24+ hours then failed with the
<br>
same error as earlier. The error is:
<br>
<p>$ cat err.6186.cpmd-acw
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
&nbsp;&nbsp;Local host:        node-0-2.local
<br>
&nbsp;&nbsp;MPI process PID:   11840
<br>
&nbsp;&nbsp;Error number:      10 (IBV_EVENT_PORT_ERR)
<br>
This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
[node-0-2.local:11836] 7 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
<br>
see all help / error messages
<br>
[node-0-2.local:11836] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 7 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 7 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 7 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 7 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 15 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 16 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[node-0-2.local:11836] 16 more processes have sent help message
<br>
help-mpi-btl-openib.txt / of error event
<br>
[[718,1],20][btl_openib_component.c:2902:handle_wc] from node-0-22.local to:
<br>
node-0-2
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The total number of times that the sender wishes the receiver to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retry timeout, packet sequence, etc. errors before posting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;completion error.
<br>
This error typically means that there is something awry within the
<br>
InfiniBand fabric itself.  You should note the hosts on which this
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.
<br>
Two MCA parameters can be used to control Open MPI's behavior with
<br>
respect to the retry count:
<br>
* btl_openib_ib_retry_count - The number of times the sender will
<br>
&nbsp;&nbsp;attempt to retry (defaulted to 7, the maximum value).
<br>
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&nbsp;&nbsp;to 10).  The actual timeout value used is calculated as:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
&nbsp;&nbsp;See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
Below is some information about the host that raised the error and the
<br>
peer to which it was connected:
<br>
&nbsp;&nbsp;Local host:   node-0-22.local
<br>
&nbsp;&nbsp;Local device: mthca0
<br>
&nbsp;&nbsp;Peer host:    node-0-2
<br>
You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for
<br>
wr_id 66384128 opcode 128 qp_idx 3
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 20 with PID 10425 on
<br>
node ibc22 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
rm: cannot remove `/tmp/6186.1.iblong.q/rsh': No such file or directory
<br>
<p>The openibd service is running fine:
<br>
<p>$ service openibd status
<br>
&nbsp;&nbsp;HCA driver loaded
<br>
Configured devices:
<br>
ib0
<br>
Currently active devices:
<br>
ib0
<br>
The following OFED modules are loaded:
<br>
&nbsp;&nbsp;rdma_ucm
<br>
&nbsp;&nbsp;ib_sdp
<br>
&nbsp;&nbsp;rdma_cm
<br>
&nbsp;&nbsp;ib_addr
<br>
&nbsp;&nbsp;ib_ipoib
<br>
&nbsp;&nbsp;mlx4_core
<br>
&nbsp;&nbsp;mlx4_ib
<br>
&nbsp;&nbsp;ib_mthca
<br>
&nbsp;&nbsp;ib_uverbs
<br>
&nbsp;&nbsp;ib_umad
<br>
&nbsp;&nbsp;ib_ucm
<br>
&nbsp;&nbsp;ib_sa
<br>
&nbsp;&nbsp;ib_cm
<br>
&nbsp;&nbsp;ib_mad
<br>
&nbsp;&nbsp;ib_core
<br>
But still the job is failing after hours of running, that to for a
<br>
particular node. What's the wrong with node-0-2? How can it be resolved?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10701.php">Jed Brown: "Re: [OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<li><strong>Previous message:</strong> <a href="10699.php">Brian Powell: "[OMPI users] Question about OpenMPI performance vs. MVAPICH2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
<li><strong>Reply:</strong> <a href="10705.php">Pavel Shamis (Pasha): "Re: [OMPI users] Job fails after hours of running on a specific node"</a>
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
