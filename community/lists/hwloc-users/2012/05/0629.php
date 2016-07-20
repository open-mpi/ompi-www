<?
$subject_val = "[hwloc-users] #tgfh (thank God for hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 18 10:42:31 2012" -->
<!-- isoreceived="20120518144231" -->
<!-- sent="Fri, 18 May 2012 10:42:25 -0400" -->
<!-- isosent="20120518144225" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-users] #tgfh (thank God for hwloc)" -->
<!-- id="A18936F9-C2F1-4800-B9DD-F4D5D96F617F_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-users] #tgfh (thank God for hwloc)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-18 10:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0630.php">Anatoly G: "[hwloc-users] hwloc - Build problem."</a>
<li><strong>Previous message:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yesterday, I was installing 2 machines in a physically remote location -- meaning that I did not have access to see or touch the machines.  Although the 2 machines are slightly different models from each other, they both have multiple Ethernet ports: some LOM, and 2 ports on a PCI 10GB Ethernet NIC.
<br>
<p>All the Ethernet ports are live and connected to different networks.
<br>
<p>I was working on setting up the 2 ports on the PCI card.  #tgfh, because hwloc clearly showed me which ports were on a PCI device (by grouping and by vendor ID) and told me exactly what their ethX devices were.  And, by extension, it showed me which ports were LOM (and what their ethX devices were).  See the 2 PDFs attached for what hwloc showed me on each machine.
<br>
<p>This allowed me to go edit the relevant /etc/sysconfig/network-scripts/ifcfg-ethX scripts and be up and running within minutes.
<br>
<p>Yay hwloc!!
<br>
<p>(sorry; I just felt the need to share this story :-) )
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0629/svbu-mpi058.pdf">svbu-mpi058.pdf</a>
</ul>
<!-- attachment="svbu-mpi058.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0629/svbu-mpi059.pdf">svbu-mpi059.pdf</a>
</ul>
<!-- attachment="svbu-mpi059.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0630.php">Anatoly G: "[hwloc-users] hwloc - Build problem."</a>
<li><strong>Previous message:</strong> <a href="0628.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
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
