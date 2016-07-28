<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 23:12:14 2007" -->
<!-- isoreceived="20070718031214" -->
<!-- sent="Tue, 17 Jul 2007 21:12:06 -0600 (MDT)" -->
<!-- isosent="20070718031206" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474" -->
<!-- id="25160.128.165.0.81.1184728326.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0DC24D06-4B14-4855-8838-C35B724E2590_at_cs.utk.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 23:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1922.php">Jeff Squyres: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>Previous message:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So first, there's an error in the patch (e-mail with details coming
<br>
shortly, as there are many errors in the patch).  There's no need for both
<br>
isends (the new one and the one in there already).
<br>
<p>Second, this is in code that's a crutch around the real issue, which is
<br>
that for a very small class of applications, the way wireup occurs with
<br>
InfiniBand makes it time consuming if the application is very asynchronous
<br>
(one process does a single send, the other process doesn't enter the MPI
<br>
library for many minutes).  It's not on by default and not recommended for
<br>
almost all uses.
<br>
<p>The goal is not to have a barrier, but to have every process have at least
<br>
one channel for MPI communication fully established to every other
<br>
process.  The barrier is a side effect.  The MPI barrier isn't used
<br>
precisely because it doesn't cause every process to talk to every other
<br>
process.  The rotating ring algorithm was used because we're also trying
<br>
as hard as possible to reduce single-point contention, which when everyone
<br>
is trying to connect at once, caused failures in either the OOB fabric
<br>
(which I think I fixed a couple months ago) or in the IB layer (which
<br>
seemed to be the nature of IB).
<br>
<p>This is not new code, and given the tiny number of users (now that the OOB
<br>
is fixed, one app that I know of at LANL), I'm not really concerned about
<br>
scalability.
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; If you really want to have a fully featured barrier why not using the
</span><br>
<span class="quotelev1">&gt; collective barrier ? This double ring barrier have really bad
</span><br>
<span class="quotelev1">&gt; performance, and it will became a real scalability issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or do we really need to force this particular connection shape (left
</span><br>
<span class="quotelev1">&gt; &amp; right) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/runtime/ompi_mpi_preconnect.c
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/runtime/ompi_mpi_preconnect.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/runtime/ompi_mpi_preconnect.c	2007-07-17 21:15:59 EDT
</span><br>
<span class="quotelev1">&gt; (Tue, 17 Jul 2007)
</span><br>
<span class="quotelev1">&gt; @@ -78,6 +78,22 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           ret = ompi_request_wait_all(2, requests, MPI_STATUSES_IGNORE);
</span><br>
<span class="quotelev1">&gt;           if (OMPI_SUCCESS != ret) return ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        ret = MCA_PML_CALL(isend(outbuf, 1, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt; +                                 next, 1,
</span><br>
<span class="quotelev1">&gt; +                                 MCA_PML_BASE_SEND_COMPLETE,
</span><br>
<span class="quotelev1">&gt; +                                 MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; +                                 &amp;requests[1]));
</span><br>
<span class="quotelev1">&gt; +        if (OMPI_SUCCESS != ret) return ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        ret = MCA_PML_CALL(irecv(inbuf, 1, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt; +                                 prev, 1,
</span><br>
<span class="quotelev1">&gt; +                                 MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; +                                 &amp;requests[0]));
</span><br>
<span class="quotelev1">&gt; +        if(OMPI_SUCCESS != ret) return ret;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        ret = ompi_request_wait_all(2, requests, MPI_STATUSES_IGNORE);
</span><br>
<span class="quotelev1">&gt; +        if (OMPI_SUCCESS != ret) return ret;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return ret;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2007, at 9:16 PM, jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-07-17 21:15:59 EDT (Tue, 17 Jul 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 15474
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15474">https://svn.open-mpi.org/trac/ompi/changeset/15474</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1922.php">Jeff Squyres: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>Previous message:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
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
