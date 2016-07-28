<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 17:47:41 2013" -->
<!-- isoreceived="20130917214741" -->
<!-- sent="Tue, 17 Sep 2013 14:47:37 -0700" -->
<!-- isosent="20130917214737" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="EF0167A2-BACE-4471-9742-E5274B15E004_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="01E14323-15B9-455A-B295-688B632B1070_at_icl.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 17:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12918.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12918.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great! I'll welcome the patch - feel free to back mine out when you do.
<br>
<p>Thanks!
<br>
<p>On Sep 17, 2013, at 2:43 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 17, 2013, at 23:19 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I very much doubt that it would work, though I can give it a try, as the patch addresses Intercomm_merge and not Intercomm_create. I debated about putting the patch into &quot;create&quot; instead, but nobody was citing that as being a problem. In my opinion, it makes more sense for it to be in &quot;create&quot;, and I can certainly shift it to that location easily enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we converge here. If the problem was correctly addressed at Intercomm_create time there will be no need to address it Intercomm_merge, as the only way to get an intercomm where peers don't know each other modex info is via Intercomm_create. Every other function that create an inter-communicators do so starting from a common group, so the peers know each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My concern with your approach is that I'm not convinced it will work. The problem is that not all the MPI procs can communicate via MPI at this point because they lack the required info and haven't added the procs into the BTLs yet. So packing modex info into a buffer and attempting to send it via MPI could just cause the lockup to occur sooner.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You will have to believe me on this one, but MPI_Intercomm_create is a one of a kind call, not a very straightforward concept (this is why I suggested the read of the 6.6.2). One of the arguments to this function is a bridge communicator, where the two leaders belong together. So the two sides are not totally unknown to each other, their leaders know each other as they belong already to this &quot;bridge&quot; communicator (obviously each group should know how to communicate with their leader). My solution was to reduce the modex info on each group on their leader, let the leaders exchange this &quot;local group modex information&quot;, and then broadcast locally the remote modex info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence the approach of ensuring all procs have the required info. Not optimal, I agree, but performance isn't an issue with this function, and the trivial amount of RTE effort didn't seem worth worrying about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My concern is that it forces every other RTE supported by Open MPI to provide a functionality that is so MPI specific that even the MPI libraries have a hard time supporting it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a half working patch. Don't push the CMR yet, I'll ping you back soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12918.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12918.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
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
