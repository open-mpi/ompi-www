<?
$subject_val = "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 13:34:50 2007" -->
<!-- isoreceived="20071206183450" -->
<!-- sent="Thu, 06 Dec 2007 13:34:42 -0500" -->
<!-- isosent="20071206183442" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(" -->
<!-- id="475840C2.903_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4011E166-D28F-4E9D-A22C-BC4BA22EA797_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 13:34:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I should also note the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - LAM/MPI does the same thing (increments refcount when GROUP_EMPTY is  
</span><br>
<span class="quotelev1">&gt; returned to the user, and allows GROUP_EMPTY in GROUP_FREE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - MPICH2 has the following comment in GROUP_FREE (and code to match):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /* Cannot free the predefined groups, but allow GROUP_EMPTY
</span><br>
<span class="quotelev1">&gt;                 because otherwise many tests fail */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm thinking that we should allow GROUP_EMPTY in GROUP_FREE -- back  
</span><br>
<span class="quotelev1">&gt; out Edgar's changed and put in some big comments about exactly why.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Note, CT6 (Sun's previous implemention) also passed these tests.   Sun 
<br>
would like this test passing
<br>
to be maintained until some concrete message is made by the forum.  That 
<br>
being said I would agree
<br>
with Jeff's proposal of backing out the change and putting in comments why.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; On Dec 6, 2007, at 11:01 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; So the changes that we debated and had Edgar put in *do* break some
</span><br>
<span class="quotelev2">&gt;&gt; intel tests.  Doh!  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_compare_f
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_intersection2_c
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_intersection2_f
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like these tests are specifically calling MPI_GROUP_FREE on
</span><br>
<span class="quotelev2">&gt;&gt; MPI_GROUP_EMPTY.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I note that there is code in the ompi/group/group_*.c code that
</span><br>
<span class="quotelev2">&gt;&gt; specifically calls OBJ_RETAIN on ompi_group_empty when we return
</span><br>
<span class="quotelev2">&gt;&gt; MPI_GROUP_EMPTY.  I wonder if this RETAIN was added (and the MPI param
</span><br>
<span class="quotelev2">&gt;&gt; check removed) in reaction to the intel tests...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone cite again where we thought the spec said that we should
</span><br>
<span class="quotelev2">&gt;&gt; not free GROUP_EMPTY?  Was is just on the argument that it's a
</span><br>
<span class="quotelev2">&gt;&gt; predefined handle and therefore should never be freed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot find any specific text in 1.2 or the errata stating that it's
</span><br>
<span class="quotelev2">&gt;&gt; bad to free GROUP_EMPTY.  I agree that this is somewhat counter to the
</span><br>
<span class="quotelev2">&gt;&gt; rest of the MPI philosophy of not freeing predefined handles, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2754.php">Brian W. Barrett: "Re: [OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
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
