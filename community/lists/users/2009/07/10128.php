<?
$subject_val = "[OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 13:42:13 2009" -->
<!-- isoreceived="20090729174213" -->
<!-- sent="Wed, 29 Jul 2009 13:41:59 -0400" -->
<!-- isosent="20090729174159" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] strange IMB runs" -->
<!-- id="e75d22a90907291041i1f092711p88bcafd6c30dc8ca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] strange IMB runs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 13:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10127.php">Ricardo Fonseca: "Re: [OMPI users] users Digest, Vol 1302, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I understand what's actually happened here.  I'm running
<br>
IMB on an HP superdome, just comparing the PingPong benchmark
<br>
<p>HP-MPI v2.3
<br>
Max ~ 700-800MB/sec
<br>
<p>OpenMPI v1.3
<br>
-mca btl self,sm - Max ~ 125-150MB/sec
<br>
-mca btl self,tcp - Max ~ 500-550MB/sec
<br>
<p>Is this behavior expected?  Are there any tunables to get the OpenMPI
<br>
sockets up near HP-MPI?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10127.php">Ricardo Fonseca: "Re: [OMPI users] users Digest, Vol 1302, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="10129.php">Dorian Krause: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10345.php">Eugene Loh: "Re: [OMPI users] strange IMB runs"</a>
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
