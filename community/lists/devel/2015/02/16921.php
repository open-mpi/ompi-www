<?
$subject_val = "Re: [OMPI devel] Master hangs in opal_fifo test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 02:45:15 2015" -->
<!-- isoreceived="20150204074515" -->
<!-- sent="Wed, 04 Feb 2015 16:45:37 +0900" -->
<!-- isosent="20150204074537" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master hangs in opal_fifo test" -->
<!-- id="54D1CE21.9010701_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150203191720.GE55634_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master hangs in opal_fifo test<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-04 02:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16922.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16920.php">Nathan Hjelm: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16920.php">Nathan Hjelm: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16922.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Reply:</strong> <a href="16922.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>imho, this is a compiler bug and only two versions are affected :
<br>
- intel icc 14.0.0.080 (aka 2013sp1)
<br>
- intel icc 14.0.1.106 (aka 2013sp1u1)
<br>
/* note the bug only occurs with -O1 and higher optimization levels */
<br>
<p>here is attached a simple reproducer
<br>
<p>a simple workaround is to configure with ac_cv_type___int128=0
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/02/04 4:17, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; Thats the second report involving icc 14. I will dig into this later
</span><br>
<span class="quotelev1">&gt; this week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 02, 2015 at 11:03:41PM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    I have seen opal_fifo hang on 2 distinct systems
</span><br>
<span class="quotelev2">&gt;&gt;     + Linux/ppc32 with xlc-11.1
</span><br>
<span class="quotelev2">&gt;&gt;     + Linux/x86-64 with icc-14.0.1.106
</span><br>
<span class="quotelev2">&gt;&gt;    I have no explanation to offer for either hang.
</span><br>
<span class="quotelev2">&gt;&gt;    No &quot;weird&quot; configure options were passed to either.
</span><br>
<span class="quotelev2">&gt;&gt;    -Paul
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt;    Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt;    Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;    Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16911.php">http://www.open-mpi.org/community/lists/devel/2015/02/16911.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16920.php">http://www.open-mpi.org/community/lists/devel/2015/02/16920.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16921/conftest.c">conftest.c</a>
</ul>
<!-- attachment="conftest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16922.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16920.php">Nathan Hjelm: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>In reply to:</strong> <a href="16920.php">Nathan Hjelm: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16922.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Reply:</strong> <a href="16922.php">Paul Hargrove: "Re: [OMPI devel] Master hangs in opal_fifo test"</a>
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
