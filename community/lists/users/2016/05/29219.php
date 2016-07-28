<?
$subject_val = "[OMPI users]  ORTE has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:28:34 2016" -->
<!-- isoreceived="20160516152834" -->
<!-- sent="Tue, 17 May 2016 00:28:33 +0900" -->
<!-- isosent="20160516152833" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI users]  ORTE has lost communication" -->
<!-- id="CAAkFZ5uz0Nohk9o7aSk3+zuKWdN0LcuENjZ2rDioizbAJCTpBA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJfyiouM6F2dkeJYqt4VtwTMhSSLs23gacR9XY-yBPv2wy+-Vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users]  ORTE has lost communication<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What do you mean by fault tolerant application ?
<br>
from an OpenMPI point of view, if such a connection is lost, your
<br>
application will no more be able to communicate, so killing it is the best
<br>
option.
<br>
if your application has built in checkpoint/restart, then you have to
<br>
restart it with mpirun after the first mpirun aborts and your environment
<br>
is fixed.
<br>
or your batch manager should restart/resubmit the job, possibly on a
<br>
different set of nodes.
<br>
<p>makes sense ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, May 16, 2016, Zabiziz Zaz &lt;zabiziz_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','zabiziz_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm using openmpi-1.10.2 and sometimes I'm receiving the message below:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE has lost communication with its daemon located on node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   hostname:  xxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is usually due to either a failure of the TCP network
</span><br>
<span class="quotelev1">&gt; connection to the node, or possibly an internal failure of
</span><br>
<span class="quotelev1">&gt; the daemon itself. We cannot recover from this failure, and
</span><br>
<span class="quotelev1">&gt; therefore will terminate the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My applications are fault tolerant and the jobs usually takes weeks to
</span><br>
<span class="quotelev1">&gt; finish. Sometimes a hardware problem occurs with one node, for example, the
</span><br>
<span class="quotelev1">&gt; node shutdown. I don't want mpi to terminate the job, my jobs usually have
</span><br>
<span class="quotelev1">&gt; hundreds of nodes and I don't care if 1 node lost communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's possible to change this behavior of openmpi? I tried to
</span><br>
<span class="quotelev1">&gt; set orte_abort_on_non_zero_status to 0 but it didn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Guilherme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Reply:</strong> <a href="29221.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
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
