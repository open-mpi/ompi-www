<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 19:13:28 2014" -->
<!-- isoreceived="20140731231328" -->
<!-- sent="Thu, 31 Jul 2014 19:13:23 -0400" -->
<!-- isosent="20140731231323" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="0B076FF6-F04B-4E9C-AA90-D43DE8342DD8_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140730192113.GM43566_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 19:13:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15410.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>In reply to:</strong> <a href="15370.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15410.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15410.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15462.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Here is the patch that change the meaning of the atomics to make them always return the previous value (similar to sync_fetch_and_&lt;*&gt;). I tested this with the following atomics: OS X, gcc style intrinsics and AMD64.
<br>
<p>I did not change the base assembly files used when GCC style assembly operations are not supported. If someone feels like fixing them, feel free.
<br>
<p>Paul, I know you have a pretty diverse range computers. Can you try to compile and run a &#147;make check&#148; with the following patch?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>

<br><p>
<p><p>On Jul 30, 2014, at 15:21 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is what I would prefer. I was trying to not disturb things too
</span><br>
<span class="quotelev1">&gt; much :). Please bring the changes over!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 03:18:44PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Why do you want to add new versions? This will lead to having two, almost
</span><br>
<span class="quotelev2">&gt;&gt;   identical, sets of atomics that are conceptually equivalent but different
</span><br>
<span class="quotelev2">&gt;&gt;   in terms of code. And we will have to maintained both!
</span><br>
<span class="quotelev2">&gt;&gt;   I did a similar change in a fork of OPAL in another project but instead of
</span><br>
<span class="quotelev2">&gt;&gt;   adding another flavor of atomics, I completely replaced the available ones
</span><br>
<span class="quotelev2">&gt;&gt;   with a set returning the old value. I can bring the code over.
</span><br>
<span class="quotelev2">&gt;&gt;     George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   On Tue, Jul 29, 2014 at 5:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On Tue, Jul 29, 2014 at 2:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Is there a reason why the
</span><br>
<span class="quotelev2">&gt;&gt;       current implementations of opal atomics (add, cmpset) do not return
</span><br>
<span class="quotelev2">&gt;&gt;       the
</span><br>
<span class="quotelev2">&gt;&gt;       old value?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Because some CPUs don't implement such an atomic instruction?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On any CPU one *can* certainly synthesize the desired operation with an
</span><br>
<span class="quotelev2">&gt;&gt;     added read before the compare-and-swap to return a value that was
</span><br>
<span class="quotelev2">&gt;&gt;     present at some time before a failed cmpset.  That is almost certainly
</span><br>
<span class="quotelev2">&gt;&gt;     sufficient for your purposes.  However, the added load makes it
</span><br>
<span class="quotelev2">&gt;&gt;     (marginally) more expensive on some CPUs that only have the native
</span><br>
<span class="quotelev2">&gt;&gt;     equivalent of gcc's __sync_bool_compare_and_swap().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     -Paul
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt;     Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15328.php">http://www.open-mpi.org/community/lists/devel/2014/07/15328.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15369.php">http://www.open-mpi.org/community/lists/devel/2014/07/15369.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15370.php">http://www.open-mpi.org/community/lists/devel/2014/07/15370.php</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15409/atomics.patch">atomics.patch</a>
</ul>
<!-- attachment="atomics.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15410.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Previous message:</strong> <a href="15408.php">George Bosilca: "Re: [OMPI devel] Further questions about BTL OPAL move..."</a>
<li><strong>In reply to:</strong> <a href="15370.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15410.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15410.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15462.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
