<?
$subject_val = "[OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 01:59:35 2014" -->
<!-- isoreceived="20140930055935" -->
<!-- sent="Tue, 30 Sep 2014 07:58:57 +0200 (CEST)" -->
<!-- isosent="20140930055857" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris" -->
<!-- id="201409300558.s8U5wuXK028339_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 01:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25418.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25418.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.9a1r32807 on my machines with Sun C
<br>
5.12 and gcc-4.9.1. Unfortunately my small Java program still breaks
<br>
with a segmentation fault.
<br>
<p>tyr java 109 ompi_info | grep -e MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32807
<br>
tyr java 110 mpijavac InitFinalizeMain.java
<br>
warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;: 
<br>
no such file or directory
<br>
1 warning
<br>
tyr java 111 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28335, tid=2
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
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28335.log
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
mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 
<br>
(Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr java 112 
<br>
<p><p>I have already reported this problem for some other versions before.
<br>
How can I help you to fix this problem?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25418.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<li><strong>Reply:</strong> <a href="25418.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
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
