<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 04:35:16 2007" -->
<!-- isoreceived="20070419083516" -->
<!-- sent="Thu, 19 Apr 2007 10:34:57 +0200" -->
<!-- isosent="20070419083457" -->
<!-- name="Michael Gauckler (mailing lists)" -->
<!-- email="maillists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)" -->
<!-- id="003d01c7825d$9cdac1a0$d69044e0$_at_ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="30C473EC-18AA-4164-B4F6-AE6F3DC85272_at_cs.utk.edu" -->
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
<strong>From:</strong> Michael Gauckler (mailing lists) (<em>maillists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 04:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Reply:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Thank you for the prompt reply. Indeed we are constructing a data-type
<br>
description with more than 32k entries. 
<br>
<p>I attached a screenshot of the pData structure (displayed with the TotalView
<br>
debugger), I hope this helps you. Unfortunately I was not able to use gdb to
<br>
execute the call you mentioned.
<br>
<p>Let me explain the relation of our code with the BOOST libraries: The code
<br>
I'm debugging at the moment does not use any BOOST library to interface MPI,
<br>
but it uses the same ideas of how to automatically create the data-types as
<br>
the BOOST Parallel/Message Passing/MPI [1] library. This is due to the fact
<br>
that the library is based on our ideas and the goal to factor out our
<br>
message passing code into an open-source library (see [2]).
<br>
<p>Even though such an automatically created data-type description might not
<br>
lead to an optimal performance, I think large descriptors should be
<br>
supported for several reasons:
<br>
<p>- even when using MPI, not all parts of the code are performance critical
<br>
- other MPI implementations support it
<br>
- passing large/complicated data structures with the BOOST Parallel/Message
<br>
Passing/MPI library 
<br>
&nbsp;&nbsp;(which supports LAM, MPICH and Open-MPI out of the box, see [3]) will
<br>
probably lead to the same
<br>
&nbsp;&nbsp;effect.
<br>
- the fix has minor to no impact on rest of the code base, at least an
<br>
appropriate error handling
<br>
&nbsp;&nbsp;would be expected in the case of a too large data type descriptor.
<br>
<p>I hope that we are now sure that we have identified the problem as well as
<br>
the solution and that you are willing to fix the issue in upcoming releases
<br>
of Open-MPI. If there is anything else I can help with, please let me know.
<br>
<p>Regards, 
<br>
&nbsp;Michael Gauckler
<br>
<p>[1]
<br>
<a href="http://lists.boost.org/Archives/boost/2007/01/115347.php">http://lists.boost.org/Archives/boost/2007/01/115347.php</a>
<br>
<p>[2]
<br>
<a href="http://lists.boost.org/boost-announce/2006/09/0099.php">http://lists.boost.org/boost-announce/2006/09/0099.php</a>
<br>
<p>[3]
<br>
<a href="http://www.generic-programming.org/~dgregor/boost.mpi/boost/parallel/mpi/">http://www.generic-programming.org/~dgregor/boost.mpi/boost/parallel/mpi/</a>
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of George Bosilca
<br>
Sent: Thursday, April 19, 2007 12:15 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Datatype construction, serious limitation (was:
<br>
Signal: Segmentation fault (11) Problem)
<br>
<p>I am the developer and the maintainer of the data-type engine in Open MPI.
<br>
And, I'm stunned (!) It never occur to me that someone will ever use a
<br>
data-type description that need more than 32K entries on the internal stack.
<br>
<p>Let me explain a little bit. The stack is used to efficiently parse the
<br>
data-type description. The 32K limit it's not a limit for the number of
<br>
predefined MPI types in the data-type, but a limit for the number of
<br>
different data descriptions (a description is like a vector of a predefined
<br>
type). As an example an MPI_Type_struct with count 10 will use 11 entries.
<br>
So in order to overload this data description one has to use an
<br>
MPI_Type_struct with a count bigger than 32K (which might be the case with
<br>
the BOOST library you're using in your code).
<br>
<p>In conclusion if your data-type description contain more than 32K entries,
<br>
the current implementation will definitively not work for you. How many
<br>
entries are in your data-type description ? There is an easy way to figure
<br>
out if this is the problem with your code.  
<br>
Attaching gdb to your process and setting a break in the
<br>
ompi_generic_simple_pack function is the first step. Once there, doing in
<br>
gdb &quot;call ompi_ddt_dump(pData)&quot; will print a high level description of the
<br>
data as represented internally in Open MPI. If you can provide the output of
<br>
this call I can tell you in few seconds if this is the real issue or not.
<br>
<p>However, this raise another question about the performance you expect from
<br>
your code. A data description with more than 32K items, cannot be
<br>
efficiently optimized by any automatic data-type engine. Moreover, it cannot
<br>
be easily parsed. I suggest that if it's possible to identify access
<br>
patterns that are repetitive, one should use them in order to improve the
<br>
data-type description.
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
<span class="quotelev1">&gt; Open-MPI allows only a limited number of elements in the description 
</span><br>
<span class="quotelev1">&gt; of user-defined MPI_Datatypes.
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
<span class="quotelev1">&gt; pElem (Bad address). The structure pElem is set in line 276, where it 
</span><br>
<span class="quotelev1">&gt; is retrieved as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 276: pElem = &amp;(description[pos_desc]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pos_desc is of type uint32_t with the value 0xffff929f (4294939295), 
</span><br>
<span class="quotelev1">&gt; which itself is set on line 271 by a variable of type int16_t and 
</span><br>
<span class="quotelev1">&gt; value -1. This leads to the indexing of the description structure at 
</span><br>
<span class="quotelev1">&gt; position -1, producing the segmentation fault. The origin of the 
</span><br>
<span class="quotelev1">&gt; pos_desc can be faund in the same function at line 271:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 271: pos_desc = pStack-&gt;index;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The structure to which pStack is pointing is of type dt_stack, defined 
</span><br>
<span class="quotelev1">&gt; in ompi/datatype/convertor.h starting at line 65, where index is and 
</span><br>
<span class="quotelev1">&gt; int16_t and  commented with &quot;index in the element
</span><br>
<span class="quotelev1">&gt; description&quot;:
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
<span class="quotelev1">&gt; We therefore conclude that MPI_Datatypes, which are constructed with 
</span><br>
<span class="quotelev1">&gt; Open-MPI (in the release of 1.2.1a of April 10th 2007) have the 
</span><br>
<span class="quotelev1">&gt; limitation of containing a maximum of 32'768 separate entries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although changing the type of the index to int32_t solves the problem 
</span><br>
<span class="quotelev1">&gt; of the segmentation fault, I would be happy if the author / maintainer 
</span><br>
<span class="quotelev1">&gt; of the code could have a look at it and decide if this is viable fix. 
</span><br>
<span class="quotelev1">&gt; Having spent a lot of time in hunting down the issue into the Open-MPI 
</span><br>
<span class="quotelev1">&gt; code, I would be glad to see the issue fixed in upcoming releases.
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
<br><p>
<p><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-3090/pdata.png" alt="pdata.png">
<!-- attachment="pdata.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3091.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>In reply to:</strong> <a href="3089.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Reply:</strong> <a href="3097.php">George Bosilca: "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
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
