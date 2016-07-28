<?
$subject_val = "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 13:02:44 2011" -->
<!-- isoreceived="20111212180244" -->
<!-- sent="Mon, 12 Dec 2011 13:02:39 -0500" -->
<!-- isosent="20111212180239" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?" -->
<!-- id="4BCDDC75-C28E-42C9-BC7A-55C5D32D401B_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+bTOHo_V-orLHBHx4=i15Uvx1N1j_WkjC=gb81E3KEF_UpRXw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 13:02:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2011, at 8:42 AM, amjad ali wrote:
<br>
<p><span class="quotelev1">&gt; Thanking you all very much for the reply.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would request to have some reference about what Tim Prince  &amp; Andreas has said.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Tim said that OpenMPI has had effective shared memory message passing. Is that anything to do with --enable-MPI-threads switch while installing OpeMPI?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; AA 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi A	mjad
<br>
<p>I think this is just the 'sm' [shared memory] 'btl' [byte transport layer] of OpenMPI,
<br>
which uses shared memory inside a node to pass messages [unless you turn it off].
<br>
If I remember right, the OpenMPI  sm btl is built by default in an SMP computer [like yours], and 
<br>
used by default if two processes live in the same computer/node.
<br>
<p>As a practical matter, if you plan to run your program in larger problems, say, that 
<br>
do not fit the memory of a single node, it is wise to use MPI to begin with, 
<br>
because your programming effort is preserved, 
<br>
and you can pretty much use for the large problem in multiple nodes
<br>
the very same code that you developed for the small problem in a single computer.
<br>
You cannot do this with OpenMP, which requires shared memory to start with.
<br>
<p>Given the many answers from the OpenMPI pros so far, it is clear that you provoked 
<br>
an interesting discussion!
<br>
<p>I wonder if it is fair at all to make comparisons between MPI and OpenMP.
<br>
They are quite different programming models, and assume different hardware 
<br>
and memory layouts.
<br>
The techniques used to design algorithms in each case are quite different as well.
<br>
Both have pros and cons, but I can hardly imagine a fair comparison between them 
<br>
in real world problems.
<br>
For instance, if one has a PDE to solve, say, the wave equation, in 1D, 2D, or 3D. 
<br>
The typical approach in OpenMP is to parallelize the inner loop[s].
<br>
The typical approach in MPI is to use domain decomposition.
<br>
The typical approach in hybrid mode [MPI + OpenMP] is to do both.
<br>
Could somebody tell me how these things can be fairly compared to each other, if at all?
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17938.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17936.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
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
