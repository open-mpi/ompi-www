<?
$subject_val = "Re: [OMPI users] Linking MPI applications with pgi IPA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 07:38:27 2009" -->
<!-- isoreceived="20090622113827" -->
<!-- sent="Mon, 22 Jun 2009 07:38:20 -0400" -->
<!-- isosent="20090622113820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking MPI applications with pgi IPA" -->
<!-- id="1D2A95F0-1201-4C8F-AC84-F0846A2C9828_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="02BF0806-DC1C-433F-BA22-44848A512771_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 07:38:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Previous message:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>In reply to:</strong> <a href="9645.php">Brock Palen: "[OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Reply:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you compile Open MPI with the same compiler options?
<br>
<p><p>On Jun 19, 2009, at 2:57 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; When linking application that are being compiled and linked with the -
</span><br>
<span class="quotelev1">&gt; Mipa=fast,inline option, the IPA stops with errors like this case
</span><br>
<span class="quotelev1">&gt; with amber:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following function(s) are called, but no IPA information is
</span><br>
<span class="quotelev1">&gt; available:
</span><br>
<span class="quotelev1">&gt; mpi_allgatherv_, mpi_gatherv_, mpi_bcast_, mpi_wait_, mpi_get_count_,
</span><br>
<span class="quotelev1">&gt; mpi_recv_, mpi_isend_, mpi_gather_, mpi_allreduce_, mpi_abort_,
</span><br>
<span class="quotelev1">&gt; mpi_finalize_, mpi_send_
</span><br>
<span class="quotelev1">&gt; Linking without IPA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to tell the compiler its ok to ignore the MPI library
</span><br>
<span class="quotelev1">&gt; and do IPA for everything else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Previous message:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>In reply to:</strong> <a href="9645.php">Brock Palen: "[OMPI users] Linking MPI applications with pgi IPA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Reply:</strong> <a href="9662.php">Brock Palen: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
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
