<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 11:11:59 2006" -->
<!-- isoreceived="20060718151159" -->
<!-- sent="Tue, 18 Jul 2006 10:11:56 -0500" -->
<!-- isosent="20060718151156" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="20060718151155.GC25594_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAY112-F289A53F288385A1E6AB0009E680_at_phx.gbl" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 11:11:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>In reply to:</strong> <a href="1601.php">Abhishek Agarwal: "[OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 11, 2006 at 12:14:51PM -0400, Abhishek Agarwal wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way of providing a specific port number in MPI_Info when using a 
</span><br>
<span class="quotelev1">&gt; MPI_Open_port command so that clients know which port number to connect.
</span><br>
<p>The other replies have covered this pretty well but if you are
<br>
dead-set on using a tcp port (and not an MPI port) would MPI_Comm_join
<br>
work for you?
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Labs, IL USA                B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Previous message:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>In reply to:</strong> <a href="1601.php">Abhishek Agarwal: "[OMPI users] MPI_Info for MPI_Open_port"</a>
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
