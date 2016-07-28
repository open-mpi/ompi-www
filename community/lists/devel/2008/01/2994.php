<?
$subject_val = "Re: [OMPI devel] Integrating the memchecker branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 10:53:17 2008" -->
<!-- isoreceived="20080117155317" -->
<!-- sent="Thu, 17 Jan 2008 09:52:52 -0600" -->
<!-- isosent="20080117155252" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Integrating the memchecker branch" -->
<!-- id="B60EBC05-AC7D-4408-8711-5AB40F8714E9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200801151524.11155.keller_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Integrating the memchecker branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-17 10:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2995.php">Don Kerr: "[OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 15, 2008, at 8:24 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - ompi_info shows whether this stuff is enabled
</span><br>
<span class="quotelev1">&gt; It shows the memchecker-valgrind mca.
</span><br>
<span class="quotelev1">&gt; Apart from showing the mca, no (so no separate line for
</span><br>
<span class="quotelev1">&gt; valgrind-kind-of-checking enabled).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it should, we can do that of course... But I don't think it's  
</span><br>
<span class="quotelev1">&gt; necessary.
</span><br>
<p>Mmm -- good point.  I forgot that this is a new framework.  So, I  
<br>
agree: if there's already a line in the ompi_info output about  
<br>
memchecker support (through the listing of a component), then nothing  
<br>
else is necessary.
<br>
<p><span class="quotelev2">&gt;&gt; - obvious user-level configure errors raise errors/abort configure
</span><br>
<span class="quotelev2">&gt;&gt; (E.g., --enable-memchecker is specified but --enable-debug is not),  
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; make some obvious assumptions about &quot;what the user meant&quot; (e.g., if  
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; enable-memchecker is specified by --enable-debug is not, then
</span><br>
<span class="quotelev2">&gt;&gt; automatically enable --enable-debug and output a message saying so).
</span><br>
<span class="quotelev1">&gt; Currently not done.
</span><br>
<span class="quotelev1">&gt; It is not really a requirement, though! (although it does not make  
</span><br>
<span class="quotelev1">&gt; much sense
</span><br>
<span class="quotelev1">&gt; without).
</span><br>
<p>I doubt that this has ever been mentioned before.  It should be pretty  
<br>
easy to do, though.  It might be nice to spend the 15 minutes doing it  
<br>
so that it doesn't get forgotten (says the guy who hasn't spent 15  
<br>
minutes on it :-) ).
<br>
<p><span class="quotelev2">&gt;&gt; - I think we've said ad nauseam that there should be zero performance
</span><br>
<span class="quotelev2">&gt;&gt; penalty for when this stuff is not enabled, and I'm guessing that  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; is still true.  :-)
</span><br>
<span class="quotelev1">&gt; 100% ,-]
</span><br>
<span class="quotelev1">&gt; No code added in the default case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - some kind of documentation should be written up about how to use
</span><br>
<span class="quotelev2">&gt;&gt; this stuff, perhaps in the FAQ (e.g., pairing it with a valgrind-
</span><br>
<span class="quotelev2">&gt;&gt; enabled libibverbs for max benefit, etc.).
</span><br>
<span class="quotelev1">&gt; Yep.
</span><br>
<span class="quotelev1">&gt; Will prepare a text, do You need it in HTML, or plain-text?
</span><br>
<p><p>If you have the cycles, writing it up in the FAQ format would be  
<br>
great.  We use a mini-wiki format for common stuff in the FAQ.
<br>
<p>I just added a wiki page about it:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries">https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2995.php">Don Kerr: "[OMPI devel] open ib btl and xrc"</a>
<li><strong>Previous message:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>In reply to:</strong> <a href="2980.php">Rainer Keller: "Re: [OMPI devel] Integrating the memchecker branch"</a>
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
