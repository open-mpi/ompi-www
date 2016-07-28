<?
$subject_val = "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 11:18:55 2007" -->
<!-- isoreceived="20071206161855" -->
<!-- sent="Thu, 6 Dec 2007 11:07:11 -0500" -->
<!-- isosent="20071206160711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(" -->
<!-- id="4011E166-D28F-4E9D-A22C-BC4BA22EA797_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="904E57C9-9DAC-47A6-911D-2F13B970BEFE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 11:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2752.php">Edgar Gabriel: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2750.php">Jeff Squyres: "[OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2750.php">Jeff Squyres: "[OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should also note the following:
<br>
<p>- LAM/MPI does the same thing (increments refcount when GROUP_EMPTY is  
<br>
returned to the user, and allows GROUP_EMPTY in GROUP_FREE)
<br>
<p>- MPICH2 has the following comment in GROUP_FREE (and code to match):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Cannot free the predefined groups, but allow GROUP_EMPTY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;because otherwise many tests fail */
<br>
<p>So I'm thinking that we should allow GROUP_EMPTY in GROUP_FREE -- back  
<br>
out Edgar's changed and put in some big comments about exactly why.  :-)
<br>
<p>Comments?
<br>
<p><p>On Dec 6, 2007, at 11:01 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; So the changes that we debated and had Edgar put in *do* break some
</span><br>
<span class="quotelev1">&gt; intel tests.  Doh!  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Group_compare_f
</span><br>
<span class="quotelev1">&gt;    MPI_Group_intersection2_c
</span><br>
<span class="quotelev1">&gt;    MPI_Group_intersection2_f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like these tests are specifically calling MPI_GROUP_FREE on
</span><br>
<span class="quotelev1">&gt; MPI_GROUP_EMPTY.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that there is code in the ompi/group/group_*.c code that
</span><br>
<span class="quotelev1">&gt; specifically calls OBJ_RETAIN on ompi_group_empty when we return
</span><br>
<span class="quotelev1">&gt; MPI_GROUP_EMPTY.  I wonder if this RETAIN was added (and the MPI param
</span><br>
<span class="quotelev1">&gt; check removed) in reaction to the intel tests...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone cite again where we thought the spec said that we should
</span><br>
<span class="quotelev1">&gt; not free GROUP_EMPTY?  Was is just on the argument that it's a
</span><br>
<span class="quotelev1">&gt; predefined handle and therefore should never be freed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot find any specific text in 1.2 or the errata stating that it's
</span><br>
<span class="quotelev1">&gt; bad to free GROUP_EMPTY.  I agree that this is somewhat counter to the
</span><br>
<span class="quotelev1">&gt; rest of the MPI philosophy of not freeing predefined handles, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2752.php">Edgar Gabriel: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2750.php">Jeff Squyres: "[OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2750.php">Jeff Squyres: "[OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
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
