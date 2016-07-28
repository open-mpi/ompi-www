<?
$subject_val = "[OMPI users] Very slow MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 11:02:44 2012" -->
<!-- isoreceived="20120229160244" -->
<!-- sent="Wed, 29 Feb 2012 17:01:36 +0100" -->
<!-- isosent="20120229160136" -->
<!-- name="Pinero, Pedro_jose" -->
<!-- email="Pedro_jose.Pinero_at_[hidden]" -->
<!-- subject="[OMPI users] Very slow MPI_GATHER" -->
<!-- id="2584DBFDF8544E4B85B0E40F35707F7502354E83_at_hnomb01.corp.atmel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Very slow MPI_GATHER<br>
<strong>From:</strong> Pinero, Pedro_jose (<em>Pedro_jose.Pinero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 11:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18598.php">Yiguang Yan: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18606.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18606.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18611.php">Jingcha Joba: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18631.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I am using OMPI v.1.5.5 to communicate 200 Processes in a 2-Computers
<br>
cluster connected though Ethernet, obtaining a very poor performance. I
<br>
have measured each operation time and I haver realised that the
<br>
MPI_Gather operation takes about 1 second in each synchronization (only
<br>
an integer is send in each case). Is this time range normal or I have a
<br>
synchronization problem?  Is there any way to improve this performance?
<br>
<p>&nbsp;
<br>
<p>Thank you for your help in advance
<br>
<p>&nbsp;
<br>
<p>Pedro
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18600.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18598.php">Yiguang Yan: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18606.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18606.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18611.php">Jingcha Joba: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18631.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
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
