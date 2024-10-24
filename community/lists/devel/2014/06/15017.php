<?
$subject_val = "Re: [OMPI devel] r31916  question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:00:50 2014" -->
<!-- isoreceived="20140619150050" -->
<!-- sent="Thu, 19 Jun 2014 15:00:48 +0000" -->
<!-- isosent="20140619150048" -->
<!-- name="Pritchard, Howard P" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r31916  question" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05A9E60B_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FC4224B4-8AC6-4F0A-B453-AEB76204476A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-06-19 11:00:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15012.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15022.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Reply:</strong> <a href="15022.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the explanation.  Does ORTE/OMPI always assume that for multi-node jobs,
<br>
there will only be one user's job/node?    At my previous employer we were having
<br>
to do some changes to runtime components in order to support slurm, for which the customers'
<br>
default settings was to prefer filling of nodes with jobs even if that meant multi-node
<br>
jobs of different users were intermingled within nodes.  The customers did not want
<br>
to have to use the exclusive option.
<br>
<p>Just a heads up if folks who are working on cray xe/xc systems are making assumptions
<br>
that the way things work now with aprun will hold true going forwards.
<br>
<p>Howard
<br>
<p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, June 18, 2014 5:00 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] r31916 question
<br>
<p>You know, looking at the code and the comments, the rationale for putting the nids in order was to prep the list for the regex generator. If you look in the plm_ras_module, you'll see that we pass the nodelist to orte_plm_base_orted_append_basic_args. ORNL used static ports for alps to get better scaling, and so that function creates a regular expression from the nodelist. We then pass that to each orted upon launch so it can compute the URI for all other orteds in the system, thus allowing it to connect back to mpirun thru the routing tree (instead of making a direct connection).
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jun 18, 2014, at 3:55 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Ah, I see - yes, you'd get_attribute to retrieve it. Alternatively, you have it sitting right there in an array, so you could just use the array to order the list
<br>
<p><p>On Jun 18, 2014, at 3:47 PM, Pritchard, Howard P &lt;howardp_at_[hidden]&lt;mailto:howardp_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi Ralph,
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
<p><p><p>Hello Folks,
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15010.php">http://www.open-mpi.org/community/lists/devel/2014/06/15010.php</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15017/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Previous message:</strong> <a href="15016.php">Mike Dubman: "Re: [OMPI devel] Compile OpenMPI with MXM support"</a>
<li><strong>In reply to:</strong> <a href="15012.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15022.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
<li><strong>Reply:</strong> <a href="15022.php">Ralph Castain: "Re: [OMPI devel] r31916  question"</a>
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
