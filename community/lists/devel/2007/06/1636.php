<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 13:29:04 2007" -->
<!-- isoreceived="20070607172904" -->
<!-- sent="Thu, 7 Jun 2007 20:28:58 +0300" -->
<!-- isosent="20070607172858" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768" -->
<!-- id="20070607172858.GA28796_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0A04435F-5872-4EAC-B23E-D71406E732C5_at_cs.utk.edu" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 13:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1637.php">Galen Shipman: "[OMPI devel] BTL Semantics Teleconference: was : Re: [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1633.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1639.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 07, 2007 at 11:11:12AM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; ) I expect you to revise the patch in order to propose a generic  
</span><br>
<span class="quotelev1">&gt; solution or I'll trigger a vote against the patch. I vote to be  
</span><br>
<span class="quotelev1">&gt; backed out of the trunk as it export way to much knowledge from the  
</span><br>
<span class="quotelev1">&gt; Open IB BTL into the PML layer.
</span><br>
The patch solves real problem. If we want to back it out we need to find
<br>
another solution. I also didn't like this change too much, but I thought
<br>
about other solutions and haven't found something better that what
<br>
Galen did. If you have something in mind lets discuss it.
<br>
<p>As a general comment this kind of discussion is why I prefer to send
<br>
significant changes as a patch to the list for discussion before
<br>
committing.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: With Gleb changes the problem is the same. The following snippet  
</span><br>
<span class="quotelev1">&gt; reflect exactly the same behavior as the original patch.
</span><br>
I didn't try to change the semantic. Just make the code to match the
<br>
semantic that Galen described.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1637.php">Galen Shipman: "[OMPI devel] BTL Semantics Teleconference: was : Re: [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Previous message:</strong> <a href="1635.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>In reply to:</strong> <a href="1633.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1638.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<li><strong>Reply:</strong> <a href="1639.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
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
