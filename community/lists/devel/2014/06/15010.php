<?
$subject_val = "Re: [OMPI devel] r31916  question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 18:47:45 2014" -->
<!-- isoreceived="20140618224745" -->
<!-- sent="Wed, 18 Jun 2014 22:47:44 +0000" -->
<!-- isosent="20140618224744" -->
<!-- name="Pritchard, Howard P" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r31916  question" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05A9E56C_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AFBC9904-E90F-4F7B-971D-D2EB977194D6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r31916  question<br>
<strong>From:</strong> Pritchard, Howard P (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-18 18:47:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15011.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>In reply to:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15011.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Reply:</strong> <a href="15011.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>It is setting the attribute, but then for some reason there seems to be a need to have the node ids (nids) in
<br>
ascending order, so there's some code looking at the old launch_id field, which no longer exists.
<br>
<p>I'm fixing it.  I'd like to learn the cycle of getting fixes in to trunk.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, June 18, 2014 4:45 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] r31916 question
<br>
<p>Huh - thought I got that. Sorry I missed it. Let me take a look and ensure that the alps ras module is setting that attribute
<br>
<p>On Jun 18, 2014, at 2:40 PM, Pritchard, Howard P &lt;howardp_at_[hidden]&lt;mailto:howardp_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hello Folks,
<br>
<p>I'm looking at commit 31916 and notice a lot of fields were remote from orte_node_t.
<br>
This is now preventing ras_alps_module.c from compiling owing to use of a &quot;launch_id&quot;
<br>
field.
<br>
<p>In lieu of the direct use of launch_id, should I replace the code around 587 of this file with
<br>
use of orte_get_attribute with ORTE_NODE_LAUNCH_ID for the attribute to be retrieved?
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15008.php">http://www.open-mpi.org/community/lists/devel/2014/06/15008.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15011.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>In reply to:</strong> <a href="15009.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15011.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Reply:</strong> <a href="15011.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
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
