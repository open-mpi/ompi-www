<?
$subject_val = "[hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 15:20:53 2010" -->
<!-- isoreceived="20100106202053" -->
<!-- sent="Wed, 06 Jan 2010 21:20:48 +0100" -->
<!-- isosent="20100106202048" -->
<!-- name="C&#233;dric Augonnet" -->
<!-- email="cedric.augonnet_at_[hidden]" -->
<!-- subject="[hwloc-devel] &amp;quot;file name is too long&amp;quot; error during make dist with libpci branch" -->
<!-- id="4B44F0A0.4050302_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch<br>
<strong>From:</strong> C&#233;dric Augonnet (<em>cedric.augonnet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-06 15:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
<li><strong>Previous message:</strong> <a href="0557.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1566)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
<li><strong>Reply:</strong> <a href="0559.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
<li><strong>Reply:</strong> <a href="0597.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with	libpci branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>When trying to do a &quot;make dist&quot; from the libpci branch (rev 1568), i get 
<br>
the following error, (note that i don't get this error from the trunk)
<br>
<p>make[1]: Leaving directory `/home/gonnet/These/Libs/hwloc/libpci'
<br>
test -n &quot;&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| find &quot;hwloc-1.0a1r1568&quot; -type d ! -perm -777 -exec chmod 
<br>
a+rwx {} \; -o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! -type d ! -perm -444 -links 1 -exec chmod a+r {} \; -o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! -type d ! -perm -400 -exec chmod a+r {} \; -o \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! -type d ! -perm -444 -exec /bin/sh 
<br>
/home/gonnet/These/Libs/hwloc/libpci/config/install-sh -c -m a+r {} {} \; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| chmod -R a+r &quot;hwloc-1.0a1r1568&quot;
<br>
tardir=hwloc-1.0a1r1568 &amp;&amp; tar --format=ustar -chf - &quot;$tardir&quot; | 
<br>
GZIP=--best gzip -c &gt;hwloc-1.0a1r1568.tar.gz
<br>
tar: 
<br>
hwloc-1.0a1r1568/doc/doxygen-doc/latex/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.tex: 
<br>
file name is too long (cannot be split); not dumped
<br>
tar: 
<br>
hwloc-1.0a1r1568/doc/doxygen-doc/man/man3/hwloc_obj_attr_u_hwloc_bridge_attr_u_hwloc_bridge_downstream_attr_u_hwloc_bridge_downstream_pci_attr_u.3: 
<br>
file name is too long (cannot be split); not dumped
<br>
tar: 
<br>
hwloc-1.0a1r1568/doc/doxygen-doc/html/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.html: 
<br>
file name is too long (cannot be split); not dumped
<br>
tar: Exiting with failure status due to previous errors
<br>
tardir=hwloc-1.0a1r1568 &amp;&amp; tar --format=ustar -chf - &quot;$tardir&quot; | bzip2 
<br>
-9 -c &gt;hwloc-1.0a1r1568.tar.bz2
<br>
tar: 
<br>
hwloc-1.0a1r1568/doc/doxygen-doc/latex/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.tex: 
<br>
file name is too long (cannot be split); not dumped
<br>
tar: 
<br>
hwloc-1.0a1r1568/doc/doxygen-doc/man/man3/hwloc_obj_attr_u_hwloc_bridge_attr_u_hwloc_bridge_downstream_attr_u_hwloc_bridge_downstream_pci_attr_u.3: 
<br>
file name is too long (cannot be split); not dumped
<br>
tar: 
<br>
hwloc-1.0a1r1568/doc/doxygen-doc/html/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.html: 
<br>
file name is too long (cannot be split); not dumped
<br>
tar: Exiting with failure status due to previous errors
<br>
{ test ! -d &quot;hwloc-1.0a1r1568&quot; || { find &quot;hwloc-1.0a1r1568&quot; -type d ! 
<br>
-perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.0a1r1568&quot;; }; }
<br>
<p>Hope this helps,
<br>
<p>C&#233;dric
<br>
<p><pre>
-- 
C&#233;dric AUGONNET
PhD student -- Runtime Team
<a href="http://runtime.bordeaux.inria.fr/augonnet/">http://runtime.bordeaux.inria.fr/augonnet/</a>
INRIA Bordeaux - LaBRI
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
<li><strong>Previous message:</strong> <a href="0557.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1566)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
<li><strong>Reply:</strong> <a href="0559.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
<li><strong>Reply:</strong> <a href="0597.php">Brice Goglin: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with	libpci branch"</a>
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
