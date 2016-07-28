<?
$subject_val = "[OMPI devel] 1.7.4rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 18:31:39 2014" -->
<!-- isoreceived="20140129233139" -->
<!-- sent="Wed, 29 Jan 2014 23:31:35 +0000" -->
<!-- isosent="20140129233135" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc3 released" -->
<!-- id="55814139-DD02-4A92-8302-3FD150CF8926_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc3 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 18:31:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13951.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question"</a>
<li><strong>Previous message:</strong> <a href="13949.php">Paul Hargrove: "[OMPI devel] SPARC V8+ question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We made a bunch of little changes and have re-spun the rc in the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
<br>
<p>Here's what has changed since rc2:
<br>
<p>- Fix --without-hwloc builds
<br>
- Fix possible deadlock with abnormal termination due to orted death
<br>
- Fix hcoll finalization
<br>
- Fix Fortran mpi module ABI regression with gfortran
<br>
- Update NEWS and README
<br>
- Fix some help messages
<br>
- Do not install ROMIO's mpio.h
<br>
- Update mpirun.1 to document MPIEXEC_TIMEOUT environment variable
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
<li><strong>Next message:</strong> <a href="13951.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  SPARC V8+ question"</a>
<li><strong>Previous message:</strong> <a href="13949.php">Paul Hargrove: "[OMPI devel] SPARC V8+ question"</a>
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
