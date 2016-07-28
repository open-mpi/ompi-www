<?
$subject_val = "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 12:11:07 2012" -->
<!-- isoreceived="20120611161107" -->
<!-- sent="Mon, 11 Jun 2012 18:11:01 +0200" -->
<!-- isosent="20120611161101" -->
<!-- name="BOUVIER Benjamin" -->
<!-- email="benjamin.bouvier_at_[hidden]" -->
<!-- subject="[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6" -->
<!-- id="32696_1339431062_4FD61896_32696_4247_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E25_at_THSONEA01CMS07P.one.grp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9FCF1845-7902-4D8E-9890-0BB726502940_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6<br>
<strong>From:</strong> BOUVIER Benjamin (<em>benjamin.bouvier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 12:11:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow. I thought in the first place that all combinations would be equivalent, but in fact, this is not the case...
<br>
I've kept the firewalls down during all the tests.
<br>
<p><span class="quotelev1">&gt; - on node1, &quot;mpirun --host node1,node2 ring_c&quot;
</span><br>
Works.
<br>
<p><span class="quotelev1">&gt; - on node1, &quot;mpirun --host node1,node3 ring_c&quot;
</span><br>
<span class="quotelev1">&gt; - on node1, &quot;mpirun --host node2,node3 ring_c&quot;
</span><br>
Blocks after &quot;Process 0 sent to 1&quot;.
<br>
<p><span class="quotelev1">&gt; - on node1, &quot;mpirun --host node1,node2,node3 ring_c&quot;
</span><br>
&quot;Process 0 sending 10 to 1, tag 201 (3 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9&quot; then blocks
<br>
<p><span class="quotelev1">&gt; Repeat all 4 from node2.
</span><br>
On node 2 : 
<br>
- &quot;mpirun --host node2,node1 ring_c&quot; : OK
<br>
- &quot;mpirun --host node2,node3 ring_c&quot; : blocks at same point that above.
<br>
- &quot;mpirun --host node1,node3 ring_c&quot; : blocks at same point that above.
<br>
- &quot;mpirun --host node1,node2,node3 ring_c&quot; : blocks at same point that mentioned above in case of 3 hosts.
<br>
<p>I recompiled this test program with MPICH2 and have the exactly same issues at the same time. 
<br>
There is really something wrong with that network...
<br>
<pre>
--
Benjamin Bouvier
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19494.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19496.php">Jeff Squyres: "Re: [OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
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
