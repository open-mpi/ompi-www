<?
$subject_val = "[OMPI devel] knem support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 12:15:31 2014" -->
<!-- isoreceived="20141203171531" -->
<!-- sent="Wed, 3 Dec 2014 09:15:27 -0800" -->
<!-- isosent="20141203171527" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] knem support in sm btl" -->
<!-- id="B3EA5E41-D959-4071-B2DF-6BACE15E8D9D_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] knem support in sm btl<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-03 12:15:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16426.php">Howard Pritchard: "[OMPI devel] jenkins runtime failures"</a>
<li><strong>Previous message:</strong> <a href="16424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked during the telecon about the user-reported issue where they asked for knem support, it wasn&#226;&#128;&#153;t available on the system, but we ran anyway at a reduced performance level. The agreement we had was that OMPI should instead fail at that point since the user had requested something we could not do. I got tasked with implementing this.
<br>
<p>Here is the problem code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* If &quot;use_knem&quot; is positive, then it's an error if knem support
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is not available -- deactivate the sm btl. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mca_btl_sm_component.use_knem &gt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-mpi-btl-sm.txt&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;knem requested but not available&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, opal_process_info.nodename);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
<p>As you can see, we deactivate sm but do not necessarily fail. Question for you folks: how do I cause us to safely fail from within a BTL??
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16426.php">Howard Pritchard: "[OMPI devel] jenkins runtime failures"</a>
<li><strong>Previous message:</strong> <a href="16424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
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
