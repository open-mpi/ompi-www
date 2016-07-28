<?
$subject_val = "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 10:17:09 2012" -->
<!-- isoreceived="20120925141709" -->
<!-- sent="Tue, 25 Sep 2012 07:17:01 -0700" -->
<!-- isosent="20120925141701" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
<!-- id="9CD6A1B6-1119-4926-8B71-FC447932AF19_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209251345.q8PDjxGf017441_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-09-25 10:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Previous message:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2012, at 6:45 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried mpiJava on a 32-bit installation of openmpi-1.9a1r27361.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why doesn't &quot;mpiexec&quot; start a process on my local machine (it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not a matter of Java, because I have the same behaviour when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use &quot;hostname&quot;)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 133 mpiexec -np 3 -host tyr,sunpc4,sunpc1 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 0 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 2 of 3 running on sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr small_prog 142 mpiexec -np 3 -host tyr,sunpc4,sunpc1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No idea - it works fine for me. Do you have an environmental
</span><br>
<span class="quotelev2">&gt;&gt; variable, or something in your default MCA param file, that
</span><br>
<span class="quotelev2">&gt;&gt; indicates &quot;no_use_local&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have only built and installed Open MPI and I have no param file.
</span><br>
<span class="quotelev1">&gt; I don't have a mca environment variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 136 grep local \
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.9_64_cc/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; # $sysconf is a directory on a local disk, it is likely that changes
</span><br>
<span class="quotelev1">&gt; #   component_path = /usr/local/lib/openmpi:~/my_openmpi_components
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 143 env | grep -i mca
</span><br>
<span class="quotelev1">&gt; tyr hello_1 144 
</span><br>
<p>No ideas - I can't make it behave that way  :-(
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The command breaks if I add a Linux machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Check to ensure that the path and ld_library_path on your linux box
</span><br>
<span class="quotelev2">&gt;&gt; is being correctly set to point to the corresponding Linux OMPI libs.
</span><br>
<span class="quotelev2">&gt;&gt; It looks like that isn't the case. Remember, the Java bindings are
</span><br>
<span class="quotelev2">&gt;&gt; just that - they are bindings that wrap on top of the regular C
</span><br>
<span class="quotelev2">&gt;&gt; code. Thus, the underlying OMPI system remains system-dependent,
</span><br>
<span class="quotelev2">&gt;&gt; and you must have the appropriate native libraries installed on
</span><br>
<span class="quotelev2">&gt;&gt; each machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I implemented a small program, which shows these values and they
</span><br>
<span class="quotelev1">&gt; are wrong for MPI, but I have no idea why. The two entries at the
</span><br>
<span class="quotelev1">&gt; beginning from PATH and LD_LIBRARY_PATH are not from our normal
</span><br>
<span class="quotelev1">&gt; environment, because I add these values at the end of the environment
</span><br>
<span class="quotelev1">&gt; variables PATH, LD_LIBRARY_PATH_32, and LD_LIBRARY_PATH_64. Afterwards
</span><br>
<span class="quotelev1">&gt; I set LD_LIBRARY_PATH to LD_LIBRARY_PATH_64 on a 64-bit Solaris
</span><br>
<span class="quotelev1">&gt; machine, to LD_LIBRARY_PATH_32 followed by LD_LIBRARY_PATH_64 on a
</span><br>
<span class="quotelev1">&gt; 64-bit Linux machine, and to LD_LIBRARY_PATH_32 on every 32-bit
</span><br>
<span class="quotelev1">&gt; machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I see the problem - our heterogeneous support could use some improvement, but it'll be awhile before I can get to it.
<br>
<p>What's happening is that we are picking up and propagating the prefix you specified, prepending it to your path and ld_library_path. Did you by chance configure with --enable-orterun-prefix-by-default? Or specify --prefix on your cmd line? Otherwise, it shouldn't be doing this. For this purpose, you cannot use either of those options.
<br>
<p>Also, you'll need to add --enable-heterogeneous to your configure so the MPI layer builds the right support, and add --hetero-nodes to your cmd line.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now 1 slave tasks are sending their environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Environment from task 1:
</span><br>
<span class="quotelev1">&gt;  message type:        3
</span><br>
<span class="quotelev1">&gt;  msg length:          4622 characters
</span><br>
<span class="quotelev1">&gt;  message:             
</span><br>
<span class="quotelev1">&gt;    hostname:          tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;    operating system:  SunOS
</span><br>
<span class="quotelev1">&gt;    release:           5.10
</span><br>
<span class="quotelev1">&gt;    processor:         sun4u
</span><br>
<span class="quotelev1">&gt;    PATH
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/bin  (!!!)
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/bin  (!!!)
</span><br>
<span class="quotelev1">&gt;                       /usr/local/eclipse-3.6.1
</span><br>
<span class="quotelev1">&gt;                       ...
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/bin  (&lt;- from our environment)
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH_32
</span><br>
<span class="quotelev1">&gt;                       /usr/lib
</span><br>
<span class="quotelev1">&gt;                       /usr/local/jdk1.7.0_07/jre/lib/sparc
</span><br>
<span class="quotelev1">&gt;                       ...
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/lib  (&lt;- from our environment)
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH_64
</span><br>
<span class="quotelev1">&gt;                       /usr/lib/sparcv9
</span><br>
<span class="quotelev1">&gt;                       /usr/local/jdk1.7.0_07/jre/lib/sparcv9
</span><br>
<span class="quotelev1">&gt;                       ...
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/lib64  (&lt;- from our environment)
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/lib     (!!!)
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/lib64   (!!!)
</span><br>
<span class="quotelev1">&gt;                       /usr/lib/sparcv9
</span><br>
<span class="quotelev1">&gt;                       /usr/local/jdk1.7.0_07/jre/lib/sparcv9
</span><br>
<span class="quotelev1">&gt;                       ...
</span><br>
<span class="quotelev1">&gt;                       /usr/local/openmpi-1.9_64_cc/lib64  (&lt;- from our environment)
</span><br>
<span class="quotelev1">&gt;    CLASSPATH
</span><br>
<span class="quotelev1">&gt;                       /usr/local/junit4.10
</span><br>
<span class="quotelev1">&gt;                       /usr/local/junit4.10/junit-4.10.jar
</span><br>
<span class="quotelev1">&gt;                       //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dcore.jar
</span><br>
<span class="quotelev1">&gt;                       //usr/local/jdk1.7.0_07/j3d/lib/ext/j3dutils.jar
</span><br>
<span class="quotelev1">&gt;                       //usr/local/jdk1.7.0_07/j3d/lib/ext/vecmath.jar
</span><br>
<span class="quotelev1">&gt;                       /usr/local/javacc-5.0/javacc.jar
</span><br>
<span class="quotelev1">&gt;                       .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without MPI the program uses our environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 147 diff env_with*
</span><br>
<span class="quotelev1">&gt; 1,7c1
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; &lt; Now 1 slave tasks are sending their environment.
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; &lt; Environment from task 1:
</span><br>
<span class="quotelev1">&gt; &lt;   message type:        3
</span><br>
<span class="quotelev1">&gt; &lt;   msg length:          4622 characters
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Environment:
</span><br>
<span class="quotelev1">&gt; 14,15d7
</span><br>
<span class="quotelev1">&gt; &lt;                        /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev1">&gt; &lt;                        /usr/local/openmpi-1.9_64_cc/bin
</span><br>
<span class="quotelev1">&gt; 81,82d72
</span><br>
<span class="quotelev1">&gt; &lt;                        /usr/local/openmpi-1.9_64_cc/lib
</span><br>
<span class="quotelev1">&gt; &lt;                        /usr/local/openmpi-1.9_64_cc/lib64
</span><br>
<span class="quotelev1">&gt; tyr hello_1 148 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the programs so that you can check yourself and
</span><br>
<span class="quotelev1">&gt; hopefully get the same results. Do you modify PATH and LD_LIBRARY_PATH?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 110 mpiexec -np 3 -host tyr,sunpc4,linpc4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_init failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linpc4:27369] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not able to aggregate error messages, and not able to guarantee
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that all other processes were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process name: [[21095,1],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exit code:    1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 111 which mpijavac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.9_32_cc/bin/mpijavac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 112 more /usr/local/openmpi-1.9_32_cc/bin/mpijavac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/usr/bin/env perl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # WARNING: DO NOT EDIT THE mpijava.pl FILE AS IT IS GENERATED!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #          MAKE ALL CHANGES IN mpijava.pl.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Copyright (c) 2012      Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use strict;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The main purpose of this wrapper compiler is to check for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # and adjust the Java class path to include the OMPI classes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # in mpi.jar. The user may have specified a class path on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # our cmd line, or it may be in the environment, so we have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # to check for both. We also need to be careful not to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # just override the class path as it probably includes classes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # they need for their application! It also may already include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # the path to mpi.jar, and while it doesn't hurt anything, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # don't want to include our class path more than once to avoid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # user astonishment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Let the build system provide us with some critical values
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my $my_compiler = &quot;/usr/local/jdk1.7.0_07/bin/javac&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my $ompi_classpath = &quot;/usr/local/openmpi-1.9_32_cc/lib/mpi.jar&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # globals
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my $showme_arg = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my $verbose = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my $my_arg;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All libraries are available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 113 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libthread.so.1 =&gt;        /usr/lib/libthread.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libjli.so =&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export2/prog/SunOS_sparc/jdk1.7.0_07/bin/../jre/lib/sparc/jli/libjli.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libdl.so.1 =&gt;    /usr/lib/libdl.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libc.so.1 =&gt;     /usr/lib/libc.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libm.so.2 =&gt;     /usr/lib/libm.so.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /platform/SUNW,A70/lib/libc_psr.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 114 ssh sunpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libthread.so.1 =&gt;        /usr/lib/libthread.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libjli.so =&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libdl.so.1 =&gt;    /usr/lib/libdl.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libc.so.1 =&gt;     /usr/lib/libc.so.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libm.so.2 =&gt;     /usr/lib/libm.so.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 115 ssh linpc4 ldd /usr/local/jdk1.7.0_07/bin/javac
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       linux-gate.so.1 =&gt;  (0xffffe000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf77b2000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libjli.so =&gt; /usr/local/jdk1.7.0_07/bin/../jre/lib/i386/jli/libjli.so 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0xf779d000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7798000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       libc.so.6 =&gt; /lib/libc.so.6 (0xf762b000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /lib/ld-linux.so.2 (0xf77ce000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have any errors in the log files except the error for nfs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi-1.9-Linux.x86_64.32_cc 136 ls log.*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log.configure.Linux.x86_64.32_cc   log.make-install.Linux.x86_64.32_cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc  log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi-1.9-Linux.x86_64.32_cc 137 grep &quot;Error 1&quot; log.*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc:make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc:make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log.make-check.Linux.x86_64.32_cc:make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 32 failed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 of 2 tests failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It doesn't help to build the class files on Linux (which should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; independent of the architecture anyway).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr java 131 ssh linpc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 fd1026 98 cd .../prog/mpi/java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 java 99 make clean
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -f /home/fd1026/mpi_classfiles/HelloMainWithBarrier.class \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/fd1026/mpi_classfiles/HelloMainWithoutBarrier.class
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 java 100 make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithBarrier.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpijavac -d /home/fd1026/mpi_classfiles HelloMainWithoutBarrier.java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linpc4 java 101  mpiexec -np 3 -host linpc4 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_open failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anybody else this problem as well? Do you know a solution?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; /* A small MPI program, which delivers some information about its
</span><br>
<span class="quotelev1">&gt; * machine, operating system, and some environment variables.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Compiling:
</span><br>
<span class="quotelev1">&gt; *   Store executable(s) into local directory.
</span><br>
<span class="quotelev1">&gt; *     mpicc -o &lt;program name&gt; &lt;source code file name&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   Store executable(s) into predefined directories.
</span><br>
<span class="quotelev1">&gt; *     make
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   Make program(s) automatically on all specified hosts. You must
</span><br>
<span class="quotelev1">&gt; *   edit the file &quot;make_compile&quot; and specify your host names before
</span><br>
<span class="quotelev1">&gt; *   you execute it.
</span><br>
<span class="quotelev1">&gt; *     make_compile
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Running:
</span><br>
<span class="quotelev1">&gt; *   LAM-MPI:
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot \
</span><br>
<span class="quotelev1">&gt; *	 -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt; : \
</span><br>
<span class="quotelev1">&gt; *	 -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     lamboot [-v] [&lt;host file&gt;]
</span><br>
<span class="quotelev1">&gt; *       mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *	 or
</span><br>
<span class="quotelev1">&gt; *	 mpiexec [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *     lamhalt
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   OpenMPI:
</span><br>
<span class="quotelev1">&gt; *     &quot;host1&quot;, &quot;host2&quot;, and so on can all have the same name,
</span><br>
<span class="quotelev1">&gt; *     if you want to start a virtual computer with some virtual
</span><br>
<span class="quotelev1">&gt; *     cpu's on the local host. The name &quot;localhost&quot; is allowed
</span><br>
<span class="quotelev1">&gt; *     as well.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *     mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec --host &lt;host1,host2,...&gt; \
</span><br>
<span class="quotelev1">&gt; *	 -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -hostfile &lt;hostfile name&gt; \
</span><br>
<span class="quotelev1">&gt; *	 -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -app &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Cleaning:
</span><br>
<span class="quotelev1">&gt; *   local computer:
</span><br>
<span class="quotelev1">&gt; *     rm &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     make clean_all
</span><br>
<span class="quotelev1">&gt; *   on all specified computers (you must edit the file &quot;make_clean_all&quot;
</span><br>
<span class="quotelev1">&gt; *   and specify your host names before you execute it.
</span><br>
<span class="quotelev1">&gt; *     make_clean_all
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * File: environ_mpi.c		       	Author: S. Gross
</span><br>
<span class="quotelev1">&gt; * Date: 25.09.2012
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/utsname.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define	BUF_SIZE	8192		/* message buffer size		*/
</span><br>
<span class="quotelev1">&gt; #define	MAX_TASKS	12		/* max. number of tasks		*/
</span><br>
<span class="quotelev1">&gt; #define	SENDTAG		1		/* send message command		*/
</span><br>
<span class="quotelev1">&gt; #define	EXITTAG		2		/* termination command		*/
</span><br>
<span class="quotelev1">&gt; #define	MSGTAG		3		/* normal message token		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define ENTASKS		-1		/* error: too many tasks	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void master (void);
</span><br>
<span class="quotelev1">&gt; static void slave (void);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int  mytid,				/* my task id			*/
</span><br>
<span class="quotelev1">&gt;       ntasks;				/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    master ();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    slave ();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Function for the &quot;master task&quot;. The master sends a request to all
</span><br>
<span class="quotelev1">&gt; * slaves asking for a message. After receiving and printing the
</span><br>
<span class="quotelev1">&gt; * messages he sends all slaves a termination command.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * input parameters:	not necessary
</span><br>
<span class="quotelev1">&gt; * output parameters:	not available
</span><br>
<span class="quotelev1">&gt; * return value:	nothing
</span><br>
<span class="quotelev1">&gt; * side effects:	no side effects
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; void master (void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int		ntasks,			/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt; 		mytid,			/* my task id			*/
</span><br>
<span class="quotelev1">&gt; 		num,			/* number of entries		*/
</span><br>
<span class="quotelev1">&gt; 		i;			/* loop variable		*/
</span><br>
<span class="quotelev1">&gt;  char		buf[BUF_SIZE + 1];    	/* message buffer (+1 for '\0')	*/
</span><br>
<span class="quotelev1">&gt;  MPI_Status	stat;			/* message details		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;  if (ntasks &gt; MAX_TASKS)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    fprintf (stderr, &quot;Error: Too many tasks. Try again with at most &quot;
</span><br>
<span class="quotelev1">&gt; 	     &quot;%d tasks.\n&quot;, MAX_TASKS);
</span><br>
<span class="quotelev1">&gt;    /* terminate all slave tasks					*/
</span><br>
<span class="quotelev1">&gt;    for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      MPI_Send ((char *) NULL, 0, MPI_CHAR, i, EXITTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;    exit (ENTASKS);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf (&quot;\n\nNow %d slave tasks are sending their environment.\n\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	  ntasks - 1);
</span><br>
<span class="quotelev1">&gt;  /* request messages from slave tasks					*/
</span><br>
<span class="quotelev1">&gt;  for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Send ((char *) NULL, 0, MPI_CHAR, i, SENDTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* wait for messages and print greetings     				*/
</span><br>
<span class="quotelev1">&gt;  for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev1">&gt; 	      MPI_ANY_TAG, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;    MPI_Get_count (&amp;stat, MPI_CHAR, &amp;num);
</span><br>
<span class="quotelev1">&gt;    buf[num] = '\0';			/* add missing end-of-string	*/
</span><br>
<span class="quotelev1">&gt;    printf (&quot;Environment from task %d:\n&quot;
</span><br>
<span class="quotelev1">&gt; 	    &quot;  message type:        %d\n&quot;
</span><br>
<span class="quotelev1">&gt; 	    &quot;  msg length:          %d characters\n&quot;
</span><br>
<span class="quotelev1">&gt; 	    &quot;  message:             %s\n\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	    stat.MPI_SOURCE, stat.MPI_TAG, num, buf);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* terminate all slave tasks						*/
</span><br>
<span class="quotelev1">&gt;  for (i = 1; i &lt; ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Send ((char *) NULL, 0, MPI_CHAR, i, EXITTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Function for &quot;slave tasks&quot;. The slave task sends its hostname,
</span><br>
<span class="quotelev1">&gt; * operating system name and release, and processor architecture
</span><br>
<span class="quotelev1">&gt; * as a message to the master.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * input parameters:	not necessary
</span><br>
<span class="quotelev1">&gt; * output parameters:	not available
</span><br>
<span class="quotelev1">&gt; * return value:	nothing
</span><br>
<span class="quotelev1">&gt; * side effects:	no side effects
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; void slave (void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  struct utsname sys_info;		/* system information		*/
</span><br>
<span class="quotelev1">&gt;  int		 mytid,		       	/* my task id			*/
</span><br>
<span class="quotelev1">&gt; 		 num_env_vars,		/* # of environment variables	*/
</span><br>
<span class="quotelev1">&gt; 		 i,			/* loop variable		*/
</span><br>
<span class="quotelev1">&gt; 		 more_to_do;
</span><br>
<span class="quotelev1">&gt;  char		 buf[BUF_SIZE],       	/* message buffer      		*/
</span><br>
<span class="quotelev1">&gt; 		 *env_vars[] = {&quot;PATH&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;LD_LIBRARY_PATH_32&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;LD_LIBRARY_PATH_64&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;LD_LIBRARY_PATH&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;CLASSPATH&quot;};
</span><br>
<span class="quotelev1">&gt;  MPI_Status	 stat;			/* message details		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  num_env_vars = sizeof (env_vars) / sizeof (env_vars[0]);
</span><br>
<span class="quotelev1">&gt;  more_to_do = 1;
</span><br>
<span class="quotelev1">&gt;  while (more_to_do == 1)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    /* wait for a message from the master task				*/
</span><br>
<span class="quotelev1">&gt;    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, 0, MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt; 	      MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt;    if (stat.MPI_TAG != EXITTAG)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      uname (&amp;sys_info);
</span><br>
<span class="quotelev1">&gt;      strcpy (buf, &quot;\n    hostname:          &quot;);
</span><br>
<span class="quotelev1">&gt;      strncpy (buf + strlen (buf), sys_info.nodename,
</span><br>
<span class="quotelev1">&gt; 	       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      strncpy (buf + strlen (buf), &quot;\n    operating system:  &quot;,
</span><br>
<span class="quotelev1">&gt; 	       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      strncpy (buf + strlen (buf), sys_info.sysname,
</span><br>
<span class="quotelev1">&gt; 	       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      strncpy (buf + strlen (buf), &quot;\n    release:           &quot;,
</span><br>
<span class="quotelev1">&gt; 	       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      strncpy (buf + strlen (buf), sys_info.release,
</span><br>
<span class="quotelev1">&gt; 	       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      strncpy (buf + strlen (buf), &quot;\n    processor:         &quot;,
</span><br>
<span class="quotelev1">&gt; 	       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      strncpy (buf + strlen (buf), sys_info.machine,
</span><br>
<span class="quotelev1">&gt; 	       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; num_env_vars; ++i)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	char *env_val,			/* pointer to environment value	*/
</span><br>
<span class="quotelev1">&gt; 	     *delimiter = &quot;:&quot;	,	/* field delimiter for &quot;strtok&quot;	*/
</span><br>
<span class="quotelev1">&gt; 	     *next_tok;			/* next token			*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	env_val = getenv (env_vars[i]);
</span><br>
<span class="quotelev1">&gt; 	if (env_val != NULL)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  if ((strlen (buf) + strlen (env_vars[i]) + 6) &lt; BUF_SIZE)
</span><br>
<span class="quotelev1">&gt; 	  {
</span><br>
<span class="quotelev1">&gt; 	    strncpy (buf + strlen (buf), &quot;\n    &quot;,
</span><br>
<span class="quotelev1">&gt; 		     BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt; 	    strncpy (buf + strlen (buf), env_vars[i],
</span><br>
<span class="quotelev1">&gt; 		     BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	  else
</span><br>
<span class="quotelev1">&gt; 	  {
</span><br>
<span class="quotelev1">&gt; 	    fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot;.&quot;
</span><br>
<span class="quotelev1">&gt; 		     &quot;\n\n&quot;, env_vars[i]);
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	  /* Get first token in &quot;env_val&quot;. &quot;strtok&quot; skips all
</span><br>
<span class="quotelev1">&gt; 	   * characters that are contained in the current delimiter
</span><br>
<span class="quotelev1">&gt; 	   * string. If it finds a character which is not contained
</span><br>
<span class="quotelev1">&gt; 	   * in the delimiter string, it is the start of the first
</span><br>
<span class="quotelev1">&gt; 	   * token. Now it searches for the next character which is
</span><br>
<span class="quotelev1">&gt; 	   * part of the delimiter string. If it finds one it will
</span><br>
<span class="quotelev1">&gt; 	   * overwrite it by a '\0' to terminate the first token.
</span><br>
<span class="quotelev1">&gt; 	   * Otherwise the token extends to the end of the string.
</span><br>
<span class="quotelev1">&gt; 	   * Subsequent calls of &quot;strtok&quot; use a NULL pointer as first
</span><br>
<span class="quotelev1">&gt; 	   * argument and start searching from the saved position
</span><br>
<span class="quotelev1">&gt; 	   * after the last token. &quot;strtok&quot; returns NULL if it
</span><br>
<span class="quotelev1">&gt; 	   * couldn't find a token.
</span><br>
<span class="quotelev1">&gt; 	   */
</span><br>
<span class="quotelev1">&gt; 	  next_tok = strtok (env_val, delimiter);
</span><br>
<span class="quotelev1">&gt; 	  while (next_tok != NULL)
</span><br>
<span class="quotelev1">&gt; 	  {
</span><br>
<span class="quotelev1">&gt; 	    if ((strlen (buf) + strlen (next_tok) + 25) &lt; BUF_SIZE)
</span><br>
<span class="quotelev1">&gt; 	    {
</span><br>
<span class="quotelev1">&gt; 	      strncpy (buf + strlen (buf), &quot;\n                       &quot;,
</span><br>
<span class="quotelev1">&gt; 		       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt; 	      strncpy (buf + strlen (buf), next_tok,
</span><br>
<span class="quotelev1">&gt; 		       BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt; 	    }
</span><br>
<span class="quotelev1">&gt; 	    else
</span><br>
<span class="quotelev1">&gt; 	    {
</span><br>
<span class="quotelev1">&gt; 	      fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot; &quot;
</span><br>
<span class="quotelev1">&gt; 		       &quot;to %s.\n\n&quot;, next_tok, env_vars[i]);
</span><br>
<span class="quotelev1">&gt; 	    }
</span><br>
<span class="quotelev1">&gt; 	    /* get next token						*/
</span><br>
<span class="quotelev1">&gt; 	    next_tok = strtok (NULL, delimiter);
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      MPI_Send (buf, strlen (buf), MPI_CHAR, stat.MPI_SOURCE,
</span><br>
<span class="quotelev1">&gt;      		MSGTAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      more_to_do = 0;			/* terminate			*/
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; /* A small program, which delivers some information about its
</span><br>
<span class="quotelev1">&gt; * machine, operating system, and some environment variables.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Compiling:
</span><br>
<span class="quotelev1">&gt; *   Store executable(s) into local directory.
</span><br>
<span class="quotelev1">&gt; *     (g)cc -o environ_without_mpi environ_without_mpi.c
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Running:
</span><br>
<span class="quotelev1">&gt; *   environ_without_mpi
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * File: environ_without_mpi.c	       	Author: S. Gross
</span><br>
<span class="quotelev1">&gt; * Date: 25.09.2012
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/utsname.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define	BUF_SIZE	8192		/* message buffer size		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  struct utsname sys_info;		/* system information		*/
</span><br>
<span class="quotelev1">&gt;  int		 num_env_vars,		/* # of environment variables	*/
</span><br>
<span class="quotelev1">&gt; 		 i;			/* loop variable		*/
</span><br>
<span class="quotelev1">&gt;  char		 buf[BUF_SIZE],       	/* message buffer      		*/
</span><br>
<span class="quotelev1">&gt; 		 *env_vars[] = {&quot;PATH&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;LD_LIBRARY_PATH_32&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;LD_LIBRARY_PATH_64&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;LD_LIBRARY_PATH&quot;,
</span><br>
<span class="quotelev1">&gt; 				&quot;CLASSPATH&quot;};
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  num_env_vars = sizeof (env_vars) / sizeof (env_vars[0]);
</span><br>
<span class="quotelev1">&gt;  uname (&amp;sys_info);
</span><br>
<span class="quotelev1">&gt;  strcpy (buf, &quot;\n    hostname:          &quot;);
</span><br>
<span class="quotelev1">&gt;  strncpy (buf + strlen (buf), sys_info.nodename,
</span><br>
<span class="quotelev1">&gt; 	   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;  strncpy (buf + strlen (buf), &quot;\n    operating system:  &quot;,
</span><br>
<span class="quotelev1">&gt; 	   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;  strncpy (buf + strlen (buf), sys_info.sysname,
</span><br>
<span class="quotelev1">&gt; 	   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;  strncpy (buf + strlen (buf), &quot;\n    release:           &quot;,
</span><br>
<span class="quotelev1">&gt; 	   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;  strncpy (buf + strlen (buf), sys_info.release,
</span><br>
<span class="quotelev1">&gt; 	   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;  strncpy (buf + strlen (buf), &quot;\n    processor:         &quot;,
</span><br>
<span class="quotelev1">&gt; 	   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;  strncpy (buf + strlen (buf), sys_info.machine,
</span><br>
<span class="quotelev1">&gt; 	   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; num_env_vars; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    char *env_val,			/* pointer to environment value	*/
</span><br>
<span class="quotelev1">&gt; 	 *delimiter = &quot;:&quot;	,	/* field delimiter for &quot;strtok&quot;	*/
</span><br>
<span class="quotelev1">&gt; 	 *next_tok;			/* next token			*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    env_val = getenv (env_vars[i]);
</span><br>
<span class="quotelev1">&gt;    if (env_val != NULL)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      if ((strlen (buf) + strlen (env_vars[i]) + 6) &lt; BUF_SIZE)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	strncpy (buf + strlen (buf), &quot;\n    &quot;,
</span><br>
<span class="quotelev1">&gt; 		 BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt; 	strncpy (buf + strlen (buf), env_vars[i],
</span><br>
<span class="quotelev1">&gt; 		 BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot;.&quot;
</span><br>
<span class="quotelev1">&gt; 		 &quot;\n\n&quot;, env_vars[i]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      /* Get first token in &quot;env_val&quot;. &quot;strtok&quot; skips all
</span><br>
<span class="quotelev1">&gt;       * characters that are contained in the current delimiter
</span><br>
<span class="quotelev1">&gt;       * string. If it finds a character which is not contained
</span><br>
<span class="quotelev1">&gt;       * in the delimiter string, it is the start of the first
</span><br>
<span class="quotelev1">&gt;       * token. Now it searches for the next character which is
</span><br>
<span class="quotelev1">&gt;       * part of the delimiter string. If it finds one it will
</span><br>
<span class="quotelev1">&gt;       * overwrite it by a '\0' to terminate the first token.
</span><br>
<span class="quotelev1">&gt;       * Otherwise the token extends to the end of the string.
</span><br>
<span class="quotelev1">&gt;       * Subsequent calls of &quot;strtok&quot; use a NULL pointer as first
</span><br>
<span class="quotelev1">&gt;       * argument and start searching from the saved position
</span><br>
<span class="quotelev1">&gt;       * after the last token. &quot;strtok&quot; returns NULL if it
</span><br>
<span class="quotelev1">&gt;       * couldn't find a token.
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      next_tok = strtok (env_val, delimiter);
</span><br>
<span class="quotelev1">&gt;      while (next_tok != NULL)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	if ((strlen (buf) + strlen (next_tok) + 25) &lt; BUF_SIZE)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  strncpy (buf + strlen (buf), &quot;\n                       &quot;,
</span><br>
<span class="quotelev1">&gt; 		   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt; 	  strncpy (buf + strlen (buf), next_tok,
</span><br>
<span class="quotelev1">&gt; 		   BUF_SIZE - strlen (buf));
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	else
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  fprintf (stderr, &quot;Buffer too small. Couldn't add \&quot;%s\&quot; &quot;
</span><br>
<span class="quotelev1">&gt; 		   &quot;to %s.\n\n&quot;, next_tok, env_vars[i]);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	/* get next token						*/
</span><br>
<span class="quotelev1">&gt; 	next_tok = strtok (NULL, delimiter);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf (&quot;Environment:\n&quot;
</span><br>
<span class="quotelev1">&gt; 	  &quot;  message:             %s\n\n&quot;,  buf);
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20308.php">Jeff Squyres: "Re: [OMPI users] A question on MPI_Probe"</a>
<li><strong>Previous message:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20306.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
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
