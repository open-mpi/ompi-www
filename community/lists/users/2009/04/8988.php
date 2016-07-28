<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2 rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 18:22:38 2009" -->
<!-- isoreceived="20090420222238" -->
<!-- sent="Mon, 20 Apr 2009 16:22:24 -0600" -->
<!-- isosent="20090420222224" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2 rank?" -->
<!-- id="F16CF90F-5E74-4B69-A346-30CCD8C3F76C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1240264436.9395.32.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2 rank?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-20 18:22:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>Previous message:</strong> <a href="8987.php">Ross Boylan: "[OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>In reply to:</strong> <a href="8987.php">Ross Boylan: "[OMPI users] OpenMPI 1.2 rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>Reply:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid there really isn't anything in the 1.2.x series - we set  
<br>
several MPI-specific envars beginning with 1.3.0, but not in the older  
<br>
releases.
<br>
<p>The problem with using something like OMPI_MCA_ns_nds_vpid is that we  
<br>
are free to change/eliminate it at any time - in fact, you won't find  
<br>
that envar in the 1.3.x series at all.
<br>
<p><p>On Apr 20, 2009, at 3:53 PM, Ross Boylan wrote:
<br>
<p><span class="quotelev1">&gt; How do I determine my rank in a shell script under OpenMPI 1.2?
</span><br>
<span class="quotelev1">&gt; The only thing I've found that looks promising is the environment
</span><br>
<span class="quotelev1">&gt; variable OMPI_MCA_ns_nds_vpid, and earlier discussion on this list  
</span><br>
<span class="quotelev1">&gt; said
</span><br>
<span class="quotelev1">&gt; that was for &quot;internal use only&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm on Debian Lenny, which just relased with openmpi 1.2.7~rc2-2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Ross
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>Previous message:</strong> <a href="8987.php">Ross Boylan: "[OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>In reply to:</strong> <a href="8987.php">Ross Boylan: "[OMPI users] OpenMPI 1.2 rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
<li><strong>Reply:</strong> <a href="8989.php">Ross Boylan: "Re: [OMPI users] OpenMPI 1.2 rank?"</a>
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
