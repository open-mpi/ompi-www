<?
$subject_val = "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 08:34:27 2013" -->
<!-- isoreceived="20130130133427" -->
<!-- sent="Wed, 30 Jan 2013 13:36:00 +0100 (CET)" -->
<!-- isosent="20130130123600" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove (broken) heterogeneous support" -->
<!-- id="201301301237.r0UCa0BH019527_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] RFC: Remove (broken) heterogeneous support" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove (broken) heterogeneous support<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 07:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
<li><strong>Maybe in reply to:</strong> <a href="12060.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p><span class="quotelev1">&gt; WHAT: Remove the configure command line option to enable heterogeneous
</span><br>
<span class="quotelev1">&gt; support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: The heterogeneous conversion code isn't working, very few people
</span><br>
<span class="quotelev1">&gt; use this feature
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: README and config/opal_configure_options.m4.  See attached patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Next Tuesday teleconf, 5 Feb, 2013
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The heterogeneous code has been broken for a while.  The assumption
</span><br>
<span class="quotelev1">&gt; is that this is a minor bug that can fairly easily be fixed, but a)
</span><br>
<span class="quotelev1">&gt; no one has taken the time to do so, b) very few people use this
</span><br>
<span class="quotelev1">&gt; functionality, and c) many OMPI developers don't even have hardware
</span><br>
<span class="quotelev1">&gt; where to test this scenario (e.g., big and little endian systems).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As such, a suggestion was made to remove the --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; configure CLI switch so that users don't try to enable it.  It
</span><br>
<span class="quotelev1">&gt; someone ever fixes the heterogeneous code, the configure CLI switch
</span><br>
<span class="quotelev1">&gt; can be put back.
</span><br>
<p>I have no problem with the option --enable-heterogeneous, when I build
<br>
Open MPI, but Open MPI will not work in a heterogeneous environment
<br>
with little and big endian machines, while LAM MPI can handle such
<br>
environments. You wanted to solve this problem.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/3430">https://svn.open-mpi.org/trac/ompi/ticket/3430</a>
<br>
<p>I would appreciate if you wouldn't remove this option.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
<li><strong>Maybe in reply to:</strong> <a href="12060.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
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
