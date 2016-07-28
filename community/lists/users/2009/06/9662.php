<?
$subject_val = "Re: [OMPI users] Linking MPI applications with pgi IPA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 15:48:36 2009" -->
<!-- isoreceived="20090622194836" -->
<!-- sent="Mon, 22 Jun 2009 15:47:22 -0400" -->
<!-- isosent="20090622194722" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking MPI applications with pgi IPA" -->
<!-- id="FD0EF3E5-102C-4831-A78B-E15408F12BFE_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1D2A95F0-1201-4C8F-AC84-F0846A2C9828_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linking MPI applications with pgi IPA<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 15:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9663.php">Si Hammond: "[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>Previous message:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>In reply to:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will have to try this latter, in theory if the library is compiled  
<br>
with the options it will have the needed information.
<br>
<p>ST (the makers of PGI) got back and I quote:
<br>
<p>&quot;You can try -Mipa=fast,inline,safe&quot;
<br>
&quot;I think for now, all libraries are safe.  It is more a matter of how  
<br>
aggressively does a compiler's inter-procedural analysis behave in  
<br>
perhaps re-ordering function calls.
<br>
Today, we don't do that.  But we are leaving our options open in the  
<br>
future, if we find we could benefit performance by call reordering  
<br>
safely via compiler-gathered ipa information.&quot;
<br>
<p>I have not found time to test this though.
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jun 22, 2009, at 7:38 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Can you compile Open MPI with the same compiler options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2009, at 2:57 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When linking application that are being compiled and linked with  
</span><br>
<span class="quotelev2">&gt;&gt; the -
</span><br>
<span class="quotelev2">&gt;&gt; Mipa=fast,inline option, the IPA stops with errors like this case
</span><br>
<span class="quotelev2">&gt;&gt; with amber:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following function(s) are called, but no IPA information is
</span><br>
<span class="quotelev2">&gt;&gt; available:
</span><br>
<span class="quotelev2">&gt;&gt; mpi_allgatherv_, mpi_gatherv_, mpi_bcast_, mpi_wait_, mpi_get_count_,
</span><br>
<span class="quotelev2">&gt;&gt; mpi_recv_, mpi_isend_, mpi_gather_, mpi_allreduce_, mpi_abort_,
</span><br>
<span class="quotelev2">&gt;&gt; mpi_finalize_, mpi_send_
</span><br>
<span class="quotelev2">&gt;&gt; Linking without IPA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to tell the compiler its ok to ignore the MPI library
</span><br>
<span class="quotelev2">&gt;&gt; and do IPA for everything else?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9663.php">Si Hammond: "[OMPI users] Problem with GNU GFortran OpenMPI 1.3.0"</a>
<li><strong>Previous message:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>In reply to:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
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
