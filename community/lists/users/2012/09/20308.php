<?
$subject_val = "Re: [OMPI users] A question on MPI_Probe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 10:40:41 2012" -->
<!-- isoreceived="20120925144041" -->
<!-- sent="Tue, 25 Sep 2012 16:40:37 +0200" -->
<!-- isosent="20120925144037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A question on MPI_Probe" -->
<!-- id="0FCF14DE-5ABF-40BF-9DE7-E713D411A6DC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1348266779.3060.YahooMailNeo_at_web133206.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] A question on MPI_Probe<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 10:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20309.php">Jeff Squyres: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20257.php">devendra rai: "[OMPI users] A question on MPI_Probe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the receiver, MPI ordering is only within a specific (source_rank, tag, communicator) tuple.
<br>
<p>So if you send:
<br>
<p>M1 (source_rank=A, tag=T1, comm=foo)
<br>
M2 (source_rank=A, tag=T2, comm=foo)
<br>
<p>Then those have 2 different tuples, and can be probed/received in a different order in which they were sent.
<br>
<p>However, if your tags were the same for M1 and M2, then they would have to be probed/received in order.
<br>
<p><p><p>On Sep 22, 2012, at 12:32 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe my understanding of MPI_Probe is not correct. Here's what I have as a setup:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two MPI processes, A and B. Process A sends a large message, M1 using tag T1, and a small message, M2 using tag T2. The recepient of both messages is B.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The order of sending the messages is M1 and then M2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The process B however executes MPI_Probe to test if the message with tag T2 is available. B will accept M1 after it has received M2 first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am under the impression that using information gained from MPI_Probe, I can choose not to receive message M1, and instead look for M2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I see that M2 is never received by B (although A confirms that both M1 and M2 have been sent).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am little confused. Can someone explain why B cannot receive M2? At least, does MPI allow receiving messages in the order that I have just described?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra Rai.
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20309.php">Jeff Squyres: "Re: [OMPI users] bindings not reported and other problems in openmpi-1.7a1r27358"</a>
<li><strong>Previous message:</strong> <a href="20307.php">Ralph Castain: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>In reply to:</strong> <a href="20257.php">devendra rai: "[OMPI users] A question on MPI_Probe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20360.php">Iliev, Hristo: "Re: [OMPI users] A question on MPI_Probe"</a>
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
