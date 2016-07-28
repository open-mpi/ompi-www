<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 11:21:08 2007" -->
<!-- isoreceived="20070925152108" -->
<!-- sent="Tue, 25 Sep 2007 11:20:53 -0400" -->
<!-- isosent="20070925152053" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200" -->
<!-- id="2A11E4D5-1870-4F71-8A92-C7D4152A04E3_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F90A0F.60109_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-25 11:20:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2366.php">Richard Graham: "[OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
He's right. By mistake I modified the mpi_interface.h file, when I  
<br>
knew that it should not be modified. This file is identical for all  
<br>
MPI implementations that provide parallel debuggers support. It  
<br>
define the interfaces between us and them ... interfaces that include  
<br>
functions as well as structures.
<br>
<p>The unique_id field was not used in Open MPI, as it didn't seems to  
<br>
me that the tv guys are using it. Therefore, instead of using the  
<br>
unique_id field in their interface structure, I use the recv_context  
<br>
in our own version. However, as I said, the interface should never be  
<br>
changed, so Pak was right by rolling back this mpi_interface.h file.  
<br>
I'll commit another change soon, where I get rid of our own internal  
<br>
cid field in favor of the unique_id.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 25, 2007, at 9:15 AM, Pak Lui wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, why should an external debugger dictate the members
</span><br>
<span class="quotelev2">&gt;&gt; of our communicator struct?  Does MPICH, etc. have the exact same
</span><br>
<span class="quotelev2">&gt;&gt; structure for their comunicators?  I doubt it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, only for mqs_communicator which shares between the DLL and TV. In
</span><br>
<span class="quotelev1">&gt; fact, the whole mpi_interface.h should not be touched. Nikolay  
</span><br>
<span class="quotelev1">&gt; Piskun of
</span><br>
<span class="quotelev1">&gt; Totalview Tech confirmed it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If George's r16177 change is correct, mqs_taddr_t unique_id is never
</span><br>
<span class="quotelev2">&gt;&gt; used or set in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it is not used for now. But George seems to have second thought
</span><br>
<span class="quotelev1">&gt; about using this unique_id instead of our own cid to make things
</span><br>
<span class="quotelev1">&gt; consistent. We'll stay tuned on what he has to do...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sure TotalView &amp; DLL already need to adjust what binary interface
</span><br>
<span class="quotelev2">&gt;&gt; they expect based on which version of OMPI they are interacting  
</span><br>
<span class="quotelev2">&gt;&gt; with...
</span><br>
<span class="quotelev2">&gt;&gt; what is one more struct difference?
</span><br>
<span class="quotelev2">&gt;&gt; If it is very important for this struct to not change, please add  
</span><br>
<span class="quotelev2">&gt;&gt; a comment
</span><br>
<span class="quotelev2">&gt;&gt; to the struct explaining why it shouldn't be changed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will, once I've figured out how to modify my existing comment for
</span><br>
<span class="quotelev1">&gt; r16200. Just to show you the kind of badness you'll see by taking  
</span><br>
<span class="quotelev1">&gt; things
</span><br>
<span class="quotelev1">&gt; out from the struct should show you a messed up comm name and  
</span><br>
<span class="quotelev1">&gt; comm_size,
</span><br>
<span class="quotelev1">&gt; like this on both Solaris AMD and SPARC. By putting this member  
</span><br>
<span class="quotelev1">&gt; back to
</span><br>
<span class="quotelev1">&gt; the struct, at least it can band aid the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _WORLD
</span><br>
<span class="quotelev1">&gt; Comm_size            5571033412557294925
</span><br>
<span class="quotelev1">&gt; Comm_rank                4
</span><br>
<span class="quotelev1">&gt; Pending receives    : none
</span><br>
<span class="quotelev1">&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev1">&gt; Pending sends       : none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _SELF
</span><br>
<span class="quotelev1">&gt; Comm_size            5571033412557294925
</span><br>
<span class="quotelev1">&gt; Comm_rank                1
</span><br>
<span class="quotelev1">&gt; Pending receives    : none
</span><br>
<span class="quotelev1">&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev1">&gt; Pending sends       : none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _NULL
</span><br>
<span class="quotelev1">&gt; Comm_size            5571033412557294925
</span><br>
<span class="quotelev1">&gt; Comm_rank                0
</span><br>
<span class="quotelev1">&gt; Pending receives    : none
</span><br>
<span class="quotelev1">&gt; Unexpected messages : no information available
</span><br>
<span class="quotelev1">&gt; Pending sends       : none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/24/07, paklui_at_[hidden] &lt;paklui_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: paklui
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-09-24 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 16200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16200">https://svn.open-mpi.org/trac/ompi/changeset/16200</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mqs_communicator type should not be changed as it serves as the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between Totalview and DLL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/ompi/debuggers/mpi_interface.h |     3 ++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/debuggers/mpi_interface.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/debuggers/mpi_interface.h        (original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/debuggers/mpi_interface.h        2007-09-24  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -259,7 +259,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* A structure to represent a communicator */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  typedef struct
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -  mqs_tword_t local_rank;              /* The rank of this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process Comm_rank */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  mqs_taddr_t unique_id;                       /* A unique tag  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the communicator */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +  mqs_tword_t local_rank;                      /* The rank of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this process Comm_rank */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mqs_tword_t size;                            /* Comm_size  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char    name[64];                            /* the name if it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has one */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  } mqs_communicator;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; pak.lui_at_[hidden]
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2365/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2366.php">Richard Graham: "[OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
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
