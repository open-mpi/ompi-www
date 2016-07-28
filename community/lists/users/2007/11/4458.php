<?
$subject_val = "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 07:39:02 2007" -->
<!-- isoreceived="20071109123902" -->
<!-- sent="Fri, 9 Nov 2007 07:38:42 -0500" -->
<!-- isosent="20071109123842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0" -->
<!-- id="C39863FF-EA46-42AF-99F1-C06B237F9D07_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="79BDD390E7C6B14CB2118191A775B3D6500462_at_NTEXCHANGE.bapm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-09 07:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4459.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>In reply to:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2007, at 4:41 PM, Benjamin, Ted G. wrote:
<br>
<p><span class="quotelev1">&gt; Please understand that I&#146;m decent at the engineering side of it.  As  
</span><br>
<span class="quotelev1">&gt; a system administrator, I&#146;m a decent engineer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the previous configurations, this program seems to run with any  
</span><br>
<span class="quotelev1">&gt; number of processors.  I believe these successful users have been  
</span><br>
<span class="quotelev1">&gt; using LAM/MPI.  While I was waiting for a reply, I installed LAM/ 
</span><br>
<span class="quotelev1">&gt; MPI.  The results were similar to those from OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is a good sign; consistent behavior across multiple different  
<br>
MPIs implies a problem at the application or system level (i.e., not  
<br>
the MPI level).  Again, I'll not promise that any MPI is bug free, but  
<br>
these signs point to an application/system problem.
<br>
<p><span class="quotelev1">&gt; While I can choose LAM/MPI, I&#146;d prefer to port it to OpenMPI since  
</span><br>
<span class="quotelev1">&gt; that is where all the development and most of the support are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; I cannot choose the Portland compiler.  I must use either GNU or  
</span><br>
<span class="quotelev1">&gt; Intel compilers on the Itanium2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok.
<br>
<p><span class="quotelev2">&gt; &gt; Have you tried running your code through a memory-checking debugger,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and/or examining any corefiles that were generated to see if there  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; a problem in your code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will certainly not guarantee that Open MPI is bug free, but  
</span><br>
<span class="quotelev1">&gt; problems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; like this are *usually* application-level issues.  One place I  
</span><br>
<span class="quotelev1">&gt; always
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; start is running the application in a debugger to see if you can  
</span><br>
<span class="quotelev1">&gt; catch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; exactly where the Badness happens.  This can be most helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried to run a debugger, but I am not an expert at it.  I  
</span><br>
<span class="quotelev1">&gt; could not get Intel&#146;s idb debugger to give me a prompt, but I could  
</span><br>
<span class="quotelev1">&gt; get a prompt from gdb.  I&#146;ve looked over the manual, but I&#146;m not  
</span><br>
<span class="quotelev1">&gt; sure how to put in the breakpoints et. al. that you geniuses use to  
</span><br>
<span class="quotelev1">&gt; evaluate a program at critical junctures.  I actually used an  
</span><br>
<span class="quotelev1">&gt; &#147;mpirun &#150;np 2 dbg&#148; command to run it on 2 CPUs.  I attached the file  
</span><br>
<span class="quotelev1">&gt; at the prompt.  When I did a run, it ran fine with no optimization  
</span><br>
<span class="quotelev1">&gt; and one processor.  With 2 processors, it didn&#146;t seem to do  
</span><br>
<span class="quotelev1">&gt; anything.  All I will say here is that I have a lot to learn.  I&#146;m  
</span><br>
<span class="quotelev1">&gt; calling on my friends for help on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>For such small rung, I typically do the lazy thing:
<br>
<p>- mpirun -np 2 ... as normal
<br>
- login to the node(s) where the jobs were launched
<br>
- use &quot;gdb --pid &lt;pid&gt;&quot; to attach to each of the jobs
<br>
- when gdb attaches, use the &quot;continue&quot; command to let the jobs keep  
<br>
running
<br>
- eventually, the problem will occur and the process will die
<br>
- in several kinds of scenarios, gdb will show you right where it died
<br>
<p>Consult the gdb documentation and/or any local resources you have for  
<br>
more details.
<br>
<p><span class="quotelev2">&gt; &gt; That's fun.  Can you tell if it runs the app at all, or if it dies  
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; main() starts?  This is probably more of an issue for your
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; intel support guy than us...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It&#146;s a Fortran program.  It starts in the main program.  I inserted  
</span><br>
<span class="quotelev1">&gt; some PRINT*, statements of the &#147;PRINT*,&#146;Read the input at line 213&#146;  
</span><br>
<span class="quotelev1">&gt; &#148; variety into the main program to see what would print.  It printed  
</span><br>
<span class="quotelev1">&gt; the first four statements, but it didn&#146;t reach the last three.  The  
</span><br>
<span class="quotelev1">&gt; calls that were reached were in the set-up section of the program.   
</span><br>
<span class="quotelev1">&gt; The section that wasn&#146;t reached had a lot of matrix-setting and  
</span><br>
<span class="quotelev1">&gt; solving subroutine calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's also a good sign; it started to execute and then died later.   
<br>
So it's not a system-level issue that prevents the app from starting;  
<br>
that eliminates one whole line of troubleshooting.
<br>
<p><span class="quotelev1">&gt;      mpirun &#150;np 2 mpi_hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun &#150;np 2 non_mpi_hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; print two &#147;Hello, world&#148;s).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So just to be absolutely clear: this is expected behavior.  Open MPI's  
<br>
mpirun can launch non-MPI applications.
<br>
<p><span class="quotelev1">&gt; This is my mistake.  I attached an old version of ompi_info.txt.  I  
</span><br>
<span class="quotelev1">&gt; am now attaching the correct version.  I already have 1.2.4 installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Gotcha.  I would proceed with seeing what the debugger will tell you,  
<br>
or, failing that, putting more and more printf's in to narrow down  
<br>
exactly where things fail.  I'm an advocate of using tools, though --  
<br>
so I tend to prefer using debuggers.  But sometimes a small number of  
<br>
printf's are ok.  :-)
<br>
<p>Good luck.
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
<li><strong>Next message:</strong> <a href="4459.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4457.php">Jeff Squyres: "Re: [OMPI users] MPI Spawn terminates application"</a>
<li><strong>In reply to:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
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
