<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 17:59:39 2012" -->
<!-- isoreceived="20120201225939" -->
<!-- sent="Thu, 02 Feb 2012 09:59:31 +1100" -->
<!-- isosent="20120201225931" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F29C3D3.4010605_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F293C16.5040906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 17:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2772.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2772.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 02/02/12 00:20, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; This looks very bad. It means something screwed the already very complex
</span><br>
<span class="quotelev1">&gt; sched_setaffinity detection code.
</span><br>
<span class="quotelev1">&gt; Does XLC redefine its own sched_setaffinity functions? Can you find the
</span><br>
<span class="quotelev1">&gt; relevant header file and send it?
</span><br>
<p>Hmm, I can only find some library matches..
<br>
<p>tambo-m:/opt/ibmcmp/vacpp/bg/9.0 # cd
<br>
tambo-m:~ # grep -R setaffinity /opt/ibmcmp/
<br>
Binary file /opt/ibmcmp/lib/bg/bglib/libxlsmp.so.1 matches
<br>
Binary file /opt/ibmcmp/lib/bg/libxlsmp.so.1 matches
<br>
Binary file /opt/ibmcmp/lib/libxlsmp.so.1 matches
<br>
Binary file /opt/ibmcmp/lib64/bg/libxlsmp.so.1 matches
<br>
Binary file /opt/ibmcmp/lib64/libxlsmp.so.1 matches
<br>
Binary file /opt/ibmcmp/xlsmp/bg/1.7/lib/libxlsmp.so matches
<br>
Binary file /opt/ibmcmp/xlsmp/bg/1.7/lib/libxlsmp.a matches
<br>
Binary file /opt/ibmcmp/xlsmp/bg/1.7/bglib/libxlsmp.so matches
<br>
Binary file /opt/ibmcmp/xlsmp/bg/1.7/bglib/libxlsmp.a matches
<br>
Binary file /opt/ibmcmp/xlsmp/bg/1.7/lib64/libxlsmp.so matches
<br>
Binary file /opt/ibmcmp/xlsmp/bg/1.7/lib64/libxlsmp.a matches
<br>
<p><span class="quotelev1">&gt; PGI had similar problems at some point. That's very annoying.
</span><br>
<span class="quotelev1">&gt; This explains why binding tests broke.
</span><br>
<p>:-(
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk8pw9MACgkQO2KABBYQAh+zLACdFol14febAXNyoegolEabfnPh
<br>
yI4Anit7kWSUkyRh2tjAjWGiAqXczLaN
<br>
=h2NV
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2772.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2772.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
