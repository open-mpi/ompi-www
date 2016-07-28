<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.2rc1 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 13:43:57 2010" -->
<!-- isoreceived="20100427174357" -->
<!-- sent="Tue, 27 Apr 2010 13:43:48 -0400" -->
<!-- isosent="20100427174348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.2rc1 warnings" -->
<!-- id="6F96B78B-EE3B-448E-B469-F350DDB63BB3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ED9B9655-E7E7-4FAF-9FBA-E3403DE3851A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.2rc1 warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 13:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7824.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Previous message:</strong> <a href="7822.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7802.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7824.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Reply:</strong> <a href="7824.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2010, at 12:31 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The first two are trivial and I will simply fix them myself. The last one is less obvious to me - can someone with knowledge of that code give us a patch?
</span><br>
<p>Done -- patch in <a href="https://svn.open-mpi.org/trac/ompi/ticket/2391">https://svn.open-mpi.org/trac/ompi/ticket/2391</a>.  It's not an issue on the trunk or v1.5.
<br>
<p>Brad -- I assume that this is one of the locking patches that has not yet made it to v1.5...?  (the routine in question is surrounded with locking comments, but it does not exist in v1.5)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7824.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Previous message:</strong> <a href="7822.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7802.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7824.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
<li><strong>Reply:</strong> <a href="7824.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.2rc1 warnings"</a>
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
