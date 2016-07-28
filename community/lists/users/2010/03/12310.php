<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 20:17:02 2010" -->
<!-- isoreceived="20100311011702" -->
<!-- sent="Wed, 10 Mar 2010 17:18:53 -0800" -->
<!-- isosent="20100311011853" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B9844FD.9070609_at_oracle.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B982286.8000204_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 20:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; The redundant calculations of overlap points on neighbor subdomains
</span><br>
<span class="quotelev1">&gt; in general cannot be avoided.
</span><br>
<span class="quotelev1">&gt; Exchanging the overlap data across neighbor subdomain processes
</span><br>
<span class="quotelev1">&gt; cannot be avoided either.
</span><br>
<span class="quotelev1">&gt; However, **full overlap slices** are exchanged after each computational
</span><br>
<span class="quotelev1">&gt; step (in our case here a time step).
</span><br>
<span class="quotelev1">&gt; It is not a point-by-point exchange as you suggested.
</span><br>
<span class="quotelev1">&gt; Overlap exchange does limit the usefulness/efficiency
</span><br>
<span class="quotelev1">&gt; of using too many subdomains (e.g. if your overlap-to-useful-data
</span><br>
<span class="quotelev1">&gt; ratio gets close to 100%).
</span><br>
<span class="quotelev1">&gt; However, is not as detrimental as you imagined based on your 
</span><br>
<span class="quotelev1">&gt; point-by-point exchange conjecture.
</span><br>
<span class="quotelev1">&gt; If your domain is 100x100x100 and you split in subdomain slices
</span><br>
<span class="quotelev1">&gt; across 5 processes, with a 1-point overlap (on each side)
</span><br>
<span class="quotelev1">&gt; you will have a 2x5/100 = 10% waste due to overlap calculations
</span><br>
<span class="quotelev1">&gt; (plus the MPI communication cost/time),
</span><br>
<span class="quotelev1">&gt; but your problem is still being solved in (almost) 1/5 of the time
</span><br>
<span class="quotelev1">&gt; it would take in serial mode.
</span><br>
<p>I don't understand what &quot;waste&quot; or &quot;redundant calculations&quot; you're 
<br>
referring to here.  Let's say each cell is updated based on itself and 
<br>
neighboring values.  Each cell has a unique &quot;owner&quot; who computes the 
<br>
updated value.  That value is shared with neighbors if the cell is near 
<br>
the subdomain surface.  So, there is a communication cost, but typically 
<br>
each new value is computed by only one process.
<br>
<p>E.g., say we have (in this extreme example) four values in a ring to be 
<br>
distributed among two processes.  So, P0 owns values 1 and 2 and P1 owns 
<br>
values 3 and 4.  In each iteration, boundary values are communicated.  
<br>
In this particular, extreme example, that means that each process will 
<br>
have all values.  But then each process only updates/computes the values 
<br>
it owns.  There is, to be sure, a communication and synchronization 
<br>
cost;  but each value is computed by only one process.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12309.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12306.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Reply:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
