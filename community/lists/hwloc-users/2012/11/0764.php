<?
$subject_val = "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 09:24:46 2012" -->
<!-- isoreceived="20121106142446" -->
<!-- sent="Tue, 6 Nov 2012 09:24:38 -0500" -->
<!-- isosent="20121106142438" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups" -->
<!-- id="7B5D9372-5C91-4173-9ECA-7B4E8459DA81_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50986F5B.8000002_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 09:24:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Brice Goglin: "[hwloc-users] hwloc@SC12"</a>
<li><strong>Previous message:</strong> <a href="0763.php">Christopher Samuel: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0763.php">Christopher Samuel: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chis,
<br>
<p>If you assume your Cpusets are correct, and you are not doing any hybrid thread+mpi I found the problem is avoided if you enable -bind-to-core with openmpi 1.6.x  
<br>
<p>We just don't enable binding by default on our setup and thus far no users have been bit by this. 
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Nov 5, 2012, at 9:00 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/11/12 08:57, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok more information (had to build newer hwloc)  My job today only
</span><br>
<span class="quotelev2">&gt;&gt; 2 processes are running at half speed and they indeed are sharing
</span><br>
<span class="quotelev2">&gt;&gt; the same core:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've seen the same occasionally using CentOS5/RHEL5 with jobs running
</span><br>
<span class="quotelev1">&gt; under Torque with cpusets enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Never been able to explain it and the most recent case was someone
</span><br>
<span class="quotelev1">&gt; using a home compiled version of NAMD, the problem disappeared when
</span><br>
<span class="quotelev1">&gt; they started using our provided builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was fixing up the running problem jobs by hand by assigning procs to
</span><br>
<span class="quotelev1">&gt; individual cores on the nodes with cpusets.  :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlCYb1sACgkQO2KABBYQAh/OGACeNL7bow7z26El31zIg16q+tPw
</span><br>
<span class="quotelev1">&gt; toIAnigL5SHhZXM42DGY3M2Ewt6PUNIk
</span><br>
<span class="quotelev1">&gt; =/bNA
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0765.php">Brice Goglin: "[hwloc-users] hwloc@SC12"</a>
<li><strong>Previous message:</strong> <a href="0763.php">Christopher Samuel: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>In reply to:</strong> <a href="0763.php">Christopher Samuel: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
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
