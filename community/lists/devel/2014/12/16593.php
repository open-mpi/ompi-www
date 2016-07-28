<?
$subject_val = "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 08:25:43 2014" -->
<!-- isoreceived="20141215132543" -->
<!-- sent="Mon, 15 Dec 2014 05:25:42 -0800" -->
<!-- isosent="20141215132542" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found" -->
<!-- id="CAMD57oee04bVgjyaBNPBFXSXbQ367PQEshEQKg5oOPH_WTsUuw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="548EDF29.30708_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 08:25:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16594.php">Ralph Castain: "[OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>In reply to:</strong> <a href="16591.php">Eric Chamberland: "[OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes - it's been fixed in rc4
<br>
<p><p>On Mon, Dec 15, 2014 at 5:16 AM, Eric Chamberland &lt;
<br>
Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I first saw this message using 1.8.4rc3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No loopback interface was found. This can cause problems
</span><br>
<span class="quotelev1">&gt; when we spawn processes as they are likely to be unable to connect
</span><br>
<span class="quotelev1">&gt; back to their host daemon. Sadly, it may take awhile for the connect
</span><br>
<span class="quotelev1">&gt; attempt to fail, so you may experience a significant hang time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may wish to ctrl-c out of your job and activate loopback support
</span><br>
<span class="quotelev1">&gt; on at least one interface before trying again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled it in &quot;debug&quot; mode... is it the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...but I think I do have a loopback on my host:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifconfig -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:25:90:0D:A5:38
</span><br>
<span class="quotelev1">&gt;           inet addr:132.203.7.22  Bcast:132.203.7.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::225:90ff:fe0d:a538/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:49080380 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:67526463 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:35710440484 (34056.1 Mb)  TX bytes:64050625687 (61083.4
</span><br>
<span class="quotelev1">&gt; Mb)
</span><br>
<span class="quotelev1">&gt;           Interrupt:16 Memory:faee0000-faf00000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:25:90:0D:A5:39
</span><br>
<span class="quotelev1">&gt;           BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;           Interrupt:17 Memory:fafe0000-fb000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:3089696 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:3089696 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:8421008033 (8030.8 Mb)  TX bytes:8421008033 (8030.8 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that message erroneous?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/">http://www.open-mpi.org/community/lists/devel/2014/12/</a>
</span><br>
<span class="quotelev1">&gt; 16591.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16594.php">Ralph Castain: "[OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16592.php">Eric Chamberland: "Re: [OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>In reply to:</strong> <a href="16591.php">Eric Chamberland: "[OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
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
