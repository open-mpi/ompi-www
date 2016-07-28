<?
$subject_val = "Re: [OMPI users] parpack with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 15:28:29 2007" -->
<!-- isoreceived="20071213202829" -->
<!-- sent="Thu, 13 Dec 2007 15:27:20 -0500" -->
<!-- isosent="20071213202720" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parpack with openmpi" -->
<!-- id="B6E19851-8FCF-49AC-A907-24A9B045424C_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="06A66D03-C316-4691-B111-91D70F71BF47_at_umich.edu" -->
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
<strong>Date:</strong> 2007-12-13 15:27:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4667.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I solved the problem and the quote 'we have met the enemy and he is  
<br>
us' fits prefectly.
<br>
<p>The reason was I had a stale object file laying around from when i  
<br>
used a different compiler.  Removing mpif.h as they are listed in the  
<br>
PARPACK ARmake.inc and recompiling worked.
<br>
<p>Sorry for the red herring.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Dec 12, 2007, at 7:17 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Yes, the software came with its own.  And i removed it, mpif77  
</span><br>
<span class="quotelev1">&gt; takes care of not having mpif.h in the directory just as it should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should mention (sorry)  that the single, complex and double  
</span><br>
<span class="quotelev1">&gt; complex examples work.  only the double (real) examples fail.
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
<span class="quotelev1">&gt; On Dec 12, 2007, at 6:51 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This *usually* happens when you include the mpif.h from a different
</span><br>
<span class="quotelev2">&gt;&gt; MPI implementation.  Can you check that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2007, at 5:15 PM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone ever built parpack (<a href="http://www.caam.rice.edu/software/">http://www.caam.rice.edu/software/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ARPACK/)  with openmpi?  It compiles but some of the examples give:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx-login1.engin.umich.edu:12173] *** on communicator  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx-login1.engin.umich.edu:12173] *** MPI_ERR_TYPE: invalid  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx-login1.engin.umich.edu:12173] *** MPI_ERRORS_ARE_FATAL  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx-login1.engin.umich.edu:12174] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [nyx-login1.engin.umich.edu:12174] *** on communicator  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked all the data types are:  MPI_DOUBLE_PRECISION  Im not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where to look next.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4667.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4658.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
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
