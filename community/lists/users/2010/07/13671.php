<?
$subject_val = "Re: [OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 17:20:58 2010" -->
<!-- isoreceived="20100716212058" -->
<!-- sent="Fri, 16 Jul 2010 17:20:53 -0400" -->
<!-- isosent="20100716212053" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="4C40CD35.7020003_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C40A8F2.3090205_at_oracle.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 17:20:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Anton Shterenlikht wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Will this bit of code work:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if (rank .eq. &lt;somerank&gt;) then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         *change var*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         call MPI_Bcast(var, 1, MPI_INTEGER, rank, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;             MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev2">&gt;&gt;     end if
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_Barrier(MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using a int variable on all processors.
</span><br>
<span class="quotelev2">&gt;&gt; At some point some process can change its
</span><br>
<span class="quotelev2">&gt;&gt; value of this variable.
</span><br>
<span class="quotelev2">&gt;&gt; I then need to let all other
</span><br>
<span class="quotelev2">&gt;&gt; processes know the new value. So I tried
</span><br>
<span class="quotelev2">&gt;&gt; to use MPI_Bcast for this. But I think
</span><br>
<span class="quotelev2">&gt;&gt; MPI waits indefinitely at MPI_Barrier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm now wondering if MPI_Bcast must
</span><br>
<span class="quotelev2">&gt;&gt; be executed by all processes, similar
</span><br>
<span class="quotelev2">&gt;&gt; to MPI_Barrier. Is this correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; All processes in the communicator must make the collective call...
</span><br>
<span class="quotelev1">&gt; Bcast, Barrier, Allreduce, etc.
</span><br>
<p>Therefore, following a Bcast with a Barrier is redundant in this example.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13670.php">Eugene Loh: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
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
