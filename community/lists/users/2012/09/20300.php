<?
$subject_val = "[OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 06:51:56 2012" -->
<!-- isoreceived="20120925105156" -->
<!-- sent="Tue, 25 Sep 2012 18:51:47 +0800 (CST)" -->
<!-- isosent="20120925105147" -->
<!-- name="Richard " -->
<!-- email="codemonkee_at_[hidden]" -->
<!-- subject="[OMPI users] mpi test program &amp;quot;ring&amp;quot; failed: blocked at MPI_Send" -->
<!-- id="74e8615c.48b3.139fd0ddad3.Coremail.codemonkee_at_163.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="7f2a64c5.4767.139fcf76598.Coremail.codemonkee_at_163.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send<br>
<strong>From:</strong> Richard  (<em>codemonkee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 06:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20299.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20299.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have setup a small cluster with 3 nodes, named A, B and C respectively.
<br>
I tested the ring_c.c program in the examples. For debugging purpose,
<br>
I have added some print statements as follows in the original ring_c.c
<br>
<span class="quotelev2">&gt;&gt;  60         printf(&quot;rank %d, message %d,start===========\n&quot;, rank, message);
</span><br>
<span class="quotelev2">&gt;&gt;  61         MPI_Send(&amp;message, 1, MPI_INT, ! next, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  62         printf(&quot;rank %d, message %d,end-------------\n&quot;, rank, message);
</span><br>
I lauched my mpi program as follows:
<br>
$mpirun -np 3 --hostfile myhostfile ./ring
<br>
the content in myhost file is:
<br>
=========
<br>
hostA  slots=1
<br>
hostB slots=1
<br>
hostC slots=1
<br>
============
<br>
I got the follow output:
<br>
==========================
<br>
Process 0 sending 10 to 1, tag 201 (3 processes in ring)
<br>
Process 0 sent to 1
<br>
rank 1, message 10,start===========
<br>
rank 1, message 10,end-------------
<br>
rank 2, message 10,start===========
<br>
Process 0 decremented value: 9
<br>
rank 0, message 9,start===========
<br>
rank 0, message 9,end-------------
<br>
rank 2, message 10,end-------------
<br>
rank 1, message 9,start===========
<br>
=========================
<br>
I assumed there is communication problem between B and C, so I launched the program with 2 processes on B and C.
<br>
the output is as follows:
<br>
===============
<br>
Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
Process 0 sent to 1
<br>
rank 1, message 10,start===========
<br>
rank 1, message 10,end-------------
<br>
Process 0 decremented value: 9
<br>
rank 0, message 9,start===========
<br>
===============
<br>
Again, in the second round of pass, B failed to send message to C. 
<br>
I checked firewall config using chkconfig --list iptables on all the nodes. none of them are set as &quot;on&quot;.
<br>
<p><p>Attached is all the information needed, my openmpi version is 1.6.1.
<br>
<p><p>thanks for your help.
<br>
Richard
<br>
<p><p><p><p>At 2012-09-25 18:27:15,Richard &lt;codemonkee_at_[hidden]&gt; wrote:
<br>
<p>I used &quot;chkconfig --list iptables &quot;,  none of computer is set as &quot;on&quot;.
<br>
<p><p>At 2012-09-25 17:54:53,&quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hav you disabled firewalls on your nodes (e.g., iptables)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sep 25, 2012, at 11:08 AM, Richard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sometimes the following message jumped out when I run the ring program, but not always.
</span><br>
<span class="quotelev2">&gt;&gt; I do not know this ip address  192.168.122.1, it is not in my list of hosts.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [[53402,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.122.1 failed: Connection refused (111
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At 2012-09-25 16:53:50,Richard &lt;codemonkee_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if I tried the ring program, the first round of pass is fine, but the second round is blocked at some node.
</span><br>
<span class="quotelev2">&gt;&gt; here is the message printed out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sending 10 to 1, tag 201 (3 processes! in ring)
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt;&gt; rank 1, message 10,start===========
</span><br>
<span class="quotelev2">&gt;&gt; rank 1, message 10,end-------------
</span><br>
<span class="quotelev2">&gt;&gt; rank 2, message 10,start===========
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt;&gt; rank 0, message 9,start===========
</span><br>
<span class="quotelev2">&gt;&gt; rank 0, message 9,end-------------
</span><br>
<span class="quotelev2">&gt;&gt; rank 2, message 10,end-------------
</span><br>
<span class="quotelev2">&gt;&gt; rank 1, message 9,start===========
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have added some printf statements in the ring_c.c as follows:
</span><br>
<span class="quotelev2">&gt;&gt;  60         printf(&quot;rank %d, message %d,start===========\n&quot;, rank, message);
</span><br>
<span class="quotelev2">&gt;&gt;  61         MPI_Send(&amp;message, 1, MPI_INT, ! next, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  62         printf(&quot;rank %d, message %d,end-------------\n&quot;, rank, message);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At 2012-09-25 16:30:01,Richard &lt;codemonkee_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your suggestion and you are right. if I use the ring example, the same happened.
</span><br>
<span class="quotelev2">&gt;&gt; I have put a printf statement, it seems that all the three processed have reached the line 
</span><br>
<span class="quotelev2">&gt;&gt; calling &quot;PMPI_Allreduce&quot;, any further suggestion?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Richard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 12
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 25 Sep 2012 09:43:09 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: jody &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jody.xha_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mpi job is blocked
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;
</span><br>
<span class="quotelev2">&gt;&gt; CAKbzMGfL0tXDYU82HksoHrwh34CbpwbKmrKwC5DcDBT7A7wTxw_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Richard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When a collective call hangs, this usually means that one (or more)
</span><br>
<span class="quotelev2">&gt;&gt; processes did not reach this command.
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure that all processes reach the allreduce statement?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If something like this happens to me, i insert print statements just
</span><br>
<span class="quotelev2">&gt;&gt; before the MPI-call so i can see which processes made
</span><br>
<span class="quotelev2">&gt;&gt; it to this point and which ones did not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps a bit
</span><br>
<span class="quotelev2">&gt;&gt;   Jody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 25, 2012 at 8:20 AM, Richard &lt;
</span><br>
<span class="quotelev2">&gt;&gt; codemonkee_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have 3 computers with the same Linux system. I have setup the mpi cluster
</span><br>
<span class="quotelev3">&gt;&gt; &gt; based on ssh connection.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have tested a very simple mpi program, it works on the cluster.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To make my story clear, I name the three computer as A, B and C.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1) If I run the job with 2 processes on A and B, it works.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2) if I run the job with 3 processes on A, B and C, it is blocked.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3) if I run the job with 2 processes on A and C, it works.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4) If I run the job with all the 3 processes on A, it works.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Using gdb I found the line at which it is blocked, it is here
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #7  0x00002ad8a283043e in PMPI_Allreduce (sendbuf=0x7fff09c7c578,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; recvbuf=0x7fff09c7c570, count=1, datatype=0x627180, op=0x627780,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; comm=0x627380)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     at pallreduce.c:105
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 105         err = comm-&gt;c_coll.coll_allreduce(sendbuf, recvbuf, count,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It seems that there is a communication problem between some computers. But
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the above series of test cannot tell me what
</span><br>
<span class="quotelev3">&gt;&gt; &gt; exactly it is. Can anyone help me? thanks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Richard
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20300/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20300/trouble.tgz">trouble.tgz</a>
</ul>
<!-- attachment="trouble.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20299.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20299.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
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
