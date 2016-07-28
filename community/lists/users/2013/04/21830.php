<?
$subject_val = "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 10:50:12 2013" -->
<!-- isoreceived="20130430145012" -->
<!-- sent="Tue, 30 Apr 2013 15:48:24 +0100" -->
<!-- isosent="20130430144824" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1" -->
<!-- id="87r4hsrs5j.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANUQSWBBPDbZvJ+8iWGyPCh_5j5LLRXJGzm1iUKNBaD-GZUtHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 10:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Padma Pavani &lt;gpadmapavani_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am facing some problem while running HPL benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Intel mpi -4.0.1 with Qlogic-OFED-1.5.4.1  to run benchmark and
</span><br>
<span class="quotelev1">&gt; also tried with openmpi-1.4.0 but getting same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error File :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06936] [[14544,1],25] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is unknown in
</span><br>
<span class="quotelev1">&gt; file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:06936] [[14544,1],25] could not get route to
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<p>I'm not sure, but that looks like what I think you get from not running
<br>
the binary under mpirun.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21795.php">Padma Pavani: "[OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
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
