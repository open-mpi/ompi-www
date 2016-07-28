<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 23 18:31:48 2007" -->
<!-- isoreceived="20070123233148" -->
<!-- sent="Tue, 23 Jan 2007 15:31:39 -0800" -->
<!-- isosent="20070123233139" -->
<!-- name="Geoff Galitz" -->
<!-- email="geoff_at_[hidden]" -->
<!-- subject="[OMPI users] nodes are oversubscribed in 1.1.1" -->
<!-- id="B94B5850-06A7-47DA-A526-84731E108F43_at_galitz.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Geoff Galitz (<em>geoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-23 18:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On the following system:
<br>
<p>OpenMPI 1.1.1
<br>
SGE 6.0 (with tight integration)
<br>
Scientific Linux 4.3
<br>
Dual Dual-Core Opterons
<br>
<p><p>MPI jobs are oversubscribing to the nodes.  No matter where jobs are  
<br>
launched by the scheduler, they always stack up on the first node  
<br>
(node00) and continue to stack even though the system load exceeds 6  
<br>
(on a 4 processor box).  Eeach node is defined as 4 slots with 4 max  
<br>
slots.  The MPI jobs launch via &quot;mpirun -np (some-number-of- 
<br>
processors)&quot; from within the scheduler.
<br>
<p>It seems to me that MPI is not detecting that the nodes are  
<br>
overloaded and that due to the way the job slots are defined and how  
<br>
mpirun is being called.  If I read the documentation correctly, a  
<br>
single mpirun run consumes one job slot no matter the number of  
<br>
processes which are launched.  We can chagne the number of job slots,  
<br>
but then we expect to waste processors since only one mpirun job will  
<br>
run on any node, even if the job is only a two processor job.
<br>
<p>Can someone enlighten me?
<br>
<p>-geoff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2527.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2530.php">Pak Lui: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
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
