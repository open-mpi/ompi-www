<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 10:35:44 2010" -->
<!-- isoreceived="20100506143544" -->
<!-- sent="Thu, 06 May 2010 07:37:27 -0700" -->
<!-- isosent="20100506143727" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="4BE2D427.4090708_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7DC1D35D-11C6-4F4B-870A-031FF11F7B30_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 10:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Previous message:</strong> <a href="12922.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;Yo Gus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Just saw a ticket go by reminding us about continuing hang problems on shared memory when building with gcc 4.4.x - any  chance you are in that category? You might have said something earlier in this thread....
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Going back to the original e-mail in this thread:
<br>
<p>Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?) 
</span><br>
<p>Another experiment to try would be to keep sm on, but try changing 
<br>
btl_sm_num_fifos as above.  The number to use would be the number of 
<br>
processes on the node.  E.g., if all processes are running on the same 
<br>
box, just use the same number as processes in the job.  The results 
<br>
might help narrow down the possibilities here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Previous message:</strong> <a href="12922.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12920.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
