<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 10:11:52 2011" -->
<!-- isoreceived="20111123151152" -->
<!-- sent="Wed, 23 Nov 2011 15:11:46 +0000 (GMT)" -->
<!-- isosent="20111123151146" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1322061106.78484.YahooMailNeo_at_web24712.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ECCE35E.3090604_at_oracle.com" -->
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
<strong>Date:</strong> 2011-11-23 10:11:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10028.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10028.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10028.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Can you try running the benchmark with coalescing off?&#160; To do that
</span><br>
&#160;&#160;&#160;&#160;add the following option to your mpirun line &quot;-mca
<br>
&#160;&#160;&#160;&#160;btl_openib_use_message_coalescing 0&quot;.
<br>
<p>I've tried this:
<br>
<p># /usr/mpi/gcc/openmpi-1.4.4/bin/mpirun -np 2
<br>
&#160; --mca btl_openib_use_message_coalescing 0
<br>
&#160; --mca btl_base_verbose 50
<br>
&#160; --mca btl_openib_verbose 1
<br>
&#160; -host cluster1,cluster2
<br>
&#160;&#160;&#160; /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency
<br>
<p><p>And that's the result (which isn't different from the run without &quot;--mca btl_openib_use_message_coalescing 0&quot;):
<br>
<a href="http://net.razik.de/linux/T5120/openmpi-1.4.4-verbose_no_coalescing.txt">http://net.razik.de/linux/T5120/openmpi-1.4.4-verbose_no_coalescing.txt</a>
<br>
<p><p><p><span class="quotelev1">&gt;thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I thank you!
<br>
<p><p>Regards,
<br>
Lukas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10028.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10026.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10024.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10028.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10028.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
