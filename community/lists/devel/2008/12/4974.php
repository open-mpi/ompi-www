<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 11:13:02 2008" -->
<!-- isoreceived="20081203161302" -->
<!-- sent="Wed, 03 Dec 2008 11:12:57 -0500" -->
<!-- isosent="20081203161257" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="C55C1A39.2BD90%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD41BF18-A019-4414-8406-BEB31B58A8AF_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Preparations for moving the btl's<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-03 11:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4973.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4973.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not going to move these to the OPAL layer - this is part of phase 4 that
<br>
will need to be discussed.
<br>
<p>Rich
<br>
<p><p>On 12/3/08 10:03 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just curious: some of the BTL's have ORTE dependencies in them. How are you
</span><br>
<span class="quotelev1">&gt; going to move them to the OPAL layer?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2008, at 7:46 AM, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Now that 1.3 will be released, we would like to go ahead with the plan to
</span><br>
<span class="quotelev2">&gt;&gt; move the btl&#185;s out of the MPI layer.  Greg Koenig who is doing most of the
</span><br>
<span class="quotelev2">&gt;&gt; work has started a wiki page with details on the plans.  Right now details
</span><br>
<span class="quotelev2">&gt;&gt; are sketchy, as Greg  is digging through the code, and has only hand written
</span><br>
<span class="quotelev2">&gt;&gt; notes on data structures that need to be moved, include files that are not
</span><br>
<span class="quotelev2">&gt;&gt; needed, etc.  The page is at:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  The first three steps basically only involve code motion, moving items such
</span><br>
<span class="quotelev2">&gt;&gt; as ompi_list, and renaming them, moving where the code is actually located in
</span><br>
<span class="quotelev2">&gt;&gt; the repository, and the like.  For these we do not plan to put out a formal
</span><br>
<span class="quotelev2">&gt;&gt; RFC, but comments are very welcome, and any hands that are willing to help
</span><br>
<span class="quotelev2">&gt;&gt; with this are even more welcome.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  The last phase where the btl&#185;s are made dependent on OPAL, and supporting
</span><br>
<span class="quotelev2">&gt;&gt; libraries such as mpools I expect will be disruptive, and will definitely
</span><br>
<span class="quotelev2">&gt;&gt; require an RFC, and will also be a longer process.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  Please send comments,
</span><br>
<span class="quotelev2">&gt;&gt;  Rich 
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4973.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4973.php">Ralph Castain: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
