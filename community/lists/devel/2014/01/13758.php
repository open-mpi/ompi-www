<?
$subject_val = "[OMPI devel] Padding on ompi_predefined_datatype_t running out";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 11:10:40 2014" -->
<!-- isoreceived="20140113161040" -->
<!-- sent="Mon, 13 Jan 2014 16:10:38 +0000" -->
<!-- isosent="20140113161038" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Padding on ompi_predefined_datatype_t running out" -->
<!-- id="FDE6B32B-CFD6-4B1A-B854-C2DB0E288FFA_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Padding on ompi_predefined_datatype_t running out<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 11:10:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13757.php">Oscar Vega-Gisbert: "Re: [OMPI devel] On the Java binding for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Reply:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed the following this morning:
<br>
<p>&nbsp;* sizeof(ompi_predefined_datatype_t): 512
<br>
&nbsp;* sizeof(ompi_datatype_t): 488
<br>
&nbsp;* padding left: 24
<br>
<p>Do we need to increase the size of padding for predefined communicators for v1.9?
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
<li><strong>Next message:</strong> <a href="13759.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13757.php">Oscar Vega-Gisbert: "Re: [OMPI devel] On the Java binding for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Reply:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
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
