<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 09:16:19 2007" -->
<!-- isoreceived="20070925131619" -->
<!-- sent="Tue, 25 Sep 2007 09:15:59 -0400" -->
<!-- isosent="20070925131559" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200" -->
<!-- id="46F90A0F.60109_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220709250523h2076fd0dk7d7022a2d6abbece_at_mail.gmail.com" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 09:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Previous message:</strong> <a href="2363.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>In reply to:</strong> <a href="2363.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Reply:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; Hmm, why should an external debugger dictate the members
</span><br>
<span class="quotelev1">&gt; of our communicator struct?  Does MPICH, etc. have the exact same
</span><br>
<span class="quotelev1">&gt; structure for their comunicators?  I doubt it.
</span><br>
<p>Yes, only for mqs_communicator which shares between the DLL and TV. In 
<br>
fact, the whole mpi_interface.h should not be touched. Nikolay Piskun of 
<br>
Totalview Tech confirmed it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If George's r16177 change is correct, mqs_taddr_t unique_id is never
</span><br>
<span class="quotelev1">&gt; used or set in OMPI.
</span><br>
<p>Yes, it is not used for now. But George seems to have second thought 
<br>
about using this unique_id instead of our own cid to make things 
<br>
consistent. We'll stay tuned on what he has to do...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sure TotalView &amp; DLL already need to adjust what binary interface
</span><br>
<span class="quotelev1">&gt; they expect based on which version of OMPI they are interacting with...
</span><br>
<span class="quotelev1">&gt; what is one more struct difference?
</span><br>
<span class="quotelev1">&gt; If it is very important for this struct to not change, please add a comment
</span><br>
<span class="quotelev1">&gt; to the struct explaining why it shouldn't be changed.
</span><br>
<p>I will, once I've figured out how to modify my existing comment for 
<br>
r16200. Just to show you the kind of badness you'll see by taking things 
<br>
out from the struct should show you a messed up comm name and comm_size, 
<br>
like this on both Solaris AMD and SPARC. By putting this member back to 
<br>
the struct, at least it can band aid the problem.
<br>
<p>_WORLD
<br>
Comm_size            5571033412557294925
<br>
Comm_rank                4
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>_SELF
<br>
Comm_size            5571033412557294925
<br>
Comm_rank                1
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>_NULL
<br>
Comm_size            5571033412557294925
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/24/07, paklui_at_[hidden] &lt;paklui_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: paklui
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-09-24 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 16200
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16200">https://svn.open-mpi.org/trac/ompi/changeset/16200</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; mqs_communicator type should not be changed as it serves as the interface
</span><br>
<span class="quotelev2">&gt;&gt; between Totalview and DLL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/debuggers/mpi_interface.h |     3 ++-
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/debuggers/mpi_interface.h
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/debuggers/mpi_interface.h        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/debuggers/mpi_interface.h        2007-09-24 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -259,7 +259,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  /* A structure to represent a communicator */
</span><br>
<span class="quotelev2">&gt;&gt;  typedef struct
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -  mqs_tword_t local_rank;              /* The rank of this process Comm_rank */
</span><br>
<span class="quotelev2">&gt;&gt; +  mqs_taddr_t unique_id;                       /* A unique tag for the communicator */
</span><br>
<span class="quotelev2">&gt;&gt; +  mqs_tword_t local_rank;                      /* The rank of this process Comm_rank */
</span><br>
<span class="quotelev2">&gt;&gt;    mqs_tword_t size;                            /* Comm_size  */
</span><br>
<span class="quotelev2">&gt;&gt;    char    name[64];                            /* the name if it has one */
</span><br>
<span class="quotelev2">&gt;&gt;  } mqs_communicator;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Previous message:</strong> <a href="2363.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>In reply to:</strong> <a href="2363.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Reply:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
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
