<?
$subject_val = "[OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 08:16:47 2014" -->
<!-- isoreceived="20141215131647" -->
<!-- sent="Mon, 15 Dec 2014 08:16:25 -0500" -->
<!-- isosent="20141215131625" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found" -->
<!-- id="548EDF29.30708_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 08:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Previous message:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Reply:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Reply:</strong> <a href="16593.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I first saw this message using 1.8.4rc3:
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: No loopback interface was found. This can cause problems
<br>
when we spawn processes as they are likely to be unable to connect
<br>
back to their host daemon. Sadly, it may take awhile for the connect
<br>
attempt to fail, so you may experience a significant hang time.
<br>
<p>You may wish to ctrl-c out of your job and activate loopback support
<br>
on at least one interface before trying again.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>I have compiled it in &quot;debug&quot; mode... is it the problem?
<br>
<p>...but I think I do have a loopback on my host:
<br>
<p>ifconfig -a
<br>
<p>eth0      Link encap:Ethernet  HWaddr 00:25:90:0D:A5:38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:132.203.7.22  Bcast:132.203.7.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::225:90ff:fe0d:a538/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:49080380 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:67526463 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:35710440484 (34056.1 Mb)  TX bytes:64050625687 
<br>
(61083.4 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:16 Memory:faee0000-faf00000
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:25:90:0D:A5:39
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:17 Memory:fafe0000-fb000000
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:3089696 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:3089696 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:8421008033 (8030.8 Mb)  TX bytes:8421008033 (8030.8 Mb)
<br>
<p>Is that message erroneous?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Previous message:</strong> <a href="16590.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Reply:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Reply:</strong> <a href="16593.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
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
