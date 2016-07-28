<?
$subject_val = "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 12:06:35 2011" -->
<!-- isoreceived="20110824160635" -->
<!-- sent="Wed, 24 Aug 2011 12:06:30 -0400" -->
<!-- isosent="20110824160630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)" -->
<!-- id="C730E008-DEE5-4444-B2F2-5AA4FDD9A2C1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANePEPLisFJNTcwm-UUGYPHCL4DzPs=biXUR7vBEQAQ_hJWPgA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 12:06:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9692.php">Jayavant Patil: "[OMPI devel] Communication between Torque and open MPI"</a>
<li><strong>Previous message:</strong> <a href="9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9746.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the moment, our only &quot;OOB&quot; (out of band) module uses TCP sockets.  This can use traditional ethernet or an emulated IP layer, such as IPoIB.
<br>
<p><p>On Aug 24, 2011, at 11:58 AM, Bhargava Ramu Kavati wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; Thank you for your prompt response.  I have a query related to MPI_INIT here.  What is the underlying transport mechanism does OpenMPI uses to exchange service-id/lid via MPI_INIT, is it TCP/IP socket ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; Ramu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 22 Aug 2011 17:33:19 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Regarding Connection establishment in
</span><br>
<span class="quotelev1">&gt;        OpenMPI
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;2399C470-7F91-49D4-A463-A8994691ABA7_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2011, at 9:35 AM, Bhargava Ramu Kavati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to explore the details of connection establishment in OpenMPI using libibcm/librdmacm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the IB community has given up on ibcm.  Our support of it is incomplete; I wouldn't look at it as an example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In the code, I could not find how OpenMPI app is getting service-id/lid of remote node to which it wants to connect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the normal case, we pass that information during MPI_INIT.  It's a global gather / broadcast operation that we refer to as the &quot;modex&quot; (module exchange).  I.e., each openib BTL module instance publishes its address information in the modex and sends it.  Near the end of MPI_INIT, each MPI process receives the modex broadcast and caches it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; During connection establishment, an MPI process will look in its modex cache to find the connection information for the peer process that it wants to connect to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, I did not see any query in the code related to service_record_get from SA.  Can you please desribe what is happening OR Am I missing something here ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IIRC, we don't currently use the SA because of its serialization and other resource bottlenecks (this is a hand-waving answer; I don't remember the exact reasons for not using the SA, but there were many discussions between the MPI and OpenFabrics communities a long time ago.  The SA issues were not resolved to the MPI community's liking, IIRC, but this was a long time ago, and I don't even work for an IB vendor any more, so I might not be remembering this correctly...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="9692.php">Jayavant Patil: "[OMPI devel] Communication between Torque and open MPI"</a>
<li><strong>Previous message:</strong> <a href="9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9746.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
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
