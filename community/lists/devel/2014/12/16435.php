<?
$subject_val = "Re: [OMPI devel] knem support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 13:40:49 2014" -->
<!-- isoreceived="20141204184049" -->
<!-- sent="Thu, 4 Dec 2014 18:40:47 +0000" -->
<!-- isosent="20141204184047" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] knem support in sm btl" -->
<!-- id="1F0E3DC5-9E1F-4E5E-9289-42C8AB8BB29F_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="B3EA5E41-D959-4071-B2DF-6BACE15E8D9D_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-04 13:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16436.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16425.php">Ralph Castain: "[OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16436.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16436.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're supposed to call the PML error handler, which was passed down to the BTL during initialization.
<br>
<p>That is, the BTL registers a btl_register_error function with the PML.  The PML then calls this function and passes in its error handler function pointer.  The BTL can then use that error handler to tell the PML when an error occurs.
<br>
<p>Right now, the only PML error handler aborts the job.  So this should be a sufficient mechanism.
<br>
<p><p>On Dec 3, 2014, at 12:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We talked during the telecon about the user-reported issue where they asked for knem support, it wasn&#146;t available on the system, but we ran anyway at a reduced performance level. The agreement we had was that OMPI should instead fail at that point since the user had requested something we could not do. I got tasked with implementing this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the problem code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* If &quot;use_knem&quot; is positive, then it's an error if knem support
</span><br>
<span class="quotelev1">&gt;       is not available -- deactivate the sm btl. */
</span><br>
<span class="quotelev1">&gt;    if (mca_btl_sm_component.use_knem &gt; 0) {
</span><br>
<span class="quotelev1">&gt;        opal_show_help(&quot;help-mpi-btl-sm.txt&quot;,
</span><br>
<span class="quotelev1">&gt;                       &quot;knem requested but not available&quot;,
</span><br>
<span class="quotelev1">&gt;                       true, opal_process_info.nodename);
</span><br>
<span class="quotelev1">&gt;        return NULL;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, we deactivate sm but do not necessarily fail. Question for you folks: how do I cause us to safely fail from within a BTL??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16425.php">http://www.open-mpi.org/community/lists/devel/2014/12/16425.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16436.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16434.php">Artem Polyakov: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16425.php">Ralph Castain: "[OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16436.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16436.php">George Bosilca: "Re: [OMPI devel] knem support in sm btl"</a>
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
