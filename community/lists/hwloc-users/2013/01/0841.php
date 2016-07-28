<?
$subject_val = "[hwloc-users] Hwloc and Electric Fence (libefence).";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 11:46:46 2013" -->
<!-- isoreceived="20130129164646" -->
<!-- sent="Tue, 29 Jan 2013 17:46:33 +0100 (CET)" -->
<!-- isosent="20130129164633" -->
<!-- name="cessenat_at_[hidden]" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="[hwloc-users] Hwloc and Electric Fence (libefence)." -->
<!-- id="154563801.265452270.1359477993979.JavaMail.root_at_zimbra33-e6.priv.proxad.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1460210973.265415765.1359477350413.JavaMail.root_at_zimbra33-e6.priv.proxad.net" -->
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
<strong>Subject:</strong> [hwloc-users] Hwloc and Electric Fence (libefence).<br>
<strong>From:</strong> <a href="mailto:cessenat_at_[hidden]?Subject=Re:%20[hwloc-users]%20Hwloc%20and%20Electric%20Fence%20(libefence)."><em>cessenat_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-01-29 11:46:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0842.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>Previous message:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0842.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>Reply:</strong> <a href="0842.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I tried to load Electric Fence (libefence) before calling hwloc functions and I got:
<br>
&lt;&lt;
<br>
LD_PRELOAD=/usr/lib64/libefence.so lstopo
<br>
<p>&nbsp;&nbsp;Electric Fence 2.2.0 Copyright (C) 1987-1999 Bruce Perens &lt;bruce_at_[hidden]&gt;
<br>
<p>ElectricFence Aborting: Allocating 0 bytes, probably a bug.
<br>
Illegal instruction
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
This occurs when calling hwloc_topology_load,
<br>
whatever the release number of hwloc including 1.6.1, 
<br>
on different linux systems.
<br>
<p>Is this a known problem which could be worked around ?
<br>
I needed electric fence to detect memory errors in
<br>
my code, so for the moment I had to unplug hwloc...
<br>
<p>Thanks a lot,
<br>
<p>Olivier Cessenat.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0842.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>Previous message:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0842.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
<li><strong>Reply:</strong> <a href="0842.php">Samuel Thibault: "Re: [hwloc-users] Hwloc and Electric Fence (libefence)."</a>
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
