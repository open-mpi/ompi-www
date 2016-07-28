<?
$subject_val = "[OMPI devel] Cross-job disconnect is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  7 17:07:46 2015" -->
<!-- isoreceived="20150907210746" -->
<!-- sent="Mon, 7 Sep 2015 14:07:44 -0700" -->
<!-- isosent="20150907210744" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Cross-job disconnect is broken" -->
<!-- id="1EAB4A30-A3F4-461F-BC46-C8B1BB4CACFD_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Cross-job disconnect is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-07 17:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17979.php">Adrian Reber: "[OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17977.php">Ralph Castain: "[OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>I was working on the PMIx integration in support of connect/accept, and happened to take a closer look at the &#226;&#128;&#156;disconnect&#226;&#128;&#157; function we call during finalize. I then realized that we had broken this function for the use-case where two jobs started by different mpiruns connect when we made the grpcomm changes some time back.
<br>
<p>I&#226;&#128;&#153;m still scratching my head about how to correctly fix this problem. Obviously, this isn&#226;&#128;&#153;t something people do very often in the real-world - ompi-server is required, and it hasn&#226;&#128;&#153;t been operational in quite some time. I checked and found exactly one query about it over the last several years. Likewise, I haven&#226;&#128;&#153;t found any RM out there that supports it either.
<br>
<p>PMIx gives us the ability to provide that support, but it will take a little time to figure out how to provide the required backend &#226;&#128;&#156;fence&#226;&#128;&#157; in all use-cases:
<br>
<p>* two jobs started by the same mpirun - supported today by ORTE
<br>
<p>* two jobs started by different mpiruns - we used to support, but is broken in grpcomm/barrier
<br>
<p>* two direct-launched jobs  - never supported
<br>
<p>* one direct-launched job and one started by mpirun  - never supported
<br>
<p>Given lack of use out there, I don&#226;&#128;&#153;t see a reason to hold release of the 2.x series over this issue. Will keep you posted on progress towards a resolution
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17979.php">Adrian Reber: "[OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17977.php">Ralph Castain: "[OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Reply:</strong> <a href="17983.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
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
