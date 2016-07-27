<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 11:41:54 2011" -->
<!-- isoreceived="20110922154154" -->
<!-- sent="Thu, 22 Sep 2011 17:41:49 +0200" -->
<!-- isosent="20110922154149" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="4E7B573D.3010603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="67EA5089-D700-4694-8098-5038ED6681B7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 11:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2431.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2431.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2431.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/09/2011 16:14, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I have to run out ATM so I can't dig into this deeply for a few hours, but with a first take, I'm getting this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in src
</span><br>
<span class="quotelev1">&gt;   CC     topology.lo
</span><br>
<span class="quotelev1">&gt; topology.c: In function 'hwloc_discover':
</span><br>
<span class="quotelev1">&gt; topology.c:1673: error: 'OPAL_HWLOC121hwloc_BACKEND_XML' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; topology.c:1673: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; topology.c:1673: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; topology.c:1674: error: implicit declaration of function 'opal_hwloc121hwloc_look_xml'
</span><br>
<span class="quotelev1">&gt; topology.c: In function 'hwloc_backend_exit':
</span><br>
<span class="quotelev1">&gt; topology.c:2078: error: 'OPAL_HWLOC121hwloc_BACKEND_XML' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; topology.c:2079: error: implicit declaration of function 'opal_hwloc121hwloc_backend_xml_exit'
</span><br>
<span class="quotelev1">&gt; topology.c: In function 'opal_hwloc121hwloc_topology_set_xml':
</span><br>
<span class="quotelev1">&gt; topology.c:2134: error: implicit declaration of function 'opal_hwloc121hwloc_backend_xml_init'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [topology.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use the hwloc prefix stuff in the OMPI embedded build; did something not get prefixed properly in the minimal XML stuff?
</span><br>
<p>This is strange. I just tried building the hwloc tree with prefixing
<br>
enabled, I could not find any problem (except one missing symbol that
<br>
doesn't matter here, see next commits).
<br>
<p>Basically nothing has changed outside of src/topology-xml.c, the above
<br>
symbols existed before, they still exist. I don't understand why their
<br>
renaming would fail now. However, those were in #ifdef HWLOC_HAVE_XML
<br>
before, but this symbol isn't used anymore. Did you rerun autogen ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2431.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2429.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2431.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2431.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
