<?
$subject_val = "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 11:35:59 2007" -->
<!-- isoreceived="20071206163559" -->
<!-- sent="Thu, 06 Dec 2007 10:09:46 -0600" -->
<!-- isosent="20071206160946" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-(" -->
<!-- id="47581ECA.4000407_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 11:09:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2750.php">Jeff Squyres: "[OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
well, the best I could find is the following in section 5.2.1
<br>
<p>&quot;MPI_GROUP_EMPTY, which is a valid handle to an empty group, should not 
<br>
be confused with MPI_GROUP_NULL, which in turn is an invalid handle. The 
<br>
former may be used as an argument to group operations; the latter, which 
<br>
is returned when a group is freed, in not a valid argument. ( End of 
<br>
advice to users.) &quot;
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; So the changes that we debated and had Edgar put in *do* break some  
</span><br>
<span class="quotelev1">&gt; intel tests.  Doh!  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Group_compare_f
</span><br>
<span class="quotelev1">&gt;     MPI_Group_intersection2_c
</span><br>
<span class="quotelev1">&gt;     MPI_Group_intersection2_f
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
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2753.php">Paul H. Hargrove: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>In reply to:</strong> <a href="2750.php">Jeff Squyres: "[OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
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
