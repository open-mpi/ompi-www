<?
$subject_val = "Re: [OMPI users] openmpi 1.4 and barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 13:51:36 2009" -->
<!-- isoreceived="20091001175136" -->
<!-- sent="Thu, 1 Oct 2009 13:51:30 -0400" -->
<!-- isosent="20091001175130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4 and barrier" -->
<!-- id="171BA579-0AAE-4B47-BB5F-B07361EDF236_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e75d22a90910011042g7e0cf729obcb7a0b392c956d1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.4 and barrier<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 13:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10853.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10853.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Reply:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I saw this bug to have race-condition-like behavior.  I could  
<br>
run a few times and then it would work.
<br>
<p>On Oct 1, 2009, at 1:42 PM, Michael Di Domenico wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Oct 1, 2009 at 1:37 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 1, 2009, at 1:24 PM, Michael Di Domenico wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I just upgraded to the devel snapshot of 1.4a1r22031
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when i run a simple hello world with a barrier i get
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_tcp_endpoint.c:484:mca_btl_tcp_endpoint_recv_connect_ack]  
</span><br>
<span class="quotelev1">&gt; received
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unexpected process identifier
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have seen this failure over the last day or three myself.  I'll  
</span><br>
<span class="quotelev1">&gt; file a
</span><br>
<span class="quotelev2">&gt; &gt; trac ticket about it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (all's fair in love, war, and trunk development snapshots!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, thanks...  Unfortunately i need the dev snap for slurm  
</span><br>
<span class="quotelev1">&gt; intergration... :(
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10855.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPI and it's consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10853.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>In reply to:</strong> <a href="10853.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Reply:</strong> <a href="10856.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.4 and barrier"</a>
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
