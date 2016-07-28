<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:24:59 2008" -->
<!-- isoreceived="20080728172459" -->
<!-- sent="Tue, 29 Jul 2008 01:24:54 +0800" -->
<!-- isosent="20080728172454" -->
<!-- name="vega lew" -->
<!-- email="vegalew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="BAY124-W594927B98F37219F4748AAA4830_at_phx.gbl" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EFBEAF0C-24E2-4873-8ACF-AB3A3484AFF1_at_umich.edu" -->
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
<strong>Date:</strong> 2008-07-28 13:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6157.php">Eric Shamay: "[OMPI users] MPI_Reduce hangs when running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6166.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6166.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
OK, thank you for your reply.
<br>
I'll try to make a script to kill all the process using 'killall pw.x' .
<br>

<br>
Thank you again. 
<br>

<br>

<br>
Vega Lew (weijia liu)
<br>
PH.D Candidate in Chemical Engineering
<br>
State Key Laboratory of Materials-oriented Chemical Engineering
<br>
College of Chemistry and Chemical Engineering
<br>
Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
<br>

<br>
From: brockp_at_[hidden]
<br>
Date: Mon, 28 Jul 2008 11:05:33 -0400
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] How to cease the process triggered by OPENMPI
<br>

<br>

<br>
You would be much better off to not use nohup, and then just kill the mpirun.
<br>
What I mean is a batch system (<a href="http://www.clusterresources.com/pages/products/torque-resource-manager.php">http://www.clusterresources.com/pages/products/torque-resource-manager.php</a>).  Most batch systems have a launching system that lets you kill all the remote processes when you kill the job.  
<br>
Look at how MPI works.  When you are starting the way you are starting MPI (without a batch system) you are using ether ssh or rsh to start the remote processes.  Once these are started, the user has no control over the remote processes. 
<br>
Try killing your mpirun not your orted or pw.x.  You will be much happier with a batch system. Or make a script that ssh to hostfile and kills pw.x on all of them. Brock Palenwww.umich.edu/~brockpCenter for Advanced Computingbrockp_at_[hidden](734)936-1985 
<br>
On Jul 27, 2008, at 2:04 PM, vega lew wrote: Dear Brock Palen,
<br>

<br>
Thank you for your responding.
<br>

<br>
My linux is redhat enterprise 4. My compiler is 10.1.015 version of intel fortran and intel c.
<br>

<br>
You said 'when the job is killed all the children are also'
<br>

<br>
But I started my OPENMPI job using the nohup command to put the job background like this,
<br>
&quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output  &amp; &quot;.
<br>

<br>
When I killed one of the process named pw.x, all the others didn't stop.
<br>
When I killed the process named orted, the pw.x process in the same node stoped immediately,
<br>
but the job in the other node were still running.
<br>

<br>
Do you think there is something wrong with my cluster or openmpi or the software named pw.x?
<br>

<br>
Is there a command for openmpi to force all the process to stop in the cluster or a list of nodes to stop.  
<br>

<br>
Vega Lew (weijia liu)
<br>
PH.D Candidate in Chemical Engineering
<br>
State Key Laboratory of Materials-oriented Chemical Engineering
<br>
College of Chemistry and Chemical Engineering
<br>
Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
<br>

<br>
From: brockp_at_[hidden]
<br>
Date: Sat, 26 Jul 2008 12:52:08 -0400
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] How to cease the process triggered by OPENMPI
<br>

<br>
&nbsp;Does the cluster your using use a batch system?  Like SLURM, PBS or other?
<br>
If so many have native ways to launch jobs that OMPI can use.  SO that when the job is killed all the children are also.
<br>
&nbsp;Brock Palenwww.umich.edu/~brockpCenter for Advanced Computingbrockp_at_[hidden](734)936-1985 
<br>
On Jul 26, 2008, at 12:25 PM, vega lew wrote: Dear all,
<br>

<br>
I have enjoyed the openmpi a couple of days. With the help of openmpi I could run ESPRESSO efficiently.
<br>

<br>
I started the mpi-job by the openmpi command like this,
<br>

<br>
&quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output &amp;&quot;.
<br>

<br>
When I want to stop the job before it finished, I find it not easy to stop all the process manually. When I killed the process
<br>
in one node of the cluster, the processes in other nodes were still running. So I must ssh to every node, find the 
<br>
process id and kill the process. If there are 100 processors or more for one mpi job, the situation even worse.
<br>

<br>
Is there a command for openmpi to force all the process to stop in the cluster or a list of nodes to stop.  
<br>

<br>
vega
<br>

<br>
Vega Lew &#239;&#188;&#136;weijia liu)
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

<br>
Get news, entertainment and everything you care about at Live.com. Check it out!_______________________________________________users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>

<br>
_________________________________________________________________
<br>
Connect to the next generation of MSN Messenger&#194;&#160;
<br>
<a href="http://imagine-msn.com/messenger/launch80/default.aspx?locale=en-us&amp;source=wlmailtagline">http://imagine-msn.com/messenger/launch80/default.aspx?locale=en-us&amp;source=wlmailtagline</a><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6157.php">Eric Shamay: "[OMPI users] MPI_Reduce hangs when running on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="6155.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6166.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6166.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
