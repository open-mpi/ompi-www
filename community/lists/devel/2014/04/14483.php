<?
$subject_val = "[OMPI devel] New OMPI subproject: SCON";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 11:10:53 2014" -->
<!-- isoreceived="20140409151053" -->
<!-- sent="Wed, 9 Apr 2014 08:10:07 -0700" -->
<!-- isosent="20140409151007" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] New OMPI subproject: SCON" -->
<!-- id="87DE082B-7DA9-46C4-B3A6-3ACEBDCDC4AE_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] New OMPI subproject: SCON<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-09 11:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14484.php">Jeff Squyres (jsquyres): "[OMPI devel] Slowly moving to git"</a>
<li><strong>Previous message:</strong> <a href="14482.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Reboot all the CREST server machines to apply the updated openssl lib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>We would like to create a new OMPI subproject called Scalable Overlay Network (SCON). For those wondering, an overlay network is something like MRnet - it is a library that provides users with a scalable way of communicating in their tool, generally including analysis filters that can be inserted into the message stream. So you can inject messages into the library, define various analysis functions you want performed at specified aggregation points, and then receive the (possibly filtered) messages at the designated endpoint.
<br>
<p>SCON is an implementation based on the ORTE RML/OOB layers. We will be defining its own set of APIs (e.g., scon_send), but will use the base ORTE code to implement them.
<br>
<p>Please let me know if there are any objections, concerns, or questions about creating this subproject, or SCON in general.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14484.php">Jeff Squyres (jsquyres): "[OMPI devel] Slowly moving to git"</a>
<li><strong>Previous message:</strong> <a href="14482.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Reboot all the CREST server machines to apply the updated openssl lib"</a>
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
