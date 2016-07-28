<?
$subject_val = "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 17:43:54 2012" -->
<!-- isoreceived="20120126224354" -->
<!-- sent="Thu, 26 Jan 2012 17:43:49 -0500" -->
<!-- isosent="20120126224349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type" -->
<!-- id="A293883A-B61C-4FBA-869B-C7F78171F9E3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F13B74C.5010200_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 17:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10258.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)"</a>
<li><strong>Previous message:</strong> <a href="10256.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing FAILURE: icc/ia64 atomics"</a>
<li><strong>In reply to:</strong> <a href="10215.php">Y.MATSUMOTO: "[OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops -- somehow we missed this email.  Thanks for the bug report!
<br>
<p>I've filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/2981">https://svn.open-mpi.org/trac/ompi/ticket/2981</a> for it.
<br>
<p><p>On Jan 16, 2012, at 12:36 AM, Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next feed back is about MPI_Gather problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gather may be truncated in following condition:
</span><br>
<span class="quotelev1">&gt; 1:ompi_coll_tuned_gather_intra_linear_sync is called.
</span><br>
<span class="quotelev1">&gt; (message size is over 6000B)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2:Either send data type or recv data type is derived type and
</span><br>
<span class="quotelev1">&gt; other data type is predefined data type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Truncated is occurred by attached C file(following output).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this C program,
</span><br>
<span class="quotelev1">&gt; &quot;first_segment_count(variable in ompi_coll_tuned_gather_intra_linear_sync)&quot; is 
</span><br>
<span class="quotelev1">&gt; different between root and non-root.
</span><br>
<span class="quotelev1">&gt; That makes messages truncated.
</span><br>
<span class="quotelev1">&gt; &quot;first_segment_size&quot; can not be dividable by derived data type's size,
</span><br>
<span class="quotelev1">&gt; but can dividable by predefined data type's size.
</span><br>
<span class="quotelev1">&gt; But we don't solve this problem.
</span><br>
<span class="quotelev1">&gt; So, we don't choose linear_sync in coll_tuned_decision_fixed.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;gather.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10258.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)"</a>
<li><strong>Previous message:</strong> <a href="10256.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing FAILURE: icc/ia64 atomics"</a>
<li><strong>In reply to:</strong> <a href="10215.php">Y.MATSUMOTO: "[OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
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
