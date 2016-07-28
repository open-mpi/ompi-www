<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 10:36:56 2005" -->
<!-- isoreceived="20050817153656" -->
<!-- sent="Wed, 17 Aug 2005 11:36:54 -0400" -->
<!-- isosent="20050817153654" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="ompi_comm_size / ompi_comm_remote_size" -->
<!-- id="0d39d66e05f2cccec8810791620f34a3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-17 10:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Previous message:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Reply:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought that we set the remote group equal to the local group in 
<br>
communicator setup such that ompi_comm_remote_size() was *always* safe 
<br>
to call...?
<br>
<p>This no longer seems to be true -- while debugging the IMB (previously 
<br>
the pallas benchmarks), I found that calling 
<br>
ompi_comm_remote_size(comm) would return 0 and ompi_comm_size(comm) 
<br>
would return 2 for a simple intracommunicator.  This was with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 IMB-MPI1 Reduce
<br>
<p>Has something changed in communicator setup?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Previous message:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Reply:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
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
