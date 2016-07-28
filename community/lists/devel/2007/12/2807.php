<?
$subject_val = "[OMPI devel] SCTP BTL exclusivity value problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 09:38:30 2007" -->
<!-- isoreceived="20071212143830" -->
<!-- sent="Wed, 12 Dec 2007 16:38:24 +0200" -->
<!-- isosent="20071212143824" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] SCTP BTL exclusivity value problem" -->
<!-- id="20071212143824.GQ3360_at_minantech.com" -->
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
<strong>Subject:</strong> [OMPI devel] SCTP BTL exclusivity value problem<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 09:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2808.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2808.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Reply:</strong> <a href="2808.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;SCTP BTL sets its exclusivity value to MCA_BTL_EXCLUSIVITY_LOW - 1
<br>
but MCA_BTL_EXCLUSIVITY_LOW is zero so actually it is set to max
<br>
exclusivity possible. Can somebody fix this please? May be we should not
<br>
define MCA_BTL_EXCLUSIVITY_LOW to zero?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2808.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2808.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Reply:</strong> <a href="2808.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
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
