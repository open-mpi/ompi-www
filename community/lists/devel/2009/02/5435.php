<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 21:16:53 2009" -->
<!-- isoreceived="20090217021653" -->
<!-- sent="Mon, 16 Feb 2009 21:16:47 -0500" -->
<!-- isosent="20090217021647" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568" -->
<!-- id="528E4575-5B45-4E9E-A4EC-F11C3BFFCF8F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6D46CA5C-9624-4BA1-A920-A2968C8F90F0_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-16 21:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on several man pages, free is capable of handling a NULL  
<br>
argument. What is really puzzling is that on your system it doesn't ...
<br>
<p>I tried on two system a 64 bits Debian and on my MAC OS X with all  
<br>
memory allocator options on, and I'm unable to get such a warning :(
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 16, 2009, at 20:13 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; r20569 fixes the problem, but I'm not 100% sure it's the Right Way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short version: now that we're guaranteeing to free the event base,  
</span><br>
<span class="quotelev1">&gt; we're exercising a code path that was never used before.  Apparently  
</span><br>
<span class="quotelev1">&gt; the orted initializes the ev-&gt;timebase min_heap_t structure, but  
</span><br>
<span class="quotelev1">&gt; then never uses it.  So the pointer to the array of events in the  
</span><br>
<span class="quotelev1">&gt; heap is still NULL when we get to the destructor.  Previously, the  
</span><br>
<span class="quotelev1">&gt; destructor just unconditionally freed the array.  I put in a NULL  
</span><br>
<span class="quotelev1">&gt; check, which avoids the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it begs the question -- why is that data structure being  
</span><br>
<span class="quotelev1">&gt; initialized/freed if we're never using it?  Is it something inherent  
</span><br>
<span class="quotelev1">&gt; in libevent?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 16, 2009, at 7:49 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this doesn't fully fix the problem -- I'm still  
</span><br>
<span class="quotelev2">&gt;&gt; getting
</span><br>
<span class="quotelev2">&gt;&gt; bad frees:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [16:47] svbu-mpi:~/mpi % ./hello
</span><br>
<span class="quotelev2">&gt;&gt; stdout: Hello, world!  I am 0 of 1 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev2">&gt;&gt; stderr: Hello, world!  I am 0 of 1 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (min_heap.h, 58)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [16:48] svbu-mpi:~/mpi % mpirun -np 1 hello
</span><br>
<span class="quotelev2">&gt;&gt; [svbu-mpi001:27549] ********** Parsing receive_queues
</span><br>
<span class="quotelev2">&gt;&gt; stdout: Hello, world!  I am 0 of 1 (svbu-mpi001)
</span><br>
<span class="quotelev2">&gt;&gt; stderr: Hello, world!  I am 0 of 1 (svbu-mpi001)
</span><br>
<span class="quotelev2">&gt;&gt; malloc debug: Invalid free (min_heap.h, 58)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 16, 2009, at 7:20 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: 2009-02-16 19:20:05 EST (Mon, 16 Feb 2009)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; New Revision: 20568
</span><br>
<span class="quotelev3">&gt;&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20568">https://svn.open-mpi.org/trac/ompi/changeset/20568</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Make sure we correctly unregister all persistent events
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and signal handlers.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   trunk/orte/orted/orted_main.c  |     8 ++++++++
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   trunk/orte/runtime/orte_wait.c |     4 ++--
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   2 files changed, 10 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Modified: trunk/orte/orted/orted_main.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- trunk/orte/orted/orted_main.c     (original)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ trunk/orte/orted/orted_main.c     2009-02-16 19:20:05 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Mon, 16
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Feb 2009)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -754,6 +754,14 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         exit(ORTE_ERROR_DEFAULT_EXIT_CODE);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    /* Release all local signal handlers */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    opal_event_del(&amp;term_handler);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    opal_event_del(&amp;int_handler);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#ifndef __WINDOWS__
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    opal_signal_del(&amp;sigusr1_handler);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    opal_signal_del(&amp;sigusr2_handler);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +#endif  /* __WINDOWS__ */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /* Finalize and clean up ourselves */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     ret = orte_finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     exit(ret);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Modified: trunk/orte/runtime/orte_wait.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; =
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --- trunk/orte/runtime/orte_wait.c    (original)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +++ trunk/orte/runtime/orte_wait.c    2009-02-16 19:20:05 EST  
</span><br>
<span class="quotelev2">&gt;&gt; (Mon, 16
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Feb 2009)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @@ -517,8 +517,8 @@
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /* define the event to fire when someone writes to the pipe */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     opal_event_set(*event, p[0], OPAL_EV_READ, cbfunc, NULL);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -     /* Add it to the active events, without a timeout */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -     opal_event_add(*event, NULL);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    /* Add it to the active events, without a timeout */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    opal_event_add(*event, NULL);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /* all done */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Previous message:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>In reply to:</strong> <a href="5434.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Reply:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
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
