<?
$subject_val = "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 16:41:26 2007" -->
<!-- isoreceived="20071107214126" -->
<!-- sent="Wed, 7 Nov 2007 16:41:20 -0500" -->
<!-- isosent="20071107214120" -->
<!-- name="Benjamin, Ted G." -->
<!-- email="TGBENJAMIN_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0" -->
<!-- id="79BDD390E7C6B14CB2118191A775B3D6500462_at_NTEXCHANGE.bapm.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7B8CA4FE-10A4-4382-8E0F-10F4B31A9CE4_at_cisco.com" -->
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
<strong>From:</strong> Benjamin, Ted G. (<em>TGBENJAMIN_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 16:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4443.php">Andrus, Mr. Brian (Contractor): "[OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4441.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4458.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<li><strong>Reply:</strong> <a href="4458.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please understand that I'm decent at the engineering side of it.  As a
<br>
system administrator, I'm a decent engineer.
<br>
<p>On the previous configurations, this program seems to run with any
<br>
number of processors.  I believe these successful users have been using
<br>
LAM/MPI.  While I was waiting for a reply, I installed LAM/MPI.  The
<br>
results were similar to those from OpenMPI.
<br>
<p>While I can choose LAM/MPI, I'd prefer to port it to OpenMPI since that
<br>
is where all the development and most of the support are.
<br>
<p>I cannot choose the Portland compiler.  I must use either GNU or Intel
<br>
compilers on the Itanium2.
<br>
<p>Ted (more responses below)
<br>
<p>On November 7, 2007 at 8:39 AM, Squyres, Jeff wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Nov 5, 2007, at 4:12 PM, Benjamin, Ted G. wrote:
<br>
<p><span class="quotelev2">	&gt;&gt; I have a code that runs with both Portland and Intel
</span><br>
compilers
<br>
<span class="quotelev2">	&gt;&gt; on X86, AMD64 and Intel EM64T running various flavors of
</span><br>
Linux on
<br>
<span class="quotelev2">	&gt;&gt; clusters.  I am trying to port it to a 2-CPU Itanium2 (ia64)
</span><br>
running
<br>
<span class="quotelev2">	&gt;&gt; Red Hat Enterprise Linux 4.0; it has gcc 3.4.6-8 and the
</span><br>
Intel
<br>
<span class="quotelev2">	&gt;&gt; Fortran compiler 10.0.026 installed.  I have built Open MPI
</span><br>
1.2.4
<br>
<span class="quotelev2">	&gt;&gt; using these compilers.
</span><br>
<span class="quotelev2">	&gt;&gt; When I built the Open MPI, I didn't do anything special.  I
</span><br>
<span class="quotelev2">	&gt;&gt; enabled debug, but that was really all.  Of course, you can
</span><br>
see that
<br>
<span class="quotelev2">	&gt;&gt; in the config file that is attached.
</span><br>
<span class="quotelev2">	&gt;&gt; This system is not part of a cluster.  The two onboard CPUs
</span><br>
(an
<br>
<span class="quotelev2">	&gt;&gt; HP zx6000) are the only processors on which the job runs.
</span><br>
The code
<br>
<span class="quotelev2">	&gt;&gt; must run on MPI because the source calls it.  I compiled the
</span><br>
target
<br>
<span class="quotelev2">	&gt;&gt; software using the Fortran90 compiler (mpif90).
</span><br>
<span class="quotelev2">	&gt;&gt; I've been running the code in the foreground so that I could
</span><br>
<span class="quotelev2">	&gt;&gt; keep an eye on its behavior.
</span><br>
<span class="quotelev2">	&gt;&gt; When I try to run the compiled and linked code [mpirun -np #
</span><br>
<span class="quotelev2">	&gt;&gt; {executable file}], it performs as shown below:
</span><br>
<p><span class="quotelev2">	&gt;&gt; (1) With the source compiled at optimization -O0 and -np 1,
</span><br>
the job
<br>
<span class="quotelev2">	&gt;&gt; runs very slowly (6 days on the wall clock) to the correct
</span><br>
answer on
<br>
<span class="quotelev2">	&gt;&gt; the benchmark;
</span><br>
<span class="quotelev2">	&gt;&gt; (2) With the source compiled at optimization -O0 and -np 2,
</span><br>
the
<br>
<span class="quotelev2">	&gt;&gt; benchmark job fails with a segmentation violation;
</span><br>
<p><span class="quotelev1">	&gt; Have you tried running your code through a memory-checking
</span><br>
debugger,
<br>
<span class="quotelev1">	&gt; and/or examining any corefiles that were generated to see if
</span><br>
there is
<br>
<span class="quotelev1">	&gt; a problem in your code?
</span><br>
<p><span class="quotelev1">	&gt; I will certainly not guarantee that Open MPI is bug free, but
</span><br>
problems
<br>
<span class="quotelev1">	&gt; like this are *usually* application-level issues.  One place I
</span><br>
always
<br>
<span class="quotelev1">	&gt; start is running the application in a debugger to see if you
</span><br>
can catch
<br>
<span class="quotelev1">	&gt; exactly where the Badness happens.  This can be most helpful.
</span><br>
<p>I have tried to run a debugger, but I am not an expert at it.  I could
<br>
not get Intel's idb debugger to give me a prompt, but I could get a
<br>
prompt from gdb.  I've looked over the manual, but I'm not sure how to
<br>
put in the breakpoints et. al. that you geniuses use to evaluate a
<br>
program at critical junctures.  I actually used an &quot;mpirun -np 2 dbg&quot;
<br>
command to run it on 2 CPUs.  I attached the file at the prompt.  When I
<br>
did a run, it ran fine with no optimization and one processor.  With 2
<br>
processors, it didn't seem to do anything.  All I will say here is that
<br>
I have a lot to learn.  I'm calling on my friends for help on this.
<br>
<p><span class="quotelev2">	&gt;&gt; (3) With the source compiled at all other optimization (-O1,
</span><br>
-O2, -
<br>
<span class="quotelev2">	&gt;&gt; O3) and processor combinations (-np1 and -np 2), it fails in
</span><br>
what I
<br>
<span class="quotelev2">	&gt;&gt; would call a &quot;quiescent&quot; manner.  What I mean by this is that
</span><br>
it
<br>
<span class="quotelev2">	&gt;&gt; does not produce any error messages.  When I submit the job,
</span><br>
it
<br>
<span class="quotelev2">	&gt;&gt; produces a little standard output and it quits after 2-3
</span><br>
seconds.
<br>
<p><span class="quotelev1">	&gt; That's fun.  Can you tell if it runs the app at all, or if it
</span><br>
dies before
<br>
<span class="quotelev1">	&gt; main() starts?  This is probably more of an issue for your
</span><br>
<span class="quotelev1">	&gt; intel support guy than us...
</span><br>
<p>It's a Fortran program.  It starts in the main program.  I inserted some
<br>
PRINT*, statements of the &quot;PRINT*,'Read the input at line 213' &quot; variety
<br>
into the main program to see what would print.  It printed the first
<br>
four statements, but it didn't reach the last three.  The calls that
<br>
were reached were in the set-up section of the program.  The section
<br>
that wasn't reached had a lot of matrix-setting and solving subroutine
<br>
calls.
<br>
<p>I'm going to point my Intel support person to this post and see where it
<br>
takes us.
<br>
<p><span class="quotelev2">	&gt;&gt; In an attempt to find the problem, the technical support
</span><br>
agent
<br>
<span class="quotelev2">	&gt;&gt; at Intel has had me run some simple &quot;Hello&quot; problems.
</span><br>
<span class="quotelev2">	&gt;&gt; The first one is an MPI hello code that is the attached
</span><br>
<span class="quotelev2">	&gt;&gt; hello_mpi.f.  This ran as expected, and it echoed one &quot;Hello&quot;
</span><br>
<span class="quotelev2">	&gt;&gt; for each of the two processors.
</span><br>
<span class="quotelev2">	&gt;&gt; The second one is a non-MPI hello that is the attached
</span><br>
<span class="quotelev2">	&gt;&gt; hello.f90.  Since it is a non-MPI source, I was told that
</span><br>
running it
<br>
<span class="quotelev2">	&gt;&gt; on a workstation with a properly configured MPI should only
</span><br>
echo one
<br>
<span class="quotelev2">	&gt;&gt; &quot;Hello&quot;; the Intel agent told me that two such echoes
</span><br>
indicate a
<br>
<span class="quotelev2">	&gt;&gt; problem with Open MPI.  It echoed twice, so now I have come
</span><br>
to you
<br>
<span class="quotelev2">	&gt;&gt; for help.
</span><br>
<p><span class="quotelev1">	&gt; I'm not sure what you mean by that.  If you:
</span><br>
<p><span class="quotelev1">	&gt;      mpirun -np 4 hostname
</span><br>
<p><span class="quotelev1">	&gt; where &quot;hostname&quot; is non-MPI program (e.g., /bin/hostname),
</span><br>
you'll
<br>
<span class="quotelev1">	&gt; still see the output 4 times because you told MPI to run 4
</span><br>
copies of
<br>
<span class="quotelev1">	&gt; &quot;hostname&quot;.  In this way, Open MPI is just being used as a job
</span><br>
launcher.
<br>
<p><span class="quotelev1">	&gt; So if I'm understanding you right,
</span><br>
<p><span class="quotelev1">	&gt;    mpirun -np 2 my_non_mpi_f90_hello_app
</span><br>
<p><span class="quotelev1">	&gt; should still print 2 copies of &quot;hello&quot;.  If it does, then Open
</span><br>
MPI is
<br>
<span class="quotelev1">	&gt; doing exactly what it should do.
</span><br>
<p><span class="quotelev1">	&gt; Specifically: Open MPI's mpirun can be used to launch non-MPI
</span><br>
<span class="quotelev1">	&gt; applications (the same is not necessarily true for other MPI
</span><br>
<span class="quotelev1">	&gt; implementations).
</span><br>
<p>You understand correctly.  I am not an expert at MPI of any sort.  Both
<br>
the MPI and non-MPI versions of &quot;Hello&quot; print out once for each invoked
<br>
CPU (e.g.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 mpi_hello
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 non_mpi_hello
<br>
<p>print one &quot;Hello, world&quot; and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 mpi_hello
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 non_mpi_hello
<br>
<p>print two &quot;Hello, world&quot;s).  
<br>
<p><span class="quotelev2">	&gt;&gt; The other three attached files are the output requested on
</span><br>
the
<br>
<span class="quotelev2">	&gt;&gt; &quot;Getting Help&quot; page - (1) the output of /sbin/ifconfig, (2)
</span><br>
the
<br>
<span class="quotelev2">	&gt;&gt; output of ompt_info -all and (3) the config.log file.
</span><br>
<span class="quotelev2">	&gt;&gt; The installation of the Open MPI itself was as easy as could
</span><br>
<span class="quotelev2">	&gt;&gt; be.  I am really ignorant of how it works beyond what I've
</span><br>
read from
<br>
<span class="quotelev2">	&gt;&gt; the FAQs and learned in a little digging, so I hope it's a
</span><br>
simple
<br>
<span class="quotelev2">	&gt;&gt; solution.
</span><br>
<p><span class="quotelev1">	&gt; FWIW, I see that you're using Open MPI v1.2.  Our latest
</span><br>
version is
<br>
<span class="quotelev1">	&gt; v1.2.4; if possible, you might want to try and upgrade (e.g.,
</span><br>
delete
<br>
<span class="quotelev1">	&gt; your prior installation, recompile/reinstall Open MPI, and
</span><br>
then
<br>
<span class="quotelev1">	&gt; recompile/relink your application against the new Open MPI
</span><br>
<span class="quotelev1">	&gt; installation); it has all of our latest bug fixes, etc.
</span><br>
<p>This is my mistake.  I attached an old version of ompi_info.txt.  I am
<br>
now attaching the correct version.  I already have 1.2.4 installed.
<br>
<p><span class="quotelev1">	&gt; -- 
</span><br>
<span class="quotelev1">	&gt; Jeff Squyres
</span><br>
<span class="quotelev1">	&gt; Cisco Systems
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt;ompi_info.txt.gz&gt;&gt; 
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4442/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4442/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4443.php">Andrus, Mr. Brian (Contractor): "[OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4441.php">Francesco Pietra: "Re: [OMPI users] Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4458.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<li><strong>Reply:</strong> <a href="4458.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
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
