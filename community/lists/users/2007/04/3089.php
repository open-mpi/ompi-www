<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 18:14:55 2007" -->
<!-- isoreceived="20070418221455" -->
<!-- sent="Wed, 18 Apr 2007 18:14:45 -0400" -->
<!-- isosent="20070418221445" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)" -->
<!-- id="30C473EC-18AA-4164-B4F6-AE6F3DC85272_at_cs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="001101c781f6$71ee2980$55ca7c80$_at_ch" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 18:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3088.php">Michael Gauckler: "[OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3088.php">Michael Gauckler: "[OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Reply:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am the developer and the maintainer of the data-type engine in Open  
<br>
MPI. And, I'm stunned (!) It never occur to me that someone will ever  
<br>
use a data-type description that need more than 32K entries on the  
<br>
internal stack.
<br>
<p>Let me explain a little bit. The stack is used to efficiently parse  
<br>
the data-type description. The 32K limit it's not a limit for the  
<br>
number of predefined MPI types in the data-type, but a limit for the  
<br>
number of different data descriptions (a description is like a vector  
<br>
of a predefined type). As an example an MPI_Type_struct with count 10  
<br>
will use 11 entries. So in order to overload this data description  
<br>
one has to use an MPI_Type_struct with a count bigger than 32K (which  
<br>
might be the case with the BOOST library you're using in your code).
<br>
<p>In conclusion if your data-type description contain more than 32K  
<br>
entries, the current implementation will definitively not work for  
<br>
you. How many entries are in your data-type description ? There is an  
<br>
easy way to figure out if this is the problem with your code.  
<br>
Attaching gdb to your process and setting a break in the  
<br>
ompi_generic_simple_pack function is the first step. Once there,  
<br>
doing in gdb &quot;call ompi_ddt_dump(pData)&quot; will print a high level  
<br>
description of the data as represented internally in Open MPI. If you  
<br>
can provide the output of this call I can tell you in few seconds if  
<br>
this is the real issue or not.
<br>
<p>However, this raise another question about the performance you expect  
<br>
from your code. A data description with more than 32K items, cannot  
<br>
be efficiently optimized by any automatic data-type engine. Moreover,  
<br>
it cannot be easily parsed. I suggest that if it's possible to  
<br>
identify access patterns that are repetitive, one should use them in  
<br>
order to improve the data-type description.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 18, 2007, at 4:16 PM, Michael Gauckler wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-MPI Developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; investigations on the segmentation fault (see previous postings  
</span><br>
<span class="quotelev1">&gt; &quot;Signal: Segmentation fault (11) Problem&quot;) lets us suspect that  
</span><br>
<span class="quotelev1">&gt; Open-MPI allows only a limited number of elements in the  
</span><br>
<span class="quotelev1">&gt; description of user-defined MPI_Datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our application segmentation-faults when a large user-defined data  
</span><br>
<span class="quotelev1">&gt; structure is passed to MPI_Send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The segmentation fault happens in the function  
</span><br>
<span class="quotelev1">&gt; ompi_generic_simple_pack in datatype_pack.c when trying to access  
</span><br>
<span class="quotelev1">&gt; pElem (Bad address). The structure pElem is set in line 276, where  
</span><br>
<span class="quotelev1">&gt; it is retrieved as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 276: pElem = &amp;(description[pos_desc]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pos_desc is of type uint32_t with the value 0xffff929f  
</span><br>
<span class="quotelev1">&gt; (4294939295), which itself is set on line 271 by a variable of type  
</span><br>
<span class="quotelev1">&gt; int16_t and value -1. This leads to the indexing of the description  
</span><br>
<span class="quotelev1">&gt; structure at position -1, producing the segmentation fault. The  
</span><br>
<span class="quotelev1">&gt; origin of the pos_desc can be faund in the same function at line 271:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 271: pos_desc = pStack-&gt;index;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The structure to which pStack is pointing is of type dt_stack,  
</span><br>
<span class="quotelev1">&gt; defined in ompi/datatype/convertor.h starting at line 65, where  
</span><br>
<span class="quotelev1">&gt; index is and int16_t and  commented with &#147;index in the element  
</span><br>
<span class="quotelev1">&gt; description&#148;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef struct dt_stack {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int16_t   index;    /**&lt; index in the element description */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int16_t   type;     /**&lt; the type used for the last pack/unpack  
</span><br>
<span class="quotelev1">&gt; (original or DT_BYTE) */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     size_t    count;    /**&lt; number of times we still have to do it */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ptrdiff_t disp;     /**&lt; actual displacement depending on the  
</span><br>
<span class="quotelev1">&gt; count field */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; } dt_stack_t;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We therefore conclude that MPI_Datatypes, which are constructed  
</span><br>
<span class="quotelev1">&gt; with Open-MPI (in the release of 1.2.1a of April 10th 2007)
</span><br>
<span class="quotelev1">&gt; have the limitation of containing a maximum of 32&#146;768 separate  
</span><br>
<span class="quotelev1">&gt; entries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although changing the type of the index to int32_t solves the  
</span><br>
<span class="quotelev1">&gt; problem of the segmentation fault, I would be happy if the author /  
</span><br>
<span class="quotelev1">&gt; maintainer of the code could have a look at it and decide if this  
</span><br>
<span class="quotelev1">&gt; is viable fix. Having spent a lot of time in hunting down the issue  
</span><br>
<span class="quotelev1">&gt; into the Open-MPI code, I would be glad to see the issue fixed in  
</span><br>
<span class="quotelev1">&gt; upcoming releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx and regards,
</span><br>
<span class="quotelev1">&gt; Michael Gauckler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3089/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3088.php">Michael Gauckler: "[OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3088.php">Michael Gauckler: "[OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Reply:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
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
