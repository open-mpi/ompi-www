<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 21:32:55 2008" -->
<!-- isoreceived="20080625013255" -->
<!-- sent="Tue, 24 Jun 2008 19:32:44 -0600" -->
<!-- isosent="20080625013244" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="C486FC5C.5563%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48619BAE.70301_at_penguincomputing.com" -->
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
<strong>Date:</strong> 2008-06-24 21:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/24/08 7:13 PM, &quot;Joshua Bernstein&quot; &lt;jbernstein_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm....well, the problem is as I suspected. The system doesn't see any
</span><br>
<span class="quotelev2">&gt;&gt; allocation of nodes to your job, and so it aborts with a crummy error
</span><br>
<span class="quotelev2">&gt;&gt; message that doesn't really tell you the problem. We are working on
</span><br>
<span class="quotelev2">&gt;&gt; improving them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How are you allocating nodes to the job? Does this BEOWULF_JOB_MAP contain
</span><br>
<span class="quotelev2">&gt;&gt; info on the nodes that are to be used?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BEOWULF_JOB_MAP is an array of integers separated by a colon that
</span><br>
<span class="quotelev1">&gt; contains node mapping information. The easiest way to explain is is just
</span><br>
<span class="quotelev1">&gt; my example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BEOWULF_JOB_MAP=0:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a two process job, with each process running on node 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BEOWULF_JOB_MAP=0:1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A three process job with the first process on node 0, and the next two
</span><br>
<span class="quotelev1">&gt; on node 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All said, this is of little consequent right now, and we/I can worry
</span><br>
<span class="quotelev1">&gt; about adding support for this later.
</span><br>
<p>Sounds good to me - we certainly don't support that syntax at the moment.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One of the biggest headaches with bproc is that there is no adhered-to
</span><br>
<span class="quotelev2">&gt;&gt; standard for describing the node allocation. What we implemented will
</span><br>
<span class="quotelev2">&gt;&gt; support LSF+Bproc (since that is what was being used here) and BJS. It
</span><br>
<span class="quotelev2">&gt;&gt; sounds like you are using something different - true?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood. We aren't using BJS, and have long depricated BJS in favor
</span><br>
<span class="quotelev1">&gt; of bundling TORQUE with Scyld instead, though legacy functionality for
</span><br>
<span class="quotelev1">&gt; things like envars like NP, NO_LOCAL, and BEOWULF_JOB_MAP are present in
</span><br>
<span class="quotelev1">&gt; the MPICH extensions we've put together.
</span><br>
<p>FWIW: we treat Torque as a launcher, not a resource manager. I'm unaware of
<br>
any resource allocation capabilities in Torque - it usually is bundled with
<br>
something like Moab which handles those responsibilities, while Torque
<br>
focuses on launch.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, we can work around it by just mapping enviro variables to what the
</span><br>
<span class="quotelev2">&gt;&gt; system is seeking. Or, IIRC, we could use the hostfile option (have to check
</span><br>
<span class="quotelev2">&gt;&gt; on that one).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exactly, but for now, if I make sure the NODES envar is setup correctly
</span><br>
<span class="quotelev1">&gt; and make sure the OpenMPI is NFS mounted, and I actually have to copy
</span><br>
<span class="quotelev1">&gt; out the mca libraries (libcache doesn't seem to work), I actually end up
</span><br>
<span class="quotelev1">&gt; with something running!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ats_at_goldstar mpi]$ mpirun --mca btl ^openib,udapl -np 2 ./cpi
</span><br>
<span class="quotelev1">&gt; Process 0 on n0
</span><br>
<span class="quotelev1">&gt; pi is approximately 3.1416009869231241, Error is 0.0000083333333309
</span><br>
<span class="quotelev1">&gt; wall clock time = 0.005377
</span><br>
<span class="quotelev1">&gt; Process 1 on n0
</span><br>
<span class="quotelev1">&gt; Hangup
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the -H option and using a hostfile with BProc aren't honored
</span><br>
<span class="quotelev1">&gt; correct? So the only thing that I can use to derrive the host mapping
</span><br>
<span class="quotelev1">&gt; with BProc support is the BJS RAS MCA (via the NODES Envar?)
</span><br>
<p>I'm not sure why bproc + hostfile would fail - I'll look and advise.
<br>
Certainly, in 1.3 there would not be a problem as the way we handle hostfile
<br>
has been substantially overhauled. See the wiki page for an explanation:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
