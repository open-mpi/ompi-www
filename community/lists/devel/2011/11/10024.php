<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 07:13:44 2011" -->
<!-- isoreceived="20111123121344" -->
<!-- sent="Wed, 23 Nov 2011 07:13:18 -0500" -->
<!-- isosent="20111123121318" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="4ECCE35E.3090604_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1322006351.6247.YahooMailNeo_at_web24716.mail.ird.yahoo.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-23 07:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/22/2011 6:59 PM, Lukas Razik wrote:
<br>
<span class="quotelev1">&gt; Roland Dreier&lt;roland_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 22, 2011 at 3:05 PM, Lukas Razik&lt;linux_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #0  0xfffff8010229ba9c in mca_pml_ob1_send_request_start_copy
</span><br>
<span class="quotelev2">&gt;&gt; (sendreq=0xb23200, bml_btl=0xb29050, size=0) at pml_ob1_sendreq.c:551
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   551         hdr-&gt;hdr_match.hdr_ctx =
</span><br>
<span class="quotelev2">&gt;&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   (gdb) backtrace
</span><br>
<span class="quotelev2">&gt;&gt; If you can get into gdb here, I guess it would be useful to print the
</span><br>
<span class="quotelev2">&gt;&gt; address of hdr-&gt;hdr_match.hdr_ctx and
</span><br>
<span class="quotelev2">&gt;&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid to see which one is
</span><br>
<span class="quotelev2">&gt;&gt; misaligned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure of the gdb syntax... does it work to just do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; p&amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req
</span><br>
<span class="quotelev2">&gt;&gt; p&amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Oh, sorry that I didn't do that before...
</span><br>
<span class="quotelev1">&gt; The values are:
</span><br>
<span class="quotelev1">&gt; &amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req  =  (uint16_t *) 0xad7393
</span><br>
<span class="quotelev1">&gt; &amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid  =  (uint32_t *) 0x201c20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So hdr_ctx is the bad one...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS:
</span><br>
<span class="quotelev1">&gt; I always don't know the syntax of gdb - hence I use the nice kdbg. *g*
</span><br>
<span class="quotelev1">&gt; <a href="http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png">http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png</a>
</span><br>
Lukas,
<br>
<p>Can you try running the benchmark with coalescing off?  To do that add 
<br>
the following option to your mpirun line &quot;-mca 
<br>
btl_openib_use_message_coalescing 0&quot;.
<br>
<p>thanks,
<br>
<pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10024/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10024/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
