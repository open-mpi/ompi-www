<?
$subject_val = "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 29 05:33:17 2008" -->
<!-- isoreceived="20081229103317" -->
<!-- sent="Mon, 29 Dec 2008 10:32:00 +0000" -->
<!-- isosent="20081229103200" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI, transfer data from multiple sources to one destination" -->
<!-- id="4958A720.4060902_at_swansea.ac.uk" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BLU149-W170BC60F18C4C2E0A14AE3CBE60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI, transfer data from multiple sources to one destination<br>
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-29 05:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7615.php">Sangamesh B: "[OMPI users] HP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>In reply to:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7633.php">Eugene Loh: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to transfer data from multiple sources to one destination.
</span><br>
[...]
<br>
<p>Probably it is not the best solution, but what I did was the following:
<br>
<p>a) the receiver listen for transmitters ready to send data with 
<br>
MPI_IRECV. The message overwrites a logical array, which is initialised 
<br>
to false. If some transmitter is ready, then the corresponding entry in 
<br>
the array is updated to true
<br>
b) when ready, a transmitter send a true (with MPI_SEND) to the receiver 
<br>
and open a communication channel for the data, with another call to MPI_SEND
<br>
c) after having checked for availability of all the transmitters, the 
<br>
receiver cycles over the transmitters that are ready to communicate 
<br>
(entry of the logical array equal to true) and open a communication 
<br>
channel in blocking mode (MPI_RECV) with each of them, in turn
<br>
d) the transmitter reinitialise the logical array to false and goes back 
<br>
to (a) above
<br>
<p>This implementation assumes that you do not need the data in any 
<br>
particular order.
<br>
<p>Hope it works for you.
<br>
<p>Biagio
<br>
<p><pre>
-- 
=========================================================
Dr. Biagio Lucini				
Department of Physics, Swansea University
Singleton Park, SA2 8PP Swansea (UK)
Tel. +44 (0)1792 602284
=========================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7615.php">Sangamesh B: "[OMPI users] HP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>In reply to:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7633.php">Eugene Loh: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
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
