<?
$subject_val = "Re: [OMPI devel] 100% test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 11:38:59 2014" -->
<!-- isoreceived="20140715153859" -->
<!-- sent="Tue, 15 Jul 2014 11:38:58 -0400" -->
<!-- isosent="20140715153858" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 100% test failures" -->
<!-- id="CAMJJpkWePtkZLtBqNQ6q5cw6XoHtn15zgc_kEbbKHHGNE9_R7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140715145023.GM1506_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 100% test failures<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 11:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15148.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>In reply to:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Reply:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm also looking into it.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Jul 15, 2014 at 10:50 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Jul 15, 2014 at 11:40:38PM +0900, Gilles GOUAILLARDET wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    r32236 is a suspect
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    i am afk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I just read the code and a class is initialized with
</span><br>
<span class="quotelev1">&gt; opal_class_initialize
</span><br>
<span class="quotelev2">&gt; &gt;    the first time an object is instantiated with OBJ_NEW
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I would simply revert r32236 or update opal_class_finalize and
</span><br>
<span class="quotelev2">&gt; &gt;    free(cls-&gt;cls_construct_array); only if cls-&gt;cls_construct_array is
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev2">&gt; &gt;    NULL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; free(NULL) is safe. Something else is going wrong here. I am
</span><br>
<span class="quotelev1">&gt; investigating.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15146.php">http://www.open-mpi.org/community/lists/devel/2014/07/15146.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15148.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>In reply to:</strong> <a href="15146.php">Nathan Hjelm: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Reply:</strong> <a href="15149.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
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
