<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 20:11:13 2008" -->
<!-- isoreceived="20080625001113" -->
<!-- sent="Tue, 24 Jun 2008 17:11:10 -0700" -->
<!-- isosent="20080625001110" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="48618D1E.90704_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C485634B.DF66%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-24 20:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5984.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I really appreciate all of your help and guidance on this.
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Of more interest would be understanding why your build isn't working in
</span><br>
<span class="quotelev1">&gt; bproc. Could you send me the error you are getting? I'm betting that the
</span><br>
<span class="quotelev1">&gt; problem lies in determining the node allocation as that is the usual place
</span><br>
<span class="quotelev1">&gt; we hit problems - not much is &quot;standard&quot; about how allocations are
</span><br>
<span class="quotelev1">&gt; communicated in the bproc world, though we did try to support a few of the
</span><br>
<span class="quotelev1">&gt; more common methods.
</span><br>
<p>Alright, I've been playing around a bit more, and I think I'm 
<br>
understanding what is going on. Though it seems that for whatever reason 
<br>
the ORTE daemon is failing to launch on a remote node, and I'm left with:
<br>
<p>[ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
<br>
[goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Not 
<br>
available in file ras_bjs.c at line 247
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 4208) launched by the bproc PLS component on node 0 died
<br>
unexpectedly so we are aborting.
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
[goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Error in 
<br>
file pls_bproc.c at line 717
<br>
[goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Error in 
<br>
file pls_bproc.c at line 1164
<br>
[goldstar.penguincomputing.com:04207] [0,0,0] ORTE_ERROR_LOG: Error in 
<br>
file rmgr_urm.c at line 462
<br>
[goldstar.penguincomputing.com:04207] mpirun: spawn failed with errno=-1
<br>
<p>So, I take the advice suggested in the note, and double check to make 
<br>
sure our library caching is working. It nicely picks up the libraries 
<br>
though once they are staged on the compute nodes, now mpirun just dies:
<br>
<p>[ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
<br>
[goldstar.penguincomputing.com:09335] [0,0,0] ORTE_ERROR_LOG: Not 
<br>
available in file ras_bjs.c at line 247
<br>
[ats_at_goldstar mpi]$
<br>
<p>I thought maybe it was actually working, but I/O forwarding wasn't setup 
<br>
properly, though checking the exit code shows that it infact crashed:
<br>
<p>[ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
<br>
[ats_at_goldstar mpi]$ echo $?
<br>
1
<br>
<p>Any ideas here?
<br>
<p>If I use the NODES envar, I can run a job on the head node though:
<br>
<p>[ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 1 ./cpi
<br>
Process 0 on goldstar.penguincomputing.com
<br>
pi is approximately 3.1416009869231254, Error is 0.0000083333333323
<br>
wall clock time = 0.000097
<br>
<p>What also is interesting, and you suspected correctly, only the NODES 
<br>
envar is being honored, things like BEOWULF_JOB_MAP is not being 
<br>
honored. This probably correct as I imagine this BEOWULF_JOB_MAP envar 
<br>
is Scyld specific and likely not implemented. This isn't a big issue 
<br>
though, its something I'll likely add later on.
<br>
<p>-Joshua Bernstein
<br>
Software Engineer
<br>
Penguin Computing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5984.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5974.php">Ralph H Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
