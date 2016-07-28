<?
$subject_val = "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 18:58:25 2016" -->
<!-- isoreceived="20160205235825" -->
<!-- sent="Sat, 6 Feb 2016 08:58:15 +0900" -->
<!-- isosent="20160205235815" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid" -->
<!-- id="CAAkFZ5sWsBWn-knZBgbU+jNEdDxKNYxC-DhP5mErn9Ji-piUXg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="64A4B320-6D08-41FB-86F9-3BAB60D31D7D_at_cisco.com" -->
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
<strong>Date:</strong> 2016-02-05 18:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>In reply to:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>first, cutoff currently assumes sizeof(intptr_t) ==
<br>
sizeof(opal_process_name_t)
<br>
I will double check cutoff is automatically disabled or cannot be set on
<br>
32bits arch
<br>
<p>iirc, I used an explicit unsigned long because the MSB is not cleared when
<br>
right shifting
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, February 6, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 5, 2016, at 9:26 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  static inline opal_process_name_t ompi_proc_sentinel_to_name (intptr_t
</span><br>
<span class="quotelev1">&gt; sentinel)
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
<span class="quotelev1">&gt; I don't have much of an opinion on any of the other stuff here, but I note
</span><br>
<span class="quotelev1">&gt; that this is unsafe.  I know we don't really care about non-64 bit these
</span><br>
<span class="quotelev1">&gt; days, but we shouldn't be knowingly breaking it.  Instead of ANDing with a
</span><br>
<span class="quotelev1">&gt; fixed constant, shouldn't it be something like:
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
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18557.php">http://www.open-mpi.org/community/lists/devel/2016/02/18557.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>In reply to:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
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
