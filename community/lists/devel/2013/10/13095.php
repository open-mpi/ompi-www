<?
$subject_val = "[OMPI devel] 1.7.3: fixed missing Fortran CMR";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 15 17:12:33 2013" -->
<!-- isoreceived="20131015211233" -->
<!-- sent="Tue, 15 Oct 2013 21:12:31 +0000" -->
<!-- isosent="20131015211231" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.3: fixed missing Fortran CMR" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F972DD8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.3: fixed missing Fortran CMR<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-15 17:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Previous message:</strong> <a href="13094.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the teleconf today: there was a missing Fortran CMR that was causing a linker error on the v1.7 branch.  That CMR has now been committed.  In my testing, all is now working properly.  ...but I'd like to let it soak through the nightly MTT and see what it looks like tomorrow.
<br>
<p>Ralph and I chatted about this on the phone, and he's cool with this plan.
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
<li><strong>Next message:</strong> <a href="13096.php">Christopher Samuel: "Re: [OMPI devel] 1.6.5 large matrix test doesn't pass (decode) ?"</a>
<li><strong>Previous message:</strong> <a href="13094.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
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
