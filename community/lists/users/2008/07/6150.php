<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:06:43 2008" -->
<!-- isoreceived="20080728150643" -->
<!-- sent="Mon, 28 Jul 2008 11:05:33 -0400" -->
<!-- isosent="20080728150533" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="EFBEAF0C-24E2-4873-8ACF-AB3A3484AFF1_at_umich.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BAY124-W56678D1CD6EB203DC0D597A4800_at_phx.gbl" -->
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
<strong>Date:</strong> 2008-07-28 11:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6149.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You would be much better off to not use nohup, and then just kill the  
<br>
mpirun.
<br>
<p>What I mean is a batch system (<a href="http://www.clusterresources.com/pages/">http://www.clusterresources.com/pages/</a> 
<br>
products/torque-resource-manager.php).  Most batch systems have a  
<br>
launching system that lets you kill all the remote processes when you  
<br>
kill the job.
<br>
<p>Look at how MPI works.  When you are starting the way you are  
<br>
starting MPI (without a batch system) you are using ether ssh or rsh  
<br>
to start the remote processes.  Once these are started, the user has  
<br>
no control over the remote processes.
<br>
<p>Try killing your mpirun not your orted or pw.x.  You will be much  
<br>
happier with a batch system.
<br>
Or make a script that ssh to hostfile and kills pw.x on all of them.
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
<p><p><p>On Jul 27, 2008, at 2:04 PM, vega lew wrote:
<br>
<p><span class="quotelev1">&gt; Dear Brock Palen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your responding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My linux is redhat enterprise 4. My compiler is 10.1.015 version of  
</span><br>
<span class="quotelev1">&gt; intel fortran and intel c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You said 'when the job is killed all the children are also'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I started my OPENMPI job using the nohup command to put the job  
</span><br>
<span class="quotelev1">&gt; background like this,
</span><br>
<span class="quotelev1">&gt; &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output  &amp; &quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I killed one of the process named pw.x, all the others didn't  
</span><br>
<span class="quotelev1">&gt; stop.
</span><br>
<span class="quotelev1">&gt; When I killed the process named orted, the pw.x process in the same  
</span><br>
<span class="quotelev1">&gt; node stoped immediately,
</span><br>
<span class="quotelev1">&gt; but the job in the other node were still running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you think there is something wrong with my cluster or openmpi or  
</span><br>
<span class="quotelev1">&gt; the software named pw.x?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a command for openmpi to force all the process to stop in  
</span><br>
<span class="quotelev1">&gt; the cluster or a list of nodes to stop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vega Lew (weijia liu)
</span><br>
<span class="quotelev1">&gt; PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev1">&gt; State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev1">&gt; College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev1">&gt; Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 26 Jul 2008 12:52:08 -0400
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to cease the process triggered by  
</span><br>
<span class="quotelev1">&gt; OPENMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the cluster your using use a batch system?  Like SLURM, PBS or  
</span><br>
<span class="quotelev1">&gt; other?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so many have native ways to launch jobs that OMPI can use.  SO  
</span><br>
<span class="quotelev1">&gt; that when the job is killed all the children are also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2008, at 12:25 PM, vega lew wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Get news, entertainment and everything you care about at Live.com.  
</span><br>
<span class="quotelev1">&gt; Check it out!
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="6149.php">Ralph Castain: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6142.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
