<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 13:23:10 2007" -->
<!-- isoreceived="20070728172310" -->
<!-- sent="Sat, 28 Jul 2007 11:22:36 -0600" -->
<!-- isosent="20070728172236" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Win_get_group" -->
<!-- id="9C33E756-18DB-4DF9-B5D9-609F92C3E8B0_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1AC162D1-95B2-40D1-AB65-7E083D5B8851_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-28 13:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2007, at 6:27 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 27, 2007, at 8:27 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_WIN_GET_GROUP returns a duplicate of the group of the  
</span><br>
<span class="quotelev2">&gt;&gt; communicator
</span><br>
<span class="quotelev2">&gt;&gt; used to create the window. associated with win. The group is returned
</span><br>
<span class="quotelev2">&gt;&gt; in group.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, it seems OMPI (v1.2 svn) is not returning a duplicate,  
</span><br>
<span class="quotelev2">&gt;&gt; comparing
</span><br>
<span class="quotelev2">&gt;&gt; the handles with == C operator gives true. Can you confirm this?
</span><br>
<span class="quotelev2">&gt;&gt; Should the word 'duplicate' be interpreted as 'a new reference to' ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would tend to agree with this wording; I think we're doing the
</span><br>
<span class="quotelev1">&gt; wrong thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian -- what do you think?
</span><br>
<p>In my opinion, we conform to the standard.  We reference count the  
<br>
group, it's incremented on call to MPI_WIN_GROUP, and you can safely  
<br>
call MPI_GROUP_FREE on the group returned from MPI_WIN_GROUP.  Groups  
<br>
are essentially immutable, so there's no way I can think of that we  
<br>
violate the MPI standard.
<br>
<p>Others are, of course, free to disagree with me.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Reply:</strong> <a href="2041.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
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
