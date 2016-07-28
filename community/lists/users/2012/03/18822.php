<?
$subject_val = "[OMPI users] MPI_Waitall hangs and querying";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 11:14:20 2012" -->
<!-- isoreceived="20120321151420" -->
<!-- sent="Wed, 21 Mar 2012 11:14:13 -0400" -->
<!-- isosent="20120321151413" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Waitall hangs and querying" -->
<!-- id="CE131BFE-BE05-45F0-88EE-2FD88BA6376B_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Waitall hangs and querying<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 11:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18823.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Previous message:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18823.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Reply:</strong> <a href="18823.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a users code that appears to be hanging some times on MPI_Waitall(),  stack trace from padb below.  It is on qlogic IB using the psm mtl.
<br>
Without knowing what requests go to which rank, how can I check that this code didn't just get its self into a deadlock?  Is there a way to get a reable list of every ranks posted sends?  And then query an wiating MPI_Waitall() of a running job to get what rends/recvs it is waiting on?
<br>
<p>Thanks!
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18823.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Previous message:</strong> <a href="18821.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18823.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Reply:</strong> <a href="18823.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
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
