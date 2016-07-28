<?
$subject_val = "[OMPI devel] help-oshmem-shmem.txt still missing in v1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 04:04:18 2015" -->
<!-- isoreceived="20150131090418" -->
<!-- sent="Sat, 31 Jan 2015 10:04:15 +0100" -->
<!-- isosent="20150131090415" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] help-oshmem-shmem.txt still missing in v1.8" -->
<!-- id="54CC9A8F.8010604_at_tu-dresden.de" -->
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
<strong>Subject:</strong> [OMPI devel] help-oshmem-shmem.txt still missing in v1.8<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-31 04:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Previous message:</strong> <a href="16859.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the help-oshmem-shmem.txt is still missing in the v1.8 branch but used 
<br>
by the oshmem component. The fix may be part of 
<br>
be3fc7bf202546a64c299f3055b231edc0985e9e in the 
<br>
oshmem/mca/sshmem/base/Makefile.am. At least this has the diff which 
<br>
matches the current diff between master and v1.8
<br>
<p>$ git diff master:oshmem/mca/sshmem/base/Makefile.am 
<br>
ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
<br>
diff --git a/master:oshmem/mca/sshmem/base/Makefile.am 
<br>
b/ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
<br>
index 9b2af1f..79b11b1 100644 
<br>
ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
<br>
--- a/master:oshmem/mca/sshmem/base/Makefile.am
<br>
+++ b/ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
<br>
@@ -7,8 +7,6 @@
<br>
&nbsp;&nbsp;# $HEADER$
<br>
&nbsp;&nbsp;#
<br>
<p>-dist_oshmemdata_DATA = base/help-oshmem-sshmem.txt
<br>
-
<br>
&nbsp;&nbsp;headers += \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;base/base.h
<br>
<p>Can someone confirm this. It may take a while to test this, as I also 
<br>
have failing shmem programs with 1.8.4 which didn't with 1.8.2.
<br>
<p>Thanks.
<br>
<p>Bert
<br>
<p><p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#195;&#164;t Dresden
Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16860/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Previous message:</strong> <a href="16859.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>Reply:</strong> <a href="16862.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
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
