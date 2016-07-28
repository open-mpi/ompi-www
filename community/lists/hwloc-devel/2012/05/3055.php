<?
$subject_val = "Re: [hwloc-devel] hwloc/windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 08:40:29 2012" -->
<!-- isoreceived="20120501124029" -->
<!-- sent="Tue, 01 May 2012 14:40:12 +0200" -->
<!-- isosent="20120501124012" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc/windows" -->
<!-- id="4F9FD9AC.7030005_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="071901cd2629$724595d0$56d0c170$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc/windows<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 08:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3056.php">Jeff Squyres: "[hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Previous message:</strong> <a href="3054.php">Brice Goglin: "[hwloc-devel] win64 support for &gt;32 processors OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>Maybe reply:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks _very_ much Hartmut for all the testing.
<br>
The 32bits output looks broken as expected. Anything containing a bit &gt;=
<br>
32 is invalid. That's why no core &gt;= 32 appears, and no
<br>
socket/numanode/cache containing a core &gt;= 32 appears.
<br>
The warning means that windows gave us a bitmask that conflicts with
<br>
bitmask of other objects. It confirms that windows report wrong
<br>
affinities. And it's a good way for us to detect misbehaving operating
<br>
systems.
<br>
I don't see any obvious way to workaround this problem. I archives all
<br>
this in the bug tracker, just in case we ever find a solution. Hopefully
<br>
win32 machines with more than 32 cores are very rare.
<br>
Thanks again
<br>
Brice
<br>
<p><p><p><p>Le 29/04/2012 18:59, Hartmut Kaiser a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see attached the output for 'lstopo-text.exe --of console' (32 and 64
</span><br>
<span class="quotelev1">&gt; bit builds, stdout and stderr). The 64 bit build seems to work fine now. The
</span><br>
<span class="quotelev1">&gt; 32 bit build produces the (almost) correct output for the first 32 cores,
</span><br>
<span class="quotelev1">&gt; which is probably all we can expect to get, but stderr still shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 701
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards Hartmut
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; <a href="http://boost-spirit.com">http://boost-spirit.com</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3056.php">Jeff Squyres: "[hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Previous message:</strong> <a href="3054.php">Brice Goglin: "[hwloc-devel] win64 support for &gt;32 processors OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>Maybe reply:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
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
