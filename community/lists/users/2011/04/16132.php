<?
$subject_val = "Re: [OMPI users] WRF run on multiple Nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 03:05:18 2011" -->
<!-- isoreceived="20110405070518" -->
<!-- sent="Tue, 5 Apr 2011 01:05:09 -0600" -->
<!-- isosent="20110405070509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF run on multiple Nodes" -->
<!-- id="35C20D86-9188-4CB9-93CA-216969778260_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=fOQt5kovtVTOc43r-MA=bbc73uA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF run on multiple Nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 03:05:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16133.php">SLIM H.A.: "[OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16131.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>In reply to:</strong> <a href="16131.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you request an allocation from PCM? If not, then PCM will block you from arbitrarily launching jobs on non-allocated nodes. Print out your environment and look for any envars from PCM and/or LSF (e.g., LSB_JOBID).
<br>
<p>I don't know what you mean about &quot;no OMPI application is yet integrated with LSF&quot; - an application would never be integrated with LSF. However, OMPI will configure itself to use LSF as its launcher if it detects the presence of LSF on the system. When that happens, you no longer need to supply a machinefile as OMPI will automatically pickup the list of allocated nodes.
<br>
<p><p>On Apr 4, 2011, at 9:31 PM, Ahsan Ali wrote:
<br>
<p><span class="quotelev1">&gt; Dear John Hearns,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The cluster is installed using Platform cluster Manager (PCM). LSF is installed but no OpenMPI application is yet integrated with LSF.
</span><br>
<span class="quotelev1">&gt;  WRF help gave me following instructions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -v -machinefile ~/mach.conf -np 2 wrf.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please talk to your computer manager about how to setup mach.conf and allow communications between nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ahsan,
</span><br>
<span class="quotelev1">&gt;  you have a Dell cluster. Can we ask which company installed the
</span><br>
<span class="quotelev1">&gt; cluster, and who manages the cluster?
</span><br>
<span class="quotelev1">&gt; The company who installed it should have given you some documentation
</span><br>
<span class="quotelev1">&gt; on how to run MPI jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also can we ask if there is a batch scheduler or workload management
</span><br>
<span class="quotelev1">&gt; software on this cluster?
</span><br>
<span class="quotelev1">&gt; I ask because if there is PBS, Gridengine, LSF etc. installed there
</span><br>
<span class="quotelev1">&gt; will be an 'integration; with OpenMPI
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16133.php">SLIM H.A.: "[OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16131.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>In reply to:</strong> <a href="16131.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
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
