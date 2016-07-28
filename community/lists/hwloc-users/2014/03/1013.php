<?
$subject_val = "Re: [hwloc-users] BGQ question.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 30 20:25:05 2014" -->
<!-- isoreceived="20140331002505" -->
<!-- sent="Mon, 31 Mar 2014 11:25:02 +1100" -->
<!-- isosent="20140331002502" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] BGQ question." -->
<!-- id="5338B5DE.40808_at_unimelb.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="50320452A334BD42A5EC72BAD2145099102DD0BA_at_MBX110.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-users] BGQ question.<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-30 20:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi John,
<br>
<p>On 28/03/14 21:04, Biddiscombe, John A. wrote:
<br>
<p><span class="quotelev1">&gt; Just as a follow up to this thread. I spoke with someone from IBM
</span><br>
<span class="quotelev1">&gt; and they tell me that 2 cores of 4 hardware threads each are hidden
</span><br>
<span class="quotelev1">&gt; from the kernel (how do they do that?) and used for the custom HS4
</span><br>
<span class="quotelev1">&gt; cards we have installed on the IO nodes, which explains why I see
</span><br>
<span class="quotelev1">&gt; only 60 instead of 68 threads.
</span><br>
<p>Interesting, I suspected they were masked off for some reason. What
<br>
does the following say on one of these?
<br>
<p>cat /sys/devices/system/cpu/{kernel_max,present,offline,present}
<br>
<p><span class="quotelev1">&gt; the 2 bgvrnic tasks I see spinning at 100% run on threads 58/59 and
</span><br>
<span class="quotelev1">&gt; service the connection from ION to CN.
</span><br>
<p>Yup, those are the processes that are faking the bgvrnic_0 IB
<br>
interface that is really presenting the 5D torus.
<br>
<p><span class="quotelev1">&gt; It looks as though everything is reporting as expected - as long as
</span><br>
<span class="quotelev1">&gt; I compile hwloc on the ION itself, it seems to be correct.
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; Thanks and sorry for any misunderstanding
</span><br>
<p>No need to apologise, we've learnt something about the BGAS kernel
<br>
patches.
<br>
<p>All the best,
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
Version: GnuPG v1.4.14 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlM4td4ACgkQO2KABBYQAh8iRwCeLsPkiKsFTqGEJzVs4fGsg8nc
<br>
NskAniCSwL2wMiR+ovIkikZolaAPyZ7X
<br>
=gxFB
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1012.php">Brice Goglin: "Re: [hwloc-users] distributing across cores with hwloc-distrib"</a>
<li><strong>In reply to:</strong> <a href="1006.php">Biddiscombe, John A.: "Re: [hwloc-users] BGQ question."</a>
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
