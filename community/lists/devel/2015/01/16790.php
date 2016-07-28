<?
$subject_val = "Re: [OMPI devel] Failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 03:28:56 2015" -->
<!-- isoreceived="20150116082856" -->
<!-- sent="Fri, 16 Jan 2015 17:29:01 +0900" -->
<!-- isosent="20150116082901" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Failures" -->
<!-- id="54B8CBCD.9030003_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMJJpkXcG8_TV9iGyEC996y9T9YHJOHV0sv91ZE5zyGuxM83wA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-01-16 03:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Previous message:</strong> <a href="16789.php">George Bosilca: "[OMPI devel] Failures"</a>
<li><strong>In reply to:</strong> <a href="16789.php">George Bosilca: "[OMPI devel] Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Reply:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>i was unable to reproduce the hang with icc 14.0.3.174 and greater on a
<br>
RHEL6 like distro.
<br>
<p>i was able to reproduce the opal_tree failure and found two possible
<br>
workarounds :
<br>
a) manually compile opal/class/opal_tree.lo *without* the
<br>
-finline-functions flag
<br>
b) update deserialize_add_tree_item and declare curr_delim as volatile
<br>
char * (see the patch below)
<br>
<p>this function is recursive, and the compiler could generate some
<br>
incorrect code.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>diff --git a/opal/class/opal_tree.c b/opal/class/opal_tree.c
<br>
index e8964e0..492e8dc 100644
<br>
--- a/opal/class/opal_tree.c
<br>
+++ b/opal/class/opal_tree.c
<br>
@@ -465,7 +465,7 @@ int opal_tree_serialize(opal_tree_item_t
<br>
*start_item, opal_buffer_t *buffer)
<br>
&nbsp;static int deserialize_add_tree_item(opal_buffer_t *data,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_tree_item_t *parent_item,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_tree_item_deserialize_fn_t
<br>
deserialize,
<br>
-                                     char *curr_delim,
<br>
+                                     volatile char *curr_delim,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int depth)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int idx = 1, rc;
<br>
<p>On 2015/01/16 8:57, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Today's trunk compiled with icc fails to complete the check on 2 tests:
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16789.php">http://www.open-mpi.org/community/lists/devel/2015/01/16789.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16790/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Previous message:</strong> <a href="16789.php">George Bosilca: "[OMPI devel] Failures"</a>
<li><strong>In reply to:</strong> <a href="16789.php">George Bosilca: "[OMPI devel] Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>Reply:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
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
