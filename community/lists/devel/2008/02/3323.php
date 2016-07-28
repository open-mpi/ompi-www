<?
$subject_val = "Re: [OMPI devel] Latency optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 16:17:40 2008" -->
<!-- isoreceived="20080228211740" -->
<!-- sent="Thu, 28 Feb 2008 16:17:34 -0500" -->
<!-- isosent="20080228211734" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Latency optimizations" -->
<!-- id="1FEA05D6-CB33-491D-8F5F-3685F5C26B5D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3EC8564.176E5%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Latency optimizations<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 16:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3324.php">Miguel Angel Rodríguez Jódar: "[OMPI devel] New to the list"</a>
<li><strong>Previous message:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>In reply to:</strong> <a href="3321.php">Richard Graham: "[OMPI devel] Latency optimizations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have another send side optimization on the pipeline. As Galen will  
<br>
take care of the receiver side, I can focused on the send side. As far  
<br>
as I see, this will rip off few tens of microsecond, bringing our  
<br>
latency on shared memory to basically the same level as MPICH2. This  
<br>
might requires some small changes in the way the BTLs handle the send  
<br>
operation, but the changes will be really minor. I'll send an RFC  
<br>
around soon.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 28, 2008, at 3:36 PM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; FYI, About six months ago several of us spent some time coming up  
</span><br>
<span class="quotelev1">&gt; with a
</span><br>
<span class="quotelev1">&gt; plan to deal with the latency problems in Open MPI.  George went  
</span><br>
<span class="quotelev1">&gt; ahead and
</span><br>
<span class="quotelev1">&gt; has been implementing the send side changes of this optimization  
</span><br>
<span class="quotelev1">&gt; over the
</span><br>
<span class="quotelev1">&gt; last several months, but has not had time to get to the receive  
</span><br>
<span class="quotelev1">&gt; side. Galen
</span><br>
<span class="quotelev1">&gt; is picking up on this, and will be checking in changes over the next  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; weeks. The gist of these is going from an active-message tag  
</span><br>
<span class="quotelev1">&gt; approach with
</span><br>
<span class="quotelev1">&gt; one tag per protocol (ptp, one-sided, etc) to an 8 bit global tag  
</span><br>
<span class="quotelev1">&gt; space, and
</span><br>
<span class="quotelev1">&gt; finer grain functions (short message, rendezvous packet, ...), as  
</span><br>
<span class="quotelev1">&gt; well as
</span><br>
<span class="quotelev1">&gt; some function consolidation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3323/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3324.php">Miguel Angel Rodríguez Jódar: "[OMPI devel] New to the list"</a>
<li><strong>Previous message:</strong> <a href="3322.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>In reply to:</strong> <a href="3321.php">Richard Graham: "[OMPI devel] Latency optimizations"</a>
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
