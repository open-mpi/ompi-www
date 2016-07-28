<?
$subject_val = "Re: [OMPI devel] 1.8.3 and PSM errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 19:25:28 2014" -->
<!-- isoreceived="20141112002528" -->
<!-- sent="Tue, 11 Nov 2014 17:25:27 -0700" -->
<!-- isosent="20141112002527" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3 and PSM errors" -->
<!-- id="CAF1Cqj4hhnd++VbDg=+SwO8cv=43rFzRWWNb=ZSsQJDopoQN1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="07351519-86BE-4844-8022-C48A8BAF1C4C_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3 and PSM errors<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 19:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16299.php">Rainer Keller: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16297.php">George Bosilca: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16297.php">George Bosilca: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I remember in the psm provider for libfabric, that there is a check in the
<br>
av_insert method for endpoints
<br>
that had previously been inserted into the av.  In the libfabric psm
<br>
provider, a mask array is created and fed
<br>
in to the psm_ep_connect call to handle ep's that were already
<br>
&quot;connected&quot;.  I notice for the psm mtl
<br>
in ompi, a mask array is not provided, just a NULL.
<br>
<p>Howard
<br>
<p><p><p>2014-11-11 16:00 GMT-07:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 11, 2014, at 17:13 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; More particularly, it looks like add_procs is being called a second
</span><br>
<span class="quotelev1">&gt; time during MPI_Intercomm_create and being passed a process that is already
</span><br>
<span class="quotelev1">&gt; connected (passed into the first add_procs call).  Is that right?  Should
</span><br>
<span class="quotelev1">&gt; the MTL handle multiple add_procs calls with the same proc provided?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm afraid I don't know much about the MTL interface.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George / Nathan?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Intercom_create is a funny function, as it can join together two
</span><br>
<span class="quotelev1">&gt; groups of processes that didn&#226;&#128;&#153;t knew each other before. Thus, we have to be
</span><br>
<span class="quotelev1">&gt; conservative in the upper level of the function and provide the entire list
</span><br>
<span class="quotelev1">&gt; of [potentially] new processes to the PML/MTL to add to their known
</span><br>
<span class="quotelev1">&gt; processes. In the case of the PML, this list is then forwarded down to the
</span><br>
<span class="quotelev1">&gt; BTL, where only the new processes are added. Thus, the BTLs support adding
</span><br>
<span class="quotelev1">&gt; multiple time the same process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think a similar mechanism should be added to the MTL. If the process is
</span><br>
<span class="quotelev1">&gt; already known, just mark it as reachable and be done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16297.php">http://www.open-mpi.org/community/lists/devel/2014/11/16297.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16298/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16299.php">Rainer Keller: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16297.php">George Bosilca: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16297.php">George Bosilca: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
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
