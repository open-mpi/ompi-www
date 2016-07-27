<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 15:32:06 2011" -->
<!-- isoreceived="20110616193206" -->
<!-- sent="Thu, 16 Jun 2011 15:32:01 -0400" -->
<!-- isosent="20110616193201" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="A9B68D6E-490E-4B33-B1DD-8A995EC54A7A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DF7F798.8020701_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2011-06-16 15:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2210.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
<li><strong>In reply to:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2210.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2210.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2212.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 14, 2011, at 8:06 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Chris -- can you try linking this simple app to see if
</span><br>
<span class="quotelev2">&gt;&gt; it causes the linker error, and further try adding
</span><br>
<span class="quotelev2">&gt;&gt; -lresolv to see if that fixes the error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yup - that does it and the error confirms the symbol
</span><br>
<span class="quotelev1">&gt; that is causing this odd behaviour in libpci.a.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -o conftest conftest.c -lpci
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64/libpci.a(names-net.o): In function `pci_id_net_lookup':
</span><br>
<span class="quotelev1">&gt; (.text+0x1bc): undefined reference to `__res_query'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -o conftest conftest.c -lpci -lresolv
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same behaviour on both RHEL 5.6 and CentOS 5.6 (as you'd
</span><br>
<span class="quotelev1">&gt; hope for!).
</span><br>
<p>Ok, good.  I'll see if I can code this up.
<br>
<p>...done.  Try a nightly trunk tarball &gt;=r3516 (new nightly should be made in about 6 hours).
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, on my RHEL 5 machine (with only libpci.a), both
</span><br>
<span class="quotelev2">&gt;&gt; link commands seem to work (but my libpci.a doesn't
</span><br>
<span class="quotelev2">&gt;&gt; have a __res_query symbol).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, which release of RHEL5 is that ?
</span><br>
<p>[11:47] svbu-mpi:~ % nm /usr/lib/libpci.a | grep res_query
<br>
[11:47] svbu-mpi:~ % nm /usr/lib64/libpci.a | grep res_query
<br>
[11:47] svbu-mpi:~ % cat /etc/issue
<br>
Red Hat Enterprise Linux Server release 5.4 (Tikanga)
<br>
Kernel \r on an \m
<br>
<p>[11:47] svbu-mpi:~ %
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="2210.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2208.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3514"</a>
<li><strong>In reply to:</strong> <a href="2205.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2210.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2210.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2212.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
