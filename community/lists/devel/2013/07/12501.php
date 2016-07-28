<?
$subject_val = "Re: [OMPI devel] Barrier Implementation Oddity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 08:49:05 2013" -->
<!-- isoreceived="20130701124905" -->
<!-- sent="Mon, 1 Jul 2013 14:48:58 +0200" -->
<!-- isosent="20130701124858" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Barrier Implementation Oddity" -->
<!-- id="83FB7C57-91D7-4E32-9261-D224A4F14C74_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAD_uPkC-beWaTKQ=7FV3FuEqR9xi=wapAGynWmGDQ-4grE1r7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Barrier Implementation Oddity<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 08:48:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12502.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12497.php">Ronny Brendel: "[OMPI devel] Barrier Implementation Oddity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Bruck for barrier is a variant of the dissemination algorithm as described in:
<br>
&nbsp;- Debra Hensgen, Raphael Finkel, and Udi Manbet. Two algorithms for barrier synchronization. International Journal of Parallel Programming, 17(1):1&#150;17, 1988.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jun 29, 2013, at 12:05 , Ronny Brendel &lt;ronnybrendel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am digging through openmpi to find out what algorithm the barrier actually uses.
</span><br>
<span class="quotelev1">&gt; seems to be bruck/dissemination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However i stumbled upon something odd.
</span><br>
<span class="quotelev1">&gt; in: ompi/mca/coll/tuned/coll_tuned_barrier.c
</span><br>
<span class="quotelev1">&gt; function: ompi_coll_tuned_barrier_intra_bruck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you intend (by the comments and the function name) to send to the previous node and receive from the next. But actually it looks like you are doing the reverse. (which should then be the dissemination algorithm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's no big deal, I'm just a bit confused right now, and wonder if I'm missing something. I hope you can help me understand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Ronny
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
<li><strong>Next message:</strong> <a href="12502.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12497.php">Ronny Brendel: "[OMPI devel] Barrier Implementation Oddity"</a>
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
