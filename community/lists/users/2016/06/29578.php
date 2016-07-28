<?
$subject_val = "Re: [OMPI users] Hang in MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 13:21:27 2016" -->
<!-- isoreceived="20160630172127" -->
<!-- sent="Thu, 30 Jun 2016 11:21:22 -0600" -->
<!-- isosent="20160630172122" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Abort" -->
<!-- id="57755512.10105_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="577549D8.3070702_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hang in MPI_Abort<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 13:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/30/2016 10:33 AM, Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; No, just mpiexec is running.  single node.  Only see it when the test is
</span><br>
<span class="quotelev1">&gt; executed with &quot;make check&quot;, not seeing it if I just run mpiexec -n 6
</span><br>
<span class="quotelev1">&gt; ./testphdf5 by hand.
</span><br>
<p><p>Hmm, now I'm seeing it running mpiexec by hand.  Trying to check it via gdb
<br>
indicates a corrupted stack:
<br>
<p><p>(gdb) bt
<br>
#0  0xb6cd8ac4 in poll () from /lib/libc.so.6
<br>
#1  0x00000000 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
<p>Any other tracing I can turn on?
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="29577.php">Orion Poplawski: "Re: [OMPI users] Hang in MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
<li><strong>Reply:</strong> <a href="29579.php">Ralph Castain: "Re: [OMPI users] Hang in MPI_Abort"</a>
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
