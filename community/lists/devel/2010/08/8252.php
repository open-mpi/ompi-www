<?
$subject_val = "Re: [OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 02:12:34 2010" -->
<!-- isoreceived="20100811061234" -->
<!-- sent="Wed, 11 Aug 2010 08:12:08 +0200" -->
<!-- isosent="20100811061208" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="201008110812.29635.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinN2qOPCu1PPYbBs0W9J6dyNxNZHXB6o1d9uAXb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VampirTrace and MPI_Init_thread()<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 02:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8260.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8260.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Lisandro,
<br>
<p>this problem will be fixed in the next Open MPI release. There was an obsolete 
<br>
preprocessor condition around the MPI_Init_thread wrapper, so the source code 
<br>
could never be compiled :-(
<br>
<p>Thanks for the hint.
<br>
<p>Matthias
<br>
<p>On Wednesday 11 August 2010 05:34:33 Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; On 10 August 2010 22:59, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Lisandro,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the report. I quickly checked the Open MPI source code and the
</span><br>
<span class="quotelev2">&gt; &gt; .so library and both show the existence of both MPI_Init_thread and
</span><br>
<span class="quotelev2">&gt; &gt; PMPI_Init_thread symbols.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 0000000000031b60 T _MPI_Init_thread
</span><br>
<span class="quotelev2">&gt; &gt; 000000000005e7c0 T _PMPI_Init_thread
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I CC'ed the VT folks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK. Now I more confident that the problem is in VT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nm /usr/local/openmpi/1.4.2/lib/libvt.mpi.a | grep MPI_Init
</span><br>
<span class="quotelev1">&gt; 000000ab T MPI_Init
</span><br>
<span class="quotelev1">&gt;          U PMPI_Init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would expect a &quot; xxxx T MPI_Init_thread&quot; line to appear, but it is
</span><br>
<span class="quotelev1">&gt; not the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8252/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8253.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8251.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8260.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8260.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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
