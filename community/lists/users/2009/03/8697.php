<?
$subject_val = "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 22:18:45 2009" -->
<!-- isoreceived="20090401021845" -->
<!-- sent="Tue, 31 Mar 2009 21:18:40 -0500" -->
<!-- isosent="20090401021840" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque." -->
<!-- id="c4d69730903311918n684611d4te727c6711e0c9d62_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A32E87F-6E83-44B4-A6C3-646E3B8166CE_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 22:18:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/3/31 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; It is very hard to debug the problem with so little information. We
</span><br>
<p>Thanks Ralph! I'm sorry my first post lacked enough specifics. I'll
<br>
try my best to fill you guys in on as much debug info as I can.
<br>
<p><span class="quotelev1">&gt; regularly run OMPI jobs on Torque without issue.
</span><br>
<p>So do we. In fact on the very same cluster other jobs using the same
<br>
code do run fine. Its only this  one type of jobs that I am seeing
<br>
this strange behavior on. For those more curious, the code I am trying
<br>
to run is a computational chemistry code called DACAPO developed at
<br>
CAMd at the Technical University of Denemark. Link:
<br>
<a href="https://wiki.fysik.dtu.dk/dacapo">https://wiki.fysik.dtu.dk/dacapo</a>
<br>
<p>Hardware Architecture:
<br>
Dell rack servers: PowerEdge SC1435.
<br>
2.2GHz Opteron 1Ghz. (AMD)
<br>
8 cpus per node.
<br>
<p><span class="quotelev1">&gt; Are you getting an allocation from somewhere for the nodes?
</span><br>
<span class="quotelev1">&gt;If so, are you
</span><br>
<span class="quotelev1">&gt; using Moab to get it?
</span><br>
<p>We are using Torque as the scheduler and Maui as the master scheduler.
<br>
<p><span class="quotelev1"> &gt;Do you have a $PBS_NODEFILE in your environment?
</span><br>
<p>Yes, I do. For a test case I was trying to run on a single node (which
<br>
has 8 cpus)
<br>
<p>If I cat  $PBS_NODEFILE I do get the name &quot;node17&quot;  8 times.
<br>
<p>I did dump the environment variables from a running job. I get:
<br>
PBS_NODEFILE=&quot;/var/spool/torque/aux//4609.uranus.che.foo.edu&quot;
<br>
<p><span class="quotelev1">&gt; I have no idea why your processes are crashing when run via Torque - are you
</span><br>
<span class="quotelev1">&gt; sure that the processes themselves crash?
</span><br>
<span class="quotelev1">&gt;Are they segfaulting - if so, can
</span><br>
<p>Yes, they are indeed segfaulting. And only when I run them through Torque.
<br>
########################################
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
mpirun noticed that job rank 5 with PID 10580 on node node17 exited on
<br>
signal 11 (Segmentation fault).
<br>
#########################################
<br>
<p>Exact same job runs like a charm if I submit it via mprrun on the node
<br>
outside of Torque.
<br>
<p><p><span class="quotelev1">&gt; you use gdb to find out where?
</span><br>
<p>I can try that. I haven't used gdb much before. In case it matters the
<br>
core executable is a fortran source compiled via the Intel Fortran
<br>
Compiler ifort. That executable runs fine for all other cases except
<br>
this one.
<br>
<p>Maybe this helps more?
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
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
