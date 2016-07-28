<?
$subject_val = "[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 08:49:52 2012" -->
<!-- isoreceived="20121010124952" -->
<!-- sent="Wed, 10 Oct 2012 14:42:52 +0200 (CEST)" -->
<!-- isosent="20121010124252" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] internal error with mpiJava in openmpi-1.9a1r27380" -->
<!-- id="201210101243.q9ACgpdn022515_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 08:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20446.php">Siegmar Gross: "[OMPI users] Datatype.Vector in mpijava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20451.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Reply:</strong> <a href="20451.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Maybe reply:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-1.9a1r27380 with Java support and implemented
<br>
a small program that sends some kind of &quot;hello&quot; with Send/Recv.
<br>
<p>tyr java 164 make 
<br>
mpijavac -d /home/fd1026/mpi_classfiles MsgSendRecvMain.java
<br>
...
<br>
<p>Everything works fine, if I use Solaris 10 x86_84.
<br>
<p>tyr java 165 mpiexec -np 3 -host sunpc0,sunpc1 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles MsgSendRecvMain
<br>
<p>Now 2 processes are sending greetings.
<br>
<p>Greetings from process 2:
<br>
&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;message length: 6
<br>
&nbsp;&nbsp;message:        sunpc1
<br>
<p>Greetings from process 1:
<br>
&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;message length: 6
<br>
&nbsp;&nbsp;message:        sunpc0
<br>
<p><p>Everything works fine, if I use Solaris 10 Sparc.
<br>
<p>tyr java 166 mpiexec -np 3 -host rs0,rs1 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles MsgSendRecvMain
<br>
<p>Now 2 processes are sending greetings.
<br>
<p>Greetings from process 2:
<br>
&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;message length: 26
<br>
&nbsp;&nbsp;message:        rs1.informatik.hs-fulda.de
<br>
<p>Greetings from process 1:
<br>
&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;message length: 26
<br>
&nbsp;&nbsp;message:        rs0.informatik.hs-fulda.de
<br>
<p><p>The program breaks, if I use both systems.
<br>
<p>tyr java 167 mpiexec -np 3 -host rs0,sunpc0 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles MsgSendRecvMain
<br>
[rs0.informatik.hs-fulda.de:9621] *** An error occurred in MPI_Comm_dup
<br>
[rs0.informatik.hs-fulda.de:9621] *** reported by process [1976500225,0]
<br>
[rs0.informatik.hs-fulda.de:9621] *** on communicator MPI_COMM_WORLD
<br>
[rs0.informatik.hs-fulda.de:9621] *** MPI_ERR_INTERN: internal error
<br>
[rs0.informatik.hs-fulda.de:9621] *** MPI_ERRORS_ARE_FATAL (processes
<br>
&nbsp;&nbsp;&nbsp;in this communicator will now abort,
<br>
[rs0.informatik.hs-fulda.de:9621] ***    and potentially your MPI job)
<br>
[tyr.informatik.hs-fulda.de:22491] 1 more process has sent help message
<br>
&nbsp;&nbsp;&nbsp;help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[tyr.informatik.hs-fulda.de:22491] Set MCA parameter
<br>
&nbsp;&nbsp;&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p><p>The program breaks, if I use Linux x86_64.
<br>
<p>tyr java 168 mpiexec -np 3 -host linpc0,linpc1 \
<br>
&nbsp;&nbsp;java -cp $HOME/mpi_classfiles MsgSendRecvMain
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
<p>*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[linpc0:20277] Local abort before MPI_INIT completed successfully;
<br>
&nbsp;&nbsp;not able to aggregate error messages, and not able to guarantee that
<br>
&nbsp;&nbsp;all other processes were killed!
<br>
...
<br>
<p><p>Please let me know if you need more information to track the problem.
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
<li><strong>Next message:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20446.php">Siegmar Gross: "[OMPI users] Datatype.Vector in mpijava in openmpi-1.9a1r27380"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20451.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Reply:</strong> <a href="20451.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Maybe reply:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
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
