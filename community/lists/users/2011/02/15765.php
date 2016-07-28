<?
$subject_val = "Re: [OMPI users] anybody tried OMPI with gpudirect?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:07:58 2011" -->
<!-- isoreceived="20110228210758" -->
<!-- sent="Mon, 28 Feb 2011 13:02:53 -0800" -->
<!-- isosent="20110228210253" -->
<!-- name="Pak Lui" -->
<!-- email="Pak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anybody tried OMPI with gpudirect?" -->
<!-- id="9FA59C95FFCBB34EA5E42C1A8573784F0367220F_at_mtiexch01.mti.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9FA59C95FFCBB34EA5E42C1A8573784F036721C2_at_mtiexch01.mti.com" -->
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
<strong>From:</strong> Pak Lui (<em>Pak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:02:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15766.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
<li><strong>Previous message:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, since that GPUDirect is not yet officially released, but you may want to contact hpc_at_[hidden] to get the needed info and when the drivers will be released. Thanks!
<br>
<p>- Pak
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Pak Lui
<br>
Sent: Monday, February 28, 2011 11:30 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] anybody tried OMPI with gpudirect?
<br>
<p>Hi Brice, 
<br>
<p>You will need the MLNX_OFED with the GPUDirect support in order to work. I will check to there's a release of it that supports SLES and let you know.
<br>
<p>[pak_at_maia001 ~]$ /sbin/modinfo ib_core
<br>
filename:       /lib/modules/2.6.18-194.nvel5/updates/kernel/drivers/infiniband/core/ib_core.ko
<br>
&lt;snip...&gt;
<br>
parm:           gpu_direct_enable:Enable GPU Direct [default 1] (int)
<br>
parm:           gpu_direct_shares:GPU Direct Calls Number [default 0] (int)
<br>
parm:           gpu_direct_pages:GPU Direct Shared Pages Number [default 0] (int)
<br>
parm:           gpu_direct_fail:GPU Direct Failures Number [default 0] (int)
<br>
<p>Once that IB driver is loaded, you should find that there are additional counters being available from ib_core. And if you are using GPUDirect, the gpu_direct_shares and gpu_direct_pages counters will be incremented. The counters are located at:
<br>
/sys/module/ib_core/parameters/gpu_direct_shares
<br>
/sys/module/ib_core/parameters/gpu_direct_pages
<br>
<p>Regards,
<br>
<p>- Pak
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Monday, February 28, 2011 11:14 AM
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
<p>The kernel looks ok then. But I couldn't find any kernel modules (tried
<br>
nvidia.ko and all ib modules) which references this symbol. So I guess
<br>
my OFED kernel modules aren't ok. I'll check on Mellanox website (we
<br>
have some very recent Mellanox ConnectX QDR boards).
<br>
<p>thanks
<br>
Brice
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15766.php">Eye RCS 51: "[OMPI users] using MPI through Qt"</a>
<li><strong>Previous message:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15764.php">Pak Lui: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
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
