<?
$subject_val = "Re: [OMPI devel] [patch] Verifying the message queue DLL build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 14:37:02 2009" -->
<!-- isoreceived="20091211193702" -->
<!-- sent="Fri, 11 Dec 2009 14:36:57 -0500" -->
<!-- isosent="20091211193657" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Verifying the message queue DLL build" -->
<!-- id="4E4C921E-DD5B-49DB-A30F-DC1F31280D98_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1260273314.3379.131.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] Verifying the message queue DLL build<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-11 14:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7224.php">Daan van Rossum: "[OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Previous message:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2009, at 6:55 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; Attached is a patch to the OpenMPI sources which adds a simple test
</span><br>
<span class="quotelev1">&gt; program, to be built and run as part of the build procedure that
</span><br>
<span class="quotelev1">&gt; verifies the dll can be loaded without error.
</span><br>
<p>Looks good.
<br>
<p><span class="quotelev1">&gt; The test program itself is good, I'm less happy about the autoconf
</span><br>
<span class="quotelev1">&gt; integration, it adds a check-local target in the debuggers makefile (the
</span><br>
<span class="quotelev1">&gt; only one in the source tree) which fails if there is a problem with the
</span><br>
<span class="quotelev1">&gt; DLL, this causes &quot;make check&quot; to fail however this isn't run by either
</span><br>
<span class="quotelev1">&gt; &quot;make&quot; or &quot;make install&quot;.  As such it's a step forward but it would be
</span><br>
<span class="quotelev1">&gt; better if the test was performed in the make stage, I haven't figured
</span><br>
<span class="quotelev1">&gt; out how to do this however.
</span><br>
<p>We actually run &quot;make distcheck&quot; to make the nightly snapshot tarballs and official test release tarballs (which runs &quot;make check&quot;).  So we'll be covered.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7224.php">Daan van Rossum: "[OMPI devel] SEGFAULT in mpi_init from paffinity with intel 11.1.059 compiler"</a>
<li><strong>Previous message:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
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
