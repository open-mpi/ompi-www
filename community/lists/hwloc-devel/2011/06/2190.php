<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 08:22:50 2011" -->
<!-- isoreceived="20110613122250" -->
<!-- sent="Mon, 13 Jun 2011 08:22:36 -0400" -->
<!-- isosent="20110613122236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="A4FE6216-F954-4FE8-A9C1-0DBB5C9FBD47_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DF5DB2E.4040900_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-13 08:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2191.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2192.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2192.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shouldn't the linker be pulling in these dependent libraries automatically if libpci was built properly?
<br>
<p>E.g., when I look on my RHEL6 system, I see:
<br>
<p>[root_at_savbu-ssd-linux ~]# ldd /lib64/libpci.so.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffcc7ff000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libresolv.so.2 =&gt; /lib64/libresolv.so.2 (0x0000003911c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003910000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000390f800000)
<br>
<p>Which means that the linker will pull in libresolv at run if it wants/needs to, without needing to specify -lresolv on the command line.
<br>
<p>Chris -- does nm on your libpci not show this?
<br>
<p><p><p>On Jun 13, 2011, at 5:41 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 13/06/2011 11:11, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 12/06/11 15:45, Christopher Samuel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I *suspect* it's being pulled in by libpci - here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ nm /usr/lib/libpci.a | grep res_query
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         U __res_query
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Chris,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libpci needs -lz in some cases, maybe it needs more. However, in the
</span><br>
<span class="quotelev1">&gt; case of -lz, we failed to configure if we didn't add -lz to
</span><br>
<span class="quotelev1">&gt; AC_CHECK_LIB. Your configure works fine, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2191.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2189.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2192.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2192.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
