<?
$subject_val = "[OMPI devel] udcm_component_query hangs when memlock not infinite";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 04:34:22 2014" -->
<!-- isoreceived="20140220093422" -->
<!-- sent="Thu, 20 Feb 2014 10:34:19 +0100" -->
<!-- isosent="20140220093419" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[OMPI devel] udcm_component_query hangs when memlock not infinite" -->
<!-- id="5305CC1B.5070807_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] udcm_component_query hangs when memlock not infinite<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 04:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14188.php">Mike Dubman: "[OMPI devel] compile error in trunk"</a>
<li><strong>Previous message:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<li><strong>Reply:</strong> <a href="14192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We're setting up a new cluster here. Open MPI 1.7.4 was hanging at
<br>
startup without any error message. The issue appears to be
<br>
udcm_component_query() hanging in finalize() on the sched_yield() loop
<br>
when memlock limit isn't set to unlimited as usual.
<br>
<p>Unfortunately the hangs occur before we print the usual error message
<br>
&quot;you need to set memlock limit to unlimited&quot;. If the udcm problem cannot
<br>
be fixed, it would be good to print an error message about memlock not
<br>
being unlimited much earlier.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14188.php">Mike Dubman: "[OMPI devel] compile error in trunk"</a>
<li><strong>Previous message:</strong> <a href="14186.php">Paul Hargrove: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<li><strong>Reply:</strong> <a href="14192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
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
