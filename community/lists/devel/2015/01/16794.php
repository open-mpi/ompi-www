<?
$subject_val = "Re: [OMPI devel] Failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 10:19:53 2015" -->
<!-- isoreceived="20150116151953" -->
<!-- sent="Fri, 16 Jan 2015 10:19:52 -0500" -->
<!-- isosent="20150116151952" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Failures" -->
<!-- id="CAMJJpkX7mJ8Nporz6QJ3KouhCzL7g2FUpw0ULiG4rqnu7mr5Pw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54B8E413.10801_at_iferc.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-16 10:19:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Previous message:</strong> <a href="16793.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>In reply to:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Reply:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your patch solve the issue with opal_tree. The opal_lifo remains broken.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Jan 16, 2015 at 5:12 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i pushed
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/ac16970d21d21f529f1ec01ebe0520843227475b">https://github.com/open-mpi/ompi/commit/ac16970d21d21f529f1ec01ebe0520843227475b</a>
</span><br>
<span class="quotelev1">&gt; in order to get the intel compiler work with ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2015/01/16 17:29, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was unable to reproduce the hang with icc 14.0.3.174 and greater on a
</span><br>
<span class="quotelev1">&gt; RHEL6 like distro.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was able to reproduce the opal_tree failure and found two possible
</span><br>
<span class="quotelev1">&gt; workarounds :
</span><br>
<span class="quotelev1">&gt; a) manually compile opal/class/opal_tree.lo *without* the
</span><br>
<span class="quotelev1">&gt; -finline-functions flag
</span><br>
<span class="quotelev1">&gt; b) update deserialize_add_tree_item and declare curr_delim as volatile
</span><br>
<span class="quotelev1">&gt; char * (see the patch below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this function is recursive, and the compiler could generate some
</span><br>
<span class="quotelev1">&gt; incorrect code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/class/opal_tree.c b/opal/class/opal_tree.c
</span><br>
<span class="quotelev1">&gt; index e8964e0..492e8dc 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/class/opal_tree.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/class/opal_tree.c
</span><br>
<span class="quotelev1">&gt; @@ -465,7 +465,7 @@ int opal_tree_serialize(opal_tree_item_t
</span><br>
<span class="quotelev1">&gt; *start_item, opal_buffer_t *buffer)
</span><br>
<span class="quotelev1">&gt;  static int deserialize_add_tree_item(opal_buffer_t *data,
</span><br>
<span class="quotelev1">&gt;                                       opal_tree_item_t *parent_item,
</span><br>
<span class="quotelev1">&gt;                                       opal_tree_item_deserialize_fn_t
</span><br>
<span class="quotelev1">&gt; deserialize,
</span><br>
<span class="quotelev1">&gt; -                                     char *curr_delim,
</span><br>
<span class="quotelev1">&gt; +                                     volatile char *curr_delim,
</span><br>
<span class="quotelev1">&gt;                                       int depth)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;      int idx = 1, rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2015/01/16 8:57, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Today's trunk compiled with icc fails to complete the check on 2 tests:
</span><br>
<span class="quotelev1">&gt; opal_lifo and opal_tree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For opal_tree the output is:
</span><br>
<span class="quotelev1">&gt; OPAL dss:unpack: got type 9 when expecting type 3
</span><br>
<span class="quotelev1">&gt;  Failure :  failed tree deserialization size compare
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_tree_t (1 of 12 failed)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and opal_lifo gets stuck forever in the single threaded call to thread_test
</span><br>
<span class="quotelev1">&gt; in a 128 bits atomic CAS. Unfortunately I lack the time to dig deep enough
</span><br>
<span class="quotelev1">&gt; to see what is the root cause, but a quick look at the opal_config.h file
</span><br>
<span class="quotelev1">&gt; indicates that our configure detects that __int128 is a supported type when
</span><br>
<span class="quotelev1">&gt; it should not be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI git d13c14e configured with --enable-debug
</span><br>
<span class="quotelev1">&gt; icc (ICC) 14.0.0 20130728
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16789.php">http://www.open-mpi.org/community/lists/devel/2015/01/16789.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16790.php">http://www.open-mpi.org/community/lists/devel/2015/01/16790.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16791.php">http://www.open-mpi.org/community/lists/devel/2015/01/16791.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16795.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi master, libfabric and static libraries"</a>
<li><strong>Previous message:</strong> <a href="16793.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>In reply to:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Reply:</strong> <a href="16804.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
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
