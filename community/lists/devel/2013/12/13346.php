<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 17:27:43 2013" -->
<!-- isoreceived="20131203222743" -->
<!-- sent="Tue, 3 Dec 2013 22:27:41 +0000" -->
<!-- isosent="20131203222741" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather" -->
<!-- id="D7C0679B-05FB-423B-9420-FBFE06E48C62_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="528D25F3.1070304_at_in.tum.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SC13 birds of a feather<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-03 17:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13345.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13297.php">Compres: "[OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13352.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13352.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13355.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry; I really wasn't paying attention to my email the week of SC, and then I was on vacation for the Thanksgiving holiday.  :-\
<br>
<p>More below.
<br>
<p>On Nov 20, 2013, at 4:13 PM, Compres &lt;compresu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was at the birds of a feather and wanted to talk to the Open MPI developers, but unfortunately had to leave early.  In particular, I would like to discuss about your implementation of the MPI tools interface and possibly contribute to it later on.
</span><br>
<p>Sorry we missed you.
<br>
<p>What did you want to discuss?  We actually have a full implementation of the MPI_T interface -- meaning that we have all the infrastructure in place for MPI_T control and performance variables.
<br>
<p>1. The MPI_T control variables map directly to OMPI's MCA params, so we automatically expose oodles of cvars through MPI_T.  They're all read-only after MPI_INIT, however -- many things are setup during MPI_INIT and it would be quite a Big Deal if they were to change.  However, we pretty much *assumed* all cvars shouldn't change after INIT -- we didn't really audit to see if there were actually some cvars that could change after INIT. So there's work that could be done there (i.e., find cvars that could change after INIT, and/or evaluate the amount of work/change it would be to change some read-only cvars to be read-write, etc.).
<br>
<p>2. The MPI_T performance variables are new.  There's only a few created right now (e.g., in the Cisco usnic BTL).  But the field is pretty wide open here -- the infrastructure is there, but we're really not exposing much information yet.  There's lots that can be done here.
<br>
<p>What did you have in mind?
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
<li><strong>Next message:</strong> <a href="13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13345.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13297.php">Compres: "[OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13352.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13352.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13355.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
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
