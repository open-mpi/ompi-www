<?
$subject_val = "[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 10:22:09 2013" -->
<!-- isoreceived="20130702142209" -->
<!-- sent="Tue, 2 Jul 2013 16:22:02 +0200" -->
<!-- isosent="20130702142202" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument" -->
<!-- id="DFA3E250-31E5-41A8-8E4A-63928C0CFFA2_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 10:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12519.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28694 - in trunk/ompi/mca/coll/hcoll: . .deps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our macros for the OMPI-level free list had one extra argument, a possible return value to signal that the operation of retrieving the element from the free list failed. However in this case the returned pointer was set to NULL as well, so the error code was redundant. Moreover, this was a continuous source of warnings when the picky mode was on.
<br>
<p>The attached parch remove the rc argument from the OMPI_FREE_LIST_GET and OMPI_FREE_LIST_WAIT macros, and change to check if the item is NULL instead of using the return code.
<br>
<p>Deadline: July 4th
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12520/free_list_get.patch">free_list_get.patch</a>
</ul>
<!-- attachment="free_list_get.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Previous message:</strong> <a href="12519.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28694 - in trunk/ompi/mca/coll/hcoll: . .deps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<li><strong>Reply:</strong> <a href="12521.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
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
