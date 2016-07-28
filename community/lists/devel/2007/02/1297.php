<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 21:37:18 2007" -->
<!-- isoreceived="20070214023718" -->
<!-- sent="Tue, 13 Feb 2007 19:37:05 -0700" -->
<!-- isosent="20070214023705" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644" -->
<!-- id="1A1E4E2B-6DAE-4382-A82D-5560E04EA768_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="550B1E23-8E5B-43A0-947B-BEC4C5AF6C8D_at_cisco.com" -->
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
<strong>Date:</strong> 2007-02-13 21:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1298.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Previous message:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>In reply to:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1298.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Reply:</strong> <a href="1298.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2007, at 5:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 13, 2007, at 7:10 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's already in the 1.2 !!! I don't know much you care about
</span><br>
<span class="quotelev2">&gt;&gt; performance, but I do. This patch increase by 10% the latency. It
</span><br>
<span class="quotelev2">&gt;&gt; might be correct for the pathscale compiler, but it didn't look as a
</span><br>
<span class="quotelev2">&gt;&gt; huge requirement for all others compilers. A memory barrier for an
</span><br>
<span class="quotelev2">&gt;&gt; initialization and an unlock definitively looks like killing an ant
</span><br>
<span class="quotelev2">&gt;&gt; with a nuclear strike.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we roll this back and find some other way?
</span><br>
<p>Yes, we can.
<br>
<p>It's not actually the memory barrier we need, it's the tell the  
<br>
compiler to not do anything stupid because we expect memory to be  
<br>
invalidated that we need.  I'll commit a new, different fix tonight.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1298.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Previous message:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>In reply to:</strong> <a href="1296.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1298.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
<li><strong>Reply:</strong> <a href="1298.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13644"</a>
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
