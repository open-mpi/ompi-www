<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 14:38:24 2007" -->
<!-- isoreceived="20070327183824" -->
<!-- sent="Tue, 27 Mar 2007 14:38:20 -0400" -->
<!-- isosent="20070327183820" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI 1.2 and GM" -->
<!-- id="20070327183820.GH12441_at_serac.cold-front.ath.cx" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56DB3488-54E9-42B6-A46B-F812FB4D8F6C_at_cs.utk.edu" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 14:38:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2935.php">Bala: "[OMPI users] OpenMPI run with the  SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>In reply to:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the response, I was hoping I'd just messed up something simple.
<br>
Your advice took care of my issues.
<br>
<p><p>On 27/03/07 14:15 -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Justin,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no GM MTL. Therefore, the first mpirun allow the use of  
</span><br>
<span class="quotelev1">&gt; every available BTL, while the second one don't allow intra-node  
</span><br>
<span class="quotelev1">&gt; communications or self. The correct mpirun command line should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --mca btl gm,self ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Justin Bronder
Advanced Computing Research Lab
University of Maine, Orono
20 Godfrey Dr
Orono, ME 04473
www.clusters.umaine.edu
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2935.php">Bala: "[OMPI users] OpenMPI run with the  SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>In reply to:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
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
