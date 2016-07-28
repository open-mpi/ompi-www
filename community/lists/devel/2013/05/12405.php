<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 10:01:16 2013" -->
<!-- isoreceived="20130522140116" -->
<!-- sent="Wed, 22 May 2013 14:00:51 +0000" -->
<!-- isosent="20130522140051" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers" -->
<!-- id="CDC21C2F.11453%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F769059B-B2E6-438F-9658-6891EAD65D2A_at_open-mpi.org" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 10:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
<li><strong>Previous message:</strong> <a href="12404.php">Ralph Castain: "Re: [OMPI devel] Porting Open MPI"</a>
<li><strong>In reply to:</strong> <a href="12403.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/22/13 6:50 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On May 22, 2013, at 6:37 AM, &quot;Jeff Squyres (jsquyres)&quot;
</span><br>
<span class="quotelev1">&gt;&lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 22, 2013, at 9:18 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no issues other than wondering why we don't do it in perl given
</span><br>
<span class="quotelev3">&gt;&gt;&gt;that we already do all non-shell actions in perl - is it necessary to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;intro another language?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Because Craig is writing it and he (strongly) prefers Python.  That's
</span><br>
<span class="quotelev2">&gt;&gt;really the main (only?) reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hmmm...the issue is that perl usually is included in the distro, but
</span><br>
<span class="quotelev1">&gt;python often is not - you have to add that module. IIRC, that was the
</span><br>
<span class="quotelev1">&gt;rationale for allowing perl. Others (e.g., me) had played with using
</span><br>
<span class="quotelev1">&gt;python before, but switched to perl (a) for the prior rationale, and (b)
</span><br>
<span class="quotelev1">&gt;to avoid proliferating language requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I happen to like python myself, but believe there is some value in
</span><br>
<span class="quotelev1">&gt;avoiding adding yet another language to our list of requirements.
</span><br>
<p>I (strongly) agree with Ralph.  We made a decision (way back in the 1.0
<br>
timeframe) that we would use perl for a scripting language when absolutely
<br>
necessary.  And even at that, I believe we only require Perl for developer
<br>
builds or distribution builds where an assembly file doesn't already exist
<br>
for that compiler.
<br>
<p>I have no problem with the change to generated bindings from a single
<br>
configuration file/set of files, a bit of a problem with that happening at
<br>
at configure / build time on a release distribution (we don't require
<br>
anything other than /bin/sh at configure / build time right now), and a
<br>
strong problem with using Python instead of the Perl that we've previously
<br>
agreed we'd use when all other options are unavoidable.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12406.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Porting Open MPI"</a>
<li><strong>Previous message:</strong> <a href="12404.php">Ralph Castain: "Re: [OMPI devel] Porting Open MPI"</a>
<li><strong>In reply to:</strong> <a href="12403.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12407.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Python-generated Fortran wrappers"</a>
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
