<?
$subject_val = "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 13:46:54 2007" -->
<!-- isoreceived="20071206184654" -->
<!-- sent="Thu, 6 Dec 2007 13:46:42 -0500" -->
<!-- isosent="20071206184642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(" -->
<!-- id="EDEC1C0F-590E-47F7-A33F-8706632796DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="475840C2.903_at_sun.com" -->
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
<strong>Date:</strong> 2007-12-06 13:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2752.php">Edgar Gabriel: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done: r16872.
<br>
<p>On Dec 6, 2007, at 1:34 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I should also note the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - LAM/MPI does the same thing (increments refcount when GROUP_EMPTY  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; returned to the user, and allows GROUP_EMPTY in GROUP_FREE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - MPICH2 has the following comment in GROUP_FREE (and code to match):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            /* Cannot free the predefined groups, but allow  
</span><br>
<span class="quotelev2">&gt;&gt; GROUP_EMPTY
</span><br>
<span class="quotelev2">&gt;&gt;                because otherwise many tests fail */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'm thinking that we should allow GROUP_EMPTY in GROUP_FREE --  
</span><br>
<span class="quotelev2">&gt;&gt; back
</span><br>
<span class="quotelev2">&gt;&gt; out Edgar's changed and put in some big comments about exactly  
</span><br>
<span class="quotelev2">&gt;&gt; why.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Note, CT6 (Sun's previous implemention) also passed these tests.   Sun
</span><br>
<span class="quotelev1">&gt; would like this test passing
</span><br>
<span class="quotelev1">&gt; to be maintained until some concrete message is made by the forum.   
</span><br>
<span class="quotelev1">&gt; That
</span><br>
<span class="quotelev1">&gt; being said I would agree
</span><br>
<span class="quotelev1">&gt; with Jeff's proposal of backing out the change and putting in  
</span><br>
<span class="quotelev1">&gt; comments why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 6, 2007, at 11:01 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the changes that we debated and had Edgar put in *do* break some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel tests.  Doh!  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Group_compare_f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Group_intersection2_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Group_intersection2_f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like these tests are specifically calling MPI_GROUP_FREE on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_GROUP_EMPTY.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I note that there is code in the ompi/group/group_*.c code that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically calls OBJ_RETAIN on ompi_group_empty when we return
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_GROUP_EMPTY.  I wonder if this RETAIN was added (and the MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check removed) in reaction to the intel tests...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone cite again where we thought the spec said that we should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not free GROUP_EMPTY?  Was is just on the argument that it's a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; predefined handle and therefore should never be freed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot find any specific text in 1.2 or the errata stating that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bad to free GROUP_EMPTY.  I agree that this is somewhat counter to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rest of the MPI philosophy of not freeing predefined handles,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2757.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2755.php">Terry Dontje: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2752.php">Edgar Gabriel: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
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
