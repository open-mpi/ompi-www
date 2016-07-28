<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 08:23:30 2007" -->
<!-- isoreceived="20070925122330" -->
<!-- sent="Tue, 25 Sep 2007 08:23:26 -0400" -->
<!-- isosent="20070925122326" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200" -->
<!-- id="ea86ce220709250523h2076fd0dk7d7022a2d6abbece_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200709241902.l8OJ2u9E010510_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-25 08:23:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Previous message:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Reply:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, why should an external debugger dictate the members
<br>
of our communicator struct?  Does MPICH, etc. have the exact same
<br>
structure for their comunicators?  I doubt it.
<br>
<p>If George's r16177 change is correct, mqs_taddr_t unique_id is never
<br>
used or set in OMPI.
<br>
<p>I'm sure TotalView &amp; DLL already need to adjust what binary interface
<br>
they expect based on which version of OMPI they are interacting with...
<br>
what is one more struct difference?
<br>
If it is very important for this struct to not change, please add a comment
<br>
to the struct explaining why it shouldn't be changed.
<br>
<p><p>On 9/24/07, paklui_at_[hidden] &lt;paklui_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: paklui
</span><br>
<span class="quotelev1">&gt; Date: 2007-09-24 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16200
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16200">https://svn.open-mpi.org/trac/ompi/changeset/16200</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; mqs_communicator type should not be changed as it serves as the interface
</span><br>
<span class="quotelev1">&gt; between Totalview and DLL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/debuggers/mpi_interface.h |     3 ++-
</span><br>
<span class="quotelev1">&gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/debuggers/mpi_interface.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/debuggers/mpi_interface.h        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/debuggers/mpi_interface.h        2007-09-24 15:02:56 EDT (Mon, 24 Sep 2007)
</span><br>
<span class="quotelev1">&gt; @@ -259,7 +259,8 @@
</span><br>
<span class="quotelev1">&gt;  /* A structure to represent a communicator */
</span><br>
<span class="quotelev1">&gt;  typedef struct
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  mqs_tword_t local_rank;              /* The rank of this process Comm_rank */
</span><br>
<span class="quotelev1">&gt; +  mqs_taddr_t unique_id;                       /* A unique tag for the communicator */
</span><br>
<span class="quotelev1">&gt; +  mqs_tword_t local_rank;                      /* The rank of this process Comm_rank */
</span><br>
<span class="quotelev1">&gt;    mqs_tword_t size;                            /* Comm_size  */
</span><br>
<span class="quotelev1">&gt;    char    name[64];                            /* the name if it has one */
</span><br>
<span class="quotelev1">&gt;  } mqs_communicator;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Previous message:</strong> <a href="2362.php">Jeff Squyres: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Reply:</strong> <a href="2364.php">Pak Lui: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
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
