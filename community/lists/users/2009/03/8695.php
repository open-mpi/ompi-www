<?
$subject_val = "[OMPI users] job runs with mpirun on a node but not if submitted via Torque.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 19:50:27 2009" -->
<!-- isoreceived="20090331235027" -->
<!-- sent="Tue, 31 Mar 2009 18:50:22 -0500" -->
<!-- isosent="20090331235022" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="[OMPI users] job runs with mpirun on a node but not if submitted via Torque." -->
<!-- id="c4d69730903311650m1d24decbx3e7a2965a07609f8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] job runs with mpirun on a node but not if submitted via Torque.<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 19:50:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8694.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've a strange OpenMPI/Torque problem while trying to run a job on our
<br>
Opteron-SC-1435 based cluster:
<br>
<p>Each node has 8 cpus.
<br>
<p>If I got to a node and run like so then the job works:
<br>
<p>mpirun -np 6 ${EXE_PATH}/${DACAPOEXE_PAR} ${ARGS}
<br>
<p>Same job if I submit through PBS/Torque then it starts running but the
<br>
individual processes keep crashing:
<br>
<p>mpirun -np 6 ${EXE_PATH}/${DACAPOEXE_PAR} ${ARGS}
<br>
<p>I know that the --hostfile directive is not needed in the latest
<br>
torque-OpenMPI jobs.
<br>
<p>I also tried including:
<br>
<p>mpirun -np 6 --hosts node17,node17,node17,node17,node17,node17
<br>
${EXE_PATH}/${DACAPOEXE_PAR} ${ARGS}
<br>
<p>Still does not work.
<br>
<p>What could be going wrong? Are there other things I need to worry
<br>
about when PBS steps in? Any tips?
<br>
<p>The ${DACAPOEXE_PAR} refers to a fortran executable for the
<br>
computational chemistry code DACAPO.
<br>
<p>What;s the differences between submitting a job on a node via mpirun
<br>
directly vs via Torque. Shouldn't these both be transparent to the
<br>
fortran calls. I am assuming don't have to dig into the fortran code.
<br>
Any debug tips?
<br>
<p>Thanks!
<br>
<p><pre>
--
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8694.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8696.php">Ralph Castain: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
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
