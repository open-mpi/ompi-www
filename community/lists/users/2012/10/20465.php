<?
$subject_val = "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 03:58:59 2012" -->
<!-- isoreceived="20121011075859" -->
<!-- sent="Thu, 11 Oct 2012 09:51:46 +0200 (CEST)" -->
<!-- isosent="20121011075146" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380" -->
<!-- id="201210110751.q9B7pkuO025300_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 03:51:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20466.php">Siegmar Gross: "[OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20464.php">Biddiscombe, John A.: "[OMPI users] windows + threads"</a>
<li><strong>Maybe in reply to:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20475.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Reply:</strong> <a href="20475.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; I haven't tried heterogeneous apps on the Java code yet - could well not
</span><br>
<span class="quotelev1">&gt; work. At the least, I would expect you need to compile your Java app
</span><br>
<span class="quotelev1">&gt; against the corresponding OMPI install on each architecture, and ensure the
</span><br>
<span class="quotelev1">&gt; right one gets run on each node. Even though it's a Java app, the classes
</span><br>
<span class="quotelev1">&gt; need to get linked against the proper OMPI code for that node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for Linux-only operation: it works fine for me. Did you remember to (a)
</span><br>
<span class="quotelev1">&gt; build mpiexec on those linux machines (as opposed to using the Solaris
</span><br>
<span class="quotelev1">&gt; version), and (b) recompile your app against that OMPI installation?
</span><br>
<p>I didn't know that the classfiles are different, but it doesn't change
<br>
anything, if I create different classfiles. I use a small shell script
<br>
to create all neccessary files on all machines.
<br>
<p><p>tyr java 118 make_classfiles
<br>
=========== rs0 ===========
<br>
...
<br>
mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles MsgSendRecvMain.java
<br>
mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles ColumnSendRecvMain.java
<br>
mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles ColumnScatterMain.java
<br>
mpijavac -d /home/fd1026/SunOS/sparc/mpi_classfiles EnvironVarMain.java
<br>
=========== sunpc1 ===========
<br>
...
<br>
mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles MsgSendRecvMain.java
<br>
mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles ColumnSendRecvMain.java
<br>
mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles ColumnScatterMain.java
<br>
mpijavac -d /home/fd1026/SunOS/x86_64/mpi_classfiles EnvironVarMain.java
<br>
=========== linpc1 ===========
<br>
...
<br>
mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles MsgSendRecvMain.java
<br>
mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles ColumnSendRecvMain.java
<br>
mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles ColumnScatterMain.java
<br>
mpijavac -d /home/fd1026/Linux/x86_64/mpi_classfiles EnvironVarMain.java
<br>
<p><p>Every machine should now find its classfiles.
<br>
<p>tyr java 119 mpiexec -host sunpc0,linpc0,rs0 java EnvironVarMain
<br>
<p>Operating system: SunOS    Processor architecture: x86_64
<br>
&nbsp;&nbsp;CLASSPATH: ...:.:/home/fd1026/SunOS/x86_64/mpi_classfiles
<br>
<p>Operating system: Linux    Processor architecture: x86_64
<br>
&nbsp;&nbsp;CLASSPATH: ...:.:/home/fd1026/Linux/x86_64/mpi_classfiles
<br>
<p>Operating system: SunOS    Processor architecture: sparc
<br>
&nbsp;&nbsp;CLASSPATH: ...:.:/home/fd1026/SunOS/sparc/mpi_classfiles
<br>
<p><p><p>tyr java 120 mpiexec -host sunpc0,linpc0,rs0 java MsgSendRecvMain
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
...
<br>
<p><p><p>tyr java 121 mpiexec -host sunpc0,rs0 java MsgSendRecvMain
<br>
[rs0.informatik.hs-fulda.de:13671] *** An error occurred in MPI_Comm_dup
<br>
[rs0.informatik.hs-fulda.de:13671] *** reported by process [1077346305,1]
<br>
[rs0.informatik.hs-fulda.de:13671] *** on communicator MPI_COMM_WORLD
<br>
[rs0.informatik.hs-fulda.de:13671] *** MPI_ERR_INTERN: internal error
<br>
[rs0.informatik.hs-fulda.de:13671] *** MPI_ERRORS_ARE_FATAL (processes in this 
<br>
communicator will now abort,
<br>
[rs0.informatik.hs-fulda.de:13671] ***    and potentially your MPI job)
<br>
<p><p><p>I get an error even then, when I login on a Linux machine, before I
<br>
run the command.
<br>
<p>linpc0 fd1026 99 mpiexec -host linpc0,linpc1 java MsgSendRecvMain
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
...
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[linpc1:3004] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
...
<br>
<p><p>linpc0 fd1026 99 mpijavac -showme
<br>
/usr/local/jdk1.7.0_07-64/bin/javac -cp ... 
<br>
:.:/home/fd1026/Linux/x86_64/mpi_classfiles:/usr/local/openmpi-1.9_64_cc/lib64/
<br>
mpi.jar
<br>
<p><p>By the way I have the same classfiles for all architectures. Are you
<br>
sure that they should be different? I don't find any absolute path names
<br>
in the files, when I use &quot;strings&quot;.
<br>
<p>tyr java 133 diff ~/SunOS/sparc/mpi_classfiles/MsgSendRecvMain.class \
<br>
&nbsp;&nbsp;~/SunOS/x86_64/mpi_classfiles/MsgSendRecvMain.class 
<br>
tyr java 134 diff ~/SunOS/sparc/mpi_classfiles/MsgSendRecvMain.class \
<br>
&nbsp;~/Linux/x86_64/mpi_classfiles/MsgSendRecvMain.class
<br>
<p><p><p>Can I provide more information to track the problem on my Linux systems?
<br>
I think that I have to wait until you support a heterogeneous system, but
<br>
it would be nice, if Java applications would run on my different
<br>
homogeneous systems. The strange thing is that it works on my different
<br>
Solaris systems and not on Linux this time.
<br>
<p>Do you know if my problem with Datatype.Vector is a problem of Open
<br>
MPI as well (one of my other emails)? Do you use the extent of the base
<br>
type and not the extent of the derived data type, if I use a derived
<br>
data type in a scatter/gather operation or an operation with &quot;count&quot;
<br>
greater than one?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On Wed, Oct 10, 2012 at 5:42 AM, Siegmar Gross &lt;
</span><br>
<span class="quotelev1">&gt; Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have built openmpi-1.9a1r27380 with Java support and implemented
</span><br>
<span class="quotelev2">&gt; &gt; a small program that sends some kind of &quot;hello&quot; with Send/Recv.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 164 make
</span><br>
<span class="quotelev2">&gt; &gt; mpijavac -d /home/fd1026/mpi_classfiles MsgSendRecvMain.java
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Everything works fine, if I use Solaris 10 x86_84.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 165 mpiexec -np 3 -host sunpc0,sunpc1 \
</span><br>
<span class="quotelev2">&gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now 2 processes are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from process 2:
</span><br>
<span class="quotelev2">&gt; &gt;   message tag:    3
</span><br>
<span class="quotelev2">&gt; &gt;   message length: 6
</span><br>
<span class="quotelev2">&gt; &gt;   message:        sunpc1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from process 1:
</span><br>
<span class="quotelev2">&gt; &gt;   message tag:    3
</span><br>
<span class="quotelev2">&gt; &gt;   message length: 6
</span><br>
<span class="quotelev2">&gt; &gt;   message:        sunpc0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Everything works fine, if I use Solaris 10 Sparc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 166 mpiexec -np 3 -host rs0,rs1 \
</span><br>
<span class="quotelev2">&gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now 2 processes are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from process 2:
</span><br>
<span class="quotelev2">&gt; &gt;   message tag:    3
</span><br>
<span class="quotelev2">&gt; &gt;   message length: 26
</span><br>
<span class="quotelev2">&gt; &gt;   message:        rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings from process 1:
</span><br>
<span class="quotelev2">&gt; &gt;   message tag:    3
</span><br>
<span class="quotelev2">&gt; &gt;   message length: 26
</span><br>
<span class="quotelev2">&gt; &gt;   message:        rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The program breaks, if I use both systems.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 167 mpiexec -np 3 -host rs0,sunpc0 \
</span><br>
<span class="quotelev2">&gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** An error occurred in MPI_Comm_dup
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** reported by process [1976500225,0]
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:9621] *** MPI_ERRORS_ARE_FATAL (processes
</span><br>
<span class="quotelev2">&gt; &gt;    in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:9621] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:22491] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt; &gt;    help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt; &gt; [tyr.informatik.hs-fulda.de:22491] Set MCA parameter
</span><br>
<span class="quotelev2">&gt; &gt;   &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The program breaks, if I use Linux x86_64.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 168 mpiexec -np 3 -host linpc0,linpc1 \
</span><br>
<span class="quotelev2">&gt; &gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mca_base_open failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value -2 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt; &gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt; [linpc0:20277] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev2">&gt; &gt;   not able to aggregate error messages, and not able to guarantee that
</span><br>
<span class="quotelev2">&gt; &gt;   all other processes were killed!
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know if you need more information to track the problem.
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20466.php">Siegmar Gross: "[OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20464.php">Biddiscombe, John A.: "[OMPI users] windows + threads"</a>
<li><strong>Maybe in reply to:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20475.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Reply:</strong> <a href="20475.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
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
