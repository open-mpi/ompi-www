<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 09:45:03 2014" -->
<!-- isoreceived="20141111144503" -->
<!-- sent="Tue, 11 Nov 2014 14:43:01 +0000" -->
<!-- isosent="20141111144301" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF" -->
<!-- id="87tx25n6h6.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="60AA31B5-BAC2-48CA-8DC5-F61CEE01A60D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 09:43:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Nov 10, 2014, at 8:27 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c">https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have time to follow this properly, but am I reading right that
</span><br>
<span class="quotelev2">&gt;&gt; that says mpi_sizeof will now _not_ work with gcc &lt; 4.9, i.e. the system
</span><br>
<span class="quotelev2">&gt;&gt; compiler of the vast majority of HPC GNU/Linux systems, whereas it did
</span><br>
<span class="quotelev2">&gt;&gt; before (at least in simple cases)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You raise a very good point, which raises another unfortunately good related point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. No, the goal is to enable MPI_SIZEOF in *more* cases, and still preserve all the old cases.  Your mail made me go back and test all the old cases this morning, and I discovered a bug which I need to fix before 1.8.4 is released (details unimportant, unless someone wants to gory details).
</span><br>
<p>I haven't checked the source, but the commit message above says
<br>
<p>&nbsp;&nbsp;If the Fortran compiler supports both INTERFACE and ISO_FORTRAN_ENV,
<br>
&nbsp;&nbsp;then we'll build the MPI_SIZEOF interfaces.  If not, we'll skip
<br>
&nbsp;&nbsp;MPI_SIZEOF in mpif.h and the mpi module.
<br>
<p>which implies it it's been removed for gcc &lt; 4.9, whereas it worked before.
<br>
<p><span class="quotelev1">&gt; The answer actually turned out to be &quot;yes&quot;.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: the spec just says it's available in the Fortran interfaces.  It doesn't say &quot;the Fortran interfaces, except MPI_SIZEOF.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, the spec doesn't prohibit explicit interfaces in mpif.h (it never has).  It's just that most (all?) MPI implementations have not provided explicit interfaces in mpif.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for MPI_SIZEOF to work, explicit interfaces are *required*.
</span><br>
<p>[Yes, I understand -- sorry if that wasn't clear and you wasted time
<br>
explaining.]
<br>
<p><span class="quotelev2">&gt;&gt; but I'd expect that to be deprecated anyhow.
</span><br>
<span class="quotelev2">&gt;&gt; (The man pages generally don't mention USE, only INCLUDE, which seems
</span><br>
<span class="quotelev2">&gt;&gt; wrong.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm.  Yes, true.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any chance I could convince you to submit a patch?  :-)
</span><br>
<p>Maybe, but I don't really know what it should involve or whether it can
<br>
be done mechanically; I definitely don't have time to dissect the spec.
<br>
Actually, I'd have expected the API man pages to be reference versions,
<br>
shared across implementations, but MPICH's are different.
<br>
<p><span class="quotelev1">&gt; Fortran 77 compilers haven't existed for *many, many years*.
</span><br>
<p>[I think f2c still gets some use, and g77 was only obsoleted with gcc 4
<br>
-- I'm not _that old_!  I'm not actually advocating f77, of course.]
<br>
<p><span class="quotelev1">&gt; And I'll say it again: MPI has *never* supported Fortran 77 (it's a
</span><br>
<span class="quotelev1">&gt; common misconception that it ever did).
</span><br>
<p>Well, having &quot;Fortran77 interface&quot; in the standard could confuse a
<br>
stupid person!  (As a former language lawyer for it, I'd allow laxity in
<br>
&quot;Fortran77&quot;, like the latest MPI isn't completely compatible with the
<br>
latest Fortran either.)
<br>
<p><span class="quotelev2">&gt;&gt; Fortran has interfaces, not prototypes!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, sorry -- I'm a C programmer and I dabble in Fortran
</span><br>
<p>That was mainly as in it's better &#226;&#152;&#186;.
<br>
<p><span class="quotelev1">&gt; (read: I'm the guy who keeps the Fortran stuff maintained in OMPI), so
</span><br>
<span class="quotelev1">&gt; I sometimes use the wrong terminology.  Mea culpa!
</span><br>
<p>Sure, and thanks.  I dare say you can get some community help if you
<br>
need it, especially if people think Fortran isn't being properly
<br>
supported, though I'm not complaining.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25746.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25734.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings	for	MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
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
