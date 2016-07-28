<?
$subject_val = "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 09:42:43 2012" -->
<!-- isoreceived="20120926134243" -->
<!-- sent="Wed, 26 Sep 2012 06:42:38 -0700" -->
<!-- isosent="20120926134238" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362" -->
<!-- id="CAMD57ock1eB6xenCioinFBekhvnH055izMeCrXoQM=6xFU13EA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201209261242.q8QCg35Z011167_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-26 09:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20336.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20334.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20333.php">Siegmar Gross: "[OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20337.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm on the road the rest of this week, but can look at this when I return
<br>
next week. It looks like something unrelated to the Java bindings failed to
<br>
properly initialize - at a guess, I'd suspect that you are missing the
<br>
LD_LIBRARY_PATH setting so none of the OMPI libs were found.
<br>
<p>On Wed, Sep 26, 2012 at 5:42 AM, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.9a1r27362 on Solaris and Linux and
</span><br>
<span class="quotelev1">&gt; I have a problem with mpiJava on Linux (openSUSE-Linux 12.1, x86_64).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 mpi_classfiles 104 javac HelloMainWithoutMPI.java
</span><br>
<span class="quotelev1">&gt; linpc4 mpi_classfiles 105 mpijavac HelloMainWithBarrier.java
</span><br>
<span class="quotelev1">&gt; linpc4 mpi_classfiles 106 mpijavac -showme
</span><br>
<span class="quotelev1">&gt; /usr/local/jdk1.7.0_07-64/bin/javac \
</span><br>
<span class="quotelev1">&gt;   -cp ...:.:/usr/local/openmpi-1.9_64_cc/lib64/mpi.jar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works with Java without MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 mpi_classfiles 107 mpiexec java -cp $HOME/mpi_classfiles \
</span><br>
<span class="quotelev1">&gt;   HelloMainWithoutMPI
</span><br>
<span class="quotelev1">&gt; Hello from linpc4.informatik.hs-fulda.de/193.174.26.225
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It breaks with Java and MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 mpi_classfiles 108 mpiexec java -cp $HOME/mpi_classfiles \
</span><br>
<span class="quotelev1">&gt;   HelloMainWithBarrier
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
<span class="quotelev1">&gt;   mca_base_open failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -2 instead of OPAL_SUCCESS
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
<span class="quotelev1">&gt;   opal_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
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
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
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
<span class="quotelev1">&gt; [linpc4:15332] Local abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to
</span><br>
<span class="quotelev1">&gt; aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were
</span><br>
<span class="quotelev1">&gt; killed!
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
<span class="quotelev1">&gt; thus
</span><br>
<span class="quotelev1">&gt; causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[58875,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured with the following command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r27362/configure --prefix=/usr/local/openmpi-1.9_64_cc \
</span><br>
<span class="quotelev1">&gt;   --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-bindir=/usr/local/jdk1.7.0_07-64/bin \
</span><br>
<span class="quotelev1">&gt;   --with-jdk-headers=/usr/local/jdk1.7.0_07-64/include \
</span><br>
<span class="quotelev1">&gt;   JAVA_HOME=/usr/local/jdk1.7.0_07-64 \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   OBJC_INCLUDE_PATH=&quot;&quot; OPENMPI_HOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --enable-opal-multi-threads \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;   --without-verbs \
</span><br>
<span class="quotelev1">&gt;   --without-udapl \
</span><br>
<span class="quotelev1">&gt;   --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works fine on Solaris machines as long as the hosts belong to the
</span><br>
<span class="quotelev1">&gt; same kind (Sparc or x86_64).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr mpi_classfiles 194 mpiexec -host sunpc0,sunpc1,sunpc4 \
</span><br>
<span class="quotelev1">&gt;   java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; Process 1 of 3 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 2 of 3 running on sunpc4.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 0 of 3 running on sunpc0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc4 fd1026 107 mpiexec -host tyr,rs0,rs1 \
</span><br>
<span class="quotelev1">&gt;   java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; Process 1 of 3 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 2 of 3 running on rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 0 of 3 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It breaks if the hosts belong to both kinds of machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunpc4 fd1026 106 mpiexec -host tyr,rs0,sunpc1 \
</span><br>
<span class="quotelev1">&gt;   java -cp $HOME/mpi_classfiles HelloMainWithBarrier
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:7718] *** An error occurred in MPI_Comm_dup
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:7718] *** reported by process [565116929,1]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:7718] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:7718] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:7718] *** MPI_ERRORS_ARE_FATAL (processes
</span><br>
<span class="quotelev1">&gt;   in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:7718] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [sunpc4.informatik.hs-fulda.de:07900] 1 more process has sent help
</span><br>
<span class="quotelev1">&gt;   message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [sunpc4.informatik.hs-fulda.de:07900] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;   &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if I can provide anything else to track these errors.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20336.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20334.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20333.php">Siegmar Gross: "[OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20337.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
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
