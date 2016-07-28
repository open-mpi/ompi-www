<?
$subject_val = "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 09:53:16 2012" -->
<!-- isoreceived="20120925135316" -->
<!-- sent="Tue, 25 Sep 2012 15:45:59 +0200 (CEST)" -->
<!-- isosent="20120925134559" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
<!-- id="201209251345.q8PDjxGf017441_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 09:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Maybe in reply to:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Reply:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev2">&gt; &gt; I tried mpiJava on a 32-bit installation of openmpi-1.9a1r27361.
</span><br>
<span class="quotelev2">&gt; &gt; Why doesn't &quot;mpiexec&quot; start a process on my local machine (it
</span><br>
<span class="quotelev2">&gt; &gt; is not a matter of Java, because I have the same behaviour when
</span><br>
<span class="quotelev2">&gt; &gt; I use &quot;hostname&quot;)?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 133 mpiexec -np 3 -host tyr,sunpc4,sunpc1 \
</span><br>
<span class="quotelev2">&gt; &gt;  java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 3 running on sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 142 mpiexec -np 3 -host tyr,sunpc4,sunpc1 hostname
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No idea - it works fine for me. Do you have an environmental
</span><br>
<span class="quotelev1">&gt; variable, or something in your default MCA param file, that
</span><br>
<span class="quotelev1">&gt; indicates &quot;no_use_local&quot;?
</span><br>
<p>I have only built and installed Open MPI and I have no param file.
<br>
I don't have a mca environment variable.
<br>
<p>tyr hello_1 136 grep local \
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/etc/openmpi-mca-params.conf
<br>
# $sysconf is a directory on a local disk, it is likely that changes
<br>
#   component_path = /usr/local/lib/openmpi:~/my_openmpi_components
<br>
<p>tyr hello_1 143 env | grep -i mca
<br>
tyr hello_1 144 
<br>
<p><p><span class="quotelev2">&gt; &gt; The command breaks if I add a Linux machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check to ensure that the path and ld_library_path on your linux box
</span><br>
<span class="quotelev1">&gt; is being correctly set to point to the corresponding Linux OMPI libs.
</span><br>
<span class="quotelev1">&gt; It looks like that isn't the case. Remember, the Java bindings are
</span><br>
<span class="quotelev1">&gt; just that - they are bindings that wrap on top of the regular C
</span><br>
<span class="quotelev1">&gt; code. Thus, the underlying OMPI system remains system-dependent,
</span><br>
<span class="quotelev1">&gt; and you must have the appropriate native libraries installed on
</span><br>
<span class="quotelev1">&gt; each machine.
</span><br>
<p>I implemented a small program, which shows these values and they
<br>
are wrong for MPI, but I have no idea why. The two entries at the
<br>
beginning from PATH and LD_LIBRARY_PATH are not from our normal
<br>
environment, because I add these values at the end of the environment
<br>
variables PATH, LD_LIBRARY_PATH_32, and LD_LIBRARY_PATH_64. Afterwards
<br>
I set LD_LIBRARY_PATH to LD_LIBRARY_PATH_64 on a 64-bit Solaris
<br>
machine, to LD_LIBRARY_PATH_32 followed by LD_LIBRARY_PATH_64 on a
<br>
64-bit Linux machine, and to LD_LIBRARY_PATH_32 on every 32-bit
<br>
machine.
<br>
<p><p>Now 1 slave tasks are sending their environment.
<br>
<p>Environment from task 1:
<br>
&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;msg length:          4622 characters
<br>
&nbsp;&nbsp;message:             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostname:          tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operating system:  SunOS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;release:           5.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processor:         sun4u
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/bin  (!!!)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/bin  (!!!)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/eclipse-3.6.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/bin  (&lt;- from our environment)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH_32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/jdk1.7.0_07/jre/lib/sparc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/lib  (&lt;- from our environment)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/sparcv9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/jdk1.7.0_07/jre/lib/sparcv9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/lib64  (&lt;- from our environment)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/lib     (!!!)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/lib64   (!!!)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/sparcv9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/jdk1.7.0_07/jre/lib/sparcv9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.9_64_cc/lib64  (&lt;- from our environment)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CLASSPATH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/junit4.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/junit4.10/junit-4.10.jar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//usr/local/jdk1.7.0_07/j3d/lib/ext/j3dcore.jar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//usr/local/jdk1.7.0_07/j3d/lib/ext/j3dutils.jar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//usr/local/jdk1.7.0_07/j3d/lib/ext/vecmath.jar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/javacc-5.0/javacc.jar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
<p><p>Without MPI the program uses our environment.
<br>
<p>tyr hello_1 147 diff env_with*
<br>
1,7c1
<br>
&lt; 
<br>
&lt; 
<br>
&lt; Now 1 slave tasks are sending their environment.
<br>
&lt; 
<br>
&lt; Environment from task 1:
<br>
&lt;   message type:        3
<br>
&lt;   msg length:          4622 characters
<br>
<pre>
---
&gt; Environment:
14,15d7
&lt;                        /usr/local/openmpi-1.9_64_cc/bin
&lt;                        /usr/local/openmpi-1.9_64_cc/bin
81,82d72
&lt;                        /usr/local/openmpi-1.9_64_cc/lib
&lt;                        /usr/local/openmpi-1.9_64_cc/lib64
tyr hello_1 148 
I have attached the programs so that you can check yourself and
hopefully get the same results. Do you modify PATH and LD_LIBRARY_PATH?
Kind regards
Siegmar
&gt; &gt; tyr java 110 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
&gt; &gt;  java -cp $HOME/mpi_classfiles HelloMainWithBarrier
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
&gt; &gt; likely to abort.  There are many reasons that a parallel process can
&gt; &gt; fail during opal_init; some of which are due to configuration or
&gt; &gt; environment problems.  This failure appears to be an internal failure;
&gt; &gt; here's some additional information (which may only be relevant to an
&gt; &gt; Open MPI developer):
&gt; &gt; 
&gt; &gt;  mca_base_open failed
&gt; &gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
&gt; &gt; likely to abort.  There are many reasons that a parallel process can
&gt; &gt; fail during orte_init; some of which are due to configuration or
&gt; &gt; environment problems.  This failure appears to be an internal failure;
&gt; &gt; here's some additional information (which may only be relevant to an
&gt; &gt; Open MPI developer):
&gt; &gt; 
&gt; &gt;  opal_init failed
&gt; &gt;  --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
&gt; &gt; likely to abort.  There are many reasons that a parallel process can
&gt; &gt; fail during MPI_INIT; some of which are due to configuration or environment
&gt; &gt; problems.  This failure appears to be an internal failure; here's some
&gt; &gt; additional information (which may only be relevant to an Open MPI
&gt; &gt; developer):
&gt; &gt; 
&gt; &gt;  ompi_mpi_init: orte_init failed
&gt; &gt;  --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; *** An error occurred in MPI_Init
&gt; &gt; *** on a NULL communicator
&gt; &gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
&gt; &gt; ***    and potentially your MPI job)
&gt; &gt; [linpc4:27369] Local abort before MPI_INIT completed successfully;
&gt; &gt;  not able to aggregate error messages, and not able to guarantee
&gt; &gt;  that all other processes were killed!
&gt; &gt; -------------------------------------------------------
&gt; &gt; Primary job  terminated normally, but 1 process returned
&gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
&gt; &gt; -------------------------------------------------------
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; mpiexec detected that one or more processes exited with non-zero status,
&gt; &gt;  thus causing
&gt; &gt; the job to be terminated. The first process to do so was:
&gt; &gt; 
&gt; &gt;  Process name: [[21095,1],2]
&gt; &gt;  Exit code:    1
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; 
&gt; &gt; 
&gt; &gt; tyr java 111 which mpijavac
&gt; &gt; /usr/local/openmpi-1.9_32_cc/bin/mpijavac
&gt; &gt; tyr java 112 more /usr/local/openmpi-1.9_32_cc/bin/mpijavac
&gt; &gt; #!/usr/bin/env perl
&gt; &gt; 
&gt; &gt; # WARNING: DO NOT EDIT THE mpijava.pl FILE AS IT IS GENERATED!
&gt; &gt; #          MAKE ALL CHANGES IN mpijava.pl.in
&gt; &gt; 
&gt; &gt; # Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
&gt; &gt; # Copyright (c) 2012      Oracle and/or its affiliates.  All rights reserved.
&gt; &gt; 
&gt; &gt; use strict;
&gt; &gt; 
&gt; &gt; # The main purpose of this wrapper compiler is to check for
&gt; &gt; # and adjust the Java class path to include the OMPI classes
&gt; &gt; # in mpi.jar. The user may have specified a class path on
&gt; &gt; # our cmd line, or it may be in the environment, so we have
&gt; &gt; # to check for both. We also need to be careful not to
&gt; &gt; # just override the class path as it probably includes classes
&gt; &gt; # they need for their application! It also may already include
&gt; &gt; # the path to mpi.jar, and while it doesn't hurt anything, we
&gt; &gt; # don't want to include our class path more than once to avoid
&gt; &gt; # user astonishment
&gt; &gt; 
&gt; &gt; # Let the build system provide us with some critical values
&gt; &gt; my $my_compiler = &quot;/usr/local/jdk1.7.0_07/bin/javac&quot;;
&gt; &gt; my $ompi_classpath = &quot;/usr/local/openmpi-1.9_32_cc/lib/mpi.jar&quot;;
&gt; &gt; 
&gt; &gt; # globals
&gt; &gt; my $showme_arg = 0;
&gt; &gt; my $verbose = 0;
&gt; &gt; my $my_arg;
&gt; &gt; ...
&gt; &gt; 
&gt; &gt; 
&gt; &gt; All libraries are available.
&gt; &gt; 
&gt; &gt; tyr java 113 ldd /usr/local/jdk1.7.0_07/bin/javac
&gt; &gt;        libthread.so.1 =&gt;        /usr/lib/libthread.so.1
&gt; &gt;        libjli.so =&gt;     
&gt; &gt; /export2/prog/SunOS_sparc/jdk1.7.0_07/bin/../jre/lib/sparc/jli/libjli.so
&gt; &gt;        libdl.so.1 =&gt;    /usr/lib/libdl.so.1
&gt; &gt;        libc.so.1 =&gt;     /usr/lib/libc.so.1
&gt; &gt;        libm.so.2 =&gt;     /usr/lib/libm.so.2
&gt; &gt;        /platform/SUNW,A70/lib/libc_psr.so.1
&gt; &gt; tyr java 114 ssh sunpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
&gt; &gt;        libthread.so.1 =&gt;        /usr/lib/libthread.so.1
&gt; &gt;        libjli.so =&gt;     
&gt; &gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so
&gt; &gt;        libdl.so.1 =&gt;    /usr/lib/libdl.so.1
&gt; &gt;        libc.so.1 =&gt;     /usr/lib/libc.so.1
&gt; &gt;        libm.so.2 =&gt;     /usr/lib/libm.so.2
&gt; &gt; tyr java 115 ssh linpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
&gt; &gt;        linux-gate.so.1 =&gt;  (0xffffe000)
&gt; &gt;        libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf77b2000)
&gt; &gt;        libjli.so =&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so 
&gt; &gt; (0xf779d000)
&gt; &gt;        libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7798000)
&gt; &gt;        libc.so.6 =&gt; /lib/libc.so.6 (0xf762b000)
&gt; &gt;        /lib/ld-linux.so.2 (0xf77ce000)
&gt; &gt; 
&gt; &gt; 
&gt; &gt; I don't have any errors in the log files except the error for nfs.
&gt; &gt; 
&gt; &gt; tyr openmpi-1.9-Linux.x86_64.32_cc 136 ls log.*
&gt; &gt; log.configure.Linux.x86_64.32_cc   log.make-install.Linux.x86_64.32_cc
&gt; &gt; log.make-check.Linux.x86_64.32_cc  log.make.Linux.x86_64.32_cc
&gt; &gt; 
&gt; &gt; tyr openmpi-1.9-Linux.x86_64.32_cc 137 grep &quot;Error 1&quot; log.*
&gt; &gt; log.make-check.Linux.x86_64.32_cc:make[3]: *** [check-TESTS] Error 1
&gt; &gt; log.make-check.Linux.x86_64.32_cc:make[1]: *** [check-recursive] Error 1
&gt; &gt; log.make-check.Linux.x86_64.32_cc:make: *** [check-recursive] Error 1
&gt; &gt; 
&gt; &gt; ...
&gt; &gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 32 failed)
&gt; &gt; FAIL: opal_path_nfs
&gt; &gt; ========================================================
&gt; &gt; 1 of 2 tests failed
&gt; &gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt; &gt; ========================================================
&gt; &gt; make[3]: *** [check-TESTS] Error 1
&gt; &gt; ...
&gt; &gt; 
&gt; &gt; 
&gt; &gt; It doesn't help to build the class files on Linux (which should be
&gt; &gt; independent of the architecture anyway).
&gt; &gt; 
&gt; &gt; tyr java 131 ssh linpc4
&gt; &gt; linpc4 fd1026 98 cd .../prog/mpi/java
&gt; &gt; linpc4 java 99 make clean
&gt; &gt; rm -f /home/fd1026/mpi_classfiles/HelloMainWithBarrier.class \
&gt; &gt;  /home/fd1026/mpi_classfiles/HelloMainWithoutBarrier.class
&gt; &gt; linpc4 java 100 make
&gt; &gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithBarrier.java
&gt; &gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithoutBarrier.java
&gt; &gt; 
&gt; &gt; linpc4 java 101  mpiexec -np 3 -host linpc4 \
&gt; &gt;  java -cp $HOME/mpi_classfiles HelloMainWithBarrier
&gt; &gt; --------------------------------------------------------------------------
&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
&gt; &gt; likely to abort.  There are many reasons that a parallel process can
&gt; &gt; fail during opal_init; some of which are due to configuration or
&gt; &gt; environment problems.  This failure appears to be an internal failure;
&gt; &gt; here's some additional information (which may only be relevant to an
&gt; &gt; Open MPI developer):
&gt; &gt; 
&gt; &gt;  mca_base_open failed
&gt; &gt;  --&gt; Returned value -2 instead of OPAL_SUCCESS
&gt; &gt; ...
&gt; &gt; 
&gt; &gt; Has anybody else this problem as well? Do you know a solution?
&gt; &gt; Thank you very much for any help in advance.
&gt; &gt; 
&gt; &gt; 
&gt; &gt; Kind regards
&gt; &gt; 
&gt; &gt; Siegmar
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 


</pre>
<hr>
<ul>
<li>TEXT/x-sun-c-file attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20306/environ_mpi.c">environ_mpi.c</a>
</ul>
<!-- attachment="environ_mpi.c" -->
<hr>
<ul>
<li>TEXT/x-sun-c-file attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20306/environ_without_mpi.c">environ_without_mpi.c</a>
</ul>
<!-- attachment="environ_without_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Maybe in reply to:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Reply:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
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
