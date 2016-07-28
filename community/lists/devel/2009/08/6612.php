<?
$subject_val = "Re: [OMPI devel] sm_coll segv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 11:47:17 2009" -->
<!-- isoreceived="20090810154717" -->
<!-- sent="Mon, 10 Aug 2009 18:47:12 +0300" -->
<!-- isosent="20090810154712" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm_coll segv" -->
<!-- id="453d39990908100847h4059843ck1c3deb2e71e61e9a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990908100711p7dbd5646q2867fea22c8c59d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm_coll segv<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 11:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6613.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>In reply to:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6614.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6614.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also have another question
<br>
$ompi_info -aa|grep mpool |grep sm
<br>
&nbsp;&nbsp;MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;, data source:
<br>
default value)
<br>
&nbsp;&nbsp;MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;, data
<br>
source: default value)
<br>
<p>what do these names mean, and dont they have to be the same ?
<br>
Lenny.
<br>
<p>On Mon, Aug 10, 2009 at 5:11 PM, Lenny Verkhovsky &lt;
<br>
lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Don't these allocations of  bshe-&gt;smbhe_keys require some kind of memory
</span><br>
<span class="quotelev1">&gt; translation from 1 proc's memory space to another ( in bootstrap_init
</span><br>
<span class="quotelev1">&gt; function /ompi/mca/coll/sm/coll_sm_module.c )
</span><br>
<span class="quotelev1">&gt; If local rank0 allocates ( get attached to ) memory, others can't read it
</span><br>
<span class="quotelev1">&gt; without proper tranlsation.
</span><br>
<span class="quotelev1">&gt; Lenny
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 10, 2009 at 2:26 PM, Lenny Verkhovsky &lt;
</span><br>
<span class="quotelev1">&gt; lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We saw these seqv too with and without setting sm btl .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 7, 2009 at 10:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Aug 6, 2009 at 3:18 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok, with Terry's help, I found a segv in the coll sm.  If you run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without the sm btl, there's an obvious bad parameter that we're passing that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results in a segv.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LANL -- can you confirm / deny that these are the segv's that you were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seeing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes we can deny that those are the segv's we were seeing - we definitely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had the sm btl active. I'll rerun the test on Monday and add the stacktrace
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to your ticket.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While fixing this, I noticed that the sm btl and sm coll are sharing an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpool when both are running.  This probably used to be a good idea way back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when (e.g., when we were using a lot more shmem than we needed and core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; counts were lower), but it seems like a bad idea now (e.g., the btl/sm is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fairly specific about the size of the mpool that is created -- it's just big
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enough for its data structures).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm therefore going to change the mpool string names that btl/sm and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; coll/sm are looking for so that they get unique sm mpool modules.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6613.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>In reply to:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6614.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6614.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
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
