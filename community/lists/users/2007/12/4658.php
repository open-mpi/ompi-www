<?
$subject_val = "Re: [OMPI users] parpack with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 19:18:05 2007" -->
<!-- isoreceived="20071213001805" -->
<!-- sent="Wed, 12 Dec 2007 19:17:21 -0500" -->
<!-- isosent="20071213001721" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parpack with openmpi" -->
<!-- id="06A66D03-C316-4691-B111-91D70F71BF47_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FF50DB9E-D391-41A5-8407-C8E755F23901_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] parpack with openmpi<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 19:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4659.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4668.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Reply:</strong> <a href="4668.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the software came with its own.  And i removed it, mpif77 takes  
<br>
care of not having mpif.h in the directory just as it should.
<br>
<p>I should mention (sorry)  that the single, complex and double complex  
<br>
examples work.  only the double (real) examples fail.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Dec 12, 2007, at 6:51 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This *usually* happens when you include the mpif.h from a different
</span><br>
<span class="quotelev1">&gt; MPI implementation.  Can you check that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 5:15 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone ever built parpack (<a href="http://www.caam.rice.edu/software/">http://www.caam.rice.edu/software/</a>
</span><br>
<span class="quotelev2">&gt;&gt; ARPACK/)  with openmpi?  It compiles but some of the examples give:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [nyx-login1.engin.umich.edu:12173] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [nyx-login1.engin.umich.edu:12173] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev2">&gt;&gt; [nyx-login1.engin.umich.edu:12173] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [nyx-login1.engin.umich.edu:12174] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; [nyx-login1.engin.umich.edu:12174] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked all the data types are:  MPI_DOUBLE_PRECISION  Im not sure
</span><br>
<span class="quotelev2">&gt;&gt; where to look next.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4659.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4668.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Reply:</strong> <a href="4668.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
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
