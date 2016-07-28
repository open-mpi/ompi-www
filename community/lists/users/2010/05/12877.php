<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 16:38:18 2010" -->
<!-- isoreceived="20100504203818" -->
<!-- sent="Tue, 04 May 2010 13:38:54 -0700" -->
<!-- isosent="20100504203854" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?" -->
<!-- id="4BE085DE.3090007_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE07D64.2040006_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 16:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12876.php">Gus Correa: "[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12876.php">Gus Correa: "[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI experts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need your help to get Open MPI right on a standalone
</span><br>
<span class="quotelev1">&gt; machine with Nehalem processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to tweak the mca parameters to avoid problems
</span><br>
<span class="quotelev1">&gt; with Nehalem (and perhaps AMD processors also),
</span><br>
<span class="quotelev1">&gt; where MPI programs hang, was discussed here before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I lost track of the details, how to work around the problem,
</span><br>
<span class="quotelev1">&gt; and if it was fully fixed already perhaps.
</span><br>
<p>Yes, perhaps the problem you're seeing is not what you remember being 
<br>
discussed.
<br>
<p>Perhaps you're thinking of 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .  It's presumably fixed.
<br>
<p><span class="quotelev1">&gt; I am now facing the problem directly on a single Nehalem box.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed OpenMPI 1.4.1 from source,
</span><br>
<span class="quotelev1">&gt; and compiled the test hello_c.c with mpicc.
</span><br>
<span class="quotelev1">&gt; Then I tried to run it with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) mpirun -np 4 a.out
</span><br>
<span class="quotelev1">&gt; It ran OK (but seemed to be slow).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) mpirun -np 16 a.out
</span><br>
<span class="quotelev1">&gt; It hung, and brought the machine to a halt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any words of wisdom are appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * OpenMPI 1.4.1 installed from source (tarball from your site).
</span><br>
<span class="quotelev1">&gt; * Compilers are gcc/g++/gfortran 4.4.3-4.
</span><br>
<span class="quotelev1">&gt; * OS is Fedora Core 12.
</span><br>
<span class="quotelev1">&gt; * The machine is a Dell box with Intel Xeon 5540 (quad core)
</span><br>
<span class="quotelev1">&gt; processors on a two-way motherboard and 48GB of RAM.
</span><br>
<span class="quotelev1">&gt; * /proc/cpuinfo indicates that hyperthreading is turned on.
</span><br>
<span class="quotelev1">&gt; (I can see 16 &quot;processors&quot;.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What should I do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use -mca btl ^sm  ?
</span><br>
<span class="quotelev1">&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?)
</span><br>
<span class="quotelev1">&gt; Use Both?
</span><br>
<span class="quotelev1">&gt; Do something else? 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12876.php">Gus Correa: "[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12876.php">Gus Correa: "[OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12878.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
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
