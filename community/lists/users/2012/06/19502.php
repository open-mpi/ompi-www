<?
$subject_val = "[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 07:45:13 2012" -->
<!-- isoreceived="20120612114513" -->
<!-- sent="Tue, 12 Jun 2012 13:45:01 +0200" -->
<!-- isosent="20120612114501" -->
<!-- name="BOUVIER Benjamin" -->
<!-- email="benjamin.bouvier_at_[hidden]" -->
<!-- subject="[OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6" -->
<!-- id="22226_1339501508_4FD72BC4_22226_13024_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E26_at_THSONEA01CMS07P.one.grp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BA17FB07-A6C0-4AA6-9833-27700FA4A385_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] RE : RE : RE : RE : RE : Bug when mixing sent types	in	version 1.6<br>
<strong>From:</strong> BOUVIER Benjamin (<em>benjamin.bouvier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-12 07:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19503.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19501.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19503.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19503.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types	in	version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've found, in ifconfig, that each node has 2 interfaces, eth0 and eth1. I've run mpiexec with parameter --mca btl_tcp_if_include eth0 (or eth1) to see if there was some issues between nodes. Here are the results :
<br>
- node1,node2 works with eth1, not with eth0.
<br>
- node1,node3 works with eth1, not with eth0.
<br>
- node2,node3 does not work with eth1, but works with eth0.
<br>
- node1,node2,node3 works with eth1 (!), not with eth0.
<br>
These tests even work with activated firewalls.
<br>
<p>Actually, order of nodes is important, as `mpiexec --mca btl_tcp_if_include eth0 --host node1,node2 ./ring_c` does not work, but `mpiexec --mca btl_tcp_if_include eth0 --host node2,node1 ./ring_c` works. Same thing append if I change order when launching the 3 processes (putting node2 at the first position). I find that a little bit disturbing, but I guess the network configuration is guilty.
<br>
<p>Thanks a lot Jeff Squyres, your hints helped me to find the source of the problem. As it must often happen, the problem didn't come from OpenMPI but from network configuration.
<br>
I'll ask my sysadmin to help me configuring the interfaces, so as it to work without defining mca parameter.
<br>
<p>Thank you one more time.
<br>
<pre>
--
Benjamin Bouvier
________________________________________
&gt; What's the output from ifconfig on all nodes?
&gt;
&gt;--
&gt;Jeff Squyres
&gt;jsquyres_at_[hidden]
&gt;For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19503.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19501.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19503.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types	in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19503.php">Jeff Squyres: "Re: [OMPI users] Bug when mixing sent types	in	version 1.6"</a>
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
