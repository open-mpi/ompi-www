<?
$subject_val = "Re: [OMPI devel] Changes to classes in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 04:40:05 2013" -->
<!-- isoreceived="20131009084005" -->
<!-- sent="Wed, 9 Oct 2013 10:40:04 +0200" -->
<!-- isosent="20131009084004" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changes to classes in OMPI" -->
<!-- id="475A0F53-D819-4A0F-A702-18A305111FCB_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9463307C-2E40-4121-B4CD-B0E1B44AB5D8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changes to classes in OMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 04:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Previous message:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>In reply to:</strong> <a href="13070.php">Ralph Castain: "[OMPI devel] Changes to classes in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13077.php">Ralph Castain: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Reply:</strong> <a href="13077.php">Ralph Castain: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My concern is that increasing the number of interfaces will not make the code thread safe, as in most cases thread safety is not only a matter of using a _mt version of the basic class object but a matter of a careful manipulation of higher level concepts.
<br>
<p>We can hardly use the lack of the _MT function as a reason for not having thread safety in the code. We did have the thread safety a while back without the support of _MT version of all the basic classes. 
<br>
<p>So I really wonder what is the rationale behind such an intrusive change of the codebase?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Oct 8, 2013, at 18:14 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was one item from the last devel meeting that can be done independent of other things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		&#149; resolution: all opal and orte (and possibly ompi) classes need to have a thread safe and thread-free interface
</span><br>
<span class="quotelev1">&gt; 			&#149; _st suffix: single thread (i.e., not thread safe variant)
</span><br>
<span class="quotelev1">&gt; 			&#149; _mt suffix: multi thread (i.e., thread safe variant)
</span><br>
<span class="quotelev1">&gt; 				&#149; for functions that have both st/mt, they will *both* have suffixes
</span><br>
<span class="quotelev1">&gt; 				&#149; other functions (that do not have st/mt versions) will be naked names
</span><br>
<span class="quotelev1">&gt; 			&#149; need to rename all classes that have locking enabled already (e.g., opal_free_list)
</span><br>
<span class="quotelev1">&gt; 			&#149; so today, we go rename all the functions (e.g., opal_free_list functions get _mt suffix) throughout the code base
</span><br>
<span class="quotelev1">&gt; 			&#149; as someone needs the _st version, they go create it and use it as they want to
</span><br>
<span class="quotelev1">&gt; 			&#149; Ralph will do the orte classes
</span><br>
<span class="quotelev1">&gt; 			&#149; Aurelien will do this for the ompi classes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe some of these have been done - I will take care of the ORTE classes this week, so consider this a &quot;heads up&quot; for that change.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Previous message:</strong> <a href="13073.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add GPU Direct RDMA support to openib btl"</a>
<li><strong>In reply to:</strong> <a href="13070.php">Ralph Castain: "[OMPI devel] Changes to classes in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13077.php">Ralph Castain: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Reply:</strong> <a href="13077.php">Ralph Castain: "Re: [OMPI devel] Changes to classes in OMPI"</a>
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
