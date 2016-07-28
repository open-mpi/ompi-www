<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 22:30:30 2012" -->
<!-- isoreceived="20120524023030" -->
<!-- sent="Wed, 23 May 2012 22:30:23 -0400" -->
<!-- isosent="20120524023023" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="4FBD9D3F.50907_at_scinet.utoronto.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FBD90BC.8020503_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 22:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19359.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19357.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19362.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19362.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23 May 9:37PM, Jonathan Dursi wrote:
<br>
<p><span class="quotelev1">&gt; On the other hand, it works everywhere if I pad the rcounts array with
</span><br>
<span class="quotelev1">&gt; an extra valid value (0 or 1, or for that matter 783), or replace the
</span><br>
<span class="quotelev1">&gt; allgatherv with an allgather.
</span><br>
<p>.. and it fails with 7 even where it worked (but succeeds with 8) if I 
<br>
pad rcounts with an extra invalid value which should never be read.
<br>
<p>Should the recvcounts[] parameters test in allgatherv.c loop up to 
<br>
size=ompi_comm_remote_size(comm), as is done in alltoallv.c, rather than 
<br>
ompi_comm_size(comm) ?   That seems to avoid the problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<pre>
-- 
Jonathan Dursi | SciNet, Compute/Calcul Canada | www.SciNetHPC.ca
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19359.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Previous message:</strong> <a href="19357.php">Bennet Fauber: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19362.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19362.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
