<?
$subject_val = "[OMPI users] first cluster [was trouble using openmpi under slurm]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 12:45:33 2010" -->
<!-- isoreceived="20100709164533" -->
<!-- sent="Fri, 9 Jul 2010 13:43:13 -0300" -->
<!-- isosent="20100709164313" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="[OMPI users] first cluster [was trouble using openmpi under slurm]" -->
<!-- id="20100709164313.GA25062_at_sopalepc" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C35D614.1090607_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] first cluster [was trouble using openmpi under slurm]<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 12:43:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13564.php">Alexandru Blidaru: "[OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13562.php">Brian Budge: "[OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>Reply:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 08, 2010 at 09:43:48AM -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Douglas Guptill wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 07, 2010 at 12:37:54PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No....afraid not. Things work pretty well, but there are places
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where things just don't mesh. Sub-node allocation in particular is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an issue as it implies binding, and slurm and ompi have conflicting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; methods.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It all can get worked out, but we have limited time and nobody cares
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enough to put in the effort. Slurm just isn't used enough to make it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worthwhile (too small an audience).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am about to get my first HPC cluster (128 nodes), and was
</span><br>
<span class="quotelev2">&gt;&gt; considering slurm.  We do use MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should I be looking at Torque instead for a queue manager?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Douglas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, works like a charm along with OpenMPI.
</span><br>
<span class="quotelev1">&gt; I also have MVAPICH2 and MPICH2, no integration w/ Torque,
</span><br>
<span class="quotelev1">&gt; but no conflicts either.
</span><br>
<p>Thanks, Gus.
<br>
<p>After some lurking and reading, I plan this:
<br>
&nbsp;&nbsp;Debian (lenny)
<br>
&nbsp;&nbsp;+ fai                   - for compute-node operating system install
<br>
&nbsp;&nbsp;+ Torque                - job scheduler/manager
<br>
&nbsp;&nbsp;+ MPI (Intel MPI)       - for the application
<br>
&nbsp;&nbsp;+ MPI (OpenMP)          - alternative MPI
<br>
<p>Does anyone see holes in this plan?
<br>
<p>Thanks,
<br>
Douglas
<br>
<pre>
-- 
  Douglas Guptill                       voice: 902-461-9749
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13564.php">Alexandru Blidaru: "[OMPI users] Install OpenMPI on Win 7 machine"</a>
<li><strong>Previous message:</strong> <a href="13562.php">Brian Budge: "[OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13538.php">Gus Correa: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>Reply:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
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
