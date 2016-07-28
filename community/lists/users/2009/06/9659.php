<?
$subject_val = "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 21 17:26:43 2009" -->
<!-- isoreceived="20090621212643" -->
<!-- sent="Sun, 21 Jun 2009 22:27:29 +0100" -->
<!-- isosent="20090621212729" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)" -->
<!-- id="5504C1518E7EAE4C912A724C518C079247CA0F_at_DURMAIL1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A6C485B4-38B9-4697-ABCE-BEE0CFDDCDA7_at_myri.com" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-21 17:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>Previous message:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>Reply:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Scott
<br>
<p>The MX library is dynamically linked in the executable.
<br>
<p>In the mean time I repeated this with a simple MPI program which gives
<br>
the same messages about mx_init but does not crash. In the crashing
<br>
program the segmentation error came directly after the MX error and I
<br>
assumed they might be related but they are probably not.
<br>
The program that fails is tough2_mp with the Aztec library, however
<br>
building it with mpich_mx instead of OpenMPI does not give problems.
<br>
<p>Thanks
<br>
<p>Henk
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Scott Atchley
<br>
Sent: 19 June 2009 23:23
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Error in mx_init (error MX library
<br>
incompatiblewith driver version)
<br>
<p>On Jun 19, 2009, at 1:05 PM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; Although the mismatch between MX lib version and the kernel version
</span><br>
<span class="quotelev1">&gt; appears to cause the mx_init error this should never be called as  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; is no mx card on those nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any advice to solve this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<p>Henk,
<br>
<p>Is MX statically compiled into the binary or Open-MPI library?
<br>
<p>Scott
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>Previous message:</strong> <a href="9658.php">Josh Hursey: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
<li><strong>Reply:</strong> <a href="9660.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatiblewith driver version)"</a>
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
