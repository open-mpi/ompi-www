<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 20:57:04 2010" -->
<!-- isoreceived="20100311015704" -->
<!-- sent="Wed, 10 Mar 2010 20:56:55 -0500" -->
<!-- isosent="20100311015655" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B984DE7.8050201_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B9844FD.9070609_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 20:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
<li><strong>Previous message:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand what &quot;waste&quot; or &quot;redundant calculations&quot; you're 
</span><br>
<span class="quotelev1">&gt; referring to here.  Let's say each cell is updated based on itself and 
</span><br>
<span class="quotelev1">&gt; neighboring values.  Each cell has a unique &quot;owner&quot; who computes the 
</span><br>
<span class="quotelev1">&gt; updated value.  That value is shared with neighbors if the cell is near 
</span><br>
<span class="quotelev1">&gt; the subdomain surface.  So, there is a communication cost, but typically 
</span><br>
<span class="quotelev1">&gt; each new value is computed by only one process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You are right, the overhead is in communication.
<br>
Redundant information (on the overlap), not redundant calculation,
<br>
is the right way to put it.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
<li><strong>Previous message:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12328.php">Cole, Derek E: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
