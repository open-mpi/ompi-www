<?
$subject_val = "Re: [OMPI users] MPI_Cart_sub periods";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 10:23:09 2012" -->
<!-- isoreceived="20120906142309" -->
<!-- sent="Thu, 6 Sep 2012 10:23:04 -0400" -->
<!-- isosent="20120906142304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Cart_sub periods" -->
<!-- id="346C2878-A5A6-4043-B890-09DAB68807F2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="29C7B1986A5DF64FA3334BF1F25E56F8483E2A75_at_icexch-m1.ic.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Cart_sub periods<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 10:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20142.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20054.php">Craske, John: "[OMPI users] MPI_Cart_sub periods"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John --
<br>
<p>This cartesian stuff always makes my head hurt.  :-)
<br>
<p>You seem to have hit on a bona-fide bug.  I have fixed the issue in our SVN trunk and will get the fixed moved over to the v1.6 and v1.7 branches.
<br>
<p>Thanks for the report!
<br>
<p><p>On Aug 29, 2012, at 5:32 AM, Craske, John wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are partitioning a two-dimensional Cartesian communicator into
</span><br>
<span class="quotelev1">&gt; two one-dimensional subgroups. In this situation we have found
</span><br>
<span class="quotelev1">&gt; that both one-dimensional communicators inherit the period
</span><br>
<span class="quotelev1">&gt; logical of the first dimension of the original two-dimensional
</span><br>
<span class="quotelev1">&gt; communicator when using Open MPI.  Using MPICH each
</span><br>
<span class="quotelev1">&gt; one-dimensional communicator inherits the period corresponding to
</span><br>
<span class="quotelev1">&gt; the dimensions specified in REMAIN_DIMS, as expected.  Could this
</span><br>
<span class="quotelev1">&gt; be a bug, or are we making a mistake? The relevant calls we make in a
</span><br>
<span class="quotelev1">&gt; Fortran code are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_CART_CREATE(MPI_COMM_WORLD, 2, (/ NDIMX, NDIMY /), (/ .True., .False. /), .TRUE.,
</span><br>
<span class="quotelev1">&gt;                  COMM_CART_2D, IERROR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_CART_SUB(COMM_CART_2D, (/ .True., .False. /), COMM_CART_X, IERROR)
</span><br>
<span class="quotelev1">&gt; CALL MPI_CART_SUB(COMM_CART_2D, (/ .False., .True. /), COMM_CART_Y, IERROR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Following these requests, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_CART_GET(COMM_CART_X, MAXDIM_X, DIMS_X, PERIODS_X, COORDS_X, IERROR)
</span><br>
<span class="quotelev1">&gt; CALL MPI_CART_GET(COMM_CART_Y, MAXDIM_Y, DIMS_Y, PERIODS_Y, COORDS_Y, IERROR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will result in 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PERIODS_X = T
</span><br>
<span class="quotelev1">&gt; PERIODS_Y = T
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If, on the other hand we define the two-dimensional communicator
</span><br>
<span class="quotelev1">&gt; using PERIODS = (/ .False., .True. /), we find
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PERIODS_X = F
</span><br>
<span class="quotelev1">&gt; PERIODS_Y = F
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Your advice on the matter would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; John.
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20142.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20054.php">Craske, John: "[OMPI users] MPI_Cart_sub periods"</a>
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
