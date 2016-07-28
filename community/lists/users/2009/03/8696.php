<?
$subject_val = "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 21:56:31 2009" -->
<!-- isoreceived="20090401015631" -->
<!-- sent="Tue, 31 Mar 2009 19:56:19 -0600" -->
<!-- isosent="20090401015619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque." -->
<!-- id="9A32E87F-6E83-44B4-A6C3-646E3B8166CE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c4d69730903311650m1d24decbx3e7a2965a07609f8_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 21:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8695.php">Rahul Nabar: "[OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8695.php">Rahul Nabar: "[OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is very hard to debug the problem with so little information. We  
<br>
regularly run OMPI jobs on Torque without issue.
<br>
<p>Are you getting an allocation from somewhere for the nodes? If so, are  
<br>
you using Moab to get it? Do you have a $PBS_NODEFILE in your  
<br>
environment?
<br>
<p>I have no idea why your processes are crashing when run via Torque -  
<br>
are you sure that the processes themselves crash? Are they segfaulting  
<br>
- if so, can you use gdb to find out where?
<br>
<p>Information would be most helpful - the information we really need is  
<br>
specified here: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Mar 31, 2009, at 5:50 PM, Rahul Nabar wrote:
<br>
<p><span class="quotelev1">&gt; I've a strange OpenMPI/Torque problem while trying to run a job on our
</span><br>
<span class="quotelev1">&gt; Opteron-SC-1435 based cluster:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each node has 8 cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I got to a node and run like so then the job works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 ${EXE_PATH}/${DACAPOEXE_PAR} ${ARGS}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same job if I submit through PBS/Torque then it starts running but the
</span><br>
<span class="quotelev1">&gt; individual processes keep crashing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 ${EXE_PATH}/${DACAPOEXE_PAR} ${ARGS}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that the --hostfile directive is not needed in the latest
</span><br>
<span class="quotelev1">&gt; torque-OpenMPI jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried including:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 6 --hosts node17,node17,node17,node17,node17,node17
</span><br>
<span class="quotelev1">&gt; ${EXE_PATH}/${DACAPOEXE_PAR} ${ARGS}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still does not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be going wrong? Are there other things I need to worry
</span><br>
<span class="quotelev1">&gt; about when PBS steps in? Any tips?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ${DACAPOEXE_PAR} refers to a fortran executable for the
</span><br>
<span class="quotelev1">&gt; computational chemistry code DACAPO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What;s the differences between submitting a job on a node via mpirun
</span><br>
<span class="quotelev1">&gt; directly vs via Torque. Shouldn't these both be transparent to the
</span><br>
<span class="quotelev1">&gt; fortran calls. I am assuming don't have to dig into the fortran code.
</span><br>
<span class="quotelev1">&gt; Any debug tips?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8695.php">Rahul Nabar: "[OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8695.php">Rahul Nabar: "[OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8697.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8698.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Reply:</strong> <a href="8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
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
