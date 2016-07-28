<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 11:47:46 2008" -->
<!-- isoreceived="20081203164746" -->
<!-- sent="Wed, 3 Dec 2008 11:47:34 -0500" -->
<!-- isosent="20081203164734" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="9804EA78-5401-4C1A-81D6-2A0E3ED1654C_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="4936B6F3.9060707_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-03 11:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>I'm involved [at some degree] in both efforts and I can confirm these  
<br>
two efforts will not affect each other in any bad way.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 3, 2008, at 11:42 , Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; I don't have any *strong* objections. However, I know that Eugene  
</span><br>
<span class="quotelev1">&gt; and George B have been working on some Fastpath code changes that we  
</span><br>
<span class="quotelev1">&gt; should make sure neither project obliterates the other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Now that 1.3 will be released, we would like to go ahead with the  
</span><br>
<span class="quotelev2">&gt;&gt; plan to move the btl&#146;s out of the MPI layer. Greg Koenig who is  
</span><br>
<span class="quotelev2">&gt;&gt; doing most of the work has started a wiki page with details on the  
</span><br>
<span class="quotelev2">&gt;&gt; plans. Right now details are sketchy, as Greg is digging through  
</span><br>
<span class="quotelev2">&gt;&gt; the code, and has only hand written notes on data structures that  
</span><br>
<span class="quotelev2">&gt;&gt; need to be moved, include files that are not needed, etc. The page  
</span><br>
<span class="quotelev2">&gt;&gt; is at:
</span><br>
<span class="quotelev2">&gt;&gt; _<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>_
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first three steps basically only involve code motion, moving  
</span><br>
<span class="quotelev2">&gt;&gt; items such as ompi_list, and renaming them, moving where the code  
</span><br>
<span class="quotelev2">&gt;&gt; is actually located in the repository, and the like. For these we  
</span><br>
<span class="quotelev2">&gt;&gt; do not plan to put out a formal RFC, but comments are very welcome,  
</span><br>
<span class="quotelev2">&gt;&gt; and any hands that are willing to help with this are even more  
</span><br>
<span class="quotelev2">&gt;&gt; welcome.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The last phase where the btl&#146;s are made dependent on OPAL, and  
</span><br>
<span class="quotelev2">&gt;&gt; supporting libraries such as mpools I expect will be disruptive,  
</span><br>
<span class="quotelev2">&gt;&gt; and will definitely require an RFC, and will also be a longer  
</span><br>
<span class="quotelev2">&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please send comments,
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4977.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4975.php">Terry Dontje: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Reply:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
