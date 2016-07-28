<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 05:49:06 2005" -->
<!-- isoreceived="20050810104906" -->
<!-- sent="Wed, 10 Aug 2005 13:48:36 +0300" -->
<!-- isosent="20050810104836" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  New version of Valgrind: 3.0.0" -->
<!-- id="20050810104836.GO16361_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="165354ae380f64d190885d3d5611192d_at_open-mpi.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-10 05:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0121.php">Jeff Squyres: "New version of Valgrind: 3.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 10, 2005 at 06:36:19AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; George pointed out to me last night that there's a new version of 
</span><br>
<span class="quotelev1">&gt; Valgrind that works on AMD (see <a href="http://www.valgrind.org/">http://www.valgrind.org/</a>):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 3.0.0 is a major overhaul of Valgrind.  The most significant user 
</span><br>
<span class="quotelev1">&gt; visible change is that Valgrind now supports architectures other than 
</span><br>
<span class="quotelev1">&gt; x86.  The new architectures it supports are AMD64 and PPC32, and the 
</span><br>
<span class="quotelev1">&gt; infrastructure is present for other architectures to be added later.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are some important notes about AMD support in the NEWS file -- be 
</span><br>
<span class="quotelev1">&gt; sure to read it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also note the DOE's handiwork in the NEWS file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; - Small changes in control log file naming which make it easier to
</span><br>
<span class="quotelev1">&gt;    use valgrind for debugging MPI-based programs.  The relevant
</span><br>
<span class="quotelev1">&gt;    new flags are --log-file-exactly= and --log-file-qualifier=.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you give an environment variable name to --log-file-qualifier, it 
</span><br>
<span class="quotelev1">&gt; will use the value of that environment variable in the output file 
</span><br>
<span class="quotelev1">&gt; name.  Do we have a suitable environment variable which is globally 
</span><br>
<span class="quotelev1">&gt; available for such a purpose?  (in LAM, we had $LAMRANK, which was your 
</span><br>
<span class="quotelev1">&gt; rank in MPI_COMM_WORLD)
</span><br>
I use $OMPI_MCA_ns_nds_vpid for this. Is this good enough?
<br>
<p><p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0121.php">Jeff Squyres: "New version of Valgrind: 3.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
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
