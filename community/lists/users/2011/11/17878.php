<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 16:14:49 2011" -->
<!-- isoreceived="20111130211449" -->
<!-- sent="Wed, 30 Nov 2011 14:14:41 -0700" -->
<!-- isosent="20111130211441" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="F6436B25-1EB2-4402-A7E2-0EDE5C971BD8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20111130T215717-855_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 16:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Previous message:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I said, please do a quick search on the &quot;user&quot; mailing list. There are numerous discussions there about how to do this. Here is another one that dealt with getting thru the Amazon firewall:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2011/02/15646.php">http://www.open-mpi.org/community/lists/users/2011/02/15646.php</a>
<br>
<p><p>On Nov 30, 2011, at 1:58 PM, Jaison Paul wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain &lt;rhc &lt;at&gt; open-mpi.org&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This has come up before - I would suggest doing a quick search of &quot;ec2&quot; on our
</span><br>
<span class="quotelev1">&gt; user list. Here is one solution:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 14, 2011, at 10:50 AM, Barnet Wagman wrote:I've put together a simple
</span><br>
<span class="quotelev1">&gt; system for running OMPI on EC2 (Amazon's cloud computing service).  If you're
</span><br>
<span class="quotelev1">&gt; interested, see 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://norbl.com/ppe-ompi.html">http://norbl.com/ppe-ompi.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried little bit more:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have set the MCA parameters as follows:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca btl tcp,self --mca btl_tcp_if_exclude lo,eth0 -hostfile
</span><br>
<span class="quotelev1">&gt; hostinfo nbs-client -bynode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But still failed and got the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 24744) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I dont understand the &quot;Permission denied (publickey)&quot; error. I access the EC2
</span><br>
<span class="quotelev1">&gt; instance using password-less ssh as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh ubuntu &lt;at&gt; ec2-67-202-**-***.compute-1.amazonaws.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, what went wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hostinfo file is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [jmulerik &lt;at&gt; jaison Client]$ cat hostinfo 
</span><br>
<span class="quotelev1">&gt; localhost
</span><br>
<span class="quotelev1">&gt; ubuntu &lt;at&gt; ec2-67-202-48-118.compute-1.amazonaws.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Previous message:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
