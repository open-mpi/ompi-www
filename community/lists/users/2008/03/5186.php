<?
$subject_val = "Re: [OMPI users] MPI_Allreduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 10:48:34 2008" -->
<!-- isoreceived="20080313144834" -->
<!-- sent="Thu, 13 Mar 2008 14:48:23 +0000" -->
<!-- isosent="20080313144823" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce()" -->
<!-- id="1205419703.6368.51.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B47186D7-ED2C-4B09-9DB8-F28D4D98197A_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce()<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 10:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5181.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2008-03-12 at 18:05 -0400, Aur&#195;&#169;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt; If you can avoid them it is better to avoid them. However it is always  
</span><br>
<span class="quotelev1">&gt; better to use a MPI_Alltoall than coding your own all to all with  
</span><br>
<span class="quotelev1">&gt; point to point, and in some algorithms you *need* to make a all to all  
</span><br>
<span class="quotelev1">&gt; communication. What you should understand by &quot;avoid all to all&quot; is not  
</span><br>
<span class="quotelev1">&gt; avoid MPI_alltoall, but choose a mathematic algorithm that does not  
</span><br>
<span class="quotelev1">&gt; need all to all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   The algorithmic complexity of AllReduce is the same as AlltoAll.
</span><br>
<p>I can't speak for Open-mpi but in the general case this probably isn't
<br>
true at least not in the context of how it's meant.
<br>
<p>There are two obvious ways to implement AllReduce, either a Reduce/Bcast
<br>
combination or the butterfly algorithm.  These are both harder to code
<br>
than a naive AlltoAll assuming you take into account implementing the
<br>
underlying Reduce if you do it that way however the complexity within
<br>
collectives is in minimising data contention and in this context I can't
<br>
think of anything which is harder than AlltoAll.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5187.php">Lawrence Stewart: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>Previous message:</strong> <a href="5185.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5181.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
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
