<?
$subject_val = "Re: [OMPI users] mpi job is blocked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 03:52:38 2012" -->
<!-- isoreceived="20120925075238" -->
<!-- sent="Tue, 25 Sep 2012 09:52:34 +0200" -->
<!-- isosent="20120925075234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi job is blocked" -->
<!-- id="35475E15-61B0-489B-948B-33AA25DF7516_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGfL0tXDYU82HksoHrwh34CbpwbKmrKwC5DcDBT7A7wTxw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-09-25 03:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20292.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20294.php">Richard: "Re: [OMPI users] mpi job is blocked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>Additionally, if you're trying to debug your machines/network/setup, you might want to use something simpler, like the ring programs in the examples/ directory.
<br>
<p><p>On Sep 25, 2012, at 9:43 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Richard
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
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 25, 2012 at 8:20 AM, Richard &lt;codemonkee_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have 3 computers with the same Linux system. I have setup the mpi cluster
</span><br>
<span class="quotelev2">&gt;&gt; based on ssh connection.
</span><br>
<span class="quotelev2">&gt;&gt; I have tested a very simple mpi program, it works on the cluster.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To make my story clear, I name the three computer as A, B and C.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) If I run the job with 2 processes on A and B, it works.
</span><br>
<span class="quotelev2">&gt;&gt; 2) if I run the job with 3 processes on A, B and C, it is blocked.
</span><br>
<span class="quotelev2">&gt;&gt; 3) if I run the job with 2 processes on A and C, it works.
</span><br>
<span class="quotelev2">&gt;&gt; 4) If I run the job with all the 3 processes on A, it works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Using gdb I found the line at which it is blocked, it is here
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00002ad8a283043e in PMPI_Allreduce (sendbuf=0x7fff09c7c578,
</span><br>
<span class="quotelev2">&gt;&gt; recvbuf=0x7fff09c7c570, count=1, datatype=0x627180, op=0x627780,
</span><br>
<span class="quotelev2">&gt;&gt; comm=0x627380)
</span><br>
<span class="quotelev2">&gt;&gt;    at pallreduce.c:105
</span><br>
<span class="quotelev2">&gt;&gt; 105         err = comm-&gt;c_coll.coll_allreduce(sendbuf, recvbuf, count,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems that there is a communication problem between some computers. But
</span><br>
<span class="quotelev2">&gt;&gt; the above series of test cannot tell me what
</span><br>
<span class="quotelev2">&gt;&gt; exactly it is. Can anyone help me? thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Richard
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
<li><strong>Next message:</strong> <a href="20292.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20294.php">Richard: "Re: [OMPI users] mpi job is blocked"</a>
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
