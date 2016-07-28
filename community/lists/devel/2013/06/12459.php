<?
$subject_val = "[OMPI devel] Update IMB in ompi-tests";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 11:57:26 2013" -->
<!-- isoreceived="20130614155726" -->
<!-- sent="Fri, 14 Jun 2013 15:57:17 +0000" -->
<!-- isosent="20130614155717" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Update IMB in ompi-tests" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6866CA_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Update IMB in ompi-tests<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 11:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>Previous message:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>Reply:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see we have 2 versions of IMB in the ompi-tests SVN repo: 3.2, and 3.2.3.
<br>
<p>I'm going to update the version to 3.2.4 and remove the other two copies (IMB_3.2 and imb_3.2.3).  The new directory will be version-independent so that we don't have to do an announcement when updating the version again:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/imb">https://svn.open-mpi.org/svn/ompi-tests/trunk/imb</a>
<br>
<p>*** THIS CHANGE WILL AFFECT YOUR MTT CONFIGURATIONS!
<br>
<p>I'll do this change after the teleconf this upcoming Tuesday (June 18) to give everyone time to prepare.
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
<li><strong>Next message:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>Previous message:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>Reply:</strong> <a href="12460.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
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
