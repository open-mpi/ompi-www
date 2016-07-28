<?
$subject_val = "Re: [OMPI users] Open MPI on Cray XE6 / Gemini";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 10:59:09 2012" -->
<!-- isoreceived="20121010145909" -->
<!-- sent="Wed, 10 Oct 2012 08:59:04 -0600" -->
<!-- isosent="20121010145904" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Cray XE6 / Gemini" -->
<!-- id="20121010145904.GA14407_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210101450.59904.niethammer_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI on Cray XE6 / Gemini<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 10:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20457.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20455.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20457.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20457.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 10, 2012 at 02:50:59PM +0200, Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just tried to use Open MPI 1.7a1r27416 on a Cray XE6 system. Unfortunately I 
</span><br>
<span class="quotelev1">&gt; get the following error when I run a simple HelloWorldMPI program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ pirun HelloWorldMPI
</span><br>
<span class="quotelev1">&gt; App launch reported: 2 (out of 2) daemons - 0 (out of 32) procs
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [unset]:_pmi_alps_get_appLayout:pmi_alps_get_apid returned with error: Bad 
</span><br>
<span class="quotelev1">&gt; file descriptor
</span><br>
<p>There is a bug in Cray's PMI-3 which causes this error message. Change the platform file to point at PMI 2.1.4. I was hoping Cray would fix the bug before 1.7.0. Since that doesn't appear to be the case I will push updated platform files that use PMI 2.1.4 instead of the default.
<br>
<p><span class="quotelev1">&gt; [nid01766:20603] mca_oob_tcp_init: unable to create IPv4 listen socket: Unable 
</span><br>
<span class="quotelev1">&gt; to open a TCP socket for out-of-band communications
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>Never seen this error before. What PE release is installed?
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20457.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20455.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>In reply to:</strong> <a href="20448.php">Christoph Niethammer: "[OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20457.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Reply:</strong> <a href="20457.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
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
