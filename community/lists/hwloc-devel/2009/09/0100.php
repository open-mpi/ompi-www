<?
$subject_val = "[hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 10:39:57 2009" -->
<!-- isoreceived="20090929143957" -->
<!-- sent="Tue, 29 Sep 2009 16:39:47 +0200" -->
<!-- isosent="20090929143947" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="[hwloc-devel] structure assumptions, duplication" -->
<!-- id="664E49FD-A3DE-440E-B2FE-1F981EFC17E3_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7E14C05B-EFB1-4773-A774-75AEA49AE6EE_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] structure assumptions, duplication<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 10:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0099.php">Jeff Squyres: "Re: [hwloc-devel] New features or release?"</a>
<li><strong>In reply to:</strong> <a href="0097.php">Jeff Squyres: "[hwloc-devel] New features or release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have began to use hwloc, and I found it quite nice to use, but I do  
<br>
have some comments and questions:
<br>
<p>1) redundancy: for several operations, looping there are several ways  
<br>
to to the same thing.
<br>
it is nice support several paradigms, but these occupy space and will  
<br>
be very difficult to remove once used by user (in particular I don't  
<br>
want that my code breaks ;).
<br>
Maybe I worry too much, but with machines with 1'000 of processor  
<br>
coming, and maybe wanting local restricted copies to know the topology  
<br>
of the whole machine (to communicate with others) I worry also about  
<br>
few pointers here an there.
<br>
<p>In particular I think about
<br>
arity+childrens vs first_child last_child
<br>
even cousins and siblings could probably share their pointers (at the  
<br>
cost of needing a different check for the end), one could even link  
<br>
them in a circular way (again stop for al loop would need to be  
<br>
different then).
<br>
<p>So are these things likely to change in the future, and if yes what is  
<br>
the best way to code in a future proof way? Use hwloc_get_obj_by_depth  
<br>
as much as possible?
<br>
<p>2) assumption on the structure
<br>
<p>&nbsp;From the documentation and some functions/ single father,...it seems  
<br>
that the structure returned is always strictly hierarchic, and that  
<br>
starting from the leaf going up one goes through all possible levels,  
<br>
and that each level is a partition.
<br>
Is that really so? At least the Misc object would seem to not fit in  
<br>
this clean hierarchical picture.
<br>
Also a ring like topology cannot be cleanly represented with a  
<br>
partition if one wants to have objects for groups with uniform latency.
<br>
<p>So I wanted to know how you cope with those things, and also if  
<br>
something will probably change in the future, as some assumptions will  
<br>
inevitably creep in my code... and I would prefer to make the good  
<br>
ones :)
<br>
<p>thank you very much
<br>
ciao
<br>
Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0099.php">Jeff Squyres: "Re: [hwloc-devel] New features or release?"</a>
<li><strong>In reply to:</strong> <a href="0097.php">Jeff Squyres: "[hwloc-devel] New features or release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0101.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
