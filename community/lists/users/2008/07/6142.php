<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 27 14:04:10 2008" -->
<!-- isoreceived="20080727180410" -->
<!-- sent="Mon, 28 Jul 2008 02:04:05 +0800" -->
<!-- isosent="20080727180405" -->
<!-- name="vega lew" -->
<!-- email="vegalew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="BAY124-W56678D1CD6EB203DC0D597A4800_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="96A89E9A-3174-48C5-9E8C-35887C3B0A28_at_umich.edu" -->
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
<strong>From:</strong> vega lew (<em>vegalew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-27 14:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6143.php">Aurélien Bouteiller: "Re: [OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
<li><strong>Previous message:</strong> <a href="6141.php">Borenstein, Bernard S: "[OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
<li><strong>In reply to:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brock Palen,
<br>
<p>Thank you for your responding.
<br>
<p>My linux is redhat enterprise 4. My compiler is 10.1.015 version of intel fortran and intel c.
<br>
<p>You said 'when the job is killed all the children are also'
<br>
<p>But I started my OPENMPI job using the nohup command to put the job background like this,
<br>
&quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output  &amp; &quot;.
<br>
<p>When I killed one of the process named pw.x, all the others didn't stop.
<br>
When I killed the process named orted, the pw.x process in the same node stoped immediately,
<br>
but the job in the other node were still running.
<br>
<p>Do you think there is something wrong with my cluster or openmpi or the software named pw.x?
<br>
<p>Is there a command for openmpi to force all the process to stop in the cluster or a list of nodes to stop.  
<br>
<p>Vega Lew (weijia liu)
<br>
PH.D Candidate in Chemical Engineering
<br>
State Key Laboratory of Materials-oriented Chemical Engineering
<br>
College of Chemistry and Chemical Engineering
<br>
Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
<br>
<p>From: brockp_at_[hidden]
<br>
Date: Sat, 26 Jul 2008 12:52:08 -0400
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] How to cease the process triggered by OPENMPI
<br>
<p><p>Does the cluster your using use a batch system?  Like SLURM, PBS or other?
<br>
If so many have native ways to launch jobs that OMPI can use.  SO that when the job is killed all the children are also.
<br>
&nbsp;Brock Palenwww.umich.edu/~brockpCenter for Advanced Computingbrockp_at_[hidden](734)936-1985 
<br>
On Jul 26, 2008, at 12:25 PM, vega lew wrote: Dear all,
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
&nbsp;State Key Laboratory of Materials-oriented Chemical Engineering
<br>
College of Chemistry and Chemical Engineering
<br>
Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
<br>
Explore the seven wonders of the world Learn more!_______________________________________________users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
<p>_________________________________________________________________
<br>
News, entertainment and everything you care about at Live.com. Get it now!
<br>
<a href="http://www.live.com/getstarted.aspx">http://www.live.com/getstarted.aspx</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6142/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6143.php">Aurélien Bouteiller: "Re: [OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
<li><strong>Previous message:</strong> <a href="6141.php">Borenstein, Bernard S: "[OMPI users] Want to build a static openmpi with both myrinet and tcp"</a>
<li><strong>In reply to:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
