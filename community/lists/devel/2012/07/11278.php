<?
$subject_val = "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 13:44:38 2012" -->
<!-- isoreceived="20120711174438" -->
<!-- sent="Wed, 11 Jul 2012 13:44:34 -0400" -->
<!-- isosent="20120711174434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective" -->
<!-- id="1B83827E-D1B5-47C5-BF24-63CFB3B20363_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FFDB07C.6010605_at_oracle.com" -->
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
<strong>Date:</strong> 2012-07-11 13:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>Previous message:</strong> <a href="11277.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>In reply to:</strong> <a href="11277.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>Reply:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya, I saw Brian's commit, too.
<br>
<p>Ah, I see what happens -- i is actually 101, not 100.  Frackin' Fortran...
<br>
<p><p>On Jul 11, 2012, at 12:57 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Brian caught it.  I simply applied the change to the other ibarrier_f* tests.  With this and your &quot;remove bozo debug statements&quot; (+ sleeps) putbacks (26768/trunk and 26769/v1.7), I'm hoping our ibarrier_f* MTT time-outs will disappear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/11/2012 9:26 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I thought i would be 100 at the end of that do loop.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $%#@#@$% Fortran.  :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2012, at 12:25 PM,&lt;svn-commit-mailer_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: eugene (Eugene Loh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 2002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apply the &quot;right value when calling waitall&quot; fix to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all ibm/collective/ibarrier_f* tests.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ibm/collective/ibarrier_f.f90   |     4 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ibm/collective/ibarrier_f08.f90 |     3 ++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ibm/collective/ibarrier_f90.f90 |     3 ++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   3 files changed, 6 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ibm/collective/ibarrier_f.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ibm/collective/ibarrier_f.f90	Wed Jul 11 12:03:04 2012	(r2001)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ibm/collective/ibarrier_f.f90	2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)	(r2002)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ! Comments may be sent to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !    Richard Treumann
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !    treumann_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +! Copyright (c) 2012      Oracle and/or its affiliates.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       program ibarrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -57,8 +58,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       do i = 1, 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          call MPI_Ibarrier(MPI_COMM_WORLD, req(i), ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      i = 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      call MPI_Waitall(i, req, statuses, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      call MPI_Waitall(100, req, statuses, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_Barrier(MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_Finalize(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ibm/collective/ibarrier_f08.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ibm/collective/ibarrier_f08.f90	Wed Jul 11 12:03:04 2012	(r2001)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ibm/collective/ibarrier_f08.f90	2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)	(r2002)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ! Comments may be sent to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !    Richard Treumann
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !    treumann_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +! Copyright (c) 2012      Oracle and/or its affiliates.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       program ibarrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       use mpi_f08
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -56,7 +57,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       do i = 1, 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          call MPI_Ibarrier(MPI_COMM_WORLD, req(i))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      call MPI_Waitall(i, req, MPI_STATUSES_IGNORE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      call MPI_Waitall(100, req, MPI_STATUSES_IGNORE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_Barrier(MPI_COMM_WORLD)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_Finalize()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ibm/collective/ibarrier_f90.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ibm/collective/ibarrier_f90.f90	Wed Jul 11 12:03:04 2012	(r2001)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ibm/collective/ibarrier_f90.f90	2012-07-11 12:25:09 EDT (Wed, 11 Jul 2012)	(r2002)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -31,6 +31,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ! Comments may be sent to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !    Richard Treumann
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !    treumann_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +! Copyright (c) 2012      Oracle and/or its affiliates.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       program ibarrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       use mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -57,7 +58,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       do i = 1, 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          call MPI_Ibarrier(MPI_COMM_WORLD, req(i), ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      call MPI_Waitall(i, req, statuses, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      call MPI_Waitall(100, req, statuses, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_Barrier(MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_Finalize(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-docs-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-docs-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-docs-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>Previous message:</strong> <a href="11277.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>In reply to:</strong> <a href="11277.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
<li><strong>Reply:</strong> <a href="11279.php">Larry Baker: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi-tests r2002 - trunk/ibm/collective"</a>
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
