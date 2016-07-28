<?
$subject_val = "[OMPI devel] Gather(linear_sync) is truncated using derived data type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 00:36:33 2012" -->
<!-- isoreceived="20120116053633" -->
<!-- sent="Mon, 16 Jan 2012 14:36:12 +0900" -->
<!-- isosent="20120116053612" -->
<!-- name="Y.MATSUMOTO" -->
<!-- email="yuki.matsumoto_at_[hidden]" -->
<!-- subject="[OMPI devel] Gather(linear_sync) is truncated using derived data type" -->
<!-- id="4F13B74C.5010200_at_jp.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Gather(linear_sync) is truncated using derived data type<br>
<strong>From:</strong> Y.MATSUMOTO (<em>yuki.matsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 00:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10214.php">George Bosilca: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<li><strong>Reply:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>Next feed back is about MPI_Gather problem.
<br>
<p>Gather may be truncated in following condition:
<br>
1:ompi_coll_tuned_gather_intra_linear_sync is called.
<br>
(message size is over 6000B)
<br>
<p>2:Either send data type or recv data type is derived type and
<br>
other data type is predefined data type.
<br>
<p>Truncated is occurred by attached C file(following output).
<br>
<p>Output:
<br>
*** An error occurred in MPI_Gather
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_TRUNCATE: message truncated
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>In this C program,
<br>
&quot;first_segment_count(variable in ompi_coll_tuned_gather_intra_linear_sync)&quot; is 
<br>
different between root and non-root.
<br>
That makes messages truncated.
<br>
&quot;first_segment_size&quot; can not be dividable by derived data type's size,
<br>
but can dividable by predefined data type's size.
<br>
But we don't solve this problem.
<br>
So, we don't choose linear_sync in coll_tuned_decision_fixed.c.
<br>
<p>Best Regards,
<br>
<p>Yuki MATSUMOTO
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10215/gather.c">gather.c</a>
</ul>
<!-- attachment="gather.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10214.php">George Bosilca: "Re: [OMPI devel] RFC: Support Cross Memory Attach in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<li><strong>Reply:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
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
