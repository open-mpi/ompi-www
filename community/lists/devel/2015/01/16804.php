<?
$subject_val = "Re: [OMPI devel] Failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 06:04:06 2015" -->
<!-- isoreceived="20150119110406" -->
<!-- sent="Mon, 19 Jan 2015 20:04:14 +0900" -->
<!-- isosent="20150119110414" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Failures" -->
<!-- id="54BCE4AE.7000806_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMJJpkX7mJ8Nporz6QJ3KouhCzL7g2FUpw0ULiG4rqnu7mr5Pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Failures<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-19 06:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16805.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-730-g06d3b57"</a>
<li><strong>Previous message:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>In reply to:</strong> <a href="16794.php">George Bosilca: "Re: [OMPI devel] Failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>i was able to reproduce the hang with intel compiler 14.0.0
<br>
but i am still unable to reproduce it with intel compiler 14.3
<br>
<p>i was not able to understand where the issue come from, so
<br>
i could not create an appropriate test in configure
<br>
<p>at this stage, i can only recommend you update your compiler version
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/01/17 0:19, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Your patch solve the issue with opal_tree. The opal_lifo remains broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 16, 2015 at 5:12 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i pushed
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/ac16970d21d21f529f1ec01ebe0520843227475b">https://github.com/open-mpi/ompi/commit/ac16970d21d21f529f1ec01ebe0520843227475b</a>
</span><br>
<span class="quotelev2">&gt;&gt; in order to get the intel compiler work with ompi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2015/01/16 17:29, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i was unable to reproduce the hang with icc 14.0.3.174 and greater on a
</span><br>
<span class="quotelev2">&gt;&gt; RHEL6 like distro.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i was able to reproduce the opal_tree failure and found two possible
</span><br>
<span class="quotelev2">&gt;&gt; workarounds :
</span><br>
<span class="quotelev2">&gt;&gt; a) manually compile opal/class/opal_tree.lo *without* the
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions flag
</span><br>
<span class="quotelev2">&gt;&gt; b) update deserialize_add_tree_item and declare curr_delim as volatile
</span><br>
<span class="quotelev2">&gt;&gt; char * (see the patch below)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this function is recursive, and the compiler could generate some
</span><br>
<span class="quotelev2">&gt;&gt; incorrect code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/opal/class/opal_tree.c b/opal/class/opal_tree.c
</span><br>
<span class="quotelev2">&gt;&gt; index e8964e0..492e8dc 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/opal/class/opal_tree.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/opal/class/opal_tree.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -465,7 +465,7 @@ int opal_tree_serialize(opal_tree_item_t
</span><br>
<span class="quotelev2">&gt;&gt; *start_item, opal_buffer_t *buffer)
</span><br>
<span class="quotelev2">&gt;&gt;  static int deserialize_add_tree_item(opal_buffer_t *data,
</span><br>
<span class="quotelev2">&gt;&gt;                                       opal_tree_item_t *parent_item,
</span><br>
<span class="quotelev2">&gt;&gt;                                       opal_tree_item_deserialize_fn_t
</span><br>
<span class="quotelev2">&gt;&gt; deserialize,
</span><br>
<span class="quotelev2">&gt;&gt; -                                     char *curr_delim,
</span><br>
<span class="quotelev2">&gt;&gt; +                                     volatile char *curr_delim,
</span><br>
<span class="quotelev2">&gt;&gt;                                       int depth)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      int idx = 1, rc;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2015/01/16 8:57, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Today's trunk compiled with icc fails to complete the check on 2 tests:
</span><br>
<span class="quotelev2">&gt;&gt; opal_lifo and opal_tree.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For opal_tree the output is:
</span><br>
<span class="quotelev2">&gt;&gt; OPAL dss:unpack: got type 9 when expecting type 3
</span><br>
<span class="quotelev2">&gt;&gt;  Failure :  failed tree deserialization size compare
</span><br>
<span class="quotelev2">&gt;&gt; SUPPORT: OMPI Test failed: opal_tree_t (1 of 12 failed)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and opal_lifo gets stuck forever in the single threaded call to thread_test
</span><br>
<span class="quotelev2">&gt;&gt; in a 128 bits atomic CAS. Unfortunately I lack the time to dig deep enough
</span><br>
<span class="quotelev2">&gt;&gt; to see what is the root cause, but a quick look at the opal_config.h file
</span><br>
<span class="quotelev2">&gt;&gt; indicates that our configure detects that __int128 is a supported type when
</span><br>
<span class="quotelev2">&gt;&gt; it should not be.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI git d13c14e configured with --enable-debug
</span><br>
<span class="quotelev2">&gt;&gt; icc (ICC) 14.0.0 20130728
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16789.php">http://www.open-mpi.org/community/lists/devel/2015/01/16789.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16790.php">http://www.open-mpi.org/community/lists/devel/2015/01/16790.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16791.php">http://www.open-mpi.org/community/lists/devel/2015/01/16791.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16794.php">http://www.open-mpi.org/community/lists/devel/2015/01/16794.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16805.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-730-g06d3b57"</a>
<li><strong>Previous message:</strong> <a href="16803.php">Alina Sklarevich: "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>In reply to:</strong> <a href="16794.php">George Bosilca: "Re: [OMPI devel] Failures"</a>
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
