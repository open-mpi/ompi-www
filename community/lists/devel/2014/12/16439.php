<?
$subject_val = "Re: [OMPI devel] knem support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 15:52:45 2014" -->
<!-- isoreceived="20141204205245" -->
<!-- sent="Fri, 5 Dec 2014 05:52:44 +0900" -->
<!-- isosent="20141204205244" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] knem support in sm btl" -->
<!-- id="CAMJJpkWOs7LPDu1cF35zLrQn3xVBuNC+S78XQHQfe=QO6jKFnQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9650D518-1C22-4885-B330-92D0163DDB23_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-12-04 15:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16440.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16438.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16438.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16440.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16440.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was not advocating calling exit. I was merely suggesting that due to
<br>
earliness in the initialization process, and to the fact that we are
<br>
lacking the infrastructure to abort because a specific user request cannot
<br>
be complied to, calling exit seems like a reasonable bandaid.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Fri, Dec 5, 2014 at 5:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Let me get this straight - you are advocating that I call &#226;&#128;&#156;exit&#226;&#128;&#157; directly
</span><br>
<span class="quotelev1">&gt; from within a library?? I thought that was &#226;&#128;&#156;verboten&#226;&#128;&#157; - MPI_Init should
</span><br>
<span class="quotelev1">&gt; just return an error somehow, yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2014, at 12:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Oh, good catch -- thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wouldn't call abort -- that will dump core.  Just show_help() and
</span><br>
<span class="quotelev1">&gt; exit(nonzero), I guess.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2014, at 3:31 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can't use the PML error reporting mechanism in this particular
</span><br>
<span class="quotelev1">&gt; instance, it is too early in the setup process (in the BTL component init
</span><br>
<span class="quotelev1">&gt; function) and the PML has not setup the error callback yet.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This function is called during the MPI_Init, at a time where most of
</span><br>
<span class="quotelev1">&gt; the Open MPI infrastructure is not yet setup. I guess the safest way to
</span><br>
<span class="quotelev1">&gt; force the process to fail is to call exit or maybe abort.
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
<span class="quotelev3">&gt; &gt;&gt; On Fri, Dec 5, 2014 at 3:40 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You're supposed to call the PML error handler, which was passed down to
</span><br>
<span class="quotelev1">&gt; the BTL during initialization.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That is, the BTL registers a btl_register_error function with the PML.
</span><br>
<span class="quotelev1">&gt; The PML then calls this function and passes in its error handler function
</span><br>
<span class="quotelev1">&gt; pointer.  The BTL can then use that error handler to tell the PML when an
</span><br>
<span class="quotelev1">&gt; error occurs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Right now, the only PML error handler aborts the job.  So this should
</span><br>
<span class="quotelev1">&gt; be a sufficient mechanism.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 3, 2014, at 12:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We talked during the telecon about the user-reported issue where they
</span><br>
<span class="quotelev1">&gt; asked for knem support, it wasn&#226;&#128;&#153;t available on the system, but we ran
</span><br>
<span class="quotelev1">&gt; anyway at a reduced performance level. The agreement we had was that OMPI
</span><br>
<span class="quotelev1">&gt; should instead fail at that point since the user had requested something we
</span><br>
<span class="quotelev1">&gt; could not do. I got tasked with implementing this.
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
<span class="quotelev4">&gt; &gt;&gt;&gt; As you can see, we deactivate sm but do not necessarily fail. Question
</span><br>
<span class="quotelev1">&gt; for you folks: how do I cause us to safely fail from within a BTL??
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
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16425.php">http://www.open-mpi.org/community/lists/devel/2014/12/16425.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16435.php">http://www.open-mpi.org/community/lists/devel/2014/12/16435.php</a>
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
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16436.php">http://www.open-mpi.org/community/lists/devel/2014/12/16436.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16437.php">http://www.open-mpi.org/community/lists/devel/2014/12/16437.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16438.php">http://www.open-mpi.org/community/lists/devel/2014/12/16438.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16440.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Previous message:</strong> <a href="16438.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="16438.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16440.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
<li><strong>Reply:</strong> <a href="16440.php">Ralph Castain: "Re: [OMPI devel] knem support in sm btl"</a>
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
