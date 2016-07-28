<?
$subject_val = "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 11:30:25 2012" -->
<!-- isoreceived="20121127163025" -->
<!-- sent="Tue, 27 Nov 2012 17:30:06 +0100" -->
<!-- isosent="20121127163006" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes" -->
<!-- id="50B4EA8E.5040604_at_markomanolis.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A88BEFE2-D355-4B60-8146-0BD1C85F6B5B_at_cisco.com" -->
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
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-27 11:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20777.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>Of course I was thinking to execute memtester on each node on the same 
<br>
time and gather the outputs. However executing memtester on a node with 
<br>
48GB memory it takes a lot of time (more than 1-2 hours, I don't 
<br>
remember exactly, maybe even more because I cancelled its execution) and 
<br>
I have to consume resources just for testing. So I was curious if you 
<br>
know a tool/procedure that works much faster. Of course filling the 
<br>
memory with an application works also but I don't know how right it is.
<br>
<p>Best regards,
<br>
George Markomanolis
<br>
<p>On 11/26/2012 06:09 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 26, 2012, at 4:02 AM, George Markomanolis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another more generic question, is about discovering nodes with faulty memory. Is there any way to identify nodes with faulty memory? I found accidentally that a node with exact the same hardware couldn't execute an MPI application when it was using more than 12GB of ram while the second one could use all of the 48GB of memory. If I have 500+ nodes is difficult to check all of them and I am not familiar with any efficient solution. Initially I thought about memtester but it takes a lot of time. I know that this does not apply exactly on this mailing list but I thought that maybe an OpenMPI user knows something about.
</span><br>
<span class="quotelev1">&gt; You really do want something like a memory tester.  MPI applications *might* beat on your memory to identify errors, but that's really just a side effect of HPC access patterns.  You really want a dedicated memory tester.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If such a memory tester takes a long time, you might want to use mpirun to launch it on multiple nodes simultaneously to save some time...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20777.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
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
