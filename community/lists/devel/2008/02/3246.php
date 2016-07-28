<?
$subject_val = "[OMPI devel] rhc-step2b compile failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 09:11:11 2008" -->
<!-- isoreceived="20080214141111" -->
<!-- sent="Thu, 14 Feb 2008 09:10:48 -0500" -->
<!-- isosent="20080214141048" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] rhc-step2b compile failures" -->
<!-- id="D6C6735E-26DE-4633-829A-9F71855E990A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] rhc-step2b compile failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-14 09:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3245.php">Jeff Squyres: "[OMPI devel] --with-visibility"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like these compile failures last night:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=531">http://www.open-mpi.org/mtt/index.php?do_redir=531</a>
<br>
<p>Were caused by a missing header file in the openib btl that propagated  
<br>
down with Ralph's merge yesterday.
<br>
<p>I fixed it with r17453 on the trunk.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3247.php">Ralph H Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3245.php">Jeff Squyres: "[OMPI devel] --with-visibility"</a>
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
