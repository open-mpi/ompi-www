<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 19:49:20 2009" -->
<!-- isoreceived="20090217004920" -->
<!-- sent="Mon, 16 Feb 2009 19:49:12 -0500" -->
<!-- isosent="20090217004912" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568" -->
<!-- id="5762954E-FD04-4366-A35C-090A9A64CA64_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200902170020.n1H0K5an024932_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-16 19:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5432.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, this doesn't fully fix the problem -- I'm still getting  
<br>
bad frees:
<br>
<p>[16:47] svbu-mpi:~/mpi % ./hello
<br>
stdout: Hello, world!  I am 0 of 1 (svbu-mpi.cisco.com)
<br>
stderr: Hello, world!  I am 0 of 1 (svbu-mpi.cisco.com)
<br>
malloc debug: Invalid free (min_heap.h, 58)
<br>
<p>[16:48] svbu-mpi:~/mpi % mpirun -np 1 hello
<br>
[svbu-mpi001:27549] ********** Parsing receive_queues
<br>
stdout: Hello, world!  I am 0 of 1 (svbu-mpi001)
<br>
stderr: Hello, world!  I am 0 of 1 (svbu-mpi001)
<br>
malloc debug: Invalid free (min_heap.h, 58)
<br>
<p><p>On Feb 16, 2009, at 7:20 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2009-02-16 19:20:05 EST (Mon, 16 Feb 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20568
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20568">https://svn.open-mpi.org/trac/ompi/changeset/20568</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Make sure we correctly unregister all persistent events
</span><br>
<span class="quotelev1">&gt; and signal handlers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_main.c  |     8 ++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_wait.c |     4 ++--
</span><br>
<span class="quotelev1">&gt;   2 files changed, 10 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/orted/orted_main.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/orted/orted_main.c	2009-02-16 19:20:05 EST (Mon, 16  
</span><br>
<span class="quotelev1">&gt; Feb 2009)
</span><br>
<span class="quotelev1">&gt; @@ -754,6 +754,14 @@
</span><br>
<span class="quotelev1">&gt;         exit(ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +    /* Release all local signal handlers */
</span><br>
<span class="quotelev1">&gt; +    opal_event_del(&amp;term_handler);
</span><br>
<span class="quotelev1">&gt; +    opal_event_del(&amp;int_handler);
</span><br>
<span class="quotelev1">&gt; +#ifndef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; +    opal_signal_del(&amp;sigusr1_handler);
</span><br>
<span class="quotelev1">&gt; +    opal_signal_del(&amp;sigusr2_handler);
</span><br>
<span class="quotelev1">&gt; +#endif  /* __WINDOWS__ */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* Finalize and clean up ourselves */
</span><br>
<span class="quotelev1">&gt;     ret = orte_finalize();
</span><br>
<span class="quotelev1">&gt;     exit(ret);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/runtime/orte_wait.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/runtime/orte_wait.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/runtime/orte_wait.c	2009-02-16 19:20:05 EST (Mon, 16  
</span><br>
<span class="quotelev1">&gt; Feb 2009)
</span><br>
<span class="quotelev1">&gt; @@ -517,8 +517,8 @@
</span><br>
<span class="quotelev1">&gt;     /* define the event to fire when someone writes to the pipe */
</span><br>
<span class="quotelev1">&gt;     opal_event_set(*event, p[0], OPAL_EV_READ, cbfunc, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -	/* Add it to the active events, without a timeout */
</span><br>
<span class="quotelev1">&gt; -	opal_event_add(*event, NULL);
</span><br>
<span class="quotelev1">&gt; +    /* Add it to the active events, without a timeout */
</span><br>
<span class="quotelev1">&gt; +    opal_event_add(*event, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* all done */
</span><br>
<span class="quotelev1">&gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5432.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
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
