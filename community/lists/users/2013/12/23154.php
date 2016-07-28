<?
$subject_val = "Re: [OMPI users] Problem compiling against torque 4.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 15:20:29 2013" -->
<!-- isoreceived="20131204202029" -->
<!-- sent="Wed, 4 Dec 2013 20:20:28 +0000" -->
<!-- isosent="20131204202028" -->
<!-- name="Matt Burgess" -->
<!-- email="mburgess_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling against torque 4.2.4" -->
<!-- id="BC599DDAB2B01E44A3228BEF9CD328D44B6BAA8F_at_PW00INFMAI003.digitalglobe.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="529F8BA3.5040403_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling against torque 4.2.4<br>
<strong>From:</strong> Matt Burgess (<em>mburgess_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 15:20:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23155.php">ºúÑî: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>In reply to:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the very quick reply. Indeed doing a &quot;make install_devel&quot; in the torque source fixed the issue!
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
<p><p><p><p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime Boissonneault
<br>
Sent: Wednesday, December 04, 2013 1:08 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problem compiling against torque 4.2.4
<br>
<p>Hi,
<br>
You are probably missing the moab-torque-devel package (or torque-devel package if there is one).
<br>
<p>You need the *-devel to have the headers in order to compile against torque.
<br>
<p>Maxime
<br>
<p>Le 2013-12-04 15:06, Matt Burgess a &#233;crit :
<br>
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
<p>information of DigitalGlobe, Inc. If you are not the intended recipient, or an agent or employee
<br>
<p>responsible for delivering this communication to the intended recipient, or if you have received
<br>
<p>this communication in error, please do not print, copy, retransmit, disseminate or
<br>
<p>otherwise use the information. Please indicate to the sender that you have received this
<br>
<p>communication in error, and delete the copy you received. DigitalGlobe reserves the
<br>
<p>right to monitor any electronic communication sent or received by its employees, agents
<br>
<p>or representatives.
<br>
<p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><pre>
--
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23154/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-23154/image001.gif" alt="image001.gif
">
<!-- attachment="image001.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-23154/image002.png" alt="image002.png
">
<!-- attachment="image002.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23155.php">ºúÑî: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>In reply to:</strong> <a href="23153.php">Maxime Boissonneault: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
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
