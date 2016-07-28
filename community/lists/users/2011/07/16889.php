<?
$subject_val = "Re: [OMPI users] Mpirun only works when n&lt; 3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 11:31:51 2011" -->
<!-- isoreceived="20110711153151" -->
<!-- sent="Mon, 11 Jul 2011 08:31:46 -0700 (PDT)" -->
<!-- isosent="20110711153146" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun only works when n&amp;lt; 3" -->
<!-- id="1310398306.50655.YahooMailClassic_at_web121002.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BDCE353B-29A9-421F-88AB-74C70653C52B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun only works when n&lt; 3<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 11:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16890.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>In reply to:</strong> <a href="16886.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16890.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16890.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are no firewalls by default. &#160;I can ssh between both nodes without a password so I assumed that all is good with the comms.I can also get both nodes to participate in the ring program at the same time.Its just that I am limited to inly 2 processes if they are split between the nodes
<br>
ie:mpirun -H A,B ring &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; (works)mpirun -H A,A,A,A,A,A,A &#160;ring &#160; &#160; (works)mpirun -H B,B,B,B ring &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; (works)mpirun -H A,B,A &#160;ring &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;(hangs)
<br>
<p>--- On Tue, 12/7/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Mpirun only works when n&lt; 3
<br>
To: randolph_pullen_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Tuesday, 12 July, 2011, 12:21 AM
<br>
<p>Have you disabled firewalls between your compute nodes?
<br>
<p><p>On Jul 11, 2011, at 9:34 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; This appears to be similar to the problem described in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, those fixes do not work for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running on an 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - i5 sandy bridge under Ubuntu 10.10&#160; 8 G RAM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Kernel 2.6.32.14 with OpenVZ tweaks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - OpenMPI V 1.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to migrate existing software to a new cluster (A,B)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Symptoms:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run the ring demo on a single machine, either A or B with any number of processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I combine the 2 machines I am limited to 2 processes, any more and MPI hangs.&#160;&#160;&#160;It gets as far as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160;&#160;&#160;Process 0 sending 10 to 1, tag 201 (3 processes in ring)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160;&#160;&#160;Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and there it stays...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help greatly appreciated.
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16890.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>In reply to:</strong> <a href="16886.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16890.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16890.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
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
