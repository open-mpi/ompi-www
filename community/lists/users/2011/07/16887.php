<?
$subject_val = "Re: [OMPI users] InfiniBand, different OpenFabrics transport types";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 10:23:20 2011" -->
<!-- isoreceived="20110711142320" -->
<!-- sent="Mon, 11 Jul 2011 07:23:15 -0700 (PDT)" -->
<!-- isosent="20110711142315" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand, different OpenFabrics transport types" -->
<!-- id="1310394195.34168.YahooMailNeo_at_web121807.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E194B40.6080404_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand, different OpenFabrics transport types<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 10:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="16886.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>In reply to:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16916.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16916.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Yevgeny and list,
<br>
<p><p><p>----- Original Message -----
<br>
<p><span class="quotelev1">&gt; From: Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
</span><br>
<p><span class="quotelev1">&gt; I'll check the MCA_BTL_OPENIB_TRANSPORT_UNKNOWN thing and get back to you.
</span><br>
<p>Thank you.
<br>
<p><span class="quotelev1">&gt; One question though, just to make sure we're on the same page: so the jobs 
</span><br>
<span class="quotelev1">&gt; do run OK on
</span><br>
<span class="quotelev1">&gt; the older HCAs, as long as they run *only* on the older HCAs, right?
</span><br>
<p>Yes, correct.&#160; They run on the newer hosts using the newer (ConnectX) HCAs as long as the jobs stay on the same (newer) HCA type, and they run on the older HCAs (mthca) so long as the jobs stay on the same HCA type as well.&#160; IOW, as long as the jobs run on homogeneous IB hardware, they run successfully to completion.&#160; We've successfully done stuff like Checkpoint/Restart using the BLCR functionality, and it all seems to work well and in a seemingly robust way.
<br>
<p><span class="quotelev1">&gt; Please make sure that the jobs are using only IB with &quot;--mca btl 
</span><br>
<span class="quotelev1">&gt; openib,self&quot; parameters.
</span><br>
<p>The system is in use right now, so I will have to test this and get back you, but I can also say with certainty that we don't specify --mca parameters unless a user needs to run on Ethernet-only (to avoid the IB errors we're discussing).&#160; Otherwise, it is at the Open MPI 1.5.3 default behavior.&#160; The users are also all using the systemwide Open MPI installation, so this isn't an issue of an erroneous local configuration lying around from multiple parallel installs, or interfering copies of different builds, etc.
<br>
<p>Other than the mandatory iw_cm kernel module, we are not building/using any iWarp or DAPL/uDAPL functionality.&#160; We are also not running IP on the IB network.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="16886.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>In reply to:</strong> <a href="16876.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16916.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16916.php">Yevgeny Kliteynik: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
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
