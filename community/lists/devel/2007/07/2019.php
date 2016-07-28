<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 15:08:12 2007" -->
<!-- isoreceived="20070726190812" -->
<!-- sent="Thu, 26 Jul 2007 13:07:28 -0600" -->
<!-- isosent="20070726190728" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="A50DCBB7-9F82-43AC-8557-DEDAD6FF1B19_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="23970.128.107.248.220.1185476514.squirrel_at_mail.cs.uh.edu" -->
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
<strong>Date:</strong> 2007-07-26 15:07:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 26, 2007, at 1:01 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, July 26, 2007 1:18 pm, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 26, 2007, at 12:00 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) I think it would be better to always have the flags and macros
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available (like OMPI_GROUP_SPORADIC and OMPI_GROUP_IS_SPORADIC)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when sparse groups are disabled.  They dont' take up any space, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mean less #ifs in the general code base
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's what i actually was proposing.. keep the flags (there are no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macros, just the GROUP_GET_PROC_POINTER) and the sparse parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group strucutre, and this will mean, only 1 maybe 2 #ifs..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why would this mean having the sparse parameters in the group  
</span><br>
<span class="quotelev2">&gt;&gt; structure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not sure if i understood your question right, but in the group  
</span><br>
<span class="quotelev1">&gt; struct we
</span><br>
<span class="quotelev1">&gt; added 5 integers and 3 pointer.. if we want to compile these out,  
</span><br>
<span class="quotelev1">&gt; we would
</span><br>
<span class="quotelev1">&gt; then need all the #ifs around the code where we use these parameters..
</span><br>
<p>I don't follow why you would need all the sparse stuff in  
<br>
ompi_group_t when OMPI_GROUP_SPARSE is 0.  The OMPI_GROUP_IS and  
<br>
OMPI_GROU_SET macros only modify grp_flags, which is always present.
<br>
<p>Like the ompi_group_peer_lookup, much can be hidden inside the  
<br>
functions rather than exposed through the interface, if you're  
<br>
concerned about the other functionality currently #if'ed in the code.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
