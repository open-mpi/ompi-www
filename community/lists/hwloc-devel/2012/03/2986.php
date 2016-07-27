<?
$subject_val = "Re: [hwloc-devel] BGQ empty topology with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 22:49:59 2012" -->
<!-- isoreceived="20120323024959" -->
<!-- sent="Thu, 22 Mar 2012 19:49:49 -0700" -->
<!-- isosent="20120323024949" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] BGQ empty topology with MPI" -->
<!-- id="4F6BE4CD.8070302_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F6BE367.20909_at_unimelb.edu.au" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 22:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2987.php">Christopher Samuel: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2985.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2985.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2984.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From the same machine that Dan is using:
<br>
<p>{hargrove_at_cetuslac1 ~}$ mpicc -v
<br>
mpicc for MPICH2 version 1.4.1p1
<br>
[...hairy details omitted...]
<br>
gcc version 4.4.6 (BGQ-dev-120305)
<br>
<p>-Paul
<br>
<p>On 3/22/2012 7:43 PM, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 22/03/12 20:58, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So there's something strange going on when MPI is added. Which MPI
</span><br>
<span class="quotelev2">&gt;&gt; are using? Is this a derivative of MPICH that embeds hwloc? (MPICH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 1.2.1 if I remember correctly)
</span><br>
<span class="quotelev1">&gt; Not sure about BG/Q, but BG/P uses code derived from MPICH2 according
</span><br>
<span class="quotelev1">&gt; to: <a href="http://wiki.bg.anl-external.org/index.php/Main_Page">http://wiki.bg.anl-external.org/index.php/Main_Page</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our BG/P seems to claim it's from MPICH2 1.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; samuel_at_tambo:~&gt;  mpicc -v
</span><br>
<span class="quotelev1">&gt; mpicc for 1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt;      Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;   VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAk9r42cACgkQO2KABBYQAh9mbwCeOYrI5bsk/XOiXFl128BksV2D
</span><br>
<span class="quotelev1">&gt; SR4An1bs09e2lpyYadABbaRIG2dtg7Fr
</span><br>
<span class="quotelev1">&gt; =ucpF
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2987.php">Christopher Samuel: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2985.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<li><strong>In reply to:</strong> <a href="2985.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2984.php">Christopher Samuel: "Re: [hwloc-devel] BGQ empty topology with MPI"</a>
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
