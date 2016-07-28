<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 15:47:50 2008" -->
<!-- isoreceived="20080728194750" -->
<!-- sent="Mon, 28 Jul 2008 15:47:40 -0400" -->
<!-- isosent="20080728194740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="FB7CF2D8-25E1-4D34-A080-6D541C88975D_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="12F8119F-4E40-49FE-8ECC-C4CAB0FB4FC8_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 15:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
orte-clean a new feature in v1.3.  Rolf is just excited about it.  ;-)
<br>
<p>(actually, I think it wasn't ready for prime time in the v1.2 series  
<br>
so we pulled it from the 1.2 distributions)
<br>
<p><p>On Jul 28, 2008, at 11:23 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I don't see this this command in my 1.2.6 install.  There also isn't  
</span><br>
<span class="quotelev1">&gt; a man page.
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
<span class="quotelev1">&gt; On Jul 28, 2008, at 11:15 AM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One other option which should kill of processes and cleanup is the  
</span><br>
<span class="quotelev2">&gt;&gt; orte-clean command.  In your case, you could do the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -hostfile ~/hostfile --pernode orte-clean
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a man page for it also.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You would be much better off to not use nohup, and then just kill  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I mean is a batch system (<a href="http://www.clusterresources.com/pages/products/torque-resource-manager.php">http://www.clusterresources.com/pages/products/torque-resource-manager.php</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ).  Most batch systems have a launching system that lets you kill  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the remote processes when you kill the job.  Look at how MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works.  When you are starting the way you are starting MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (without a batch system) you are using ether ssh or rsh to start  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the remote processes.  Once these are started, the user has no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control over the remote processes. Try killing your mpirun not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your orted or pw.x.  You will be much happier with a batch system.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or make a script that ssh to hostfile and kills pw.x on all of them.
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
<span class="quotelev3">&gt;&gt;&gt; On Jul 27, 2008, at 2:04 PM, vega lew wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Brock Palen,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for your responding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My linux is redhat enterprise 4. My compiler is 10.1.015 version  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of intel fortran and intel c.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You said 'when the job is killed all the children are also'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I started my OPENMPI job using the nohup command to put the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job background like this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt; output   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; &quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I killed one of the process named pw.x, all the others  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; didn't stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I killed the process named orted, the pw.x process in the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same node stoped immediately,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but the job in the other node were still running.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you think there is something wrong with my cluster or openmpi  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or the software named pw.x?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a command for openmpi to force all the process to stop  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the cluster or a list of nodes to stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Vega Lew (weijia liu)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nanjing University of Technology, 210009, Nanjing, Jiangsu, China
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Sat, 26 Jul 2008 12:52:08 -0400
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] How to cease the process triggered by  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPENMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does the cluster your using use a batch system?  Like SLURM, PBS  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or other?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If so many have native ways to launch jobs that OMPI can use.  SO  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that when the job is killed all the children are also.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 26, 2008, at 12:25 PM, vega lew wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I have enjoyed the openmpi a couple of days. With the help of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    openmpi I could run ESPRESSO efficiently.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I started the mpi-job by the openmpi command like this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &quot; nohup mpirun -hostfile ~/hostfile -np 64 pw.x &lt; input &gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output &amp;&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    When I want to stop the job before it finished, I find it not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; easy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    to stop all the process manually. When I killed the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    in one node of the cluster, the processes in other nodes were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    still running. So I must ssh to every node, find the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    process id and kill the process. If there are 100 processors or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    more for one mpi job, the situation even worse.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Is there a command for openmpi to force all the process to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stop in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    the cluster or a list of nodes to stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    vega
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Vega Lew &#239;&#188;&#136;weijia liu)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    PH.D Candidate in Chemical Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    State Key Laboratory of Materials-oriented Chemical Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    College of Chemistry and Chemical Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Nanjing University of Technology, 210009, Nanjing, Jiangsu,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; China
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Explore the seven wonders of the world Learn more!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;<a href="http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en-US&amp;form=QBRE">http://search.msn.com/results.aspx?q=7+wonders+world&amp;mkt=en-US&amp;form=QBRE</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Get news, entertainment and everything you care about at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Live.com. Check it out! &lt;<a href="http://www.live.com/getstarted.aspx">http://www.live.com/getstarted.aspx</a> &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 781-442-3043
</span><br>
<span class="quotelev2">&gt;&gt; =========================
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6163.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6153.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
