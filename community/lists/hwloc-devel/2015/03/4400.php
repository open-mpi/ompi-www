<?
$subject_val = "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 15:14:47 2015" -->
<!-- isoreceived="20150306201447" -->
<!-- sent="Fri, 6 Mar 2015 20:14:47 +0000" -->
<!-- isosent="20150306201447" -->
<!-- name="Balaji, Pavan" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?" -->
<!-- id="30516AA1-D238-40D4-9312-FF3352B06EE5_at_anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEcYPwCBm8dB549inRjodBUeuHQiRmTwL+6gvmz6EymDwPJcRA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?<br>
<strong>From:</strong> Balaji, Pavan (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 15:14:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Previous message:</strong> <a href="4399.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.1-12-g78de3ee)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Reply:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Maybe reply:</strong> <a href="4402.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>

<br>
This is a problem with hwloc, which I had reported in the past.  I believe this is not fixed in hwloc yet.
<br>

<br>
The suggestion given at that point was to remove and install libxml again, which I did, and things started working correctly again.  But, I agree, hwloc should detect this in configure and abort if there's an issue.
<br>

<br>
I've cc'ed hwloc-devel.
<br>

<br>
&nbsp;&nbsp;-- Pavan
<br>

<br>
<span class="quotelev1">&gt; On Mar 6, 2015, at 2:10 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with the 3.1.4 tarball. Not sure if this is actually a problem
</span><br>
<span class="quotelev1">&gt; in MPICH or in my system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the following build failure. Shouldn't configure catch that beforehand?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in tools/topo/hwloc/hwloc
</span><br>
<span class="quotelev1">&gt; Making all in src
</span><br>
<span class="quotelev1">&gt;  CC       topology.lo
</span><br>
<span class="quotelev1">&gt;  CC       traversal.lo
</span><br>
<span class="quotelev1">&gt;  CC       distances.lo
</span><br>
<span class="quotelev1">&gt;  CC       components.lo
</span><br>
<span class="quotelev1">&gt;  CC       bind.lo
</span><br>
<span class="quotelev1">&gt;  CC       bitmap.lo
</span><br>
<span class="quotelev1">&gt;  CC       pci-common.lo
</span><br>
<span class="quotelev1">&gt;  CC       diff.lo
</span><br>
<span class="quotelev1">&gt;  CC       misc.lo
</span><br>
<span class="quotelev1">&gt;  CC       base64.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-noos.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-synthetic.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-custom.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-xml.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-xml-nolibxml.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-xml-libxml.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-darwin.lo
</span><br>
<span class="quotelev1">&gt;  CC       topology-x86.lo
</span><br>
<span class="quotelev1">&gt; topology-xml-libxml.c:17:10: fatal error: 'libxml/parser.h' file not found
</span><br>
<span class="quotelev1">&gt; #include &lt;libxml/parser.h&gt;
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; 1 error generated.
</span><br>
<span class="quotelev1">&gt; make[4]: *** [topology-xml-libxml.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev1">&gt; <a href="https://lists.mpich.org/mailman/listinfo/devel">https://lists.mpich.org/mailman/listinfo/devel</a>
</span><br>

<br>
--
<br>
Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
<br>
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Previous message:</strong> <a href="4399.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.1-12-g78de3ee)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Reply:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Maybe reply:</strong> <a href="4402.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
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
