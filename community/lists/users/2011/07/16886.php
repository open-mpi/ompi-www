<?
$subject_val = "Re: [OMPI users] Mpirun only works when n&lt; 3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 10:21:43 2011" -->
<!-- isoreceived="20110711142143" -->
<!-- sent="Mon, 11 Jul 2011 10:21:38 -0400" -->
<!-- isosent="20110711142138" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun only works when n&amp;lt; 3" -->
<!-- id="BDCE353B-29A9-421F-88AB-74C70653C52B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1310391241.89752.YahooMailClassic_at_web121011.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 10:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16885.php">Randolph Pullen: "[OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>In reply to:</strong> <a href="16885.php">Randolph Pullen: "[OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you disabled firewalls between your compute nodes?
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
<span class="quotelev1">&gt; - i5 sandy bridge under Ubuntu 10.10  8 G RAM
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
<span class="quotelev1">&gt; But when I combine the 2 machines I am limited to 2 processes, any more and MPI hangs.   It gets as far as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       Process 0 sending 10 to 1, tag 201 (3 processes in ring)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       Process 0 sent to 1
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16885.php">Randolph Pullen: "[OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>In reply to:</strong> <a href="16885.php">Randolph Pullen: "[OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
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
