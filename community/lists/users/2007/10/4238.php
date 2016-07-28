<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 17:43:45 2007" -->
<!-- isoreceived="20071017214345" -->
<!-- sent="Wed, 17 Oct 2007 17:43:14 -0400" -->
<!-- isosent="20071017214314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] IB latency on Mellanox ConnectX hardware" -->
<!-- id="E14A0C7B-5B1F-4E5E-89EB-8A4B6CB807C2_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 17:43:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4239.php">Neeraj Chourasia: "[OMPI users] Compile test programs"</a>
<li><strong>Previous message:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>Reply:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Several users have noticed poor latency with Open MPI when using the  
<br>
new Mellanox ConnectX HCA hardware.  Open MPI was getting about 1.9us  
<br>
latency with 0 byte ping-pong benchmarks (e.g., NetPIPE or  
<br>
osu_latency).  This has been fixed in OMPI v1.2.4.
<br>
<p>Short version:
<br>
--------------
<br>
<p>Open MPI v1.2.4 (and newer) will get around 1.5us latency with 0 byte  
<br>
ping-pong benchmarks on Mellanox ConnectX HCAs.  Prior versions of  
<br>
Open MPI can also achieve this low latency by setting the  
<br>
btl_openib_use_eager_rdma MCA parameter to 1.
<br>
<p>Longer version:
<br>
---------------
<br>
<p>Until OMPI v1.2.4, Open MPI did not include specific configuration  
<br>
information for ConnectX hardware, which forced Open MPI to choose  
<br>
the conservative/safe configuration of not using RDMA for short  
<br>
messages (using send/receive semantics instead).  This increases  
<br>
point-to-point latency in benchmarks.
<br>
<p>OMPI v1.2.4 (and newer) includes the relevant configuration  
<br>
information that enables short message RDMA by default on Mellanox  
<br>
ConnectX hardware.  This significantly improves Open MPI's latency on  
<br>
popular MPI benchmark applications.
<br>
<p>The same performance can be achieved on prior versions of Open MPI by  
<br>
setting the btl_openib_use_eager_rdma MCA parameter to 1.  The main  
<br>
difference between v1.2.4 and prior versions is that the prior  
<br>
versions do not set this MCA parameter value by default for ConnectX  
<br>
hardware (because ConnectX did not exist when prior versions of Open  
<br>
MPI were released).
<br>
<p>This information is also now described on the FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx">http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx</a>- 
<br>
poor-latency
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4239.php">Neeraj Chourasia: "[OMPI users] Compile test programs"</a>
<li><strong>Previous message:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
<li><strong>Reply:</strong> <a href="4242.php">Gleb Natapov: "Re: [OMPI users] IB latency on Mellanox ConnectX hardware"</a>
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
