<?
$subject_val = "Re: [OMPI devel] Changes to classes in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 09:29:52 2013" -->
<!-- isoreceived="20131009132952" -->
<!-- sent="Wed, 9 Oct 2013 06:29:49 -0700" -->
<!-- isosent="20131009132949" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changes to classes in OMPI" -->
<!-- id="40205F5B-5AC6-40D5-BEC5-6CC680E4A16B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="475A0F53-D819-4A0F-A702-18A305111FCB_at_icl.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 09:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13078.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] More oshmem compile errors"</a>
<li><strong>Previous message:</strong> <a href="13076.php">Mike Dubman: "Re: [OMPI devel] More oshmem compile errors"</a>
<li><strong>In reply to:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13088.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Reply:</strong> <a href="13088.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, the concern was with where the thread safety should reside. Some classes (e.g., opal_list) were littered with thread locks for every operation. So if someone implemented thread protection at a higher level (e.g., protecting the list while cycling thru it), then all these lower-level lock/unlock operations were just a waste of cycles.
<br>
<p>However, some people felt that there were places where it helped to have the locking down below. So this was the compromise - use the version that fits your situation.
<br>
<p>Personally, I'm not wild about it, but I can live with it. I'd prefer to see no lock/unlock calls in the classes themselves as they are too atomistic, and would have opted for providing a macro version of the function that included the appropriate lock/unlocks around the function.
<br>
<p>Anyway, that was the thinking at the meeting last June.
<br>
<p><p>On Oct 9, 2013, at 1:40 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My concern is that increasing the number of interfaces will not make the code thread safe, as in most cases thread safety is not only a matter of using a _mt version of the basic class object but a matter of a careful manipulation of higher level concepts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can hardly use the lack of the _MT function as a reason for not having thread safety in the code. We did have the thread safety a while back without the support of _MT version of all the basic classes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I really wonder what is the rationale behind such an intrusive change of the codebase?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2013, at 18:14 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This was one item from the last devel meeting that can be done independent of other things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 		&#149; resolution: all opal and orte (and possibly ompi) classes need to have a thread safe and thread-free interface
</span><br>
<span class="quotelev2">&gt;&gt; 			&#149; _st suffix: single thread (i.e., not thread safe variant)
</span><br>
<span class="quotelev2">&gt;&gt; 			&#149; _mt suffix: multi thread (i.e., thread safe variant)
</span><br>
<span class="quotelev2">&gt;&gt; 				&#149; for functions that have both st/mt, they will *both* have suffixes
</span><br>
<span class="quotelev2">&gt;&gt; 				&#149; other functions (that do not have st/mt versions) will be naked names
</span><br>
<span class="quotelev2">&gt;&gt; 			&#149; need to rename all classes that have locking enabled already (e.g., opal_free_list)
</span><br>
<span class="quotelev2">&gt;&gt; 			&#149; so today, we go rename all the functions (e.g., opal_free_list functions get _mt suffix) throughout the code base
</span><br>
<span class="quotelev2">&gt;&gt; 			&#149; as someone needs the _st version, they go create it and use it as they want to
</span><br>
<span class="quotelev2">&gt;&gt; 			&#149; Ralph will do the orte classes
</span><br>
<span class="quotelev2">&gt;&gt; 			&#149; Aurelien will do this for the ompi classes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe some of these have been done - I will take care of the ORTE classes this week, so consider this a &quot;heads up&quot; for that change.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13078.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] More oshmem compile errors"</a>
<li><strong>Previous message:</strong> <a href="13076.php">Mike Dubman: "Re: [OMPI devel] More oshmem compile errors"</a>
<li><strong>In reply to:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13088.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>Reply:</strong> <a href="13088.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
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
