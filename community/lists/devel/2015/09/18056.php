<?
$subject_val = "[OMPI devel] --enable-spare-groups build broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 22:13:22 2015" -->
<!-- isoreceived="20150917021322" -->
<!-- sent="Thu, 17 Sep 2015 02:13:19 +0000" -->
<!-- isosent="20150917021319" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] --enable-spare-groups build broken" -->
<!-- id="7EDCC9A8-6378-4493-AE7E-D36C8439738F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] --enable-spare-groups build broken<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 22:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>Previous message:</strong> <a href="18055.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>Reply:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did something change in the group structure in the last 24-48 hours?
<br>

<br>
--enable-spare-groups groups are currently broken:
<br>

<br>
----
<br>
make[2]: Entering directory `/home/jsquyres/git/ompi/ompi/debuggers'
<br>
&nbsp;&nbsp;CC       libdebuggers_la-ompi_debuggers.lo
<br>
In file included from ../../ompi/communicator/communicator.h:38:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../ompi/mca/pml/base/pml_base_request.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ompi_debuggers.c:67:
<br>
../../ompi/group/group.h: In function &#226;&#128;&#152;ompi_group_get_proc_ptr&#226;&#128;&#153;:
<br>
../../ompi/group/group.h:366:52: error: &#226;&#128;&#152;peer_id&#226;&#128;&#153; undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ompi_group_dense_lookup (group, peer_id, allocate);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../ompi/group/group.h:366:52: note: each undeclared identifier is reported only once for each function it appears in 
<br>
-----
<br>

<br>
Can someone have a look?
<br>

<br>
Thanks.
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>Previous message:</strong> <a href="18055.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>Reply:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
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
