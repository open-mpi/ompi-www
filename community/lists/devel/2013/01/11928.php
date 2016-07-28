<?
$subject_val = "[OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 10:38:20 2013" -->
<!-- isoreceived="20130116153820" -->
<!-- sent="Thu, 17 Jan 2013 00:37:28 +0900" -->
<!-- isosent="20130116153728" -->
<!-- name="KAWASHIMA Takahiro" -->
<!-- email="rivis.kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF" -->
<!-- id="20130117003728.03495499ad6cad580bcc7017_at_nifty.com" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF<br>
<strong>From:</strong> KAWASHIMA Takahiro (<em>rivis.kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 10:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11929.php">Gutierrez, Samuel K: "[OMPI devel] Question About &quot;mpi_leaved_pinned 1&quot; Option"</a>
<li><strong>Previous message:</strong> <a href="11927.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc6 now posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11930.php">George Bosilca: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="11930.php">George Bosilca: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've implemented ticket #3123 &quot;MPI-2.2: Ordering of attribution deletion
<br>
callbacks on MPI_COMM_SELF&quot;.
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3123">https://svn.open-mpi.org/trac/ompi/ticket/3123</a>
<br>
<p>As this ticket says, attributes had been stored in unordered hash.
<br>
So I've replaced opal_hash_table_t with opal_list_t and made necessary
<br>
modifications for it. And I've also fixed some multi-threaded concurrent
<br>
(get|set|delete)_attr call issues.
<br>
<p>By this modification, following behavior changes are introduced.
<br>
<p>&nbsp;&nbsp;(A) MPI_(Comm|Type|Win)_(get|set|delete)_attr function may be slower
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for MPI objects that has many attributes attached.
<br>
&nbsp;&nbsp;(B) When the user-defined delete callback function is called, the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attribute is already removed from the list. In other words,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if MPI_(Comm|Type|Win)_get_attr is called by the user-defined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete callback function for the same attribute key, it returns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag = false.
<br>
&nbsp;&nbsp;(C) Even if the user-defined delete callback function returns non-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUCCESS value, the attribute is not reverted to the list.
<br>
<p>(A) is due to a sequential list search instead of a hash. See find_value
<br>
function for its implementation.
<br>
(B) and (C) are due to an atomic deletion of the attribute to allow
<br>
multi-threaded concurrent (get|set|delete)_attr call in MPI_THREAD_MULTIPLE.
<br>
See ompi_attr_delete function for its implementation. I think this does
<br>
not matter because MPI standard doesn't specify behavior in such cases.
<br>
<p>The patch for Open MPI trunk is attached. If you like it, take in
<br>
this patch.
<br>
<p>Though I'm a employee of a company, this is my independent and private
<br>
work at my home. No intellectual property from my company. If needed,
<br>
I'll sign to Individual Contributor License Agreement.
<br>
<p>Regards,
<br>
KAWASHIMA Takahiro
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11928/delete-attr-order.patch.gz">delete-attr-order.patch.gz</a>
</ul>
<!-- attachment="delete-attr-order.patch.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11929.php">Gutierrez, Samuel K: "[OMPI devel] Question About &quot;mpi_leaved_pinned 1&quot; Option"</a>
<li><strong>Previous message:</strong> <a href="11927.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7rc6 now posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11930.php">George Bosilca: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Reply:</strong> <a href="11930.php">George Bosilca: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
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
