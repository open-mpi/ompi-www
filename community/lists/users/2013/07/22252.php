<?
$subject_val = "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 10:44:14 2013" -->
<!-- isoreceived="20130705144414" -->
<!-- sent="Fri, 05 Jul 2013 16:44:10 +0200" -->
<!-- isosent="20130705144410" -->
<!-- name="Jed O. Kaplan" -->
<!-- email="jedokaplan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] example program &amp;quot;ring&amp;quot; hangs when running across multiple hardware nodes (SOLVED)" -->
<!-- id="1373035450.24140.140661252259517.3CB39417_at_webmail.messagingengine.com" -->
<!-- inreplyto="529B6039-C577-4F1C-B2B3-F8E8546D988E_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)<br>
<strong>From:</strong> Jed O. Kaplan (<em>jedokaplan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 10:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
<li><strong>Previous message:</strong> <a href="22251.php">Ed Blosch: "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI"</a>
<li><strong>In reply to:</strong> <a href="22246.php">Gustavo Correa: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus,
<br>
<p>Thanks for your help - your clue solved my problem!
<br>
<p>The ultimate solution was to limit mpi communications to the local,
<br>
unrouted subnet. I made this the default behavior of all users of my
<br>
cluster by adding the following line to the bottom of my
<br>
$prefix/etc/openmpi-mca-params.conf file
<br>
<p>btl_tcp_if_include = 10.0.0.0/8
<br>
<p>Thanks again - what a relief!
<br>
<p>Jed
<br>
<p>On Fri, Jul 5, 2013, at 01:25 AM, Gustavo Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Jed 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could try to select only ethernet interface that match your node's IP
</span><br>
<span class="quotelev1">&gt; addresses,
</span><br>
<span class="quotelev1">&gt; which seems to be en2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The en1 interface seems to be an external IP. 
</span><br>
<span class="quotelev1">&gt; Not sure about en3, but it is awkward that it has a 
</span><br>
<span class="quotelev1">&gt; different IP than en2, but in the same subnet.
</span><br>
<span class="quotelev1">&gt; I wonder if this may be the reason for the program hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to search all nodes ifconfig for a consistent set of
</span><br>
<span class="quotelev1">&gt; interfaces/IP addresses,
</span><br>
<span class="quotelev1">&gt; and tailor your mpiexec command line and your hostfile accordingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say, something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -mca btl_tcp_if_include en2 -hostfile your_hostfile -np 43
</span><br>
<span class="quotelev1">&gt; ./ring_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this FAQ (actually, all of them are very informative):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
<li><strong>Previous message:</strong> <a href="22251.php">Ed Blosch: "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI"</a>
<li><strong>In reply to:</strong> <a href="22246.php">Gustavo Correa: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes"</a>
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
