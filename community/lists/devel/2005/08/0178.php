<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 10:47:17 2005" -->
<!-- isoreceived="20050817154717" -->
<!-- sent="Wed, 17 Aug 2005 17:47:02 +0200" -->
<!-- isosent="20050817154702" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re:  ompi_comm_size / ompi_comm_remote_size" -->
<!-- id="43035BF6.3090405_at_hlrs.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0d39d66e05f2cccec8810791620f34a3_at_open-mpi.org" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-17 10:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0177.php">Jeff Squyres: "ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>In reply to:</strong> <a href="0177.php">Jeff Squyres: "ompi_comm_size / ompi_comm_remote_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Jeff Squyres: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Reply:</strong> <a href="0180.php">Jeff Squyres: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>as far as I know nothing has changed in the communicator setup since 
<br>
quite a while, the remote group is still set to the local group for 
<br>
intra-communicators. However, ompi_comm_remote_size has a check whether 
<br>
we have an inter-comm, and returns else zero (which is in theory the 
<br>
correct answer)....
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I thought that we set the remote group equal to the local group in 
</span><br>
<span class="quotelev1">&gt; communicator setup such that ompi_comm_remote_size() was *always* safe 
</span><br>
<span class="quotelev1">&gt; to call...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This no longer seems to be true -- while debugging the IMB (previously 
</span><br>
<span class="quotelev1">&gt; the pallas benchmarks), I found that calling 
</span><br>
<span class="quotelev1">&gt; ompi_comm_remote_size(comm) would return 0 and ompi_comm_size(comm) 
</span><br>
<span class="quotelev1">&gt; would return 2 for a simple intracommunicator.  This was with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	mpirun -np 2 IMB-MPI1 Reduce
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has something changed in communicator setup?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
======================================================================
Dr.-Ing. Edgar Gabriel
Clusters and Distributed Units
High Performance Computing Center Stuttgart (HLRS)
University of Stuttgart
Tel: +49 711 685 8039                <a href="http://www.hlrs.de/people/gabriel">http://www.hlrs.de/people/gabriel</a>
Fax: +49 711 678 7626                e-mail:gabriel_at_[hidden]
======================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0177.php">Jeff Squyres: "ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>In reply to:</strong> <a href="0177.php">Jeff Squyres: "ompi_comm_size / ompi_comm_remote_size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0180.php">Jeff Squyres: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<li><strong>Reply:</strong> <a href="0180.php">Jeff Squyres: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
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
