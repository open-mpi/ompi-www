<?
$subject_val = "Re: [OMPI users] openib issue with 1.6.5 but not later releases";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 19 11:06:48 2015" -->
<!-- isoreceived="20151019150648" -->
<!-- sent="Mon, 19 Oct 2015 15:06:44 +0000" -->
<!-- isosent="20151019150644" -->
<!-- name="John Marshall" -->
<!-- email="John.Marshall_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib issue with 1.6.5 but not later releases" -->
<!-- id="56250704.6040804_at_ssc-spc.gc.ca" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56214B7F.7060805_at_ssc-spc.gc.ca" -->
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
<strong>From:</strong> John Marshall (<em>John.Marshall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-19 11:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
<li><strong>In reply to:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/16/2015 07:09 PM, John Marshall wrote:
<br>
<span class="quotelev1">&gt; On 10/16/2015 02:27 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well, OMPI will see this as a 14 separate devices and will create ~28 openib btl instances (one per each port).
</span><br>
<span class="quotelev2">&gt;&gt; Can you try to limit OpenMPI to run with a single device/port and see what happens ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are running inside an LXC container and only 1 ib interface shows up inside
</span><br>
<span class="quotelev1">&gt; of it. We get the same behavior inside and outside a container.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will retest with no sriov and outside of a container. And report back.
</span><br>
<p>Hi,
<br>
<p>I haven't been able to test without SRIOV yet on the cluster with
<br>
ConnectX-3. However, as described below, on another cluster with
<br>
openmpi 1.6.5,ConnectX cards, and no SRIOV, the test passes.
<br>
<p>Further efforts have shown that if we add:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_btl_openib_if_include=&lt;device&gt;
<br>
<p>where device corresponds to the IB interface (e.g., mlx4_14), then
<br>
our test does not fail (yet, anyways).
<br>
<p>So, is this setting required if there are multiple IB interfaces (as
<br>
when there are multiple eth interfaces)? What is curious is that
<br>
there is only one interface visible from the container. Does the
<br>
openib btl look deeper and find all that exist in the host?
<br>
<p>Is it enough for the openib_if_include to be set for the &quot;master&quot;
<br>
node or does it need to be set on all nodes running tasks (which
<br>
may be different according to the node)?
<br>
<p>Is there something about the openib implementations in 1.8 and
<br>
1.10 that may handle this differently since we do not set
<br>
OMPI_MCA_btl_openib_if_include but our tests seem to work? Or,
<br>
is it a fluke?
<br>
<p>Thanks,
<br>
John
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt; From: users &lt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of John Marshall &lt;John.Marshall_at_[hidden] &lt;mailto:John.Marshall_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Friday, October 16, 2015 2:16 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openib issue with 1.6.5 but not later releases
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/16/2015 01:35 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you try to run ibdiagnet to check the network ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, how many devices you have on the same node ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It say &quot;mlx4_14&quot; - do you have 14 HCA on the same machine ?!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes. ibdiagnet seems to check out fine except for a few warning which do
</span><br>
<span class="quotelev2">&gt;&gt; not seem to be consequential (e.g., more recent firmware available).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a single card with two ports but many interfaces (16/port,
</span><br>
<span class="quotelev2">&gt;&gt; but we are using only 1 port). We are using SRIOV.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; John
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 16, 2015, at 10:26 AM, John Marshall &lt;John.Marshall_at_[hidden] &lt;mailto:John.Marshall_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have encountered a problem when running with 1.6.5 over IB (openib, ConnectX-3):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [[51298,1],2][btl_openib_component.c:3496:handle_wc] from ib7-bc2qq42-be01p02 to: 3 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 217ce00 opcode 0  vendor error 129 qp_idx 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (section 12.7.38):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          completion error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     This error typically means that there is something awry within the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     InfiniBand fabric itself.  You should note the hosts on which this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     error has occurred; it has been observed that rebooting or removing a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     particular host from the job can sometimes resolve this issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     respect to the retry count:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        to 20).  The actual timeout value used is calculated as:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Below is some information about the host that raised the error and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     peer to which it was connected:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        Local host:   ib7-bc2qq42-be01p02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        Local device: mlx4_14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        Peer host:    3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     problem fixed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [[51298,1],0][btl_openib_component.c:3496:handle_wc] from ib7-bc2qq42-be02p02 to: 1 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 15a4e00 opcode 10979  vendor error 129 qp_idx 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun has exited due to process rank 2 with PID 534 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     node 2 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     [ib7-bc2qq42-be02p02:01438] 1 more process has sent help message help-mpi-btl-openib.txt / pp retry exceeded
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * We are using logical names for our targets (which explains Peer host: 3 above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is reproducible with a simple program which does send+recv around a ring and calls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; barrier before each iteration. The problem occurs at the barrier.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I search for details on what this problem is, all I can find are suggestions that this is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hardware (cabling) related. Our network guys have checked and everything appears to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set up correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But, when I run the same program build with 1.8.8 and 1.10.0 on the same system, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem does not occur (at least for the parameters I am using).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, when running with 1.6.5 using IB on another system (openib, ConnectX ), I do _not_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; encounter the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone have some insight into what might be going on? Should I really be looking more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into the hardware? I could begin migrating to &gt;1.6.5, but I am concerned that the problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would just pop up somewhere else.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27881.php">http://www.open-mpi.org/community/lists/users/2015/10/27881.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27882.php">http://www.open-mpi.org/community/lists/users/2015/10/27882.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27884.php">http://www.open-mpi.org/community/lists/users/2015/10/27884.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27885.php">http://www.open-mpi.org/community/lists/users/2015/10/27885.php</a>
</span><br>
<p><p><pre>
-- 
*John Marshall*
High Performance Computing Support, Science, Operations
Shared Services Canada / Government of Canada
John.Marshall_at_[hidden] / Tel: 514-421-4647
Soutien aux calculs haute performance, Science, Operations
Services partages Canada / Gouvernement du Canada
John.Marshall_at_[hidden] / Tel: 514-421-4647
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
<li><strong>In reply to:</strong> <a href="27885.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Reply:</strong> <a href="27896.php">Shamis, Pavel: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
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
