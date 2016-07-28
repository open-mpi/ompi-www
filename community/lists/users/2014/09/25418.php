<?
$subject_val = "Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 12:37:41 2014" -->
<!-- isoreceived="20140930163741" -->
<!-- sent="Tue, 30 Sep 2014 09:37:36 -0700" -->
<!-- isosent="20140930163736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris" -->
<!-- id="EEAF3910-C9B7-4682-96D7-AC2816833A80_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201409300558.s8U5wuXK028339_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 12:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25419.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25415.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't know about the segfault itself, but I did find and fix the classpath logic so the app is found. Might help you get a little further.
<br>
<p>On Sep 29, 2014, at 10:58 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.9a1r32807 on my machines with Sun C
</span><br>
<span class="quotelev1">&gt; 5.12 and gcc-4.9.1. Unfortunately my small Java program still breaks
</span><br>
<span class="quotelev1">&gt; with a segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 109 ompi_info | grep -e MPI:
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9a1r32807
</span><br>
<span class="quotelev1">&gt; tyr java 110 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev1">&gt; warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;: 
</span><br>
<span class="quotelev1">&gt; no such file or directory
</span><br>
<span class="quotelev1">&gt; 1 warning
</span><br>
<span class="quotelev1">&gt; tyr java 111 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28335, tid=2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc 
</span><br>
<span class="quotelev1">&gt; compressed oops)
</span><br>
<span class="quotelev1">&gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; # C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Failed to write core dump. Core dumps have been disabled. To enable core 
</span><br>
<span class="quotelev1">&gt; dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28335.log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 
</span><br>
<span class="quotelev1">&gt; (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr java 112 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have already reported this problem for some other versions before.
</span><br>
<span class="quotelev1">&gt; How can I help you to fix this problem?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25415.php">http://www.open-mpi.org/community/lists/users/2014/09/25415.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25419.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25415.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
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
