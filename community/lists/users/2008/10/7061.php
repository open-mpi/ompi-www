<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 13:36:01 2008" -->
<!-- isoreceived="20081021173601" -->
<!-- sent="Tue, 21 Oct 2008 19:35:50 +0200" -->
<!-- isosent="20081021173550" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="C31FBAB2-483E-4B7E-A789-AFE544F20A9E_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB4DF141-BD94-4E52-A935-3DE6A6144ADA_at_lanl.gov" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 13:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 21.10.2008 um 18:52 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; On Oct 21, 2008, at 10:37 AM, Adams, Brian M wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We do have some environmental variables that we guarantee to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be &quot;stable&quot; across releases. You could look for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_COMM_WORLD_SIZE, or OMPI_UNIVERSE_SIZE (there are a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couple of others as well, but any of these would do).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Q: I just wrote a simple C++ program, including mpi.h and getenv  
</span><br>
<span class="quotelev2">&gt;&gt; to check for these two variables and compiled with the mpicxx  
</span><br>
<span class="quotelev2">&gt;&gt; wrapper (openmpi-1.2.5 as distributed with RHEL5).  When running  
</span><br>
<span class="quotelev2">&gt;&gt; this program with orterun, these variables come back NULL from the  
</span><br>
<span class="quotelev2">&gt;&gt; environment.  The same is true if I just orterun a shell script to  
</span><br>
<span class="quotelev2">&gt;&gt; dump the environment to a file.  Am I making an obvious mistake here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Crud - forgot you are using the old 1.2 series. No, we don't have  
</span><br>
<span class="quotelev1">&gt; any good variables for you to use there. You might consider  
</span><br>
<span class="quotelev1">&gt; updating to 1.3 (beta should come out soon) to get something  
</span><br>
<span class="quotelev1">&gt; stable. Otherwise, you're kinda stuck with the OMPI-internal ones,  
</span><br>
<span class="quotelev1">&gt; so you'll have to be prepared to make a change should anyone try to  
</span><br>
<span class="quotelev1">&gt; use it with 1.3 or higher as we go forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you absolutely have to do this with 1.2, your best bet is  
</span><br>
<span class="quotelev1">&gt; probably OMPI_MCA_universe as the others are even worse (many are  
</span><br>
<span class="quotelev1">&gt; gone in 1.3).
</span><br>
<p>there is no MPI_GET_VENDOR or whatever in the MPI standard to get the  
<br>
used version? I checked the MPI docs but couldn't see anything like  
<br>
this. I would have thought, that such a thing is foreseen. That would  
<br>
mean, that a string with the version is inside the binary (or shared- 
<br>
library).
<br>
<p><p><span class="quotelev2">&gt;&gt; Doug is right that we could use an additional command line flag to  
</span><br>
<span class="quotelev2">&gt;&gt; indicate MPI runs, but at this point, we're trying to hide that  
</span><br>
<span class="quotelev2">&gt;&gt; from the user, such that all they have to do is run the binary vs.  
</span><br>
<span class="quotelev2">&gt;&gt; orterun/mpirun the binary and we detect whether it's a serial or  
</span><br>
<span class="quotelev2">&gt;&gt; parallel run.
</span><br>
<p>And when you have this information you decide for your user, whether  
<br>
to use mpirun (and the correct version to use) or just the plain binary?
<br>
<p>You are making something like &quot;strings the_binary&quot; and grep for  
<br>
indications of the compilation type? For the standard Open MPI with  
<br>
shared libraries a &quot;ldd the_binary&quot; might reveal some information.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; As for parsing the command line $argv[0] before MPI_Init, I don't  
</span><br>
<span class="quotelev2">&gt;&gt; think it will help here.  While MPICH implementations typically  
</span><br>
<span class="quotelev2">&gt;&gt; left args like -p4pg -p4amslave on the command line, I don't see  
</span><br>
<span class="quotelev2">&gt;&gt; that coming from OpenMPI-launched jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really? That doesn't sound right - we don't touch the arguments to  
</span><br>
<span class="quotelev1">&gt; your application. We test that pretty regularly and I have always  
</span><br>
<span class="quotelev1">&gt; seen the args come through.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide an example of where it isn't?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7060.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7062.php">Ralph Castain: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
