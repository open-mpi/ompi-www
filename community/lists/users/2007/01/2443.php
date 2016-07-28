<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 16:32:32 2007" -->
<!-- isoreceived="20070108213232" -->
<!-- sent="Mon, 08 Jan 2007 14:32:14 -0700" -->
<!-- isosent="20070108213214" -->
<!-- name="Tom Lund" -->
<!-- email="lund_at_[hidden]" -->
<!-- subject="Re: [OMPI users] external32 i/o not implemented?" -->
<!-- id="45A2B85E.7050808_at_cora.nwra.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="200701082017.02477.keller_at_hlrs.de" -->
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
<strong>From:</strong> Tom Lund (<em>lund_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 16:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer,
<br>
&nbsp;&nbsp;&nbsp;Thank you for taking time to reply to my querry.  Do I understand 
<br>
correctly that external32 data representation for i/o is not 
<br>
implemented?  I am puzzled since the MPI-2 standard clearly indicates 
<br>
the existence of external32 and has lots of words regarding how nice 
<br>
this feature is for file interoperability.  So do both Open MPI and 
<br>
MPIch2 not adhere to the standard in this regard?  If this is really the 
<br>
case, how difficult is it to define a custom data representation that is 
<br>
32-bit big endian on all platforms?  Do you know of any documentation 
<br>
that explains how to do this?
<br>
&nbsp;&nbsp;&nbsp;Thanks again.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;---Tom
<br>
<p>Rainer Keller wrote:
<br>
<span class="quotelev1">&gt; Hello Tom,
</span><br>
<span class="quotelev1">&gt; like MPIch2, Open MPI also uses ROMIO as underlying MPI-IO implementation as 
</span><br>
<span class="quotelev1">&gt; an mca. ROMIO implements the native datarep.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 05 January 2007 20:38, lund_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;    I am attempting to use the 'external32' data representation in order
</span><br>
<span class="quotelev2">&gt;&gt; read and write portable data files.  I believe I understand how to do
</span><br>
<span class="quotelev2">&gt;&gt; this, but I receive the following run-time error from the
</span><br>
<span class="quotelev2">&gt;&gt; mpi_file_set_view call:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FILE_SET_VIEW (line 118): **unsupporteddatarep
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I replace 'external32' with 'native' in the mpi_file_set_view call then
</span><br>
<span class="quotelev2">&gt;&gt; everything works, but the data file is written in little endian order on
</span><br>
<span class="quotelev2">&gt;&gt; my Opteron cluster.  Just for grins I also tried 'internal' but this
</span><br>
<span class="quotelev2">&gt;&gt; produces the unsupporteddatarep error as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the 'external32' data type implemented?  Do I need to do something else
</span><br>
<span class="quotelev2">&gt;&gt; to access it?  I looked in the FAQs as well as the mailing list archives
</span><br>
<span class="quotelev2">&gt;&gt; but I can not seem to find any threads discussing this issue.  I would
</span><br>
<span class="quotelev2">&gt;&gt; greatly appreciate any advice.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached my sample fortran codes (explicit_write.f,
</span><br>
<span class="quotelev2">&gt;&gt; explicit_read.f, Makefkile) as well as the config.log, output of
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info, and my environment variable settings.  I am running Fedora Core
</span><br>
<span class="quotelev2">&gt;&gt; 4 with the 2.6.17-1.2142_FC4smp kernel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    ---Tom
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
===========================================================
   Thomas S. Lund
   Sr. Research Scientist
   Colorado Research Associates, a division of
   NorthWest Research Associates
   3380 Mitchell Ln.
   Boulder, CO 80301
   (303) 415-9701 X 209 (voice)
   (303) 415-9702       (fax)
   lund_at_[hidden]
===========================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2444.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2442.php">Adrian Knoth: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2438.php">Rainer Keller: "Re: [OMPI users] external32 i/o not implemented?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
<li><strong>Reply:</strong> <a href="2453.php">Robert Latham: "Re: [OMPI users] external32 i/o not implemented?"</a>
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
