<?
$subject_val = "Re: [OMPI users] openmpi-sessions-userid directories";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 21:57:02 2007" -->
<!-- isoreceived="20071121025702" -->
<!-- sent="Tue, 20 Nov 2007 21:56:56 -0500" -->
<!-- isosent="20071121025656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-sessions-userid directories" -->
<!-- id="8643F3C8-86FE-46D7-B212-DF7D394F8955_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF195300A2.698CFCA9-ON86257399.00712960-86257399.0071D909_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-sessions-userid directories<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-20 21:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4496.php">Chadalavada Kalyana Krishna: "[OMPI users] reg. heterogeneous cluster confguration"</a>
<li><strong>Previous message:</strong> <a href="4494.php">pat.o'bryant_at_[hidden]: "[OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>In reply to:</strong> <a href="4494.php">pat.o'bryant_at_[hidden]: "[OMPI users] openmpi-sessions-userid directories"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4500.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>Reply:</strong> <a href="4500.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2007, at 3:43 PM, pat.o'bryant_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;  It appears that some of our OpenMPI jobs are creating a directory  
</span><br>
<span class="quotelev1">&gt; named
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-sessions-userid_at_node_name&quot; for each allocated node. Is  
</span><br>
<span class="quotelev1">&gt; there a way
</span><br>
<span class="quotelev1">&gt; to reduce the number of directories or is this a part of the way  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2.4 works? We submit our jobs using Torque/Moab.
</span><br>
<p>This is just how OMPI works; we make these temp dirs for job-local  
<br>
storage and temporary stuff (E.g., shared memory mmap files).
<br>
<p>Are you running into a problem with this?
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
<li><strong>Next message:</strong> <a href="4496.php">Chadalavada Kalyana Krishna: "[OMPI users] reg. heterogeneous cluster confguration"</a>
<li><strong>Previous message:</strong> <a href="4494.php">pat.o'bryant_at_[hidden]: "[OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>In reply to:</strong> <a href="4494.php">pat.o'bryant_at_[hidden]: "[OMPI users] openmpi-sessions-userid directories"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4500.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>Reply:</strong> <a href="4500.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
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
