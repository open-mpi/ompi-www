<?
$subject_val = "Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 22:43:04 2014" -->
<!-- isoreceived="20140108034304" -->
<!-- sent="Wed, 8 Jan 2014 03:43:03 +0000" -->
<!-- isosent="20140108034303" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK" -->
<!-- id="E9594378-63F7-4614-AE04-119D22B02568_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52CC6F3D.1080802_at_net-b.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 22:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13583.php">Christoph Niethammer: "[OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
<li><strong>Previous message:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13575.php">Tobias Burnus: "[OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for the reminder; this had totally slipped off my radar.  :-(
<br>
<p>Oy, yes, I added this in my bitbucket forever ago and forgot to bring it to the trunk!  :-(
<br>
<p>It looks like that bitbucket is in bad shape -- I just svn up'ed it, and it no longer compiles.  I suspect some conflicts crept in unnoticed over time.  
<br>
<p>But I'll take your patch, definitely.  I'll put it on the SVN trunk and schedule it for OMPI 1.7.5 (it's too late for 1.7.4).
<br>
<p>Thank you!
<br>
<p><p>On Jan 7, 2014, at 4:18 PM, Tobias Burnus &lt;burnus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to see the following patch to be included in Open MPI, which enabled interface checking also with GCC's gfortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While TYPE(*), DIMENSION(*) is already tested for, it cannot be used for scalars (and &quot;TYPE(*)&quot; cannot be used with arrays). [Those were added in GCC 4.8, which diagnoses the rank mismatch. Fortran 2015 (?) will add support for both scalars and dimensions.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In GCC 4.9, gfortran joins other compilers by supporting a directive which disables the argument check (type, kind, rank checking: TKR): NO_ARG_CHECK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch does so. The original version has been added 8 months ago to <a href="https://bitbucket.org/jsquyres/mpi3-fortran/commits/243ffae9f63ffc8fcdfdc604796ef290963ea1c4">https://bitbucket.org/jsquyres/mpi3-fortran/commits/243ffae9f63ffc8fcdfdc604796ef290963ea1c4</a> - but as it hasn't been merged to the Open MPI, I submit it with this email (rediffed with some additional cases).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd be delighted if the patch could be applied to the trunk - and possibly even be backported to 1.7. (I think it also applies to 1.6 but I haven't checked.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tobias
</span><br>
<span class="quotelev1">&gt; &lt;gcc-no-arg-check.diff&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13583.php">Christoph Niethammer: "[OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
<li><strong>Previous message:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13575.php">Tobias Burnus: "[OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
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
