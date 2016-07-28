<?
$subject_val = "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 17:14:27 2012" -->
<!-- isoreceived="20120315211427" -->
<!-- sent="Thu, 15 Mar 2012 17:14:22 -0400" -->
<!-- isosent="20120315211422" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure" -->
<!-- id="CAB18628-CBB1-418A-9700-0BE19C16D4AA_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1203151451370.81297_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 17:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Previous message:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>In reply to:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>I did not get any patch.
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Mar 15, 2012, at 5:07 PM, Nathan Hjelm wrote:
&gt; 
&gt; 
&gt; What: Update ob1 to do the following:
&gt;        - fallback on send after rdma_put_retries_limit failures of prepare_dst
&gt;        - fallback on put (single non-pipelined) if the btl returns OMPI_ERR_NOT_AVAILABLE on a get transaction.
&gt; 
&gt; When: Timeout in about one week (Mar 22)
&gt; 
&gt; Why: Two reasons:
&gt;        - Some btls (ugni) need to switch to put for certain transactions. It makes sense to make this switch at the pml level.
&gt;        - If prepare_dst repeatedly fails for a get transaction we currently deadlock. We can avoid the deadlock (in most cases) by switching to send for the transaction.
&gt; 
&gt; Please take a look at the attached patch. Feedback and constructive criticism is needed!
&gt; 
&gt; -Nathan Hjelm
&gt; HPC-3, LANL
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10719.php">Ralph Castain: "Re: [OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Previous message:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>In reply to:</strong> <a href="10717.php">Nathan Hjelm: "[OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
<li><strong>Reply:</strong> <a href="10732.php">Christopher Samuel: "Re: [OMPI devel] RFC: ob1: fallback on put/send on rget failure"</a>
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
