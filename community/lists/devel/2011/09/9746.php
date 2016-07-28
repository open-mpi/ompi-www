<?
$subject_val = "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 13:24:32 2011" -->
<!-- isoreceived="20110906172432" -->
<!-- sent="Tue, 6 Sep 2011 22:54:26 +0530" -->
<!-- isosent="20110906172426" -->
<!-- name="Bhargava Ramu Kavati" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)" -->
<!-- id="CANePEP+knGSTQ+Hys=tqAaTzKSmF1NgpQn4EFTEPM=3ZCJygSA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-06 13:24:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9745.php">Jeff Squyres: "[OMPI devel] OMPI v1.4.4rc3 is now up"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9748.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="9748.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
As per our last discussion, MPI_INIT(..) uses TCP socket to exchange its
<br>
service-id/lid with other MPI processes.  I assume this applies irrespective
<br>
of underlying library used to establish connection i.e libibcm or
<br>
librdmacm.  Please correct me if I am wrong.
<br>
<p>Message: 1
<br>
<span class="quotelev1">&gt; Date: Wed, 24 Aug 2011 12:06:30 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Regarding Connection establishment in
</span><br>
<span class="quotelev1">&gt;        OpenMPI (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C730E008-DEE5-4444-B2F2-5AA4FDD9A2C1_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, our only &quot;OOB&quot; (out of band) module uses TCP sockets.  This
</span><br>
<span class="quotelev1">&gt; can use traditional ethernet or an emulated IP layer, such as IPoIB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2011, at 11:58 AM, Bhargava Ramu Kavati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your prompt response.  I have a query related to MPI_INIT
</span><br>
<span class="quotelev1">&gt; here.  What is the underlying transport mechanism does OpenMPI uses to
</span><br>
<span class="quotelev1">&gt; exchange service-id/lid via MPI_INIT, is it TCP/IP socket ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Ramu
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 22 Aug 2011 17:33:19 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] Regarding Connection establishment in
</span><br>
<span class="quotelev2">&gt; &gt;        OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;2399C470-7F91-49D4-A463-A8994691ABA7_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 22, 2011, at 9:35 AM, Bhargava Ramu Kavati wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to explore the details of connection establishment in
</span><br>
<span class="quotelev1">&gt; OpenMPI using libibcm/librdmacm.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that the IB community has given up on ibcm.  Our support of it is
</span><br>
<span class="quotelev1">&gt; incomplete; I wouldn't look at it as an example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In the code, I could not find how OpenMPI app is getting service-id/lid
</span><br>
<span class="quotelev1">&gt; of remote node to which it wants to connect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the normal case, we pass that information during MPI_INIT.  It's a
</span><br>
<span class="quotelev1">&gt; global gather / broadcast operation that we refer to as the &quot;modex&quot; (module
</span><br>
<span class="quotelev1">&gt; exchange).  I.e., each openib BTL module instance publishes its address
</span><br>
<span class="quotelev1">&gt; information in the modex and sends it.  Near the end of MPI_INIT, each MPI
</span><br>
<span class="quotelev1">&gt; process receives the modex broadcast and caches it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; During connection establishment, an MPI process will look in its modex
</span><br>
<span class="quotelev1">&gt; cache to find the connection information for the peer process that it wants
</span><br>
<span class="quotelev1">&gt; to connect to.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, I did not see any query in the code related to service_record_get
</span><br>
<span class="quotelev1">&gt; from SA.  Can you please desribe what is happening OR Am I missing something
</span><br>
<span class="quotelev1">&gt; here ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IIRC, we don't currently use the SA because of its serialization and
</span><br>
<span class="quotelev1">&gt; other resource bottlenecks (this is a hand-waving answer; I don't remember
</span><br>
<span class="quotelev1">&gt; the exact reasons for not using the SA, but there were many discussions
</span><br>
<span class="quotelev1">&gt; between the MPI and OpenFabrics communities a long time ago.  The SA issues
</span><br>
<span class="quotelev1">&gt; were not resolved to the MPI community's liking, IIRC, but this was a long
</span><br>
<span class="quotelev1">&gt; time ago, and I don't even work for an IB vendor any more, so I might not be
</span><br>
<span class="quotelev1">&gt; remembering this correctly...).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9747.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9745.php">Jeff Squyres: "[OMPI devel] OMPI v1.4.4rc3 is now up"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9690.php">Bhargava Ramu Kavati: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9748.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="9748.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
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
