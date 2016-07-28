<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 24 09:30:59 2006" -->
<!-- isoreceived="20061124143059" -->
<!-- sent="Fri, 24 Nov 2006 15:30:39 +0100" -->
<!-- isosent="20061124143039" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] IPv6 up and working" -->
<!-- id="20061124143039.GD7117_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-24 09:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1194.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Previous message:</strong> <a href="1192.php">Brian W Barrett: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>last week I've rewritten my btl-tcp component to improve several
<br>
aspects, mainly no oversubscription of interfaces.
<br>
I now have:
<br>
<p>&nbsp;&nbsp;&nbsp;- the MCA parameter btl_tcp_disable_family={4|6}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to force the use of a special address family at runtime
<br>
<p>&nbsp;&nbsp;&nbsp;- a working include/exclude list for interfaces (broken with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the old design)
<br>
<p>&nbsp;&nbsp;&nbsp;- the ability to use different address families for different
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directions of communication, so
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,--------------.                       ,---------------.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|  Host A      |  ---- IPv4 --------&gt;  |  Host B       |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|  RFC1918/NAT |                       |  IPv4 public  |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|  IPv6        |  &lt;--- IPv6 --------   |  IPv6         |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`--------------'                       `---------------'
<br>
<p>And probably something more ;) Yesterday, Thomas Peiselt,
<br>
Christian Kauhaus and me (from the Cluster- &amp; Metacomputing Group at the 
<br>
University of Jena) also did a first benchmark and we're proud to come
<br>
up with very good news:
<br>
<p>&nbsp;&nbsp;&nbsp;IPv6 is not much slower than IPv4.
<br>
<p>Latency and bandwidth utilisation behave comparably, resulting
<br>
in 111.17 MB/s with IPv4 versus 109.52 MB/s with IPv6 running IMB 2.3 
<br>
PingPong over 1GigEthernet (in other words: IPv6 delivered 98.5% of 
<br>
the IPv4 bandwidth).
<br>
<p>I expect to confirm this tendency (less than 2% performance loss)
<br>
by detailed benchmarking next week.
<br>
<p>Thomas is going to improve address family selection, so whenever
<br>
it's possible, use IPv4 and by this squeeze out the last 1.5%
<br>
of bandwidth ;) (my implementation tends to prefer IPv6, but
<br>
I guess he'll fix it)
<br>
<p>Christian is very interested in testing. We have automatic builds,
<br>
a cluster with IPv4/IPv6 and a traffic light turning from green
<br>
to red whenever a build/test fails, so he's looking forward
<br>
to provide testing facilities to the OMPI project, but I guess
<br>
he'll raise his questions (mainly with respect to MTT) in a
<br>
separate mail.
<br>
<p><p>I'm going to upload the new btl-tcp component to tmp/adi-ipv6
<br>
within the next days, it's currently only a branch in our local
<br>
subversion which I'd like to merge before.
<br>
<p><p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Mit leerem Kopf nickt es sich leichter.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1194.php">Matt Leininger: "Re: [OMPI devel] [devel-core] OpenMPI and OOM handler"</a>
<li><strong>Previous message:</strong> <a href="1192.php">Brian W Barrett: "Re: [OMPI devel] Building OpenMPI on windows"</a>
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
