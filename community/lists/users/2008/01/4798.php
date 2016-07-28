<?
$subject_val = "Re: [OMPI users] Open MPI v1.2.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 21:06:47 2008" -->
<!-- isoreceived="20080109020647" -->
<!-- sent="Tue, 8 Jan 2008 21:06:39 -0500" -->
<!-- isosent="20080109020639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI v1.2.5 released" -->
<!-- id="9F64FE55-F193-431F-8554-08BDA2E330BE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="743163.21415.qm_at_web57603.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI v1.2.5 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 21:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4799.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4797.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4796.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4800.php">Warner Yuen: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2008, at 4:18 PM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; Surely naive questions, though to avoid a mess and much time, having  
</span><br>
<span class="quotelev1">&gt; no expert
</span><br>
<span class="quotelev1">&gt; in systems here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a recipe for &quot;upgrading&quot; to 1.2.5/ifort in Linux from  
</span><br>
<span class="quotelev1">&gt; version 1.2.3
</span><br>
<span class="quotelev1">&gt; compiled ifort? (my Linux is Debian amd64)?
</span><br>
<p>We generally recommend having a new installation for each version of  
<br>
Open MPI.  We do not [yet] test for binary compatibility between  
<br>
released versions of Open MPI.  That's on the to-do list, but it  
<br>
hasn't happened yet.  Specifically, codes that were compiled against  
<br>
v1.2.3 may or may not work with v.1.2.5.
<br>
<p>For example, if you installed Open MPI v1.2.3 into:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi-1.2.3
<br>
<p>you might want to install Open MPI v1.2.5 into:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi-1.2.5
<br>
<p>Or something along those lines.
<br>
<p><span class="quotelev1">&gt; What about the parallelized programs that depend on Open MPI? (several
</span><br>
<span class="quotelev1">&gt; instances in my system)
</span><br>
<p>It is best to recompile / relink them against the new installation of  
<br>
Open MPI (v1.2.5).
<br>
<p><span class="quotelev1">&gt; What about programs that were compiled from config configured for  
</span><br>
<span class="quotelev1">&gt; mpich2,
</span><br>
<span class="quotelev1">&gt; though run parallel by pointing to Open MPI 1.2 (one instance in my  
</span><br>
<span class="quotelev1">&gt; system).
</span><br>
<p><p>I'm not sure I fully understand this question...  If you compile an  
<br>
MPI application against MPICH2, it will not run properly with Open  
<br>
MPI's mpirun and libmpi.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4799.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4797.php">Andreas Sch&#228;fer: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4796.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4800.php">Warner Yuen: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
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
