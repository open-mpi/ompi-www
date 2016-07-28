<?
$subject_val = "Re: [OMPI devel] VampirTrace and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 23:34:38 2010" -->
<!-- isoreceived="20100811033438" -->
<!-- sent="Wed, 11 Aug 2010 00:34:33 -0300" -->
<!-- isosent="20100811033433" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace and MPI_Init_thread()" -->
<!-- id="AANLkTinN2qOPCu1PPYbBs0W9J6dyNxNZHXB6o1d9uAXb_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3370ECCC-24D3-40B8-857B-1103467BC380_at_eecs.utk.edu" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-10 23:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10 August 2010 22:59, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the report. I quickly checked the Open MPI source code and the .so library and both show the existence of both MPI_Init_thread and PMPI_Init_thread symbols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0000000000031b60 T _MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; 000000000005e7c0 T _PMPI_Init_thread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I CC'ed the VT folks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK. Now I more confident that the problem is in VT:
<br>
<p>nm /usr/local/openmpi/1.4.2/lib/libvt.mpi.a | grep MPI_Init
<br>
000000ab T MPI_Init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U PMPI_Init
<br>
<p>I would expect a &quot; xxxx T MPI_Init_thread&quot; line to appear, but it is
<br>
not the case.
<br>
<p>Many thanks,
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8250.php">George Bosilca: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="8252.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
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
