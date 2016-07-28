<?
$subject_val = "Re: [OMPI users] MPI_Bcast from OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 07:23:58 2009" -->
<!-- isoreceived="20090423112358" -->
<!-- sent="Thu, 23 Apr 2009 07:23:52 -0400" -->
<!-- isosent="20090423112352" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast from OpenMPI" -->
<!-- id="98268ADF-E5C7-4887-BCCC-0111B74B7C97_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35624.99716.qm_at_web62007.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast from OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 07:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9060.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9058.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9048.php">shan axida: "[OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9062.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9062.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9065.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very strange; 6 seconds for a 1MB broadcast over 64 processes is *way*  
<br>
too long.  Even 2.5 sec at 2MB seems too long -- what is your network  
<br>
speed?  I'm not entirely sure what you mean by &quot;4 link&quot; on your graph.
<br>
<p>Without more information, I would first check your hardware setup to  
<br>
see if there's some kind of network buffering / congestion issue  
<br>
occurring.  Here's a total guess: your ethernet switch(es) are low  
<br>
quality (from an HPC perspective, at least) such that you're incurring  
<br>
congestion and/or retransmission at that size for some reason.
<br>
<p>You could also be running up against memory bus congestion (I assume  
<br>
you mean 4 cores per node; are they NUMA or UMA?).  But that wouldn't  
<br>
account for the huge spike at 1MB.
<br>
<p><p>On Apr 23, 2009, at 1:32 AM, shan axida wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; One more question:
</span><br>
<span class="quotelev1">&gt; I have executed the MPI_Bcast() in 64 processes in 16 nodes Ethernet  
</span><br>
<span class="quotelev1">&gt; multiple links cluster.
</span><br>
<span class="quotelev1">&gt; The result is shown in the file attached on this E-mail.
</span><br>
<span class="quotelev1">&gt; What is going on at 131072 double message size?
</span><br>
<span class="quotelev1">&gt; I have executed it many times but the result is still the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; THANK YOU!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi.pdf&gt;_______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9060.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9058.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9048.php">shan axida: "[OMPI users] MPI_Bcast from OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9062.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9062.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9065.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
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
