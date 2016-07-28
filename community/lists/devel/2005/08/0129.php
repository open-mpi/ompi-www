<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 14:50:57 2005" -->
<!-- isoreceived="20050810195057" -->
<!-- sent="Wed, 10 Aug 2005 14:50:55 -0500" -->
<!-- isosent="20050810195055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="D026AAAD-BDFE-4EB1-B293-163B31DE3C8B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C016A15_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-10 14:50:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0130.php">Gleb Natapov: "couple of problems in openib mpool."</a>
<li><strong>Previous message:</strong> <a href="0128.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0168.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In Aug 10, 2005, at 5:28 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt; I got the latest code drop of 6791 today morning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have removed .ompi_ignore and .ompi_unignore files from
</span><br>
<span class="quotelev1">&gt; ompi/mca/mpool/mvapi directory. If I don't remove and build, the MPI
</span><br>
<span class="quotelev1">&gt; program fails with signal 11. After removing those hidden files from
</span><br>
<span class="quotelev1">&gt; that directory and building, signal 11 error disappeared.
</span><br>
<p>I'm not sure why those files were still there; I removed them.
<br>
<p>Galen: it looks like we don't have protection for when no mpools are  
<br>
available.  Can you add a check for that somewhere?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI project
{+} <a href="http://www.open-mpi.org">http://www.open-mpi.org</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0130.php">Gleb Natapov: "couple of problems in openib mpool."</a>
<li><strong>Previous message:</strong> <a href="0128.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0168.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
