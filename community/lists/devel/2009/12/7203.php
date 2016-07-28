<?
$subject_val = "Re: [OMPI devel] [patch] Verifying the message queue DLL build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 09:37:33 2009" -->
<!-- isoreceived="20091208143733" -->
<!-- sent="Tue, 08 Dec 2009 09:36:29 -0500" -->
<!-- isosent="20091208143629" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Verifying the message queue DLL build" -->
<!-- id="4B1E646D.4090801_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1260277604.3379.140.camel_at_alpha" -->
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
<strong>Date:</strong> 2009-12-08 09:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7211.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7211.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Tue, 2009-12-08 at 07:39 -0500, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've seen several cases now where people have functional, installed MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries yet when they've come to use padb they have discovered a build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem with the Message Queue DLL which prevents it from working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; The cases I've seen this happen is with the Sun Studio compiler when a 
</span><br>
<span class="quotelev2">&gt;&gt; source file pulls in a header that defines an inline static function 
</span><br>
<span class="quotelev2">&gt;&gt; that uses some extern symbols but the inline static function itself is 
</span><br>
<span class="quotelev2">&gt;&gt; never used.  For some reason Sun Studio (I believe I've seen another 
</span><br>
<span class="quotelev2">&gt;&gt; compiler do this also pgi or pathscale I think) decides to make those 
</span><br>
<span class="quotelev2">&gt;&gt; extern symbols unresolved instead of just ignoring them.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That explains a couple of occurrences I've seen.  Another example is
</span><br>
<span class="quotelev1">&gt; Jeffs debug-handles branch where the code incorrectly called free
</span><br>
<span class="quotelev1">&gt; instead of mqs_free, unfortunately free is #defined to be opal_free
</span><br>
<span class="quotelev1">&gt; which then becomes an undefined symbol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The current trunk and 1.5 branch should have this issue extricated from 
</span><br>
<span class="quotelev2">&gt;&gt; it.  However, this seems to always creep in every so often.  So the 
</span><br>
<span class="quotelev2">&gt;&gt; below test is greatly appreciated.  Also, have you ran this test against 
</span><br>
<span class="quotelev2">&gt;&gt; the trunk and 1.5, yet (is my belief of things are clean there correct)?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've run it against a slightly stale version of the trunk which is as
</span><br>
<span class="quotelev1">&gt; you say clean currently.  I'm not sure where I'd get a 1.5 branch from
</span><br>
<span class="quotelev1">&gt; but if you point me to it I can test this as well.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
You can get it from the svn branch repo:
<br>
<a href="https://svn.open-mpi.org/svn/ompi/branches/v1.5">https://svn.open-mpi.org/svn/ompi/branches/v1.5</a>
<br>
You might as well also try 1.4 which should also be clean:
<br>
<a href="https://svn.open-mpi.org/svn/ompi/branches/v1.4">https://svn.open-mpi.org/svn/ompi/branches/v1.4</a>
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7204.php">George Bosilca: "Re: [OMPI devel] Question about ompi_proc_t"</a>
<li><strong>Previous message:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7202.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7211.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7211.php">Ashley Pittman: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
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
