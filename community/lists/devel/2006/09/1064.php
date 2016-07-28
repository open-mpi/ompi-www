<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 12 11:44:25 2006" -->
<!-- isoreceived="20060912154425" -->
<!-- sent="Tue, 12 Sep 2006 17:44:49 +0200" -->
<!-- isosent="20060912154449" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] [IPv6] ORTE layer working" -->
<!-- id="20060912154449.GX6454_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2006-09-12 11:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1065.php">Richard L. Graham: "[OMPI devel] ORTE workshop"</a>
<li><strong>Previous message:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1074.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] ORTE layer working"</a>
<li><strong>Reply:</strong> <a href="1074.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] ORTE layer working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm glad to announce a first working version of IPv4+IPv6 orte.
<br>
<p>It contains:
<br>
<p>&nbsp;&nbsp;&nbsp;- IPv6 interface discovery on Linux
<br>
&nbsp;&nbsp;&nbsp;- a single orte/mca/oob/tcp component
<br>
&nbsp;&nbsp;&nbsp;- a single module (no multiple instances)
<br>
&nbsp;&nbsp;&nbsp;- two listening sockets
<br>
&nbsp;&nbsp;&nbsp;- two connecting sockets
<br>
<p>The listening sockets always stay open, the connecting sockets
<br>
are tried concurrently and if one succeeds to connect (a real
<br>
orte connect, mca_oob_tcp_peer_connected()), the other one
<br>
will be closed.
<br>
<p>Of course, Jeff's ipv6-configure-patch is also included.
<br>
<p>This work is still based on OpenMPI-v1.1, but I'll port
<br>
it to the v1.2 svn checkout, hopefully until the end
<br>
of the week ;) It will then appear in the svn-/tmp/.
<br>
<p>If someone is interested in the code right now, I could
<br>
create a snapshot of my svn working copy and put it
<br>
on the webserver.
<br>
<p><p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Die deutsche Telekom ist eine Organisation f&#252;r Radsport. Das Geschaeft
mit den Telefon-Leitungen betreiben die nur ehrenamtlich nebenbei.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1065.php">Richard L. Graham: "[OMPI devel] ORTE workshop"</a>
<li><strong>Previous message:</strong> <a href="1063.php">Jeff Squyres: "Re: [OMPI devel] portability problem in ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1074.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] ORTE layer working"</a>
<li><strong>Reply:</strong> <a href="1074.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] ORTE layer working"</a>
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
