<?
$subject_val = "Re: [OMPI devel] [patch] Verifying the message queue DLL build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 07:40:32 2009" -->
<!-- isoreceived="20091208124032" -->
<!-- sent="Tue, 08 Dec 2009 07:39:27 -0500" -->
<!-- isosent="20091208123927" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Verifying the message queue DLL build" -->
<!-- id="4B1E48FF.6000703_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 07:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; I've seen several cases now where people have functional, installed MPI
</span><br>
<span class="quotelev1">&gt; libraries yet when they've come to use padb they have discovered a build
</span><br>
<span class="quotelev1">&gt; problem with the Message Queue DLL which prevents it from working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The cases I've seen this happen is with the Sun Studio compiler when a 
<br>
source file pulls in a header that defines an inline static function 
<br>
that uses some extern symbols but the inline static function itself is 
<br>
never used.  For some reason Sun Studio (I believe I've seen another 
<br>
compiler do this also pgi or pathscale I think) decides to make those 
<br>
extern symbols unresolved instead of just ignoring them.
<br>
<p>The current trunk and 1.5 branch should have this issue extricated from 
<br>
it.  However, this seems to always creep in every so often.  So the 
<br>
below test is greatly appreciated.  Also, have you ran this test against 
<br>
the trunk and 1.5, yet (is my belief of things are clean there correct)?
<br>
<p>thanks,
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; The most common problem is unresolved symbols in the dll meaning the
</span><br>
<span class="quotelev1">&gt; debugger cannot dlopen it or in some cases can only dlopen it with
</span><br>
<span class="quotelev1">&gt; RTLD_LAZY which introduces other problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a patch to the OpenMPI sources which adds a simple test
</span><br>
<span class="quotelev1">&gt; program, to be built and run as part of the build procedure that
</span><br>
<span class="quotelev1">&gt; verifies the dll can be loaded without error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test program itself is good, I'm less happy about the autoconf
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7200.php">Ashley Pittman: "[OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
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
