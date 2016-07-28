<?
$subject_val = "Re: [OMPI devel] Preparations for moving the btl's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 12:18:39 2008" -->
<!-- isoreceived="20081203171839" -->
<!-- sent="Wed, 3 Dec 2008 10:18:32 -0700" -->
<!-- isosent="20081203171832" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Preparations for moving the btl's" -->
<!-- id="B7976884-8684-417C-AB1B-FF621BF1EB62_at_lanl.gov" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C55C2461.2BDA5%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2008-12-03 12:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4981.php">Tim Mattox: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4981.php">Tim Mattox: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are a few changes relating to modex-less launch, but those will  
<br>
mostly be committed by early next week.
<br>
<p><p>On Dec 3, 2008, at 9:56 AM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; George told me about what he is doing, so no changes would be  
</span><br>
<span class="quotelev1">&gt; committed
</span><br>
<span class="quotelev1">&gt; until George has his changes in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there other changes to the btl's that we should be aware of ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/3/08 11:47 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm involved [at some degree] in both efforts and I can confirm these
</span><br>
<span class="quotelev2">&gt;&gt; two efforts will not affect each other in any bad way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 3, 2008, at 11:42 , Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have any *strong* objections. However, I know that Eugene
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and George B have been working on some Fastpath code changes that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should make sure neither project obliterates the other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now that 1.3 will be released, we would like to go ahead with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plan to move the btl&#146;s out of the MPI layer. Greg Koenig who is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doing most of the work has started a wiki page with details on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plans. Right now details are sketchy, as Greg is digging through
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the code, and has only hand written notes on data structures that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to be moved, include files that are not needed, etc. The page
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is at:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction">https://svn.open-mpi.org/trac/ompi/wiki/BTLExtraction</a>_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The first three steps basically only involve code motion, moving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; items such as ompi_list, and renaming them, moving where the code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is actually located in the repository, and the like. For these we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do not plan to put out a formal RFC, but comments are very welcome,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and any hands that are willing to help with this are even more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; welcome.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The last phase where the btl&#146;s are made dependent on OPAL, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supporting libraries such as mpools I expect will be disruptive,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and will definitely require an RFC, and will also be a longer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please send comments,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4981.php">Tim Mattox: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>Previous message:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<li><strong>In reply to:</strong> <a href="4979.php">Richard Graham: "Re: [OMPI devel] Preparations for moving the btl's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4981.php">Tim Mattox: "Re: [OMPI devel] Preparations for moving the btl's"</a>
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
