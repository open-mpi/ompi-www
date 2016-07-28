<?
$subject_val = "Re: [OMPI users] openib problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 12 09:55:09 2008" -->
<!-- isoreceived="20080112145509" -->
<!-- sent="Sat, 12 Jan 2008 18:24:58 +0330 (IRST)" -->
<!-- isosent="20080112145458" -->
<!-- name="rahmani" -->
<!-- email="m_rahmani56_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib problems" -->
<!-- id="14096624.288891200149698809.JavaMail.root_at_mta.iut.ac.ir" -->
<!-- charset="utf-8" -->
<!-- inreplyto="820B3410-7F7C-4D39-9D03-2AFF305C9F22_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib problems<br>
<strong>From:</strong> rahmani (<em>m_rahmani56_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-12 09:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4821.php">Brock Palen: "[OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4819.php">Jeff Squyres: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>In reply to:</strong> <a href="4807.php">Jeff Squyres: "Re: [OMPI users] openib problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
add the following line in /etc/openmpi-mca-params.conf
<br>
btl=^openib
<br>
<p><p><p><p><p>----- Original Message -----
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Friday, January 11, 2008 12:32:10 AM (GMT+0330) Asia/Tehran
<br>
Subject: Re: [OMPI users] openib problems
<br>
<p>This can mean that you have a user-level libibverbs and kernel mismatch.
<br>
<p>Do any of the OFED sample programs work properly, or perhaps the  
<br>
ibv_devinfo program?  (ibv_devinfo should query the HCAs on your host  
<br>
and list the status of all the ports)
<br>
<p><p><p>On Jan 10, 2008, at 2:33 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We just updated rhel4 a few days back and now we get the following
</span><br>
<span class="quotelev1">&gt; errors when trying to run on infiniband nodes with openmpi-1.2.3 and
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1]: OpenIB on host nyx397 was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for /
</span><br>
<span class="quotelev1">&gt; sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for /
</span><br>
<span class="quotelev1">&gt; sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone ever seen this error before?  We are not that
</span><br>
<span class="quotelev1">&gt; knowledgeable in infiniband so any help would be great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4821.php">Brock Palen: "[OMPI users] OpenMP + OMPI"</a>
<li><strong>Previous message:</strong> <a href="4819.php">Jeff Squyres: "Re: [OMPI users] Open MPI and thread-safety"</a>
<li><strong>In reply to:</strong> <a href="4807.php">Jeff Squyres: "Re: [OMPI users] openib problems"</a>
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
