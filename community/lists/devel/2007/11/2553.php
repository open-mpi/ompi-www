<?
$subject_val = "Re: [OMPI devel] Environment forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:36:08 2007" -->
<!-- isoreceived="20071105223608" -->
<!-- sent="Mon, 5 Nov 2007 15:33:01 -0700" -->
<!-- isosent="20071105223301" -->
<!-- name="Ron Brightwell" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Environment forwarding" -->
<!-- id="20071105223301.GG6711_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0711051655300.4842_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Ron Brightwell (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; This is extremely tricky to do.  How do you know which environment 
</span><br>
<span class="quotelev1">&gt; variables to forward (foo in this case) and which not to (hostname). 
</span><br>
<span class="quotelev1">&gt; SLURM has a better chance, since it's linux only and generally only run on 
</span><br>
<span class="quotelev1">&gt; tightly controlled clusters.  But there's a whole variety of things that 
</span><br>
<span class="quotelev1">&gt; shouldn't be forwarded and that list differs from OS to OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe we toyed around with the &quot;right thing&quot; in LAM and early on with 
</span><br>
<span class="quotelev1">&gt; OPen MPI and decided that it was too hard to meet expected behavior.
</span><br>
<p>It's an easy decision for Catamount, so the whole user environment gets sent
<br>
out to the compute nodes.
<br>
<p>Anybody care to guess how big that can be when a (goofball) user invokes
<br>
job launch from within a Makefile?
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
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
