<?
$subject_val = "Re: [hwloc-devel] 1.1rc4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 20:29:14 2010" -->
<!-- isoreceived="20101216012914" -->
<!-- sent="Thu, 16 Dec 2010 12:29:06 +1100" -->
<!-- isosent="20101216012906" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1rc4 released" -->
<!-- id="4D096B62.8020407_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2BC307B1-7DE5-4D24-B924-94555B665085_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.1rc4 released<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 20:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Previous message:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1695.php">Jeff Squyres: "[hwloc-devel] 1.1rc4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Reply:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 14/12/10 05:42, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Please test!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/hwloc/v1.1/">http://www.open-mpi.org/software/hwloc/v1.1/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>make check fails on our CentOS 5.4 box:
<br>
<p>Saving current system topology to XML...
<br>
Saving current system topology to a tarball...
<br>
Hierarchy gathered in /tmp/tmp.pXNgB29823/save.tar.bz2 and kept in
<br>
/tmp/tmp.PUwJU29842/save/
<br>
Expected topology output stored in /tmp/tmp.pXNgB29823/save.output
<br>
Extracting tarball...
<br>
Saving tarball topology to XML...
<br>
Comparing XML outputs...
<br>
- --- save.xml    2010-12-16 12:25:39.000000000 +1100
<br>
+++ save2.xml   2010-12-16 12:25:42.000000000 +1100
<br>
@@ -3,7 +3,6 @@
<br>
&nbsp;&lt;topology&gt;
<br>
&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot; cpuset=&quot;0x0000ffff&quot;
<br>
complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot;
<br>
allowed_cpuset=&quot;0x0000ffff&quot; nodeset=&quot;0x00000003&quot;
<br>
complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
- -    &lt;info name=&quot;LinuxCgroup&quot; value=&quot;/&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot;
<br>
cpuset=&quot;0x00000f0f&quot; complete_cpuset=&quot;0x00000f0f&quot;
<br>
online_cpuset=&quot;0x00000f0f&quot; allowed_cpuset=&quot;0x00000f0f&quot;
<br>
nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot;
<br>
allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;12679278592&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;0&quot;
<br>
cpuset=&quot;0x00000f0f&quot; complete_cpuset=&quot;0x00000f0f&quot;
<br>
online_cpuset=&quot;0x00000f0f&quot; allowed_cpuset=&quot;0x00000f0f&quot;
<br>
nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot;
<br>
allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000f0f&quot;
<br>
complete_cpuset=&quot;0x00000f0f&quot; online_cpuset=&quot;0x00000f0f&quot;
<br>
allowed_cpuset=&quot;0x00000f0f&quot; nodeset=&quot;0x00000001&quot;
<br>
complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;
<br>
cache_size=&quot;8388608&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot;&gt;
<br>
FAIL: test-gather-topology.sh
<br>
========================================================
<br>
1 of 1 test failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
<p>Passes on RHEL5.5/x86-64, SLES10/PPC and Ubuntu 10.10/x86-64.
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computational Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk0Ja2IACgkQO2KABBYQAh8dMwCffRDOx5ERnDpCer8dHdKpueTf
<br>
3lQAnRlg8G56W7ULR/0m9QPGbCNdOHiD
<br>
=tneb
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Previous message:</strong> <a href="1715.php">Guy Streeter: "Re: [hwloc-devel] Hwloc perl binding"</a>
<li><strong>In reply to:</strong> <a href="1695.php">Jeff Squyres: "[hwloc-devel] 1.1rc4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Reply:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
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
