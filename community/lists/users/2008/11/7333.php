<?
$subject_val = "[OMPI users] Hybrid program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 11:18:48 2008" -->
<!-- isoreceived="20081118161848" -->
<!-- sent="Tue, 18 Nov 2008 17:18:43 +0100" -->
<!-- isosent="20081118161843" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Hybrid program" -->
<!-- id="3a37617f0811180818s398d155ci441dcc21a6850883_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Hybrid program<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-18 11:18:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
i have a strange problem with mixed program MPI+OPENMP over OpenMPI
<br>
1.2.6. I'm using PJL TASK  GEOMETRY in LSF Scheduler, setting 2 MPI
<br>
process every compute node, and 2 OMP threads per process. Using
<br>
paffinity and maffinity, i've noted that over every node, i have 2
<br>
thread that works 100%, and 2 threads doesn't works, or works very
<br>
few.
<br>
<p>If i disable paffinity and maffinity, 4 threads works well, without
<br>
load imbalance.
<br>
I don't understand this issue: paffinity and maffinity should map
<br>
every thread over a specific core, optimizing the cache flow, but i
<br>
have this without settings there!
<br>
<p>Can i use paffinity and maffinity in mixed MPI+OpenMP program? Or it
<br>
works only over MPI thread?
<br>
<p>Thanks in advance.
<br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing  Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7332.php">Venu Gopal: "Re: [OMPI users] how to get openMPI working, someone help me."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Reply:</strong> <a href="7334.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
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
