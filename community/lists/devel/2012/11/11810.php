<?
$subject_val = "[OMPI devel] C99 in wrapper compilers?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 10:04:38 2012" -->
<!-- isoreceived="20121120150438" -->
<!-- sent="Tue, 20 Nov 2012 10:04:22 -0500" -->
<!-- isosent="20121120150422" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] C99 in wrapper compilers?" -->
<!-- id="6B860C72-0110-4AAC-99D9-1B79D163B62D_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] C99 in wrapper compilers?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 10:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11811.php">Jeff Squyres: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
<li><strong>Previous message:</strong> <a href="11809.php">Sylwester Arabas: "[OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11811.php">Jeff Squyres: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
<li><strong>Reply:</strong> <a href="11811.php">Jeff Squyres: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
<li><strong>Reply:</strong> <a href="11813.php">N.M. Maclaren: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While at SC, Brian, Ralph, Nathan and I had long conversations about C99.  We decided:
<br>
<p>- all compilers that we care about seem to support C99
<br>
- so let's move the trunk and v1.7 to *require* C99 and see if anyone screams
<br>
&nbsp;&nbsp;--&gt; we're NOT doing this in v1.6
<br>
- mind you: we're not (yet) adding any C99 code to OMPI yet; we're just requiring a C99 compiler via configure
<br>
<p>This morning, I noticed that the trunk wrapper compilers are now adding C99 flags (it did so with gcc and icc, but not pgcc -- perhaps because pgcc doesn't need any flags to force C99 mode...?).  That does not seem like a good idea -- we certainly don't want to force user apps to be adhere to C99.
<br>
<p>This happens on the trunk; not yet with v1.7.  Nathan just confirmed to me that the C99 configure macro hasn't yet been ported over the v1.7.  
<br>
<p>My $0.02: making sure the wrapper compilers don't slurp in c99 flags should be fixed before bringing to v1.7.
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
<li><strong>Next message:</strong> <a href="11811.php">Jeff Squyres: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
<li><strong>Previous message:</strong> <a href="11809.php">Sylwester Arabas: "[OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11811.php">Jeff Squyres: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
<li><strong>Reply:</strong> <a href="11811.php">Jeff Squyres: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
<li><strong>Reply:</strong> <a href="11813.php">N.M. Maclaren: "Re: [OMPI devel] C99 in wrapper compilers?"</a>
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
