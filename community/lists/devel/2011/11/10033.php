<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 13:52:33 2011" -->
<!-- isoreceived="20111123185233" -->
<!-- sent="Wed, 23 Nov 2011 13:52:11 -0500" -->
<!-- isosent="20111123185211" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="4ECD40DB.5090908_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1322073915.26182.YahooMailNeo_at_web24710.mail.ird.yahoo.com" -->
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
<strong>Date:</strong> 2011-11-23 13:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10032.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10032.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/23/2011 1:45 PM, Lukas Razik wrote:
<br>
<span class="quotelev1">&gt; TERRY DONTJE&lt;terry.dontje_at_[hidden]&gt;  wrote
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you build OMPI as a 32 bit library and see if that works any better?
</span><br>
<span class="quotelev1">&gt; So you mean I shall leave the whole OFED stack as 64 bit and build only openmpi as 32 bit?
</span><br>
I believe the OFED user libraries will need to be 32 bit also or the 32 
<br>
bit MPI libraries will not be able to use them.
<br>
<span class="quotelev1">&gt; How must I configure openmpi that it'll be definitely built as 32bit?
</span><br>
You need to change the CFLAGS, CXXFLAGS, FFLAGS and FCFLAGS in the 
<br>
configure line such that you replace &quot;-m64&quot; with &quot;-m32&quot; or just &quot;-m32&quot; 
<br>
if &quot;-m64&quot; is not there?
<br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10033/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10032.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10032.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10035.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
