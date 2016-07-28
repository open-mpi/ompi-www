<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 17:39:27 2008" -->
<!-- isoreceived="20081204223927" -->
<!-- sent="Thu, 04 Dec 2008 17:38:31 -0500" -->
<!-- isosent="20081204223831" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="C55DC617.2BF20%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25B92349-B673-459E-8DD7-2AAE6FFD495B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Preparations for moving the btl's<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 17:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5004.php">Ralph Castain: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5002.php">Jeff Squyres: "[OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What specifically do you have in mind ?
<br>
<p>After talking with Jeff I withdraw my request to change the approach.  This
<br>
is a good approach when one wants to send warnings to some sort of logging
<br>
system, in addition to errors.  Sending the data up stream like I suggested
<br>
can&#185;t rely on the error return-code, and as such requires a check on every
<br>
return &#173; bad idea.
<br>
<p>If the call is for a discussion beyond this, this is fine with me, but would
<br>
be more useful once a concrete idea on how to implement step 4 is reached.
<br>
If people have specific ideas, an early call would be good, otherwise I
<br>
would expect that early Jan we would be better prepared to talk about
<br>
specifics.
<br>
<p>The copy and branch approach is not practical &#173; it doubles the maintenance
<br>
work, and the point is to leverage on-going work.
<br>
<p>Rich
<br>
<p><p>On 12/4/08 5:15 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The likelihood of a physical meeting about this in the near future is
</span><br>
<span class="quotelev1">&gt; unlikely; I think we're all facing travel restrictions and constraints
</span><br>
<span class="quotelev1">&gt; with the holidays coming up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about a teleconf to discuss the following about the notifier:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - what exactly is there today
</span><br>
<span class="quotelev1">&gt; - why what is there today is the way it is
</span><br>
<span class="quotelev1">&gt; - discuss proposals on different ways to do it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, I think we all agree that the idea of an MPI
</span><br>
<span class="quotelev1">&gt; application notifying a higher-level entity when it detects errors is
</span><br>
<span class="quotelev1">&gt; a good one (e.g., on the host, or in the network, or ...).  I think
</span><br>
<span class="quotelev1">&gt; that it is worth discussing in higher bandwidth so that we can avoid
</span><br>
<span class="quotelev1">&gt; email hell (I agree with Ralph; this could devolve pretty easily).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I propose any of the following times to discuss (I'll setup a phone
</span><br>
<span class="quotelev1">&gt; bridge):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Mon, Dec 8, 2pm, 3pm, or 4pm Eastern
</span><br>
<span class="quotelev1">&gt; - Tue, Dec 9, 10am, noon, 1pm, 2pm, 3pm, or 4pm Eastern
</span><br>
<span class="quotelev1">&gt; - Wed, Dec 10, any time
</span><br>
<span class="quotelev1">&gt; - Thu, Dec 11, 11am, 1pm, 2pm, 3pm, or 4pm Eastern
</span><br>
<span class="quotelev1">&gt; - Fri, Dec 12, 9am, 10am, 11am, 2pm, 3pm, or 4pm Eastern
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2008, at 3:16 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm beginning to believe that we need a design meeting specifically
</span><br>
<span class="quotelev3">&gt;&gt; &gt; over this question. Too many unknowns exist, with significant
</span><br>
<span class="quotelev3">&gt;&gt; &gt; potential problems lurking behind them. Frankly, this issue could
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have a major impact on how we operate, performance, and a variety of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; other factors going forward - many of which may be difficult to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; predict.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I suspect there may not be &quot;optimal&quot; solutions to many of these
</span><br>
<span class="quotelev3">&gt;&gt; &gt; questions, but there certainly will be strong opinions in multiple
</span><br>
<span class="quotelev3">&gt;&gt; &gt; directions.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As part of that discussion, I propose that we consider alternative
</span><br>
<span class="quotelev3">&gt;&gt; &gt; methods for meeting the same overall objective - namely, reuse of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the BTL's by another software project. For example, a simple copy-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and-branch is the dominant method today, with patches used by both
</span><br>
<span class="quotelev3">&gt;&gt; &gt; parties to cherry-pick the changes they want from the other code
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users. Multiple tools have been developed to support this mode of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; operation, yet we haven't discussed any of them in this context. The
</span><br>
<span class="quotelev3">&gt;&gt; &gt; proposed approach contains a number of impacts that may be avoided
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with an alternative approach.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Without such a meeting, I fear we are going to rapidly dissolve into
</span><br>
<span class="quotelev3">&gt;&gt; &gt; email hell again.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Dec 4, 2008, at 1:07 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; I expect this will involve some sort of well defined interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; between the btl&#185;s and orte, and I don&#185;t know if this will also
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; require something like this between the btl&#185;s and the pml &#173; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt; think that interface is rigidly enforced, but am not sure.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I'm probably missing the scope of what you're saying here, but it
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; raises another question in my mind.  Is there today a well-defined
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; interface between the BTLs and... anything else?  PML or whatever?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Maybe this comes back to a documentation question:  do we (or will
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; we) have anything written down that says what a BTL must do, what
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; it may rely on, etc.?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5004.php">Ralph Castain: "Re: [OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5002.php">Jeff Squyres: "[OMPI devel] Jan ORTE meeting"</a>
<li><strong>In reply to:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
