<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 17:15:35 2008" -->
<!-- isoreceived="20081204221535" -->
<!-- sent="Thu, 4 Dec 2008 17:15:29 -0500" -->
<!-- isosent="20081204221529" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="25B92349-B673-459E-8DD7-2AAE6FFD495B_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="F62BE827-783C-46D4-96CD-03D5BE98B4CA_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 17:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5002.php">Jeff Squyres: "[OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5000.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="5000.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5003.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="5003.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The likelihood of a physical meeting about this in the near future is  
<br>
unlikely; I think we're all facing travel restrictions and constraints  
<br>
with the holidays coming up.
<br>
<p>How about a teleconf to discuss the following about the notifier:
<br>
<p>- what exactly is there today
<br>
- why what is there today is the way it is
<br>
- discuss proposals on different ways to do it
<br>
<p>More specifically, I think we all agree that the idea of an MPI  
<br>
application notifying a higher-level entity when it detects errors is  
<br>
a good one (e.g., on the host, or in the network, or ...).  I think  
<br>
that it is worth discussing in higher bandwidth so that we can avoid  
<br>
email hell (I agree with Ralph; this could devolve pretty easily).
<br>
<p>I propose any of the following times to discuss (I'll setup a phone  
<br>
bridge):
<br>
<p>- Mon, Dec 8, 2pm, 3pm, or 4pm Eastern
<br>
- Tue, Dec 9, 10am, noon, 1pm, 2pm, 3pm, or 4pm Eastern
<br>
- Wed, Dec 10, any time
<br>
- Thu, Dec 11, 11am, 1pm, 2pm, 3pm, or 4pm Eastern
<br>
- Fri, Dec 12, 9am, 10am, 11am, 2pm, 3pm, or 4pm Eastern
<br>
<p><p><p><p>On Dec 4, 2008, at 3:16 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm beginning to believe that we need a design meeting specifically  
</span><br>
<span class="quotelev1">&gt; over this question. Too many unknowns exist, with significant  
</span><br>
<span class="quotelev1">&gt; potential problems lurking behind them. Frankly, this issue could  
</span><br>
<span class="quotelev1">&gt; have a major impact on how we operate, performance, and a variety of  
</span><br>
<span class="quotelev1">&gt; other factors going forward - many of which may be difficult to  
</span><br>
<span class="quotelev1">&gt; predict.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect there may not be &quot;optimal&quot; solutions to many of these  
</span><br>
<span class="quotelev1">&gt; questions, but there certainly will be strong opinions in multiple  
</span><br>
<span class="quotelev1">&gt; directions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As part of that discussion, I propose that we consider alternative  
</span><br>
<span class="quotelev1">&gt; methods for meeting the same overall objective - namely, reuse of  
</span><br>
<span class="quotelev1">&gt; the BTL's by another software project. For example, a simple copy- 
</span><br>
<span class="quotelev1">&gt; and-branch is the dominant method today, with patches used by both  
</span><br>
<span class="quotelev1">&gt; parties to cherry-pick the changes they want from the other code  
</span><br>
<span class="quotelev1">&gt; users. Multiple tools have been developed to support this mode of  
</span><br>
<span class="quotelev1">&gt; operation, yet we haven't discussed any of them in this context. The  
</span><br>
<span class="quotelev1">&gt; proposed approach contains a number of impacts that may be avoided  
</span><br>
<span class="quotelev1">&gt; with an alternative approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without such a meeting, I fear we are going to rapidly dissolve into  
</span><br>
<span class="quotelev1">&gt; email hell again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2008, at 1:07 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I expect this will involve some sort of well defined interface  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the btl&#146;s and orte, and I don&#146;t know if this will also  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; require something like this between the btl&#146;s and the pml &#150; I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think that interface is rigidly enforced, but am not sure.
</span><br>
<span class="quotelev2">&gt;&gt; I'm probably missing the scope of what you're saying here, but it  
</span><br>
<span class="quotelev2">&gt;&gt; raises another question in my mind.  Is there today a well-defined  
</span><br>
<span class="quotelev2">&gt;&gt; interface between the BTLs and... anything else?  PML or whatever?   
</span><br>
<span class="quotelev2">&gt;&gt; Maybe this comes back to a documentation question:  do we (or will  
</span><br>
<span class="quotelev2">&gt;&gt; we) have anything written down that says what a BTL must do, what  
</span><br>
<span class="quotelev2">&gt;&gt; it may rely on, etc.?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5002.php">Jeff Squyres: "[OMPI devel] Jan ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5000.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="5000.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5003.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="5003.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
