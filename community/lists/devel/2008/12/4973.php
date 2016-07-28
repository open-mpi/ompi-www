<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 10:03:08 2008" -->
<!-- isoreceived="20081203150308" -->
<!-- sent="Wed, 3 Dec 2008 08:03:00 -0700" -->
<!-- isosent="20081203150300" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="AD41BF18-A019-4414-8406-BEB31B58A8AF_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C55C05E0.2BD69%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-03 10:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4974.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4972.php">Richard Graham: "[OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4972.php">Richard Graham: "[OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4974.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4974.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just curious: some of the BTL's have ORTE dependencies in them. How  
<br>
are you going to move them to the OPAL layer?
<br>
<p><p>On Dec 3, 2008, at 7:46 AM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; Now that 1.3 will be released, we would like to go ahead with the  
</span><br>
<span class="quotelev1">&gt; plan to move the btl&#146;s out of the MPI layer.  Greg Koenig who is  
</span><br>
<span class="quotelev1">&gt; doing most of the work has started a wiki page with details on the  
</span><br>
<span class="quotelev1">&gt; plans.  Right now details are sketchy, as Greg  is digging through  
</span><br>
<span class="quotelev1">&gt; the code, and has only hand written notes on data structures that  
</span><br>
<span class="quotelev1">&gt; need to be moved, include files that are not needed, etc.  The page  
</span><br>
<span class="quotelev1">&gt; is at:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first three steps basically only involve code motion, moving  
</span><br>
<span class="quotelev1">&gt; items such as ompi_list, and renaming them, moving where the code is  
</span><br>
<span class="quotelev1">&gt; actually located in the repository, and the like.  For these we do  
</span><br>
<span class="quotelev1">&gt; not plan to put out a formal RFC, but comments are very welcome, and  
</span><br>
<span class="quotelev1">&gt; any hands that are willing to help with this are even more welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last phase where the btl&#146;s are made dependent on OPAL, and  
</span><br>
<span class="quotelev1">&gt; supporting libraries such as mpools I expect will be disruptive, and  
</span><br>
<span class="quotelev1">&gt; will definitely require an RFC, and will also be a longer process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please send comments,
</span><br>
<span class="quotelev1">&gt; Rich
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4973/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4974.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4972.php">Richard Graham: "[OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4972.php">Richard Graham: "[OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4974.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4974.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
