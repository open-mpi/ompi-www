<?
$subject_val = "Re: [OMPI devel] knem support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 15:31:04 2014" -->
<!-- isoreceived="20141204203104" -->
<!-- sent="Fri, 5 Dec 2014 05:31:02 +0900" -->
<!-- isosent="20141204203102" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] knem support in sm btl" -->
<!-- id="CAMJJpkU31JhDUF1wspF4w1P=vLUnYyTUE4rEdyOfUA_XNVoOkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1F0E3DC5-9E1F-4E5E-9289-42C8AB8BB29F_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-04 15:31:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can't use the PML error reporting mechanism in this particular
<br>
instance, it is too early in the setup process (in the BTL component init
<br>
function) and the PML has not setup the error callback yet.
<br>
<p>This function is called during the MPI_Init, at a time where most of the
<br>
Open MPI infrastructure is not yet setup. I guess the safest way to force
<br>
the process to fail is to call exit or maybe abort.
<br>
<p>George.
<br>
<p><p><p>On Fri, Dec 5, 2014 at 3:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; You're supposed to call the PML error handler, which was passed down to
</span><br>
<span class="quotelev1">&gt; the BTL during initialization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, the BTL registers a btl_register_error function with the PML.
</span><br>
<span class="quotelev1">&gt; The PML then calls this function and passes in its error handler function
</span><br>
<span class="quotelev1">&gt; pointer.  The BTL can then use that error handler to tell the PML when an
</span><br>
<span class="quotelev1">&gt; error occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, the only PML error handler aborts the job.  So this should be a
</span><br>
<span class="quotelev1">&gt; sufficient mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2014, at 12:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; We talked during the telecon about the user-reported issue where they
</span><br>
<span class="quotelev1">&gt; asked for knem support, it wasn&#226;&#128;&#153;t available on the system, but we ran
</span><br>
<span class="quotelev1">&gt; anyway at a reduced performance level. The agreement we had was that OMPI
</span><br>
<span class="quotelev1">&gt; should instead fail at that point since the user had requested something we
</span><br>
<span class="quotelev1">&gt; could not do. I got tasked with implementing this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the problem code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    /* If &quot;use_knem&quot; is positive, then it's an error if knem support
</span><br>
<span class="quotelev2">&gt; &gt;       is not available -- deactivate the sm btl. */
</span><br>
<span class="quotelev2">&gt; &gt;    if (mca_btl_sm_component.use_knem &gt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt;        opal_show_help(&quot;help-mpi-btl-sm.txt&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                       &quot;knem requested but not available&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                       true, opal_process_info.nodename);
</span><br>
<span class="quotelev2">&gt; &gt;        return NULL;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As you can see, we deactivate sm but do not necessarily fail. Question
</span><br>
<span class="quotelev1">&gt; for you folks: how do I cause us to safely fail from within a BTL??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16425.php">http://www.open-mpi.org/community/lists/devel/2014/12/16425.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16435.php">http://www.open-mpi.org/community/lists/devel/2014/12/16435.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16437.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] knem support in sm btl"</a>
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
