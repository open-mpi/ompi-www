<?
$subject_val = "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 11:58:51 2011" -->
<!-- isoreceived="20110824155851" -->
<!-- sent="Wed, 24 Aug 2011 21:28:44 +0530" -->
<!-- isosent="20110824155844" -->
<!-- name="Bhargava Ramu Kavati" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)" -->
<!-- id="CANePEPLisFJNTcwm-UUGYPHCL4DzPs=biXUR7vBEQAQ_hJWPgA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)" -->
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
<strong>From:</strong> Bhargava Ramu Kavati (<em>ramu.kavati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 11:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9691.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9691.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="9691.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9746.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Thank you for your prompt response.  I have a query related to MPI_INIT
<br>
here.  What is the underlying transport mechanism does OpenMPI uses to
<br>
exchange service-id/lid via MPI_INIT, is it TCP/IP socket ?
<br>
<p>Thanks &amp; Regards,
<br>
Ramu
<br>
<p>Message: 2
<br>
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
<span class="quotelev2">&gt; &gt; I am trying to explore the details of connection establishment in OpenMPI
</span><br>
<span class="quotelev1">&gt; using libibcm/librdmacm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the IB community has given up on ibcm.  Our support of it is
</span><br>
<span class="quotelev1">&gt; incomplete; I wouldn't look at it as an example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the code, I could not find how OpenMPI app is getting service-id/lid
</span><br>
<span class="quotelev1">&gt; of remote node to which it wants to connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the normal case, we pass that information during MPI_INIT.  It's a
</span><br>
<span class="quotelev1">&gt; global gather / broadcast operation that we refer to as the &quot;modex&quot; (module
</span><br>
<span class="quotelev1">&gt; exchange).  I.e., each openib BTL module instance publishes its address
</span><br>
<span class="quotelev1">&gt; information in the modex and sends it.  Near the end of MPI_INIT, each MPI
</span><br>
<span class="quotelev1">&gt; process receives the modex broadcast and caches it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During connection establishment, an MPI process will look in its modex
</span><br>
<span class="quotelev1">&gt; cache to find the connection information for the peer process that it wants
</span><br>
<span class="quotelev1">&gt; to connect to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, I did not see any query in the code related to service_record_get
</span><br>
<span class="quotelev1">&gt; from SA.  Can you please desribe what is happening OR Am I missing something
</span><br>
<span class="quotelev1">&gt; here ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, we don't currently use the SA because of its serialization and other
</span><br>
<span class="quotelev1">&gt; resource bottlenecks (this is a hand-waving answer; I don't remember the
</span><br>
<span class="quotelev1">&gt; exact reasons for not using the SA, but there were many discussions between
</span><br>
<span class="quotelev1">&gt; the MPI and OpenFabrics communities a long time ago.  The SA issues were not
</span><br>
<span class="quotelev1">&gt; resolved to the MPI community's liking, IIRC, but this was a long time ago,
</span><br>
<span class="quotelev1">&gt; and I don't even work for an IB vendor any more, so I might not be
</span><br>
<span class="quotelev1">&gt; remembering this correctly...).
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9690/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9691.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="9689.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9691.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="9691.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/09/9746.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
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
