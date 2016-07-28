<?
$subject_val = "Re: [OMPI devel] knem support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 15:38:08 2014" -->
<!-- isoreceived="20141204203808" -->
<!-- sent="Thu, 4 Dec 2014 12:38:04 -0800" -->
<!-- isosent="20141204203804" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] knem support in sm btl" -->
<!-- id="9650D518-1C22-4885-B330-92D0163DDB23_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="267E5B64-ECEA-4339-9760-C8D3C7772491_at_cisco.com" -->
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
<strong>Date:</strong> 2014-12-04 15:38:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me get this straight - you are advocating that I call &#147;exit&#148; directly from within a library?? I thought that was &#147;verboten&#148; - MPI_Init should just return an error somehow, yes?
<br>
<p><span class="quotelev1">&gt; On Dec 4, 2014, at 12:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, good catch -- thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wouldn't call abort -- that will dump core.  Just show_help() and exit(nonzero), I guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2014, at 3:31 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can't use the PML error reporting mechanism in this particular instance, it is too early in the setup process (in the BTL component init function) and the PML has not setup the error callback yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This function is called during the MPI_Init, at a time where most of the Open MPI infrastructure is not yet setup. I guess the safest way to force the process to fail is to call exit or maybe abort.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Dec 5, 2014 at 3:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You're supposed to call the PML error handler, which was passed down to the BTL during initialization.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is, the BTL registers a btl_register_error function with the PML.  The PML then calls this function and passes in its error handler function pointer.  The BTL can then use that error handler to tell the PML when an error occurs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Right now, the only PML error handler aborts the job.  So this should be a sufficient mechanism.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 3, 2014, at 12:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We talked during the telecon about the user-reported issue where they asked for knem support, it wasn&#146;t available on the system, but we ran anyway at a reduced performance level. The agreement we had was that OMPI should instead fail at that point since the user had requested something we could not do. I got tasked with implementing this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the problem code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /* If &quot;use_knem&quot; is positive, then it's an error if knem support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      is not available -- deactivate the sm btl. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (mca_btl_sm_component.use_knem &gt; 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       opal_show_help(&quot;help-mpi-btl-sm.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      &quot;knem requested but not available&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      true, opal_process_info.nodename);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can see, we deactivate sm but do not necessarily fail. Question for you folks: how do I cause us to safely fail from within a BTL??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16425.php">http://www.open-mpi.org/community/lists/devel/2014/12/16425.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16435.php">http://www.open-mpi.org/community/lists/devel/2014/12/16435.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16436.php">http://www.open-mpi.org/community/lists/devel/2014/12/16436.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16437.php">http://www.open-mpi.org/community/lists/devel/2014/12/16437.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16439.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
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
