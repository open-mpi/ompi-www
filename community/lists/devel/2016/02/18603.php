<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 14:26:24 2016" -->
<!-- isoreceived="20160217192624" -->
<!-- sent="Wed, 17 Feb 2016 12:26:22 -0700" -->
<!-- isosent="20160217192622" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="CAF1Cqj7kLZpsWUD3iWfR7Zv9-CQyO8TZx1hAnKRUbM68heQn5Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EC93C012-BEBA-47A2-B8FA-E4F5CAF609F5_at_open-mpi.org" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-17 14:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Should we revert PR 1351 till there is a fix?
<br>
<p>Howard
<br>
<p><p>2016-02-17 11:34 GMT-07:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; FWIW: I wouldn&#226;&#128;&#153;t have seen that because I don&#226;&#128;&#153;t have IB on my system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 17, 2016, at 10:11 AM, Nysal Jan K A &lt;jnysal_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this seems to be still broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so: undefined symbol: opal_memory_linux_malloc_set_alignment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built with &quot;--with-memory-manager=none&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 16, 2016 at 10:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m not sure which of those is required. However, your assertion is
</span><br>
<span class="quotelev2">&gt;&gt; incorrect. The person who introduced the original violation went to great
</span><br>
<span class="quotelev2">&gt;&gt; lengths to ensure it didn&#226;&#128;&#153;t create a problem if the referenced component
</span><br>
<span class="quotelev2">&gt;&gt; was not built. I&#226;&#128;&#153;m not saying it was a good thing to do, but we spent a lot
</span><br>
<span class="quotelev2">&gt;&gt; of time discussing it and figuring out how to do it without causing the
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So whatever was done missed those precautions and introduced this symbol
</span><br>
<span class="quotelev2">&gt;&gt; regardless of the configuration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 15, 2016, at 8:39 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is being discussed at <a href="https://github.com/open-mpi/ompi/pull/1351">https://github.com/open-mpi/ompi/pull/1351</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, how do you get this warning ? i do not see it.
</span><br>
<span class="quotelev2">&gt;&gt; fwiw, the abstraction violation was kind of already here, so i am
</span><br>
<span class="quotelev2">&gt;&gt; surprised it pops up now only
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
<span class="quotelev2">&gt;&gt; On 2/16/2016 1:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like someone broke the master build on Linux:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect it was a hard-coded reference to some component&#226;&#128;&#153;s variable?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18598.php">http://www.open-mpi.org/community/lists/devel/2016/02/18598.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18599.php">http://www.open-mpi.org/community/lists/devel/2016/02/18599.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18600.php">http://www.open-mpi.org/community/lists/devel/2016/02/18600.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18601.php">http://www.open-mpi.org/community/lists/devel/2016/02/18601.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18602.php">http://www.open-mpi.org/community/lists/devel/2016/02/18602.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18602.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
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
