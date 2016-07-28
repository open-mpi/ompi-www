<?
$subject_val = "[hwloc-users] hwloc v1.2.1rc1 test on AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 03:35:41 2011" -->
<!-- isoreceived="20110803073541" -->
<!-- sent="Wed, 03 Aug 2011 09:35:31 +0200" -->
<!-- isosent="20110803073531" -->
<!-- name="Hendryk Bockelmann" -->
<!-- email="bockelmann_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc v1.2.1rc1 test on AIX" -->
<!-- id="4E38FA43.5080302_at_dkrz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110802085641.GA25544_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc v1.2.1rc1 test on AIX<br>
<strong>From:</strong> Hendryk Bockelmann (<em>bockelmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 03:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0360.php">Gabriele Fatigati: "[hwloc-users] Return value hwloc functions"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>In reply to:</strong> <a href="0352.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Brice Goglin: "Re: [hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
<li><strong>Reply:</strong> <a href="0361.php">Brice Goglin: "Re: [hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Samuel,
<br>
<p>installation of hwloc-1.2.1rc1r3571.tar.gz was no problem on AIX6.1
<br>
Report of lstopo for one POWER6 node given:
<br>
<p>Machine + L1 L#0 (64KB)
<br>
&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 L#0 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (4096KB) + L1 L#0 (64KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (4096KB) + L1 L#1 (64KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1 L#1 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (4096KB) + L1 L#2 (64KB) + Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (4096KB) + L1 L#3 (64KB) + Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#7)
<br>
...
<br>
<p>There seems to be two little failures:
<br>
i/ each core has 128kB L1-cache (64kB data and 64kB instruction)
<br>
ii/ the shared L3-cache of one POWER6 chip, i.e. of two cores, is 32MB - 
<br>
here it is shown as &quot;L1 L#0 (64KB)&quot;
<br>
<p>For the tests I get the conclusion:
<br>
All 24 tests passed
<br>
<p>please find the attached log of &quot;make check-TESTS&quot;.
<br>
<p>On 02/08/11 10:56, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hendryk Bockelmann, le Tue 02 Aug 2011 10:54:54 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I will test hwloc-1.2.1rc1r3567.tar.gz in the next days on our POWER6
</span><br>
<span class="quotelev2">&gt;&gt; cluster running AIX6.1 and report the results to you resp. to the list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe rather wait for next nightly snapshot, as I've just fixed a bug
</span><br>
<span class="quotelev1">&gt; with xml test which will probably hit you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0359/make_check_tests.log">make_check_tests.log</a>
</ul>
<!-- attachment="make_check_tests.log" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0359/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0360.php">Gabriele Fatigati: "[hwloc-users] Return value hwloc functions"</a>
<li><strong>Previous message:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>In reply to:</strong> <a href="0352.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0361.php">Brice Goglin: "Re: [hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
<li><strong>Reply:</strong> <a href="0361.php">Brice Goglin: "Re: [hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
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
