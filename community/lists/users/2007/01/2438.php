<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 14:19:09 2007" -->
<!-- isoreceived="20070108191909" -->
<!-- sent="Mon, 8 Jan 2007 20:17:01 +0100" -->
<!-- isosent="20070108191701" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] external32 i/o not implemented?" -->
<!-- id="200701082017.02477.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="49195.24.8.167.75.1168025937.squirrel_at_www.cora.nwra.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 14:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2435.php">lund_at_[hidden]: "[OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tom,
<br>
like MPIch2, Open MPI also uses ROMIO as underlying MPI-IO implementation as 
<br>
an mca. ROMIO implements the native datarep.
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>On Friday 05 January 2007 20:38, lund_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    I am attempting to use the 'external32' data representation in order
</span><br>
<span class="quotelev1">&gt; read and write portable data files.  I believe I understand how to do
</span><br>
<span class="quotelev1">&gt; this, but I receive the following run-time error from the
</span><br>
<span class="quotelev1">&gt; mpi_file_set_view call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_FILE_SET_VIEW (line 118): **unsupporteddatarep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I replace 'external32' with 'native' in the mpi_file_set_view call then
</span><br>
<span class="quotelev1">&gt; everything works, but the data file is written in little endian order on
</span><br>
<span class="quotelev1">&gt; my Opteron cluster.  Just for grins I also tried 'internal' but this
</span><br>
<span class="quotelev1">&gt; produces the unsupporteddatarep error as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the 'external32' data type implemented?  Do I need to do something else
</span><br>
<span class="quotelev1">&gt; to access it?  I looked in the FAQs as well as the mailing list archives
</span><br>
<span class="quotelev1">&gt; but I can not seem to find any threads discussing this issue.  I would
</span><br>
<span class="quotelev1">&gt; greatly appreciate any advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached my sample fortran codes (explicit_write.f,
</span><br>
<span class="quotelev1">&gt; explicit_read.f, Makefkile) as well as the config.log, output of
</span><br>
<span class="quotelev1">&gt; ompi_info, and my environment variable settings.  I am running Fedora Core
</span><br>
<span class="quotelev1">&gt; 4 with the 2.6.17-1.2142_FC4smp kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ---Tom
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2439.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2437.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2435.php">lund_at_[hidden]: "[OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2443.php">Tom Lund: "Re: [OMPI users] external32 i/o not implemented?"</a>
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
