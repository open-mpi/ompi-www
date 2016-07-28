<?
$subject_val = "[OMPI devel] XRC_INI QPs and modify_qp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 06:58:07 2016" -->
<!-- isoreceived="20160701105807" -->
<!-- sent="Fri, 1 Jul 2016 12:57:59 +0200" -->
<!-- isosent="20160701105759" -->
<!-- name="H&#195;&#165;kon Bugge" -->
<!-- email="hakon.bugge_at_[hidden]" -->
<!-- subject="[OMPI devel] XRC_INI QPs and modify_qp" -->
<!-- id="990F2F6D-5069-4EAD-8EFE-05983C7E06FA_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] XRC_INI QPs and modify_qp<br>
<strong>From:</strong> H&#195;&#165;kon Bugge (<em>hakon.bugge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-01 06:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19143.php">Jeff Squyres (jsquyres): "[OMPI devel] Are you coming to the August OMPI meeting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
<li><strong>Reply:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To me, it looks like Open MPI in xoob_send_qp_connect() attempts to set the max_dest_rd_atomic attribute in the transition from INIT to RTR, even for XRC_INI QPs. This is illegal, according to the ib_modify_qp_is_ok() function in ib_core. In particular, IBV_QP_MAX_DEST_RD_ATOMIC is not part of either the required nor optional set of attributes for this transition for XRC_INI QPs.
<br>
<p><p><p>Thxs, H&#195;&#165;kon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19143.php">Jeff Squyres (jsquyres): "[OMPI devel] Are you coming to the August OMPI meeting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
<li><strong>Reply:</strong> <a href="19145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] XRC_INI QPs and modify_qp"</a>
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
