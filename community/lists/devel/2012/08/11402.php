<?
$subject_val = "[OMPI devel] 1.6.1rc3 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 15 20:11:07 2012" -->
<!-- isoreceived="20120816001107" -->
<!-- sent="Wed, 15 Aug 2012 20:10:22 -0400" -->
<!-- isosent="20120816001022" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.1rc3 posted" -->
<!-- id="0C914218-9DA3-4388-A244-D66C8AFB7FF7_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.1rc3 posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-15 20:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11403.php">Jeff Squyres: "[OMPI devel] opal_hotel class"</a>
<li><strong>Previous message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Changes since rc2:
<br>
<p>- REVERTED (i.e., we put back the PPRQ so that RDMACM will still work, and therefore RoCE will still work):
<br>
&nbsp;&nbsp;- Remove the last openib default per-peer receive queue 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;specification (and make it an SRQ). 
<br>
<p>- Fix double semicolon error in the C++ in &lt;mpi.h&gt;.  Thanks to John
<br>
&nbsp;&nbsp;Foster for pointing out the issue.
<br>
- Allow -Xclang to be specified multiple times in CFLAGD.  Thanks to
<br>
&nbsp;&nbsp;P. Martin for raising the issue.
<br>
- Break up a giant &quot;print *&quot; statement in the ABI-preserving incorrect
<br>
&nbsp;&nbsp;MPI_SCATTER interface in the &quot;large&quot; Fortran &quot;mpi&quot; module.  Thanks
<br>
&nbsp;&nbsp;to Juan Escobar for the initial patch.
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
<li><strong>Next message:</strong> <a href="11403.php">Jeff Squyres: "[OMPI devel] opal_hotel class"</a>
<li><strong>Previous message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
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
