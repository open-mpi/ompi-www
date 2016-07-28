<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 16:00:15 2011" -->
<!-- isoreceived="20111130210015" -->
<!-- sent="Wed, 30 Nov 2011 20:58:23 +0000 (UTC)" -->
<!-- isosent="20111130205823" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="loom.20111130T215717-855_at_post.gmane.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C597EE70-41AE-483B-96E4-DF6BD3192F28_at_open-mpi.org" -->
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
<strong>From:</strong> Jaison Paul (<em>jmulerik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 15:58:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17876.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc &lt;at&gt; open-mpi.org&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has come up before - I would suggest doing a quick search of &quot;ec2&quot; on our
</span><br>
user list. Here is one solution:
<br>
<span class="quotelev1">&gt; On Jun 14, 2011, at 10:50 AM, Barnet Wagman wrote:I've put together a simple
</span><br>
system for running OMPI on EC2 (Amazon's cloud computing service). &#194;&#160;If you're
<br>
interested, see&#194;&#160;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://norbl.com/ppe-ompi.html">http://norbl.com/ppe-ompi.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have tried little bit more:
<br>
<p>I have set the MCA parameters as follows:
<br>
mpirun -np 1 --mca btl tcp,self --mca btl_tcp_if_exclude lo,eth0 -hostfile
<br>
hostinfo nbs-client -bynode
<br>
<p>But still failed and got the following error:
<br>
<p>Permission denied (publickey).
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 24744) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>I dont understand the &quot;Permission denied (publickey)&quot; error. I access the EC2
<br>
instance using password-less ssh as follows:
<br>
<p>ssh ubuntu &lt;at&gt; ec2-67-202-**-***.compute-1.amazonaws.com
<br>
<p>So, what went wrong?
<br>
<p>hostinfo file is:
<br>
<p>[jmulerik &lt;at&gt; jaison Client]$ cat hostinfo 
<br>
localhost
<br>
ubuntu &lt;at&gt; ec2-67-202-48-118.compute-1.amazonaws.com
<br>
<p>Jaison
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17876.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>In reply to:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Reply:</strong> <a href="17878.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
