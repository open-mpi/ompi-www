<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 07:34:45 2013" -->
<!-- isoreceived="20130917113445" -->
<!-- sent="Tue, 17 Sep 2013 13:34:40 +0200" -->
<!-- isosent="20130917113440" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="98F79B90-2A55-4AC2-AC9E-16AE09421FFE_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55E104AF-C0D3-42DC-96C2-41A69C46B0A3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-09-17 07:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12910.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>In reply to:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12914.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks a lot!!! thats really cool!! 
<br>
<p>Best,
<br>
Suraj
<br>
<p>On Sep 15, 2013, at 5:01 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I fixed it and have filed a cmr to move it to 1.7.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your patience, and for reminding me
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2013, at 12:05 PM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph, that would be great if you could give it a try. We have been hoping for it for a year now and it could greatly benefit us if this is fixed!! :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Suraj
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 13, 2013 at 5:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It has been a low priority issue, and hence not resolved yet. I doubt it will make 1.7.3, though if you need it, I'll give it a try.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 13, 2013, at 7:21 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is there a plan to fix the problem with MPI_Intercomm_merge with 1.7.3 as stated in this ticket? We are really in need of this at the moment. Any hints?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We face the following problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Parents (x and y) spawn child (z). (all of them execute on separate nodes)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; x is the root.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; x,y and z do an MPI_Intercomm_merge.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; x and z are able to communicate properly.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But y and z are not able to communicate after the merge.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is this bug in high priority for the next release?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Suraj
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Suraj Prabhakaran
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12909/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12910.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>In reply to:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12914.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
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
