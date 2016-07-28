<?
$subject_val = "Re: [OMPI users] Problem compiling against torque 4.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 15:08:06 2013" -->
<!-- isoreceived="20131204200806" -->
<!-- sent="Wed, 04 Dec 2013 15:08:03 -0500" -->
<!-- isosent="20131204200803" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling against torque 4.2.4" -->
<!-- id="529F8BA3.5040403_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BC599DDAB2B01E44A3228BEF9CD328D44B6BA7A7_at_PW00INFMAI003.digitalglobe.com" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 15:08:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Previous message:</strong> <a href="23152.php">Matt Burgess: "[OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>In reply to:</strong> <a href="23152.php">Matt Burgess: "[OMPI users] Problem compiling against torque 4.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Reply:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
You are probably missing the moab-torque-devel package (or torque-devel 
<br>
package if there is one).
<br>
<p>You need the *-devel to have the headers in order to compile against torque.
<br>
<p>Maxime
<br>
<p>Le 2013-12-04 15:06, Matt Burgess a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't seem to compile openmpi version 1.6.5 against torque 4.2.4. 
</span><br>
<span class="quotelev1">&gt; Here's the configure line I'm using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-tm=/dg/local/cots/torque/torque-4.2.4/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The relevant portion of config.log appears to be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92031: checking --with-tm value
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92051: result: sanity check ok 
</span><br>
<span class="quotelev1">&gt; (/dg/local/cots/torque/torque-4.2.4/)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92076: checking for pbs-config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92086: result: 
</span><br>
<span class="quotelev1">&gt; /dg/local/cots/torque/torque-4.2.4//bin/pbs-config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92099: ess_tm_CPPFLAGS from pbs-config:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92122: ess_tm_LDFLAGS from pbs-config:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92145: ess_tm_LIBS from pbs-config:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92160: checking tm.h usability
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92160: gcc -c -DNDEBUG -g -O2 -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread 
</span><br>
<span class="quotelev1">&gt; -I/root/openmpi-1.6.5/opal/mca/hwloc/hwloc132/hwloc/include conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; conftest.c:597:16: error: tm.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:92160: $? = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help anybody can provide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DigitalGlobe logo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.digitalglobe.com/images/dg_02.gif">http://www.digitalglobe.com/images/dg_02.gif</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Matt Burgess***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Linux/HPC Engineer/
</span><br>
<span class="quotelev1">&gt; +1.303.684.1132 office
</span><br>
<span class="quotelev1">&gt; +1.919.355.8672 mobile
</span><br>
<span class="quotelev1">&gt; matt.burgess_at_[hidden] &lt;mailto:matt.burgess_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This electronic communication and any attachments may contain confidential and proprietary
</span><br>
<span class="quotelev1">&gt; information of DigitalGlobe, Inc. If you are not the intended recipient, or an agent or employee
</span><br>
<span class="quotelev1">&gt; responsible for delivering this communication to the intended recipient, or if you have received
</span><br>
<span class="quotelev1">&gt; this communication in error, please do not print, copy, retransmit, disseminate or
</span><br>
<span class="quotelev1">&gt; otherwise use the information. Please indicate to the sender that you have received this
</span><br>
<span class="quotelev1">&gt; communication in error, and delete the copy you received. DigitalGlobe reserves the
</span><br>
<span class="quotelev1">&gt; right to monitor any electronic communication sent or received by its employees, agents
</span><br>
<span class="quotelev1">&gt; or representatives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-23153/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-23153/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Previous message:</strong> <a href="23152.php">Matt Burgess: "[OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>In reply to:</strong> <a href="23152.php">Matt Burgess: "[OMPI users] Problem compiling against torque 4.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
<li><strong>Reply:</strong> <a href="23154.php">Matt Burgess: "Re: [OMPI users] Problem compiling against torque 4.2.4"</a>
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
