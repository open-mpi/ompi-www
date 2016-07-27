<?
$subject_val = "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 16:24:23 2015" -->
<!-- isoreceived="20150306212423" -->
<!-- sent="Fri, 06 Mar 2015 22:24:21 +0100" -->
<!-- isosent="20150306212421" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?" -->
<!-- id="54FA1B05.8040104_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="30516AA1-D238-40D4-9312-FF3352B06EE5_at_anl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 16:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4402.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Previous message:</strong> <a href="4400.php">Balaji, Pavan: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>In reply to:</strong> <a href="4400.php">Balaji, Pavan: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4402.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Sorry but we don't add configure checks without knowing what's causing
<br>
the problem. So far it only looks like a broken libxml install.
<br>
<p>We cannot check for all broken installs in the world. Otherwise one day
<br>
somebody will remove printf from his libc and request a new configure
<br>
check for printf() as well. And another check in case he modified
<br>
printf() to return different values. And another check in case printf()
<br>
was renamed to pruntf(). Endless.
<br>
<p>Please try to understand what caused this broken/partial libxml install
<br>
(do you have logs of the install?).
<br>
<p>By the way, let's make this new hwloc feature official: hwloc can now
<br>
detect broken libxml installs by failing to build :)
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 06/03/2015 21:14, Balaji, Pavan a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a problem with hwloc, which I had reported in the past.  I believe this is not fixed in hwloc yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The suggestion given at that point was to remove and install libxml again, which I did, and things started working correctly again.  But, I agree, hwloc should detect this in configure and abort if there's an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've cc'ed hwloc-devel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 6, 2015, at 2:10 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with the 3.1.4 tarball. Not sure if this is actually a problem
</span><br>
<span class="quotelev2">&gt;&gt; in MPICH or in my system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got the following build failure. Shouldn't configure catch that beforehand?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/topo/hwloc/hwloc
</span><br>
<span class="quotelev2">&gt;&gt; Making all in src
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       traversal.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       distances.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       components.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       bind.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       bitmap.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       pci-common.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       diff.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       misc.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       base64.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-noos.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-synthetic.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-custom.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-xml.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-xml-nolibxml.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-xml-libxml.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-darwin.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       topology-x86.lo
</span><br>
<span class="quotelev2">&gt;&gt; topology-xml-libxml.c:17:10: fatal error: 'libxml/parser.h' file not found
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;libxml/parser.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ^
</span><br>
<span class="quotelev2">&gt;&gt; 1 error generated.
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [topology-xml-libxml.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalcin
</span><br>
<span class="quotelev2">&gt;&gt; ============
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist
</span><br>
<span class="quotelev2">&gt;&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev2">&gt;&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev2">&gt;&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev2">&gt;&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev2">&gt;&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://lists.mpich.org/mailman/listinfo/devel">https://lists.mpich.org/mailman/listinfo/devel</a>
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/03/4400.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/03/4400.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4402.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Previous message:</strong> <a href="4400.php">Balaji, Pavan: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>In reply to:</strong> <a href="4400.php">Balaji, Pavan: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4402.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
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
