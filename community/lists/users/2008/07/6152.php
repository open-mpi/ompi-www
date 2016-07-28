<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:16:10 2008" -->
<!-- isoreceived="20080728151610" -->
<!-- sent="Mon, 28 Jul 2008 11:15:55 -0400" -->
<!-- isosent="20080728151555" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="488DE2AB.2050906_at_Sun.COM" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 11:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One other option which should kill of processes and cleanup is the 
<br>
orte-clean command.  In your case, you could do the following:
<br>
<p>mpirun -hostfile ~/hostfile --pernode orte-clean
<br>
<p>There is a man page for it also.
<br>
<p>Rolf
<br>
<p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; You would be much better off to not use nohup, and then just kill the 
</span><br>
<span class="quotelev1">&gt; mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I mean is a batch system 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.clusterresources.com/pages/products/torque-resource-manager.php">http://www.clusterresources.com/pages/products/torque-resource-manager.php</a>). 
</span><br>
<span class="quotelev1">&gt;  Most batch systems have a launching system that lets you kill all the 
</span><br>
<span class="quotelev1">&gt; remote processes when you kill the job.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Look at how MPI works.  When you are starting the way you are starting 
</span><br>
<span class="quotelev1">&gt; MPI (without a batch system) you are using ether ssh or rsh to start the 
</span><br>
<span class="quotelev1">&gt; remote processes.  Once these are started, the user has no control over 
</span><br>
<span class="quotelev1">&gt; the remote processes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try killing your mpirun not your orted or pw.x.  You will be much 
</span><br>
<span class="quotelev1">&gt; happier with a batch system. 
</span><br>
<span class="quotelev1">&gt; Or make a script that ssh to hostfile and kills pw.x on all of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2008, at 2:04 PM, vega lew wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Brock Palen,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your responding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My linux is redhat enterprise 4. My compiler is 10.1.015 version of 
</span><br>
<span class="quotelev2">&gt;&gt; intel fortran and intel c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You said 'when the job is killed all the children are also'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I started my OPENMPI job using the nohup command to put the job 
</span><br>
<span class="quotelev2">&gt;&gt; background like this,
</span><br>
<span class="quotelev2">&gt;&gt; &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output  &amp; &quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I killed one of the process named pw.x, all the others didn't stop.
</span><br>
<span class="quotelev2">&gt;&gt; When I killed the process named orted, the pw.x process in the same 
</span><br>
<span class="quotelev2">&gt;&gt; node stoped immediately,
</span><br>
<span class="quotelev2">&gt;&gt; but the job in the other node were still running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you think there is something wrong with my cluster or openmpi or 
</span><br>
<span class="quotelev2">&gt;&gt; the software named pw.x?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a command for openmpi to force all the process to stop in the 
</span><br>
<span class="quotelev2">&gt;&gt; cluster or a list of nodes to stop. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vega Lew (weijia liu)
</span><br>
<span class="quotelev2">&gt;&gt; PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev2">&gt;&gt; State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev2">&gt;&gt; College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev2">&gt;&gt; Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; From: brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sat, 26 Jul 2008 12:52:08 -0400
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] How to cease the process triggered by OPENMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the cluster your using use a batch system?  Like SLURM, PBS or other?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so many have native ways to launch jobs that OMPI can use.  SO that 
</span><br>
<span class="quotelev2">&gt;&gt; when the job is killed all the children are also.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 26, 2008, at 12:25 PM, vega lew wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I have enjoyed the openmpi a couple of days. With the help of
</span><br>
<span class="quotelev2">&gt;&gt;     openmpi I could run ESPRESSO efficiently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I started the mpi-job by the openmpi command like this,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output &amp;&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     When I want to stop the job before it finished, I find it not easy
</span><br>
<span class="quotelev2">&gt;&gt;     to stop all the process manually. When I killed the process
</span><br>
<span class="quotelev2">&gt;&gt;     in one node of the cluster, the processes in other nodes were
</span><br>
<span class="quotelev2">&gt;&gt;     still running. So I must ssh to every node, find the
</span><br>
<span class="quotelev2">&gt;&gt;     process id and kill the process. If there are 100 processors or
</span><br>
<span class="quotelev2">&gt;&gt;     more for one mpi job, the situation even worse.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Is there a command for openmpi to force all the process to stop in
</span><br>
<span class="quotelev2">&gt;&gt;     the cluster or a list of nodes to stop. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     vega
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Vega Lew &#239;&#188;&#136;weijia liu)
</span><br>
<span class="quotelev2">&gt;&gt;     PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev2">&gt;&gt;     State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev2">&gt;&gt;     College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev2">&gt;&gt;     Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
</span><br>
<span class="quotelev2">&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     Explore the seven wonders of the world Learn more!
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en-US&amp;form=QBRE">http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en-US&amp;form=QBRE</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Get news, entertainment and everything you care about at Live.com. 
</span><br>
<span class="quotelev2">&gt;&gt; Check it out! &lt;<a href="http://www.live.com/getstarted.aspx">http://www.live.com/getstarted.aspx</a> &gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="6151.php">Mark Borgerding: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6150.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
