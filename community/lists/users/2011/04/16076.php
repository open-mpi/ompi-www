<?
$subject_val = "[OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 22:36:19 2011" -->
<!-- isoreceived="20110403023619" -->
<!-- sent="Sat, 2 Apr 2011 21:36:14 -0500" -->
<!-- isosent="20110403023614" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="BANLkTin9kVWQ0kccWRijtjQ3ir2UZUXjOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi/pbsdsh/Torque problem<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-02 22:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16078.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe reply:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe reply:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem which may or may not be openmpi, but since this list
<br>
was useful before with a race condition I am posting.
<br>
<p>I am trying to use pbsdsh as a ssh replacement, pushed by sysadmins as
<br>
Torque does not know about ssh tasks launched from a task. In a simple
<br>
case, a script launches three mpi tasks in parallel,
<br>
<p>Task1: NodeA
<br>
Task2: NodeB and NodeC
<br>
Task3: NodeD
<br>
<p>(some cores on each, all handled correctly). Reproducible (but with
<br>
different nodes and numbers of cores) Task1 and Task3 work fine, the
<br>
mpi task starts on NodeB but nothing starts on NodeC, it appears that
<br>
NodeC does not communicate. It does not have to be this it could be
<br>
<p>Task1: NodeA NodeB
<br>
Task2: NodeC NodeD
<br>
<p>Here NodeC will start and it looks as if NodeD never starts anything.
<br>
I've also run it with 4 Tasks (1,3,4 work) and if Task2 only uses one
<br>
Node (number of cores do not matter) it is fine.
<br>
<p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Research is to see what everybody else has seen, and to think what
nobody else has thought
Albert Szent-Gy&#195;&#182;rgi
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16077.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Reply:</strong> <a href="16078.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe reply:</strong> <a href="16086.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe reply:</strong> <a href="16089.php">David Singleton: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
