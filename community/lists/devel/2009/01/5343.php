<?
$subject_val = "Re: [OMPI devel] Change of API in mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 15:43:33 2009" -->
<!-- isoreceived="20090130204333" -->
<!-- sent="Fri, 30 Jan 2009 13:43:21 -0700" -->
<!-- isosent="20090130204321" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change of API in mpool" -->
<!-- id="42E907D2-07F8-4C7B-B57B-901E5DB14EFA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200901301429.59110.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change of API in mpool<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 15:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5344.php">Richard Graham: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5339.php">Rainer Keller: "[OMPI devel] Change of API in mpool"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this fits into the same category of objections as to the other  
<br>
RFC - it should be done in the tmp branch and held there until the  
<br>
entire concept is validated.
<br>
<p>In this case, my concern would focus solely on the question of  
<br>
conversion time. Somewhere up the chain, somebody is passing an  
<br>
ompi_info_t that eventually hits this level. At what level would we  
<br>
have to convert that to an opal_list_t, and what timing would be  
<br>
impacted by that conversion?
<br>
<p>Minus that understanding, there really is no way to judge the  
<br>
potential impact of this proposed change.
<br>
<p>Ralph
<br>
<p><p>On Jan 30, 2009, at 12:29 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Send yet again...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RFC: Change of API in mpool
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Remove dependency on ompi_info_t in mca_mpool_base_alloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: To be able to move mpool out of the ompi-layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: Changes just in the mpool and in ompi/mpi/c/alloc_mem.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Open MPI-1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: February 3, 2009.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; Details:
</span><br>
<span class="quotelev1">&gt; WHY:
</span><br>
<span class="quotelev1">&gt; With the proposed move of the BTL framework out of the ompi-layer, we
</span><br>
<span class="quotelev1">&gt; need to move/copy a few dependant class- and other functionality  
</span><br>
<span class="quotelev1">&gt; with it
</span><br>
<span class="quotelev1">&gt; (omp_free_list, ompi_bitmap, ompi_rb_tree, common, mpool, allocator,
</span><br>
<span class="quotelev1">&gt; rcache).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only real dependency problem, visible right now, that requires a
</span><br>
<span class="quotelev1">&gt; change is the function mca_mpool_base_alloc, which requires  
</span><br>
<span class="quotelev1">&gt; ompi_info_t.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT:
</span><br>
<span class="quotelev1">&gt; In order to make mca_mpool_base_alloc oblivious of MPI, we'd propose
</span><br>
<span class="quotelev1">&gt; passing all relevant info as opal_list_t -- and prepare this by the  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; caller ompi/mpi/c/alloc_mem.c, which only copies (&quot;mpool&quot;,value)-pairs
</span><br>
<span class="quotelev1">&gt; into a list (if there are any).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patchlet can be applied to trunk / or the branch koenig-btl,  
</span><br>
<span class="quotelev1">&gt; however,
</span><br>
<span class="quotelev1">&gt; I left out the required (but boring) svn mv and rename of ompi-&gt;onet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has been tested with the supplied test-program, produces the expected
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any comments are welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CU,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; mpool_patchlet 
</span><br>
<span class="quotelev1">&gt; -2009.01.29 
</span><br>
<span class="quotelev1">&gt; .diff&gt;&lt;mpi_info_test.c&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="5344.php">Richard Graham: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5339.php">Rainer Keller: "[OMPI devel] Change of API in mpool"</a>
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
