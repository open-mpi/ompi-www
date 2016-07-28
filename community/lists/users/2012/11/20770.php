<?
$subject_val = "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 12:09:59 2012" -->
<!-- isoreceived="20121126170959" -->
<!-- sent="Mon, 26 Nov 2012 12:09:55 -0500" -->
<!-- isosent="20121126170955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes" -->
<!-- id="A88BEFE2-D355-4B60-8146-0BD1C85F6B5B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50B3301C.5090701_at_markomanolis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 12:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20776.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20776.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 26, 2012, at 4:02 AM, George Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; Another more generic question, is about discovering nodes with faulty memory. Is there any way to identify nodes with faulty memory? I found accidentally that a node with exact the same hardware couldn't execute an MPI application when it was using more than 12GB of ram while the second one could use all of the 48GB of memory. If I have 500+ nodes is difficult to check all of them and I am not familiar with any efficient solution. Initially I thought about memtester but it takes a lot of time. I know that this does not apply exactly on this mailing list but I thought that maybe an OpenMPI user knows something about.
</span><br>
<p>You really do want something like a memory tester.  MPI applications *might* beat on your memory to identify errors, but that's really just a side effect of HPC access patterns.  You really want a dedicated memory tester.
<br>
<p>If such a memory tester takes a long time, you might want to use mpirun to launch it on multiple nodes simultaneously to save some time...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20776.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20776.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
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
