<?
$subject_val = "Re: [OMPI users] trouble using openmpi under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 09:43:57 2010" -->
<!-- isoreceived="20100708134357" -->
<!-- sent="Thu, 08 Jul 2010 09:43:48 -0400" -->
<!-- isosent="20100708134348" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using openmpi under slurm" -->
<!-- id="4C35D614.1090607_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100707191645.GA25781_at_sopalepc" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using openmpi under slurm<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 09:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13537.php">Jeff Squyres: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13518.php">Douglas Guptill: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13563.php">Douglas Guptill: "[OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>Reply:</strong> <a href="13563.php">Douglas Guptill: "[OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Douglas Guptill wrote:
<br>
<span class="quotelev1">&gt; On Wed, Jul 07, 2010 at 12:37:54PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No....afraid not. Things work pretty well, but there are places
</span><br>
<span class="quotelev2">&gt;&gt; where things just don't mesh. Sub-node allocation in particular is
</span><br>
<span class="quotelev2">&gt;&gt; an issue as it implies binding, and slurm and ompi have conflicting
</span><br>
<span class="quotelev2">&gt;&gt; methods.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It all can get worked out, but we have limited time and nobody cares
</span><br>
<span class="quotelev2">&gt;&gt; enough to put in the effort. Slurm just isn't used enough to make it
</span><br>
<span class="quotelev2">&gt;&gt; worthwhile (too small an audience).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am about to get my first HPC cluster (128 nodes), and was
</span><br>
<span class="quotelev1">&gt; considering slurm.  We do use MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I be looking at Torque instead for a queue manager?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hi Douglas
<br>
<p>Yes, works like a charm along with OpenMPI.
<br>
I also have MVAPICH2 and MPICH2, no integration w/ Torque,
<br>
but no conflicts either.
<br>
<p>My $0.02.
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; Suggestions appreciated,
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13537.php">Jeff Squyres: "Re: [OMPI users] Processes always rank 0"</a>
<li><strong>In reply to:</strong> <a href="13518.php">Douglas Guptill: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13563.php">Douglas Guptill: "[OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>Reply:</strong> <a href="13563.php">Douglas Guptill: "[OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
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
