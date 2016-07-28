<?
$subject_val = "[OMPI devel] RFC: Remove (broken) heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 09:36:03 2013" -->
<!-- isoreceived="20130129143603" -->
<!-- sent="Tue, 29 Jan 2013 14:35:58 +0000" -->
<!-- isosent="20130129143558" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove (broken) heterogeneous support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CBADB1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove (broken) heterogeneous support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 09:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12061.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Maybe reply:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the configure command line option to enable heterogeneous support
<br>
<p>WHY: The heterogeneous conversion code isn't working, very few people use this feature
<br>
<p>WHERE: README and config/opal_configure_options.m4.  See attached patch.
<br>
<p>TIMEOUT: Next Tuesday teleconf, 5 Feb, 2013
<br>
<p>MORE DETAIL:
<br>
<p>The heterogeneous code has been broken for a while.  The assumption is that this is a minor bug that can fairly easily be fixed, but a) no one has taken the time to do so, b) very few people use this functionality, and c) many OMPI developers don't even have hardware where to test this scenario (e.g., big and little endian systems).
<br>
<p>As such, a suggestion was made to remove the --enable-heterogeneous configure CLI switch so that users don't try to enable it.  It someone ever fixes the heterogeneous code, the configure CLI switch can be put back.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12060/remove-configure-enable-heterogeneous-switch.diff">remove-configure-enable-heterogeneous-switch.diff</a>
</ul>
<!-- attachment="remove-configure-enable-heterogeneous-switch.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12061.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="12059.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Maybe reply:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
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
