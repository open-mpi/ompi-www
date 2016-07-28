<?
$subject_val = "Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 08:15:57 2011" -->
<!-- isoreceived="20111122131557" -->
<!-- sent="Tue, 22 Nov 2011 08:15:53 -0500" -->
<!-- isosent="20111122131553" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers" -->
<!-- id="5C9FC157-19F8-4A6E-9D79-1BFB37963910_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFkuvCgcRBgmiLE7cxzrRY5Uy981taVXGtQOvNpKRY46AbjUag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 08:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17776.php">Enzo Dari: "[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yoinks!  Thanks for the heads up, and for subsequently filing bugs for us (sorry for the delay in replying; I was fully occupied at SC last week, and this week is pretty sparse because of the US Thanksgiving holiday).
<br>
<p>You're right that this is a simple &quot;Fortran value doesn't agree with C value&quot; issue.  I'll fix it right now...
<br>
<p><p>On Nov 14, 2011, at 5:09 PM, Enzo Dari wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to establish communications between two mpi processes using
</span><br>
<span class="quotelev1">&gt; MPI_Open_port / MPI_Publish_name / MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt; in a server and 
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name / MPI_Comm_connect
</span><br>
<span class="quotelev1">&gt; in a client.
</span><br>
<span class="quotelev1">&gt; The source code is in fortran, and the client fails with some sort of &quot;malloc error&quot;.
</span><br>
<span class="quotelev1">&gt; It seems that the different values for the MPI_MAX_PORT_NAME constants between C (1024) and Fortran (255) is the reason for the problem.
</span><br>
<span class="quotelev1">&gt; Declaring the Port_name variable in Fortran with size 1023 solves this problem, buy I'm not sure if this is the proper way to handle this issue, and I'm not aware of the possible side-effects of changing MPI_MAX_PORT_NAME in .../include/mpi/mpif-common.h
</span><br>
<span class="quotelev1">&gt; I'm using openmpi 1.4.2 (included in debian stable: 6.0.3) with gfortran 4.4.5 (also the version included in debian stable). Also tried with openmpi 1.4.4 and ifort 11.1
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Enzo A. Dari
</span><br>
<span class="quotelev1">&gt; Instituto Balseiro / Centro Atomico Bariloche
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17810.php">Jeff Squyres: "Re: [OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>In reply to:</strong> <a href="17776.php">Enzo Dari: "[OMPI users] MPI_MAX_PORT_NAME different in C and Fortran headers"</a>
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
