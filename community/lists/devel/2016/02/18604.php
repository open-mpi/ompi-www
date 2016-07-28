<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 15:29:24 2016" -->
<!-- isoreceived="20160217202924" -->
<!-- sent="Wed, 17 Feb 2016 12:29:20 -0800" -->
<!-- isosent="20160217202920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="2A8B87F4-AA5E-42D2-8496-3C5A3F4C6E56_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj7kLZpsWUD3iWfR7Zv9-CQyO8TZx1hAnKRUbM68heQn5Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-17 15:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18605.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18603.php">Howard Pritchard: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18603.php">Howard Pritchard: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18605.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18605.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably should - looks like this may take more thought and probably will be handled in discussions next week
<br>
<p><p><span class="quotelev1">&gt; On Feb 17, 2016, at 11:26 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should we revert PR 1351 till there is a fix?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-02-17 11:34 GMT-07:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; FWIW: I wouldn&#226;&#128;&#153;t have seen that because I don&#226;&#128;&#153;t have IB on my system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 17, 2016, at 10:11 AM, Nysal Jan K A &lt;jnysal_at_[hidden] &lt;mailto:jnysal_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So this seems to be still broken.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib.so: undefined symbol: opal_memory_linux_malloc_set_alignment
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I built with &quot;--with-memory-manager=none&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; --Nysal
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 16, 2016 at 10:19 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It is very easy to reproduce - configure with:
</span><br>
<span class="quotelev2">&gt;&gt; enable_mem_debug=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_mem_profile=no
</span><br>
<span class="quotelev2">&gt;&gt; enable_memchecker=no
</span><br>
<span class="quotelev2">&gt;&gt; with_memory_manager=no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m not sure which of those is required. However, your assertion is incorrect. The person who introduced the original violation went to great lengths to ensure it didn&#226;&#128;&#153;t create a problem if the referenced component was not built. I&#226;&#128;&#153;m not saying it was a good thing to do, but we spent a lot of time discussing it and figuring out how to do it without causing the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So whatever was done missed those precautions and introduced this symbol regardless of the configuration.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 15, 2016, at 8:39 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is being discussed at <a href="https://github.com/open-mpi/ompi/pull/1351">https://github.com/open-mpi/ompi/pull/1351</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1351">https://github.com/open-mpi/ompi/pull/1351</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btw, how do you get this warning ? i do not see it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fwiw, the abstraction violation was kind of already here, so i am surprised it pops up now only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/16/2016 1:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looks like someone broke the master build on Linux:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect it was a hard-coded reference to some component&#226;&#128;&#153;s variable?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18598.php">http://www.open-mpi.org/community/lists/devel/2016/02/18598.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18598.php">http://www.open-mpi.org/community/lists/devel/2016/02/18598.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18599.php">http://www.open-mpi.org/community/lists/devel/2016/02/18599.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18599.php">http://www.open-mpi.org/community/lists/devel/2016/02/18599.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18600.php">http://www.open-mpi.org/community/lists/devel/2016/02/18600.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18600.php">http://www.open-mpi.org/community/lists/devel/2016/02/18600.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18601.php">http://www.open-mpi.org/community/lists/devel/2016/02/18601.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18601.php">http://www.open-mpi.org/community/lists/devel/2016/02/18601.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18602.php">http://www.open-mpi.org/community/lists/devel/2016/02/18602.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18602.php">http://www.open-mpi.org/community/lists/devel/2016/02/18602.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18603.php">http://www.open-mpi.org/community/lists/devel/2016/02/18603.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18605.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18603.php">Howard Pritchard: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18603.php">Howard Pritchard: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18605.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18605.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk is broken"</a>
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
