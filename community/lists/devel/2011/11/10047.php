<?
$subject_val = "[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 19:33:11 2011" -->
<!-- isoreceived="20111201003311" -->
<!-- sent="Wed, 30 Nov 2011 17:33:07 -0700 (MST)" -->
<!-- isosent="20111201003307" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Fix for 2157 (mpool/rdma change)" -->
<!-- id="alpine.OSX.2.00.1111301720360.68631_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 19:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>Previous message:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>Reply:</strong> <a href="10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is a fix for ticket 2157. Changes:
<br>
&nbsp;&nbsp;- Rename the mru_list to lru_list. lru_list make more sense as it is a list of the Least Recently Used cached registrations.
<br>
&nbsp;&nbsp;- If a memory registration fails because we are out of resources deregister the least recently used cached registration and try again. Give up when the lru is empty.
<br>
<p>This patch addresses 2157 but it might also have a positive impact on a number of other tickets related to the exhaustion of registered memory.
<br>
<p>If there are no objections I will apply this change to the trunk and CMR it to 1.4.5 and 1.5.4.
<br>
<p>Timeout: 7 days, Dec 7, 2011
<br>
<p>What: fix for ticket 2157
<br>
<p>Question? Comments? Objections?
<br>
<p>-Nathan
<br>

<br><hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10047/mpool.patch">mpool.patch</a>
</ul>
<!-- attachment="mpool.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>Previous message:</strong> <a href="10046.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: new btl descriptor flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
<li><strong>Reply:</strong> <a href="10048.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fix for 2157 (mpool/rdma change)"</a>
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
