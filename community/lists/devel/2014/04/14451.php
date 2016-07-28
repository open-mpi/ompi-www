<?
$subject_val = "Re: [OMPI devel] Seeking input for an RFC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 11:21:00 2014" -->
<!-- isoreceived="20140402152100" -->
<!-- sent="Wed, 2 Apr 2014 15:20:55 +0000" -->
<!-- isosent="20140402152055" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seeking input for an RFC" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ED2B106_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3ED2A13B_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Seeking input for an RFC<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-02 11:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14452.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14450.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14439.php">Joshua Ladd: "[OMPI devel] Seeking input for an RFC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For Sandia and LANL's benefit, I am attaching the patch that implements the proposed changes. These are entirely preliminary/in-house changes and should not be considered a production grade solution - I just want to give folks a chance to see the basic ideas. Let me know if you guys need more info.
<br>
<p>Best,
<br>
<p>Josh
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
<br>
Sent: Tuesday, April 01, 2014 11:15 AM
<br>
To: Open MPI Developers (devel_at_[hidden])
<br>
Subject: [OMPI devel] Seeking input for an RFC
<br>
<p>Soliciting input from the community:
<br>
<p><p>WHAT:  Modify PML cm component to remove unnecessary initializations, optimizing blocking operations
<br>
<p>WHY:    Remove overhead in fast-path by allowing a &quot;direct mode&quot; increases single packet latency
<br>
<p>HOW:    In PML cm, even if the request starts and ends within the scope of the blocking send/recv function,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A full request, a structure of up to 488 bytes (not including the MTL request appendix size) may be initialized.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The request includes the opmi_request_t structure, used by an underlying MTL component, the converter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which corresponds to the datatype and other parameters - some of which are stored and only used if the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request is asynchronous. This causes a significant amount of writes, especially when considering the send
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer could be as small as several bytes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The proposed patch introduces a &quot;direct mode&quot; (currently set iff the underlying MTL is &quot;mxm&quot;, which is the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only option I had available for testing), which when on cuts most of the initialization for blocking send and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receive operations to include only the bare minimum required to function. Aside from initializing only a part
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the request structure (field like &quot;dst&quot; and &quot;tag&quot; are passed again to the MTL_CALL macro rather than use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the request struct anyway), the function uses a single pre-allocated request buffer - which is possible since
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the call is blocking. Our tests show that this increases packet rate by approximately 20% with 8-byte buffers.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note that the &quot;redundant&quot; if-conditions for irrelevant functions (e.g. recv_init) are removed by compiler,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;since the macro substitutes and gets &quot;if (0 == 0)&quot;.
<br>
<p>WHERE: Most of the files in ompi/mca/pml/cm .
<br>
<p>WHEN:   ?
<br>
<p><p><p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14451/pml_cm.patch">pml_cm.patch</a>
</ul>
<!-- attachment="pml_cm.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14452.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14450.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14439.php">Joshua Ladd: "[OMPI devel] Seeking input for an RFC"</a>
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
