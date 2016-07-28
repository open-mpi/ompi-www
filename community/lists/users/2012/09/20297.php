<?
$subject_val = "Re: [OMPI users] mpi job is blocked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 05:54:58 2012" -->
<!-- isoreceived="20120925095458" -->
<!-- sent="Tue, 25 Sep 2012 11:54:53 +0200" -->
<!-- isosent="20120925095453" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi job is blocked" -->
<!-- id="7D9CF932-D026-4F00-A070-B1FE56A76036_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="234411af.3ffb.139fcaedd0d.Coremail.codemonkee_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi job is blocked<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 05:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20298.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20296.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20296.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20298.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20298.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20299.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hav you disabled firewalls on your nodes (e.g., iptables)?
<br>
<p>On Sep 25, 2012, at 11:08 AM, Richard wrote:
<br>
<p><span class="quotelev1">&gt; sometimes the following message jumped out when I run the ring program, but not always.
</span><br>
<span class="quotelev1">&gt; I do not know this ip address  192.168.122.1, it is not in my list of hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [[53402,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.122.1 failed: Connection refused (111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 2012-09-25 16:53:50,Richard &lt;codemonkee_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if I tried the ring program, the first round of pass is fine, but the second round is blocked at some node.
</span><br>
<span class="quotelev1">&gt; here is the message printed out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (3 processes! in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; rank 1, message 10,start===========
</span><br>
<span class="quotelev1">&gt; rank 1, message 10,end-------------
</span><br>
<span class="quotelev1">&gt; rank 2, message 10,start===========
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; rank 0, message 9,start===========
</span><br>
<span class="quotelev1">&gt; rank 0, message 9,end-------------
</span><br>
<span class="quotelev1">&gt; rank 2, message 10,end-------------
</span><br>
<span class="quotelev1">&gt; rank 1, message 9,start===========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have added some printf statements in the ring_c.c as follows:
</span><br>
<span class="quotelev1">&gt;  60         printf(&quot;rank %d, message %d,start===========\n&quot;, rank, message);
</span><br>
<span class="quotelev1">&gt;  61         MPI_Send(&amp;message, 1, MPI_INT, ! next, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  62         printf(&quot;rank %d, message %d,end-------------\n&quot;, rank, message);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 2012-09-25 16:30:01,Richard &lt;codemonkee_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt; thanks for your suggestion and you are right. if I use the ring example, the same happened.
</span><br>
<span class="quotelev1">&gt; I have put a printf statement, it seems that all the three processed have reached the line 
</span><br>
<span class="quotelev1">&gt; calling &quot;PMPI_Allreduce&quot;, any further suggestion?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 12
</span><br>
<span class="quotelev1">&gt; Date: Tue, 25 Sep 2012 09:43:09 +0200
</span><br>
<span class="quotelev1">&gt; From: jody &lt;
</span><br>
<span class="quotelev1">&gt; jody.xha_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpi job is blocked
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;
</span><br>
<span class="quotelev1">&gt; CAKbzMGfL0tXDYU82HksoHrwh34CbpwbKmrKwC5DcDBT7A7wTxw_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Richard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When a collective call hangs, this usually means that one (or more)
</span><br>
<span class="quotelev1">&gt; processes did not reach this command.
</span><br>
<span class="quotelev1">&gt; Are you sure that all processes reach the allreduce statement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If something like this happens to me, i insert print statements just
</span><br>
<span class="quotelev1">&gt; before the MPI-call so i can see which processes made
</span><br>
<span class="quotelev1">&gt; it to this point and which ones did not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps a bit
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 25, 2012 at 8:20 AM, Richard &lt;
</span><br>
<span class="quotelev1">&gt; codemonkee_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have 3 computers with the same Linux system. I have setup the mpi cluster
</span><br>
<span class="quotelev2">&gt; &gt; based on ssh connection.
</span><br>
<span class="quotelev2">&gt; &gt; I have tested a very simple mpi program, it works on the cluster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To make my story clear, I name the three computer as A, B and C.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) If I run the job with 2 processes on A and B, it works.
</span><br>
<span class="quotelev2">&gt; &gt; 2) if I run the job with 3 processes on A, B and C, it is blocked.
</span><br>
<span class="quotelev2">&gt; &gt; 3) if I run the job with 2 processes on A and C, it works.
</span><br>
<span class="quotelev2">&gt; &gt; 4) If I run the job with all the 3 processes on A, it works.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Using gdb I found the line at which it is blocked, it is here
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00002ad8a283043e in PMPI_Allreduce (sendbuf=0x7fff09c7c578,
</span><br>
<span class="quotelev2">&gt; &gt; recvbuf=0x7fff09c7c570, count=1, datatype=0x627180, op=0x627780,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x627380)
</span><br>
<span class="quotelev2">&gt; &gt;     at pallreduce.c:105
</span><br>
<span class="quotelev2">&gt; &gt; 105         err = comm-&gt;c_coll.coll_allreduce(sendbuf, recvbuf, count,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that there is a communication problem between some computers. But
</span><br>
<span class="quotelev2">&gt; &gt; the above series of test cannot tell me what
</span><br>
<span class="quotelev2">&gt; &gt; exactly it is. Can anyone help me? thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Richard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20298.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20296.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20296.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20298.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20298.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20299.php">Richard : "Re: [OMPI users] mpi job is blocked"</a>
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
