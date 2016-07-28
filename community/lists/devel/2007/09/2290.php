<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 09:00:12 2007" -->
<!-- isoreceived="20070906130012" -->
<!-- sent="Thu, 6 Sep 2007 16:00:06 +0300" -->
<!-- isosent="20070906130006" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Exit without finalize" -->
<!-- id="20070906130006.GL3410_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C30553C3.AB68%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-09-06 09:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2289.php">Ralph H Castain: "[OMPI devel] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2289.php">Ralph H Castain: "[OMPI devel] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 06, 2007 at 06:50:43AM -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; WHAT:   Decide upon how to handle MPI applications where one or more
</span><br>
<span class="quotelev1">&gt;         processes exit without calling MPI_Finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:    Some applications can abort via an exit call instead of
</span><br>
<span class="quotelev1">&gt;         calling MPI_Abort when a library (or something else) calls
</span><br>
<span class="quotelev1">&gt;         exit. This situation is outside a user's control, so they
</span><br>
<span class="quotelev1">&gt;         cannot fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE:  Refer to ticket #1144 - code changes are TBD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:   Up to the group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
[snip]
<br>
<span class="quotelev1">&gt; Does the general community feel we should do anything here, or is this a
</span><br>
<span class="quotelev1">&gt; &quot;bug&quot; that should be fixed by the entity calling &quot;exit&quot;? I should note that
</span><br>
<span class="quotelev1">&gt; it actually is bad behavior (IMHO) for any library to call &quot;exit&quot; - but
</span><br>
<span class="quotelev1">&gt; then, we do that in some situations too, so perhaps we shouldn't cast
</span><br>
<span class="quotelev1">&gt; stones!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggested solutions or comments on whether or not we should do anything
</span><br>
<span class="quotelev1">&gt; would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
IMO (a) should be implemented.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2289.php">Ralph H Castain: "[OMPI devel] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2289.php">Ralph H Castain: "[OMPI devel] [RFC] Exit without finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>Reply:</strong> <a href="2291.php">Terry D. Dontje: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
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
