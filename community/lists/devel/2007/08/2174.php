<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 07:59:05 2007" -->
<!-- isoreceived="20070817115905" -->
<!-- sent="Fri, 17 Aug 2007 07:58:54 -0400" -->
<!-- isosent="20070817115854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881" -->
<!-- id="1BF6514A-057E-4AF6-A28E-13B81D6859C7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46C485B6.9080801_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2007-08-17 07:58:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2175.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2173.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 16, 2007, at 1:13 PM, Tim Prins wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So you're both right.  :-)  But Tim's falling back on an older (and
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately bad) precedent.  It would be nice to not extend that
</span><br>
<span class="quotelev2">&gt;&gt; bad precedent, IMHO...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I really don't care where the constants are defined, but they do  
</span><br>
<span class="quotelev1">&gt; need to
</span><br>
<span class="quotelev1">&gt; be unique. I think it is easiest if all the constants are stored in  
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev1">&gt; file, but if someone else wants to chop them up, that's fine with  
</span><br>
<span class="quotelev1">&gt; me. We
</span><br>
<span class="quotelev1">&gt; would just have to be more careful when adding new constants to check
</span><br>
<span class="quotelev1">&gt; both files.
</span><br>
<p>Ya, IIRC, this is a definite problem that we had: it's at the core of  
<br>
the &quot;component&quot; abstraction (a component should be wholly self- 
<br>
contained and not have any component-specific definitions outside of  
<br>
itself), but these tags are a central resource that need to be  
<br>
allocated in a distributed fashion.
<br>
<p>That's why I think it was decided to simply leave them as they were,  
<br>
and/or use the (DYNAMIC-x) form.  I don't have any better suggestion;  
<br>
I'm just providing rationale for the reason it was the way it was...
<br>
<p><span class="quotelev2">&gt;&gt; True.  We will need a robust tag reservation system, though, to
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that every process gets the same tag values (e.g., if udapl
</span><br>
<span class="quotelev2">&gt;&gt; is available on some nodes but not others, will that cause openib to
</span><br>
<span class="quotelev2">&gt;&gt; have different values on different nodes?  And so on).
</span><br>
<span class="quotelev1">&gt; Not really. All that is needed is a list of constants (similar to the
</span><br>
<span class="quotelev1">&gt; one in rml_types.h).
</span><br>
<p>I was assuming a dynamic/run-time tag assignment (which is obviously  
<br>
problematic for the reason I cited, and others).  But static is also  
<br>
problematic for the breaking-abstraction reasons.  Stalemate.
<br>
<p><span class="quotelev1">&gt; If a rsl component doesn't like the particular
</span><br>
<span class="quotelev1">&gt; constant tag values, they can do whatever they want in their
</span><br>
<span class="quotelev1">&gt; implementation, as long as a messages sent on a tag is received on the
</span><br>
<span class="quotelev1">&gt; same tag.
</span><br>
<p>Sure.
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
<li><strong>Next message:</strong> <a href="2175.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2173.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
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
