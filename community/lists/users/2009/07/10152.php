<?
$subject_val = "[OMPI users] programs are segfaulting using Torque &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 31 09:20:54 2009" -->
<!-- isoreceived="20090731132054" -->
<!-- sent="Fri, 31 Jul 2009 15:20:50 +0200" -->
<!-- isosent="20090731132050" -->
<!-- name="Wilko Keegstra" -->
<!-- email="w.keegstra_at_[hidden]" -->
<!-- subject="[OMPI users] programs are segfaulting using Torque &amp;amp; OpenMPI" -->
<!-- id="4A72EFB2.9080101_at_rug.nl" -->
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
<strong>Subject:</strong> [OMPI users] programs are segfaulting using Torque &amp; OpenMPI<br>
<strong>From:</strong> Wilko Keegstra (<em>w.keegstra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-31 09:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10151.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="10162.php">Gus Correa: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>I have the following problem:
<br>
<p>I am using openmpi 1.3.3
<br>
<p>programs (directly and from scripts) submitted with mpiexec are running
<br>
fine.
<br>
<p>programs (directly and from scripts) submitted through Torque 2.3.7
<br>
with openmpi compiled with --with-tm (and torque-devel) installed
<br>
give segfaulting of the programs.
<br>
<p>programs submitted through Torque 2.3.7 directly with openmpi
<br>
compiled without --with-tm (and NO torque-devel installed) run fine
<br>
however mpiexec programs from script (script submiited through torque)
<br>
are only running on 1 node, so I need openmpi compiled with --with-tm
<br>
<p>We also have a cluster running with openmpi 1.2.9 compiled without
<br>
--with-tm in combination with torque 2.3.3 and everything is running
<br>
fine, so NO segfaults and mpiexec from script also running on the
<br>
nodes selected at submitting time.
<br>
<p>I don't have errors on log files only on the job log file:
<br>
<p>---------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 7 with PID 3150 on node
<br>
rugem21.chem.rug.nl exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Could anyone please help me,
<br>
many thanks in advance
<br>
Wilko Keegstra
<br>
<p><pre>
-- 
+-------------------------------------------------------------+
| Dr. Wilko Keegstra    priv.phone: +31594514153,+31610477915 |
| Groningen University       email: W.Keegstra_at_[hidden]         |
| Groningen Biomolecular Sciences and Biotechnology Institute |
| Nijenborgh 4               phone: +31503634224              |
| 9747 AG GRONINGEN          fax  : +31503634800              |
| The Netherlands                                             |
+-------------------------------------------------------------+
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10151.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10153.php">Ralph Castain: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="10162.php">Gus Correa: "Re: [OMPI users] programs are segfaulting using Torque &amp; OpenMPI"</a>
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
