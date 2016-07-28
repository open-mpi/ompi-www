<?
$subject_val = "Re: [OMPI users] openib problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 16:02:33 2008" -->
<!-- isoreceived="20080110210233" -->
<!-- sent="Thu, 10 Jan 2008 16:02:10 -0500" -->
<!-- isosent="20080110210210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib problems" -->
<!-- id="820B3410-7F7C-4D39-9D03-2AFF305C9F22_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F00C139-DB0A-468B-924F-0A43345B5124_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 16:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4808.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Previous message:</strong> <a href="4806.php">Brock Palen: "[OMPI users] openib problems"</a>
<li><strong>In reply to:</strong> <a href="4806.php">Brock Palen: "[OMPI users] openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4820.php">rahmani: "Re: [OMPI users] openib problems"</a>
<li><strong>Reply:</strong> <a href="4820.php">rahmani: "Re: [OMPI users] openib problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This can mean that you have a user-level libibverbs and kernel mismatch.
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4808.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Previous message:</strong> <a href="4806.php">Brock Palen: "[OMPI users] openib problems"</a>
<li><strong>In reply to:</strong> <a href="4806.php">Brock Palen: "[OMPI users] openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4820.php">rahmani: "Re: [OMPI users] openib problems"</a>
<li><strong>Reply:</strong> <a href="4820.php">rahmani: "Re: [OMPI users] openib problems"</a>
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
