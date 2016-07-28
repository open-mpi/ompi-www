<?
$subject_val = "[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  5 03:42:28 2014" -->
<!-- isoreceived="20141005074228" -->
<!-- sent="Sun, 5 Oct 2014 09:41:59 +0200 (CEST)" -->
<!-- isosent="20141005074159" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris" -->
<!-- id="201410050742.s957fxho002423_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-05 03:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25462.php">Maxime Boissonneault: "Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed openmpi-1.9.0a1git99c3999 on my machines with
<br>
Sun C 5.12 and gcc-4.9.1 and I still get SIGSEGV for my small
<br>
Java program. Furthermore I get &quot;select: Interrupted system call&quot;
<br>
as you can see below. I use Java-1.8.0. The error appears on
<br>
Solaris 10 Sparc and Solaris 10 x86_64.
<br>
<p>tyr java 104 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9.0a1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cc
<br>
tyr java 105 mpijavac InitFinalizeMain.java
<br>
warning: [path] bad path element
<br>
&nbsp;&nbsp;&quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;:
<br>
&nbsp;&nbsp;no such file or directory
<br>
1 warning
<br>
tyr java 106 
<br>
<p><p>&quot;oshmem&quot; is only available on Linux. Is it possible that you omit
<br>
&quot;shmem.jar&quot; on other platforms like Solaris to avoid the above
<br>
warning, if you use &quot;mpijavac -deprecation -Xlint:all&quot;?
<br>
<p><p>tyr java 107 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
...
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec
<br>
&nbsp;&nbsp;-np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
select: Interrupted system call
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=12461, tid=2
<br>
...
<br>
<p><p>Unfortunately I wasn't able to set any breakpoints in my Java
<br>
program, so that I couldn't use gdb to get more information.
<br>
Therefore I modified my program in the following way to get an
<br>
idea where the &quot;Interrupted system call&quot; happened.
<br>
<p>tyr java 112 cat InitFinalizeMain.java
<br>
import mpi.*;
<br>
public class InitFinalizeMain
<br>
{
<br>
&nbsp;&nbsp;public static void main (String args[]) throws MPIException
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.println (&quot;Before MPI.Init()&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Init (args);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.println (&quot;After MPI.Init()&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System.out.print (&quot;Hello!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI.Finalize ();
<br>
&nbsp;&nbsp;}
<br>
}
<br>
tyr java 113 
<br>
<p><p><p><p>tyr java 116 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec
<br>
&nbsp;&nbsp;-np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
select: Interrupted system call
<br>
Before MPI.Init()
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=12578, tid=2
<br>
...
<br>
<p><p>It seems that &quot;Interrupted system call&quot; happens before I call
<br>
the first MPI function, i.e., in &quot;mpiexec&quot; (?). If that's true,
<br>
then the &quot;SIGSEGV&quot; may happen, because my Java program hasn't
<br>
been started correctly. Do you agree? How do you debug a Java
<br>
program using MPI with gdb? I would be grateful, if somebody
<br>
can tell me how I must start/prepare the program so that I can
<br>
use &quot;list&quot; to see the source code of my class file and to set
<br>
proper breakpoints.
<br>
<p>I also tried my program with our former Java version which I
<br>
used for all test programs which I ported from C to Java.
<br>
Unfortunately I got the same error.
<br>
<p><p>tyr java 118 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
...
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec
<br>
&nbsp;&nbsp;-np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
Before MPI.Init()
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7e93c7f0, pid=2351, tid=2
<br>
#
<br>
# JRE version: 7.0_07-b10
<br>
...
<br>
(gdb) run
<br>
The program being debugged has been started already.
<br>
Start it from the beginning? (y or n) y
<br>
<p>Starting program: /usr/local/openmpi-1.9.0_64_cc/bin/mpiexec
<br>
&nbsp;&nbsp;-np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
select: Interrupted system call
<br>
Before MPI.Init()
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7e93c7f0, pid=2383, tid=2
<br>
...
<br>
<p><p>The error &quot;Interrupted system call&quot; doesn't happen every time,
<br>
but &quot;SIGSEGV&quot; happens even with our older Java version, so that
<br>
these problems are probably unrelated after all. Are you still
<br>
interested to solve the problem or have you abandoned Solaris?
<br>
What can I do to help you, if you are still interested in
<br>
Solaris for at least openmpi-1.8.x? Thank you very much for any
<br>
help and any comments in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25462.php">Maxime Boissonneault: "Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25464.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV with Java in openmpi-1.9.0a1git99c3999 on Solaris"</a>
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
