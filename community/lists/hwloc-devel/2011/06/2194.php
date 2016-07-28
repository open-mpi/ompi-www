<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 09:01:04 2011" -->
<!-- isoreceived="20110613130104" -->
<!-- sent="Mon, 13 Jun 2011 23:00:55 +1000" -->
<!-- isosent="20110613130055" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4DF60A07.3080401_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="602DEFEE-A7F2-43C4-9C40-47D215DAB2E2_at_cisco.com" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-13 09:00:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2195.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2193.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2193.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2195.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 13/06/11 22:45, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ah, that might explain it, then.
</span><br>
<p>Yeah.. :-(
<br>
<p><span class="quotelev1">&gt; I guess this means we need to add a few configure tests
</span><br>
<span class="quotelev1">&gt; to figure out the dependencies of libpci (if any).  Yuck.
</span><br>
<p>Indeed.
<br>
<p><span class="quotelev1">&gt; Do we have any idea what function in libpci is calling the resolver functionality?
</span><br>
<p>Complete guesswork from nm -l /usr/lib64/libpci.a, this
<br>
is the object module where __res_query() is referenced:
<br>
<p>names-net.o:
<br>
0000000000000000 r .LC0
<br>
000000000000000b r .LC1
<br>
0000000000000072 r .LC10
<br>
0000000000000000 r .LC11
<br>
0000000000000087 r .LC12
<br>
0000000000000030 r .LC13
<br>
0000000000000010 r .LC2
<br>
000000000000001a r .LC3
<br>
000000000000002e r .LC4
<br>
000000000000003a r .LC5
<br>
0000000000000041 r .LC6
<br>
000000000000004d r .LC7
<br>
000000000000005e r .LC8
<br>
0000000000000064 r .LC9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _GLOBAL_OFFSET_TABLE_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __h_errno_location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __memcpy_chk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __res_init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __res_query
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __sprintf_chk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __stack_chk_fail
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __strdup
<br>
0000000000000000 t dns_skip_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_get_param
<br>
0000000000000060 T pci_id_net_lookup
<br>
0000000000000000 b resolver_inited.6042
<br>
<p><p>Now that defines pci_id_net_lookup, and that appears
<br>
to be referenced here:
<br>
<p>names.o:
<br>
0000000000000000 r .LC0
<br>
0000000000000003 r .LC1
<br>
0000000000000028 r .LC10
<br>
000000000000004f r .LC11
<br>
0000000000000054 r .LC12
<br>
000000000000005b r .LC13
<br>
0000000000000062 r .LC14
<br>
000000000000006c r .LC15
<br>
000000000000007b r .LC16
<br>
0000000000000081 r .LC17
<br>
0000000000000086 r .LC18
<br>
000000000000008c r .LC19
<br>
000000000000000e r .LC2
<br>
0000000000000092 r .LC20
<br>
0000000000000098 r .LC21
<br>
000000000000009e r .LC22
<br>
00000000000000a6 r .LC23
<br>
00000000000000b1 r .LC24
<br>
000000000000001a r .LC3
<br>
0000000000000029 r .LC4
<br>
000000000000002f r .LC5
<br>
0000000000000039 r .LC6
<br>
0000000000000000 r .LC7
<br>
0000000000000046 r .LC8
<br>
000000000000004e r .LC9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U _GLOBAL_OFFSET_TABLE_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __snprintf_chk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __sprintf_chk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __stack_chk_fail
<br>
0000000000000160 t format_name
<br>
0000000000000000 t format_name_pair
<br>
0000000000000250 t id_lookup
<br>
0000000000000380 t id_lookup_subsys
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_id_cache_dirty
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_id_cache_load
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_id_insert
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_id_lookup
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_id_net_lookup
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_load_name_list
<br>
0000000000000460 T pci_lookup_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U pci_mfree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U snprintf
<br>
<p><p><p>That defines pci_lookup_name() and that is called from
<br>
hwloc here:
<br>
<p>$ grep -R pci_lookup_name .
<br>
./src/topology-libpci.c:/* starting from pciutils 2.2, pci_lookup_name() takes a variable number
<br>
./src/topology-libpci.c:    resname = pci_lookup_name(pciaccess, name, sizeof(name),
<br>
./src/topology-libpci.c:    resname = pci_lookup_name(pciaccess, name, sizeof(name),
<br>
./src/topology-libpci.c:    resname = pci_lookup_name(pciaccess, name, sizeof(name),
<br>
<p><p>So my guess it's the fact that we only have a static
<br>
library that's causing the linker to pull in all the
<br>
symbols, whether needed or not. :-(
<br>
<p>cheers!
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
<p>iEYEARECAAYFAk32CgcACgkQO2KABBYQAh+0/wCgkb10IWRnNxh5BicSrv6HC0U/
<br>
TIQAn2hmylDYzNx7Z8+oeR//zPtLRP3k
<br>
=vhQT
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2195.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2193.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2193.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2195.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
