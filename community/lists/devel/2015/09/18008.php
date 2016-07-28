<?
$subject_val = "Re: [OMPI devel] issue with group sentinel values";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 10:31:56 2015" -->
<!-- isoreceived="20150911143156" -->
<!-- sent="Fri, 11 Sep 2015 10:31:55 -0400" -->
<!-- isosent="20150911143155" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] issue with group sentinel values" -->
<!-- id="CAMJJpkWV1NQxeC_=yj3vkV8WKrk07GbdPmBfAvZ7kd3vd7kKDQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55F287DD.3020207_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] issue with group sentinel values<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-11 10:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18009.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="18007.php">Ralph Castain: "Re: [OMPI devel] Master problem"</a>
<li><strong>In reply to:</strong> <a href="18004.php">Gilles Gouaillardet: "[OMPI devel] issue with group sentinel values"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Before containing the pointer to ompi_proc_t the group is composed of the
<br>
inverse vpid (the negative assumption comes from here). Thus we cannot use
<br>
the last bit, as the vpid might use it. If we shift the vpid to the left by
<br>
1, we can use the last bit as the sentinel.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Sep 11, 2015 at 3:50 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am experiencing some issues and i found commit
</span><br>
<span class="quotelev1">&gt; 0bf06de3f1444f469303e47752430ec9b423b33f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/0bf06de3f1444f469303e47752430ec9b423b33f">https://github.com/open-mpi/ompi/commit/0bf06de3f1444f469303e47752430ec9b423b33f</a>
</span><br>
<span class="quotelev1">&gt; and the following are very likely the root cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i experience this on a linux sparc system only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per the commit log :
</span><br>
<span class="quotelev1">&gt; &quot;[...] This takes advantage of the fact that on most (all?)
</span><br>
<span class="quotelev1">&gt;     systems the top bit of a user-space pointer is never set. If this
</span><br>
<span class="quotelev1">&gt;     changes then a new sentinel will be needed.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am sorry to report the assumption is wrong :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; print group-&gt;grp_proc_pointers[0]
</span><br>
<span class="quotelev1">&gt; Result = (struct ompi_proc_t *) 0xfffff8010010f540
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what about using the lower bit instead ?
</span><br>
<span class="quotelev1">&gt; my assumption is that ompi_proc_t objects are aligned (static or malloc'ed
</span><br>
<span class="quotelev1">&gt; one) on at least a pointer size (4 in x86) so the lower bit should always
</span><br>
<span class="quotelev1">&gt; be zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18004.php">http://www.open-mpi.org/community/lists/devel/2015/09/18004.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18009.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="18007.php">Ralph Castain: "Re: [OMPI devel] Master problem"</a>
<li><strong>In reply to:</strong> <a href="18004.php">Gilles Gouaillardet: "[OMPI devel] issue with group sentinel values"</a>
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
