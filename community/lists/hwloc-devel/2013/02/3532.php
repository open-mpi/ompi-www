<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 19:31:43 2013" -->
<!-- isoreceived="20130212003143" -->
<!-- sent="Tue, 12 Feb 2013 11:31:37 +1100" -->
<!-- isosent="20130212003137" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src" -->
<!-- id="51198D69.4080504_at_unimelb.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5114EE05.70508_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 19:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3533.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>Previous message:</strong> <a href="3531.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3518.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3533.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>Reply:</strong> <a href="3533.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 08/02/13 23:22, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 08/02/2013 12:52, Samuel Thibault a &#239;&#191;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Would it be possible to check some file in /proc or /sys to
</span><br>
<span class="quotelev2">&gt;&gt; identify the machine, to make sure we are not lying?
</span><br>
<span class="quotelev1">&gt; There's no such filesystems on BlueGene compute nodes. The CNK
</span><br>
<span class="quotelev1">&gt; kernel redirects I/O call to the I/O node (which runs Linux).
</span><br>
<p>Actually the latest BG/Q stack V1R2M0 does have a /proc directory.
<br>
<p>However, I suspect you're probably better off calling uname() on it
<br>
and using the sysname[] component.
<br>
<p>[samuel_at_avoca src]$ ./uname -s
<br>
Linux
<br>
[samuel_at_avoca src]$ srun ./uname -s
<br>
CNK
<br>
<p>That's using coreutils 8.2 built for BG/Q (GCC stack, CC=mpicc
<br>
CXX=mpicc LD=mpicc).
<br>
<p>You could get the BG/Q stack version from the release[] part:
<br>
<p>[samuel_at_avoca src]$ srun ./uname -r
<br>
2.6.32-279.14.1.bgq.el6_V1R2M0_3.ppc64
<br>
<p>So that's V1R2M0 with the CNK patched to eFix 3 (we've got 4-6 also
<br>
installed but they don't affect the CNK from the look of it).
<br>
<p>cheers!
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlEZjWkACgkQO2KABBYQAh/7AgCeMhEAmRp5XZXTR3p6IkaIwegD
<br>
TVcAn39kebzujh2J4cmUnXWBdP0NpzBG
<br>
=znDj
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3533.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>Previous message:</strong> <a href="3531.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3518.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3533.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
<li><strong>Reply:</strong> <a href="3533.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5299 - in branches/bgq: config include/private src"</a>
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
