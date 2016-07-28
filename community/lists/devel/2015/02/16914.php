<?
$subject_val = "Re: [OMPI devel] Master hangs in opal_LIFO test";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 03:36:53 2015" -->
<!-- isoreceived="20150203083653" -->
<!-- sent="Tue, 3 Feb 2015 09:36:52 +0100" -->
<!-- isosent="20150203083652" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master hangs in opal_LIFO test" -->
<!-- id="20150203083652.GB3592_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16_ZBX=ddJN0Yu21PSsCPZCW9Gjw8cn_W1O96uGwB3hAA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master hangs in opal_LIFO test<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 03:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16915.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>Previous message:</strong> <a href="16913.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>In reply to:</strong> <a href="16913.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16915.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is right now another bug report concerning opal_lifo and ppc64 here:
<br>
<p><a href="https://github.com/open-mpi/ompi/issues/371">https://github.com/open-mpi/ompi/issues/371</a>
<br>
<p>and there were hangs on ppc64 a few weeks ago in opal_lifo which Nathan
<br>
fixed with additional barriers.
<br>
<p>On Mon, Feb 02, 2015 at 11:18:43PM -0800, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; CORRECTION:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is the opal_lifo (not fifo) test which hung on both systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 2, 2015 at 11:03 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have seen opal_fifo hang on 2 distinct systems
</span><br>
<span class="quotelev2">&gt; &gt;  + Linux/ppc32 with xlc-11.1
</span><br>
<span class="quotelev2">&gt; &gt;  + Linux/x86-64 with icc-14.0.1.106
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have no explanation to offer for either hang.
</span><br>
<span class="quotelev2">&gt; &gt; No &quot;weird&quot; configure options were passed to either.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16913.php">http://www.open-mpi.org/community/lists/devel/2015/02/16913.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16915.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>Previous message:</strong> <a href="16913.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<li><strong>In reply to:</strong> <a href="16913.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16915.php">Gilles Gouaillardet: "Re: [OMPI devel] Master hangs in opal_LIFO test"</a>
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
