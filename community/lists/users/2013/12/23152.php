<?
$subject_val = "[OMPI users] Problem compiling against torque 4.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 15:06:21 2013" -->
<!-- isoreceived="20131204200621" -->
<!-- sent="Wed, 4 Dec 2013 20:06:20 +0000" -->
<!-- isosent="20131204200620" -->
<!-- name="Matt Burgess" -->
<!-- email="mburgess_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling against torque 4.2.4" -->
<!-- id="BC599DDAB2B01E44A3228BEF9CD328D44B6BA7A7_at_PW00INFMAI003.digitalglobe.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling against torque 4.2.4<br>
<strong>From:</strong> Matt Burgess (<em>mburgess_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 15:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Previous message:</strong> <a href="23151.php">Nathan Hjelm: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Reply:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I can't seem to compile openmpi version 1.6.5 against torque 4.2.4. Here's the configure line I'm using:
<br>
<p>./configure --with-tm=/dg/local/cots/torque/torque-4.2.4/
<br>
<p>The relevant portion of config.log appears to be:
<br>
<p>configure:92031: checking --with-tm value
<br>
configure:92051: result: sanity check ok (/dg/local/cots/torque/torque-4.2.4/)
<br>
configure:92076: checking for pbs-config
<br>
configure:92086: result: /dg/local/cots/torque/torque-4.2.4//bin/pbs-config
<br>
configure:92099: ess_tm_CPPFLAGS from pbs-config:
<br>
configure:92122: ess_tm_LDFLAGS from pbs-config:
<br>
configure:92145: ess_tm_LIBS from pbs-config:
<br>
configure:92160: checking tm.h usability
<br>
configure:92160: gcc -c -DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -pthread   -I/root/openmpi-1.6.5/opal/mca/hwloc/hwloc132/hwloc/include   conftest.c &gt;&amp;5
<br>
conftest.c:597:16: error: tm.h: No such file or directory
<br>
configure:92160: $? = 1
<br>
<p><p>Thanks in advance for any help anybody can provide.
<br>
<p>[DigitalGlobe logo]
<br>
<p>[<a href="http://www.digitalglobe.com/images/dg_02.gif">http://www.digitalglobe.com/images/dg_02.gif</a>]
<br>
<p>Matt Burgess
<br>
Linux/HPC Engineer
<br>
+1.303.684.1132 office
<br>
+1.919.355.8672 mobile
<br>
matt.burgess_at_[hidden]&lt;mailto:matt.burgess_at_[hidden]&gt;
<br>
<p><p><p><p><p>This electronic communication and any attachments may contain confidential and proprietary 
<br>
information of DigitalGlobe, Inc. If you are not the intended recipient, or an agent or employee 
<br>
responsible for delivering this communication to the intended recipient, or if you have received 
<br>
this communication in error, please do not print, copy, retransmit, disseminate or 
<br>
otherwise use the information. Please indicate to the sender that you have received this 
<br>
communication in error, and delete the copy you received. DigitalGlobe reserves the 
<br>
right to monitor any electronic communication sent or received by its employees, agents 
<br>
or representatives.
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-23152/image001.gif" alt="image001.gif
">
<!-- attachment="image001.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-23152/image002.png" alt="image002.png
">
<!-- attachment="image002.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Previous message:</strong> <a href="23151.php">Nathan Hjelm: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Reply:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
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
