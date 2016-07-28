<?
$subject_val = "Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with	libpci branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 05:02:25 2010" -->
<!-- isoreceived="20100112100225" -->
<!-- sent="Tue, 12 Jan 2010 11:02:20 +0100" -->
<!-- isosent="20100112100220" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] &amp;quot;file name is too long&amp;quot; error during make dist with	libpci branch" -->
<!-- id="4B4C48AC.7050101_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B44F0A0.4050302_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] &quot;file name is too long&quot; error during make dist with	libpci branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 05:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1601)"</a>
<li><strong>Previous message:</strong> <a href="0596.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1595)"</a>
<li><strong>In reply to:</strong> <a href="0558.php">C&#233;dric Augonnet: "[hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've committed the fixes to trunk. Visible changes include: no latex
<br>
files in the tarball anymore, and shorter names for html pages. Cedric's
<br>
warnings were only in the libpci branch, they are gone now, but I won't
<br>
commit the update of the branch before later today in case somebody
<br>
wants to complain.
<br>
<p>Brice
<br>
<p><p><p>C&#233;dric Augonnet wrote:
<br>
<span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When trying to do a &quot;make dist&quot; from the libpci branch (rev 1568), i
</span><br>
<span class="quotelev1">&gt; get the following error, (note that i don't get this error from the
</span><br>
<span class="quotelev1">&gt; trunk)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/gonnet/These/Libs/hwloc/libpci'
</span><br>
<span class="quotelev1">&gt; test -n &quot;&quot; \
</span><br>
<span class="quotelev1">&gt;        || find &quot;hwloc-1.0a1r1568&quot; -type d ! -perm -777 -exec chmod
</span><br>
<span class="quotelev1">&gt; a+rwx {} \; -o \
</span><br>
<span class="quotelev1">&gt;          ! -type d ! -perm -444 -links 1 -exec chmod a+r {} \; -o \
</span><br>
<span class="quotelev1">&gt;          ! -type d ! -perm -400 -exec chmod a+r {} \; -o \
</span><br>
<span class="quotelev1">&gt;          ! -type d ! -perm -444 -exec /bin/sh
</span><br>
<span class="quotelev1">&gt; /home/gonnet/These/Libs/hwloc/libpci/config/install-sh -c -m a+r {} {}
</span><br>
<span class="quotelev1">&gt; \; \
</span><br>
<span class="quotelev1">&gt;        || chmod -R a+r &quot;hwloc-1.0a1r1568&quot;
</span><br>
<span class="quotelev1">&gt; tardir=hwloc-1.0a1r1568 &amp;&amp; tar --format=ustar -chf - &quot;$tardir&quot; |
</span><br>
<span class="quotelev1">&gt; GZIP=--best gzip -c &gt;hwloc-1.0a1r1568.tar.gz
</span><br>
<span class="quotelev1">&gt; tar:
</span><br>
<span class="quotelev1">&gt; hwloc-1.0a1r1568/doc/doxygen-doc/latex/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.tex:
</span><br>
<span class="quotelev1">&gt; file name is too long (cannot be split); not dumped
</span><br>
<span class="quotelev1">&gt; tar:
</span><br>
<span class="quotelev1">&gt; hwloc-1.0a1r1568/doc/doxygen-doc/man/man3/hwloc_obj_attr_u_hwloc_bridge_attr_u_hwloc_bridge_downstream_attr_u_hwloc_bridge_downstream_pci_attr_u.3:
</span><br>
<span class="quotelev1">&gt; file name is too long (cannot be split); not dumped
</span><br>
<span class="quotelev1">&gt; tar:
</span><br>
<span class="quotelev1">&gt; hwloc-1.0a1r1568/doc/doxygen-doc/html/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.html:
</span><br>
<span class="quotelev1">&gt; file name is too long (cannot be split); not dumped
</span><br>
<span class="quotelev1">&gt; tar: Exiting with failure status due to previous errors
</span><br>
<span class="quotelev1">&gt; tardir=hwloc-1.0a1r1568 &amp;&amp; tar --format=ustar -chf - &quot;$tardir&quot; | bzip2
</span><br>
<span class="quotelev1">&gt; -9 -c &gt;hwloc-1.0a1r1568.tar.bz2
</span><br>
<span class="quotelev1">&gt; tar:
</span><br>
<span class="quotelev1">&gt; hwloc-1.0a1r1568/doc/doxygen-doc/latex/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.tex:
</span><br>
<span class="quotelev1">&gt; file name is too long (cannot be split); not dumped
</span><br>
<span class="quotelev1">&gt; tar:
</span><br>
<span class="quotelev1">&gt; hwloc-1.0a1r1568/doc/doxygen-doc/man/man3/hwloc_obj_attr_u_hwloc_bridge_attr_u_hwloc_bridge_downstream_attr_u_hwloc_bridge_downstream_pci_attr_u.3:
</span><br>
<span class="quotelev1">&gt; file name is too long (cannot be split); not dumped
</span><br>
<span class="quotelev1">&gt; tar:
</span><br>
<span class="quotelev1">&gt; hwloc-1.0a1r1568/doc/doxygen-doc/html/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.html:
</span><br>
<span class="quotelev1">&gt; file name is too long (cannot be split); not dumped
</span><br>
<span class="quotelev1">&gt; tar: Exiting with failure status due to previous errors
</span><br>
<span class="quotelev1">&gt; { test ! -d &quot;hwloc-1.0a1r1568&quot; || { find &quot;hwloc-1.0a1r1568&quot; -type d !
</span><br>
<span class="quotelev1">&gt; -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.0a1r1568&quot;; }; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C&#233;dric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1601)"</a>
<li><strong>Previous message:</strong> <a href="0596.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1595)"</a>
<li><strong>In reply to:</strong> <a href="0558.php">C&#233;dric Augonnet: "[hwloc-devel] &quot;file name is too long&quot; error during make dist with libpci branch"</a>
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
