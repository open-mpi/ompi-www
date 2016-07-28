<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 16:49:25 2010" -->
<!-- isoreceived="20100312214925" -->
<!-- sent="Fri, 12 Mar 2010 16:49:20 -0500" -->
<!-- isosent="20100312214920" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="4B9AB6E0.4010508_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B9A9EC9.8070503_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 16:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12339.php">Nick Edmonds: "[OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12333.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<span class="quotelev1">&gt; At each time step you exchange halo/ghost sections across
</span><br>
<span class="quotelev1">&gt; neighbor subdomains, using MPI_Send/MPI_Recv,
</span><br>
<span class="quotelev1">&gt; or MPI_SendRecv.
</span><br>
<span class="quotelev1">&gt; Even better if you use non-blocking calls
</span><br>
<span class="quotelev1">&gt; MPI_ISend/MPI_[I]Recv/MPI_Wait[all].
</span><br>
<span class="quotelev1">&gt; Read about the advantages of non-blocking communication
</span><br>
<span class="quotelev1">&gt; in the &quot;MPI The Complete Reference, Vol 1&quot; book that I suggested
</span><br>
<span class="quotelev1">&gt; to you.
</span><br>
<p>&quot;Using MPI, 2nd Edition, by Gropp, et al, (the same people who wrote the
<br>
above book, I think), also has a good discussion of this.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can do the bookkeeping of &quot;which subdomain/process_rank is my
</span><br>
<span class="quotelev1">&gt; left neighbor?&quot; etc, yourself, if you create domain neighbor
</span><br>
<span class="quotelev1">&gt; tables when the program initializes.
</span><br>
<span class="quotelev1">&gt; Alternatively, and more elegantly, you can use the MPI
</span><br>
<span class="quotelev1">&gt; Cartesian topology functions to take care of this for you.
</span><br>
<p>Also  described in Using MPI, 2nd Ed.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12339.php">Nick Edmonds: "[OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12333.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12344.php">Jed Brown: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
