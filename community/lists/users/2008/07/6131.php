<?
$subject_val = "[OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 12:25:58 2008" -->
<!-- isoreceived="20080726162558" -->
<!-- sent="Sun, 27 Jul 2008 00:25:54 +0800" -->
<!-- isosent="20080726162554" -->
<!-- name="vega lew" -->
<!-- email="vegalew_at_[hidden]" -->
<!-- subject="[OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="BAY124-W15D4CDD763C3AAC8BD2514A4810_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] How to cease the process triggered by OPENMPI<br>
<strong>From:</strong> vega lew (<em>vegalew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-26 12:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6130.php">Mark Borgerding: "[OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have enjoyed the openmpi a couple of days. With the help of openmpi I could run ESPRESSO efficiently.
<br>
<p>I started the mpi-job by the openmpi command like this,
<br>
<p>&quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output &amp;&quot;.
<br>
<p>When I want to stop the job before it finished, I find it not easy to stop all the process manually. When I killed the process
<br>
in one node of the cluster, the processes in other nodes were still running. So I must ssh to every node, find the 
<br>
process id and kill the process. If there are 100 processors or more for one mpi job, the situation even worse.
<br>
<p>Is there a command for openmpi to force all the process to stop in the cluster or a list of nodes to stop.  
<br>
<p>vega
<br>
<p>Vega Lew &#163;&#168;weijia liu)
<br>
PH.D Candidate in Chemical Engineering
<br>
<p>State Key Laboratory of Materials-oriented Chemical Engineering
<br>
College of Chemistry and Chemical Engineering
<br>
Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
<br>
_________________________________________________________________
<br>
Explore the seven wonders of the world
<br>
<a href="http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en-US&amp;form=QBRE">http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en-US&amp;form=QBRE</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6130.php">Mark Borgerding: "[OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
