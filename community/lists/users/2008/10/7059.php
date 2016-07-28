<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 12:38:09 2008" -->
<!-- isoreceived="20081021163809" -->
<!-- sent="Tue, 21 Oct 2008 10:37:52 -0600" -->
<!-- isosent="20081021163752" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="A0801CEC7AFED846978515099D145DA512837378BE_at_ES01SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22236_1224545995_m9KNbd53022424_DBF391DA-E633-4050-9024-9B49B7564B1B_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 12:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7058.php">SLIM H.A.: "[OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Doug, Ralph, and Mattijs for the helpful input.  Some replies to Ralph's message and a question inlined here. -- Brian
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, October 20, 2008 5:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI runtime-specific
</span><br>
<span class="quotelev1">&gt; environment variable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It depends on what you are trying to do. If you intend to use
</span><br>
<span class="quotelev1">&gt; this solely with OMPI 1.2.x, then you could use some of
</span><br>
<span class="quotelev1">&gt; those. However, they are risky as they are in general
</span><br>
<span class="quotelev1">&gt; internal to OMPI's infrastructure - and thus, subject to
</span><br>
<span class="quotelev1">&gt; change from one release to another.
</span><br>
<p>Ok, sounds like the variables I called out aren't good choices.
<br>
<p><span class="quotelev1">&gt; We do have some environmental variables that we guarantee to
</span><br>
<span class="quotelev1">&gt; be &quot;stable&quot; across releases. You could look for
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_SIZE, or OMPI_UNIVERSE_SIZE (there are a
</span><br>
<span class="quotelev1">&gt; couple of others as well, but any of these would do).
</span><br>
<p>Q: I just wrote a simple C++ program, including mpi.h and getenv to check for these two variables and compiled with the mpicxx wrapper (openmpi-1.2.5 as distributed with RHEL5).  When running this program with orterun, these variables come back NULL from the environment.  The same is true if I just orterun a shell script to dump the environment to a file.  Am I making an obvious mistake here?
<br>
<p><span class="quotelev1">&gt; However, these will only tell you that the job was launched
</span><br>
<span class="quotelev1">&gt; via OMPI's mpirun - it won't tell you that it was a parallel
</span><br>
<span class="quotelev1">&gt; job. It could be a serial job that just happened to be
</span><br>
<span class="quotelev1">&gt; launched by mpirun. For example, we set the same
</span><br>
<span class="quotelev1">&gt; environmental params when we execute &quot;mpirun hostname&quot; -
</span><br>
<span class="quotelev1">&gt; mpirun has no way of knowing the parallel vs serial nature of
</span><br>
<span class="quotelev1">&gt; the app it is launching, so it sets all the variables
</span><br>
<span class="quotelev1">&gt; required by a parallel job just-in-case.
</span><br>
<p>Understood -- we have some other logic to (hopefully) handle this case.
<br>
<p><span class="quotelev1">&gt; Likewise, these variables will only tell you it is a parallel
</span><br>
<span class="quotelev1">&gt; job launched by OMPI. If you use another MPI (e.g., MVAPICH),
</span><br>
<span class="quotelev1">&gt; none of these would be set - yet it would still be a parallel job.
</span><br>
<p>Also understood.  While ultimately we'll probably redesign the code base, right now we have tests specific to each MPI implementation for which we have known use cases.  So adding an OpenMPI-specific test is actually what I'm after in the short term.
<br>
<p><span class="quotelev1">&gt; So it boils down to your particular mode of operation. If you
</span><br>
<span class="quotelev1">&gt; only run with OMPI, and you would only launch via OMPI's
</span><br>
<span class="quotelev1">&gt; mpirun if you wanted to execute in a parallel mode, then you
</span><br>
<span class="quotelev1">&gt; could look for either of those two environmental params.
</span><br>
<span class="quotelev1">&gt; Otherwise, you may have to do as Doug suggests and create
</span><br>
<span class="quotelev1">&gt; your own &quot;flag&quot;.
</span><br>
<p>Doug is right that we could use an additional command line flag to indicate MPI runs, but at this point, we're trying to hide that from the user, such that all they have to do is run the binary vs. orterun/mpirun the binary and we detect whether it's a serial or parallel run.
<br>
<p>As for parsing the command line $argv[0] before MPI_Init, I don't think it will help here.  While MPICH implementations typically left args like -p4pg -p4amslave on the command line, I don't see that coming from OpenMPI-launched jobs.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7058.php">SLIM H.A.: "[OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
