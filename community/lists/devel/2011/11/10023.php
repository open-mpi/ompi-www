<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 18:59:17 2011" -->
<!-- isoreceived="20111122235917" -->
<!-- sent="Tue, 22 Nov 2011 23:59:11 +0000 (GMT)" -->
<!-- isosent="20111122235911" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1322006351.6247.YahooMailNeo_at_web24716.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL1RGDVYFbvy8_NpTiOi5w3T25X0Z+26qHZ4dpnfRefhzuaBew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 18:59:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe in reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roland Dreier &lt;roland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Nov 22, 2011 at 3:05 PM, Lukas Razik &lt;linux_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  #0&#160; 0xfffff8010229ba9c in mca_pml_ob1_send_request_start_copy 
</span><br>
<span class="quotelev1">&gt; (sendreq=0xb23200, bml_btl=0xb29050, size=0) at pml_ob1_sendreq.c:551
</span><br>
<span class="quotelev2">&gt;&gt;  551&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; hdr-&gt;hdr_match.hdr_ctx = 
</span><br>
<span class="quotelev1">&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid;
</span><br>
<span class="quotelev2">&gt;&gt;  (gdb) backtrace
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can get into gdb here, I guess it would be useful to print the
</span><br>
<span class="quotelev1">&gt; address of hdr-&gt;hdr_match.hdr_ctx and
</span><br>
<span class="quotelev1">&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid to see which one is
</span><br>
<span class="quotelev1">&gt; misaligned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure of the gdb syntax... does it work to just do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p &amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req
</span><br>
<span class="quotelev1">&gt; p &amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Oh, sorry that I didn't do that before...
<br>
The values are:
<br>
&amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req&#160; =&#160; (uint16_t *) 0xad7393
<br>
&amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid&#160; =&#160; (uint32_t *) 0x201c20
<br>
<p>So hdr_ctx is the bad one...
<br>
<p>Regards,
<br>
Lukas
<br>
<p><p>PS:
<br>
I always don't know the syntax of gdb - hence I use the nice kdbg. *g*
<br>
<a href="http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png">http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe in reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
