<?
$subject_val = "[OMPI devel] oshmem implementation still lacking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 05:32:26 2013" -->
<!-- isoreceived="20130915093226" -->
<!-- sent="Sun, 15 Sep 2013 09:32:24 +0000" -->
<!-- isosent="20130915093224" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem implementation still lacking" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8ABD16_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem implementation still lacking<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-15 05:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Previous message:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Reply:</strong> <a href="12897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Reply:</strong> <a href="12898.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did some checking this weekend, and found oshmem still lacking:
<br>
<p>1. Fortran support clearly had not been tested at all -- it flat-out didn't compile/didn't work:
<br>
&nbsp;&nbsp;&nbsp;- The wrapper compilers still referred to &quot;f77&quot; and &quot;f90&quot;
<br>
&nbsp;&nbsp;&nbsp;- The wrapper compiler data files were just plain incorrect
<br>
&nbsp;&nbsp;&nbsp;- If Fortran was disabled in MPI, Bad Things happened
<br>
&nbsp;&nbsp;&nbsp;- I don't see a Fortran version of shmem_init() -- isn't there supposed to be one?  (I don't know much/anything about shmem, so I could be wrong here).  
<br>
&nbsp;&nbsp;&nbsp;- ...and others
<br>
<p>2. Static linking of shmem applications seems to be broken.
<br>
<p>3. I noticed that config/oshmem_configure_options.m4 is setting openib_* environment variables.  
<br>
&nbsp;&nbsp;&nbsp;- Such env variables should be prefixed with oshmem_
<br>
&nbsp;&nbsp;&nbsp;- I thought we had agreed to call all new &quot;openib&quot; things &quot;verbs&quot; (or MXM or whatever)... the name &quot;openib&quot; is waaaay obsolete.  We might not be able to change some of those names in the OMPI layer for backwards compatibility reasons, but let's not continue to propagate this ancient/outdated name
<br>
&nbsp;&nbsp;&nbsp;- Why aren't these checks in component .m4 files?  I thought one of the key issues was that the oshmem layer was not going to depend on IB/verbs/MXM/etc. and actually be a vendor-neutral code base.
<br>
<p>4. The wrapper compiler data file for shmemcc was as broken (i.e., out of date) as the fortran wrapper data files.
<br>
<p><pre>
---
I just committed the following changes in r29165, but more work needs to be done:
1. Per my previous email, I renamed all &quot;f77&quot; and &quot;f90&quot; directory/file names to &quot;fortran&quot; (including removing shmemf77 / shmemf90 wrapper compilers and replacing them with &quot;shmemfort&quot;).
2. Fixed several Fortran coding errors.
3. Removed lots of old/stale comments that were clearly the result of copying from the OMPI layer and then not cleaning up afterwards (i.e., the comments were wholly inaccurate in the oshmem layer).
4. Removed both redundant and harmful code from oshmem_config.h.in.
5. Temporarily slave building the oshmem Fortran bindings to --enable-mpi-fortran.  This doesn't seem like a good long-term solution, but at least you can now build all Fortran bindings (MPI + oshmem) or not.  
Note that I did *not* do an exhaustive review of the oshmem layer.  I just tried to build the Fortran stuff, found it broken, and basically did a limited breadth-first search from there to see what needed to be fixed to get the Fortran interfaces fixed. I found a few other things along the way, but don't claim that it is anywhere near comprehensive.
-----
*** WORK THAT STILL NEEDS TO BE DONE:
1. See my comment in config/oshmem_configure_options.m4.
2. Add shmem examples in examples/ directory.
3. Clean up the openib_* env variable names, and potentially move all verbs-related tests to component .m4 files.
4. Fix static linking of shmem applications.
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Previous message:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Reply:</strong> <a href="12897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Reply:</strong> <a href="12898.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  oshmem implementation still lacking"</a>
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
