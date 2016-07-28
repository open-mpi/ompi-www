<?
$subject_val = "Re: [OMPI devel] Integrating the memchecker branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 09:24:16 2008" -->
<!-- isoreceived="20080115142416" -->
<!-- sent="Tue, 15 Jan 2008 15:24:10 +0100" -->
<!-- isosent="20080115142410" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Integrating the memchecker branch" -->
<!-- id="200801151524.11155.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A216D84D-2C37-4CFA-BF52-B9ECBE1A14CD_at_cisco.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-15 09:24:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2979.php">Terry Dontje: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Reply:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
thanks for taking note.
<br>
<p>On Tuesday 15 January 2008 05:12, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I have not had a chance to check out the tmp branch for this (I'm
</span><br>
<span class="quotelev1">&gt; currently in an airport without network access), but it all sounds
</span><br>
<span class="quotelev1">&gt; good in principle to me.  Forgive me if I've said these things before,
</span><br>
<span class="quotelev1">&gt; but here's what I'd like to see if possible:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - configure output shows whether this stuff is enabled
</span><br>
<span class="quotelev1">&gt;    - e.g., does it check for the relevant macros in valgrind's header
</span><br>
<span class="quotelev1">&gt; files?  (I assume so; I've totally forgotten...)  Ensure that these
</span><br>
<span class="quotelev1">&gt; checks are output in configure's stdout
</span><br>
Both yes.
<br>
<p><span class="quotelev1">&gt; - ompi_info shows whether this stuff is enabled
</span><br>
It shows the memchecker-valgrind mca.
<br>
Apart from showing the mca, no (so no separate line for 
<br>
valgrind-kind-of-checking enabled).
<br>
<p>If it should, we can do that of course... But I don't think it's necessary.
<br>
<p><span class="quotelev1">&gt; - obvious user-level configure errors raise errors/abort configure
</span><br>
<span class="quotelev1">&gt; (E.g., --enable-memchecker is specified but --enable-debug is not), or
</span><br>
<span class="quotelev1">&gt; make some obvious assumptions about &quot;what the user meant&quot; (e.g., if --
</span><br>
<span class="quotelev1">&gt; enable-memchecker is specified by --enable-debug is not, then
</span><br>
<span class="quotelev1">&gt; automatically enable --enable-debug and output a message saying so).
</span><br>
Currently not done.
<br>
It is not really a requirement, though! (although it does not make much sense 
<br>
without).
<br>
<p><span class="quotelev1">&gt; - I think we've said ad nauseam that there should be zero performance
</span><br>
<span class="quotelev1">&gt; penalty for when this stuff is not enabled, and I'm guessing that this
</span><br>
<span class="quotelev1">&gt; is still true.  :-)
</span><br>
100% ,-]
<br>
No code added in the default case.
<br>
<p><span class="quotelev1">&gt; - some kind of documentation should be written up about how to use
</span><br>
<span class="quotelev1">&gt; this stuff, perhaps in the FAQ (e.g., pairing it with a valgrind-
</span><br>
<span class="quotelev1">&gt; enabled libibverbs for max benefit, etc.).
</span><br>
Yep.
<br>
Will prepare a text, do You need it in HTML, or plain-text?
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2979.php">Terry Dontje: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Reply:</strong> <a href="2994.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
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
