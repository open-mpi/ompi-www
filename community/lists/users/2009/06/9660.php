<?
$subject_val = "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 21 17:35:10 2009" -->
<!-- isoreceived="20090621213510" -->
<!-- sent="Sun, 21 Jun 2009 17:34:46 -0400" -->
<!-- isosent="20090621213446" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)" -->
<!-- id="DB9CF72B-E2EA-43EE-A86A-887956470A54_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5504C1518E7EAE4C912A724C518C079247CA0F_at_DURMAIL1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-21 17:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Previous message:</strong> <a href="9659.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>In reply to:</strong> <a href="9659.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Henk,
<br>
<p>Does the ldd output of the executable list myriexpress as a dependancy?
<br>
<p>If so, was your Open-MPI built to always link libmyriexpress? By  
<br>
default, it should not.
<br>
<p>Scott
<br>
<p>On Jun 21, 2009, at 5:27 PM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; Dear Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MX library is dynamically linked in the executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the mean time I repeated this with a simple MPI program which gives
</span><br>
<span class="quotelev1">&gt; the same messages about mx_init but does not crash. In the crashing
</span><br>
<span class="quotelev1">&gt; program the segmentation error came directly after the MX error and I
</span><br>
<span class="quotelev1">&gt; assumed they might be related but they are probably not.
</span><br>
<span class="quotelev1">&gt; The program that fails is tough2_mp with the Aztec library, however
</span><br>
<span class="quotelev1">&gt; building it with mpich_mx instead of OpenMPI does not give problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev1">&gt; Behalf Of Scott Atchley
</span><br>
<span class="quotelev1">&gt; Sent: 19 June 2009 23:23
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Error in mx_init (error MX library
</span><br>
<span class="quotelev1">&gt; incompatiblewith driver version)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2009, at 1:05 PM, SLIM H.A. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although the mismatch between MX lib version and the kernel version
</span><br>
<span class="quotelev2">&gt;&gt; appears to cause the mx_init error this should never be called as
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; is no mx card on those nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any advice to solve this
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is MX statically compiled into the binary or Open-MPI library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9661.php">Jeff Squyres: "Re: [OMPI users] Linking MPI applications with pgi IPA"</a>
<li><strong>Previous message:</strong> <a href="9659.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>In reply to:</strong> <a href="9659.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
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
