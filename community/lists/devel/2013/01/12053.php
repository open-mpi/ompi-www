<?
$subject_val = "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 23:44:46 2013" -->
<!-- isoreceived="20130129044446" -->
<!-- sent="Mon, 28 Jan 2013 20:44:38 -0800" -->
<!-- isosent="20130129044438" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch" -->
<!-- id="1D45A684-3B1D-4008-A777-48707D093DE5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWfwaYOc46Qq9bT_0oUUhwgjxk6JF8uBcPapx+0tS552Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 23:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12054.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Previous message:</strong> <a href="12052.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch"</a>
<li><strong>In reply to:</strong> <a href="12052.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2013, at 7:30 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What if I say it wasn't a &quot;stale&quot; option nobody cares about. You just
</span><br>
<span class="quotelev1">&gt; removed one of the critical pieces of the configury, completely
</span><br>
<span class="quotelev1">&gt; disabling the work of other people.
</span><br>
<p>Well, I would say that (a) the code that these options enabled doesn't even compile any more, and (b) Josh is no longer able to maintain it and agreed with removing the options. And since he was the author, I follow his opinions.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am absolutely sorry that I didn't make it in the 27 minutes you
</span><br>
<span class="quotelev1">&gt; generously provided for comments. Removing from the trunk and pushing
</span><br>
<span class="quotelev1">&gt; it in the 1.7 branch in absolute agreement with yourself and all that
</span><br>
<span class="quotelev1">&gt; in a mere 27 minutes is an absolute feat (and not your first). For
</span><br>
<span class="quotelev1">&gt; some obscure reasons I had the feeling we had some level of protection
</span><br>
<span class="quotelev1">&gt; (gk, rm, a reasonable amount of time to people to comment), but I
</span><br>
<span class="quotelev1">&gt; guess those rules are for weaklings.
</span><br>
<p>No, but since you make no effort to contribute, I generally don't worry about waiting for your input. Josh wrote the code, attends the weekly telecons, and participates in the decisions far more than you do. Hence, I pay attention to his input.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: I have so much fun reading a barely 3-weeks old thread on our
</span><br>
<span class="quotelev1">&gt; mailing list. Absolutely terrific:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/01/11901.php">http://www.open-mpi.org/community/lists/devel/2013/01/11901.php</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 28, 2013 at 9:22 PM, Open MPI &lt;bugs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; #3489: Move r27954 to v1.7 branch
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------+---------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Reporter:  rhc                     |       Owner:  rhc
</span><br>
<span class="quotelev2">&gt;&gt;    Type:  changeset move request  |      Status:  closed
</span><br>
<span class="quotelev2">&gt;&gt; Priority:  major                   |   Milestone:  Open MPI 1.7
</span><br>
<span class="quotelev2">&gt;&gt; Version:  trunk                   |  Resolution:  fixed
</span><br>
<span class="quotelev2">&gt;&gt; Keywords:                          |
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------+---------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Changes (by rhc):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * status:  new =&gt; closed
</span><br>
<span class="quotelev2">&gt;&gt; * resolution:   =&gt; fixed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comment:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (In [27957]) Fixes #3489: Move r27954 to v1.7 branch
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; r27954 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; Remove stale ft options.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr:v1.7
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3489#comment:1">https://svn.open-mpi.org/trac/ompi/ticket/3489#comment:1</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; bugs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; bugs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
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
<li><strong>Next message:</strong> <a href="12054.php">Paul Hargrove: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<li><strong>Previous message:</strong> <a href="12052.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch"</a>
<li><strong>In reply to:</strong> <a href="12052.php">George Bosilca: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3489: Move r27954 to v1.7 branch"</a>
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
