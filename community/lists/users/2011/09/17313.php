<?
$subject_val = "Re: [OMPI users] mpiexec option for node failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 15 16:15:05 2011" -->
<!-- isoreceived="20110915201505" -->
<!-- sent="Thu, 15 Sep 2011 16:14:52 -0400" -->
<!-- isosent="20110915201452" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec option for node failure" -->
<!-- id="6EFBA84C-06C1-4B5F-AB4E-6828E0590CE8_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="806F77DA-7A0D-4B08-BC1D-CFD7658C71F6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec option for node failure<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-15 16:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17314.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17312.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>The Open MPI community did consider such as option, but it deemed it as uninteresting. However, we (UTK team) have a patched version supporting several fault tolerant modes, including the one you described in your email. If you are interested please contact me directly.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Sep 12, 2011, at 20:43 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We don't have anything similar in OMPI. There are fault tolerance modes, but not like the one you describe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2011, at 5:52 PM, Rob Stewart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have implemented a simple fault tolerant ping pong C program with MPI, here: <a href="http://pastebin.com/7mtmQH2q">http://pastebin.com/7mtmQH2q</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 offers a parameter with mpiexec:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpiexec -disable-auto-cleanup
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; .. as described here: <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1421">http://trac.mcs.anl.gov/projects/mpich2/ticket/1421</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is fault tolerant in the respect that, when I ssh to one of the nodes in the hosts file, and kill the relevant process, the MPI job is not terminated. Simply, the ping will not prompt a pong from the dead node, but the ping-pong runs forever on the remaining live nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is such an feature available for openMPI, either via mpiexec or some other means?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Rob Stewart
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
<li><strong>Next message:</strong> <a href="17314.php">郝文平: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>Previous message:</strong> <a href="17312.php">Reuti: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
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
