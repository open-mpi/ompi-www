<?
$subject_val = "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 11:10:05 2014" -->
<!-- isoreceived="20141104161005" -->
<!-- sent="Tue, 04 Nov 2014 16:06:58 +0000" -->
<!-- isosent="20141104160658" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change in behaviour 1.6 -&amp;gt; 1.8 under sge" -->
<!-- id="87y4rrrlul.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F1FD048D-C1E8-42E4-A17A-D0BE5140F352_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 11:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25667.php">Michael Di Domenico: "[OMPI users] ipath_userinit errors"</a>
<li><strong>Previous message:</strong> <a href="25665.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>In reply to:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25671.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; If you only have one allocated PE on a node, then mpirun will
</span><br>
<span class="quotelev1">&gt; correctly tell you that it can&#226;&#128;&#153;t launch with PE&gt;1 as there aren&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; enough resources to meet your request. IIRC, we may have been ignoring
</span><br>
<span class="quotelev1">&gt; this under SGE and running as many procs as we wanted on an allocated
</span><br>
<span class="quotelev1">&gt; node - the SGE folks provided a patch to fix that hole.
</span><br>
<p>I don't know what that refers to, but for what it's worth, there's no
<br>
problem I know of with OMPI failing to fail if you try to over-subscribe
<br>
under SGE (at least since v1.3).  (Without the --np in my example, it
<br>
will fail.)
<br>
<p>-- SGE folk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25667.php">Michael Di Domenico: "[OMPI users] ipath_userinit errors"</a>
<li><strong>Previous message:</strong> <a href="25665.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>In reply to:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25671.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
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
