<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 18:10:07 2007" -->
<!-- isoreceived="20071017221007" -->
<!-- sent="Wed, 17 Oct 2007 18:09:51 -0400" -->
<!-- isosent="20071017220951" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200" -->
<!-- id="DDCC6059-4FE8-4FCC-A5E2-E8BB5F6F745B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2A11E4D5-1870-4F71-8A92-C7D4152A04E3_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-10-17 18:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2461.php">Edgar Gabriel: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>Previous message:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As promised I patched the debugger support in Open MPI in order to  
<br>
remove the recv_context variable, and use only the shared unique_id  
<br>
field. The commit is 16492.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 25, 2007, at 11:20 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; He's right. By mistake I modified the mpi_interface.h file, when I  
</span><br>
<span class="quotelev1">&gt; knew that it should not be modified. This file is identical for all  
</span><br>
<span class="quotelev1">&gt; MPI implementations that provide parallel debuggers support. It  
</span><br>
<span class="quotelev1">&gt; define the interfaces between us and them ... interfaces that  
</span><br>
<span class="quotelev1">&gt; include functions as well as structures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The unique_id field was not used in Open MPI, as it didn't seems to  
</span><br>
<span class="quotelev1">&gt; me that the tv guys are using it. Therefore, instead of using the  
</span><br>
<span class="quotelev1">&gt; unique_id field in their interface structure, I use the  
</span><br>
<span class="quotelev1">&gt; recv_context in our own version. However, as I said, the interface  
</span><br>
<span class="quotelev1">&gt; should never be changed, so Pak was right by rolling back this  
</span><br>
<span class="quotelev1">&gt; mpi_interface.h file. I'll commit another change soon, where I get  
</span><br>
<span class="quotelev1">&gt; rid of our own internal cid field in favor of the unique_id.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2007, at 9:15 AM, Pak Lui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tim,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm, why should an external debugger dictate the members
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of our communicator struct?  Does MPICH, etc. have the exact same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structure for their comunicators?  I doubt it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, only for mqs_communicator which shares between the DLL and  
</span><br>
<span class="quotelev2">&gt;&gt; TV. In
</span><br>
<span class="quotelev2">&gt;&gt; fact, the whole mpi_interface.h should not be touched. Nikolay  
</span><br>
<span class="quotelev2">&gt;&gt; Piskun of
</span><br>
<span class="quotelev2">&gt;&gt; Totalview Tech confirmed it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If George's r16177 change is correct, mqs_taddr_t unique_id is never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used or set in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it is not used for now. But George seems to have second thought
</span><br>
<span class="quotelev2">&gt;&gt; about using this unique_id instead of our own cid to make things
</span><br>
<span class="quotelev2">&gt;&gt; consistent. We'll stay tuned on what he has to do...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sure TotalView &amp; DLL already need to adjust what binary  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they expect based on which version of OMPI they are interacting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is one more struct difference?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it is very important for this struct to not change, please add  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a comment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the struct explaining why it shouldn't be changed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will, once I've figured out how to modify my existing comment for
</span><br>
<span class="quotelev2">&gt;&gt; r16200. Just to show you the kind of badness you'll see by taking  
</span><br>
<span class="quotelev2">&gt;&gt; things
</span><br>
<span class="quotelev2">&gt;&gt; out from the struct should show you a messed up comm name and  
</span><br>
<span class="quotelev2">&gt;&gt; comm_size,
</span><br>
<span class="quotelev2">&gt;&gt; like this on both Solaris AMD and SPARC. By putting this member  
</span><br>
<span class="quotelev2">&gt;&gt; back to
</span><br>
<span class="quotelev2">&gt;&gt; the struct, at least it can band aid the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _WORLD
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size            5571033412557294925
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                4
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _SELF
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size            5571033412557294925
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                1
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _NULL
</span><br>
<span class="quotelev2">&gt;&gt; Comm_size            5571033412557294925
</span><br>
<span class="quotelev2">&gt;&gt; Comm_rank                0
</span><br>
<span class="quotelev2">&gt;&gt; Pending receives    : none
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev2">&gt;&gt; Pending sends       : none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/24/07, paklui_at_[hidden] &lt;paklui_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: paklui
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2007-09-24 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 16200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16200">https://svn.open-mpi.org/trac/ompi/changeset/16200</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mqs_communicator type should not be changed as it serves as the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between Totalview and DLL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    trunk/ompi/debuggers/mpi_interface.h |     3 ++-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/debuggers/mpi_interface.h
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/debuggers/mpi_interface.h        (original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/debuggers/mpi_interface.h        2007-09-24  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -259,7 +259,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /* A structure to represent a communicator */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  typedef struct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -  mqs_tword_t local_rank;              /* The rank of this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process Comm_rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  mqs_taddr_t unique_id;                       /* A unique tag  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the communicator */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  mqs_tword_t local_rank;                      /* The rank of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this process Comm_rank */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    mqs_tword_t size;                            /* Comm_size  */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    char    name[64];                            /* the name if  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it has one */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  } mqs_communicator;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Pak Lui
</span><br>
<span class="quotelev2">&gt;&gt; pak.lui_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2460/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2461.php">Edgar Gabriel: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>Previous message:</strong> <a href="2459.php">Jeff Squyres: "Re: [OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
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
