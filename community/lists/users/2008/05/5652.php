<?
$subject_val = "[OMPI users] [SPAM:### 81%] openmpi multi-lib torque support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 05:24:30 2008" -->
<!-- isoreceived="20080512092430" -->
<!-- sent="Mon, 12 May 2008 12:24:17 +0300" -->
<!-- isosent="20080512092417" -->
<!-- name="Karolis Eigelis" -->
<!-- email="keigelis_at_[hidden]" -->
<!-- subject="[OMPI users] [SPAM:### 81%] openmpi multi-lib torque support" -->
<!-- id="DBF70CFF-C6E3-4809-B583-6436024F6285_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] [SPAM:### 81%] openmpi multi-lib torque support<br>
<strong>From:</strong> Karolis Eigelis (<em>keigelis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 05:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5653.php">Juan Carlos Larroya Huguet: "[OMPI users] Help configuring openmpi"</a>
<li><strong>Previous message:</strong> <a href="5651.php">Mukesh K Srivastava: "Re: [OMPI users] My openmpi compiler doesnt work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
<li><strong>Reply:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ello,
<br>
I have Rocks 4.3 installed. Frontend 32bit and nodes with 64bit.
<br>
Traying to run openmpi with torque support using multilib.
<br>
<p>/usr/local shared among nodes
<br>
<p>CONFIGURING and INSTALL
<br>
<p>[from frontend 32bit]
<br>
./configure --with-tm=/opt/torque/ --prefix=/usr/local/openmpi-1.2.6 -- 
<br>
includedir='${prefix}/include/32' --libdir='${prefix}/lib32' &amp;&amp; make  
<br>
&amp;&amp; make install &amp;&amp; make check
<br>
<p>/usr/local/openmpi-1.2.6/bin/ompi_info |grep tm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
<br>
v1.2.6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.6)
<br>
<p><p>[form node 64bit]
<br>
./configure --disable-binaries --with-tm=/opt/torque/ --prefix=/usr/ 
<br>
local/openmpi-1.2.6 --includedir='${prefix}/include/64' --libdir='$ 
<br>
{prefix}/lib64' &amp;&amp; make &amp;&amp; make install &amp;&amp; make check
<br>
<p>/usr/local/openmpi-1.2.6/bin/ompi_info |grep tm
<br>
[compute-0-16.local:18284] mca: base: component_find: unable to open  
<br>
ras tm: file not found (ignored)
<br>
[compute-0-16.local:18284] mca: base: component_find: unable to open  
<br>
pls tm: file not found (ignored)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
<br>
v1.2.6)
<br>
<p><p>Any advice would be appreciated.
<br>
Thanks.
<br>
<p>P.S. I can send any additional info if required.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5653.php">Juan Carlos Larroya Huguet: "[OMPI users] Help configuring openmpi"</a>
<li><strong>Previous message:</strong> <a href="5651.php">Mukesh K Srivastava: "Re: [OMPI users] My openmpi compiler doesnt work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
<li><strong>Reply:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
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
