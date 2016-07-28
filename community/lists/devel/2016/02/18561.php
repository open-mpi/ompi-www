<?
$subject_val = "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 20:45:08 2016" -->
<!-- isoreceived="20160206014508" -->
<!-- sent="Fri, 5 Feb 2016 17:45:03 -0800" -->
<!-- isosent="20160206014503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid" -->
<!-- id="71B91883-F8DB-494A-81C5-E5C9D046A4E5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5sWsBWn-knZBgbU+jNEdDxKNYxC-DhP5mErn9Ji-piUXg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-05 20:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: we do have a macro that safely returns the either field of the jobid, whether in 32 or 64 bit environments. Is there some reason not to just use those?
<br>
<p><span class="quotelev1">&gt; On Feb 5, 2016, at 3:58 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; first, cutoff currently assumes sizeof(intptr_t) == sizeof(opal_process_name_t)
</span><br>
<span class="quotelev1">&gt; I will double check cutoff is automatically disabled or cannot be set on 32bits arch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iirc, I used an explicit unsigned long because the MSB is not cleared when right shifting
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
<span class="quotelev1">&gt; On Saturday, February 6, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2016, at 9:26 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
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
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18560.php">http://www.open-mpi.org/community/lists/devel/2016/02/18560.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18560.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18562.php">George Bosilca: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
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
