<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 09:57:23 2011" -->
<!-- isoreceived="20111123145723" -->
<!-- sent="Wed, 23 Nov 2011 14:57:17 +0000 (GMT)" -->
<!-- isosent="20111123145717" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1322060237.81894.YahooMailNeo_at_web24711.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ECCDD66.2070106_at_oracle.com" -->
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
<strong>Date:</strong> 2011-11-23 09:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe in reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 11/22/2011 6:59 PM, Lukas Razik wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Roland Dreier&lt;roland_at_[hidden]&gt;&#160; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Nov 22, 2011 at 3:05 PM, Lukas Razik&lt;linux_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&#160;&#160; #0&#160; 0xfffff8010229ba9c in mca_pml_ob1_send_request_start_copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (sendreq=0xb23200, bml_btl=0xb29050, size=0) at pml_ob1_sendreq.c:551
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&#160;&#160; 551&#160;&#160;&#160;&#160;&#160;&#160;&#160; hdr-&gt;hdr_match.hdr_ctx =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&#160;&#160; (gdb) backtrace
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you can get into gdb here, I guess it would be useful to print the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address of hdr-&gt;hdr_match.hdr_ctx and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid to see which one
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; misaligned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure of the gdb syntax... does it work to just do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; p&amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req
</span><br>
<span class="quotelev3">&gt;&gt;&gt; p&amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh, sorry that I didn't do that before...
</span><br>
<span class="quotelev2">&gt;&gt; The values are:
</span><br>
<span class="quotelev2">&gt;&gt; &amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req&#160; = 
</span><br>
<span class="quotelev1">&gt; (uint16_t *) 0xad7393
</span><br>
<span class="quotelev2">&gt;&gt; &amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid&#160; =&#160; (uint32_t
</span><br>
<span class="quotelev1">&gt; *) 0x201c20
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So hdr_ctx is the bad one...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS:
</span><br>
<span class="quotelev2">&gt;&gt; I always don't know the syntax of gdb - hence I use the nice kdbg. *g*
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png">http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png</a>
</span><br>
<span class="quotelev1">&gt; Can you get me the value of hdr too.&#160; I bet it is an odd value too.
</span><br>
<p><p>You're right! :)
<br>
The value of hdr you can see in the first screenshot I've sent sent you:
<br>
<a href="http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency.png">http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency.png</a>
<br>
<p>It's
<br>
<p>hdr = (mca_pml_ob1_hdr_t*) 0xad7391
<br>
<p><p><p>Regards,
<br>
Lukas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Maybe in reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
