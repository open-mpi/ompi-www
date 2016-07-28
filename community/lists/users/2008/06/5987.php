<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 21:13:40 2008" -->
<!-- isoreceived="20080625011340" -->
<!-- sent="Tue, 24 Jun 2008 18:13:18 -0700" -->
<!-- isosent="20080625011318" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="48619BAE.70301_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C486F274.5558%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-06-24 21:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm....well, the problem is as I suspected. The system doesn't see any
</span><br>
<span class="quotelev1">&gt; allocation of nodes to your job, and so it aborts with a crummy error
</span><br>
<span class="quotelev1">&gt; message that doesn't really tell you the problem. We are working on
</span><br>
<span class="quotelev1">&gt; improving them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How are you allocating nodes to the job? Does this BEOWULF_JOB_MAP contain
</span><br>
<span class="quotelev1">&gt; info on the nodes that are to be used?
</span><br>
<p>BEOWULF_JOB_MAP is an array of integers separated by a colon that 
<br>
contains node mapping information. The easiest way to explain is is just 
<br>
my example:
<br>
<p>BEOWULF_JOB_MAP=0:0
<br>
<p>This is a two process job, with each process running on node 0.
<br>
<p>BEOWULF_JOB_MAP=0:1:1
<br>
<p>A three process job with the first process on node 0, and the next two 
<br>
on node 1.
<br>
<p>All said, this is of little consequent right now, and we/I can worry 
<br>
about adding support for this later.
<br>
<p><span class="quotelev1">&gt; One of the biggest headaches with bproc is that there is no adhered-to
</span><br>
<span class="quotelev1">&gt; standard for describing the node allocation. What we implemented will
</span><br>
<span class="quotelev1">&gt; support LSF+Bproc (since that is what was being used here) and BJS. It
</span><br>
<span class="quotelev1">&gt; sounds like you are using something different - true?
</span><br>
<p>Understood. We aren't using BJS, and have long depricated BJS in favor 
<br>
of bundling TORQUE with Scyld instead, though legacy functionality for 
<br>
things like envars like NP, NO_LOCAL, and BEOWULF_JOB_MAP are present in 
<br>
the MPICH extensions we've put together.
<br>
<p><span class="quotelev1">&gt; If so, we can work around it by just mapping enviro variables to what the
</span><br>
<span class="quotelev1">&gt; system is seeking. Or, IIRC, we could use the hostfile option (have to check
</span><br>
<span class="quotelev1">&gt; on that one).
</span><br>
<p>Exactly, but for now, if I make sure the NODES envar is setup correctly 
<br>
and make sure the OpenMPI is NFS mounted, and I actually have to copy 
<br>
out the mca libraries (libcache doesn't seem to work), I actually end up 
<br>
with something running!
<br>
<p>[ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 2 ./cpi
<br>
Process 0 on n0
<br>
pi is approximately 3.1416009869231241, Error is 0.0000083333333309
<br>
wall clock time = 0.005377
<br>
Process 1 on n0
<br>
Hangup
<br>
<p>It seems the -H option and using a hostfile with BProc aren't honored 
<br>
correct? So the only thing that I can use to derrive the host mapping 
<br>
with BProc support is the BJS RAS MCA (via the NODES Envar?)
<br>
<p>-Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5986.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Reply:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
