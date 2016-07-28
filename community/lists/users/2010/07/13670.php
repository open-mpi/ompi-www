<?
$subject_val = "Re: [OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 14:45:14 2010" -->
<!-- isoreceived="20100716184514" -->
<!-- sent="Fri, 16 Jul 2010 11:46:10 -0700" -->
<!-- isosent="20100716184610" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="4C40A8F2.3090205_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100716183954.GA39545_at_mech-cluster241.men.bris.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] do all processors have to execute MPI_Bcast?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 14:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anton Shterenlikht wrote:
<br>
<p><span class="quotelev1">&gt;Will this bit of code work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	if (rank .eq. &lt;somerank&gt;) then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;		*change var*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;		call MPI_Bcast(var, 1, MPI_INTEGER, rank, &amp;
</span><br>
<span class="quotelev1">&gt;			MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev1">&gt;	end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	call MPI_Barrier(MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm using a int variable on all processors.
</span><br>
<span class="quotelev1">&gt;At some point some process can change its
</span><br>
<span class="quotelev1">&gt;value of this variable.
</span><br>
<span class="quotelev1">&gt;I then need to let all other
</span><br>
<span class="quotelev1">&gt;processes know the new value. So I tried
</span><br>
<span class="quotelev1">&gt;to use MPI_Bcast for this. But I think
</span><br>
<span class="quotelev1">&gt;MPI waits indefinitely at MPI_Barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm now wondering if MPI_Bcast must
</span><br>
<span class="quotelev1">&gt;be executed by all processes, similar
</span><br>
<span class="quotelev1">&gt;to MPI_Barrier. Is this correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
All processes in the communicator must make the collective call... 
<br>
Bcast, Barrier, Allreduce, etc.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
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
