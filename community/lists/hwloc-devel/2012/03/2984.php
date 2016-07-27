<?
$subject_val = "Re: [hwloc-devel] BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 22:41:07 2012" -->
<!-- isoreceived="20120323024107" -->
<!-- sent="Fri, 23 Mar 2012 13:41:02 +1100" -->
<!-- isosent="20120323024102" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] BGQ empty topology with MPI" -->
<!-- id="4F6BE2BE.2040403_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADcFuaZtN=4rwbM6B_U+6LpHvRCjtL_0t0kPoYyAGU5Jf5+qiQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] BGQ empty topology with MPI<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 22:41:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2985.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2983.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4420)"</a>
<li><strong>In reply to:</strong> <a href="2969.php">Daniel Ibanez: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2975.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 22/03/12 01:08, Daniel Ibanez wrote:
<br>
<p><span class="quotelev1">&gt; Attached is the stderr and stdout from lstopo compiled as you
</span><br>
<span class="quotelev1">&gt; said.
</span><br>
<p>Interesting, so it's not correctly detecting the topology as BG/Q is
<br>
16 compute cores, each with 4 hardware threads.  Instead it's
<br>
detecting all 64 hardware threads and treating them as cores if I'm
<br>
reading that
<br>
right.
<br>
<p>I was puzzled by the OS info output too, it says:
<br>
<p>Machine#0(Backend=Linux OSName=CNK
<br>
OSRelease=2.6.32-220.el6.bgq110_20120104.ppc64 OSVersion=1
<br>
HostName=R00-ID-J04.i2b.cetus Architecture=) cpuset 0xf...f complete
<br>
0xffffffff,0xffffffff online 0xf...f allowed 0xf...f nodeset 0x0
<br>
completeN 0x0 allowedN 0xf...f
<br>
<p>However, looking at the (open) source code for the CNK [1] (at least
<br>
for BG/P) the uname info seems to be derived from the I/O nodes when
<br>
its running in CIOD mode, so I suspect that's what's happening here
<br>
(looks like a RHEL6 derived kernel from that).
<br>
<p><span class="quotelev1">&gt; I can't run hwloc-gather-topology.sh on the compute nodes since its
</span><br>
<span class="quotelev1">&gt; a script, but I can run it on the front end node.
</span><br>
<p>For those unfamiliar with BlueGene (at least P, and I suspect the same
<br>
is true for Q), this is because the CNK doesn't implement fork() or
<br>
execve(), they're designed to start your code and just keep running it
<br>
until it dies.
<br>
<p>[1] - <a href="http://wiki.bg.anl-external.org/index.php/Cnk">http://wiki.bg.anl-external.org/index.php/Cnk</a>
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
<p>iEYEARECAAYFAk9r4r4ACgkQO2KABBYQAh8zswCfaoTK+PQ/ystZEX23AxK/0007
<br>
OwYAmwYHiVYzjtrCrAJ5L0GNfdbM/Hsr
<br>
=9qJj
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2985.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2983.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4420)"</a>
<li><strong>In reply to:</strong> <a href="2969.php">Daniel Ibanez: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2975.php">Samuel Thibault: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
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
