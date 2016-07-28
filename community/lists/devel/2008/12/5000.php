<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 15:16:27 2008" -->
<!-- isoreceived="20081204201627" -->
<!-- sent="Thu, 4 Dec 2008 13:16:19 -0700" -->
<!-- isosent="20081204201619" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="F62BE827-783C-46D4-96CD-03D5BE98B4CA_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="4938389B.3030005_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 15:16:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4999.php">Eugene Loh: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4999.php">Eugene Loh: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm beginning to believe that we need a design meeting specifically  
<br>
over this question. Too many unknowns exist, with significant  
<br>
potential problems lurking behind them. Frankly, this issue could have  
<br>
a major impact on how we operate, performance, and a variety of other  
<br>
factors going forward - many of which may be difficult to predict.
<br>
<p>I suspect there may not be &quot;optimal&quot; solutions to many of these  
<br>
questions, but there certainly will be strong opinions in multiple  
<br>
directions.
<br>
<p>As part of that discussion, I propose that we consider alternative  
<br>
methods for meeting the same overall objective - namely, reuse of the  
<br>
BTL's by another software project. For example, a simple copy-and- 
<br>
branch is the dominant method today, with patches used by both parties  
<br>
to cherry-pick the changes they want from the other code users.  
<br>
Multiple tools have been developed to support this mode of operation,  
<br>
yet we haven't discussed any of them in this context. The proposed  
<br>
approach contains a number of impacts that may be avoided with an  
<br>
alternative approach.
<br>
<p>Without such a meeting, I fear we are going to rapidly dissolve into  
<br>
email hell again.
<br>
<p>Ralph
<br>
<p><p><p>On Dec 4, 2008, at 1:07 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I expect this will involve some sort of well defined interface  
</span><br>
<span class="quotelev2">&gt;&gt; between the btl&#146;s and orte, and I don&#146;t know if this will also  
</span><br>
<span class="quotelev2">&gt;&gt; require something like this between the btl&#146;s and the pml &#150; I think  
</span><br>
<span class="quotelev2">&gt;&gt; that interface is rigidly enforced, but am not sure.
</span><br>
<span class="quotelev1">&gt; I'm probably missing the scope of what you're saying here, but it  
</span><br>
<span class="quotelev1">&gt; raises another question in my mind.  Is there today a well-defined  
</span><br>
<span class="quotelev1">&gt; interface between the BTLs and... anything else?  PML or whatever?   
</span><br>
<span class="quotelev1">&gt; Maybe this comes back to a documentation question:  do we (or will  
</span><br>
<span class="quotelev1">&gt; we) have anything written down that says what a BTL must do, what it  
</span><br>
<span class="quotelev1">&gt; may rely on, etc.?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4999.php">Eugene Loh: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4999.php">Eugene Loh: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="5001.php">Jeff Squyres: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
