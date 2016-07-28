<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 23:49:06 2016" -->
<!-- isoreceived="20160216044906" -->
<!-- sent="Mon, 15 Feb 2016 20:49:03 -0800" -->
<!-- isosent="20160216044903" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="EB71F274-786F-4A34-9242-466CDF6B74FD_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56C2A805.2030003_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-02-15 23:49:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18601.php">Nysal Jan K A: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18601.php">Nysal Jan K A: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18601.php">Nysal Jan K A: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is very easy to reproduce - configure with:
<br>
enable_mem_debug=no
<br>
enable_mem_profile=no
<br>
enable_memchecker=no
<br>
with_memory_manager=no
<br>
<p>I&#146;m not sure which of those is required. However, your assertion is incorrect. The person who introduced the original violation went to great lengths to ensure it didn&#146;t create a problem if the referenced component was not built. I&#146;m not saying it was a good thing to do, but we spent a lot of time discussing it and figuring out how to do it without causing the problem.
<br>
<p>So whatever was done missed those precautions and introduced this symbol regardless of the configuration.
<br>
<p><p><span class="quotelev1">&gt; On Feb 15, 2016, at 8:39 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is being discussed at <a href="https://github.com/open-mpi/ompi/pull/1351">https://github.com/open-mpi/ompi/pull/1351</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/1351">https://github.com/open-mpi/ompi/pull/1351</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btw, how do you get this warning ? i do not see it.
</span><br>
<span class="quotelev1">&gt; fwiw, the abstraction violation was kind of already here, so i am surprised it pops up now only
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
<span class="quotelev2">&gt;&gt; Looks like someone broke the master build on Linux:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `opal_memory_linux_malloc_init_hook'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suspect it was a hard-coded reference to some component&#146;s variable?
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
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18598.php">http://www.open-mpi.org/community/lists/devel/2016/02/18598.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/02/18598.php">http://www.open-mpi.org/community/lists/devel/2016/02/18598.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18599.php">http://www.open-mpi.org/community/lists/devel/2016/02/18599.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18601.php">Nysal Jan K A: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18601.php">Nysal Jan K A: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18601.php">Nysal Jan K A: "Re: [OMPI devel] Trunk is broken"</a>
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
