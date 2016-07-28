<?
$subject_val = "[OMPI devel] Change of API in mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 14:30:03 2009" -->
<!-- isoreceived="20090130193003" -->
<!-- sent="Fri, 30 Jan 2009 14:29:58 -0500" -->
<!-- isosent="20090130192958" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] Change of API in mpool" -->
<!-- id="200901301429.59110.keller_at_ornl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Change of API in mpool<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 14:29:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5340.php">Rainer Keller: "[OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
<li><strong>Reply:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Send yet again...
<br>
<p>RFC: Change of API in mpool
<br>
<p>WHAT: Remove dependency on ompi_info_t in mca_mpool_base_alloc  
<br>
<p>WHY: To be able to move mpool out of the ompi-layer.
<br>
<p>WHERE: Changes just in the mpool and in ompi/mpi/c/alloc_mem.c 
<br>
<p>WHEN: Open MPI-1.4 
<br>
&nbsp;
<br>
TIMEOUT: February 3, 2009. 
<br>
<p>-------------------------------------
<br>
Details:
<br>
WHY:
<br>
With the proposed move of the BTL framework out of the ompi-layer, we 
<br>
need to move/copy a few dependant class- and other functionality with it 
<br>
(omp_free_list, ompi_bitmap, ompi_rb_tree, common, mpool, allocator, 
<br>
rcache).
<br>
&nbsp;&nbsp;
<br>
The only real dependency problem, visible right now, that requires a 
<br>
change is the function mca_mpool_base_alloc, which requires ompi_info_t.
<br>
<p>WHAT:
<br>
In order to make mca_mpool_base_alloc oblivious of MPI, we'd propose 
<br>
passing all relevant info as opal_list_t -- and prepare this by the only 
<br>
caller ompi/mpi/c/alloc_mem.c, which only copies (&quot;mpool&quot;,value)-pairs 
<br>
into a list (if there are any).
<br>
<p>The patchlet can be applied to trunk / or the branch koenig-btl, however, 
<br>
I left out the required (but boring) svn mv and rename of ompi-&gt;onet.
<br>
<p>Has been tested with the supplied test-program, produces the expected 
<br>
results.
<br>
<p>Any comments are welcome.
<br>
<p>CU,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: (865) 241-6293
Oak Ridge National Lab          Fax: (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink


</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5339/mpool_patchlet-2009.01.29.diff">mpool_patchlet-2009.01.29.diff</a>
</ul>
<!-- attachment="mpool_patchlet-2009.01.29.diff" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5339/mpi_info_test.c">mpi_info_test.c</a>
</ul>
<!-- attachment="mpi_info_test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5340.php">Rainer Keller: "[OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
<li><strong>Reply:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
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
