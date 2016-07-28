<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 13:54:32 2008" -->
<!-- isoreceived="20081021175432" -->
<!-- sent="Tue, 21 Oct 2008 11:54:26 -0600" -->
<!-- isosent="20081021175426" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="47747014-677F-418A-BEF9-C6B04811973C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C31FBAB2-483E-4B7E-A789-AFE544F20A9E_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-10-21 13:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7063.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7063.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2008, at 11:35 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 21.10.2008 um 18:52 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 21, 2008, at 10:37 AM, Adams, Brian M wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We do have some environmental variables that we guarantee to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be &quot;stable&quot; across releases. You could look for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_COMM_WORLD_SIZE, or OMPI_UNIVERSE_SIZE (there are a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; couple of others as well, but any of these would do).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Q: I just wrote a simple C++ program, including mpi.h and getenv  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to check for these two variables and compiled with the mpicxx  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper (openmpi-1.2.5 as distributed with RHEL5).  When running  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this program with orterun, these variables come back NULL from the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment.  The same is true if I just orterun a shell script to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dump the environment to a file.  Am I making an obvious mistake  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Crud - forgot you are using the old 1.2 series. No, we don't have  
</span><br>
<span class="quotelev2">&gt;&gt; any good variables for you to use there. You might consider  
</span><br>
<span class="quotelev2">&gt;&gt; updating to 1.3 (beta should come out soon) to get something  
</span><br>
<span class="quotelev2">&gt;&gt; stable. Otherwise, you're kinda stuck with the OMPI-internal ones,  
</span><br>
<span class="quotelev2">&gt;&gt; so you'll have to be prepared to make a change should anyone try to  
</span><br>
<span class="quotelev2">&gt;&gt; use it with 1.3 or higher as we go forward.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you absolutely have to do this with 1.2, your best bet is  
</span><br>
<span class="quotelev2">&gt;&gt; probably OMPI_MCA_universe as the others are even worse (many are  
</span><br>
<span class="quotelev2">&gt;&gt; gone in 1.3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is no MPI_GET_VENDOR or whatever in the MPI standard to get  
</span><br>
<span class="quotelev1">&gt; the used version? I checked the MPI docs but couldn't see anything  
</span><br>
<span class="quotelev1">&gt; like this. I would have thought, that such a thing is foreseen. That  
</span><br>
<span class="quotelev1">&gt; would mean, that a string with the version is inside the binary (or  
</span><br>
<span class="quotelev1">&gt; shared-library).
</span><br>
<p><p>I don't believe there is a standard as you suggest, but there  
<br>
certainly is a string in OMPI (OMPI_VERSION) that tells you the version.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doug is right that we could use an additional command line flag to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicate MPI runs, but at this point, we're trying to hide that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the user, such that all they have to do is run the binary vs.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun/mpirun the binary and we detect whether it's a serial or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And when you have this information you decide for your user, whether  
</span><br>
<span class="quotelev1">&gt; to use mpirun (and the correct version to use) or just the plain  
</span><br>
<span class="quotelev1">&gt; binary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are making something like &quot;strings the_binary&quot; and grep for  
</span><br>
<span class="quotelev1">&gt; indications of the compilation type? For the standard Open MPI with  
</span><br>
<span class="quotelev1">&gt; shared libraries a &quot;ldd the_binary&quot; might reveal some information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for parsing the command line $argv[0] before MPI_Init, I don't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think it will help here.  While MPICH implementations typically  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; left args like -p4pg -p4amslave on the command line, I don't see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that coming from OpenMPI-launched jobs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Really? That doesn't sound right - we don't touch the arguments to  
</span><br>
<span class="quotelev2">&gt;&gt; your application. We test that pretty regularly and I have always  
</span><br>
<span class="quotelev2">&gt;&gt; seen the args come through.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide an example of where it isn't?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7063.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7061.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7063.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
