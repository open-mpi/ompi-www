<?
$subject_val = "Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 12:10:56 2014" -->
<!-- isoreceived="20140910161056" -->
<!-- sent="Wed, 10 Sep 2014 09:10:16 -0700" -->
<!-- isosent="20140910161016" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris" -->
<!-- id="89CACC10-45BC-427C-985A-DCC92D23CAF3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201409101608.s8AG8r5E002491_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 12:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25310.php">Ahmed Salama: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="25308.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25308.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Working on the memory alignment issues in the trunk, and they are being scheduled to come across as we go.
<br>
<p>On Sep 10, 2014, at 9:08 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I installed openmpi-1.8.3a1r32692 on my machines (Solaris
</span><br>
<span class="quotelev1">&gt; 10 Sparc (tyr), Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64 (linpc1)) with Sun C 5.12 and gcc-4.9.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still get a segmentation fault for my small Java program on Solaris.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 102 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.8.3a1r32692
</span><br>
<span class="quotelev1">&gt;              C compiler: cc
</span><br>
<span class="quotelev1">&gt; tyr java 103 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev1">&gt; tyr java 104 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=1860, tid=2
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
<span class="quotelev1">&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid1860.log
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
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 1860 on node tyr exited on signal 6 
</span><br>
<span class="quotelev1">&gt; (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr java 105 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the same problem with my gcc-version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 112 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.8.3a1r32692
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt; tyr java 113 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev1">&gt; tyr java 114 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=2489, tid=2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I provide anything else, so that you can solve the problem?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25308.php">http://www.open-mpi.org/community/lists/users/2014/09/25308.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25310.php">Ahmed Salama: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="25308.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25308.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java and openmpi-1.8.3a1r32692 on Solaris"</a>
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
