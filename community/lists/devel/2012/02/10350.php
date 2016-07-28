<?
$subject_val = "Re: [OMPI devel] thread safety of the self btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 21:38:47 2012" -->
<!-- isoreceived="20120209023847" -->
<!-- sent="Thu, 9 Feb 2012 13:08:57 +1030" -->
<!-- isosent="20120209023857" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread safety of the self btl" -->
<!-- id="20120209130857.4ff33a23_at_Gantu.yeoh.info" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8881ECA-70BD-4FE0-9556-EC21C3F99646_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread safety of the self btl<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 21:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10351.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10349.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10351.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10351.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 8 Feb 2012 20:58:52 -0500
<br>
George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The self BTL is different from any other BTL. Any memcpy operation
</span><br>
<span class="quotelev1">&gt; done by this BTL is automatically protected behind the matching
</span><br>
<span class="quotelev1">&gt; logic, and therefore does not require extra thread safety protection.
</span><br>
<span class="quotelev1">&gt; A mutex in the self BTL is mostly a copy/paste mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>So just to clarify, you don't just mean the data source and
<br>
destination memory being protected by the matching logic, but 
<br>
also various linked lists such as self_frags_[eager|send|rdma] 
<br>
are implicitly protected? 
<br>
<p>ie. Pretty much need an implicit guarantee that only one thread at a
<br>
time will ever call the btl self functions which manipulate those lists.
<br>
<p>Regards,
<br>
<p>Chris
<br>
<p><span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2012, at 17:57 , Christopher Yeoh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've noticed that the self btl does not do any locking. It has one
</span><br>
<span class="quotelev2">&gt; &gt; lock defined but its not actually used anywhere.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So I'm just wondering if that is an oversight or if there is a
</span><br>
<span class="quotelev2">&gt; &gt; reason that we know for sure that there will never be concurrent
</span><br>
<span class="quotelev2">&gt; &gt; access to that particular btl with threads enabled?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; cyeoh_at_[hidden]
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
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10351.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10349.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10351.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10351.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
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
