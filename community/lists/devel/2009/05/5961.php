<?
$subject_val = "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 12:29:48 2009" -->
<!-- isoreceived="20090505162948" -->
<!-- sent="Tue, 5 May 2009 12:29:42 -0400" -->
<!-- isosent="20090505162942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="846538D7-48DA-4CE0-AFBC-F1F6DC5D9225_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D8FC141B-3DFC-49E4-A950-DAE9C79BE375_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 12:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5960.php">Jeff Squyres: "[OMPI devel] renaming / v1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It took a little longer than expected, but here's the reply from a  
<br>
friend who works on Apple's C++ compilers (Doug G.; he's previously  
<br>
posted on this list):
<br>
<p>-----
<br>
This is more sticky than I expected. My general feeling is that GCC
<br>
4.1 is being overly eager in producing this warning: yes, OMPI is
<br>
casting from one pointer type or another, where the two pointers to
<br>
incomplete types are assumed to never alias. However, it's just a
<br>
cast, and you'll never actually be dereferencing these pointers in a
<br>
case where there is any problem: once the definitions of
<br>
ompi_communicator_t and ompi_predefined_communicator_t are known, we
<br>
know they can alias and the compiler will Do The Right Thing (TM).
<br>
<p>I don't think it's possible that strict-aliasing could ever result in
<br>
a miscompile for communicators, since users can't ever look into their
<br>
ompi_communicator_t or ompi_predefined_communicator_t. So, the
<br>
explicit cast to (void*) is a reasonable fix to silence the warning.
<br>
<p>If you're really paranoid, include the definitions of
<br>
ompi_communicator_t and ompi_predefined_communicator_t in mpi.h and
<br>
the warning will disappear.
<br>
<p>Why does this only happen with GCC 4.1? It *might* be a bug, but it's
<br>
more likely to be a &quot;quirk&quot;: most of GCC's type-aliasing diagnostics
<br>
actually come from the compiler's middle-end, so they're sensitive to
<br>
the various optimizations that occur before that pass. Little changes
<br>
in the front ends and optimizers can end up affecting which
<br>
diagnostics you see. Yuck!
<br>
-----
<br>
<p>So while icky, I think that your patch might well be the least of  
<br>
evils.  I'll commit.  Thanks!
<br>
<p><p>On Apr 30, 2009, at 8:16 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 30, 2009, at 8:07 AM, Number Cruncher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Following the discussion about ABI compatibility and type-punning of
</span><br>
<span class="quotelev2">&gt; &gt; non
</span><br>
<span class="quotelev2">&gt; &gt; client-visible types, I've attached a patch against 1.3.2 which
</span><br>
<span class="quotelev2">&gt; &gt; casts to
</span><br>
<span class="quotelev2">&gt; &gt; an opaque (void *) when OMPI_BUILDING is 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This will prevent the compiler from trying to do any strict-aliasing
</span><br>
<span class="quotelev2">&gt; &gt; based optimizations when the definition of the type to cast to is
</span><br>
<span class="quotelev2">&gt; &gt; unknown.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When builing Open MPI, the (void *) cast is omitted (because of the
</span><br>
<span class="quotelev2">&gt; &gt; compiler flag &quot;-DOMPI_BUILDING=1&quot;) and the code remains as before.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This clears up all warnings for my GCC 4.1 compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Awesome, thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a request in to a friend who's a C++/compiler guru (he works on
</span><br>
<span class="quotelev1">&gt; Apple's next-gen C++ compiler).  He promised me an email response to
</span><br>
<span class="quotelev1">&gt; my questions about this topic by tomorrow (he was somewhat slammed
</span><br>
<span class="quotelev1">&gt; this week).
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5960.php">Jeff Squyres: "[OMPI devel] renaming / v1.5 branch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
