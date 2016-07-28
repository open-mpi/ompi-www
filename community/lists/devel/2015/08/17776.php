<?
$subject_val = "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 15:56:54 2015" -->
<!-- isoreceived="20150820195654" -->
<!-- sent="Thu, 20 Aug 2015 19:56:51 +0000" -->
<!-- isosent="20150820195651" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure" -->
<!-- id="4F253196-48FF-460E-BDF0-3634635E8A60_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="190F69C2-4985-47BA-B8EE-EA3AB223898C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 15:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17777.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>Previous message:</strong> <a href="17775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>In reply to:</strong> <a href="17775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17778.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17778.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2015, at 3:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, I see the issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;  GENERATE psizeof_f.f90
</span><br>
<span class="quotelev1">&gt;  FC       psizeof_f.lo
</span><br>
<span class="quotelev1">&gt; WARNING: Source file &quot;psizeof_f.f90&quot; contains no Fortran statements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; f90comp: 29 SOURCE LINES
</span><br>
<span class="quotelev1">&gt; f90comp: 0 ERRORS, 1 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, (p)sizeof_f.f90 is a generated file.  I'll bet that OMPI determined that your Fortran compiler didn't support enough Fortran mojo to properly support MPI_SIZEOF.  So it generated an empty .f90 file.  And therefore it 
</span><br>
<p>Heh -- I didn't complete that sentence...
<br>
<p>And therefore it didn't generate libmpi_mpifh_sizeof.a (gfortran &lt;v4.9 will generate an effectively &quot;empty&quot; libmpi_mpifh_sizeof.a).  Hence, a subsequent link that depended on that library failed.
<br>
<p><span class="quotelev1">&gt; Easy enough to fix...
</span><br>
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
<li><strong>Next message:</strong> <a href="17777.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-2340-gd5763a8"</a>
<li><strong>Previous message:</strong> <a href="17775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>In reply to:</strong> <a href="17775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17778.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
<li><strong>Reply:</strong> <a href="17778.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc3 - second Solaris build failure"</a>
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
