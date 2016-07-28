<?
$subject_val = "Re: [OMPI users] running multiple executables under Torque/PBS PRO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 16:54:15 2009" -->
<!-- isoreceived="20091110215415" -->
<!-- sent="Tue, 10 Nov 2009 14:54:05 -0700" -->
<!-- isosent="20091110215405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running multiple executables under Torque/PBS PRO" -->
<!-- id="EEB90F32-69AF-468C-A88B-70886A545F14_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1257889567.7214.22.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running multiple executables under Torque/PBS PRO<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 16:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11138.php">Tom Rosmond: "[OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>In reply to:</strong> <a href="11138.php">Tom Rosmond: "[OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Reply:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version are you trying to do this with?
<br>
<p>Reason I ask: in 1.3.x, we introduced relative node syntax for  
<br>
specifying hosts to use. This would eliminate the need to create the  
<br>
hostfiles.
<br>
<p>You might do a &quot;man orte_hosts&quot; (assuming you installed the man pages)  
<br>
and see what it says.
<br>
<p>Ralph
<br>
<p>On Nov 10, 2009, at 2:46 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I want to run a number of MPI executables simultaneously in a PBS job.
</span><br>
<span class="quotelev1">&gt; For example on my system I do 'cat $PBS_NODEFILE' and get a list like
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; n04
</span><br>
<span class="quotelev1">&gt; n04
</span><br>
<span class="quotelev1">&gt; n04
</span><br>
<span class="quotelev1">&gt; n04
</span><br>
<span class="quotelev1">&gt; n06
</span><br>
<span class="quotelev1">&gt; n06
</span><br>
<span class="quotelev1">&gt; n06
</span><br>
<span class="quotelev1">&gt; n06
</span><br>
<span class="quotelev1">&gt; n07
</span><br>
<span class="quotelev1">&gt; n07
</span><br>
<span class="quotelev1">&gt; n07
</span><br>
<span class="quotelev1">&gt; n07
</span><br>
<span class="quotelev1">&gt; n09
</span><br>
<span class="quotelev1">&gt; n09
</span><br>
<span class="quotelev1">&gt; n09
</span><br>
<span class="quotelev1">&gt; n09
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e, 16 processors on 4 nodes. from which I can parse into file(s) as
</span><br>
<span class="quotelev1">&gt; desired.  If I want to run prog1 on 1 node (4 processors), prog2 on 1
</span><br>
<span class="quotelev1">&gt; node (4 processors), and prog3 on 2 nodes (8 processors), I think the
</span><br>
<span class="quotelev1">&gt; syntax will be something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 4 --hostfile nodefile1 prog1: \
</span><br>
<span class="quotelev1">&gt;         -np 4 --hostfile nodefile2 prog2: \
</span><br>
<span class="quotelev1">&gt;         -np 8 --hostfile nodefile3 prog3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where nodefile1, nodefile2, and nodefile3 are the lists extracted from
</span><br>
<span class="quotelev1">&gt; PBS_NODEFILE.  Is this correct?  Any suggestion/advice, (e.g. syntax  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; the 'nodefiles'), is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11138.php">Tom Rosmond: "[OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>In reply to:</strong> <a href="11138.php">Tom Rosmond: "[OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Reply:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
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
