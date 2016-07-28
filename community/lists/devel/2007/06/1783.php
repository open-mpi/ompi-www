<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 28 02:27:06 2007" -->
<!-- isoreceived="20070628062706" -->
<!-- sent="Thu, 28 Jun 2007 08:26:45 +0200" -->
<!-- isosent="20070628062645" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="9CB6144B-BF9F-4612-8037-E00495B197AC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="468271E7.8060301_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-28 02:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1784.php">Georg Wassen: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome; ditto.
<br>
<p>On Jun 27, 2007, at 4:19 PM, Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Cool this sounds good enough to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; THe function name changes are pretty obvious (s/mca_pml_base/ompi/),
</span><br>
<span class="quotelev2">&gt;&gt; and I thought I'd try something new and actually document the
</span><br>
<span class="quotelev2">&gt;&gt; interface in the header file :).  So we should be good on that front.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 27, 2007, at 6:38 AM, Terry D. Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am ok with the following as long as we can have some sort of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documenation describing what changed like which old functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are replaced with newer functions and any description of changed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assumptions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 26, 2007, at 6:08 PM, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Some time ago you were working on moving the modex out of the pml
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and cleaning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it up a bit. Is this work still ongoing? The reason I ask is that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently working on integrating the RSL, and would rather  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; build on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code rather than the old...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim Prins brings up a point I keep meaning to ask the group  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about.  A
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; long time ago in a galaxy far, far away (aka, last fall), Galen  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; started working on the BTL / PML redesign that morphed into some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; smaller changes, including some interesting IB work.  Anyway, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rewrote large chunks of the modex, which did a couple of things:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Moved the modex out of the pml base and into the general OMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (renaming
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  the functions in the process)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Fixed the hang if a btl doesn't publish contact information (we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wait until we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  receive a key pushed into the modex at the end of MPI_INIT)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Tried to reduce the number of required memory copies in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's a fairly big change, in that all the BTLs have to be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; updated due
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the function name differences.  It's fairly well tested, and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be really nice for dealing with platforms where there are different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; networks on different machines.  If no one has any objections, I'll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; probably do this next week...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1784.php">Georg Wassen: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>Previous message:</strong> <a href="1782.php">Jeff Squyres: "Re: [OMPI devel] problem with openib, was: send/recv during initialization"</a>
<li><strong>In reply to:</strong> <a href="1779.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
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
