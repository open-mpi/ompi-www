<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 15:55:20 2011" -->
<!-- isoreceived="20111130205520" -->
<!-- sent="Wed, 30 Nov 2011 20:54:58 +0000 (UTC)" -->
<!-- isosent="20111130205458" -->
<!-- name="Jaison Paul" -->
<!-- email="jmulerik_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh" -->
<!-- id="loom.20111130T214921-418_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66F88C02-48BB-4F65-B33E-146AC76130BB_at_cisco.com" -->
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
<strong>Date:</strong> 2011-11-30 15:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres &lt;at&gt; cisco.com&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2011, at 6:03 AM, Jaison Paul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, we have set up .ssh file on remote EC2 hosts. Is there anything else
</span><br>
that we should be taking care of when
<br>
<span class="quotelev1">&gt; dealing with EC2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have heard that Open MPI's TCP latency on EC2 is horrid.  I actually talked
</span><br>
with some Amazon / EC2 folks about
<br>
<span class="quotelev1">&gt; it at SC'11 a few weeks ago; we set a date to dive into it a bit deeper in
</span><br>
December.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No promises on when/if the TCP latency will improve, but it's definitely
</span><br>
something that we're looking at. 
<br>
<span class="quotelev1">&gt; My first *guess* is that it might have something to do with specifying
</span><br>
btl_tcp_if_include /
<br>
<span class="quotelev1">&gt; oob_tcp_if_include improperly (or not at all) -- but that's a SWAG.
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
<p><p>I dont understand the &quot;Permission denied (publickey)&quot; error. I access the EC2
<br>
instance using password-less ssh as follows:
<br>
<p>ssh ubuntu_at_ec2-67-202-**-***.compute-1.amazonaws.com
<br>
<p>So, what went wrong?
<br>
<p>hostinfo file is:
<br>
<p>[jmulerik_at_jaison Client]$ cat hostinfo 
<br>
localhost
<br>
ubuntu_at_[hidden]
<br>
<p>Jaison
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17877.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17875.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>In reply to:</strong> <a href="17865.php">Jeff Squyres: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
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
