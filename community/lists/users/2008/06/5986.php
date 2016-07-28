<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 20:50:47 2008" -->
<!-- isoreceived="20080625005047" -->
<!-- sent="Tue, 24 Jun 2008 18:50:28 -0600" -->
<!-- isosent="20080625005028" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="C486F274.5558%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48618D1E.90704_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Displaying Selected MCA Modules<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 20:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....well, the problem is as I suspected. The system doesn't see any
<br>
allocation of nodes to your job, and so it aborts with a crummy error
<br>
message that doesn't really tell you the problem. We are working on
<br>
improving them.
<br>
<p>How are you allocating nodes to the job? Does this BEOWULF_JOB_MAP contain
<br>
info on the nodes that are to be used?
<br>
<p>One of the biggest headaches with bproc is that there is no adhered-to
<br>
standard for describing the node allocation. What we implemented will
<br>
support LSF+Bproc (since that is what was being used here) and BJS. It
<br>
sounds like you are using something different - true?
<br>
<p>If so, we can work around it by just mapping enviro variables to what the
<br>
system is seeking. Or, IIRC, we could use the hostfile option (have to check
<br>
on that one).
<br>
<p>Ralph
<br>
<p><p><p>On 6/24/08 6:11 PM, &quot;Joshua Bernstein&quot; &lt;jbernstein_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I really appreciate all of your help and guidance on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Of more interest would be understanding why your build isn't working in
</span><br>
<span class="quotelev2">&gt;&gt; bproc. Could you send me the error you are getting? I'm betting that the
</span><br>
<span class="quotelev2">&gt;&gt; problem lies in determining the node allocation as that is the usual place
</span><br>
<span class="quotelev2">&gt;&gt; we hit problems - not much is &quot;standard&quot; about how allocations are
</span><br>
<span class="quotelev2">&gt;&gt; communicated in the bproc world, though we did try to support a few of the
</span><br>
<span class="quotelev2">&gt;&gt; more common methods.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alright, I've been playing around a bit more, and I think I'm
</span><br>
<span class="quotelev1">&gt; understanding what is going on. Though it seems that for whatever reason
</span><br>
<span class="quotelev1">&gt; the ORTE daemon is failing to launch on a remote node, and I'm left with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
</span><br>
<span class="quotelev1">&gt; [goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 4208) launched by the bproc PLS component on node 0 died
</span><br>
<span class="quotelev1">&gt; unexpectedly so we are aborting.
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
<span class="quotelev1">&gt; [goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file pls_bproc.c at line 717
</span><br>
<span class="quotelev1">&gt; [goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file pls_bproc.c at line 1164
</span><br>
<span class="quotelev1">&gt; [goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file rmgr_urm.c at line 462
</span><br>
<span class="quotelev1">&gt; [goldstar.penguincomputing.com:04207] mpirun: spawn failed with errno=-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I take the advice suggested in the note, and double check to make
</span><br>
<span class="quotelev1">&gt; sure our library caching is working. It nicely picks up the libraries
</span><br>
<span class="quotelev1">&gt; though once they are staged on the compute nodes, now mpirun just dies:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
</span><br>
<span class="quotelev1">&gt; [goldstar.penguincomputing.com:09335] [0,0,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; available in file ras_bjs.c at line 247
</span><br>
<span class="quotelev1">&gt; [ats_at_goldstar mpi]$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought maybe it was actually working, but I/O forwarding wasn't setup
</span><br>
<span class="quotelev1">&gt; properly, though checking the exit code shows that it infact crashed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
</span><br>
<span class="quotelev1">&gt; [ats_at_goldstar mpi]$ echo $?
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use the NODES envar, I can run a job on the head node though:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
</span><br>
<span class="quotelev1">&gt; Process 0 on goldstar.penguincomputing.com
</span><br>
<span class="quotelev1">&gt; pi is approximately 3.1416009869231254, Error is 0.0000083333333323
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.000097
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What also is interesting, and you suspected correctly, only the NODES
</span><br>
<span class="quotelev1">&gt; envar is being honored, things like BEOWULF_JOB_MAP is not being
</span><br>
<span class="quotelev1">&gt; honored. This probably correct as I imagine this BEOWULF_JOB_MAP envar
</span><br>
<span class="quotelev1">&gt; is Scyld specific and likely not implemented. This isn't a big issue
</span><br>
<span class="quotelev1">&gt; though, its something I'll likely add later on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5985.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
