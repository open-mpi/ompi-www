<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 18 13:28:19 2012" -->
<!-- isoreceived="20120718172819" -->
<!-- sent="Wed, 18 Jul 2012 10:28:18 -0700" -->
<!-- isosent="20120718172818" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment" -->
<!-- id="5006F232.30403_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD239286AA_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-18 13:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11303.php">Jeff Squyres: "[OMPI devel] Fwd: Rebooting the CREST VM server machines (lion and tiger)"</a>
<li><strong>Previous message:</strong> <a href="11301.php">Shiqing Fan: "Re: [OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
<li><strong>In reply to:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I put back r26802, modifying nbc_internal.h and nbc.c.  Can you add this 
<br>
to your omnibus v1.7 CMR 3169?  I left the padding/packing alone and 
<br>
simply replaced round-schedule accesses with macros that handle the 
<br>
addressing and use memcpy for data movement.  The former simplifies the 
<br>
pointer manipulation and the latter helps portability.  Specifically, 
<br>
NBC now works on SPARC.
<br>
<p>On 7/16/2012 1:45 PM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; It's unlikely that I will have time to fix this in the short term.  The
</span><br>
<span class="quotelev1">&gt; scheduling code is fairly localized in nbc.c if Oracle has some time to
</span><br>
<span class="quotelev1">&gt; spend looking at these issues.  If not, it might be best to remove the
</span><br>
<span class="quotelev1">&gt; libnbc code from 1.7, as it's unfortunately clear that it's not as ready
</span><br>
<span class="quotelev1">&gt; for integration as we believed and I don't have time to fix the code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/16/12 2:50 PM, &quot;Eugene Loh&quot;&lt;eugene.loh_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The NBC functionality doesn't fare very well on SPARC.  One of the
</span><br>
<span class="quotelev2">&gt;&gt; problems is with data alignment.  An NBC schedule is a number of
</span><br>
<span class="quotelev2">&gt;&gt; variously sized fields laid out contiguously in linear memory  (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; see nbc_internal.h or nbc.c) and words don't have much natural
</span><br>
<span class="quotelev2">&gt;&gt; alignment.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11303.php">Jeff Squyres: "[OMPI devel] Fwd: Rebooting the CREST VM server machines (lion and tiger)"</a>
<li><strong>Previous message:</strong> <a href="11301.php">Shiqing Fan: "Re: [OMPI devel] OpenMPI_v1.6-1_win32.exe contains debug version of library?"</a>
<li><strong>In reply to:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<!-- nextthread="start" -->
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
