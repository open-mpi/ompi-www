<?
$subject_val = "[OMPI users] openib issue with 1.6.5 but not later releases";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 10:23:31 2015" -->
<!-- isoreceived="20151016142331" -->
<!-- sent="Fri, 16 Oct 2015 10:26:56 -0400" -->
<!-- isosent="20151016142656" -->
<!-- name="John Marshall" -->
<!-- email="John.Marshall_at_[hidden]" -->
<!-- subject="[OMPI users] openib issue with 1.6.5 but not later releases" -->
<!-- id="56210930.3040302_at_ssc-spc.gc.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openib issue with 1.6.5 but not later releases<br>
<strong>From:</strong> John Marshall (<em>John.Marshall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 10:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27882.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27882.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27882.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have encountered a problem when running with 1.6.5 over IB (openib, ConnectX-3):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[[51298,1],2][btl_openib_component.c:3496:handle_wc] from ib7-bc2qq42-be01p02 to: 3 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 217ce00 opcode 0  vendor error 129 qp_idx 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The InfiniBand retry count between two MPI processes has been
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(section 12.7.38):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The total number of times that the sender wishes the receiver to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;retry timeout, packet sequence, etc. errors before posting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;completion error.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This error typically means that there is something awry within the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;InfiniBand fabric itself.  You should note the hosts on which this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;error has occurred; it has been observed that rebooting or removing a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;particular host from the job can sometimes resolve this issue.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Two MCA parameters can be used to control Open MPI's behavior with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;respect to the retry count:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* btl_openib_ib_retry_count - The number of times the sender will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attempt to retry (defaulted to 7, the maximum value).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to 20).  The actual timeout value used is calculated as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Below is some information about the host that raised the error and the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;peer to which it was connected:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local host:   ib7-bc2qq42-be01p02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local device: mlx4_14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Peer host:    3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;You may need to consult with your system administrator to get this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;problem fixed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[[51298,1],0][btl_openib_component.c:3496:handle_wc] from ib7-bc2qq42-be02p02 to: 1 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 15a4e00 opcode 10979  vendor error 129 qp_idx 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun has exited due to process rank 2 with PID 534 on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node 2 exiting improperly. There are two reasons this could occur:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;1. this process did not call &quot;init&quot; before exiting, but others in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the job did. This can cause a job to hang indefinitely while it waits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This may have caused other processes in the application to be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;terminated by signals sent by mpirun (as reported here).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[ib7-bc2qq42-be02p02:01438] 1 more process has sent help message help-mpi-btl-openib.txt / pp retry exceeded
<br>
<p>* We are using logical names for our targets (which explains Peer host: 3 above).
<br>
<p>This is reproducible with a simple program which does send+recv around a ring and calls
<br>
barrier before each iteration. The problem occurs at the barrier.
<br>
<p>When I search for details on what this problem is, all I can find are suggestions that this is
<br>
hardware (cabling) related. Our network guys have checked and everything appears to be
<br>
set up correctly.
<br>
<p>But, when I run the same program build with 1.8.8 and 1.10.0 on the same system, the
<br>
problem does not occur (at least for the parameters I am using).
<br>
<p>Also, when running with 1.6.5 using IB on another system (openib, ConnectX ), I do _not_
<br>
encounter the problem.
<br>
<p>Does anyone have some insight into what might be going on? Should I really be looking more
<br>
into the hardware? I could begin migrating to &gt;1.6.5, but I am concerned that the problem
<br>
would just pop up somewhere else.
<br>
<p>Thanks,
<br>
John
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27882.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27880.php">Gilles Gouaillardet: "Re: [OMPI users] openMPI programs not using IB network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27882.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27882.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
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
