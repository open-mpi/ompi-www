<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 10:52:59 2005" -->
<!-- isoreceived="20051031155259" -->
<!-- sent="Mon, 31 Oct 2005 07:50:11 -0800" -->
<!-- isosent="20051031155011" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="[O-MPI users] Infiniband performance problems (mvapi)" -->
<!-- id="43663D33.3060207_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 10:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0247.php">Mike Houston: "[O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Maybe reply:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When only sending a few messages, we get reasonably good IB performance, 
<br>
~500MB/s (MVAPICH is 850MB/s).  However, if I crank the number of 
<br>
messages up, we drop to 3MB/s(!!!).  This is with the OSU NBCL 
<br>
mpi_bandwidth test.  We are running Mellanox IB Gold 1.8 with 3.3.3 
<br>
firmware on PCI-X (Couger) boards.  Everything works with MVAPICH, but 
<br>
we really need the thread support in OpenMPI.
<br>
<p>Ideas?  I noticed there are a plethora of runtime options configurable 
<br>
for mvapi.  Do I need to tweak these to get performacne up?
<br>
<p>Thanks!
<br>
<p>-Mike
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Previous message:</strong> <a href="0247.php">Mike Houston: "[O-MPI users] TCP problems with 1.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0252.php">Galen M. Shipman: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Maybe reply:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0254.php">Tim S. Woodall: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
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
