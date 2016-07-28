<?
$subject_val = "[OMPI devel] RFC: ob1: fallback on put/send on rget failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 17:07:54 2012" -->
<!-- isoreceived="20120315210754" -->
<!-- sent="Thu, 15 Mar 2012 15:07:49 -0600 (MDT)" -->
<!-- isosent="20120315210749" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: ob1: fallback on put/send on rget failure" -->
<!-- id="alpine.OSX.2.00.1203151451370.81297_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: ob1: fallback on put/send on rget failure<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 17:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10736.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Update ob1 to do the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- fallback on send after rdma_put_retries_limit failures of prepare_dst
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- fallback on put (single non-pipelined) if the btl returns OMPI_ERR_NOT_AVAILABLE on a get transaction.
<br>
<p>When: Timeout in about one week (Mar 22)
<br>
<p>Why: Two reasons:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Some btls (ugni) need to switch to put for certain transactions. It makes sense to make this switch at the pml level.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- If prepare_dst repeatedly fails for a get transaction we currently deadlock. We can avoid the deadlock (in most cases) by switching to send for the transaction.
<br>
<p>Please take a look at the attached patch. Feedback and constructive criticism is needed!
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>

<br><hr>
<ul>
<li>APPLICATION/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10717/ompi_trunk_ob1_get_fallback.patch.gz">ompi_trunk_ob1_get_fallback.patch.gz</a>
</ul>
<!-- attachment="ompi_trunk_ob1_get_fallback.patch.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Previous message:</strong> <a href="10716.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10718.php">Shamis, Pavel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10736.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
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
