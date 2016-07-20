<?
$subject_val = "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 03:14:57 2014" -->
<!-- isoreceived="20140118081457" -->
<!-- sent="Sat, 18 Jan 2014 09:14:52 +0100" -->
<!-- isosent="20140118081452" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux" -->
<!-- id="20140118081452.GE5845_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E3752E40-3801-4205-9E1F-BD7474C6ABD3_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-18 03:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>In reply to:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Erik Schnetter, le Sat 18 Jan 2014 07:29:37 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; You probably need to set CFLAGS in addition to CXXFLAGS.
</span><br>
<p>Yes, CXXFLAGS is for C++ files.  hwloc doesn't have any :)
<br>
It's CFLAGS which is for C.
<br>
<p>That being said, I wonder the gain you will have: all the probing
<br>
functions will still get pulled in, and for Linux that'll be the most
<br>
part of hwloc. Be sure to explicitly disable PCI and such at configure
<br>
time to at least avoid including these probing functions.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>Previous message:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<li><strong>In reply to:</strong> <a href="0953.php">Erik Schnetter: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0955.php">Brice Goglin: "Re: [hwloc-users] How to build hwloc static to link into a shared lib on Linux"</a>
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
