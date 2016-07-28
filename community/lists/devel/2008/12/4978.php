<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 11:54:46 2008" -->
<!-- isoreceived="20081203165446" -->
<!-- sent="Wed, 03 Dec 2008 11:54:41 -0500" -->
<!-- isosent="20081203165441" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="C55C2401.2BDA4%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4936B841.3000402_at_sun.com" -->
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
<strong>Date:</strong> 2008-12-03 11:54:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not at all.
<br>
<p><p>On 12/3/08 11:48 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ahh, and then I woke up....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This might not be an issue (or a big one), but I have some code I am
</span><br>
<span class="quotelev1">&gt; working on that replaces memcpy with an opal memcpy routine. Does your
</span><br>
<span class="quotelev1">&gt; change below remove the ability of the BTLs to call opal routines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now that 1.3 will be released, we would like to go ahead with the plan
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to move the btl&#185;s out of the MPI layer. Greg Koenig who is doing most
</span><br>
<span class="quotelev3">&gt;&gt; &gt; of the work has started a wiki page with details on the plans. Right
</span><br>
<span class="quotelev3">&gt;&gt; &gt; now details are sketchy, as Greg is digging through the code, and has
</span><br>
<span class="quotelev3">&gt;&gt; &gt; only hand written notes on data structures that need to be moved,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; include files that are not needed, etc. The page is at:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>_
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The first three steps basically only involve code motion, moving items
</span><br>
<span class="quotelev3">&gt;&gt; &gt; such as ompi_list, and renaming them, moving where the code is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; actually located in the repository, and the like. For these we do not
</span><br>
<span class="quotelev3">&gt;&gt; &gt; plan to put out a formal RFC, but comments are very welcome, and any
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hands that are willing to help with this are even more welcome.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The last phase where the btl&#185;s are made dependent on OPAL, and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; supporting libraries such as mpools I expect will be disruptive, and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; will definitely require an RFC, and will also be a longer process.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Please send comments,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
