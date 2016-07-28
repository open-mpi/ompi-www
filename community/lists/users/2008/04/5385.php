<?
$subject_val = "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 13 08:00:47 2008" -->
<!-- isoreceived="20080413120047" -->
<!-- sent="Sun, 13 Apr 2008 08:00:37 -0400" -->
<!-- isosent="20080413120037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale" -->
<!-- id="B1DD6344-7114-4D71-BE50-9C95670A3C94_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1207767709.4345.43.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-13 08:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5386.php">Jeff Squyres: "Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
<li><strong>Previous message:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>In reply to:</strong> <a href="5349.php">&#197;ke Sandgren: "[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5387.php">흆e Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Reply:</strong> <a href="5387.php">흆e Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Reply:</strong> <a href="5390.php">흆e Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you get the same error if you disable the memory handling in Open  
<br>
MPI?  You can configure OMPI with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-memory-manager
<br>
<p><p>On Apr 9, 2008, at 3:01 PM, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an annoying problem that i hope someone here has some info on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build a code with OpenMPI+Intel MKL+Pathscale.
</span><br>
<span class="quotelev1">&gt; When using the sequential (non-threaded) MKL everything is ok, but  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev1">&gt; using the threaded MKL i get a segfault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This doesn't happen when using MVAPICH so i suspect the memory  
</span><br>
<span class="quotelev1">&gt; handling
</span><br>
<span class="quotelev1">&gt; inside OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version used are:
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.6
</span><br>
<span class="quotelev1">&gt; Pathscale 3.2beta
</span><br>
<span class="quotelev1">&gt; MKL 10.0.2.018
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen anything like this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<li><strong>Next message:</strong> <a href="5386.php">Jeff Squyres: "Re: [OMPI users] Troubles with MPI-IO Test and Torque/PVFS"</a>
<li><strong>Previous message:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>In reply to:</strong> <a href="5349.php">&#197;ke Sandgren: "[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5387.php">흆e Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Reply:</strong> <a href="5387.php">흆e Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Reply:</strong> <a href="5390.php">흆e Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
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
