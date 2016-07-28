<?
$subject_val = "Re: [OMPI devel] Datatype flag?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 10:42:27 2016" -->
<!-- isoreceived="20160520144227" -->
<!-- sent="Fri, 20 May 2016 09:42:26 -0500" -->
<!-- isosent="20160520144226" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Datatype flag?" -->
<!-- id="CAMJJpkWCA4A=ZgAQjOw0upuL=iMfkyrfMALkg3Nu0vnv=w62Xw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53D696F7-9DF2-4FF8-BC1C-7916CFDB9D55_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Datatype flag?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-20 10:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19010.php">Paul Hargrove: "Re: [OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>Previous message:</strong> <a href="19008.php">Ralph Castain: "[OMPI devel] Datatype flag?"</a>
<li><strong>In reply to:</strong> <a href="19008.php">Ralph Castain: "[OMPI devel] Datatype flag?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>We do not have such infrastructure as there are too many possibilities to
<br>
handle efficiently. However, different projects (Mellanox and NVidia) are
<br>
using techniques that look similar to what you propose.
<br>
<p>The main idea is to replace the default behavior of the convertor with a
<br>
BTL-specialized function that understand some of the MPI datatype
<br>
constructs. This is realized by setting your own pack/unpack functions in
<br>
the convertor (as the internal description of the datatype is relatively
<br>
well described in the headers one can implement such functions easily). In
<br>
case the cost of reevaluating the datatype description is too costly, the
<br>
attribute table attached to the datatype can be used as a cache.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, May 20, 2016 at 9:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some flag by which the datatype code can know what transport is
</span><br>
<span class="quotelev1">&gt; being used? For example, suppose a transport can handle certain datatype
</span><br>
<span class="quotelev1">&gt; configurations itself, without the converting dealing with them (e.g.,
</span><br>
<span class="quotelev1">&gt; contiguous vs non-contiguous). Essentially, it&#226;&#128;&#153;s an &#226;&#128;&#156;offload&#226;&#128;&#157; capability.
</span><br>
<span class="quotelev1">&gt; Although the convertor is currently assigned on a per-peer basis, the logic
</span><br>
<span class="quotelev1">&gt; in such cases might also depend upon the capabilities of the transport
</span><br>
<span class="quotelev1">&gt; being used to communicate to that peer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I&#226;&#128;&#153;m wondering if we have some mechanism by which that capability can be
</span><br>
<span class="quotelev1">&gt; communicated to the datatype code down in OPAL?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19008.php">http://www.open-mpi.org/community/lists/devel/2016/05/19008.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19010.php">Paul Hargrove: "Re: [OMPI devel] Use non-cpu frequency for timers"</a>
<li><strong>Previous message:</strong> <a href="19008.php">Ralph Castain: "[OMPI devel] Datatype flag?"</a>
<li><strong>In reply to:</strong> <a href="19008.php">Ralph Castain: "[OMPI devel] Datatype flag?"</a>
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
