<?
$subject_val = "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 06:44:16 2016" -->
<!-- isoreceived="20160206114416" -->
<!-- sent="Sat, 6 Feb 2016 20:44:15 +0900" -->
<!-- isosent="20160206114415" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid" -->
<!-- id="CAAkFZ5t=2CdVmLSjwQDdWdbc1ysGR+yy9j_O5KYDfPZBV1VzpQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D4315CD-01CA-4B20-8D6E-81898005FA59_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-02-06 06:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18568.php">Justin Cinkelj: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Previous message:</strong> <a href="18566.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18566.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i made PR #1345 <a href="https://github.com/open-mpi/ompi/pull/1345">https://github.com/open-mpi/ompi/pull/1345</a>
<br>
<p>i will run some more extensive tests on Monday.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sat, Feb 6, 2016 at 1:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; FWIW: there are macros in orte/util/name_fns.h that will extract the
</span><br>
<span class="quotelev1">&gt; individual jobid fields, and there is another macro for reassembling the
</span><br>
<span class="quotelev1">&gt; jobid from the two pieces. If you use those, we&#226;&#128;&#153;ll avoid any issues with
</span><br>
<span class="quotelev1">&gt; future modifications to the fields.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2016, at 8:17 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will implement the second option.
</span><br>
<span class="quotelev1">&gt; conversion from sentinel to process name will require a few extra steps, but
</span><br>
<span class="quotelev1">&gt; that should not be in the critical path.
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
<span class="quotelev1">&gt; On Saturday, February 6, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are two potential places you could use:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * the vpid itself is 32-bits in size - we are quite some years away from
</span><br>
<span class="quotelev2">&gt;&gt; needing all of them, so taking the upper-most bit for this purpose should be
</span><br>
<span class="quotelev2">&gt;&gt; okay
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * the lower 16-bits of the jobid is the local jobid - i.e., the number of
</span><br>
<span class="quotelev2">&gt;&gt; times someone called &#226;&#128;&#156;comm_spawn&#226;&#128;&#157;. The code for recycling those has gone a
</span><br>
<span class="quotelev2">&gt;&gt; tad stale, but it wouldn&#226;&#128;&#153;t be hard to recover it. I doubt someone will call
</span><br>
<span class="quotelev2">&gt;&gt; comm_spawn more than 2^15 times without at least one of those completing so
</span><br>
<span class="quotelev2">&gt;&gt; we can reuse the jobid, and so it should be safe to take the upper bit of
</span><br>
<span class="quotelev2">&gt;&gt; that field.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Frankly, I thought the second option was what Nathan had intended, so I&#226;&#128;&#153;m
</span><br>
<span class="quotelev2">&gt;&gt; surprised to see us masking at the 64-bit level. This touches the mpirun
</span><br>
<span class="quotelev2">&gt;&gt; part of the jobid (the upper 16-bits), which is a hash based on the hostname
</span><br>
<span class="quotelev2">&gt;&gt; and OS pid. Stripping a bit from that is risky and I definitely wouldn&#226;&#128;&#153;t
</span><br>
<span class="quotelev2">&gt;&gt; advise it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2016, at 7:48 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will definitely try that !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; back to the initial question, has someone any thoughts on which bit(s) we
</span><br>
<span class="quotelev2">&gt;&gt; can lose when using cutoff ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Saturday, February 6, 2016, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In addition shouldn't we use uintptr_t instead of the intptr_t to cope
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the MSB during the shifting operations?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 5, 2016 10:08 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 5, 2016, at 9:26 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  static inline opal_process_name_t ompi_proc_sentinel_to_name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; (intptr_t sentinel)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  sentinel &gt;&gt;= 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  sentinel &amp;= 0x7FFFFFFFFFFFFFFF;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;  return *((opal_process_name_t *) &amp;sentinel);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't have much of an opinion on any of the other stuff here, but I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; note that this is unsafe.  I know we don't really care about non-64 bit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these days, but we shouldn't be knowingly breaking it.  Instead of ANDing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with a fixed constant, shouldn't it be something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intptr_t mask = ~1 &gt;&gt; 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sentinel &amp;= mask;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18557.php">http://www.open-mpi.org/community/lists/devel/2016/02/18557.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18563.php">http://www.open-mpi.org/community/lists/devel/2016/02/18563.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18565.php">http://www.open-mpi.org/community/lists/devel/2016/02/18565.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18566.php">http://www.open-mpi.org/community/lists/devel/2016/02/18566.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18568.php">Justin Cinkelj: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Previous message:</strong> <a href="18566.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>In reply to:</strong> <a href="18566.php">Ralph Castain: "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
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
