<?
$subject_val = "Re: [OMPI users] InfiniBand, different OpenFabrics transport types";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 03:51:47 2011" -->
<!-- isoreceived="20110714075147" -->
<!-- sent="Thu, 14 Jul 2011 10:51:38 +0300" -->
<!-- isosent="20110714075138" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand, different OpenFabrics transport types" -->
<!-- id="4E1EA00A.3060801_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1310394195.34168.YahooMailNeo_at_web121807.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 03:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16915.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16958.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16958.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11-Jul-11 5:23 PM, Bill Johnstone wrote:
<br>
<span class="quotelev1">&gt; Hi Yevgeny and list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Yevgeny Kliteynik&lt;kliteyn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll check the MCA_BTL_OPENIB_TRANSPORT_UNKNOWN thing and get back to you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<p>That's interesting...
<br>
This MCA_BTL_OPENIB_TRANSPORT_UNKNOWN thingy implies that openib
<br>
btl didn't get the transport type from verbs at all.
<br>
It works on mthcas because OMPI compares transport type on the
<br>
endpoints and sees that it is the same transport type on all of
<br>
them (never mind the fact that it is an UNKNOWN transport),
<br>
but once you have ConnectX as well, OMPI compares UNKNOWN
<br>
transport to IB and complaints that these are different transports.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt;&gt; One question though, just to make sure we're on the same page: so the jobs
</span><br>
<span class="quotelev2">&gt;&gt; do run OK on
</span><br>
<span class="quotelev2">&gt;&gt; the older HCAs, as long as they run *only* on the older HCAs, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, correct.  They run on the newer hosts using the newer (ConnectX) HCAs as long as the jobs stay on the same (newer) HCA type, and they run on the older HCAs (mthca) so long as the jobs stay on the same HCA type as well.  IOW, as long as the jobs run on homogeneous IB hardware, they run successfully to completion.  We've successfully done stuff like Checkpoint/Restart using the BLCR functionality, and it all seems to work well and in a seemingly robust way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please make sure that the jobs are using only IB with &quot;--mca btl
</span><br>
<span class="quotelev2">&gt;&gt; openib,self&quot; parameters.
</span><br>
<p>While I'm trying to find an old HCA somewhere, could you please
<br>
post here the output of &quot;ibv_devinfo -v&quot; on mthca?
<br>
<p>Thanks.
<br>
<p>-- YK
<br>
<p><span class="quotelev1">&gt; The system is in use right now, so I will have to test this and get back you, but I can also say with certainty that we don't specify --mca parameters unless a user needs to run on Ethernet-only (to avoid the IB errors we're discussing).  Otherwise, it is at the Open MPI 1.5.3 default behavior.  The users are also all using the systemwide Open MPI installation, so this isn't an issue of an erroneous local configuration lying around from multiple parallel installs, or interfering copies of different builds, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other than the mandatory iw_cm kernel module, we are not building/using any iWarp or DAPL/uDAPL functionality.  We are also not running IP on the IB network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16917.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16915.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16958.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Reply:</strong> <a href="16958.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
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
