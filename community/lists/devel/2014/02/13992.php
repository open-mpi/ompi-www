<?
$subject_val = "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  4 09:16:34 2014" -->
<!-- isoreceived="20140204141634" -->
<!-- sent="Tue, 4 Feb 2014 15:16:34 +0100" -->
<!-- isosent="20140204141634" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code" -->
<!-- id="20140204141634.GA4981_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E4422776-1DD7-4491-B987-4AC047AB3E20_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-04 09:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13993.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Previous message:</strong> <a href="13991.php">Ralph Castain: "[OMPI devel] 1.7.4: last call"</a>
<li><strong>In reply to:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for spotting the 'printf'. I removed it as it was for debugging
<br>
in a very early stage. I committed the patch without the 'printf' to svn.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>On Mon, Feb 03, 2014 at 12:42:39PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Looks okay to me - I see you left a &quot;printf&quot; statement in plm_base_launch_support.c, so you might want to make that an opal_output_verbose or something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2014, at 12:19 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This patch
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=14ec7f42baab882e345948ff79c4f75f5084bbbf">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=14ec7f42baab882e345948ff79c4f75f5084bbbf</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; introduces unique collective ids for the checkpoint/restart code and
</span><br>
<span class="quotelev2">&gt; &gt; with this applied it seems to work pretty good. As this patch also
</span><br>
<span class="quotelev2">&gt; &gt; touches non-CR code it would be good if someone could have a look at it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With this patch applied the code seems to work up to the point where
</span><br>
<span class="quotelev2">&gt; &gt; orterun actually pauses all processes and tries to create the
</span><br>
<span class="quotelev2">&gt; &gt; checkpoints. The checkpoint creation does not work for me as CRS does
</span><br>
<span class="quotelev2">&gt; &gt; not yet include support for checkpoint/restart using CRIU which would be
</span><br>
<span class="quotelev2">&gt; &gt; my next step.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13993.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Previous message:</strong> <a href="13991.php">Ralph Castain: "[OMPI devel] 1.7.4: last call"</a>
<li><strong>In reply to:</strong> <a href="13985.php">Ralph Castain: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
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
