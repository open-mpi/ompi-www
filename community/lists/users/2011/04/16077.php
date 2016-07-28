<?
$subject_val = "Re: [OMPI users] openmpi/pbsdsh/Torque problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 23:07:30 2011" -->
<!-- isoreceived="20110403030730" -->
<!-- sent="Sat, 2 Apr 2011 21:07:20 -0600" -->
<!-- isosent="20110403030720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/pbsdsh/Torque problem" -->
<!-- id="BDED3C12-7DA8-4622-B34C-78C436F86D23_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BANLkTin9kVWQ0kccWRijtjQ3ir2UZUXjOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/pbsdsh/Torque problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-02 23:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16078.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16078.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I have no idea what you are talking about. Are you saying you are launching OMPI processes via mpirun, but with &quot;pbsdsh&quot; as the plm_rsh_agent???
<br>
<p>That would be a very bad idea. If you are running under Torque, then let mpirun &quot;do the right thing&quot; and use its Torque-based launcher.
<br>
<p>On the other hand, if you are trying to launch MPI processes directly using pbsdsh, then that simply won't work. The procs will have no idea how to wire up or communicate.
<br>
<p><p>On Apr 2, 2011, at 8:36 PM, Laurence Marks wrote:
<br>
<p><span class="quotelev1">&gt; I have a problem which may or may not be openmpi, but since this list
</span><br>
<span class="quotelev1">&gt; was useful before with a race condition I am posting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to use pbsdsh as a ssh replacement, pushed by sysadmins as
</span><br>
<span class="quotelev1">&gt; Torque does not know about ssh tasks launched from a task. In a simple
</span><br>
<span class="quotelev1">&gt; case, a script launches three mpi tasks in parallel,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Task1: NodeA
</span><br>
<span class="quotelev1">&gt; Task2: NodeB and NodeC
</span><br>
<span class="quotelev1">&gt; Task3: NodeD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (some cores on each, all handled correctly). Reproducible (but with
</span><br>
<span class="quotelev1">&gt; different nodes and numbers of cores) Task1 and Task3 work fine, the
</span><br>
<span class="quotelev1">&gt; mpi task starts on NodeB but nothing starts on NodeC, it appears that
</span><br>
<span class="quotelev1">&gt; NodeC does not communicate. It does not have to be this it could be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Task1: NodeA NodeB
</span><br>
<span class="quotelev1">&gt; Task2: NodeC NodeD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here NodeC will start and it looks as if NodeD never starts anything.
</span><br>
<span class="quotelev1">&gt; I've also run it with 4 Tasks (1,3,4 work) and if Task2 only uses one
</span><br>
<span class="quotelev1">&gt; Node (number of cores do not matter) it is fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Laurence Marks
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; MSE Rm 2036 Cook Hall
</span><br>
<span class="quotelev1">&gt; 2220 N Campus Drive
</span><br>
<span class="quotelev1">&gt; Northwestern University
</span><br>
<span class="quotelev1">&gt; Evanston, IL 60208, USA
</span><br>
<span class="quotelev1">&gt; Tel: (847) 491-3996 Fax: (847) 491-7820
</span><br>
<span class="quotelev1">&gt; email: L-marks at northwestern dot edu
</span><br>
<span class="quotelev1">&gt; Web: www.numis.northwestern.edu
</span><br>
<span class="quotelev1">&gt; Chair, Commission on Electron Crystallography of IUCR
</span><br>
<span class="quotelev1">&gt; www.numis.northwestern.edu/
</span><br>
<span class="quotelev1">&gt; Research is to see what everybody else has seen, and to think what
</span><br>
<span class="quotelev1">&gt; nobody else has thought
</span><br>
<span class="quotelev1">&gt; Albert Szent-Gy&#246;rgi
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
<li><strong>Next message:</strong> <a href="16078.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>In reply to:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16078.php">Laurence Marks: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
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
