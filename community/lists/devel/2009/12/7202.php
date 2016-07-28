<?
$subject_val = "Re: [OMPI devel] [patch] Verifying the message queue DLL build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 08:06:52 2009" -->
<!-- isoreceived="20091208130652" -->
<!-- sent="Tue, 08 Dec 2009 13:06:44 +0000" -->
<!-- isosent="20091208130644" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Verifying the message queue DLL build" -->
<!-- id="1260277604.3379.140.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1E48FF.6000703_at_sun.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 08:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-12-08 at 07:39 -0500, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I've seen several cases now where people have functional, installed MPI
</span><br>
<span class="quotelev2">&gt; &gt; libraries yet when they've come to use padb they have discovered a build
</span><br>
<span class="quotelev2">&gt; &gt; problem with the Message Queue DLL which prevents it from working.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; The cases I've seen this happen is with the Sun Studio compiler when a 
</span><br>
<span class="quotelev1">&gt; source file pulls in a header that defines an inline static function 
</span><br>
<span class="quotelev1">&gt; that uses some extern symbols but the inline static function itself is 
</span><br>
<span class="quotelev1">&gt; never used.  For some reason Sun Studio (I believe I've seen another 
</span><br>
<span class="quotelev1">&gt; compiler do this also pgi or pathscale I think) decides to make those 
</span><br>
<span class="quotelev1">&gt; extern symbols unresolved instead of just ignoring them.
</span><br>
<p>That explains a couple of occurrences I've seen.  Another example is
<br>
Jeffs debug-handles branch where the code incorrectly called free
<br>
instead of mqs_free, unfortunately free is #defined to be opal_free
<br>
which then becomes an undefined symbol.
<br>
<p><span class="quotelev1">&gt; The current trunk and 1.5 branch should have this issue extricated from 
</span><br>
<span class="quotelev1">&gt; it.  However, this seems to always creep in every so often.  So the 
</span><br>
<span class="quotelev1">&gt; below test is greatly appreciated.  Also, have you ran this test against 
</span><br>
<span class="quotelev1">&gt; the trunk and 1.5, yet (is my belief of things are clean there correct)?
</span><br>
<p>I've run it against a slightly stale version of the trunk which is as
<br>
you say clean currently.  I'm not sure where I'd get a 1.5 branch from
<br>
but if you point me to it I can test this as well.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>In reply to:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
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
