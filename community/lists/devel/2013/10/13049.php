<?
$subject_val = "[OMPI devel] RFC: remove udapl BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 07:27:51 2013" -->
<!-- isoreceived="20131004112751" -->
<!-- sent="Fri, 4 Oct 2013 11:27:50 +0000" -->
<!-- isosent="20131004112750" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: remove udapl BTL" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F91D94A_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: remove udapl BTL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 07:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13050.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13048.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.x support statement"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the udapl BTL from the trunk (it's not in v1.7)
<br>
<p>WHY: No one is using it
<br>
<p>WHERE: README, config/ompi_check_udapl.m4, and ompi/mca/btl/udapl
<br>
<p>TIMEOUT: Tuesday October 15 teleconf
<br>
<p>-----
<br>
<p>While editing the 1.7.x README this morning, I noticed:
<br>
<p>- we still document --with-udapl
<br>
- the udapl BTL isn't in the v1.7 branch
<br>
<p>Sun/Oracle was the only organization using and maintaining the udapl BTL.  They're long gone, so why not delete the UDAPL BTL?  It can always be brought back out of SVN history if someone wants to resurrect it.
<br>
<p>There's no real rush to delete this from the trunk; I just bring it up because it's old kruft (that has likely bit-rotted) that we should probably not forget to remove.
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
<li><strong>Next message:</strong> <a href="13050.php">marco atzeri: "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13048.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.x support statement"</a>
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
