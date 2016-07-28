<?
$subject_val = "Re: [OMPI devel] THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 13:26:13 2007" -->
<!-- isoreceived="20071128182613" -->
<!-- sent="Wed, 28 Nov 2007 13:26:09 -0500" -->
<!-- isosent="20071128182609" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] THREAD_MULTIPLE" -->
<!-- id="C39F2EEA-AA0D-4163-BCFC-3A515A09A8A3_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="474DB17C.40906_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] THREAD_MULTIPLE<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 13:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2677.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="2675.php">Terry Dontje: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="2675.php">Terry Dontje: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2677.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="2677.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a priority change for us. It's definitively time to have a  
<br>
fully supported MPI_THREAD_MULTIPLE mode in Open MPI. I'm working to  
<br>
figure out how and where to get the cycles for this. I expect to start  
<br>
working on it in January. So, the good news is that 1.3 will have  
<br>
thread support.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 28, 2007, at 1:20 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The MPICH guys presented TCP results with THREAD_MULTIPLE at Euro  
</span><br>
<span class="quotelev2">&gt;&gt; PVM/
</span><br>
<span class="quotelev2">&gt;&gt; MPI and frankly, I was amazed that it worked at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I seriously doubt that we're going to advance the state of threading
</span><br>
<span class="quotelev2">&gt;&gt; on the 1.2 series (which is nowhere as close as it is on the 1.3
</span><br>
<span class="quotelev2">&gt;&gt; series).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; And 1.3 I think still has a way to go to before one could really say  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; supports THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2007, at 12:21 PM, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there not users that are using THREAD_MULTIPLE successfully, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the trunk ?  We know that the code is not where it needs to be,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this takes away current functionality, I would prefer to display a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/28/07 11:27 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've had a few users complain about trying to use THREAD_MULTIPLE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lately and having it not work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's a proposal: why don't we disable it (at least in the 1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; series)?  Or, at the very least, put in a big stderr warning that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; displayed when THREAD_MULTIPLE is selected?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Comments?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2676/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2677.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="2675.php">Terry Dontje: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="2675.php">Terry Dontje: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2677.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="2677.php">Jeff Squyres: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
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
