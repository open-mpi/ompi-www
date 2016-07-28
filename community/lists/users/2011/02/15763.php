<?
$subject_val = "Re: [OMPI users] anybody tried OMPI with gpudirect?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 14:22:56 2011" -->
<!-- isoreceived="20110228192256" -->
<!-- sent="Mon, 28 Feb 2011 11:22:50 -0800" -->
<!-- isosent="20110228192250" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anybody tried OMPI with gpudirect?" -->
<!-- id="C7B0D004DEE0274F958C9523E44E49BA2BA5ECC314_at_HQMAIL03.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D6BF401.5010405_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] anybody tried OMPI with gpudirect?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 14:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Monday, February 28, 2011 2:14 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] anybody tried OMPI with gpudirect? 
<br>
<p>Le 28/02/2011 19:49, Rolf vandeVaart a &#233;crit :
<br>
<span class="quotelev1">&gt; For the GPU Direct to work with Infiniband, you need to get some updated OFED bits from your Infiniband vendor. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In terms of checking the driver updates, you can do a grep on the string get_driver_pages in the file/proc/kallsyms.  If it is there, then the Linux kernel is updated correctly.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The kernel looks ok then. But I couldn't find any kernel modules (tried nvidia.ko and all ib modules) which references this symbol. So I guess my OFED kernel modules aren't ok. I'll check on Mellanox website (we have some very recent Mellanox ConnectX QDR boards).
<br>
<p>thanks
<br>
Brice
<br>
<p>------------------------------
<br>
I have since learned that you can check /sys/module/ib_core/parameters/*  which will list a couple of GPU direct files if the driver is installed correctly and loaded.
<br>
<p>Rolf
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15762.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
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
