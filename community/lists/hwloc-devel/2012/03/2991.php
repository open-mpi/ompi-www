<?
$subject_val = "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 25 23:16:11 2012" -->
<!-- isoreceived="20120326031611" -->
<!-- sent="Mon, 26 Mar 2012 14:16:05 +1100" -->
<!-- isosent="20120326031605" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fwd: BGQ empty topology with MPI" -->
<!-- id="4F6FDF75.8030509_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADcFuab==3qB=grs_584aoaM-90Hh78xgG_T3e8LevyP+nCx7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fwd: BGQ empty topology with MPI<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-25 23:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2993.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2993.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 25/03/12 09:04, Daniel Ibanez wrote:
<br>
<p><span class="quotelev1">&gt; Additional printfs confirm that with MPI in the code, 
</span><br>
<span class="quotelev1">&gt; hwloc_accessat succeeds on the various /sys/ directories, but the
</span><br>
<span class="quotelev1">&gt; overall procedure for getting PUs from these fails. Without MPI,
</span><br>
<span class="quotelev1">&gt; access to /sys/ directories fails but the fallback
</span><br>
<span class="quotelev1">&gt; hwloc_setup_pu_level works.
</span><br>
<p>Sounds like your I/O with MPI is getting redirected to the I/O node
<br>
(and hence finding /sys from the Linux kernel there) but when you're
<br>
running without MPI it's trying to open files on the compute node and
<br>
the CNK isn't presenting the /sys directories, causing it to fall back.
<br>
<p>I've run lstopo on our BG/P and I get to see the 4 cores there whether
<br>
it's the stock code or if I add an MPI_Init() to the start.  The
<br>
output from lstopo when built with --enable-debug confirms it's
<br>
reporting kernel and hostname info from the I/O node associated with
<br>
the block:
<br>
<p>Machine#0(Backend=Linux OSName=CNK OSRelease=2.6.16.60-304 OSVersion=1
<br>
HostName=r00-m1-n04.pcf.vlsci.unimelb.edu.au Architecture=BGP) [...]
<br>
<p>It might be interesting to build something like ls with the BG/Q
<br>
compilers to see if you can run it on a compute node to see what /proc
<br>
or /sys look like in each case.
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
<p>iEYEARECAAYFAk9v33UACgkQO2KABBYQAh+S1ACfSypUPtoOFV8fHOObBztuUMGI
<br>
RmwAnRy/Estz8Qi2KzAuQigPJbgtSlD4
<br>
=sdGx
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2992.php">Christopher Samuel: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Previous message:</strong> <a href="2990.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2988.php">Daniel Ibanez: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2993.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
<li><strong>Reply:</strong> <a href="2993.php">Brice Goglin: "Re: [hwloc-devel] Fwd: BGQ empty topology with MPI"</a>
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
