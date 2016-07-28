<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 14:19:08 2007" -->
<!-- isoreceived="20070726181908" -->
<!-- sent="Thu, 26 Jul 2007 12:18:21 -0600" -->
<!-- isosent="20070726181821" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Sparse group implementation" -->
<!-- id="1C1BABCD-1471-4EE7-B763-E83F8889B9D8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37490.128.107.248.220.1185472803.squirrel_at_mail.cs.uh.edu" -->
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
<strong>Date:</strong> 2007-07-26 14:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2015.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2015.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 26, 2007, at 12:00 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2) I think it would be better to always have the flags and macros
</span><br>
<span class="quotelev2">&gt;&gt; available (like OMPI_GROUP_SPORADIC and OMPI_GROUP_IS_SPORADIC) even
</span><br>
<span class="quotelev2">&gt;&gt; when sparse groups are disabled.  They dont' take up any space, and
</span><br>
<span class="quotelev2">&gt;&gt; mean less #ifs in the general code base
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; That's what i actually was proposing.. keep the flags (there are no
</span><br>
<span class="quotelev1">&gt; macros, just the GROUP_GET_PROC_POINTER) and the sparse parameters  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; group strucutre, and this will mean, only 1 maybe 2 #ifs..
</span><br>
<p>Why would this mean having the sparse parameters in the group structure?
<br>
<p><span class="quotelev2">&gt;&gt; 3) Instead of the GROU_GET_PROC_POINTER macro, why not just change
</span><br>
<span class="quotelev2">&gt;&gt; the behavior of the ompi_group_peer_lookup() function, so that there
</span><br>
<span class="quotelev2">&gt;&gt; is symmetry with how you get a proc from a communicator?  static
</span><br>
<span class="quotelev2">&gt;&gt; inline functions (especially short ones like that) are basically
</span><br>
<span class="quotelev2">&gt;&gt; free.  We'll still have to fix all the places in the code where the
</span><br>
<span class="quotelev2">&gt;&gt; macro is used or people poke directly at the group structure, but I
</span><br>
<span class="quotelev2">&gt;&gt; like static inline over macros whenever possible.  So much easier t
</span><br>
<span class="quotelev2">&gt;&gt; debug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually i never knew till this morning that this function was in the
</span><br>
<span class="quotelev1">&gt; code.. I have an inline function ompi_group_lookup (which does the  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; thing), that actually checks if the group is dense or not and act
</span><br>
<span class="quotelev1">&gt; accordingly.. but to use the inline function instead of the macro,  
</span><br>
<span class="quotelev1">&gt; means
</span><br>
<span class="quotelev1">&gt; again that we need to compile in all the sparse parameters/code,  
</span><br>
<span class="quotelev1">&gt; which im
</span><br>
<span class="quotelev1">&gt; for..
</span><br>
<p>No, it doesn't.  Just have something like:
<br>
<p>static inline ompi_proc_t*
<br>
ompi_group_lookup(ompi_group_t *group, int peer)
<br>
{
<br>
#if OMPI_GROUP_SPARSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* big long lookup function for sparse groups here */
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return group-&gt;grp_proc_pointers[peer]
<br>
#endif
<br>
}
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2015.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2015.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Reply:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
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
