<?
$subject_val = "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 22:48:43 2016" -->
<!-- isoreceived="20160206034843" -->
<!-- sent="Sat, 6 Feb 2016 12:48:42 +0900" -->
<!-- isosent="20160206034842" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid" -->
<!-- id="CAAkFZ5tFr9L1zG2DKhw9icHmG5i0ucQaVfuRTPzybaXNJR60sQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUdVJU-B7PVhu6ejE2va6RfkM2hwxZu7KjP8Xg0Rqamhg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-05 22:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George,
<br>
<p>I will definitely try that !
<br>
<p>back to the initial question, has someone any thoughts on which bit(s) we
<br>
can lose when using cutoff ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, February 6, 2016, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In addition shouldn't we use uintptr_t instead of the intptr_t to cope
</span><br>
<span class="quotelev1">&gt; with the MSB during the shifting operations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2016 10:08 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2016, at 9:26 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  static inline opal_process_name_t ompi_proc_sentinel_to_name (intptr_t
</span><br>
<span class="quotelev2">&gt;&gt; sentinel)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  sentinel &gt;&gt;= 1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  sentinel &amp;= 0x7FFFFFFFFFFFFFFF;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  return *((opal_process_name_t *) &amp;sentinel);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have much of an opinion on any of the other stuff here, but I
</span><br>
<span class="quotelev2">&gt;&gt; note that this is unsafe.  I know we don't really care about non-64 bit
</span><br>
<span class="quotelev2">&gt;&gt; these days, but we shouldn't be knowingly breaking it.  Instead of ANDing
</span><br>
<span class="quotelev2">&gt;&gt; with a fixed constant, shouldn't it be something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; intptr_t mask = ~1 &gt;&gt; 1;
</span><br>
<span class="quotelev2">&gt;&gt; sentinel &amp;= mask;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18557.php">http://www.open-mpi.org/community/lists/devel/2016/02/18557.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18563/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18564.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
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
