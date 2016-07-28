<?
$subject_val = "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 11:04:14 2012" -->
<!-- isoreceived="20120924150414" -->
<!-- sent="Mon, 24 Sep 2012 08:04:06 -0700" -->
<!-- isosent="20120924150406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
<!-- id="484B698A-2D15-4F9A-95D2-E0640CFA3912_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209241135.q8OBZk2T029105_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 11:04:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20277.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 24, 2012, at 4:35 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried mpiJava on a 32-bit installation of openmpi-1.9a1r27361.
</span><br>
<span class="quotelev1">&gt; Why doesn't &quot;mpiexec&quot; start a process on my local machine (it
</span><br>
<span class="quotelev1">&gt; is not a matter of Java, because I have the same behaviour when
</span><br>
<span class="quotelev1">&gt; I use &quot;hostname&quot;)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 133 mpiexec -np 3 -host tyr,sunpc4,sunpc1 \
</span><br>
<span class="quotelev1">&gt;  java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; Process 0 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 1 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 2 of 3 running on sunpc1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 142 mpiexec -np 3 -host tyr,sunpc4,sunpc1 hostname
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>No idea - it works fine for me. Do you have an environmental variable, or something in your default MCA param file, that indicates &quot;no_use_local&quot;?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command breaks if I add a Linux machine.
</span><br>
<p>Check to ensure that the path and ld_library_path on your linux box is being correctly set to point to the corresponding Linux OMPI libs. It looks like that isn't the case. Remember, the Java bindings are just that - they are bindings that wrap on top of the regular C code. Thus, the underlying OMPI system remains system-dependent, and you must have the appropriate native libraries installed on each machine.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 110 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
</span><br>
<span class="quotelev1">&gt;  java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mca_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [linpc4:27369] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev1">&gt;  not able to aggregate error messages, and not able to guarantee
</span><br>
<span class="quotelev1">&gt;  that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt;  thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[21095,1],2]
</span><br>
<span class="quotelev1">&gt;  Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 111 which mpijavac
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.9_32_cc/bin/mpijavac
</span><br>
<span class="quotelev1">&gt; tyr java 112 more /usr/local/openmpi-1.9_32_cc/bin/mpijavac
</span><br>
<span class="quotelev1">&gt; #!/usr/bin/env perl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # WARNING: DO NOT EDIT THE mpijava.pl FILE AS IT IS GENERATED!
</span><br>
<span class="quotelev1">&gt; #          MAKE ALL CHANGES IN mpijava.pl.in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2012      Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; use strict;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # The main purpose of this wrapper compiler is to check for
</span><br>
<span class="quotelev1">&gt; # and adjust the Java class path to include the OMPI classes
</span><br>
<span class="quotelev1">&gt; # in mpi.jar. The user may have specified a class path on
</span><br>
<span class="quotelev1">&gt; # our cmd line, or it may be in the environment, so we have
</span><br>
<span class="quotelev1">&gt; # to check for both. We also need to be careful not to
</span><br>
<span class="quotelev1">&gt; # just override the class path as it probably includes classes
</span><br>
<span class="quotelev1">&gt; # they need for their application! It also may already include
</span><br>
<span class="quotelev1">&gt; # the path to mpi.jar, and while it doesn't hurt anything, we
</span><br>
<span class="quotelev1">&gt; # don't want to include our class path more than once to avoid
</span><br>
<span class="quotelev1">&gt; # user astonishment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Let the build system provide us with some critical values
</span><br>
<span class="quotelev1">&gt; my $my_compiler = &quot;/usr/local/jdk1.7.0_07/bin/javac&quot;;
</span><br>
<span class="quotelev1">&gt; my $ompi_classpath = &quot;/usr/local/openmpi-1.9_32_cc/lib/mpi.jar&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # globals
</span><br>
<span class="quotelev1">&gt; my $showme_arg = 0;
</span><br>
<span class="quotelev1">&gt; my $verbose = 0;
</span><br>
<span class="quotelev1">&gt; my $my_arg;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All libraries are available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 113 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev1">&gt;        libthread.so.1 =&gt;        /usr/lib/libthread.so.1
</span><br>
<span class="quotelev1">&gt;        libjli.so =&gt;     
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/jdk1.7.0_07/bin/../jre/lib/sparc/jli/libjli.so
</span><br>
<span class="quotelev1">&gt;        libdl.so.1 =&gt;    /usr/lib/libdl.so.1
</span><br>
<span class="quotelev1">&gt;        libc.so.1 =&gt;     /usr/lib/libc.so.1
</span><br>
<span class="quotelev1">&gt;        libm.so.2 =&gt;     /usr/lib/libm.so.2
</span><br>
<span class="quotelev1">&gt;        /platform/SUNW,A70/lib/libc_psr.so.1
</span><br>
<span class="quotelev1">&gt; tyr java 114 ssh sunpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev1">&gt;        libthread.so.1 =&gt;        /usr/lib/libthread.so.1
</span><br>
<span class="quotelev1">&gt;        libjli.so =&gt;     
</span><br>
<span class="quotelev1">&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so
</span><br>
<span class="quotelev1">&gt;        libdl.so.1 =&gt;    /usr/lib/libdl.so.1
</span><br>
<span class="quotelev1">&gt;        libc.so.1 =&gt;     /usr/lib/libc.so.1
</span><br>
<span class="quotelev1">&gt;        libm.so.2 =&gt;     /usr/lib/libm.so.2
</span><br>
<span class="quotelev1">&gt; tyr java 115 ssh linpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev1">&gt;        linux-gate.so.1 =&gt;  (0xffffe000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf77b2000)
</span><br>
<span class="quotelev1">&gt;        libjli.so =&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so 
</span><br>
<span class="quotelev1">&gt; (0xf779d000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7798000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib/libc.so.6 (0xf762b000)
</span><br>
<span class="quotelev1">&gt;        /lib/ld-linux.so.2 (0xf77ce000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have any errors in the log files except the error for nfs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9-Linux.x86_64.32_cc 136 ls log.*
</span><br>
<span class="quotelev1">&gt; log.configure.Linux.x86_64.32_cc   log.make-install.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; log.make-check.Linux.x86_64.32_cc  log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9-Linux.x86_64.32_cc 137 grep &quot;Error 1&quot; log.*
</span><br>
<span class="quotelev1">&gt; log.make-check.Linux.x86_64.32_cc:make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; log.make-check.Linux.x86_64.32_cc:make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; log.make-check.Linux.x86_64.32_cc:make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 32 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't help to build the class files on Linux (which should be
</span><br>
<span class="quotelev1">&gt; independent of the architecture anyway).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 131 ssh linpc4
</span><br>
<span class="quotelev1">&gt; linpc4 fd1026 98 cd .../prog/mpi/java
</span><br>
<span class="quotelev1">&gt; linpc4 java 99 make clean
</span><br>
<span class="quotelev1">&gt; rm -f /home/fd1026/mpi_classfiles/HelloMainWithBarrier.class \
</span><br>
<span class="quotelev1">&gt;  /home/fd1026/mpi_classfiles/HelloMainWithoutBarrier.class
</span><br>
<span class="quotelev1">&gt; linpc4 java 100 make
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithBarrier.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithoutBarrier.java
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 java 101  mpiexec -np 3 -host linpc4 \
</span><br>
<span class="quotelev1">&gt;  java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mca_base_open failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anybody else this problem as well? Do you know a solution?
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20279.php">Ilias Miroslav: "Re: [OMPI users] static, standalone mpirun"</a>
<li><strong>Previous message:</strong> <a href="20277.php">Ralph Castain: "Re: [OMPI users] bindings not reported in openmpi-1.9a1r27359"</a>
<li><strong>In reply to:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
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
