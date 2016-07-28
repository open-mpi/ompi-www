<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 17:17:39 2016" -->
<!-- isoreceived="20160217221739" -->
<!-- sent="Wed, 17 Feb 2016 22:17:37 +0000" -->
<!-- isosent="20160217221737" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="etPan.56c4f17f.2bb086a3.cef3_at_JSQUYRES-M-H05C" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2A8B87F4-AA5E-42D2-8496-3C5A3F4C6E56_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-17 17:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18606.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18606.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18606.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nysal --
<br>

<br>
FWIW, I'm unable to replicate the error on master.
<br>

<br>
Did this commit not fix it for you?
<br>

<br>
<a href="https://github.com/open-mpi/ompi/commit/7de01b347cd13544439b4eae86607a535c32489c">https://github.com/open-mpi/ompi/commit/7de01b347cd13544439b4eae86607a535c32489c</a>
<br>

<br>
If it didn't, then we might as well revert that commit and PR 1351 until it's fixed properly.
<br>

<br>

<br>
-----Original Message-----
<br>
From:&#194;&#160;Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Reply:&#194;&#160;Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Date:&#194;&#160;February 17, 2016 at 3:29:32 PM
<br>
To:&#194;&#160;Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Subject:&#194;&#160; Re: [OMPI devel] Trunk is broken
<br>

<br>
<span class="quotelev1">&gt; Probably should - looks like this may take more thought and probably will be handled in  
</span><br>
<span class="quotelev1">&gt; discussions next week
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 17, 2016, at 11:26 AM, Howard Pritchard wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should we revert PR 1351 till there is a fix?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2016-02-17 11:34 GMT-07:00 Ralph Castain &gt;:  
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: I wouldn&#226;&#128;&#153;t have seen that because I don&#226;&#128;&#153;t have IB on my system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 17, 2016, at 10:11 AM, Nysal Jan K A &gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So this seems to be still broken.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_openib.so: undefined symbol: opal_memory_linux_malloc_set_alignment  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I built with &quot;--with-memory-manager=none&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --Nysal
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Feb 16, 2016 at 10:19 AM, Ralph Castain &gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It is very easy to reproduce - configure with:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enable_mem_debug=no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enable_mem_profile=no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enable_memchecker=no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with_memory_manager=no
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I&#226;&#128;&#153;m not sure which of those is required. However, your assertion is incorrect. The  
</span><br>
<span class="quotelev1">&gt; person who introduced the original violation went to great lengths to ensure it didn&#226;&#128;&#153;t  
</span><br>
<span class="quotelev1">&gt; create a problem if the referenced component was not built. I&#226;&#128;&#153;m not saying it was a good  
</span><br>
<span class="quotelev1">&gt; thing to do, but we spent a lot of time discussing it and figuring out how to do it without  
</span><br>
<span class="quotelev1">&gt; causing the problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So whatever was done missed those precautions and introduced this symbol regardless  
</span><br>
<span class="quotelev1">&gt; of the configuration.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Feb 15, 2016, at 8:39 PM, Gilles Gouaillardet &gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; this is being discussed at <a href="https://github.com/open-mpi/ompi/pull/1351">https://github.com/open-mpi/ompi/pull/1351</a>  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btw, how do you get this warning ? i do not see it.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fwiw, the abstraction violation was kind of already here, so i am surprised it pops  
</span><br>
<span class="quotelev1">&gt; up now only
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 2/16/2016 1:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Looks like someone broke the master build on Linux:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `opal_memory_linux_malloc_init_hook'  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I suspect it was a hard-coded reference to some component&#226;&#128;&#153;s variable?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18598.php">http://www.open-mpi.org/community/lists/devel/2016/02/18598.php</a>  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18599.php">http://www.open-mpi.org/community/lists/devel/2016/02/18599.php</a>  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18600.php">http://www.open-mpi.org/community/lists/devel/2016/02/18600.php</a>  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18601.php">http://www.open-mpi.org/community/lists/devel/2016/02/18601.php</a>  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]  
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>  
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18602.php">http://www.open-mpi.org/community/lists/devel/2016/02/18602.php</a>  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18603.php">http://www.open-mpi.org/community/lists/devel/2016/02/18603.php</a>  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18604.php">http://www.open-mpi.org/community/lists/devel/2016/02/18604.php</a>  
</span><br>

<br>
--  
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]  
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18606.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="18604.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18606.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18606.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
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
