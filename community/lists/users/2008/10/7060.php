<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 12:53:03 2008" -->
<!-- isoreceived="20081021165303" -->
<!-- sent="Tue, 21 Oct 2008 10:52:57 -0600" -->
<!-- isosent="20081021165257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="CB4DF141-BD94-4E52-A935-3DE6A6144ADA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A0801CEC7AFED846978515099D145DA512837378BE_at_ES01SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 12:52:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2008, at 10:37 AM, Adams, Brian M wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We do have some environmental variables that we guarantee to
</span><br>
<span class="quotelev2">&gt;&gt; be &quot;stable&quot; across releases. You could look for
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_SIZE, or OMPI_UNIVERSE_SIZE (there are a
</span><br>
<span class="quotelev2">&gt;&gt; couple of others as well, but any of these would do).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q: I just wrote a simple C++ program, including mpi.h and getenv to  
</span><br>
<span class="quotelev1">&gt; check for these two variables and compiled with the mpicxx wrapper  
</span><br>
<span class="quotelev1">&gt; (openmpi-1.2.5 as distributed with RHEL5).  When running this  
</span><br>
<span class="quotelev1">&gt; program with orterun, these variables come back NULL from the  
</span><br>
<span class="quotelev1">&gt; environment.  The same is true if I just orterun a shell script to  
</span><br>
<span class="quotelev1">&gt; dump the environment to a file.  Am I making an obvious mistake here?
</span><br>
<p>Crud - forgot you are using the old 1.2 series. No, we don't have any  
<br>
good variables for you to use there. You might consider updating to  
<br>
1.3 (beta should come out soon) to get something stable. Otherwise,  
<br>
you're kinda stuck with the OMPI-internal ones, so you'll have to be  
<br>
prepared to make a change should anyone try to use it with 1.3 or  
<br>
higher as we go forward.
<br>
<p>If you absolutely have to do this with 1.2, your best bet is probably  
<br>
OMPI_MCA_universe as the others are even worse (many are gone in 1.3).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug is right that we could use an additional command line flag to  
</span><br>
<span class="quotelev1">&gt; indicate MPI runs, but at this point, we're trying to hide that from  
</span><br>
<span class="quotelev1">&gt; the user, such that all they have to do is run the binary vs.  
</span><br>
<span class="quotelev1">&gt; orterun/mpirun the binary and we detect whether it's a serial or  
</span><br>
<span class="quotelev1">&gt; parallel run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for parsing the command line $argv[0] before MPI_Init, I don't  
</span><br>
<span class="quotelev1">&gt; think it will help here.  While MPICH implementations typically left  
</span><br>
<span class="quotelev1">&gt; args like -p4pg -p4amslave on the command line, I don't see that  
</span><br>
<span class="quotelev1">&gt; coming from OpenMPI-launched jobs.
</span><br>
<p>Really? That doesn't sound right - we don't touch the arguments to  
<br>
your application. We test that pretty regularly and I have always seen  
<br>
the args come through.
<br>
<p>Can you provide an example of where it isn't?
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
