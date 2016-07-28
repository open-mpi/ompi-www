<?
$subject_val = "[OMPI devel] GROUP_EMPTY fixes break intel tests :-(";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 11:01:19 2007" -->
<!-- isoreceived="20071206160119" -->
<!-- sent="Thu, 6 Dec 2007 11:01:08 -0500" -->
<!-- isosent="20071206160108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] GROUP_EMPTY fixes break intel tests :-(" -->
<!-- id="904E57C9-9DAC-47A6-911D-2F13B970BEFE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] GROUP_EMPTY fixes break intel tests :-(<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 11:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2749.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2752.php">Edgar Gabriel: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the changes that we debated and had Edgar put in *do* break some  
<br>
intel tests.  Doh!  :-(
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_compare_f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_intersection2_c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group_intersection2_f
<br>
<p>It looks like these tests are specifically calling MPI_GROUP_FREE on  
<br>
MPI_GROUP_EMPTY.
<br>
<p>I note that there is code in the ompi/group/group_*.c code that  
<br>
specifically calls OBJ_RETAIN on ompi_group_empty when we return  
<br>
MPI_GROUP_EMPTY.  I wonder if this RETAIN was added (and the MPI param  
<br>
check removed) in reaction to the intel tests...?
<br>
<p>Can someone cite again where we thought the spec said that we should  
<br>
not free GROUP_EMPTY?  Was is just on the argument that it's a  
<br>
predefined handle and therefore should never be freed?
<br>
<p>I cannot find any specific text in 1.2 or the errata stating that it's  
<br>
bad to free GROUP_EMPTY.  I agree that this is somewhat counter to the  
<br>
rest of the MPI philosophy of not freeing predefined handles, though.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Previous message:</strong> <a href="2749.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2751.php">Jeff Squyres: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
<li><strong>Reply:</strong> <a href="2752.php">Edgar Gabriel: "Re: [OMPI devel] GROUP_EMPTY fixes break intel tests :-("</a>
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
