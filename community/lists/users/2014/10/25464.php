<?
$subject_val = "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  5 10:39:35 2014" -->
<!-- isoreceived="20141005143935" -->
<!-- sent="Sun, 5 Oct 2014 07:39:30 -0700" -->
<!-- isosent="20141005143930" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris" -->
<!-- id="E734AC8B-2A63-40A1-AB2B-6FDED5B8CC4D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201410050742.s957fxho002423_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-05 10:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25465.php">Obed Muñoz: "[OMPI users] [Question] Hybrid implementation with OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="25463.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25463.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've talked about this as lot over the last few weeks, trying to come up with some way to maintain the Solaris support - but have come up empty. None of us have access to such a system, and it appears to be very difficult to avoid regularly breaking it. I may, as time permits, try playing with a Solaris 10 install on my local x86 machine, but I doubt that will be enough to resolve all the problems.
<br>
<p>So for now at least, we have dropped Solaris support until an active developer with such a system joins the team.
<br>
<p>Sorry for the situation - we truly wish we had a better solution.
<br>
Ralph
<br>
<p>On Oct 5, 2014, at 12:41 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi-1.9.0a1git99c3999 on my machines with
</span><br>
<span class="quotelev1">&gt; Sun C 5.12 and gcc-4.9.1 and I still get SIGSEGV for my small
</span><br>
<span class="quotelev1">&gt; Java program. Furthermore I get &quot;select: Interrupted system call&quot;
</span><br>
<span class="quotelev1">&gt; as you can see below. I use Java-1.8.0. The error appears on
</span><br>
<span class="quotelev1">&gt; Solaris 10 Sparc and Solaris 10 x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 104 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9.0a1
</span><br>
<span class="quotelev1">&gt;              C compiler: cc
</span><br>
<span class="quotelev1">&gt; tyr java 105 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev1">&gt; warning: [path] bad path element
</span><br>
<span class="quotelev1">&gt;  &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;:
</span><br>
<span class="quotelev1">&gt;  no such file or directory
</span><br>
<span class="quotelev1">&gt; 1 warning
</span><br>
<span class="quotelev1">&gt; tyr java 106 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;oshmem&quot; is only available on Linux. Is it possible that you omit
</span><br>
<span class="quotelev1">&gt; &quot;shmem.jar&quot; on other platforms like Solaris to avoid the above
</span><br>
<span class="quotelev1">&gt; warning, if you use &quot;mpijavac -deprecation -Xlint:all&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 107 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;  -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; select: Interrupted system call
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=12461, tid=2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I wasn't able to set any breakpoints in my Java
</span><br>
<span class="quotelev1">&gt; program, so that I couldn't use gdb to get more information.
</span><br>
<span class="quotelev1">&gt; Therefore I modified my program in the following way to get an
</span><br>
<span class="quotelev1">&gt; idea where the &quot;Interrupted system call&quot; happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 112 cat InitFinalizeMain.java
</span><br>
<span class="quotelev1">&gt; import mpi.*;
</span><br>
<span class="quotelev1">&gt; public class InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  public static void main (String args[]) throws MPIException
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    System.out.println (&quot;Before MPI.Init()&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI.Init (args);
</span><br>
<span class="quotelev1">&gt;    System.out.println (&quot;After MPI.Init()&quot;);
</span><br>
<span class="quotelev1">&gt;    System.out.print (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI.Finalize ();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; tyr java 113 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 116 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;  -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; select: Interrupted system call
</span><br>
<span class="quotelev1">&gt; Before MPI.Init()
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=12578, tid=2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that &quot;Interrupted system call&quot; happens before I call
</span><br>
<span class="quotelev1">&gt; the first MPI function, i.e., in &quot;mpiexec&quot; (?). If that's true,
</span><br>
<span class="quotelev1">&gt; then the &quot;SIGSEGV&quot; may happen, because my Java program hasn't
</span><br>
<span class="quotelev1">&gt; been started correctly. Do you agree? How do you debug a Java
</span><br>
<span class="quotelev1">&gt; program using MPI with gdb? I would be grateful, if somebody
</span><br>
<span class="quotelev1">&gt; can tell me how I must start/prepare the program so that I can
</span><br>
<span class="quotelev1">&gt; use &quot;list&quot; to see the source code of my class file and to set
</span><br>
<span class="quotelev1">&gt; proper breakpoints.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried my program with our former Java version which I
</span><br>
<span class="quotelev1">&gt; used for all test programs which I ported from C to Java.
</span><br>
<span class="quotelev1">&gt; Unfortunately I got the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 118 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;  -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; Before MPI.Init()
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7e93c7f0, pid=2351, tid=2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: 7.0_07-b10
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; The program being debugged has been started already.
</span><br>
<span class="quotelev1">&gt; Start it from the beginning? (y or n) y
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt;  -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; select: Interrupted system call
</span><br>
<span class="quotelev1">&gt; Before MPI.Init()
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7e93c7f0, pid=2383, tid=2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error &quot;Interrupted system call&quot; doesn't happen every time,
</span><br>
<span class="quotelev1">&gt; but &quot;SIGSEGV&quot; happens even with our older Java version, so that
</span><br>
<span class="quotelev1">&gt; these problems are probably unrelated after all. Are you still
</span><br>
<span class="quotelev1">&gt; interested to solve the problem or have you abandoned Solaris?
</span><br>
<span class="quotelev1">&gt; What can I do to help you, if you are still interested in
</span><br>
<span class="quotelev1">&gt; Solaris for at least openmpi-1.8.x? Thank you very much for any
</span><br>
<span class="quotelev1">&gt; help and any comments in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25463.php">http://www.open-mpi.org/community/lists/users/2014/10/25463.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25465.php">Obed Muñoz: "[OMPI users] [Question] Hybrid implementation with OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="25463.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25463.php">Siegmar Gross: "[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
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
