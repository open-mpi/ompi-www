<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 16:16:42 2007" -->
<!-- isoreceived="20070418201642" -->
<!-- sent="Wed, 18 Apr 2007 22:16:27 +0200" -->
<!-- isosent="20070418201627" -->
<!-- name="Michael Gauckler" -->
<!-- email="michael_at_[hidden]" -->
<!-- subject="[OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)" -->
<!-- id="001101c781f6$71ee2980$55ca7c80$_at_ch" -->
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
<strong>From:</strong> Michael Gauckler (<em>michael_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 16:16:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Reply:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI Developers,
<br>
<p>investigations on the segmentation fault (see previous postings &quot;Signal:
<br>
Segmentation fault (11) Problem&quot;) lets us suspect that Open-MPI allows only
<br>
a limited number of elements in the description of user-defined
<br>
MPI_Datatypes.
<br>
<p>Our application segmentation-faults when a large user-defined data structure
<br>
is passed to MPI_Send.
<br>
<p>The segmentation fault happens in the function ompi_generic_simple_pack in
<br>
datatype_pack.c when trying to access pElem (Bad address). The structure
<br>
pElem is set in line 276, where it is retrieved as
<br>
<p>276: pElem = &amp;(description[pos_desc]);
<br>
<p>pos_desc is of type uint32_t with the value 0xffff929f (4294939295), which
<br>
itself is set on line 271 by a variable of type int16_t and value -1. This
<br>
leads to the indexing of the description structure at position -1, producing
<br>
the segmentation fault. The origin of the pos_desc can be faund in the same
<br>
function at line 271:
<br>
<p>271: pos_desc = pStack-&gt;index;
<br>
<p>The structure to which pStack is pointing is of type dt_stack, defined in
<br>
ompi/datatype/convertor.h starting at line 65, where index is and int16_t
<br>
and  commented with &quot;index in the element description&quot;:
<br>
<p><p>typedef struct dt_stack {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int16_t   index;    /**&lt; index in the element description */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int16_t   type;     /**&lt; the type used for the last pack/unpack
<br>
(original or DT_BYTE) */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;size_t    count;    /**&lt; number of times we still have to do it */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ptrdiff_t disp;     /**&lt; actual displacement depending on the count
<br>
field */
<br>
<p>} dt_stack_t;
<br>
<p><p>We therefore conclude that MPI_Datatypes, which are constructed with
<br>
Open-MPI (in the release of 1.2.1a of April 10th 2007) 
<br>
have the limitation of containing a maximum of 32'768 separate entries.
<br>
<p>Although changing the type of the index to int32_t solves the problem of the
<br>
segmentation fault, I would be happy if the author / maintainer of the code
<br>
could have a look at it and decide if this is viable fix. Having spent a lot
<br>
of time in hunting down the issue into the Open-MPI code, I would be glad to
<br>
see the issue fixed in upcoming releases.
<br>
<p>Thanx and regards, 
<br>
Michael Gauckler
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Reply:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
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
