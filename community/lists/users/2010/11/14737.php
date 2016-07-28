<?
$subject_val = "Re: [OMPI users] Problem with sending messages from one of the machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 14:12:51 2010" -->
<!-- isoreceived="20101111191251" -->
<!-- sent="Thu, 11 Nov 2010 14:12:46 -0500" -->
<!-- isosent="20101111191246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with sending messages from one of the machines" -->
<!-- id="C5AD18DE-490B-45F5-A926-AD724EE9821E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikN0k18FSFS8ecXAosPVaLQrJV+nsTi-suURirG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with sending messages from one of the machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 14:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14736.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14736.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2010, at 2:04 PM, Krzysztof Zarzycki wrote:
<br>
<p><span class="quotelev1">&gt; I'm working with Grzegorz on the mentioned problem. 
</span><br>
<span class="quotelev1">&gt; If I'm correct on checking the firewall settings, &quot;iptables --list&quot; shows an empty list of rules.
</span><br>
<span class="quotelev1">&gt; The second host does not have iptables installed at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what can be a next reason of this problem?
</span><br>
<p>How many network interfaces do you have on these nodes?  Aside from loopback, are all network interfaces reachable from all others?  (that isn't an absolute requirement, but it's easy to talk about if they're all reachable from all others)
<br>
<p><span class="quotelev1">&gt; By the way, how can I enforce mpirun to use specific ethernet interface  for connections, if I have several possible? 
</span><br>
<p>Use the btl_if_include MCA parameter.  For example:
<br>
<p>&nbsp;&nbsp;mpirun --mca btl_if_include eth1,eth2 -np 8 --hostfile foo my_mpi_program
<br>
<p>Hopefully eth1 and eth2 are the same on both hosts (i.e., eth1 on hostA is reachable by eth1 on hostB; ditto for eth2).
<br>
<p>See the FAQ for more details on other ways of setting MCA parameters (environment vars, files, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14736.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14736.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14738.php">Ralph Castain: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
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
