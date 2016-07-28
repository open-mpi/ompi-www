<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 16:45:47 2010" -->
<!-- isoreceived="20100504204547" -->
<!-- sent="Tue, 4 May 2010 14:45:38 -0600" -->
<!-- isosent="20100504204538" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?" -->
<!-- id="A16EFDD4-DC36-4B8F-AA04-19138805764A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE085DE.3090007_at_oracle.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 16:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12879.php">Shaun Jackman: "[OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would certainly try it -mca btl ^sm and see if that solves the problem.
<br>
<p>On May 4, 2010, at 2:38 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI experts
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I need your help to get Open MPI right on a standalone
</span><br>
<span class="quotelev2">&gt;&gt; machine with Nehalem processors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How to tweak the mca parameters to avoid problems
</span><br>
<span class="quotelev2">&gt;&gt; with Nehalem (and perhaps AMD processors also),
</span><br>
<span class="quotelev2">&gt;&gt; where MPI programs hang, was discussed here before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I lost track of the details, how to work around the problem,
</span><br>
<span class="quotelev2">&gt;&gt; and if it was fully fixed already perhaps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, perhaps the problem you're seeing is not what you remember being discussed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps you're thinking of <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .  It's presumably fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am now facing the problem directly on a single Nehalem box.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed OpenMPI 1.4.1 from source,
</span><br>
<span class="quotelev2">&gt;&gt; and compiled the test hello_c.c with mpicc.
</span><br>
<span class="quotelev2">&gt;&gt; Then I tried to run it with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) mpirun -np 4 a.out
</span><br>
<span class="quotelev2">&gt;&gt; It ran OK (but seemed to be slow).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) mpirun -np 16 a.out
</span><br>
<span class="quotelev2">&gt;&gt; It hung, and brought the machine to a halt.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any words of wisdom are appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More info:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * OpenMPI 1.4.1 installed from source (tarball from your site).
</span><br>
<span class="quotelev2">&gt;&gt; * Compilers are gcc/g++/gfortran 4.4.3-4.
</span><br>
<span class="quotelev2">&gt;&gt; * OS is Fedora Core 12.
</span><br>
<span class="quotelev2">&gt;&gt; * The machine is a Dell box with Intel Xeon 5540 (quad core)
</span><br>
<span class="quotelev2">&gt;&gt; processors on a two-way motherboard and 48GB of RAM.
</span><br>
<span class="quotelev2">&gt;&gt; * /proc/cpuinfo indicates that hyperthreading is turned on.
</span><br>
<span class="quotelev2">&gt;&gt; (I can see 16 &quot;processors&quot;.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What should I do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Use -mca btl ^sm  ?
</span><br>
<span class="quotelev2">&gt;&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?)
</span><br>
<span class="quotelev2">&gt;&gt; Use Both?
</span><br>
<span class="quotelev2">&gt;&gt; Do something else? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12879.php">Shaun Jackman: "[OMPI users] request_get_status: Recheck request status [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12877.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12880.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
