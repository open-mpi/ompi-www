<?
$subject_val = "Re: [OMPI devel] Checkpoint/restart + migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 06:49:29 2015" -->
<!-- isoreceived="20151022104929" -->
<!-- sent="Thu, 22 Oct 2015 12:49:25 +0200" -->
<!-- isosent="20151022104925" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Checkpoint/restart + migration" -->
<!-- id="20151022104925.GR25654_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAP1=D+yObBLd_o=ZfjWKVFf4Z=R-3S0bYM6oR4r+bVBmw6NU8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Checkpoint/restart + migration<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 06:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18240.php">Gianmario Pozzi: "[OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18240.php">Gianmario Pozzi: "[OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 22, 2015 at 12:15:22PM +0200, Gianmario Pozzi wrote:
<br>
<span class="quotelev1">&gt; My team and I are working on the possibility to checkpoint a process and
</span><br>
<span class="quotelev1">&gt; restarting it on another node. We are using CRIU framework for the
</span><br>
<span class="quotelev1">&gt; checkpoint/restart part, but we are facing some issues related to migration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First of all: we found out that some attempts to C/R an OMPI process have
</span><br>
<span class="quotelev1">&gt; been already made in the past. Is anything related to that still
</span><br>
<span class="quotelev1">&gt; supported/available/working?
</span><br>
<p>I was working on the CRIU &lt;-&gt; OpenMPI integration during 2013/2014. The
<br>
code is still available at:
<br>
<p><a href="https://github.com/open-mpi/ompi/tree/master/opal/mca/crs/criu">https://github.com/open-mpi/ompi/tree/master/opal/mca/crs/criu</a>
<br>
<p>I was able to checkpoint and restart a process under OpenMPI's control:
<br>
<p><a href="http://lisas.de/~adrian/?p=926">http://lisas.de/~adrian/?p=926</a>
<br>
<p><span class="quotelev1">&gt;From what I have heard/read OpenMPI has probably had enough internal
</span><br>
changes that the Fault Tolerance framework is currently no longer
<br>
working which is needed to use the checkpoint/restart functionality.
<br>
<p>In addition, CRIU has also changed a bit. I used the criu service daemon
<br>
to start the checkpoint. This service daemon no longer exists due to
<br>
security concerns:
<br>
<p><a href="https://lwn.net/Articles/658070/">https://lwn.net/Articles/658070/</a>
<br>
<p>So you either need to call the criu binary directly or you can use 'criu
<br>
swrk'.
<br>
<p>Restore should be easier as criu now supports the option --inherit-fd
<br>
which should help to correctly re-route stdin/stdout/stderr.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>Previous message:</strong> <a href="18240.php">Gianmario Pozzi: "[OMPI devel] Checkpoint/restart + migration"</a>
<li><strong>In reply to:</strong> <a href="18240.php">Gianmario Pozzi: "[OMPI devel] Checkpoint/restart + migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18242.php">Gilles Gouaillardet: "Re: [OMPI devel] Checkpoint/restart + migration"</a>
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
