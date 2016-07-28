<?
$subject_val = "Re: [OMPI users] use accept/connect to merge a new intra-comm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 20:58:41 2015" -->
<!-- isoreceived="20150203015841" -->
<!-- sent="Tue, 3 Feb 2015 09:58:36 +0800 (CST)" -->
<!-- isosent="20150203015836" -->
<!-- name="haozi " -->
<!-- email="yidanyiji_at_[hidden]" -->
<!-- subject="Re: [OMPI users] use accept/connect to merge a new intra-comm" -->
<!-- id="4375243.2b8c.14b4d2921a9.Coremail.yidanyiji_at_163.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="23BB923E-D6B9-487C-A591-BA782624B878_at_open-mpi.org" -->
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
<strong>From:</strong> haozi  (<em>yidanyiji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 20:58:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26259.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26253.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26262.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Reply:</strong> <a href="26262.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpiexec (OpenRTE) 1.4.3
<br>
<p><p><p><p><p><p><p><p>At 2015-02-02 12:54:11, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
Which OMPI version?
<br>
<p><p>On Jan 25, 2015, at 5:41 AM, haozi &lt;yidanyiji_at_[hidden]&gt; wrote:
<br>
<p><p>Hi guys.
<br>
<p><p>I am interested in an example from OpenMPI, as  attachment: singleton_client_server.c.
<br>
So, I wrote another example. And some error happened.
<br>
My example includes two servers and one client. 
<br>
First, server1 runs. Second, client runs. server1 and client merge an new intra-comm. Next, server2 runs. server2 open a port, server1 and client want to connect server2. At the moment, some error happen. client and server2 block, and server1 has errors as following:
<br>
<p><p>[datanode-2:06824] [[53818,0],0]:route_callback tried routing message from [[53818,1],0] to [[53822,1],0]:16, can't find route
<br>
[0] func:/usr/lib/libopen-pal.so.0(opal_backtrace_print+0x30) [0xb769fbc0]
<br>
[1] func:/usr/lib/openmpi/lib/openmpi/mca_rml_oob.so(+0x1bfd) [0xb748fbfd]
<br>
[2] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x6cfa) [0xb7484cfa]
<br>
[3] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x81c2) [0xb74861c2]
<br>
[4] func:/usr/lib/libopen-pal.so.0(+0x1aca4) [0xb7688ca4]
<br>
[5] func:/usr/lib/libopen-pal.so.0(opal_event_loop+0x25) [0xb7688ea5]
<br>
[6] func:/usr/lib/libopen-pal.so.0(opal_event_dispatch+0x1b) [0xb7688ecb]
<br>
[7] func:mpiexec() [0x804ac0a]
<br>
[8] func:mpiexec() [0x8049f4f]
<br>
[9] func:/lib/i386-linux-gnu/libc.so.6(__libc_start_main+0xf3) [0xb74c14d3]
<br>
[10] func:mpiexec() [0x8049ea1] 
<br>
<p><p>My code is attached.
<br>
<p><p>Regards.
<br>
<p><p>&lt;client.c&gt;&lt;server1.c&gt;&lt;server2.c&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26233.php">http://www.open-mpi.org/community/lists/users/2015/01/26233.php</a>
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26261.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26259.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26253.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26262.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<li><strong>Reply:</strong> <a href="26262.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
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
