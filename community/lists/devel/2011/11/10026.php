<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 10:03:53 2011" -->
<!-- isoreceived="20111123150353" -->
<!-- sent="Wed, 23 Nov 2011 10:03:33 -0500" -->
<!-- isosent="20111123150333" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="4ECD0B45.9040402_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1322060237.81894.YahooMailNeo_at_web24711.mail.ird.yahoo.com" -->
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
<strong>Date:</strong> 2011-11-23 10:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/23/2011 9:57 AM, Lukas Razik wrote:
<br>
<span class="quotelev1">&gt; TERRY DONTJE&lt;terry.dontje_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 11/22/2011 6:59 PM, Lukas Razik wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Roland Dreier&lt;roland_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Nov 22, 2011 at 3:05 PM, Lukas Razik&lt;linux_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     #0  0xfffff8010229ba9c in mca_pml_ob1_send_request_start_copy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (sendreq=0xb23200, bml_btl=0xb29050, size=0) at pml_ob1_sendreq.c:551
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     551        hdr-&gt;hdr_match.hdr_ctx =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     (gdb) backtrace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you can get into gdb here, I guess it would be useful to print the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; address of hdr-&gt;hdr_match.hdr_ctx and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid to see which one
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; misaligned.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not sure of the gdb syntax... does it work to just do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p&amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p&amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, sorry that I didn't do that before...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The values are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;hdr-&gt;hdr_match.hdr_ctx and sendreq-&gt;req_send.req_base.req  =
</span><br>
<span class="quotelev2">&gt;&gt; (uint16_t *) 0xad7393
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid  =  (uint32_t
</span><br>
<span class="quotelev2">&gt;&gt; *) 0x201c20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So hdr_ctx is the bad one...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I always don't know the syntax of gdb - hence I use the nice kdbg. *g*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png">http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency-02.png</a>
</span><br>
<span class="quotelev2">&gt;&gt; Can you get me the value of hdr too.  I bet it is an odd value too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right! :)
</span><br>
<span class="quotelev1">&gt; The value of hdr you can see in the first screenshot I've sent sent you:
</span><br>
<span class="quotelev1">&gt; <a href="http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency.png">http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency.png</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hdr = (mca_pml_ob1_hdr_t*) 0xad7391
</span><br>
<span class="quotelev1">&gt;
</span><br>
Which now leads me to wondering if this is due to the coalescing code.  
<br>
If you can run with coalescing off (as described in my last email) that 
<br>
might be telling.
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10026/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10051.php">Eugene Loh: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
