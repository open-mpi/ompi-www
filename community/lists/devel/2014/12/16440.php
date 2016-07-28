<?
$subject_val = "Re: [OMPI devel] knem support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 15:57:22 2014" -->
<!-- isoreceived="20141204205722" -->
<!-- sent="Thu, 4 Dec 2014 12:57:18 -0800" -->
<!-- isosent="20141204205718" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] knem support in sm btl" -->
<!-- id="016C961D-DC36-4A7D-974D-658BF29C6EDC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkWOs7LPDu1cF35zLrQn3xVBuNC+S78XQHQfe=QO6jKFnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] knem support in sm btl<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-04 15:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16441.php">Pim Schellart: "[OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kewl - just wanted to double check as this had come up before, and people felt strongly about it. I didn&#226;&#128;&#153;t see any clear way to pass the error back to MPI_Init, which is why I started this thread. Sounds like one doesn&#226;&#128;&#153;t exist, so exit is probably the only real option.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Dec 4, 2014, at 12:52 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was not advocating calling exit. I was merely suggesting that due to earliness in the initialization process, and to the fact that we are lacking the infrastructure to abort because a specific user request cannot be complied to, calling exit seems like a reasonable bandaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 5, 2014 at 5:38 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Let me get this straight - you are advocating that I call &#226;&#128;&#156;exit&#226;&#128;&#157; directly from within a library?? I thought that was &#226;&#128;&#156;verboten&#226;&#128;&#157; - MPI_Init should just return an error somehow, yes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2014, at 12:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Oh, good catch -- thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wouldn't call abort -- that will dump core.  Just show_help() and exit(nonzero), I guess.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2014, at 3:31 PM, George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can't use the PML error reporting mechanism in this particular instance, it is too early in the setup process (in the BTL component init function) and the PML has not setup the error callback yet.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This function is called during the MPI_Init, at a time where most of the Open MPI infrastructure is not yet setup. I guess the safest way to force the process to fail is to call exit or maybe abort.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Dec 5, 2014 at 3:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You're supposed to call the PML error handler, which was passed down to the BTL during initialization.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That is, the BTL registers a btl_register_error function with the PML.  The PML then calls this function and passes in its error handler function pointer.  The BTL can then use that error handler to tell the PML when an error occurs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Right now, the only PML error handler aborts the job.  So this should be a sufficient mechanism.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 3, 2014, at 12:15 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We talked during the telecon about the user-reported issue where they asked for knem support, it wasn&#226;&#128;&#153;t available on the system, but we ran anyway at a reduced performance level. The agreement we had was that OMPI should instead fail at that point since the user had requested something we could not do. I got tasked with implementing this.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here is the problem code:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   /* If &quot;use_knem&quot; is positive, then it's an error if knem support
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      is not available -- deactivate the sm btl. */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   if (mca_btl_sm_component.use_knem &gt; 0) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       opal_show_help(&quot;help-mpi-btl-sm.txt&quot;,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                      &quot;knem requested but not available&quot;,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                      true, opal_process_info.nodename);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       return NULL;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As you can see, we deactivate sm but do not necessarily fail. Question for you folks: how do I cause us to safely fail from within a BTL??
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16425.php">http://www.open-mpi.org/community/lists/devel/2014/12/16425.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16425.php">http://www.open-mpi.org/community/lists/devel/2014/12/16425.php</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16435.php">http://www.open-mpi.org/community/lists/devel/2014/12/16435.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16435.php">http://www.open-mpi.org/community/lists/devel/2014/12/16435.php</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16436.php">http://www.open-mpi.org/community/lists/devel/2014/12/16436.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16436.php">http://www.open-mpi.org/community/lists/devel/2014/12/16436.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16437.php">http://www.open-mpi.org/community/lists/devel/2014/12/16437.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16437.php">http://www.open-mpi.org/community/lists/devel/2014/12/16437.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16438.php">http://www.open-mpi.org/community/lists/devel/2014/12/16438.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16438.php">http://www.open-mpi.org/community/lists/devel/2014/12/16438.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16439.php">http://www.open-mpi.org/community/lists/devel/2014/12/16439.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16441.php">Pim Schellart: "[OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
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
