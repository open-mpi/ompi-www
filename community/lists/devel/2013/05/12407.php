<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 12:03:07 2013" -->
<!-- isoreceived="20130522160307" -->
<!-- sent="Wed, 22 May 2013 16:03:02 +0000" -->
<!-- isosent="20130522160302" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F63508A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CDC21C2F.11453%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 12:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12408.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
<li><strong>In reply to:</strong> <a href="12405.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12408.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12408.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 22, 2013, at 10:00 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Hmmm...the issue is that perl usually is included in the distro, but
</span><br>
<span class="quotelev2">&gt;&gt; python often is not - you have to add that module.
</span><br>
<p>This seems to be a key argument, but I'm not sure it's still true.
<br>
<p>I'm a RHEL guy; I see that RHEL has installed python by default since RHEL4 (i.e., many, many years ago).  Are there other Linux distros that really don't install Python by default?  This would surprise me.
<br>
<p>I see python on my OS X Lion, and apparently in every OS X since (at least) Leopard (Tony at Absoft checked for me).
<br>
<p>I don't know about Python+Solaris, but I don't know if we (OMPI) care, either.
<br>
<p><span class="quotelev2">&gt;&gt; IIRC, that was the
</span><br>
<span class="quotelev2">&gt;&gt; rationale for allowing perl. Others (e.g., me) had played with using
</span><br>
<span class="quotelev2">&gt;&gt; python before, but switched to perl (a) for the prior rationale, and (b)
</span><br>
<span class="quotelev2">&gt;&gt; to avoid proliferating language requirements.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I happen to like python myself, but believe there is some value in
</span><br>
<span class="quotelev2">&gt;&gt; avoiding adding yet another language to our list of requirements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I (strongly) agree with Ralph.  We made a decision (way back in the 1.0
</span><br>
<span class="quotelev1">&gt; timeframe) that we would use perl for a scripting language when absolutely
</span><br>
<span class="quotelev1">&gt; necessary.  And even at that, I believe we only require Perl for developer
</span><br>
<span class="quotelev1">&gt; builds or distribution builds where an assembly file doesn't already exist
</span><br>
<span class="quotelev1">&gt; for that compiler.
</span><br>
<p>I believe that that is still true -- that's one of the reasons I sent around this RFC (because introducing python at end-user &quot;make&quot; time is a Big Change).
<br>
<p><span class="quotelev1">&gt; I have no problem with the change to generated bindings from a single
</span><br>
<span class="quotelev1">&gt; configuration file/set of files, a bit of a problem with that happening at
</span><br>
<span class="quotelev1">&gt; at configure / build time on a release distribution (we don't require
</span><br>
<span class="quotelev1">&gt; anything other than /bin/sh at configure / build time right now),
</span><br>
<p>FWIW: the current Bourne shell scripts that generate the use mpi bindings are pretty... horrible.  We have no intention of continuing to use Bourne shell scripts for future code generation.
<br>
<p>A little more rationale for scripting/generating at &quot;make&quot; time in general: the problem is that Fortran compiler support is literally all over the map; it's really not feasible to maintain a single .F90 file with preprocessor macros to cover all the differences, because some differences require different coding approaches (e.g., inline in a module vs. separate/individual .F90 files -- the contents of these two are quite different).
<br>
<p>That being said, we *could* pre-generate all possibilities and ship them all in a tarball (i.e., only invoke a generator script at developer/make dist time).  Note that that would lead to a bit more complexity, and could lead to even more than 7 copies in the tarball (7 is pretty much the minimum -- and that's with very heavy use of preprocessor macros).
<br>
<p>Hence, in a perfect world, we could generate at &quot;make&quot; time only exactly what the user's Fortran compiler needed.
<br>
<p><span class="quotelev1">&gt; and a
</span><br>
<span class="quotelev1">&gt; strong problem with using Python instead of the Perl that we've previously
</span><br>
<span class="quotelev1">&gt; agreed we'd use when all other options are unavoidable.
</span><br>
<p>I'm asking because:
<br>
<p>- the contributor (Craig) has been around for years; he has a proven track record of maintaining what he has contributed
<br>
- the contributor wants to fundamentally advance our Fortran support
<br>
- the contributor has a strong preference for Python
<br>
- from my anecdotal evidence, Python is pretty ubiquitous these days (is that wrong?)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12408.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
<li><strong>In reply to:</strong> <a href="12405.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12408.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12408.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
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
