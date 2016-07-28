<?
$subject_val = "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 07:42:44 2012" -->
<!-- isoreceived="20120924114244" -->
<!-- sent="Mon, 24 Sep 2012 13:35:46 +0200 (CEST)" -->
<!-- isosent="20120924113546" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
<!-- id="201209241135.q8OBZk2T029105_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 07:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20273.php">marco atzeri: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>Previous message:</strong> <a href="20271.php">Tim Prince: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Reply:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20332.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20336.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried mpiJava on a 32-bit installation of openmpi-1.9a1r27361.
<br>
Why doesn't &quot;mpiexec&quot; start a process on my local machine (it
<br>
is not a matter of Java, because I have the same behaviour when
<br>
I use &quot;hostname&quot;)?
<br>
<p>tyr java 133 mpiexec -np 3 -host tyr,sunpc4,sunpc1 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles HelloMainWithBarrier
<br>
Process 0 of 3 running on sunpc4.informatik.hs-fulda.de
<br>
Process 1 of 3 running on sunpc4.informatik.hs-fulda.de
<br>
Process 2 of 3 running on sunpc1
<br>
...
<br>
<p>tyr small_prog 142 mpiexec -np 3 -host tyr,sunpc4,sunpc1 hostname
<br>
sunpc1
<br>
sunpc4.informatik.hs-fulda.de
<br>
sunpc4.informatik.hs-fulda.de
<br>
<p><p>The command breaks if I add a Linux machine.
<br>
<p>tyr java 110 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles HelloMainWithBarrier
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;mca_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value -2 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[linpc4:27369] Local abort before MPI_INIT completed successfully;
<br>
&nbsp;&nbsp;not able to aggregate error messages, and not able to guarantee
<br>
&nbsp;&nbsp;that all other processes were killed!
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status,
<br>
&nbsp;&nbsp;thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[21095,1],2]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p><p>tyr java 111 which mpijavac
<br>
/usr/local/openmpi-1.9_32_cc/bin/mpijavac
<br>
tyr java 112 more /usr/local/openmpi-1.9_32_cc/bin/mpijavac
<br>
#!/usr/bin/env perl
<br>
<p># WARNING: DO NOT EDIT THE mpijava.pl FILE AS IT IS GENERATED!
<br>
#          MAKE ALL CHANGES IN mpijava.pl.in
<br>
<p># Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
<br>
# Copyright (c) 2012      Oracle and/or its affiliates.  All rights reserved.
<br>
<p>use strict;
<br>
<p># The main purpose of this wrapper compiler is to check for
<br>
# and adjust the Java class path to include the OMPI classes
<br>
# in mpi.jar. The user may have specified a class path on
<br>
# our cmd line, or it may be in the environment, so we have
<br>
# to check for both. We also need to be careful not to
<br>
# just override the class path as it probably includes classes
<br>
# they need for their application! It also may already include
<br>
# the path to mpi.jar, and while it doesn't hurt anything, we
<br>
# don't want to include our class path more than once to avoid
<br>
# user astonishment
<br>
<p># Let the build system provide us with some critical values
<br>
my $my_compiler = &quot;/usr/local/jdk1.7.0_07/bin/javac&quot;;
<br>
my $ompi_classpath = &quot;/usr/local/openmpi-1.9_32_cc/lib/mpi.jar&quot;;
<br>
<p># globals
<br>
my $showme_arg = 0;
<br>
my $verbose = 0;
<br>
my $my_arg;
<br>
...
<br>
<p><p>All libraries are available.
<br>
<p>tyr java 113 ldd /usr/local/jdk1.7.0_07/bin/javac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libthread.so.1 =&gt;        /usr/lib/libthread.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libjli.so =&gt;     
<br>
/export2/prog/SunOS_sparc/jdk1.7.0_07/bin/../jre/lib/sparc/jli/libjli.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.1 =&gt;    /usr/lib/libdl.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.1 =&gt;     /usr/lib/libc.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.2 =&gt;     /usr/lib/libm.so.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/platform/SUNW,A70/lib/libc_psr.so.1
<br>
tyr java 114 ssh sunpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libthread.so.1 =&gt;        /usr/lib/libthread.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libjli.so =&gt;     
<br>
/usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.1 =&gt;    /usr/lib/libdl.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.1 =&gt;     /usr/lib/libc.so.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.2 =&gt;     /usr/lib/libm.so.2
<br>
tyr java 115 ssh linpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0xffffe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf77b2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libjli.so =&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so 
<br>
(0xf779d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7798000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0xf762b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0xf77ce000)
<br>
<p><p>I don't have any errors in the log files except the error for nfs.
<br>
<p>tyr openmpi-1.9-Linux.x86_64.32_cc 136 ls log.*
<br>
log.configure.Linux.x86_64.32_cc   log.make-install.Linux.x86_64.32_cc
<br>
log.make-check.Linux.x86_64.32_cc  log.make.Linux.x86_64.32_cc
<br>
<p>tyr openmpi-1.9-Linux.x86_64.32_cc 137 grep &quot;Error 1&quot; log.*
<br>
log.make-check.Linux.x86_64.32_cc:make[3]: *** [check-TESTS] Error 1
<br>
log.make-check.Linux.x86_64.32_cc:make[1]: *** [check-recursive] Error 1
<br>
log.make-check.Linux.x86_64.32_cc:make: *** [check-recursive] Error 1
<br>
<p>...
<br>
SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 32 failed)
<br>
FAIL: opal_path_nfs
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
...
<br>
<p><p>It doesn't help to build the class files on Linux (which should be
<br>
independent of the architecture anyway).
<br>
<p>tyr java 131 ssh linpc4
<br>
linpc4 fd1026 98 cd .../prog/mpi/java
<br>
linpc4 java 99 make clean
<br>
rm -f /home/fd1026/mpi_classfiles/HelloMainWithBarrier.class \
<br>
&nbsp;&nbsp;/home/fd1026/mpi_classfiles/HelloMainWithoutBarrier.class
<br>
linpc4 java 100 make
<br>
mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithBarrier.java
<br>
mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithoutBarrier.java
<br>
<p>linpc4 java 101  mpiexec -np 3 -host linpc4 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles HelloMainWithBarrier
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;mca_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value -2 instead of OPAL_SUCCESS
<br>
...
<br>
<p>Has anybody else this problem as well? Do you know a solution?
<br>
Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20273.php">marco atzeri: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<li><strong>Previous message:</strong> <a href="20271.php">Tim Prince: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Reply:</strong> <a href="20278.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20332.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Maybe reply:</strong> <a href="20336.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
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
