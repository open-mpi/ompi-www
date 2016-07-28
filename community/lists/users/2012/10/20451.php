<?
$subject_val = "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 10:37:23 2012" -->
<!-- isoreceived="20121010143723" -->
<!-- sent="Wed, 10 Oct 2012 07:37:18 -0700" -->
<!-- isosent="20121010143718" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380" -->
<!-- id="CAMD57odg0D9KNf0pMr4DX6FrUfOA1nN9Ydj=_RrpQMbP3GPzNQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201210101243.q9ACgpdn022515_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2012-10-10 10:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20452.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't tried heterogeneous apps on the Java code yet - could well not
<br>
work. At the least, I would expect you need to compile your Java app
<br>
against the corresponding OMPI install on each architecture, and ensure the
<br>
right one gets run on each node. Even though it's a Java app, the classes
<br>
need to get linked against the proper OMPI code for that node.
<br>
<p>As for Linux-only operation: it works fine for me. Did you remember to (a)
<br>
build mpiexec on those linux machines (as opposed to using the Solaris
<br>
version), and (b) recompile your app against that OMPI installation?
<br>
<p><p><p>On Wed, Oct 10, 2012 at 5:42 AM, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built openmpi-1.9a1r27380 with Java support and implemented
</span><br>
<span class="quotelev1">&gt; a small program that sends some kind of &quot;hello&quot; with Send/Recv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 164 make
</span><br>
<span class="quotelev1">&gt; mpijavac -d /home/fd1026/mpi_classfiles MsgSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything works fine, if I use Solaris 10 x86_84.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 165 mpiexec -np 3 -host sunpc0,sunpc1 \
</span><br>
<span class="quotelev1">&gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 2 processes are sending greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 2:
</span><br>
<span class="quotelev1">&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;   message length: 6
</span><br>
<span class="quotelev1">&gt;   message:        sunpc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;   message length: 6
</span><br>
<span class="quotelev1">&gt;   message:        sunpc0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything works fine, if I use Solaris 10 Sparc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 166 mpiexec -np 3 -host rs0,rs1 \
</span><br>
<span class="quotelev1">&gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 2 processes are sending greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 2:
</span><br>
<span class="quotelev1">&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;   message length: 26
</span><br>
<span class="quotelev1">&gt;   message:        rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;   message tag:    3
</span><br>
<span class="quotelev1">&gt;   message length: 26
</span><br>
<span class="quotelev1">&gt;   message:        rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program breaks, if I use both systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 167 mpiexec -np 3 -host rs0,sunpc0 \
</span><br>
<span class="quotelev1">&gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:9621] *** An error occurred in MPI_Comm_dup
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:9621] *** reported by process [1976500225,0]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:9621] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:9621] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:9621] *** MPI_ERRORS_ARE_FATAL (processes
</span><br>
<span class="quotelev1">&gt;    in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:9621] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:22491] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt;    help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:22491] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;   &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program breaks, if I use Linux x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 168 mpiexec -np 3 -host linpc0,linpc1 \
</span><br>
<span class="quotelev1">&gt;   java -cp $HOME/mpi_classfiles MsgSendRecvMain
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
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [linpc0:20277] Local abort before MPI_INIT completed successfully;
</span><br>
<span class="quotelev1">&gt;   not able to aggregate error messages, and not able to guarantee that
</span><br>
<span class="quotelev1">&gt;   all other processes were killed!
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you need more information to track the problem.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20452.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20447.php">Siegmar Gross: "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
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
