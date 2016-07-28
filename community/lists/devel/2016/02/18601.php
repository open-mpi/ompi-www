<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 13:11:34 2016" -->
<!-- isoreceived="20160217181134" -->
<!-- sent="Wed, 17 Feb 2016 23:41:32 +0530" -->
<!-- isosent="20160217181132" -->
<!-- name="Nysal Jan K A" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="CAMQsnoai1_T4ApGsuPKSTCNZBuh0a+F1HAuV77w9YHuyN_Q2Yw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EB71F274-786F-4A34-9242-466CDF6B74FD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Nysal Jan K A (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-17 13:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18600.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18600.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So this seems to be still broken.
<br>
<p>mca_btl_openib.so: undefined symbol: opal_memory_linux_malloc_set_alignment
<br>
<p>I built with &quot;--with-memory-manager=none&quot;
<br>
<p>Regards
<br>
--Nysal
<br>
<p>On Tue, Feb 16, 2016 at 10:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is very easy to reproduce - configure with:
</span><br>
<span class="quotelev1">&gt; enable_mem_debug=no
</span><br>
<span class="quotelev1">&gt; enable_mem_profile=no
</span><br>
<span class="quotelev1">&gt; enable_memchecker=no
</span><br>
<span class="quotelev1">&gt; with_memory_manager=no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m not sure which of those is required. However, your assertion is
</span><br>
<span class="quotelev1">&gt; incorrect. The person who introduced the original violation went to great
</span><br>
<span class="quotelev1">&gt; lengths to ensure it didn&#226;&#128;&#153;t create a problem if the referenced component
</span><br>
<span class="quotelev1">&gt; was not built. I&#226;&#128;&#153;m not saying it was a good thing to do, but we spent a lot
</span><br>
<span class="quotelev1">&gt; of time discussing it and figuring out how to do it without causing the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So whatever was done missed those precautions and introduced this symbol
</span><br>
<span class="quotelev1">&gt; regardless of the configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2016, at 8:39 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is being discussed at <a href="https://github.com/open-mpi/ompi/pull/1351">https://github.com/open-mpi/ompi/pull/1351</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, how do you get this warning ? i do not see it.
</span><br>
<span class="quotelev1">&gt; fwiw, the abstraction violation was kind of already here, so i am
</span><br>
<span class="quotelev1">&gt; surprised it pops up now only
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
<span class="quotelev1">&gt; On 2/16/2016 1:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like someone broke the master build on Linux:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect it was a hard-coded reference to some component&#226;&#128;&#153;s variable?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18598.php">http://www.open-mpi.org/community/lists/devel/2016/02/18598.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18599.php">http://www.open-mpi.org/community/lists/devel/2016/02/18599.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18600.php">http://www.open-mpi.org/community/lists/devel/2016/02/18600.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18600.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18600.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
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
