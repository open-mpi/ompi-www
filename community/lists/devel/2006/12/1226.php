<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  8 05:12:21 2006" -->
<!-- isoreceived="20061208101221" -->
<!-- sent="Fri, 8 Dec 2006 11:13:19 +0100" -->
<!-- isosent="20061208101319" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Major revision to the RML/OOB" -->
<!-- id="20061208101319.GO7117_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3ACD7B0A-EDD5-48EC-AA89-DE33005EB0BB_at_cisco.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-08 05:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Jens P&#225;ll Hafsteinsson: "[OMPI devel] Open MPI on Windows (native)"</a>
<li><strong>In reply to:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 07, 2006 at 11:12:23AM -0500, Jeff Squyres wrote:
<br>
<p>Hi,
<br>
<p><span class="quotelev2">&gt; &gt; I therefore suggest to move the OPAL changes into the trunk,
</span><br>
<span class="quotelev2">&gt; &gt; also the small hostfile code (lex code for IPv6) and the btl code.
</span><br>
<span class="quotelev1">&gt; Can you describe the changes in opal that were made for IPv6?
</span><br>
<p>These changes are limited to three files: opal/util/if.[ch] and
<br>
the new opal/include/opal/ipv6compat.h. The latter one is only
<br>
required for compatibility with old SUSv2 systems.
<br>
<p>In if.c, I've added IPv6 interface discovery for Linux and Solaris,
<br>
Thomas Peiselt also contributed getifaddrs() support for *BSD/OSX.
<br>
Helper functions were extended to deal with struct sockaddr_storage.
<br>
<p>I've introduced CIDR netmask handling, so the netmask no longer
<br>
holds something like 111111110000 (a.s.o), but simply 8, 16 or
<br>
whatever. There are helper functions to convert from and to CIDR.
<br>
<p>/* convert a netmask (in network byte order) to CIDR notation */
<br>
static int prefix (uint32_t netmask)
<br>
<p>/* convert a CIDR prefixlen to netmask (in network byte order) */
<br>
uint32_t opal_prefix2netmask (uint32_t prefixlen)
<br>
<p>I've also extended the interface struct, still containing if_index,
<br>
but that's just its number in the opal_list. The new field is
<br>
called if_kernel_index, representing the associated kernel interface
<br>
index for this device. My BTL/TCP code also exchanges this new
<br>
information to enable the remote to detect if two or more addresses
<br>
are assigned to the same interface, thus preventing oversubscription
<br>
(multiple connections to the same interface but to difference addresses,
<br>
&nbsp;which is very likely if you have at least one IPv6 address and one
<br>
&nbsp;IPv4 address on the same interface)
<br>
<p>The code in if.c handles both, AF_INET and AF_INET6, so it's no
<br>
problem to use it without using IPv6 somewhere else (i.e. oob/tcp,
<br>
btl/tcp).
<br>
<p>HTH
<br>
<p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Drink wet cement and get really stoned!
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1227.php">krishna chaitanya: "[OMPI devel] clarification regarding optimization of MPI collective calls"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Jens P&#225;ll Hafsteinsson: "[OMPI devel] Open MPI on Windows (native)"</a>
<li><strong>In reply to:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
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
