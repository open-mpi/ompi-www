<?
$subject_val = "[OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 20:27:59 2014" -->
<!-- isoreceived="20140110012759" -->
<!-- sent="Thu, 9 Jan 2014 17:27:32 -0800" -->
<!-- isosent="20140110012732" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc" -->
<!-- id="CAAvDA15uhwB4i7bK3nXviw4Z0+diGFUJ8HynD6Yyea=UJ8_F4g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 20:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13659.php">Paul Hargrove: "[OMPI devel] uDAPL and elan in 1.7.4?"</a>
<li><strong>Previous message:</strong> <a href="13657.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<li><strong>Reply:</strong> <a href="13701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the following means that the compiler has determined that the two
<br>
named variables DO NOT actually get initialized to NULL as written.
<br>
&nbsp;However, it looks like their initialization is not required, as each is
<br>
set before it is read.
<br>
<p>&nbsp;&nbsp;CC       btl_usnic_component.lo
<br>
/scratch/scratchdirs/hargrove/OMPI/openmpi-1.7-latest-linux-x86_64-icc-13/openmpi-1.7.4rc2r30168/ompi/mca/btl/usnic/btl_usnic_component.c(1391):
<br>
warning #589: transfer of control bypasses initialization of:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;variable &quot;ssfrag&quot; (declared at line 1392)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;variable &quot;lsfrag&quot; (declared at line 1393)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (frag-&gt;uf_type) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13659.php">Paul Hargrove: "[OMPI devel] uDAPL and elan in 1.7.4?"</a>
<li><strong>Previous message:</strong> <a href="13657.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
<li><strong>Reply:</strong> <a href="13701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - usnic warning w/ icc"</a>
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
