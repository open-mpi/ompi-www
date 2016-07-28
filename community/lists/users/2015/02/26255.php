<?
$subject_val = "Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 09:41:17 2015" -->
<!-- isoreceived="20150202144117" -->
<!-- sent="Mon, 2 Feb 2015 14:41:10 +0000" -->
<!-- isosent="20150202144110" -->
<!-- name="Burns, Andrew J CTR (US)" -->
<!-- email="andrew.j.burns35.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)" -->
<!-- id="DEE37B508E36B64285856EEA9FC0C337177CF2DA_at_ucolhpkl.easf.csd.disa.mil" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI users] use accept/connect to merge a new intra-comm (UNCLASSIFIED)<br>
<strong>From:</strong> Burns, Andrew J CTR (US) (<em>andrew.j.burns35.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 09:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26256.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26254.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26253.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p>I have also had issues with this in the past. I know that this was a problem in 1.6.3, supposedly fixed in 1.7.4. For some reason,
<br>
when attempting to set up inter process communication this way you are only able to connect once.
<br>
<p>I still have issues as of 1.8.3, but as the actual error is of the form:
<br>
<p>------------------------------------------------------------
<br>
A process or daemon was unable to complete a TCP connection
<br>
to another process:
<br>
&nbsp;&nbsp;Local host:    xxxxxxxxx
<br>
&nbsp;&nbsp;Remote host:   xxxxxxxxx
<br>
This is usually caused by a firewall on the remote host. Please
<br>
check that any firewall (e.g., iptables) has been disabled and
<br>
try again.
<br>
------------------------------------------------------------
<br>
[xxxxxxxxx:59057] [[9837,0],0]-[[9830,0],0] mca_oob_tcp_peer_recv_handler: invalid socket state(6)
<br>
<p>I suspect it may be a local configuration issue as opposed to an issue with the code itself.
<br>
<p>Andrew Burns
<br>
Lockheed Martin
<br>
Software Engineer
<br>
410-306-0409
<br>
ARL DSRC
<br>
andrew.j.burns2_at_[hidden]
<br>
andrew.j.burns35.ctr_at_[hidden]
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Sunday, February 01, 2015 11:54 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] use accept/connect to merge a new intra-comm
<br>
<p>Which OMPI version?
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Jan 25, 2015, at 5:41 AM, haozi &lt;yidanyiji_at_[hidden]&gt; wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi guys.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am interested in an example from OpenMPI, as  attachment: singleton_client_server.c.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So, I wrote another example. And some error happened.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My example includes two servers and one client. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First, server1 runs. Second, client runs. server1 and client merge an new intra-comm. Next, server2 runs. server2 open a
<br>
port, server1 and client want to connect server2. At the moment, some error happen. client and server2 block, and server1 has errors
<br>
as following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[datanode-2:06824] [[53818,0],0]:route_callback tried routing message from [[53818,1],0] to [[53822,1],0]:16, can't find
<br>
route
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0] func:/usr/lib/libopen-pal.so.0(opal_backtrace_print+0x30) [0xb769fbc0]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] func:/usr/lib/openmpi/lib/openmpi/mca_rml_oob.so(+0x1bfd) [0xb748fbfd]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x6cfa) [0xb7484cfa]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] func:/usr/lib/openmpi/lib/openmpi/mca_oob_tcp.so(+0x81c2) [0xb74861c2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] func:/usr/lib/libopen-pal.so.0(+0x1aca4) [0xb7688ca4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] func:/usr/lib/libopen-pal.so.0(opal_event_loop+0x25) [0xb7688ea5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] func:/usr/lib/libopen-pal.so.0(opal_event_dispatch+0x1b) [0xb7688ecb]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[7] func:mpiexec() [0x804ac0a]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[8] func:mpiexec() [0x8049f4f]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[9] func:/lib/i386-linux-gnu/libc.so.6(__libc_start_main+0xf3) [0xb74c14d3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[10] func:mpiexec() [0x8049ea1] 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My code is attached.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;client.c&gt;&lt;server1.c&gt;&lt;server2.c&gt;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26233.php">http://www.open-mpi.org/community/lists/users/2015/01/26233.php</a>
<br>
<p><p><p>Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26255/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26256.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26254.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26253.php">Ralph Castain: "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26260.php">haozi : "Re: [OMPI users] use accept/connect to merge a new intra-comm"</a>
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
