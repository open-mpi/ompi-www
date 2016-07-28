<?
$subject_val = "Re: [OMPI devel] r31916  question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:45:06 2014" -->
<!-- isoreceived="20140619154506" -->
<!-- sent="Thu, 19 Jun 2014 08:45:03 -0700" -->
<!-- isosent="20140619154503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r31916  question" -->
<!-- id="6ADC8B1F-1BF3-4347-B8EB-9493536DCCDE_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05A9E60B_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-19 11:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15023.php">Edgar Gabriel: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15021.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda for next week"</a>
<li><strong>In reply to:</strong> <a href="15017.php">Pritchard, Howard P: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, ORTE (nor OMPI) makes no such assumption. That's up to the scheduler. We will launch a separate orted for each job, though, to avoid cross-contamination
<br>
<p>On Jun 19, 2014, at 8:00 AM, Pritchard, Howard P &lt;howardp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the explanation.  Does ORTE/OMPI always assume that for multi-node jobs,
</span><br>
<span class="quotelev1">&gt; there will only be one user&#146;s job/node?    At my previous employer we were having
</span><br>
<span class="quotelev1">&gt; to do some changes to runtime components in order to support slurm, for which the customers&#146;
</span><br>
<span class="quotelev1">&gt; default settings was to prefer filling of nodes with jobs even if that meant multi-node
</span><br>
<span class="quotelev1">&gt; jobs of different users were intermingled within nodes.  The customers did not want
</span><br>
<span class="quotelev1">&gt; to have to use the exclusive option.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just a heads up if folks who are working on cray xe/xc systems are making assumptions
</span><br>
<span class="quotelev1">&gt; that the way things work now with aprun will hold true going forwards.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 18, 2014 5:00 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] r31916 question
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You know, looking at the code and the comments, the rationale for putting the nids in order was to prep the list for the regex generator. If you look in the plm_ras_module, you'll see that we pass the nodelist to orte_plm_base_orted_append_basic_args. ORNL used static ports for alps to get better scaling, and so that function creates a regular expression from the nodelist. We then pass that to each orted upon launch so it can compute the URI for all other orteds in the system, thus allowing it to connect back to mpirun thru the routing tree (instead of making a direct connection).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2014, at 3:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, I see - yes, you'd get_attribute to retrieve it. Alternatively, you have it sitting right there in an array, so you could just use the array to order the list
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2014, at 3:47 PM, Pritchard, Howard P &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It is setting the attribute, but then for some reason there seems to be a need to have the node ids (nids) in
</span><br>
<span class="quotelev1">&gt; ascending order, so there&#146;s some code looking at the old launch_id field, which no longer exists.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m fixing it.  I&#146;d like to learn the cycle of getting fixes in to trunk.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 18, 2014 4:45 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] r31916 question
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Huh - thought I got that. Sorry I missed it. Let me take a look and ensure that the alps ras module is setting that attribute
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2014, at 2:40 PM, Pritchard, Howard P &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Folks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m looking at commit 31916 and notice a lot of fields were remote from orte_node_t.
</span><br>
<span class="quotelev1">&gt; This is now preventing ras_alps_module.c from compiling owing to use of a &#147;launch_id&#148;
</span><br>
<span class="quotelev1">&gt; field.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In lieu of the direct use of launch_id, should I replace the code around 587 of this file with
</span><br>
<span class="quotelev1">&gt; use of orte_get_attribute with ORTE_NODE_LAUNCH_ID for the attribute to be retrieved?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-5
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15008.php">http://www.open-mpi.org/community/lists/devel/2014/06/15008.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15010.php">http://www.open-mpi.org/community/lists/devel/2014/06/15010.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15017.php">http://www.open-mpi.org/community/lists/devel/2014/06/15017.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15023.php">Edgar Gabriel: "Re: [OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15021.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda for next week"</a>
<li><strong>In reply to:</strong> <a href="15017.php">Pritchard, Howard P: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
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
