<?
$subject_val = "Re: [OMPI devel] GNU Automake 1.14 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 04:28:26 2013" -->
<!-- isoreceived="20130910082826" -->
<!-- sent="Tue, 10 Sep 2013 10:28:26 +0200" -->
<!-- isosent="20130910082826" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GNU Automake 1.14 released" -->
<!-- id="2529079.NprPkGJ5fB_at_rico" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48389DF6-4411-4F2A-903D-441F041822E3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GNU Automake 1.14 released<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 04:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12879.php">Lars Schäfers: "[OMPI devel] Inconsistent description of btl_openib_eager_rdma_num parameter in FAQ"</a>
<li><strong>Previous message:</strong> <a href="12877.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>In reply to:</strong> <a href="12855.php">Ralph Castain: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Tuesday 03 September 2013 16:01:30 Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I still don't see an issue with just detecting the version of automake being
</span><br>
<span class="quotelev1">&gt; used, and setting a conditional that indicates whether or not to use
</span><br>
<span class="quotelev1">&gt; explicitly include the subdir. Seems like a pretty trivial solution.
</span><br>
<p>Ralph, sorry, we don't understand your proposal. The warnings will be 
<br>
generated at automake time. An AM_CONDITIONAL wont help us here.
<br>
<p><span class="quotelev1">&gt; On Sep 3, 2013, at 3:49 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; 
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt; On Sep 3, 2013, at 6:45 PM, Fabr&#237;cio Zimmerer Murta 
</span><br>
&lt;fabricio_at_[hidden]&gt; wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; I think autotools has a concept of disallowing symlinks as it seems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; symlinks can't be done in a portable way, and the goal of autotools is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; making projects portable.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Well, if the autotools user feels like using symlinks, then it must be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; expected to break portability wherever you take your autoconfiscated
</span><br>
<span class="quotelev3">&gt; &gt;&gt; code to. A choice to the user. Maybe in the case, as the project is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bound to specific compilers, it would not be a problem to loose
</span><br>
<span class="quotelev3">&gt; &gt;&gt; portability a bit more by considering symbolic linking around.&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Fair enough.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We've been using sym links in the OMPI project for years in order to
</span><br>
<span class="quotelev2">&gt; &gt; compile a series of .c files in 2 different ways.  It's portable to all
</span><br>
<span class="quotelev2">&gt; &gt; the places that we need/want it.
</span><br>
<p>Jeff, I think you mean the $(LN_S) loops for the PMPI interface. We will have a 
<br>
look into this. Thanks.
<br>
<p>- Bert
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<pre>
-- 
Matthias Jurenz
Technische Universit&#228;t Dresden
Center for Information Services and High Performance Computing (ZIH)
01062 Dresden, Germany
Phone: +49 (351) 463-31945
Fax: +49 (351) 463-37773
E-Mail: matthias.jurenz_at_[hidden]
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12878/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12879.php">Lars Schäfers: "[OMPI devel] Inconsistent description of btl_openib_eager_rdma_num parameter in FAQ"</a>
<li><strong>Previous message:</strong> <a href="12877.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>In reply to:</strong> <a href="12855.php">Ralph Castain: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
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
