<?
$subject_val = "Re: [OMPI users] parpack with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 18:52:00 2007" -->
<!-- isoreceived="20071212235200" -->
<!-- sent="Wed, 12 Dec 2007 18:51:54 -0500" -->
<!-- isosent="20071212235154" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parpack with openmpi" -->
<!-- id="FF50DB9E-D391-41A5-8407-C8E755F23901_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E874F964-DFAB-4BF1-AECC-9AF850890615_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 18:51:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4656.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4654.php">Brock Palen: "[OMPI users] parpack with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Reply:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This *usually* happens when you include the mpif.h from a different  
<br>
MPI implementation.  Can you check that?
<br>
<p>On Dec 12, 2007, at 5:15 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone ever built parpack (<a href="http://www.caam.rice.edu/software/">http://www.caam.rice.edu/software/</a>
</span><br>
<span class="quotelev1">&gt; ARPACK/)  with openmpi?  It compiles but some of the examples give:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nyx-login1.engin.umich.edu:12173] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [nyx-login1.engin.umich.edu:12173] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; [nyx-login1.engin.umich.edu:12173] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [nyx-login1.engin.umich.edu:12174] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [nyx-login1.engin.umich.edu:12174] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked all the data types are:  MPI_DOUBLE_PRECISION  Im not sure
</span><br>
<span class="quotelev1">&gt; where to look next.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4656.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4654.php">Brock Palen: "[OMPI users] parpack with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Reply:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
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
