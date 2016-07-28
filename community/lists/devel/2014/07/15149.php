<?
$subject_val = "Re: [OMPI devel] 100% test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 14:26:02 2014" -->
<!-- isoreceived="20140715182602" -->
<!-- sent="Tue, 15 Jul 2014 14:26:01 -0400" -->
<!-- isosent="20140715182601" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 100% test failures" -->
<!-- id="CAMJJpkXzg4==NrBFzf4jOi2FKjVyi3e3d13zhrrTgFt7SeWaVg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWePtkZLtBqNQ6q5cw6XoHtn15zgc_kEbbKHHGNE9_R7Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-15 14:26:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15150.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15148.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r32248 should be the fix for this issue. I was overly optimistic about the
<br>
cleanup of the classes. It turns out this is not possible without deep
<br>
rearrangement of the class infrastructure. More info on the commit log.
<br>
<p>Sorry for the mess,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Jul 15, 2014 at 11:38 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I'm also looking into it.
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
<span class="quotelev1">&gt; On Tue, Jul 15, 2014 at 10:50 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 15, 2014 at 11:40:38PM +0900, Gilles GOUAILLARDET wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    r32236 is a suspect
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    i am afk
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    I just read the code and a class is initialized with
</span><br>
<span class="quotelev2">&gt;&gt; opal_class_initialize
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    the first time an object is instantiated with OBJ_NEW
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    I would simply revert r32236 or update opal_class_finalize and
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    free(cls-&gt;cls_construct_array); only if cls-&gt;cls_construct_array is
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    NULL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; free(NULL) is safe. Something else is going wrong here. I am
</span><br>
<span class="quotelev2">&gt;&gt; investigating.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15146.php">http://www.open-mpi.org/community/lists/devel/2014/07/15146.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15150.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15148.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base	orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
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
