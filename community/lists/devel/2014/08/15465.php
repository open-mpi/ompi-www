<?
$subject_val = "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 18:09:23 2014" -->
<!-- isoreceived="20140801220923" -->
<!-- sent="Fri, 1 Aug 2014 15:09:19 -0700" -->
<!-- isosent="20140801220919" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value" -->
<!-- id="CAAvDA16YZ90uuFaLNXzmaapJttKJH9HoRbLkvq5GnPr3oomAag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BB009ECE-5388-4817-BE53-1CB26C70D913_at_icl.utk.edu" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 18:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15466.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Previous message:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>In reply to:</strong> <a href="15462.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have confirmed that George's latest version works on both SPARC ABIs.
<br>
<p>ARMv7 and three MIPS ABIs still pending...
<br>
<p>-Paul
<br>
<p><p>On Fri, Aug 1, 2014 at 9:40 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Another version of the atomic patch. Paul has tested it on a bunch of
</span><br>
<span class="quotelev1">&gt; platforms. At this point we have confirmation from all architectures except
</span><br>
<span class="quotelev1">&gt; SPARC (v8+ and v9).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 31, 2014, at 19:13 , George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the patch that change the meaning of the atomics to make them
</span><br>
<span class="quotelev1">&gt; always return the previous value (similar to sync_fetch_and_&lt;*&gt;). I tested
</span><br>
<span class="quotelev1">&gt; this with the following atomics: OS X, gcc style intrinsics and AMD64.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did not change the base assembly files used when GCC style assembly
</span><br>
<span class="quotelev1">&gt; operations are not supported. If someone feels like fixing them, feel free.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul, I know you have a pretty diverse range computers. Can you try to
</span><br>
<span class="quotelev1">&gt; compile and run a &quot;make check&quot; with the following patch?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;atomics.patch&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 30, 2014, at 15:21 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That is what I would prefer. I was trying to not disturb things too
</span><br>
<span class="quotelev3">&gt; &gt;&gt; much :). Please bring the changes over!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Jul 30, 2014 at 03:18:44PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  Why do you want to add new versions? This will lead to having two,
</span><br>
<span class="quotelev1">&gt; almost
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  identical, sets of atomics that are conceptually equivalent but
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  in terms of code. And we will have to maintained both!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  I did a similar change in a fork of OPAL in another project but
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  adding another flavor of atomics, I completely replaced the available
</span><br>
<span class="quotelev1">&gt; ones
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  with a set returning the old value. I can bring the code over.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    George.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  On Tue, Jul 29, 2014 at 5:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    On Tue, Jul 29, 2014 at 2:10 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      Is there a reason why the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      current implementations of opal atomics (add, cmpset) do not
</span><br>
<span class="quotelev1">&gt; return
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      old value?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Because some CPUs don't implement such an atomic instruction?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    On any CPU one *can* certainly synthesize the desired operation
</span><br>
<span class="quotelev1">&gt; with an
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    added read before the compare-and-swap to return a value that was
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    present at some time before a failed cmpset.  That is almost
</span><br>
<span class="quotelev1">&gt; certainly
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    sufficient for your purposes.  However, the added load makes it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    (marginally) more expensive on some CPUs that only have the native
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    equivalent of gcc's __sync_bool_compare_and_swap().
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    -Paul
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Future Technologies Group
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15328.php">http://www.open-mpi.org/community/lists/devel/2014/07/15328.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15369.php">http://www.open-mpi.org/community/lists/devel/2014/07/15369.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15370.php">http://www.open-mpi.org/community/lists/devel/2014/07/15370.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15462.php">http://www.open-mpi.org/community/lists/devel/2014/08/15462.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15465/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15466.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Previous message:</strong> <a href="15464.php">Paul Hargrove: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>In reply to:</strong> <a href="15462.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>Reply:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
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
