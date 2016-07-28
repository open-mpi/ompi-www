<?
$subject_val = "Re: [OMPI users] use accept/connect to merge a new intra-comm";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 23:54:13 2015" -->
<!-- isoreceived="20150202045413" -->
<!-- sent="Sun, 1 Feb 2015 20:54:11 -0800" -->
<!-- isosent="20150202045411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] use accept/connect to merge a new intra-comm" -->
<!-- id="23BB923E-D6B9-487C-A591-BA782624B878_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71b5d041.6fa5.14b21537f3e.Coremail.yidanyiji_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] use accept/connect to merge a new intra-comm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-01 23:54:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26254.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26233.php">haozi: "[OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26255.php">Burns, Andrew J CTR (US): "Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26255.php">Burns, Andrew J CTR (US): "Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which OMPI version?
<br>
<p><span class="quotelev1">&gt; On Jan 25, 2015, at 5:41 AM, haozi &lt;yidanyiji_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi guys.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am interested in an example from OpenMPI, as  attachment: singleton_client_server.c.
</span><br>
<span class="quotelev1">&gt; So, I wrote another example. And some error happened.
</span><br>
<span class="quotelev1">&gt; My example includes two servers and one client. 
</span><br>
<span class="quotelev1">&gt; First, server1 runs. Second, client runs. server1 and client merge an new intra-comm. Next, server2 runs. server2 open a port, server1 and client want to connect server2. At the moment, some error happen. client and server2 block, and server1 has errors as following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [datanode-2:06824] [[53818,0],0]:route_callback tried routing message from [[53818,1],0] to [[53822,1],0]:16, can't find route
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib/libopen-pal.so.0(opal_backtrace_print+0x30) [0xb769fbc0]
</span><br>
<span class="quotelev1">&gt; [1] func:/usr/lib/openmpi/lib/openmpi/mca_rml_oob.so(+0x1bfd) [0xb748fbfd]
</span><br>
<span class="quotelev1">&gt; [2] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x6cfa) [0xb7484cfa]
</span><br>
<span class="quotelev1">&gt; [3] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x81c2) [0xb74861c2]
</span><br>
<span class="quotelev1">&gt; [4] func:/usr/lib/libopen-pal.so.0(+0x1aca4) [0xb7688ca4]
</span><br>
<span class="quotelev1">&gt; [5] func:/usr/lib/libopen-pal.so.0(opal_event_loop+0x25) [0xb7688ea5]
</span><br>
<span class="quotelev1">&gt; [6] func:/usr/lib/libopen-pal.so.0(opal_event_dispatch+0x1b) [0xb7688ecb]
</span><br>
<span class="quotelev1">&gt; [7] func:mpiexec() [0x804ac0a]
</span><br>
<span class="quotelev1">&gt; [8] func:mpiexec() [0x8049f4f]
</span><br>
<span class="quotelev1">&gt; [9] func:/lib/i386-linux-gnu/libc.so.6(__libc_start_main+0xf3) [0xb74c14d3]
</span><br>
<span class="quotelev1">&gt; [10] func:mpiexec() [0x8049ea1] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My code is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;client.c&gt;&lt;server1.c&gt;&lt;server2.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26233.php">http://www.open-mpi.org/community/lists/users/2015/01/26233.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26254.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26233.php">haozi: "[OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26255.php">Burns, Andrew J CTR (US): "Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26255.php">Burns, Andrew J CTR (US): "Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
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
