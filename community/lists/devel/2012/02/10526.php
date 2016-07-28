<?
$subject_val = "[OMPI devel] Invalid format strings in ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 19:23:18 2012" -->
<!-- isoreceived="20120221002318" -->
<!-- sent="Mon, 20 Feb 2012 16:23:05 -0800" -->
<!-- isosent="20120221002305" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Invalid format strings in ROMIO" -->
<!-- id="4F42E3E9.6060907_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Invalid format strings in ROMIO<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 19:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10527.php">Jeffrey Squyres: "Re: [OMPI devel] Invalid format strings in ROMIO"</a>
<li><strong>Previous message:</strong> <a href="10525.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10527.php">Jeffrey Squyres: "Re: [OMPI devel] Invalid format strings in ROMIO"</a>
<li><strong>Reply:</strong> <a href="10527.php">Jeffrey Squyres: "Re: [OMPI devel] Invalid format strings in ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both the v1.5 branch and trunk are getting lots of warnings from Clang 
<br>
like the following:
<br>
<span class="quotelev1">&gt;   CC     ad_coll_exch_new.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/io/romio/romio/adio/common/ad_coll_exch_new.c:51:28: 
</span><br>
<span class="quotelev1">&gt; warning: length modifier
</span><br>
<span class="quotelev1">&gt;  'L' results in undefined behavior or no effect with 'd' conversion 
</span><br>
<span class="quotelev1">&gt; specifier [-Wformat]
</span><br>
<span class="quotelev1">&gt;             fprintf(stderr, &quot;%d=(%Ld,%Ld)\n&quot;, i, 
</span><br>
<span class="quotelev1">&gt; flatlist_node_p-&gt;indices[i],
</span><br>
<p>Manpages from both Linux (glibc) and FreeBSD (NOT glibc) agree that &quot;L&quot; 
<br>
is only a valid length modifier for the floating-point conversion 
<br>
specifiers.
<br>
<p>Grepping both v1.5 and trunk show instances of &quot;%Ld&quot; in:
<br>
<p>ompi/mca/io/romio/romio/adio/common/ad_write_nolock.c
<br>
ompi/mca/io/romio/romio/adio/common/ad_coll_build_req_new.c
<br>
ompi/mca/io/romio/romio/adio/common/ad_coll_exch_new.c
<br>
ompi/mca/io/romio/romio/adio/ad_gridftp/ad_gridftp_write.c
<br>
ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2_io_dtype.c
<br>
ompi/mca/io/romio/romio/adio/ad_pvfs2/ad_pvfs2_io_list.c
<br>
<p>Not sure how much one cares, but I am reporting on the off chance 
<br>
somebody does want to fix this.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10527.php">Jeffrey Squyres: "Re: [OMPI devel] Invalid format strings in ROMIO"</a>
<li><strong>Previous message:</strong> <a href="10525.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10527.php">Jeffrey Squyres: "Re: [OMPI devel] Invalid format strings in ROMIO"</a>
<li><strong>Reply:</strong> <a href="10527.php">Jeffrey Squyres: "Re: [OMPI devel] Invalid format strings in ROMIO"</a>
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
