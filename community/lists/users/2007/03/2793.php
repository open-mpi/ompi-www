<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 13 11:05:24 2007" -->
<!-- isoreceived="20070313150524" -->
<!-- sent="Tue, 13 Mar 2007 16:04:18 +0100" -->
<!-- isosent="20070313150418" -->
<!-- name="Olesen, Mark" -->
<!-- email="Mark.Olesen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal handling (part 2)" -->
<!-- id="0DDE7F776936B04AA670C77F1F59A4D9018101CD_at_deaex001.arvinmeritor.com" -->
<!-- inreplyto="[OMPI users] signal handling (part 2)" -->
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
<strong>From:</strong> Olesen, Mark (<em>Mark.Olesen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-13 11:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Previous message:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="2790.php">Reuti: "Re: [OMPI users] signal handling (part 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti (and others),
<br>
<p><span class="quotelev1">&gt; And now the odd thing: the jobscript (with the mpirun) is gone on the
</span><br>
<span class="quotelev1">&gt; head node of this parallel job, but all the spawned qrsh processes
</span><br>
<span class="quotelev1">&gt; are still there:
</span><br>
<p>I'm glad that someone else can almost reproduce my problem.
<br>
On the suspicion that my application was not ignoring usr1/usr2, I added a
<br>
signal handler that simply outputs &quot;ignoring SIGUSR*&quot;. The shell script now
<br>
has
<br>
<p>trap 'echo script usr1' USR1
<br>
trap 'echo script usr2' USR2
<br>
<p><span class="quotelev1">&gt; So in the SGE case: usr1 should be caught by the mpirun (and not
</span><br>
<span class="quotelev1">&gt; terminate it), which will notify the daemons to stop each ones child
</span><br>
<span class="quotelev1">&gt; processes. This would simulate a real suspend, performed by OpenMPI.
</span><br>
<p>Using qmod -sj to suspend the job (sending the usr1 warning signal), I have
<br>
the same behaviour as before. Interestingly enough, I get two messages:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun: Forwarding signal 10 to job
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The daemon received a signal 10.
<br>
<p>After these messages, only the sge-shepherd and mpirun are alive - the job
<br>
and qrsh processes are gone. Some time later, the following message also
<br>
appears:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun: Forwarding signal 12 to job
<br>
<p>after which, no processes are left, *except* the mpirun, which I need to
<br>
kill by hand.
<br>
<p>In case the configuration is a factor, the cluster machines are running with
<br>
a stock SuSE 9.2 (Linux 2.6.8-24-smp and/or 2.6.8-24.16-smp).
<br>
<p>The openmpi configuration:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=$OPENMPI_ARCH_PATH \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-f77 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-f90 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-profile \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-cxx
<br>
<p>/mark
<br>
<p>This e-mail message and any attachments may contain legally privileged, confidential or proprietary Information, or information otherwise protected by law of ArvinMeritor, Inc., its affiliates, or third parties. This notice serves as marking of its &#147;Confidential&#148; status as defined in any confidentiality agreements concerning the sender and recipient. If you are not the intended recipient(s), or the employee or agent responsible for delivery of this message to the intended recipient(s), you are hereby notified that any dissemination, distribution or copying of this e-mail message is strictly prohibited. If you have received this message in error, please immediately notify the sender and delete this e-mail message from your computer.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2794.php">David Minor: "Re: [OMPI users] Orted freezes on launch of application"</a>
<li><strong>Previous message:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="2790.php">Reuti: "Re: [OMPI users] signal handling (part 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2774.php">Pak Lui: "Re: [OMPI users] signal handling"</a>
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
