<?
$subject_val = "Re: [OMPI devel] Regarding Connection establishment in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 22 17:33:25 2011" -->
<!-- isoreceived="20110822213325" -->
<!-- sent="Mon, 22 Aug 2011 17:33:19 -0400" -->
<!-- isosent="20110822213319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regarding Connection establishment in OpenMPI" -->
<!-- id="2399C470-7F91-49D4-A463-A8994691ABA7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANePEPK2p5jrk_WBuYGae35ZzTN-V5+5Sty9DHzNuPo4jWXaJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Regarding Connection establishment in OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-22 17:33:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9688.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9686.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Maintenance on the OSL trac (Aug 24, 2011)"</a>
<li><strong>In reply to:</strong> <a href="9685.php">Bhargava Ramu Kavati: "[OMPI devel] Regarding Connection establishment in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 22, 2011, at 9:35 AM, Bhargava Ramu Kavati wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to explore the details of connection establishment in OpenMPI using libibcm/librdmacm.  
</span><br>
<p>Note that the IB community has given up on ibcm.  Our support of it is incomplete; I wouldn't look at it as an example.
<br>
<p><span class="quotelev1">&gt; In the code, I could not find how OpenMPI app is getting service-id/lid of remote node to which it wants to connect.  
</span><br>
<p>In the normal case, we pass that information during MPI_INIT.  It's a global gather / broadcast operation that we refer to as the &quot;modex&quot; (module exchange).  I.e., each openib BTL module instance publishes its address information in the modex and sends it.  Near the end of MPI_INIT, each MPI process receives the modex broadcast and caches it.
<br>
<p>During connection establishment, an MPI process will look in its modex cache to find the connection information for the peer process that it wants to connect to.
<br>
<p><span class="quotelev1">&gt; Also, I did not see any query in the code related to service_record_get from SA.  Can you please desribe what is happening OR Am I missing something here ?
</span><br>
<p>IIRC, we don't currently use the SA because of its serialization and other resource bottlenecks (this is a hand-waving answer; I don't remember the exact reasons for not using the SA, but there were many discussions between the MPI and OpenFabrics communities a long time ago.  The SA issues were not resolved to the MPI community's liking, IIRC, but this was a long time ago, and I don't even work for an IB vendor any more, so I might not be remembering this correctly...).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9688.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9686.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Maintenance on the OSL trac (Aug 24, 2011)"</a>
<li><strong>In reply to:</strong> <a href="9685.php">Bhargava Ramu Kavati: "[OMPI devel] Regarding Connection establishment in OpenMPI"</a>
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
