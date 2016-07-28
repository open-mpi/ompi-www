<?
$subject_val = "Re: [OMPI users] Is OpenMPI's orted = MPICH2's smpd?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 07:35:22 2009" -->
<!-- isoreceived="20091222123522" -->
<!-- sent="Tue, 22 Dec 2009 12:35:14 +0000" -->
<!-- isosent="20091222123514" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is OpenMPI's orted = MPICH2's smpd?" -->
<!-- id="1261485314.3600.115.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="cb60cbc40912212029h7d394d4ey46400f9c416dbc14_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is OpenMPI's orted = MPICH2's smpd?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-22 07:35:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11630.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11628.php">Ralph Castain: "Re: [OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<li><strong>In reply to:</strong> <a href="11625.php">Sangamesh B: "[OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-12-22 at 09:59 +0530, Sangamesh B wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPICh2 has different process managers: MPD, SMPD, GFORKER etc.
</span><br>
<p>It also has Hydra.
<br>
<p><span class="quotelev1">&gt;  Is the Open MPI's startup daemon orted similar to MPICH2's smpd? Or
</span><br>
<span class="quotelev1">&gt; something else?
</span><br>
<p>My understand is that SMPD is for launching on Windows which isn't
<br>
something I know about.
<br>
<p>orte is similar to MPD although without the requirement that you start
<br>
the ring before-hand.
<br>
<p>A quick summary of orte: Orte takes a list of nodes and a process count,
<br>
given these it will start a job of the given size on the given nodes.
<br>
No prior configuration or starting of deamons is required.  No effort is
<br>
made to prevent multiple jobs from starting on the same nodes and no
<br>
effort is made to maintain a &quot;queue&quot; of jobs waiting for nodes to become
<br>
free.  Each job is independent, and runs where you tell it to
<br>
immediately.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11630.php">Johann Knechtel: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11628.php">Ralph Castain: "Re: [OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<li><strong>In reply to:</strong> <a href="11625.php">Sangamesh B: "[OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<!-- nextthread="start" -->
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
