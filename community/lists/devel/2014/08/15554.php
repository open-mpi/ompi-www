<?
$subject_val = "[OMPI devel] errors and warnings with show_help() usage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 09:43:20 2014" -->
<!-- isoreceived="20140808134320" -->
<!-- sent="Fri, 8 Aug 2014 13:43:18 +0000" -->
<!-- isosent="20140808134318" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] errors and warnings with show_help() usage" -->
<!-- id="DD7AC547-36D7-4457-A3A8-BB3C2EF9EF30_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] errors and warnings with show_help() usage<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 09:43:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15555.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI SVN -&gt; Git (github) conversion"</a>
<li><strong>Previous message:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Reply:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SHORT VERSION
<br>
=============
<br>
<p>The ./contrib/check-help-strings.pl script is showing ***47 coding errors*** with regards to using show_help() in components.  Here's a summary of the offenders:
<br>
<p>- ORTE (lumped together because there's a single maintainer :-) )
<br>
- smcuda and cuda
<br>
- common/verbs
<br>
- bcol
<br>
- mxm
<br>
- openib
<br>
- oshmem
<br>
<p>Could the owners of these portions of the code base please run ./contrib/check-help-strings.pl and fix the ERRORs that are shown?
<br>
<p>Thanks!
<br>
<p>MORE DETAIL
<br>
===========
<br>
<p>The first part of ./contrib/check-help-strings.pl's output shows ERRORs -- referring to help files that do not exist, or referring to help topics that do not exist.
<br>
<p>I'm only calling out the ERRORs in this mail -- but the second part of the output shows a bazillion WARNINGs, too.  These are help topics that are probably unused -- they don't seem to be referenced by the code anywhere.  
<br>
<p>It would be good to clean up all the WARNINGs, too, but the ERRORs are more worrisome.
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
<li><strong>Next message:</strong> <a href="15555.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI SVN -&gt; Git (github) conversion"</a>
<li><strong>Previous message:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Reply:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
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
