<?
$subject_val = "Re: [OMPI users] openib issue with 1.6.5 but not later releases";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 14:28:03 2015" -->
<!-- isoreceived="20151016182803" -->
<!-- sent="Fri, 16 Oct 2015 18:27:58 +0000" -->
<!-- isosent="20151016182758" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issue with 1.6.5 but not later releases" -->
<!-- id="D246B8DB.2370B%shamisp_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56213F06.10806_at_ssc-spc.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib issue with 1.6.5 but not later releases<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 14:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27883.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27883.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, OMPI will see this as a 14 separate devices and will create ~28 openib btl instances (one per each port).
<br>
Can you try to limit OpenMPI to run with a single device/port and see what happens ?
<br>
<p>Best,
<br>
Pasha
<br>
<p>From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of John Marshall &lt;John.Marshall_at_[hidden]&lt;mailto:John.Marshall_at_[hidden]&gt;&gt;
<br>
Reply-To: Open Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Friday, October 16, 2015 2:16 PM
<br>
To: Open Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] openib issue with 1.6.5 but not later releases
<br>
<p>On 10/16/2015 01:35 PM, Shamis, Pavel wrote:
<br>
Did you try to run ibdiagnet to check the network ?
<br>
Also, how many devices you have on the same node ?
<br>
It say &quot;mlx4_14&quot; - do you have 14 HCA on the same machine ?!
<br>
<p>Yes. ibdiagnet seems to check out fine except for a few warning which do
<br>
not seem to be consequential (e.g., more recent firmware available).
<br>
<p>There is a single card with two ports but many interfaces (16/port,
<br>
but we are using only 1 port). We are using SRIOV.
<br>
<p>John
<br>
<p><p>Best,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Oct 16, 2015, at 10:26 AM, John Marshall &lt;John.Marshall_at_[hidden]&lt;mailto:John.Marshall_at_[hidden]&gt;&gt; wrote:
Hi,
I have encountered a problem when running with 1.6.5 over IB (openib, ConnectX-3):
[[51298,1],2][btl_openib_component.c:3496:handle_wc] from ib7-bc2qq42-be01p02 to: 3 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 217ce00 opcode 0  vendor error 129 qp_idx 0
--------------------------------------------------------------------------
The InfiniBand retry count between two MPI processes has been
exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
(section 12.7.38):
    The total number of times that the sender wishes the receiver to
    retry timeout, packet sequence, etc. errors before posting a
    completion error.
This error typically means that there is something awry within the
InfiniBand fabric itself.  You should note the hosts on which this
error has occurred; it has been observed that rebooting or removing a
particular host from the job can sometimes resolve this issue.
Two MCA parameters can be used to control Open MPI's behavior with
respect to the retry count:
* btl_openib_ib_retry_count - The number of times the sender will
  attempt to retry (defaulted to 7, the maximum value).
* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
  to 20).  The actual timeout value used is calculated as:
     4.096 microseconds * (2^btl_openib_ib_timeout)
  See the InfiniBand spec 1.2 (section 12.7.34) for more details.
Below is some information about the host that raised the error and the
peer to which it was connected:
  Local host:   ib7-bc2qq42-be01p02
  Local device: mlx4_14
  Peer host:    3
You may need to consult with your system administrator to get this
problem fixed.
--------------------------------------------------------------------------
[[51298,1],0][btl_openib_component.c:3496:handle_wc] from ib7-bc2qq42-be02p02 to: 1 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 15a4e00 opcode 10979  vendor error 129 qp_idx 0
--------------------------------------------------------------------------
mpirun has exited due to process rank 2 with PID 534 on
node 2 exiting improperly. There are two reasons this could occur:
1. this process did not call &quot;init&quot; before exiting, but others in
the job did. This can cause a job to hang indefinitely while it waits
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
then ALL processes must call &quot;init&quot; prior to termination.
2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
exiting or it will be considered an &quot;abnormal termination&quot;
This may have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
[ib7-bc2qq42-be02p02:01438] 1 more process has sent help message help-mpi-btl-openib.txt / pp retry exceeded
* We are using logical names for our targets (which explains Peer host: 3 above).
This is reproducible with a simple program which does send+recv around a ring and calls
barrier before each iteration. The problem occurs at the barrier.
When I search for details on what this problem is, all I can find are suggestions that this is
hardware (cabling) related. Our network guys have checked and everything appears to be
set up correctly.
But, when I run the same program build with 1.8.8 and 1.10.0 on the same system, the
problem does not occur (at least for the parameters I am using).
Also, when running with 1.6.5 using IB on another system (openib, ConnectX ), I do _not_
encounter the problem.
Does anyone have some insight into what might be going on? Should I really be looking more
into the hardware? I could begin migrating to &gt;1.6.5, but I am concerned that the problem
would just pop up somewhere else.
Thanks,
John
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27881.php">http://www.open-mpi.org/community/lists/users/2015/10/27881.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27882.php">http://www.open-mpi.org/community/lists/users/2015/10/27882.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27883.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27883.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
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
