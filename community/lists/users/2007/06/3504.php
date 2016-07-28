<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 14:24:34 2007" -->
<!-- isoreceived="20070619182434" -->
<!-- sent="Tue, 19 Jun 2007 11:24:24 -0700" -->
<!-- isosent="20070619182424" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="A39F5E5E-DDF3-44D1-95E8-5EA12CCC9866_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="091919A4-98AA-4CFC-8B33-FC22922674B4_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 14:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2007, at 10:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;  From the looks of the patch, it looks like you just want Open MPI to
</span><br>
<span class="quotelev1">&gt; restrict itself to a specific range of ports, right?  If that's the
</span><br>
<span class="quotelev1">&gt; case, we'd probably do this slightly differently (with MCA parameters
</span><br>
<span class="quotelev1">&gt; -- we certainly wouldn't want to force everyone to use a hard-coded   
</span><br>
<span class="quotelev1">&gt; port range).  Brian's also re-working some TCP and OOB issues on a /
</span><br>
<span class="quotelev1">&gt; tmp branch right now; we'd want to wait until he's done before
</span><br>
<span class="quotelev1">&gt; applying a similar patch.
</span><br>
<p>While limiting the ports used by Open MPI might be a good idea, I'm  
<br>
skeptical about it. For at least 2 reasons:
<br>
<p>1. I don't believe the OS to release the binding when we close the  
<br>
socket. As an example on Linux the kernel sockets are release at a  
<br>
later moment. That means the socket might be still in use for the  
<br>
next run.
<br>
<p>2. Multiple processes on the same node will try to bind the ports in  
<br>
same order. Is this really safe ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>

<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3504/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3505.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3507.php">Jeff Squyres: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3510.php">Gleb Natapov: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
