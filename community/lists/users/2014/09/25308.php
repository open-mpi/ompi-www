<?
$subject_val = "[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 12:09:22 2014" -->
<!-- isoreceived="20140910160922" -->
<!-- sent="Wed, 10 Sep 2014 18:08:53 +0200 (CEST)" -->
<!-- isosent="20140910160853" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris" -->
<!-- id="201409101608.s8AG8r5E002491_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 12:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25309.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25309.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25309.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.8.3a1r32692 on my machines (Solaris
<br>
10 Sparc (tyr), Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1
<br>
x86_64 (linpc1)) with Sun C 5.12 and gcc-4.9.0.
<br>
<p>I still get a segmentation fault for my small Java program on Solaris.
<br>
<p>tyr java 102 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.3a1r32692
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cc
<br>
tyr java 103 mpijavac InitFinalizeMain.java 
<br>
tyr java 104 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=1860, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc 
<br>
compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core 
<br>
dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid1860.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
# The crash happened outside the Java Virtual Machine in native code.
<br>
# See problematic frame for where to report the bug.
<br>
#
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 1860 on node tyr exited on signal 6 
<br>
(Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr java 105 
<br>
<p><p>I have the same problem with my gcc-version.
<br>
<p>tyr java 112 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.3a1r32692
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
tyr java 113 mpijavac InitFinalizeMain.java 
<br>
tyr java 114 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=2489, tid=2
<br>
...
<br>
<p><p>Can I provide anything else, so that you can solve the problem?
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25309.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25309.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25309.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
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
