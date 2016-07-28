<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 18:35:05 2011" -->
<!-- isoreceived="20110912223505" -->
<!-- sent="Mon, 12 Sep 2011 16:35:01 -0600 (MDT)" -->
<!-- isosent="20110912223501" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem" -->
<!-- id="alpine.OSX.2.00.1109121622550.4026_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275E2E614D_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 18:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17239.php">Rob Stewart: "[OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 12 Sep 2011, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; It was set to 0 previously.  We've set it to 4 and restarted some service and now it works.  So both your and Samuel's suggestions worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On another system, slightly older, it was defaulted to 3 instead of 0, and apparently that explains why the job always ran before and on this newer system did not run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm wondering if there was any way for us to know that this change had happened.
</span><br>
<p>We stumbled across the change two weeks ago while setting up a new system. From what I understand the change had something to do with cache performance when using huge pages. Of course it breaks everything for those of us that aren't using huge pages. Though, to be fair, users *should* have been setting this parameter all along.
<br>
<p>-Nathan
<br>
Los Alamos National Laboratory
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17239.php">Rob Stewart: "[OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>In reply to:</strong> <a href="17237.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
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
