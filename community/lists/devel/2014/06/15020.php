<?
$subject_val = "Re: [OMPI devel] r31916  question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 11:43:40 2014" -->
<!-- isoreceived="20140619154340" -->
<!-- sent="Thu, 19 Jun 2014 08:43:37 -0700" -->
<!-- isosent="20140619154337" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r31916  question" -->
<!-- id="825859B3-AAA5-4BE7-A5E6-890602E19258_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20140619154043.GX14410_at_lisas.de" -->
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
<strong>Date:</strong> 2014-06-19 11:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15021.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15019.php">Jeff Squyres (jsquyres): "[OMPI devel] Fortran busted on trunk"</a>
<li><strong>In reply to:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I had slowly been working on repairing it, but will put that on hold until you commit
<br>
<p>On Jun 19, 2014, at 8:40 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The fault tolerance code also needs additional changes because of this
</span><br>
<span class="quotelev1">&gt; commit. I have the changes prepared but not committed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 18, 2014 at 03:45:11PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Huh - thought I got that. Sorry I missed it. Let me take a look and ensure that the alps ras module is setting that attribute
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 18, 2014, at 2:40 PM, Pritchard, Howard P &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;m looking at commit 31916 and notice a lot of fields were remote from orte_node_t.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is now preventing ras_alps_module.c from compiling owing to use of a &#147;launch_id&#148;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; field.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In lieu of the direct use of launch_id, should I replace the code around 587 of this file with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use of orte_get_attribute with ORTE_NODE_LAUNCH_ID for the attribute to be retrieved?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard Pritchard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC-5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15008.php">http://www.open-mpi.org/community/lists/devel/2014/06/15008.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15009.php">http://www.open-mpi.org/community/lists/devel/2014/06/15009.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15018.php">http://www.open-mpi.org/community/lists/devel/2014/06/15018.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15021.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda for next week"</a>
<li><strong>Previous message:</strong> <a href="15019.php">Jeff Squyres (jsquyres): "[OMPI devel] Fortran busted on trunk"</a>
<li><strong>In reply to:</strong> <a href="15018.php">Adrian Reber: "Re: [OMPI devel] r31916  question"</a>
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
