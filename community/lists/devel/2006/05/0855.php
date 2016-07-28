<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May  7 14:54:27 2006" -->
<!-- isoreceived="20060507185427" -->
<!-- sent="Sun, 7 May 2006 20:53:56 +0200" -->
<!-- isosent="20060507185356" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] small configure nits" -->
<!-- id="20060507185355.GB8619_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DCC493A2-B8AE-48E9-9F46-23D7042480A5_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-07 14:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<li><strong>In reply to:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>* Brian Barrett wrote on Sun, May 07, 2006 at 08:38:35PM CEST:
<br>
<span class="quotelev1">&gt; On May 6, 2006, at 6:29 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A very minor nit in OpenMPI, concerning autotools: I think it's
</span><br>
<span class="quotelev2">&gt; &gt; better to specify the arguments to AC_CONFIG_AUX_DIR and _MACRO_DIR
</span><br>
<span class="quotelev2">&gt; &gt; without leading &quot;./&quot;, since if those name end up in Makefile targets,
</span><br>
<span class="quotelev2">&gt; &gt; BSD make won't have problems with VPATH lookup.  (Maybe this should be
</span><br>
<span class="quotelev2">&gt; &gt; noted in the Autoconf documentation.)
</span><br>
<span class="quotelev1">&gt; Probably means this was a problem in some ancient version of our  
</span><br>
<span class="quotelev1">&gt; environment and it never got changed.  It looks reasonable, so I'll  
</span><br>
<span class="quotelev1">&gt; make it so.  Which platforms will barf with the './config'?  Trying  
</span><br>
<span class="quotelev1">&gt; to figure out which branches this needs to be committed to...
</span><br>
<p>None will barf, but some variants of BSD make may have issues with VPATH
<br>
(source tree != build tree) builds.  I'm being intentionally vague here
<br>
as I haven't encountered issues with OpenMPI yet.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<li><strong>In reply to:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
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
