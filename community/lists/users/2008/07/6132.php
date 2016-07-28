<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 12:53:16 2008" -->
<!-- isoreceived="20080726165316" -->
<!-- sent="Sat, 26 Jul 2008 12:52:08 -0400" -->
<!-- isosent="20080726165208" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="96A89E9A-3174-48C5-9E8C-35887C3B0A28_at_umich.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BAY124-W15D4CDD763C3AAC8BD2514A4810_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to cease the process triggered by OPENMPI<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-26 12:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6131.php">vega lew: "[OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6131.php">vega lew: "[OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does the cluster your using use a batch system?  Like SLURM, PBS or  
<br>
other?
<br>
<p>If so many have native ways to launch jobs that OMPI can use.  SO  
<br>
that when the job is killed all the children are also.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jul 26, 2008, at 12:25 PM, vega lew wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have enjoyed the openmpi a couple of days. With the help of  
</span><br>
<span class="quotelev1">&gt; openmpi I could run ESPRESSO efficiently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I started the mpi-job by the openmpi command like this,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output &amp;&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I want to stop the job before it finished, I find it not easy  
</span><br>
<span class="quotelev1">&gt; to stop all the process manually. When I killed the process
</span><br>
<span class="quotelev1">&gt; in one node of the cluster, the processes in other nodes were still  
</span><br>
<span class="quotelev1">&gt; running. So I must ssh to every node, find the
</span><br>
<span class="quotelev1">&gt; process id and kill the process. If there are 100 processors or  
</span><br>
<span class="quotelev1">&gt; more for one mpi job, the situation even worse.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a command for openmpi to force all the process to stop in  
</span><br>
<span class="quotelev1">&gt; the cluster or a list of nodes to stop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vega
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vega Lew &#239;&#188;&#136;weijia liu)
</span><br>
<span class="quotelev1">&gt; PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev1">&gt; State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev1">&gt; College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev1">&gt; Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
</span><br>
<span class="quotelev1">&gt; Explore the seven wonders of the world Learn more!
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6131.php">vega lew: "[OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6131.php">vega lew: "[OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
