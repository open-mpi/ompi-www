<?
$subject_val = "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 08:39:49 2007" -->
<!-- isoreceived="20071107133949" -->
<!-- sent="Wed, 7 Nov 2007 08:39:05 -0500" -->
<!-- isosent="20071107133905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0" -->
<!-- id="7B8CA4FE-10A4-4382-8E0F-10F4B31A9CE4_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="79BDD390E7C6B14CB2118191A775B3D6500455_at_NTEXCHANGE.bapm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 08:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Previous message:</strong> <a href="4434.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4402.php">Benjamin, Ted G.: "[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<li><strong>Reply:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2007, at 4:12 PM, Benjamin, Ted G. wrote:
<br>
<p><span class="quotelev1">&gt;      I have a code that runs with both Portland and Intel compilers  
</span><br>
<span class="quotelev1">&gt; on X86, AMD64 and Intel EM64T running various flavors of Linux on  
</span><br>
<span class="quotelev1">&gt; clusters.  I am trying to port it to a 2-CPU Itanium2 (ia64) running  
</span><br>
<span class="quotelev1">&gt; Red Hat Enterprise Linux 4.0; it has gcc 3.4.6-8 and the Intel  
</span><br>
<span class="quotelev1">&gt; Fortran compiler 10.0.026 installed.  I have built Open MPI 1.2.4  
</span><br>
<span class="quotelev1">&gt; using these compilers.
</span><br>
<span class="quotelev1">&gt;      When I built the Open MPI, I didn&#146;t do anything special.  I  
</span><br>
<span class="quotelev1">&gt; enabled debug, but that was really all.  Of course, you can see that  
</span><br>
<span class="quotelev1">&gt; in the config file that is attached.
</span><br>
<span class="quotelev1">&gt;      This system is not part of a cluster.  The two onboard CPUs (an  
</span><br>
<span class="quotelev1">&gt; HP zx6000) are the only processors on which the job runs.  The code  
</span><br>
<span class="quotelev1">&gt; must run on MPI because the source calls it.  I compiled the target  
</span><br>
<span class="quotelev1">&gt; software using the Fortran90 compiler (mpif90).
</span><br>
<span class="quotelev1">&gt;      I&#146;ve been running the code in the foreground so that I could  
</span><br>
<span class="quotelev1">&gt; keep an eye on its behavior.
</span><br>
<span class="quotelev1">&gt;      When I try to run the compiled and linked code [mpirun &#150;np #  
</span><br>
<span class="quotelev1">&gt; {executable file}], it performs as shown below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) With the source compiled at optimization &#150;O0 and &#150;np 1, the job  
</span><br>
<span class="quotelev1">&gt; runs very slowly (6 days on the wall clock) to the correct answer on  
</span><br>
<span class="quotelev1">&gt; the benchmark;
</span><br>
<span class="quotelev1">&gt; (2) With the source compiled at optimization &#150;O0 and &#150;np 2, the  
</span><br>
<span class="quotelev1">&gt; benchmark job fails with a segmentation violation;
</span><br>
<p>Have you tried running your code through a memory-checking debugger,  
<br>
and/or examining any corefiles that were generated to see if there is  
<br>
a problem in your code?
<br>
<p>I will certainly not guarantee that Open MPI is bug free, but problems  
<br>
like this are *usually* application-level issues.  One place I always  
<br>
start is running the application in a debugger to see if you can catch  
<br>
exactly where the Badness happens.  This can be most helpful.
<br>
<p><span class="quotelev1">&gt; (3) With the source compiled at all other optimization (-O1, -O2, - 
</span><br>
<span class="quotelev1">&gt; O3) and processor combinations (-np1 and -np 2), it fails in what I  
</span><br>
<span class="quotelev1">&gt; would call a &#147;quiescent&#148; manner.  What I mean by this is that it  
</span><br>
<span class="quotelev1">&gt; does not produce any error messages.  When I submit the job, it  
</span><br>
<span class="quotelev1">&gt; produces a little standard output and it quits after 2-3 seconds.
</span><br>
<p>That's fun.  Can you tell if it runs the app at all, or if it dies  
<br>
before main() starts?  This is probably more of an issue for your  
<br>
intel support guy than us...
<br>
<p><span class="quotelev1">&gt;      In an attempt to find the problem, the technical support agent  
</span><br>
<span class="quotelev1">&gt; at Intel has had me run some simple &#147;Hello&#148; problems.
</span><br>
<span class="quotelev1">&gt;      The first one is an MPI hello code that is the attached  
</span><br>
<span class="quotelev1">&gt; hello_mpi.f.  This ran as expected, and it echoed one &#147;Hello&#148; for  
</span><br>
<span class="quotelev1">&gt; each of the two processors.
</span><br>
<span class="quotelev1">&gt;      The second one is a non-MPI hello that is the attached  
</span><br>
<span class="quotelev1">&gt; hello.f90.  Since it is a non-MPI source, I was told that running it  
</span><br>
<span class="quotelev1">&gt; on a workstation with a properly configured MPI should only echo one  
</span><br>
<span class="quotelev1">&gt; &#147;Hello&#148;; the Intel agent told me that two such echoes indicate a  
</span><br>
<span class="quotelev1">&gt; problem with Open MPI.  It echoed twice, so now I have come to you  
</span><br>
<span class="quotelev1">&gt; for help.
</span><br>
<p>I'm not sure what you mean by that.  If you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 hostname
<br>
<p>where &quot;hostname&quot; is non-MPI program (e.g., /bin/hostname), you'll  
<br>
still see the output 4 times because you told MPI to run 4 copies of  
<br>
&quot;hostname&quot;.  In this way, Open MPI is just being used as a job launcher.
<br>
<p>So if I'm understanding you right,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 my_non_mpi_f90_hello_app
<br>
<p>should still print 2 copies of &quot;hello&quot;.  If it does, then Open MPI is  
<br>
doing exactly what it should do.
<br>
<p>Specifically: Open MPI's mpirun can be used to launch non-MPI  
<br>
applications (the same is not necessarily true for other MPI  
<br>
implementations).
<br>
<p><span class="quotelev1">&gt;      The other three attached files are the output requested on the  
</span><br>
<span class="quotelev1">&gt; &#147;Getting Help&#148; page &#150; (1) the output of /sbin/ifconfig, (2) the  
</span><br>
<span class="quotelev1">&gt; output of ompt_info &#150;all and (3) the config.log file.
</span><br>
<span class="quotelev1">&gt;      The installation of the Open MPI itself was as easy as could  
</span><br>
<span class="quotelev1">&gt; be.  I am really ignorant of how it works beyond what I&#146;ve read from  
</span><br>
<span class="quotelev1">&gt; the FAQs and learned in a little digging, so I hope it&#146;s a simple  
</span><br>
<span class="quotelev1">&gt; solution.
</span><br>
<p>FWIW, I see that you're using Open MPI v1.2.  Our latest version is  
<br>
v1.2.4; if possible, you might want to try and upgrade (e.g., delete  
<br>
your prior installation, recompile/reinstall Open MPI, and then  
<br>
recompile/relink your application against the new Open MPI  
<br>
installation); it has all of our latest bug fixes, etc.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Previous message:</strong> <a href="4434.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4402.php">Benjamin, Ted G.: "[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<li><strong>Reply:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
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
