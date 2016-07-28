<?
$subject_val = "Re: [OMPI devel] sm_coll segv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 07:26:56 2009" -->
<!-- isoreceived="20090810112656" -->
<!-- sent="Mon, 10 Aug 2009 14:26:51 +0300" -->
<!-- isosent="20090810112651" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm_coll segv" -->
<!-- id="453d39990908100426n788bf1a6t24041dda29715056_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0908070051r6b5cb609gfe2a3c4f59050b93_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-10 07:26:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6607.php">Ralph Castain: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We saw these seqv too with and without setting sm btl .
<br>
<p>On Fri, Aug 7, 2009 at 10:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 6, 2009 at 3:18 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, with Terry's help, I found a segv in the coll sm.  If you run without
</span><br>
<span class="quotelev2">&gt;&gt; the sm btl, there's an obvious bad parameter that we're passing that results
</span><br>
<span class="quotelev2">&gt;&gt; in a segv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LANL -- can you confirm / deny that these are the segv's that you were
</span><br>
<span class="quotelev2">&gt;&gt; seeing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes we can deny that those are the segv's we were seeing - we definitely
</span><br>
<span class="quotelev1">&gt; had the sm btl active. I'll rerun the test on Monday and add the stacktrace
</span><br>
<span class="quotelev1">&gt; to your ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While fixing this, I noticed that the sm btl and sm coll are sharing an
</span><br>
<span class="quotelev2">&gt;&gt; mpool when both are running.  This probably used to be a good idea way back
</span><br>
<span class="quotelev2">&gt;&gt; when (e.g., when we were using a lot more shmem than we needed and core
</span><br>
<span class="quotelev2">&gt;&gt; counts were lower), but it seems like a bad idea now (e.g., the btl/sm is
</span><br>
<span class="quotelev2">&gt;&gt; fairly specific about the size of the mpool that is created -- it's just big
</span><br>
<span class="quotelev2">&gt;&gt; enough for its data structures).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm therefore going to change the mpool string names that btl/sm and
</span><br>
<span class="quotelev2">&gt;&gt; coll/sm are looking for so that they get unique sm mpool modules.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6609.php">Ralph Castain: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6607.php">Ralph Castain: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
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
