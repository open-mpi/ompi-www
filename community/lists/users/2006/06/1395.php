<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 12 10:58:03 2006" -->
<!-- isoreceived="20060612145803" -->
<!-- sent="Mon, 12 Jun 2006 08:58:01 -0600" -->
<!-- isosent="20060612145801" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why does openMPI abort processes?" -->
<!-- id="1150124281.7332.10.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="20060611112653.15816.qmail_at_web37503.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-12 10:58:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1396.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Previous message:</strong> <a href="1394.php">Jens Klostermann: "[OMPI users] Why does it suddenly not run?"</a>
<li><strong>In reply to:</strong> <a href="1390.php">imran shaik: "[OMPI users] Why does openMPI abort processes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1396.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Reply:</strong> <a href="1396.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Reply:</strong> <a href="1397.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2006-06-11 at 04:26 -0700, imran shaik wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I some times get this error message.
</span><br>
<span class="quotelev1">&gt; &quot; 2 addtional processes aborted, possibly by openMPI&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Some times 2 processes, sometimes even more. Is it due to over load or
</span><br>
<span class="quotelev1">&gt; program error?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Why does openMPI actually abort few processes?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can anyone explain?
</span><br>
<p>Generally, this is because multiple processes in your job aborted
<br>
(exited with a signal or before MPI_FINALIZE) and mpirun only prints the
<br>
first abort message.  You can modify how many abort status messages you
<br>
want to receive with the -aborted X option to mpirun, where X is the
<br>
number of process abort messages you want to see.  The message generally
<br>
includes some information on what happened to your process.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1396.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Previous message:</strong> <a href="1394.php">Jens Klostermann: "[OMPI users] Why does it suddenly not run?"</a>
<li><strong>In reply to:</strong> <a href="1390.php">imran shaik: "[OMPI users] Why does openMPI abort processes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1396.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Reply:</strong> <a href="1396.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Reply:</strong> <a href="1397.php">imran shaik: "Re: [OMPI users] Why does openMPI abort processes?"</a>
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
