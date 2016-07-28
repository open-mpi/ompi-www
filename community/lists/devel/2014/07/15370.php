<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 15:21:14 2014" -->
<!-- isoreceived="20140730192114" -->
<!-- sent="Wed, 30 Jul 2014 13:21:13 -0600" -->
<!-- isosent="20140730192113" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="20140730192113.GM43566_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVVRyk-aRZ9Yurs-Qgr3u=K6+9SeAHHWG7YAAf13WfApg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 15:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15371.php">Dave Goodell (dgoodell): "[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15409.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15409.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is what I would prefer. I was trying to not disturb things too
<br>
much :). Please bring the changes over!
<br>
<p>-Nathan
<br>
<p>On Wed, Jul 30, 2014 at 03:18:44PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    Why do you want to add new versions? This will lead to having two, almost
</span><br>
<span class="quotelev1">&gt;    identical, sets of atomics that are conceptually equivalent but different
</span><br>
<span class="quotelev1">&gt;    in terms of code. And we will have to maintained both!
</span><br>
<span class="quotelev1">&gt;    I did a similar change in a fork of OPAL in another project but instead of
</span><br>
<span class="quotelev1">&gt;    adding another flavor of atomics, I completely replaced the available ones
</span><br>
<span class="quotelev1">&gt;    with a set returning the old value. I can bring the code over.
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Tue, Jul 29, 2014 at 5:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Tue, Jul 29, 2014 at 2:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Is there a reason why the
</span><br>
<span class="quotelev1">&gt;        current implementations of opal atomics (add, cmpset) do not return
</span><br>
<span class="quotelev1">&gt;        the
</span><br>
<span class="quotelev1">&gt;        old value?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Because some CPUs don't implement such an atomic instruction?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On any CPU one *can* certainly synthesize the desired operation with an
</span><br>
<span class="quotelev1">&gt;      added read before the compare-and-swap to return a value that was
</span><br>
<span class="quotelev1">&gt;      present at some time before a failed cmpset.  That is almost certainly
</span><br>
<span class="quotelev1">&gt;      sufficient for your purposes.  However, the added load makes it
</span><br>
<span class="quotelev1">&gt;      (marginally) more expensive on some CPUs that only have the native
</span><br>
<span class="quotelev1">&gt;      equivalent of gcc's __sync_bool_compare_and_swap().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Paul
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Future Technologies Group
</span><br>
<span class="quotelev1">&gt;      Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;      Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15328.php">http://www.open-mpi.org/community/lists/devel/2014/07/15328.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15369.php">http://www.open-mpi.org/community/lists/devel/2014/07/15369.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15370/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15371.php">Dave Goodell (dgoodell): "[OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15369.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15409.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15409.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
