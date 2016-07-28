<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 14:26:01 2011" -->
<!-- isoreceived="20111122192601" -->
<!-- sent="Tue, 22 Nov 2011 19:25:55 +0000 (GMT)" -->
<!-- isosent="20111122192555" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1321989955.84323.YahooMailNeo_at_web24704.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAL1RGDVsj_cZ7qJZAmjAGAPd2a3wvs3-7jELtTN6Z1Vn88Z9OQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-11-22 14:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10020.php">George Bosilca: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roland Dreier &lt;roland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 21, 2011 at 5:51 PM, Lukas Razik &lt;linux_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [cluster1:64027] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev2">&gt;&gt; [cluster1:64027] Failing at address: 0xaa9053
</span><br>
<span class="quotelev2">&gt;&gt; [cluster1:64027] [ 0]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.4.3/lib64/openmpi/mca_pml_ob1.so(+0x62f0)
</span><br>
<span class="quotelev1">&gt; [0xfffff8010209e2f0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like openmpi is doing a misaligned access somewhere...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not sure how to turn this into a real location in the code, Open MPI guys??
</span><br>
<p>Hello Roland,
<br>
<p>one guy (Terry D. Dontje) already answered in the devel_at_[hidden] mailing list:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/11/10011.php">http://www.open-mpi.org/community/lists/devel/2011/11/10011.php</a>
<br>
<p>As I've understood him, he thinks the same. Now I'm trying to do what he wrote and answer soon...
<br>
Thanks for your estimation!
<br>
<p>Best regards,
<br>
Lukas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10020.php">George Bosilca: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="10008.php">Lukas Razik: "[OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
