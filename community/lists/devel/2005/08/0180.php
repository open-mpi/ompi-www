<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 12:02:55 2005" -->
<!-- isoreceived="20050817170255" -->
<!-- sent="Wed, 17 Aug 2005 13:02:53 -0400" -->
<!-- isosent="20050817170253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  ompi_comm_size / ompi_comm_remote_size" -->
<!-- id="a45a273034332ba14a5c7e29a0a6937b_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43035BF6.3090405_at_hlrs.de" -->
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
<strong>Date:</strong> 2005-08-17 12:02:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0181.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gotcha.  Thanks -- I'll do a quick run-through of the code and ensure 
<br>
that we only use ompi_comm_remote_site() in the appropriate places.
<br>
<p><p>On Aug 17, 2005, at 11:47 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as far as I know nothing has changed in the communicator setup since
</span><br>
<span class="quotelev1">&gt; quite a while, the remote group is still set to the local group for
</span><br>
<span class="quotelev1">&gt; intra-communicators. However, ompi_comm_remote_size has a check whether
</span><br>
<span class="quotelev1">&gt; we have an inter-comm, and returns else zero (which is in theory the
</span><br>
<span class="quotelev1">&gt; correct answer)....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I thought that we set the remote group equal to the local group in
</span><br>
<span class="quotelev2">&gt;&gt; communicator setup such that ompi_comm_remote_size() was *always* safe
</span><br>
<span class="quotelev2">&gt;&gt; to call...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This no longer seems to be true -- while debugging the IMB (previously
</span><br>
<span class="quotelev2">&gt;&gt; the pallas benchmarks), I found that calling
</span><br>
<span class="quotelev2">&gt;&gt; ompi_comm_remote_size(comm) would return 0 and ompi_comm_size(comm)
</span><br>
<span class="quotelev2">&gt;&gt; would return 2 for a simple intracommunicator.  This was with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun -np 2 IMB-MPI1 Reduce
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has something changed in communicator setup?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; Dr.-Ing. Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Clusters and Distributed Units
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; University of Stuttgart
</span><br>
<span class="quotelev1">&gt; Tel: +49 711 685 8039                <a href="http://www.hlrs.de/people/gabriel">http://www.hlrs.de/people/gabriel</a>
</span><br>
<span class="quotelev1">&gt; Fax: +49 711 678 7626                e-mail:gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="0181.php">Tim S. Woodall: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0178.php">Edgar Gabriel: "Re:  ompi_comm_size / ompi_comm_remote_size"</a>
<!-- nextthread="start" -->
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
