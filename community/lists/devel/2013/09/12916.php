<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 17:01:58 2013" -->
<!-- isoreceived="20130917210158" -->
<!-- sent="Tue, 17 Sep 2013 23:01:57 +0200" -->
<!-- isosent="20130917210157" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="381173B1-59C6-4BF8-ACD0-5B8577F1D918_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="57123B27-50A7-4C62-B455-C9BD537B54A4_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 17:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12917.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12915.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12915.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12917.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12917.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>On Sep 17, 2013, at 20:13 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess we could argue this for awhile, but I personally don't care how it gets fixed. The issue here is that (a) you promised to provide a &quot;better&quot; fix nearly a year ago, (b) it never happened, and &#169; a user who has patiently waited all this time has asked if we could please fix it.
</span><br>
<p>There seem to be some misunderstanding here. Believe me, I have neither time nor interest in vain arguments but in this case I was not arguing, I was just trying to be polite and explain the problem so that people can understand the real issue and the fact that there was no room for argument. Dot. Your patch is not correct, as it addresses a non existent issue in MPI. But it appears somehow I failed not make myself clear here, and you took my message as some kind of joke.
<br>
<p><span class="quotelev1">&gt; It now works, but if you want to provide a better solution, please do - I have no issue with it. However, until you do, I propose to use what we have.
</span><br>
<p>It does not work. It fixes a minimalistic corner case without addressing the real problem. You can leave it in the trunk if so you wish, but it definitively should not make it in the 1.7.
<br>
<p>Let me try another approach. A complete test case for this is to add an MPI_Barrier on the intercom before the call to MPI_Intercomm_merge, the one merging the communicator created by MPI_Intercomm_create (this MPI_Barrier should be added on both the parent and the children code). If this test passes with the current patch, then I misunderstood your patch and I'm entirely in the wrong.
<br>
<p><span class="quotelev1">&gt; As for the commit message, I really have no interest in spending time debating the proper way to say something. :-)
</span><br>
<p>I do, words have meaning for a good reason. Please read the Section 6.6.2 in the MPI standard, and you will understand why your commit message was slightly distorting the reality of the MPI standard.
<br>
<p>George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2013, at 10:40 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think your patch is addressing the right issue. In fact your commit treat the wrong symptom instead of addressing the core issue that generate the problem. Let me explain this in terms of MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI_Intercomm_merge function transform an inter-comm into an intra-comm, basically a two groups world into a single group world. Under the MPI standard the two groups handled by this function should be able to talk to each other in this inter-comm. So, your patch fixes a non existent problem, as the processes were already supposed to be able to communicate together before the MPI_Intercomm_merge. The real issue (which was highlighted in the original email exchange) is that during the MPI_Intercom_create the bridge communicator is not used to correctly exchange the modex of the two groups of processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In addition I have two smaller issues related to this patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. The commit message is misleading, at least from the MPI standpoint.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. This function is one of the few MPI-2 dynamic processing functions that can be solved purely at the OMPI layer, without a need for extra functionality from the RTE. The infrastructure of the correct solution is already in the trunk, what is missing is the correct exchange of the complete modex information of the two groups instead of exchanging their OMPI_ARCH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Based on the fact that the band-aid is not really solving the right problem I propose the removal of this patch from the trunk, and the blocking of the pending CMR until a better solution is found.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 15, 2013, at 17:01 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I fixed it and have filed a cmr to move it to 1.7.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your patience, and for reminding me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 13, 2013, at 12:05 PM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Ralph, that would be great if you could give it a try. We have been hoping for it for a year now and it could greatly benefit us if this is fixed!! :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Suraj
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Sep 13, 2013 at 5:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It has been a low priority issue, and hence not resolved yet. I doubt it will make 1.7.3, though if you need it, I'll give it a try.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 13, 2013, at 7:21 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Is there a plan to fix the problem with MPI_Intercomm_merge with 1.7.3 as stated in this ticket? We are really in need of this at the moment. Any hints?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; We face the following problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Parents (x and y) spawn child (z). (all of them execute on separate nodes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; x is the root.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; x,y and z do an MPI_Intercomm_merge.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; x and z are able to communicate properly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; But y and z are not able to communicate after the merge.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Is this bug in high priority for the next release?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Best,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Suraj
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Suraj Prabhakaran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12917.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12915.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12915.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12917.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12917.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
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
