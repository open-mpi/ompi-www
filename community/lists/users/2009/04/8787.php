<?
$subject_val = "[OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 12:33:49 2009" -->
<!-- isoreceived="20090406163349" -->
<!-- sent="Mon, 6 Apr 2009 09:33:46 -0700" -->
<!-- isosent="20090406163346" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="[OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090406163346.GA84785_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 12:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8825.php">Ethan Mallove: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I recently upgraded OpenMPI from 1.2.9 to 1.3 and then 1.3.1.
<br>
One of my colleagues reported a dramatic drop in performance
<br>
with one of his applications.  My investigation shows a factor
<br>
of 10 drop in communication over the memory bus.  I've placed
<br>
a figure that iilustrates the problem at 
<br>
<p><a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg</a>
<br>
<p>The legend in the figure has 'ver. 1.2.9  11 &lt;--&gt; 18'.  This
<br>
means communication between node 11 and node 18 over GigE 
<br>
ethernet in my cluster.  'ver. 1.2.9  20 &lt;--&gt; 20' means
<br>
communication between processes on node 20 where node 20 has
<br>
8 processors.  The image clearly shows that communication over
<br>
GigE is consistent among the versions of OpenMPI.  However, some
<br>
change in going from 1.2.9 to 1.3.x is causing a drop in
<br>
communication between processes on a single node.
<br>
<p>Things to note.  Nodes 11, 18, and 20 are essentially idle
<br>
before and after a test.  configure was run with the same set
<br>
of options except with 1.3 and 1.3.1 I needed to disable ipv6:
<br>
<p>&nbsp;&nbsp;./configure --prefix=/usr/local/openmpi-1.2.9 \
<br>
&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default --enable-static
<br>
&nbsp;&nbsp;&nbsp;--disable-shared
<br>
<p>&nbsp;&nbsp;./configure --prefix=/usr/local/openmpi-1.3.1 \
<br>
&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default --enable-static
<br>
&nbsp;&nbsp;&nbsp;--disable-shared --disable-ipv6
<br>
<p>&nbsp;&nbsp;./configure --prefix=/usr/local/openmpi-1.3.1 \
<br>
&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default --enable-static
<br>
&nbsp;&nbsp;&nbsp;--disable-shared --disable-ipv6
<br>
<p>The operating system is FreeBSD 8.0 where nodes 18 and 20
<br>
are quad-core, dual-cpu opteron based systems and node 11
<br>
is a dual-core, dual-cpu opteron based system.  For additional
<br>
information, I've placed the output of ompi_info at
<br>
<p><a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.2.9">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.2.9</a>
<br>
<a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.0">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.0</a>
<br>
<a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.1">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.1</a>
<br>
<p>Any hints on tuning 1.3.1 would be appreciated?
<br>
<p><pre>
-- 
steve
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8796.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8825.php">Ethan Mallove: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
