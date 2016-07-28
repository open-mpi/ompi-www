<?
$subject_val = "Re: [OMPI devel] thread safety of the self btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 21:48:03 2012" -->
<!-- isoreceived="20120209024803" -->
<!-- sent="Wed, 8 Feb 2012 21:47:57 -0500" -->
<!-- isosent="20120209024757" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread safety of the self btl" -->
<!-- id="285DC143-44BD-457A-9626-62235E946652_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120209130857.4ff33a23_at_Gantu.yeoh.info" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 21:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10352.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed. The lists you pinpoint at are used via the OMPI_FREE_LIST_GET macro, which is based on atomic operations. We're all safe on that front.
<br>
<p>Even if multiple threads call the self BTL functions simultaneously we are safe due to the MPI semantics (the matching logic is protected, it can succeed only for one thread).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 8, 2012, at 21:38 , Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 8 Feb 2012 20:58:52 -0500
</span><br>
<span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The self BTL is different from any other BTL. Any memcpy operation
</span><br>
<span class="quotelev2">&gt;&gt; done by this BTL is automatically protected behind the matching
</span><br>
<span class="quotelev2">&gt;&gt; logic, and therefore does not require extra thread safety protection.
</span><br>
<span class="quotelev2">&gt;&gt; A mutex in the self BTL is mostly a copy/paste mistake.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So just to clarify, you don't just mean the data source and
</span><br>
<span class="quotelev1">&gt; destination memory being protected by the matching logic, but 
</span><br>
<span class="quotelev1">&gt; also various linked lists such as self_frags_[eager|send|rdma] 
</span><br>
<span class="quotelev1">&gt; are implicitly protected? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ie. Pretty much need an implicit guarantee that only one thread at a
</span><br>
<span class="quotelev1">&gt; time will ever call the btl self functions which manipulate those lists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 8, 2012, at 17:57 , Christopher Yeoh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've noticed that the self btl does not do any locking. It has one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lock defined but its not actually used anywhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I'm just wondering if that is an oversight or if there is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reason that we know for sure that there will never be concurrent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access to that particular btl with threads enabled?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cyeoh_at_[hidden]
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; cyeoh_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10352.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
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
