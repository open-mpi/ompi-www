<?
$subject_val = "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 22:27:49 2012" -->
<!-- isoreceived="20121012022749" -->
<!-- sent="Thu, 11 Oct 2012 19:27:43 -0700" -->
<!-- isosent="20121012022743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380" -->
<!-- id="CAMD57oeymRWdDokXkRXMjPe_EA+KXpY+EzeT-SEGsWQRZ9EQ6A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201210110751.q9B7pkuO025300_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 22:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20476.php">Christian Krause: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20474.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Like I said, I haven't tried any of that, so I have no idea if/how it would
<br>
work. I don't have access to any hetero system and we don't see it very
<br>
often at all, so it is quite possible the hetero support really isn't there.
<br>
<p>I'll look at some of the Java-specific issues later.
<br>
<p><p>On Thu, Oct 11, 2012 at 12:51 AM, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't tried heterogeneous apps on the Java code yet - could well not
</span><br>
<span class="quotelev2">&gt; &gt; work. At the least, I would expect you need to compile your Java app
</span><br>
<span class="quotelev2">&gt; &gt; against the corresponding OMPI install on each architecture, and ensure
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; right one gets run on each node. Even though it's a Java app, the classes
</span><br>
<span class="quotelev2">&gt; &gt; need to get linked against the proper OMPI code for that node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As for Linux-only operation: it works fine for me. Did you remember to
</span><br>
<span class="quotelev1">&gt; (a)
</span><br>
<span class="quotelev2">&gt; &gt; build mpiexec on those linux machines (as opposed to using the Solaris
</span><br>
<span class="quotelev2">&gt; &gt; version), and (b) recompile your app against that OMPI installation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't know that the classfiles are different, but it doesn't change
</span><br>
<span class="quotelev1">&gt; anything, if I create different classfiles. I use a small shell script
</span><br>
<span class="quotelev1">&gt; to create all neccessary files on all machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 118 make_classfiles
</span><br>
<span class="quotelev1">&gt; =========== rs0 ===========
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles MsgSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles ColumnSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles ColumnScatterMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles EnvironVarMain.java
</span><br>
<span class="quotelev1">&gt; =========== sunpc1 ===========
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles MsgSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles
</span><br>
<span class="quotelev1">&gt; ColumnSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles ColumnScatterMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles EnvironVarMain.java
</span><br>
<span class="quotelev1">&gt; =========== linpc1 ===========
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles MsgSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles
</span><br>
<span class="quotelev1">&gt; ColumnSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles ColumnScatterMain.java
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles EnvironVarMain.java
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every machine should now find its classfiles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 119 mpiexec -host sunpc0,linpc0,rs0 java EnvironVarMain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Operating system: SunOS    Processor architecture: x86_64
</span><br>
<span class="quotelev1">&gt;   CLASSPATH: ...:.:/home/fd1026/SunOS/x86_64/mpi_classfiles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Operating system: Linux    Processor architecture: x86_64
</span><br>
<span class="quotelev1">&gt;   CLASSPATH: ...:.:/home/fd1026/Linux/x86_64/mpi_classfiles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Operating system: SunOS    Processor architecture: sparc
</span><br>
<span class="quotelev1">&gt;   CLASSPATH: ...:.:/home/fd1026/SunOS/sparc/mpi_classfiles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 120 mpiexec -host sunpc0,linpc0,rs0 java MsgSendRecvMain
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
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 121 mpiexec -host sunpc0,rs0 java MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:13671] *** An error occurred in MPI_Comm_dup
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:13671] *** reported by process [1077346305,1]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:13671] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:13671] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:13671] *** MPI_ERRORS_ARE_FATAL (processes in
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:13671] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get an error even then, when I login on a Linux machine, before I
</span><br>
<span class="quotelev1">&gt; run the command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc0 fd1026 99 mpiexec -host linpc0,linpc1 java MsgSendRecvMain
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
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [linpc1:3004] Local abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; were killed!
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc0 fd1026 99 mpijavac -showme
</span><br>
<span class="quotelev1">&gt; /usr/local/jdk1.7.0_07-64/bin/javac -cp ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :.:/home/fd1026/Linux/x86_64/mpi_classfiles:/usr/local/openmpi-1.9_64_cc/lib64/
</span><br>
<span class="quotelev1">&gt; mpi.jar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way I have the same classfiles for all architectures. Are you
</span><br>
<span class="quotelev1">&gt; sure that they should be different? I don't find any absolute path names
</span><br>
<span class="quotelev1">&gt; in the files, when I use &quot;strings&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 133 diff ~/SunOS/sparc/mpi_classfiles/MsgSendRecvMain.class \
</span><br>
<span class="quotelev1">&gt;   ~/SunOS/x86_64/mpi_classfiles/MsgSendRecvMain.class
</span><br>
<span class="quotelev1">&gt; tyr java 134 diff ~/SunOS/sparc/mpi_classfiles/MsgSendRecvMain.class \
</span><br>
<span class="quotelev1">&gt;  ~/Linux/x86_64/mpi_classfiles/MsgSendRecvMain.class
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I provide more information to track the problem on my Linux systems?
</span><br>
<span class="quotelev1">&gt; I think that I have to wait until you support a heterogeneous system, but
</span><br>
<span class="quotelev1">&gt; it would be nice, if Java applications would run on my different
</span><br>
<span class="quotelev1">&gt; homogeneous systems. The strange thing is that it works on my different
</span><br>
<span class="quotelev1">&gt; Solaris systems and not on Linux this time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know if my problem with Datatype.Vector is a problem of Open
</span><br>
<span class="quotelev1">&gt; MPI as well (one of my other emails)? Do you use the extent of the base
</span><br>
<span class="quotelev1">&gt; type and not the extent of the derived data type, if I use a derived
</span><br>
<span class="quotelev1">&gt; data type in a scatter/gather operation or an operation with &quot;count&quot;
</span><br>
<span class="quotelev1">&gt; greater than one?
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
<span class="quotelev2">&gt; &gt; On Wed, Oct 10, 2012 at 5:42 AM, Siegmar Gross &lt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have built openmpi-1.9a1r27380 with Java support and implemented
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a small program that sends some kind of &quot;hello&quot; with Send/Recv.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr java 164 make
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpijavac -d /home/fd1026/mpi_classfiles MsgSendRecvMain.java
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Everything works fine, if I use Solaris 10 x86_84.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr java 165 mpiexec -np 3 -host sunpc0,sunpc1 \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now 2 processes are sending greetings.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Greetings from process 2:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message tag:    3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message length: 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message:        sunpc1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Greetings from process 1:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message tag:    3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message length: 6
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message:        sunpc0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Everything works fine, if I use Solaris 10 Sparc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr java 166 mpiexec -np 3 -host rs0,rs1 \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now 2 processes are sending greetings.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Greetings from process 2:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message tag:    3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message length: 26
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message:        rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Greetings from process 1:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message tag:    3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message length: 26
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   message:        rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The program breaks, if I use both systems.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr java 167 mpiexec -np 3 -host rs0,sunpc0 \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** An error occurred in
</span><br>
<span class="quotelev1">&gt; MPI_Comm_dup
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** reported by process
</span><br>
<span class="quotelev1">&gt; [1976500225,0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** MPI_ERRORS_ARE_FATAL (processes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:9621] ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:22491] 1 more process has sent help
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:22491] Set MCA parameter
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The program breaks, if I use Linux x86_64.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr java 168 mpiexec -np 3 -host linpc0,linpc1 \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like opal_init failed for some reason; your parallel process
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   mca_base_open failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** on a NULL communicator
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt; abort,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [linpc0:20277] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   not able to aggregate error messages, and not able to guarantee that
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   all other processes were killed!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please let me know if you need more information to track the problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20476.php">Christian Krause: "Re: [OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="20474.php">Ralph Castain: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
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
