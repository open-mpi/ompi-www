<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 15:05:23 2013" -->
<!-- isoreceived="20130913190523" -->
<!-- sent="Fri, 13 Sep 2013 21:05:22 +0200" -->
<!-- isosent="20130913190522" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="CAMfDe2==3U2faec1vf96T8Q5fheqqsFOG7zjAHT_uN6Z9svMdw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D0F40DD3-4102-4FA6-8083-2AE260F1C8CB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intercomm Merge<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 15:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12896.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Previous message:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
<li><strong>In reply to:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph, that would be great if you could give it a try. We have been
<br>
hoping for it for a year now and it could greatly benefit us if this is
<br>
fixed!! :-)
<br>
<p>Thanks!
<br>
Suraj
<br>
<p><p><p><p>On Fri, Sep 13, 2013 at 5:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It has been a low priority issue, and hence not resolved yet. I doubt it
</span><br>
<span class="quotelev1">&gt; will make 1.7.3, though if you need it, I'll give it a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2013, at 7:21 AM, Suraj Prabhakaran &lt;
</span><br>
<span class="quotelev1">&gt; suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a plan to fix the problem with MPI_Intercomm_merge with 1.7.3
</span><br>
<span class="quotelev1">&gt; as stated in this ticket? We are really in need of this at the moment. Any
</span><br>
<span class="quotelev1">&gt; hints?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We face the following problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Parents (x and y) spawn child (z). (all of them execute on separate
</span><br>
<span class="quotelev1">&gt; nodes)
</span><br>
<span class="quotelev2">&gt; &gt; x is the root.
</span><br>
<span class="quotelev2">&gt; &gt; x,y and z do an MPI_Intercomm_merge.
</span><br>
<span class="quotelev2">&gt; &gt; x and z are able to communicate properly.
</span><br>
<span class="quotelev2">&gt; &gt; But y and z are not able to communicate after the merge.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this bug in high priority for the next release?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt; Suraj
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Regards,
Suraj Prabhakaran
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12896.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem implementation still lacking"</a>
<li><strong>Previous message:</strong> <a href="12894.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem build failures"</a>
<li><strong>In reply to:</strong> <a href="12892.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
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
