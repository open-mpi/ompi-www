<?
$subject_val = "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 22:03:19 2011" -->
<!-- isoreceived="20110629020319" -->
<!-- sent="Tue, 28 Jun 2011 20:03:11 -0600" -->
<!-- isosent="20110629020311" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
<!-- id="31E6819E-5D27-4F42-8823-D00F7CF8FF65_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E0A14E3.712.4A1486E0_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-28 22:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="16776.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 28, 2011, at 3:52 PM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Ralph!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) Yes, I know I could use only IB by &quot;--mca btl openib&quot;, but just 
</span><br>
<span class="quotelev1">&gt; want to make sure I am using IB interfaces. I am seeking an option 
</span><br>
<span class="quotelev1">&gt; to mpirun to print out the actual interconnect protocol, like --prot to 
</span><br>
<span class="quotelev1">&gt; mpirun in MPICH2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) Yes, my default shell is bash, but I run a c-shell script from bash 
</span><br>
<span class="quotelev1">&gt; terminal, mpirun is invoked inside this c-shell script. I am using rsh 
</span><br>
<span class="quotelev1">&gt; launcher, exactly as your guess. I try different mpirun command in 
</span><br>
<span class="quotelev1">&gt; the c-shell, one of them is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /path/to/bin/mpirun --mca btl openib --app appfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and mpirun and orted are under /path/to/bin, and necessary libs are 
</span><br>
<span class="quotelev1">&gt; under /path/to/lib. I tried the -x, --prefix, and -path, all does not work 
</span><br>
<span class="quotelev1">&gt; as expected to propagate the PATH and LD_LIBRARY_PATH, 
</span><br>
<span class="quotelev1">&gt; since orted is not found on slave nodes, although it shoud since it 
</span><br>
<span class="quotelev1">&gt; on the shared NFS partition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I looked a little deeper into this. I keep forgetting that we changed our default settings a few years ago. In the dim past, OMPI would always probe the remote node to find out what shell it was using, and then use the proper command syntax for that shell. However, people complained about the extra time during launch, and very very few people actually used mis-matched shells.
<br>
<p>So we changed the setting the other way to default to assuming the remote shell is the same as the local one. For those like yourself that actually do have a mismatch, we left a parameter you can set to override that assumption. Just add &quot;-mca plm_rsh_assume_same_shell 0&quot; to your mpirun cmd line and it should resolve the problem.
<br>
<p><p><p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 28, 2011, at 9:05 AM, yanyg_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I installed Open MPI 1.4.3 on our new HPC blades, with Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; interconnection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My system environments are as:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1)uname -a output:
</span><br>
<span class="quotelev2">&gt;&gt; Linux gulftown 2.6.18-194.el5 #1 SMP Tue Mar 16 21:52:39 EDT
</span><br>
<span class="quotelev2">&gt;&gt; 2010 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) /home is mounted over all nodes, and mpirun is started under
</span><br>
<span class="quotelev2">&gt;&gt; /home/...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI and application codes are compiled with intel(R)
</span><br>
<span class="quotelev2">&gt;&gt; compilers V11. Infiniband stack is Mellanox OFED 1.5.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have two questions about mpirun:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a) how could I get to know what is the network interconnect
</span><br>
<span class="quotelev2">&gt;&gt; protocol used by the MPI application?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I specify &quot;--mca btl openib,self,sm,tcp&quot; to mpirun, but I want to
</span><br>
<span class="quotelev2">&gt;&gt; make sure it really uses infiniband interconnect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why specify tcp if you don't want it used? Just leave that off and it 
</span><br>
<span class="quotelev1">&gt; will have no choice but to use IB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b) when I run mpirun, I get the following message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems orted is not found on slave nodes. If I set the PATH and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH through --prefix to mpirun, or --path, or -x
</span><br>
<span class="quotelev2">&gt;&gt; options to mpirun, to make the orted and related dynamic libs
</span><br>
<span class="quotelev2">&gt;&gt; available on slave nodes, it does not work as expected from 
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev2">&gt;&gt; manual page. The only working case is that I set PATH and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH in ~/.bashrc for mpirun, and this .bashrc is
</span><br>
<span class="quotelev2">&gt;&gt; invoked by slave nodes too for login shell. I do not want to set 
</span><br>
<span class="quotelev1">&gt; PATH
</span><br>
<span class="quotelev2">&gt;&gt; and LD_LIBRARY_PATH in ~/.bashrc, but instead to set options 
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; mpirun directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should work with either prefix or -x options, assuming the right 
</span><br>
<span class="quotelev1">&gt; syntax with the latter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I take it your default shell is bash, and that you are using the rsh 
</span><br>
<span class="quotelev1">&gt; launcher (as opposed to something like torque)? Are you launching 
</span><br>
<span class="quotelev1">&gt; from your default shell, or did you perhaps change shell?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the actual mpirun command you typed? 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>In reply to:</strong> <a href="16776.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
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
