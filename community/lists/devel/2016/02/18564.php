<?
$subject_val = "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 23:03:37 2016" -->
<!-- isoreceived="20160206040337" -->
<!-- sent="Fri, 5 Feb 2016 20:03:33 -0800" -->
<!-- isosent="20160206040333" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid" -->
<!-- id="189418F9-83E6-42C7-815D-CA45631C2C57_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tFr9L1zG2DKhw9icHmG5i0ucQaVfuRTPzybaXNJR60sQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-05 23:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18565.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18563.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18563.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18565.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18565.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two potential places you could use:
<br>
<p>* the vpid itself is 32-bits in size - we are quite some years away from needing all of them, so taking the upper-most bit for this purpose should be okay
<br>
<p>* the lower 16-bits of the jobid is the local jobid - i.e., the number of times someone called &#226;&#128;&#156;comm_spawn&#226;&#128;&#157;. The code for recycling those has gone a tad stale, but it wouldn&#226;&#128;&#153;t be hard to recover it. I doubt someone will call comm_spawn more than 2^15 times without at least one of those completing so we can reuse the jobid, and so it should be safe to take the upper bit of that field.
<br>
<p>Frankly, I thought the second option was what Nathan had intended, so I&#226;&#128;&#153;m surprised to see us masking at the 64-bit level. This touches the mpirun part of the jobid (the upper 16-bits), which is a hash based on the hostname and OS pid. Stripping a bit from that is risky and I definitely wouldn&#226;&#128;&#153;t advise it.
<br>
<p><p><span class="quotelev1">&gt; On Feb 5, 2016, at 7:48 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will definitely try that !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; back to the initial question, has someone any thoughts on which bit(s) we can lose when using cutoff ?
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
<span class="quotelev1">&gt; On Saturday, February 6, 2016, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; In addition shouldn't we use uintptr_t instead of the intptr_t to cope with the MSB during the shifting operations? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2016 10:08 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2016, at 9:26 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  static inline opal_process_name_t ompi_proc_sentinel_to_name (intptr_t sentinel)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  sentinel &gt;&gt;= 1;
</span><br>
<span class="quotelev2">&gt; &gt;  sentinel &amp;= 0x7FFFFFFFFFFFFFFF;
</span><br>
<span class="quotelev2">&gt; &gt;  return *((opal_process_name_t *) &amp;sentinel);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have much of an opinion on any of the other stuff here, but I note that this is unsafe.  I know we don't really care about non-64 bit these days, but we shouldn't be knowingly breaking it.  Instead of ANDing with a fixed constant, shouldn't it be something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; intptr_t mask = ~1 &gt;&gt; 1;
</span><br>
<span class="quotelev1">&gt; sentinel &amp;= mask;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18557.php">http://www.open-mpi.org/community/lists/devel/2016/02/18557.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18557.php">http://www.open-mpi.org/community/lists/devel/2016/02/18557.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18563.php">http://www.open-mpi.org/community/lists/devel/2016/02/18563.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18563.php">http://www.open-mpi.org/community/lists/devel/2016/02/18563.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18565.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18563.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18563.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18565.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18565.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
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
