<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 10:44:12 2011" -->
<!-- isoreceived="20111123154412" -->
<!-- sent="Wed, 23 Nov 2011 10:43:48 -0500" -->
<!-- isosent="20111123154348" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="4ECD14B4.5070404_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1322061106.78484.YahooMailNeo_at_web24712.mail.ird.yahoo.com" -->
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
<strong>Date:</strong> 2011-11-23 10:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10029.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10029.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10029.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/23/2011 10:11 AM, Lukas Razik wrote:
<br>
<span class="quotelev1">&gt; TERRY DONTJE&lt;terry.dontje_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you try running the benchmark with coalescing off?  To do that
</span><br>
<span class="quotelev1">&gt;      add the following option to your mpirun line &quot;-mca
</span><br>
<span class="quotelev1">&gt;      btl_openib_use_message_coalescing 0&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # /usr/mpi/gcc/openmpi-1.4.4/bin/mpirun -np 2
</span><br>
<span class="quotelev1">&gt;    --mca btl_openib_use_message_coalescing 0
</span><br>
<span class="quotelev1">&gt;    --mca btl_base_verbose 50
</span><br>
<span class="quotelev1">&gt;    --mca btl_openib_verbose 1
</span><br>
<span class="quotelev1">&gt;    -host cluster1,cluster2
</span><br>
<span class="quotelev1">&gt;      /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And that's the result (which isn't different from the run without &quot;--mca btl_openib_use_message_coalescing 0&quot;):
</span><br>
<span class="quotelev1">&gt; <a href="http://net.razik.de/linux/T5120/openmpi-1.4.4-verbose_no_coalescing.txt">http://net.razik.de/linux/T5120/openmpi-1.4.4-verbose_no_coalescing.txt</a>
</span><br>
Nuts!!!  Ok I am going to have to think about this a little more.  Do 
<br>
you have the ability to configure and remake your ompi install?   I 
<br>
might want to have you add some stuff to help me track this down some 
<br>
more if you can recompile your ompi.
<br>
<p>Note, tomorrow and Friday are holiday's here in the U.S. so I won't 
<br>
probably get to responding to any email until Monday after today.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10028/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10029.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10027.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10029.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10029.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
