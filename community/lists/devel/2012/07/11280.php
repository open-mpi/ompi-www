<?
$subject_val = "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 14:42:19 2012" -->
<!-- isoreceived="20120711184219" -->
<!-- sent="Wed, 11 Jul 2012 14:42:16 -0400" -->
<!-- isosent="20120711184216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective" -->
<!-- id="90C27E6D-0861-4E4D-9635-81B255014180_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A7E435BD-A15F-4B37-8312-FE663428D2C4_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 14:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11281.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ireduce_scatter_block hangs"</a>
<li><strong>Previous message:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>In reply to:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya, probably so.
<br>
<p>But I'm still going to blame Fortran for that bug.  Just 'cause it's easier.  :-)
<br>
<p>(I also spent all morning writing an MPI_COMM_SPAWN_MULTIPLE test *in Fortran*, which was exceedingly painful, and I had to send it off to a Fortran expert to tell me what I did wrong...  So my frustration with the language that I'm sorta familiar with is a little high at the moment :-) )
<br>
<p>What actually happened was that this is a side effect of me getting the 0/1 indexing mixed up.  I.e., we loop from 1-100 in Fortran (vs. 0-99 in C).  If I did &quot;for (i = 0; i &lt; 100; ++i)&quot; in C, then i would have been 100 at the end of the loop -- which is the value I wanted.  The issue was twofold:
<br>
<p>- I was thinking in that mindset (at the end of the loop in C, i == 100)
<br>
- There's no explicit increment in Fortran, so I assumed it would actually stop at 100, not 101
<br>
<p>Maybe I'll just blame Craig Rasmussen (my partner in crime in the Fortran OMPI bindings).  He's not even on this list.  Yeah, that sounds like a better idea.  :-p
<br>
<p><p>On Jul 11, 2012, at 2:36 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; The value of i is exactly as it would be in C for the value of a loop control variable at loop exit.  (As opposed to being undefined, which is what is used to be.)  This dates from Fortran-77.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11 Jul 2012, at 10:44 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ya, I saw Brian's commit, too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah, I see what happens -- i is actually 101, not 100.  Frackin' Fortran...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2012, at 12:57 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian caught it.  I simply applied the change to the other ibarrier_f* tests.  With this and your &quot;remove bozo debug statements&quot; (+ sleeps) putbacks (26768/trunk and 26769/v1.7), I'm hoping our ibarrier_f* MTT time-outs will disappear.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/11/2012 9:26 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I thought i would be 100 at the end of that do loop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $%#@#@$% Fortran.  :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 11, 2012, at 12:25 PM,&lt;svn-commit-mailer_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Author: eugene (Eugene Loh)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: 2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; New Revision: 2002
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Apply the &quot;right value when calling waitall&quot; fix to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all ibm/collective/ibarrier_f* tests.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  trunk/ibm/collective/ibarrier_f.f90   |     4 ++--
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  trunk/ibm/collective/ibarrier_f08.f90 |     3 ++-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  trunk/ibm/collective/ibarrier_f90.f90 |     3 ++-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  3 files changed, 6 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Modified: trunk/ibm/collective/ibarrier_f.f90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- trunk/ibm/collective/ibarrier_f.f90	Wed Jul 11 12:03:04 2012	(r2001)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ trunk/ibm/collective/ibarrier_f.f90	2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)	(r2002)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ! Comments may be sent to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !    Richard Treumann
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !    treumann_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +! Copyright (c) 2012      Oracle and/or its affiliates.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      program ibarrier
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      implicit none
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -57,8 +58,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      do i = 1, 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         call MPI_Ibarrier(MPI_COMM_WORLD, req(i), ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      end do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -      i = 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -      call MPI_Waitall(i, req, statuses, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +      call MPI_Waitall(100, req, statuses, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Barrier(MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Modified: trunk/ibm/collective/ibarrier_f08.f90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- trunk/ibm/collective/ibarrier_f08.f90	Wed Jul 11 12:03:04 2012	(r2001)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ trunk/ibm/collective/ibarrier_f08.f90	2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)	(r2002)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ! Comments may be sent to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !    Richard Treumann
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !    treumann_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +! Copyright (c) 2012      Oracle and/or its affiliates.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      program ibarrier
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      use mpi_f08
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -56,7 +57,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      do i = 1, 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         call MPI_Ibarrier(MPI_COMM_WORLD, req(i))
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      end do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -      call MPI_Waitall(i, req, MPI_STATUSES_IGNORE)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +      call MPI_Waitall(100, req, MPI_STATUSES_IGNORE)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Barrier(MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Finalize()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Modified: trunk/ibm/collective/ibarrier_f90.f90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- trunk/ibm/collective/ibarrier_f90.f90	Wed Jul 11 12:03:04 2012	(r2001)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ trunk/ibm/collective/ibarrier_f90.f90	2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)	(r2002)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ! Comments may be sent to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !    Richard Treumann
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; !    treumann_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +! Copyright (c) 2012      Oracle and/or its affiliates.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      program ibarrier
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      use mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -57,7 +58,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      do i = 1, 100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         call MPI_Ibarrier(MPI_COMM_WORLD, req(i), ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      end do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -      call MPI_Waitall(i, req, statuses, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +      call MPI_Waitall(100, req, statuses, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Barrier(MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn-docs-full mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; svn-docs-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs-full</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11281.php">Mikhail Kurnosov: "[OMPI devel] MPI_Ireduce_scatter_block hangs"</a>
<li><strong>Previous message:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>In reply to:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
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
