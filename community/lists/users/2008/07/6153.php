<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:25:02 2008" -->
<!-- isoreceived="20080728152502" -->
<!-- sent="Mon, 28 Jul 2008 11:23:48 -0400" -->
<!-- isosent="20080728152348" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="12F8119F-4E40-49FE-8ECC-C4CAB0FB4FC8_at_umich.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="488DE2AB.2050906_at_Sun.COM" -->
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
<strong>Date:</strong> 2008-07-28 11:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6154.php">Mark Dixon: "[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6164.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6164.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see this this command in my 1.2.6 install.  There also isn't  
<br>
a man page.
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
<p><p><p>On Jul 28, 2008, at 11:15 AM, Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One other option which should kill of processes and cleanup is the  
</span><br>
<span class="quotelev1">&gt; orte-clean command.  In your case, you could do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile ~/hostfile --pernode orte-clean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a man page for it also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You would be much better off to not use nohup, and then just kill  
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; What I mean is a batch system (<a href="http://www.clusterresources.com/">http://www.clusterresources.com/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; pages/products/torque-resource-manager.php).  Most batch systems  
</span><br>
<span class="quotelev2">&gt;&gt; have a launching system that lets you kill all the remote  
</span><br>
<span class="quotelev2">&gt;&gt; processes when you kill the job.  Look at how MPI works.  When you  
</span><br>
<span class="quotelev2">&gt;&gt; are starting the way you are starting MPI (without a batch system)  
</span><br>
<span class="quotelev2">&gt;&gt; you are using ether ssh or rsh to start the remote processes.   
</span><br>
<span class="quotelev2">&gt;&gt; Once these are started, the user has no control over the remote  
</span><br>
<span class="quotelev2">&gt;&gt; processes. Try killing your mpirun not your orted or pw.x.  You  
</span><br>
<span class="quotelev2">&gt;&gt; will be much happier with a batch system. Or make a script that  
</span><br>
<span class="quotelev2">&gt;&gt; ssh to hostfile and kills pw.x on all of them.
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
<span class="quotelev2">&gt;&gt; On Jul 27, 2008, at 2:04 PM, vega lew wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Brock Palen,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your responding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My linux is redhat enterprise 4. My compiler is 10.1.015 version  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of intel fortran and intel c.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You said 'when the job is killed all the children are also'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I started my OPENMPI job using the nohup command to put the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job background like this,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp; &quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I killed one of the process named pw.x, all the others  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I killed the process named orted, the pw.x process in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same node stoped immediately,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but the job in the other node were still running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you think there is something wrong with my cluster or openmpi  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or the software named pw.x?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a command for openmpi to force all the process to stop  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the cluster or a list of nodes to stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vega Lew (weijia liu)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Sat, 26 Jul 2008 12:52:08 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] How to cease the process triggered by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPENMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does the cluster your using use a batch system?  Like SLURM, PBS  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or other?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so many have native ways to launch jobs that OMPI can use.  SO  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that when the job is killed all the children are also.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 26, 2008, at 12:25 PM, vega lew wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I have enjoyed the openmpi a couple of days. With the help of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     openmpi I could run ESPRESSO efficiently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I started the mpi-job by the openmpi command like this,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output &amp;&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     When I want to stop the job before it finished, I find it not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; easy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to stop all the process manually. When I killed the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     in one node of the cluster, the processes in other nodes were
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     still running. So I must ssh to every node, find the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     process id and kill the process. If there are 100 processors or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     more for one mpi job, the situation even worse.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Is there a command for openmpi to force all the process to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the cluster or a list of nodes to stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     vega
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Vega Lew &#239;&#188;&#136;weijia liu)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Nanjing University of Technology, 210009, Nanjing, Jiangsu,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; China
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Explore the seven wonders of the world Learn more!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;<a href="http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en">http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en</a>- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; US&amp;form=QBRE&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Get news, entertainment and everything you care about at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Live.com. Check it out! &lt;<a href="http://www.live.com/getstarted.aspx">http://www.live.com/getstarted.aspx</a> &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6154.php">Mark Dixon: "[OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6152.php">Rolf Vandevaart: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6164.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>Reply:</strong> <a href="6164.php">Jeff Squyres: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
