<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 15:03:11 2007" -->
<!-- isoreceived="20070527190311" -->
<!-- sent="Sun, 27 May 2007 13:03:06 -0600 (MDT)" -->
<!-- isosent="20070527190306" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782" -->
<!-- id="53301.128.165.0.81.1180292586.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070527184840.GB24278_at_minantech.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 15:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>In reply to:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Sun, May 27, 2007 at 10:34:33AM -0600, Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, we still need  MCA_BTL_FLAGS_FAKE_RDMA , it can be used as
</span><br>
<span class="quotelev2">&gt;&gt; a hint for components such as one-sided.
</span><br>
<span class="quotelev1">&gt; What is the purpose of the hint if it should be set for each interconnect.
</span><br>
<span class="quotelev1">&gt; Just assume that it is set and behave accordingly. That what we decided
</span><br>
<span class="quotelev1">&gt; to do in OB1. And the name is not very good too :) All RDMA networks
</span><br>
<span class="quotelev1">&gt; behave like this.
</span><br>
<p>Yeah, I agree -- the current semantics aren't very useful anymore.  I'd
<br>
actually like to just redefine the FAKE_RDMA flag's meaning.  Some of the
<br>
BTLs assume that there will be one set of prepare_src / prepare_dst calls
<br>
for each put/get call.  This won't work for one-sided RDMA, were we'll
<br>
call prepare_dst at window creation time and reuse it.  I'd like to have
<br>
FAKE_RDMA set for those BTLs.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>In reply to:</strong> <a href="1588.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
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
