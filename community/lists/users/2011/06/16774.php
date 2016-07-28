<?
$subject_val = "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 16:07:55 2011" -->
<!-- isoreceived="20110628200755" -->
<!-- sent="Tue, 28 Jun 2011 14:07:47 -0600" -->
<!-- isosent="20110628200747" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
<!-- id="5C1F92F3-D3FD-48DE-98B4-B523723AA167_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E09B58F.17675.48A02816_at_localhost" -->
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
<strong>Date:</strong> 2011-06-28 16:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16773.php">Bill Johnstone: "[OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>In reply to:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16776.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 28, 2011, at 9:05 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed Open MPI 1.4.3 on our new HPC blades, with Infiniband 
</span><br>
<span class="quotelev1">&gt; interconnection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My system environments are as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1)uname -a output:  
</span><br>
<span class="quotelev1">&gt; Linux gulftown 2.6.18-194.el5 #1 SMP Tue Mar 16 21:52:39 EDT 
</span><br>
<span class="quotelev1">&gt; 2010 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) /home is mounted over all nodes, and mpirun is started under 
</span><br>
<span class="quotelev1">&gt; /home/...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI and application codes are compiled with intel(R) 
</span><br>
<span class="quotelev1">&gt; compilers V11. Infiniband stack is Mellanox OFED 1.5.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two questions about mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) how could I get to know what is the network interconnect 
</span><br>
<span class="quotelev1">&gt; protocol used by the MPI application? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I specify &quot;--mca btl openib,self,sm,tcp&quot; to mpirun, but I want to 
</span><br>
<span class="quotelev1">&gt; make sure it really uses infiniband interconnect.
</span><br>
<p>Why specify tcp if you don't want it used? Just leave that off and it will have no choice but to use IB.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) when I run mpirun, I get the following message:
</span><br>
<p><span class="quotelev1">&gt; It seems orted is not found on slave nodes. If I set the PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH through --prefix to mpirun, or --path, or -x 
</span><br>
<span class="quotelev1">&gt; options to mpirun, to make the orted and related dynamic libs 
</span><br>
<span class="quotelev1">&gt; available on slave nodes, it does not work as expected from mpirun 
</span><br>
<span class="quotelev1">&gt; manual page. The only working case is that I set PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH in ~/.bashrc for mpirun, and this .bashrc is 
</span><br>
<span class="quotelev1">&gt; invoked by slave nodes too for login shell. I do not want to set PATH 
</span><br>
<span class="quotelev1">&gt; and LD_LIBRARY_PATH in ~/.bashrc, but instead to set options to 
</span><br>
<span class="quotelev1">&gt; mpirun directly.
</span><br>
<p>Should work with either prefix or -x options, assuming the right syntax with the latter.
<br>
<p>I take it your default shell is bash, and that you are using the rsh launcher (as opposed to something like torque)? Are you launching from your default shell, or did you perhaps change shell?
<br>
<p>Can you send the actual mpirun command you typed?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16773.php">Bill Johnstone: "[OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>In reply to:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16776.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
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
