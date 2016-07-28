<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 06:42:18 2016" -->
<!-- isoreceived="20160301114218" -->
<!-- sent="Tue, 1 Mar 2016 11:42:15 +0000" -->
<!-- isosent="20160301114215" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="D4A3639D-49EB-4EE4-A2E3-08C9B5A5A58B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="291809791.1045343.1456793331646.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] General Questions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 06:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28609.php">Matthew Larkin: "[OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2016, at 6:48 PM, Matthew Larkin &lt;larkym_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I know OpenMPI supports ethernet, but where does it clearly state that?
</span><br>
<span class="quotelev1">&gt; - I see on the FAQ on the web page there is a whole list of network interconnect, but how do I relate that to Ethernet network etc.?
</span><br>
<p>Open MPI actually supports multiple Ethernet-based interconnects: Cisco usNIC, iWARP, Mellanox RoCE, and TCP sockets.
<br>
<p>I suspect the one you are asking about is TCP sockets (which technically doesn't need to run over Ethernet, but TCP-over-Ethernet is probably its most common use case).
<br>
<p><span class="quotelev1">&gt; 2. Does OpenMPI work with PCIe and PCIe switch?
</span><br>
<span class="quotelev1">&gt; - Is there any specific configuration to get it to work?
</span><br>
<p>Do you have a specific vendor device / networking stack in mind?  In general, Open MPI will use:
<br>
<p>- some kind of local IPC mechanism (e.g., some flavor of shared memory) for intra-node communication
<br>
- some kind of networking API for inter-node communication
<br>
<p>Extending PCIe between servers blurs this line a bit -- peer MPI processes on a remote server can make it look like they are actually local.  So it depends on your network stack: do you have some kind of API that effects messaging transport over PCIe?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28610.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28609.php">Matthew Larkin: "[OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<li><strong>Reply:</strong> <a href="28612.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
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
