<?
$subject_val = "Re: [OMPI users] How to cease the process triggered by OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 15:52:52 2008" -->
<!-- isoreceived="20080728195252" -->
<!-- sent="Mon, 28 Jul 2008 15:49:22 -0400" -->
<!-- isosent="20080728194922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to cease the process triggered by OPENMPI" -->
<!-- id="54325364-3111-4B14-B3F4-47E4581EA58B_at_cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BAY124-W594927B98F37219F4748AAA4830_at_phx.gbl" -->
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
<strong>Date:</strong> 2008-07-28 15:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6167.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Killing mpirun would be your easiest solution.
<br>
<p>Or you could just run &quot;mpirun ...&quot; inside &quot;screen&quot;, and if you ever  
<br>
want to kill it, re-attach to the screen and hit ctrl-C to kill  
<br>
mpirun.  See the man page screen(1).  screen is your friend for very  
<br>
long-running jobs, particularly if you're connecting via a laptop and  
<br>
need to hop on and off the network -- you can just &quot;detach&quot; from the  
<br>
session and &quot;reattach&quot; to it later.  Screen is some of the best 70's  
<br>
technology that is still highly relevant today.  :-)
<br>
<p><p>On Jul 28, 2008, at 1:24 PM, vega lew wrote:
<br>
<p><span class="quotelev1">&gt; OK, thank you for your reply.
</span><br>
<span class="quotelev1">&gt; I'll try to make a script to kill all the process using 'killall  
</span><br>
<span class="quotelev1">&gt; pw.x' .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you again.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Date: Mon, 28 Jul 2008 11:05:33 -0400
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to cease the process triggered by  
</span><br>
<span class="quotelev1">&gt; OPENMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You would be much better off to not use nohup, and then just kill  
</span><br>
<span class="quotelev1">&gt; the mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I mean is a batch system (<a href="http://www.clusterresources.com/pages/products/torque-resource-manager.php">http://www.clusterresources.com/pages/products/torque-resource-manager.php</a> 
</span><br>
<span class="quotelev1">&gt; ).  Most batch systems have a launching system that lets you kill  
</span><br>
<span class="quotelev1">&gt; all the remote processes when you kill the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look at how MPI works.  When you are starting the way you are  
</span><br>
<span class="quotelev1">&gt; starting MPI (without a batch system) you are using ether ssh or rsh  
</span><br>
<span class="quotelev1">&gt; to start the remote processes.  Once these are started, the user has  
</span><br>
<span class="quotelev1">&gt; no control over the remote processes.
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
<span class="quotelev1">&gt; On Jul 27, 2008, at 2:04 PM, vega lew wrote:
</span><br>
<span class="quotelev1">&gt; Dear Brock Palen,
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
<span class="quotelev1">&gt; process id and kill the process. If there are 100 processors or more  
</span><br>
<span class="quotelev1">&gt; for one mpi job, the situation even worse.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Connect to the next generation of MSN Messenger  Get it now!  
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
<li><strong>Next message:</strong> <a href="6167.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6165.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
