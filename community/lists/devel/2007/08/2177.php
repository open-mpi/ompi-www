<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 08:21:54 2007" -->
<!-- isoreceived="20070817122154" -->
<!-- sent="Fri, 17 Aug 2007 14:22:11 +0200" -->
<!-- isosent="20070817122211" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881" -->
<!-- id="200708171422.11345.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1BF6514A-057E-4AF6-A28E-13B81D6859C7_at_cisco.com" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 08:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2176.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>In reply to:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2179.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2179.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 17 August 2007 13:58, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 16, 2007, at 1:13 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So you're both right.  :-)  But Tim's falling back on an older (and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unfortunately bad) precedent.  It would be nice to not extend that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bad precedent, IMHO...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I really don't care where the constants are defined, but they do  
</span><br>
<span class="quotelev2">&gt; &gt; need to
</span><br>
<span class="quotelev2">&gt; &gt; be unique. I think it is easiest if all the constants are stored in  
</span><br>
<span class="quotelev2">&gt; &gt; one
</span><br>
<span class="quotelev2">&gt; &gt; file, but if someone else wants to chop them up, that's fine with  
</span><br>
<span class="quotelev2">&gt; &gt; me. We
</span><br>
<span class="quotelev2">&gt; &gt; would just have to be more careful when adding new constants to check
</span><br>
<span class="quotelev2">&gt; &gt; both files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ya, IIRC, this is a definite problem that we had: it's at the core of  
</span><br>
<span class="quotelev1">&gt; the &quot;component&quot; abstraction (a component should be wholly self- 
</span><br>
<span class="quotelev1">&gt; contained and not have any component-specific definitions outside of  
</span><br>
<span class="quotelev1">&gt; itself), but these tags are a central resource that need to be  
</span><br>
<span class="quotelev1">&gt; allocated in a distributed fashion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's why I think it was decided to simply leave them as they were,  
</span><br>
<span class="quotelev1">&gt; and/or use the (DYNAMIC-x) form.  I don't have any better suggestion;  
</span><br>
<span class="quotelev1">&gt; I'm just providing rationale for the reason it was the way it was...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; True.  We will need a robust tag reservation system, though, to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; guarantee that every process gets the same tag values (e.g., if udapl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is available on some nodes but not others, will that cause openib to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have different values on different nodes?  And so on).
</span><br>
<span class="quotelev2">&gt; &gt; Not really. All that is needed is a list of constants (similar to the
</span><br>
<span class="quotelev2">&gt; &gt; one in rml_types.h).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was assuming a dynamic/run-time tag assignment (which is obviously  
</span><br>
<span class="quotelev1">&gt; problematic for the reason I cited, and others).  But static is also  
</span><br>
<span class="quotelev1">&gt; problematic for the breaking-abstraction reasons.  Stalemate.
</span><br>
<p>What's about this. Every component choose its own tag independent from the 
<br>
others. Before a component can use the tag it must register with its full 
<br>
name and the tag at a small (process intern) database. If 2 components try to 
<br>
register the same tag we emit a warning, terminate the processes, ... .
<br>
<p>If 2 components (CompA and CompB) want to register the same tag and we assume 
<br>
that process A loads _only_ CompA while processes B loads _only_ CompB than 
<br>
both components will be loaded without any error.
<br>
I assume that it's rather unusual that CompA send a message to process B as 
<br>
there is no counter component. But there is still some probability.
<br>
<p>For more safety (and of course less performance) we could :
<br>
- add a parameter that cause this tag database to sync. across all processes.
<br>
- add a parameter that turns a check for every send/receive, if the specified 
<br>
tag has been used or not
<br>
<p>Just my 0.02 $
<br>
&nbsp;&nbsp;&nbsp;Sven
<br>
<p><span class="quotelev2">&gt; &gt; If a rsl component doesn't like the particular
</span><br>
<span class="quotelev2">&gt; &gt; constant tag values, they can do whatever they want in their
</span><br>
<span class="quotelev2">&gt; &gt; implementation, as long as a messages sent on a tag is received on the
</span><br>
<span class="quotelev2">&gt; &gt; same tag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2176.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>In reply to:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2179.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Reply:</strong> <a href="2179.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
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
