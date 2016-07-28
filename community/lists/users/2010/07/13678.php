<?
$subject_val = "Re: [OMPI users] do all processors have to execute MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 04:13:44 2010" -->
<!-- isoreceived="20100717081344" -->
<!-- sent="Sat, 17 Jul 2010 09:13:39 +0100" -->
<!-- isosent="20100717081339" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] do all processors have to execute MPI_Bcast?" -->
<!-- id="20100717081339.GA50676_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C40CD35.7020003_at_ias.edu" -->
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
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 04:13:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>In reply to:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul 16, 2010 at 05:20:53PM -0400, Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Anton Shterenlikht wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Will this bit of code work:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     if (rank .eq. &lt;somerank&gt;) then
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         *change var*
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         call MPI_Bcast(var, 1, MPI_INTEGER, rank, &amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     end if
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     call MPI_Barrier(MPI_COMM_WORLD, errstat)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm using a int variable on all processors.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; At some point some process can change its
</span><br>
<span class="quotelev3">&gt; &gt;&gt; value of this variable.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I then need to let all other
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes know the new value. So I tried
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to use MPI_Bcast for this. But I think
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI waits indefinitely at MPI_Barrier.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm now wondering if MPI_Bcast must
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be executed by all processes, similar
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to MPI_Barrier. Is this correct?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; All processes in the communicator must make the collective call...
</span><br>
<span class="quotelev2">&gt; &gt; Bcast, Barrier, Allreduce, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, following a Bcast with a Barrier is redundant in this example.
</span><br>
<p>Sorry, just to be absolutely clear, are you saying
<br>
that even though only one process in the communicator
<br>
is calling Bcast, the call will be made on all
<br>
processes?
<br>
<p>Or are you saying I cannot put Bcast (or any other collective call)
<br>
inside a &quot;if (rank== ...) {} &quot; construct?
<br>
<p>many thanks
<br>
anton
<br>
<p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13679.php">Anton Shterenlikht: "[OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>In reply to:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="13683.php">David Zhang: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
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
