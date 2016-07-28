<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 12:18:18 2013" -->
<!-- isoreceived="20130522161818" -->
<!-- sent="Wed, 22 May 2013 11:18:13 -0500" -->
<!-- isosent="20130522161813" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers" -->
<!-- id="CAANzjE=rTF1YSfy_XRMRmPUBF8Qe_MgMpie2EG+w+U5eXjp_hA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F63508A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 12:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Previous message:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Reply:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Reply:</strong> <a href="12410.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this Python 2.x or 3.x? I ask because they are not 100% compatible due
<br>
to changes in the language syntax. Meaning not all 2.x compilant Python
<br>
programs work with a 3.x interpreter. IIRC there is a way to write a 2.x
<br>
compliant Python program so that it is also 3.x compliant, but my Python
<br>
knowledge does not go deep enough to tell you exactly how to do that.
<br>
<p>If we are going to require Python in the build path, we should be specific
<br>
on this point and check in the configure script.
<br>
<p>-- Josh
<br>
<p><p>On Wed, May 22, 2013 at 11:03 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 22, 2013, at 10:00 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hmmm...the issue is that perl usually is included in the distro, but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; python often is not - you have to add that module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to be a key argument, but I'm not sure it's still true.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a RHEL guy; I see that RHEL has installed python by default since
</span><br>
<span class="quotelev1">&gt; RHEL4 (i.e., many, many years ago).  Are there other Linux distros that
</span><br>
<span class="quotelev1">&gt; really don't install Python by default?  This would surprise me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see python on my OS X Lion, and apparently in every OS X since (at
</span><br>
<span class="quotelev1">&gt; least) Leopard (Tony at Absoft checked for me).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know about Python+Solaris, but I don't know if we (OMPI) care,
</span><br>
<span class="quotelev1">&gt; either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; IIRC, that was the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rationale for allowing perl. Others (e.g., me) had played with using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; python before, but switched to perl (a) for the prior rationale, and (b)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to avoid proliferating language requirements.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I happen to like python myself, but believe there is some value in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; avoiding adding yet another language to our list of requirements.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I (strongly) agree with Ralph.  We made a decision (way back in the 1.0
</span><br>
<span class="quotelev2">&gt; &gt; timeframe) that we would use perl for a scripting language when
</span><br>
<span class="quotelev1">&gt; absolutely
</span><br>
<span class="quotelev2">&gt; &gt; necessary.  And even at that, I believe we only require Perl for
</span><br>
<span class="quotelev1">&gt; developer
</span><br>
<span class="quotelev2">&gt; &gt; builds or distribution builds where an assembly file doesn't already
</span><br>
<span class="quotelev1">&gt; exist
</span><br>
<span class="quotelev2">&gt; &gt; for that compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that that is still true -- that's one of the reasons I sent
</span><br>
<span class="quotelev1">&gt; around this RFC (because introducing python at end-user &quot;make&quot; time is a
</span><br>
<span class="quotelev1">&gt; Big Change).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have no problem with the change to generated bindings from a single
</span><br>
<span class="quotelev2">&gt; &gt; configuration file/set of files, a bit of a problem with that happening
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev2">&gt; &gt; at configure / build time on a release distribution (we don't require
</span><br>
<span class="quotelev2">&gt; &gt; anything other than /bin/sh at configure / build time right now),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: the current Bourne shell scripts that generate the use mpi bindings
</span><br>
<span class="quotelev1">&gt; are pretty... horrible.  We have no intention of continuing to use Bourne
</span><br>
<span class="quotelev1">&gt; shell scripts for future code generation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A little more rationale for scripting/generating at &quot;make&quot; time in
</span><br>
<span class="quotelev1">&gt; general: the problem is that Fortran compiler support is literally all over
</span><br>
<span class="quotelev1">&gt; the map; it's really not feasible to maintain a single .F90 file with
</span><br>
<span class="quotelev1">&gt; preprocessor macros to cover all the differences, because some differences
</span><br>
<span class="quotelev1">&gt; require different coding approaches (e.g., inline in a module vs.
</span><br>
<span class="quotelev1">&gt; separate/individual .F90 files -- the contents of these two are quite
</span><br>
<span class="quotelev1">&gt; different).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, we *could* pre-generate all possibilities and ship them
</span><br>
<span class="quotelev1">&gt; all in a tarball (i.e., only invoke a generator script at developer/make
</span><br>
<span class="quotelev1">&gt; dist time).  Note that that would lead to a bit more complexity, and could
</span><br>
<span class="quotelev1">&gt; lead to even more than 7 copies in the tarball (7 is pretty much the
</span><br>
<span class="quotelev1">&gt; minimum -- and that's with very heavy use of preprocessor macros).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, in a perfect world, we could generate at &quot;make&quot; time only exactly
</span><br>
<span class="quotelev1">&gt; what the user's Fortran compiler needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and a
</span><br>
<span class="quotelev2">&gt; &gt; strong problem with using Python instead of the Perl that we've
</span><br>
<span class="quotelev1">&gt; previously
</span><br>
<span class="quotelev2">&gt; &gt; agreed we'd use when all other options are unavoidable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking because:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the contributor (Craig) has been around for years; he has a proven track
</span><br>
<span class="quotelev1">&gt; record of maintaining what he has contributed
</span><br>
<span class="quotelev1">&gt; - the contributor wants to fundamentally advance our Fortran support
</span><br>
<span class="quotelev1">&gt; - the contributor has a strong preference for Python
</span><br>
<span class="quotelev1">&gt; - from my anecdotal evidence, Python is pretty ubiquitous these days (is
</span><br>
<span class="quotelev1">&gt; that wrong?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12408/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Previous message:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Reply:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<li><strong>Reply:</strong> <a href="12410.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
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
