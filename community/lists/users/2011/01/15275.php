<?
$subject_val = "[OMPI users] Duplicate independent processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 18:57:15 2011" -->
<!-- isoreceived="20110105235715" -->
<!-- sent="Wed, 5 Jan 2011 18:57:11 -0500" -->
<!-- isosent="20110105235711" -->
<!-- name="Kristian Medri" -->
<!-- email="kmedri_at_[hidden]" -->
<!-- subject="[OMPI users] Duplicate independent processes" -->
<!-- id="000901cbad34$452a3610$cf7ea230$_at_carleton.ca" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Duplicate independent processes<br>
<strong>From:</strong> Kristian Medri (<em>kmedri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 18:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Previous message:</strong> <a href="15274.php">Alex A. Granovsky: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Reply:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any hints on what to look for to get the second machine to behave without
<br>
duplicate independent processes?
<br>
<p>&quot;mpirun -np 2 ...&quot;
<br>
<p>Provides as expected:
<br>
<p>&quot;Using MPI version 2.1, 2 processes
<br>
.1.
<br>
.2.&quot;
<br>
<p>While on another similar machine:
<br>
<p>&quot;Using MPI version 2.2, 1 processes
<br>
.1.
<br>
Using MPI version 2.2, 1 processes
<br>
.1.
<br>
.2.
<br>
.2.&quot;
<br>
<p>On both:
<br>
<p>/usr/lib64/openmpi/1.4-gcc/bin/mpirun --version
<br>
<p>Returns:
<br>
<p>mpirun (Open MPI) 1.4
<br>
<p>I looked in the FAQ and searched the list but did not find it yet. When I
<br>
worked with MPICH2 I also had this happen from time to time. I can provide
<br>
additional information should it not be as common here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Previous message:</strong> <a href="15274.php">Alex A. Granovsky: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
<li><strong>Reply:</strong> <a href="15276.php">Ralph Castain: "Re: [OMPI users] Duplicate independent processes"</a>
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
