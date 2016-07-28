<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 18:17:45 2007" -->
<!-- isoreceived="20070419221745" -->
<!-- sent="Thu, 19 Apr 2007 18:17:32 -0400" -->
<!-- isosent="20070419221732" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)" -->
<!-- id="390014E2-E487-46D5-8A9D-C98380132A15_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="003d01c7825d$9cdac1a0$d69044e0$_at_ch" -->
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
<strong>Date:</strong> 2007-04-19 18:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3096.php">George Bosilca: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>In reply to:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>Based on the image you sent your data-type look gigantic. There are  
<br>
750K predefined type descriptions in your data-type, for a size of  
<br>
12MB and an extent of 68MB. The data-type engine managed to optimize  
<br>
your description down to 540K predefined type descriptions. Which is  
<br>
still way beyond the int16_t max limit.
<br>
<p>I'm working on a solution for this problem. I'll post back on the  
<br>
mailing list once this is done.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 19, 2007, at 4:34 AM, Michael Gauckler (mailing lists) wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the prompt reply. Indeed we are constructing a data-type
</span><br>
<span class="quotelev1">&gt; description with more than 32k entries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attached a screenshot of the pData structure (displayed with the  
</span><br>
<span class="quotelev1">&gt; TotalView
</span><br>
<span class="quotelev1">&gt; debugger), I hope this helps you. Unfortunately I was not able to  
</span><br>
<span class="quotelev1">&gt; use gdb to
</span><br>
<span class="quotelev1">&gt; execute the call you mentioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me explain the relation of our code with the BOOST libraries:  
</span><br>
<span class="quotelev1">&gt; The code
</span><br>
<span class="quotelev1">&gt; I'm debugging at the moment does not use any BOOST library to  
</span><br>
<span class="quotelev1">&gt; interface MPI,
</span><br>
<span class="quotelev1">&gt; but it uses the same ideas of how to automatically create the data- 
</span><br>
<span class="quotelev1">&gt; types as
</span><br>
<span class="quotelev1">&gt; the BOOST Parallel/Message Passing/MPI [1] library. This is due to  
</span><br>
<span class="quotelev1">&gt; the fact
</span><br>
<span class="quotelev1">&gt; that the library is based on our ideas and the goal to factor out our
</span><br>
<span class="quotelev1">&gt; message passing code into an open-source library (see [2]).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though such an automatically created data-type description  
</span><br>
<span class="quotelev1">&gt; might not
</span><br>
<span class="quotelev1">&gt; lead to an optimal performance, I think large descriptors should be
</span><br>
<span class="quotelev1">&gt; supported for several reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - even when using MPI, not all parts of the code are performance  
</span><br>
<span class="quotelev1">&gt; critical
</span><br>
<span class="quotelev1">&gt; - other MPI implementations support it
</span><br>
<span class="quotelev1">&gt; - passing large/complicated data structures with the BOOST Parallel/ 
</span><br>
<span class="quotelev1">&gt; Message
</span><br>
<span class="quotelev1">&gt; Passing/MPI library
</span><br>
<span class="quotelev1">&gt;   (which supports LAM, MPICH and Open-MPI out of the box, see [3])  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; probably lead to the same
</span><br>
<span class="quotelev1">&gt;   effect.
</span><br>
<span class="quotelev1">&gt; - the fix has minor to no impact on rest of the code base, at least an
</span><br>
<span class="quotelev1">&gt; appropriate error handling
</span><br>
<span class="quotelev1">&gt;   would be expected in the case of a too large data type descriptor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope that we are now sure that we have identified the problem as  
</span><br>
<span class="quotelev1">&gt; well as
</span><br>
<span class="quotelev1">&gt; the solution and that you are willing to fix the issue in upcoming  
</span><br>
<span class="quotelev1">&gt; releases
</span><br>
<span class="quotelev1">&gt; of Open-MPI. If there is anything else I can help with, please let  
</span><br>
<span class="quotelev1">&gt; me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;  Michael Gauckler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.boost.org/Archives/boost/2007/01/115347.php">http://lists.boost.org/Archives/boost/2007/01/115347.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [2]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.boost.org/boost-announce/2006/09/0099.php">http://lists.boost.org/boost-announce/2006/09/0099.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [3]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.generic-programming.org/~dgregor/boost.mpi/boost/">http://www.generic-programming.org/~dgregor/boost.mpi/boost/</a> 
</span><br>
<span class="quotelev1">&gt; parallel/mpi/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of George Bosilca
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 19, 2007 12:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Datatype construction, serious limitation  
</span><br>
<span class="quotelev1">&gt; (was:
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11) Problem)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am the developer and the maintainer of the data-type engine in  
</span><br>
<span class="quotelev1">&gt; Open MPI.
</span><br>
<span class="quotelev1">&gt; And, I'm stunned (!) It never occur to me that someone will ever use a
</span><br>
<span class="quotelev1">&gt; data-type description that need more than 32K entries on the  
</span><br>
<span class="quotelev1">&gt; internal stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me explain a little bit. The stack is used to efficiently parse  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; data-type description. The 32K limit it's not a limit for the  
</span><br>
<span class="quotelev1">&gt; number of
</span><br>
<span class="quotelev1">&gt; predefined MPI types in the data-type, but a limit for the number of
</span><br>
<span class="quotelev1">&gt; different data descriptions (a description is like a vector of a  
</span><br>
<span class="quotelev1">&gt; predefined
</span><br>
<span class="quotelev1">&gt; type). As an example an MPI_Type_struct with count 10 will use 11  
</span><br>
<span class="quotelev1">&gt; entries.
</span><br>
<span class="quotelev1">&gt; So in order to overload this data description one has to use an
</span><br>
<span class="quotelev1">&gt; MPI_Type_struct with a count bigger than 32K (which might be the  
</span><br>
<span class="quotelev1">&gt; case with
</span><br>
<span class="quotelev1">&gt; the BOOST library you're using in your code).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In conclusion if your data-type description contain more than 32K  
</span><br>
<span class="quotelev1">&gt; entries,
</span><br>
<span class="quotelev1">&gt; the current implementation will definitively not work for you. How  
</span><br>
<span class="quotelev1">&gt; many
</span><br>
<span class="quotelev1">&gt; entries are in your data-type description ? There is an easy way to  
</span><br>
<span class="quotelev1">&gt; figure
</span><br>
<span class="quotelev1">&gt; out if this is the problem with your code.
</span><br>
<span class="quotelev1">&gt; Attaching gdb to your process and setting a break in the
</span><br>
<span class="quotelev1">&gt; ompi_generic_simple_pack function is the first step. Once there,  
</span><br>
<span class="quotelev1">&gt; doing in
</span><br>
<span class="quotelev1">&gt; gdb &quot;call ompi_ddt_dump(pData)&quot; will print a high level description  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; data as represented internally in Open MPI. If you can provide the  
</span><br>
<span class="quotelev1">&gt; output of
</span><br>
<span class="quotelev1">&gt; this call I can tell you in few seconds if this is the real issue  
</span><br>
<span class="quotelev1">&gt; or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this raise another question about the performance you  
</span><br>
<span class="quotelev1">&gt; expect from
</span><br>
<span class="quotelev1">&gt; your code. A data description with more than 32K items, cannot be
</span><br>
<span class="quotelev1">&gt; efficiently optimized by any automatic data-type engine. Moreover,  
</span><br>
<span class="quotelev1">&gt; it cannot
</span><br>
<span class="quotelev1">&gt; be easily parsed. I suggest that if it's possible to identify access
</span><br>
<span class="quotelev1">&gt; patterns that are repetitive, one should use them in order to  
</span><br>
<span class="quotelev1">&gt; improve the
</span><br>
<span class="quotelev1">&gt; data-type description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 18, 2007, at 4:16 PM, Michael Gauckler wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open-MPI Developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; investigations on the segmentation fault (see previous postings
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Signal: Segmentation fault (11) Problem&quot;) lets us suspect that
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI allows only a limited number of elements in the description
</span><br>
<span class="quotelev2">&gt;&gt; of user-defined MPI_Datatypes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our application segmentation-faults when a large user-defined data
</span><br>
<span class="quotelev2">&gt;&gt; structure is passed to MPI_Send.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The segmentation fault happens in the function
</span><br>
<span class="quotelev2">&gt;&gt; ompi_generic_simple_pack in datatype_pack.c when trying to access
</span><br>
<span class="quotelev2">&gt;&gt; pElem (Bad address). The structure pElem is set in line 276, where it
</span><br>
<span class="quotelev2">&gt;&gt; is retrieved as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 276: pElem = &amp;(description[pos_desc]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pos_desc is of type uint32_t with the value 0xffff929f (4294939295),
</span><br>
<span class="quotelev2">&gt;&gt; which itself is set on line 271 by a variable of type int16_t and
</span><br>
<span class="quotelev2">&gt;&gt; value -1. This leads to the indexing of the description structure at
</span><br>
<span class="quotelev2">&gt;&gt; position -1, producing the segmentation fault. The origin of the
</span><br>
<span class="quotelev2">&gt;&gt; pos_desc can be faund in the same function at line 271:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 271: pos_desc = pStack-&gt;index;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The structure to which pStack is pointing is of type dt_stack,  
</span><br>
<span class="quotelev2">&gt;&gt; defined
</span><br>
<span class="quotelev2">&gt;&gt; in ompi/datatype/convertor.h starting at line 65, where index is and
</span><br>
<span class="quotelev2">&gt;&gt; int16_t and  commented with &quot;index in the element
</span><br>
<span class="quotelev2">&gt;&gt; description&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct dt_stack {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int16_t   index;    /**&lt; index in the element description */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int16_t   type;     /**&lt; the type used for the last pack/unpack
</span><br>
<span class="quotelev2">&gt;&gt; (original or DT_BYTE) */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     size_t    count;    /**&lt; number of times we still have to do  
</span><br>
<span class="quotelev2">&gt;&gt; it */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ptrdiff_t disp;     /**&lt; actual displacement depending on the
</span><br>
<span class="quotelev2">&gt;&gt; count field */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; } dt_stack_t;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We therefore conclude that MPI_Datatypes, which are constructed with
</span><br>
<span class="quotelev2">&gt;&gt; Open-MPI (in the release of 1.2.1a of April 10th 2007) have the
</span><br>
<span class="quotelev2">&gt;&gt; limitation of containing a maximum of 32'768 separate entries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although changing the type of the index to int32_t solves the problem
</span><br>
<span class="quotelev2">&gt;&gt; of the segmentation fault, I would be happy if the author /  
</span><br>
<span class="quotelev2">&gt;&gt; maintainer
</span><br>
<span class="quotelev2">&gt;&gt; of the code could have a look at it and decide if this is viable fix.
</span><br>
<span class="quotelev2">&gt;&gt; Having spent a lot of time in hunting down the issue into the Open- 
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; code, I would be glad to see the issue fixed in upcoming releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanx and regards,
</span><br>
<span class="quotelev2">&gt;&gt; Michael Gauckler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;pdata.png&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3097/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3098.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3096.php">George Bosilca: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<li><strong>In reply to:</strong> <a href="3090.php">Michael Gauckler (mailing lists): "Re: [OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
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
