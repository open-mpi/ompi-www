<?
$subject_val = "Re: [OMPI users] Duplicate independent processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 20:09:11 2011" -->
<!-- isoreceived="20110106010911" -->
<!-- sent="Wed, 5 Jan 2011 18:09:02 -0700" -->
<!-- isosent="20110106010902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Duplicate independent processes" -->
<!-- id="FC74A1AA-B246-4FDD-B2B2-A56B00AB67CE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000901cbad34$452a3610$cf7ea230$_at_carleton.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Duplicate independent processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 20:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15277.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Previous message:</strong> <a href="15275.php">Kristian Medri: "[OMPI users] Duplicate independent processes"</a>
<li><strong>In reply to:</strong> <a href="15275.php">Kristian Medri: "[OMPI users] Duplicate independent processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15297.php">Kristian Medri: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Reply:</strong> <a href="15297.php">Kristian Medri: "Re: [OMPI users] Duplicate independent processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't understand your example - are you saying you provide &quot;-np 1&quot; and get two processes instead of 1?
<br>
<p>If so, would you please provide info on the type of system where this happens? I've never seen it with mpich or ompi
<br>
<p><p>On Jan 5, 2011, at 4:57 PM, Kristian Medri wrote:
<br>
<p><span class="quotelev1">&gt; Any hints on what to look for to get the second machine to behave without
</span><br>
<span class="quotelev1">&gt; duplicate independent processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 2 ...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Provides as expected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Using MPI version 2.1, 2 processes
</span><br>
<span class="quotelev1">&gt; .1.
</span><br>
<span class="quotelev1">&gt; .2.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While on another similar machine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Using MPI version 2.2, 1 processes
</span><br>
<span class="quotelev1">&gt; .1.
</span><br>
<span class="quotelev1">&gt; Using MPI version 2.2, 1 processes
</span><br>
<span class="quotelev1">&gt; .1.
</span><br>
<span class="quotelev1">&gt; .2.
</span><br>
<span class="quotelev1">&gt; .2.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On both:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.4-gcc/bin/mpirun --version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Returns:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked in the FAQ and searched the list but did not find it yet. When I
</span><br>
<span class="quotelev1">&gt; worked with MPICH2 I also had this happen from time to time. I can provide
</span><br>
<span class="quotelev1">&gt; additional information should it not be as common here.
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
<li><strong>Next message:</strong> <a href="15277.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Previous message:</strong> <a href="15275.php">Kristian Medri: "[OMPI users] Duplicate independent processes"</a>
<li><strong>In reply to:</strong> <a href="15275.php">Kristian Medri: "[OMPI users] Duplicate independent processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15297.php">Kristian Medri: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Reply:</strong> <a href="15297.php">Kristian Medri: "Re: [OMPI users] Duplicate independent processes"</a>
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
