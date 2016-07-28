<?
$subject_val = "Re: [OMPI users] mpi job is blocked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 03:43:13 2012" -->
<!-- isoreceived="20120925074313" -->
<!-- sent="Tue, 25 Sep 2012 09:43:09 +0200" -->
<!-- isosent="20120925074309" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi job is blocked" -->
<!-- id="CAKbzMGfL0tXDYU82HksoHrwh34CbpwbKmrKwC5DcDBT7A7wTxw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6523f80a.2a47.139fc15eb87.Coremail.codemonkee_at_163.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 03:43:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20289.php">Richard: "[OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20289.php">Richard: "[OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Richard
<br>
<p>When a collective call hangs, this usually means that one (or more)
<br>
processes did not reach this command.
<br>
Are you sure that all processes reach the allreduce statement?
<br>
<p>If something like this happens to me, i insert print statements just
<br>
before the MPI-call so i can see which processes made
<br>
it to this point and which ones did not.
<br>
<p>Hope this helps a bit
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Tue, Sep 25, 2012 at 8:20 AM, Richard &lt;codemonkee_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have 3 computers with the same Linux system. I have setup the mpi cluster
</span><br>
<span class="quotelev1">&gt; based on ssh connection.
</span><br>
<span class="quotelev1">&gt; I have tested a very simple mpi program, it works on the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To make my story clear, I name the three computer as A, B and C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) If I run the job with 2 processes on A and B, it works.
</span><br>
<span class="quotelev1">&gt; 2) if I run the job with 3 processes on A, B and C, it is blocked.
</span><br>
<span class="quotelev1">&gt; 3) if I run the job with 2 processes on A and C, it works.
</span><br>
<span class="quotelev1">&gt; 4) If I run the job with all the 3 processes on A, it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using gdb I found the line at which it is blocked, it is here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #7  0x00002ad8a283043e in PMPI_Allreduce (sendbuf=0x7fff09c7c578,
</span><br>
<span class="quotelev1">&gt; recvbuf=0x7fff09c7c570, count=1, datatype=0x627180, op=0x627780,
</span><br>
<span class="quotelev1">&gt; comm=0x627380)
</span><br>
<span class="quotelev1">&gt;     at pallreduce.c:105
</span><br>
<span class="quotelev1">&gt; 105         err = comm-&gt;c_coll.coll_allreduce(sendbuf, recvbuf, count,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that there is a communication problem between some computers. But
</span><br>
<span class="quotelev1">&gt; the above series of test cannot tell me what
</span><br>
<span class="quotelev1">&gt; exactly it is. Can anyone help me? thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20289.php">Richard: "[OMPI users] mpi job is blocked"</a>
<li><strong>In reply to:</strong> <a href="20289.php">Richard: "[OMPI users] mpi job is blocked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20291.php">Jeff Squyres: "Re: [OMPI users] mpi job is blocked"</a>
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
