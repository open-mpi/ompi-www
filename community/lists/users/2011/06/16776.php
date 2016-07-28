<?
$subject_val = "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 17:52:33 2011" -->
<!-- isoreceived="20110628215233" -->
<!-- sent="Tue, 28 Jun 2011 17:52:35 -0400" -->
<!-- isosent="20110628215235" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
<!-- id="4E0A14E3.712.4A1486E0_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
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
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpirun%20does%20not%20propagate%20environment%20from%20master%20node%20to%20slave%20nodes"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-06-28 17:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Maybe in reply to:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16778.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph!
<br>
<p>a) Yes, I know I could use only IB by &quot;--mca btl openib&quot;, but just 
<br>
want to make sure I am using IB interfaces. I am seeking an option 
<br>
to mpirun to print out the actual interconnect protocol, like --prot to 
<br>
mpirun in MPICH2.
<br>
<p>b) Yes, my default shell is bash, but I run a c-shell script from bash 
<br>
terminal, mpirun is invoked inside this c-shell script. I am using rsh 
<br>
launcher, exactly as your guess. I try different mpirun command in 
<br>
the c-shell, one of them is
<br>
<p>/path/to/bin/mpirun --mca btl openib --app appfile
<br>
<p>and mpirun and orted are under /path/to/bin, and necessary libs are 
<br>
under /path/to/lib. I tried the -x, --prefix, and -path, all does not work 
<br>
as expected to propagate the PATH and LD_LIBRARY_PATH, 
<br>
since orted is not found on slave nodes, although it shoud since it 
<br>
on the shared NFS partition.
<br>
<p>Thanks,
<br>
Yiguang
<br>
<p><p>On Jun 28, 2011, at 9:05 AM, yanyg_at_[hidden] wrote:
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
<p>Why specify tcp if you don't want it used? Just leave that off and it 
<br>
will have no choice but to use IB.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) when I run mpirun, I get the following message:
</span><br>
<p><span class="quotelev1">&gt; It seems orted is not found on slave nodes. If I set the PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH through --prefix to mpirun, or --path, or -x
</span><br>
<span class="quotelev1">&gt; options to mpirun, to make the orted and related dynamic libs
</span><br>
<span class="quotelev1">&gt; available on slave nodes, it does not work as expected from 
</span><br>
mpirun
<br>
<span class="quotelev1">&gt; manual page. The only working case is that I set PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH in ~/.bashrc for mpirun, and this .bashrc is
</span><br>
<span class="quotelev1">&gt; invoked by slave nodes too for login shell. I do not want to set 
</span><br>
PATH
<br>
<span class="quotelev1">&gt; and LD_LIBRARY_PATH in ~/.bashrc, but instead to set options 
</span><br>
to
<br>
<span class="quotelev1">&gt; mpirun directly.
</span><br>
<p>Should work with either prefix or -x options, assuming the right 
<br>
syntax with the latter.
<br>
<p>I take it your default shell is bash, and that you are using the rsh 
<br>
launcher (as opposed to something like torque)? Are you launching 
<br>
from your default shell, or did you perhaps change shell?
<br>
<p>Can you send the actual mpirun command you typed? 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16775.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Maybe in reply to:</strong> <a href="16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16777.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16778.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
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
