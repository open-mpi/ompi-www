<?
$subject_val = "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 08:55:57 2014" -->
<!-- isoreceived="20140516125557" -->
<!-- sent="Fri, 16 May 2014 05:54:05 -0700" -->
<!-- isosent="20140516125405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo" -->
<!-- id="6586690E-1BFC-4730-8295-6AC841D597A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5soK+S3oDc9FGpExPEDXe9ETyynJtme4Z99bQWKxytEKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 08:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14815.php">Gilles Gouaillardet: "[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14815.php">Gilles Gouaillardet: "[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Memory isn't supposed to allocated in the &quot;open&quot; call, but only after the component is selected (and thus in the &quot;init&quot; call&quot;).
<br>
<p><p>On May 15, 2014, at 10:57 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is a small memory leak in ompi/mca/pml/bfo/pml_bfo_component.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in my environment, this module is not used.
</span><br>
<span class="quotelev1">&gt; this means mca_pml_bfo_component_open() and mca_pml_bfo_component_close() are invoked but
</span><br>
<span class="quotelev1">&gt; mca_pml_bfo_component_init() and mca_pml_bfo_component_fini() are *not* invoked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_pml_bfo.allocator is currently allocated in mca_pml_bfo_component_open() and released in mca_pml_bfo_component_fini()
</span><br>
<span class="quotelev1">&gt; this causes a leak (at least in my environment, since mca_pml_bfo_component_fini() is not invoked)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One option is to release the allocator in mca_pml_bfo_component_close()
</span><br>
<span class="quotelev1">&gt; An other option is to allocate the allocator in mca_pml_bfo_component_init()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is the correct/best one ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i attached two patches, which one (if any) should be commited ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your insights
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;bfo.allocate_in_init.patch&gt;&lt;bfo.free_in_close.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14815.php">http://www.open-mpi.org/community/lists/devel/2014/05/14815.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14815.php">Gilles Gouaillardet: "[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14815.php">Gilles Gouaillardet: "[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
<li><strong>Reply:</strong> <a href="14817.php">Rolf vandeVaart: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak	in mca/pml/bfo"</a>
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
