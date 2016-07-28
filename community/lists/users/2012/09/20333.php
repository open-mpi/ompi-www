<?
$subject_val = "[OMPI users] problems with mpiJava in openmpi-1.9a1r27362";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 08:49:03 2012" -->
<!-- isoreceived="20120926124903" -->
<!-- sent="Wed, 26 Sep 2012 14:42:03 +0200 (CEST)" -->
<!-- isosent="20120926124203" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problems with mpiJava in openmpi-1.9a1r27362" -->
<!-- id="201209261242.q8QCg35Z011167_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problems with mpiJava in openmpi-1.9a1r27362<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-26 08:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20334.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20332.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20335.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Reply:</strong> <a href="20335.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Maybe reply:</strong> <a href="20337.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Maybe reply:</strong> <a href="20339.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.9a1r27362 on Solaris and Linux and
<br>
I have a problem with mpiJava on Linux (openSUSE-Linux 12.1, x86_64).
<br>
<p><p>linpc4 mpi_classfiles 104 javac HelloMainWithoutMPI.java
<br>
linpc4 mpi_classfiles 105 mpijavac HelloMainWithBarrier.java
<br>
linpc4 mpi_classfiles 106 mpijavac -showme
<br>
/usr/local/jdk1.7.0_07-64/bin/javac \
<br>
&nbsp;&nbsp;-cp ...:.:/usr/local/openmpi-1.9_64_cc/lib64/mpi.jar
<br>
<p><p>It works with Java without MPI.
<br>
<p>linpc4 mpi_classfiles 107 mpiexec java -cp $HOME/mpi_classfiles \
<br>
&nbsp;&nbsp;HelloMainWithoutMPI
<br>
Hello from linpc4.informatik.hs-fulda.de/193.174.26.225
<br>
<p><p>It breaks with Java and MPI.
<br>
<p>linpc4 mpi_classfiles 108 mpiexec java -cp $HOME/mpi_classfiles \
<br>
&nbsp;&nbsp;HelloMainWithBarrier
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
[linpc4:15332] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes were 
<br>
killed!
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
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[58875,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p><p>I configured with the following command.
<br>
<p>../openmpi-1.9a1r27362/configure --prefix=/usr/local/openmpi-1.9_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.7.0_07-64 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p>It works fine on Solaris machines as long as the hosts belong to the
<br>
same kind (Sparc or x86_64).
<br>
<p>tyr mpi_classfiles 194 mpiexec -host sunpc0,sunpc1,sunpc4 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles HelloMainWithBarrier
<br>
Process 1 of 3 running on sunpc1
<br>
Process 2 of 3 running on sunpc4.informatik.hs-fulda.de
<br>
Process 0 of 3 running on sunpc0
<br>
<p>sunpc4 fd1026 107 mpiexec -host tyr,rs0,rs1 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles HelloMainWithBarrier 
<br>
Process 1 of 3 running on rs0.informatik.hs-fulda.de
<br>
Process 2 of 3 running on rs1.informatik.hs-fulda.de
<br>
Process 0 of 3 running on tyr.informatik.hs-fulda.de
<br>
<p><p>It breaks if the hosts belong to both kinds of machines.
<br>
<p>sunpc4 fd1026 106 mpiexec -host tyr,rs0,sunpc1 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles HelloMainWithBarrier
<br>
[rs0.informatik.hs-fulda.de:7718] *** An error occurred in MPI_Comm_dup
<br>
[rs0.informatik.hs-fulda.de:7718] *** reported by process [565116929,1]
<br>
[rs0.informatik.hs-fulda.de:7718] *** on communicator MPI_COMM_WORLD
<br>
[rs0.informatik.hs-fulda.de:7718] *** MPI_ERR_INTERN: internal error
<br>
[rs0.informatik.hs-fulda.de:7718] *** MPI_ERRORS_ARE_FATAL (processes
<br>
&nbsp;&nbsp;in this communicator will now abort,
<br>
[rs0.informatik.hs-fulda.de:7718] ***    and potentially your MPI job)
<br>
[sunpc4.informatik.hs-fulda.de:07900] 1 more process has sent help
<br>
&nbsp;&nbsp;message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[sunpc4.informatik.hs-fulda.de:07900] Set MCA parameter
<br>
&nbsp;&nbsp;&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p><p>Please let me know if I can provide anything else to track these errors.
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
<li><strong>Next message:</strong> <a href="20334.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20332.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20335.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Reply:</strong> <a href="20335.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Maybe reply:</strong> <a href="20337.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Maybe reply:</strong> <a href="20339.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
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
