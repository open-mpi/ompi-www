<?
$subject_val = "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 10:09:12 2012" -->
<!-- isoreceived="20120305150912" -->
<!-- sent="Mon, 5 Mar 2012 10:09:06 -0500" -->
<!-- isosent="20120305150906" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer" -->
<!-- id="D41C99C6-291C-4D04-8252-6D38DAC50E71_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F54812E.2070604_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 10:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10677.php">Y.MATSUMOTO: "[OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10677.php">Y.MATSUMOTO: "[OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yuki,
<br>
<p>I pushed a fix for this issue in the trunk (r26097). However, I disagree with you on some of the topics below.
<br>
<p>On Mar 5, 2012, at 04:02 , Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next feedback is about &quot;collective communications&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Collective communication may be abend when it use over 2GiB buffer.
</span><br>
<span class="quotelev1">&gt; This problem occurs following condition:
</span><br>
<span class="quotelev1">&gt; -- communicator_size * count(scount/rcount) &gt;= 2GiB
</span><br>
<span class="quotelev1">&gt; It occurs in even small PC cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is one of the suspicious parts.
</span><br>
<span class="quotelev1">&gt; (Many similar code in ompi/coll/tuned/*.c)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- in ompi/coll/tuned/coll_tuned_allgather.c (V1.4.X's trunk)---
</span><br>
<span class="quotelev1">&gt; 398    tmprecv = (char*) rbuf + rank * rcount * rext;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if this condition is met, &quot;rank * rcount&quot; is overflowed.
</span><br>
<span class="quotelev1">&gt; So, we fixed it tentatively like following:
</span><br>
<span class="quotelev1">&gt; (cast int to size_t)
</span><br>
<span class="quotelev1">&gt; --- in ompi/coll/tuned/coll_tuned_allgather.c --------------
</span><br>
<span class="quotelev1">&gt; 398    tmprecv = (char*) rbuf + (size_t)rank * rcount * rext;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<p>Based on my understanding of the C standard this operation should be done on the most extended type, in this particular case the one of the rext (ptrdiff_t). Thus I would say the displacement should be correctly computed.
<br>
<p><span class="quotelev1">&gt; It needs not only &quot;ompi/coll/tuned&quot; but also other codes to fix this problem.
</span><br>
<span class="quotelev1">&gt; We try to fix, but following functions have problem (argument may be overflowed):
</span><br>
<span class="quotelev1">&gt; -&quot;ompi_coll_tuned_sendrecv&quot; may be called when &quot;scount/rcount&quot; sets over 2GiB.
</span><br>
<span class="quotelev1">&gt; -&quot;ompi_datatype_copy_content_same_ddt&quot; may be called when &quot;count&quot; sets over 2GiB.
</span><br>
<p>These two should have been fixed by the previous commit (r26097)
<br>
<p><span class="quotelev1">&gt; -&quot;basic_linear in Allgather&quot;: Bcast may be called when &quot;count&quot; sets over 2GiB.
</span><br>
<p>Fixed in r26098.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Yuki Matsumoto
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10677.php">Y.MATSUMOTO: "[OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10677.php">Y.MATSUMOTO: "[OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
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
