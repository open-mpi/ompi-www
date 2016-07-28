<?
$subject_val = "[OMPI users] mpi job is blocked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 02:21:05 2012" -->
<!-- isoreceived="20120925062105" -->
<!-- sent="Tue, 25 Sep 2012 14:20:58 +0800 (CST)" -->
<!-- isosent="20120925062058" -->
<!-- name="Richard" -->
<!-- email="codemonkee_at_[hidden]" -->
<!-- subject="[OMPI users] mpi job is blocked" -->
<!-- id="6523f80a.2a47.139fc15eb87.Coremail.codemonkee_at_163.com" -->
<!-- charset="GBK" -->
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
<strong>Subject:</strong> [OMPI users] mpi job is blocked<br>
<strong>From:</strong> Richard (<em>codemonkee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 02:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20288.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Maybe reply:</strong> <a href="20294.php">Richard: "Re: [OMPI users] mpi job is blocked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have 3 computers with the same Linux system. I have setup the mpi cluster based on ssh connection.
<br>
I have tested a very simple mpi program, it works on the cluster.
<br>
<p><p><p>To make my story clear, I name the three computer as A, B and C.
<br>
<p><p>1) If I run the job with 2 processes on A and B, it works.
<br>
2) if I run the job with 3 processes on A, B and C, it is blocked.
<br>
3) if I run the job with 2 processes on A and C, it works.
<br>
4) If I run the job with all the 3 processes on A, it works.
<br>
<p><p>Using gdb I found the line at which it is blocked, it is here
<br>
<p><p>#7  0x00002ad8a283043e in PMPI_Allreduce (sendbuf=0x7fff09c7c578, recvbuf=0x7fff09c7c570, count=1, datatype=0x627180, op=0x627780, comm=0x627380)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pallreduce.c:105
<br>
105         err = comm-&gt;c_coll.coll_allreduce(sendbuf, recvbuf, count,
<br>
<p><p>It seems that there is a communication problem between some computers. But the above series of test cannot tell me what 
<br>
exactly it is. Can anyone help me? thanks.
<br>
<p><p>Richard
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20289/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Previous message:</strong> <a href="20288.php">Ralph Castain: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Reply:</strong> <a href="20290.php">jody: "Re: [OMPI users] mpi job is blocked"</a>
<li><strong>Maybe reply:</strong> <a href="20294.php">Richard: "Re: [OMPI users] mpi job is blocked"</a>
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
