<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 14:16:15 2013" -->
<!-- isoreceived="20130522181615" -->
<!-- sent="Wed, 22 May 2013 11:16:08 -0700" -->
<!-- isosent="20130522181608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers" -->
<!-- id="C06F2F51-B2B4-441E-B68C-695677CDE590_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6352A9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 14:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12413.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Previous message:</strong> <a href="12411.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12410.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fwiw: macports is at py3.3
<br>
<p>On May 22, 2013, at 9:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good question.  All the pythons I see are 2.x (OSX, RHEL).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 22, 2013, at 12:18 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this Python 2.x or 3.x? I ask because they are not 100% compatible due to changes in the language syntax. Meaning not all 2.x compilant Python programs work with a 3.x interpreter. IIRC there is a way to write a 2.x compliant Python program so that it is also 3.x compliant, but my Python knowledge does not go deep enough to tell you exactly how to do that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we are going to require Python in the build path, we should be specific on this point and check in the configure script.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 22, 2013 at 11:03 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 22, 2013, at 10:00 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm...the issue is that perl usually is included in the distro, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; python often is not - you have to add that module.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This seems to be a key argument, but I'm not sure it's still true.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm a RHEL guy; I see that RHEL has installed python by default since RHEL4 (i.e., many, many years ago).  Are there other Linux distros that really don't install Python by default?  This would surprise me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see python on my OS X Lion, and apparently in every OS X since (at least) Leopard (Tony at Absoft checked for me).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know about Python+Solaris, but I don't know if we (OMPI) care, either.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IIRC, that was the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rationale for allowing perl. Others (e.g., me) had played with using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; python before, but switched to perl (a) for the prior rationale, and (b)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to avoid proliferating language requirements.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I happen to like python myself, but believe there is some value in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; avoiding adding yet another language to our list of requirements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I (strongly) agree with Ralph.  We made a decision (way back in the 1.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timeframe) that we would use perl for a scripting language when absolutely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessary.  And even at that, I believe we only require Perl for developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; builds or distribution builds where an assembly file doesn't already exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for that compiler.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe that that is still true -- that's one of the reasons I sent around this RFC (because introducing python at end-user &quot;make&quot; time is a Big Change).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no problem with the change to generated bindings from a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration file/set of files, a bit of a problem with that happening at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at configure / build time on a release distribution (we don't require
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything other than /bin/sh at configure / build time right now),
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: the current Bourne shell scripts that generate the use mpi bindings are pretty... horrible.  We have no intention of continuing to use Bourne shell scripts for future code generation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A little more rationale for scripting/generating at &quot;make&quot; time in general: the problem is that Fortran compiler support is literally all over the map; it's really not feasible to maintain a single .F90 file with preprocessor macros to cover all the differences, because some differences require different coding approaches (e.g., inline in a module vs. separate/individual .F90 files -- the contents of these two are quite different).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, we *could* pre-generate all possibilities and ship them all in a tarball (i.e., only invoke a generator script at developer/make dist time).  Note that that would lead to a bit more complexity, and could lead to even more than 7 copies in the tarball (7 is pretty much the minimum -- and that's with very heavy use of preprocessor macros).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, in a perfect world, we could generate at &quot;make&quot; time only exactly what the user's Fortran compiler needed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strong problem with using Python instead of the Perl that we've previously
</span><br>
<span class="quotelev3">&gt;&gt;&gt; agreed we'd use when all other options are unavoidable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm asking because:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - the contributor (Craig) has been around for years; he has a proven track record of maintaining what he has contributed
</span><br>
<span class="quotelev2">&gt;&gt; - the contributor wants to fundamentally advance our Fortran support
</span><br>
<span class="quotelev2">&gt;&gt; - the contributor has a strong preference for Python
</span><br>
<span class="quotelev2">&gt;&gt; - from my anecdotal evidence, Python is pretty ubiquitous these days (is that wrong?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a> _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12413.php">George Bosilca: "Re: [OMPI devel] Datatype initialization bug?"</a>
<li><strong>Previous message:</strong> <a href="12411.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran	wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12410.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
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
