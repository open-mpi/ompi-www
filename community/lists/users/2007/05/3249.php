<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 05:19:06 2007" -->
<!-- isoreceived="20070512091906" -->
<!-- sent="Sat, 12 May 2007 11:25:12 +0200" -->
<!-- isosent="20070512092512" -->
<!-- name="Sefa Arslan" -->
<!-- email="sefa_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_rank : use as function arguments, or find it again every time" -->
<!-- id="464587F8.1080802_at_higgs.gen.tr" -->
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
<strong>From:</strong> Sefa Arslan (<em>sefa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-12 05:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3250.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3248.php">anyi li: "[OMPI users] errors in stdin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Reply:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I need to use rank of the mpi processes in my sub functions ( c 
<br>
language). which one has more cost?;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;creating a new variable&amp; and finding the rank in each sub function by:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int mpi_rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;mpi_rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;or finding the rank in main function once, and every time sending 
<br>
this information to the    functions in function arguments like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;foo(a,b,c,mpi_rank);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3250.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3248.php">anyi li: "[OMPI users] errors in stdin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>Reply:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
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
