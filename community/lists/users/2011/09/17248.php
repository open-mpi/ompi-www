<?
$subject_val = "Re: [OMPI users] #cpus/socket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 06:59:18 2011" -->
<!-- isoreceived="20110913105918" -->
<!-- sent="Tue, 13 Sep 2011 12:59:08 +0200" -->
<!-- isosent="20110913105908" -->
<!-- name="Peter Kjellstr&#195;&#182;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] #cpus/socket" -->
<!-- id="201109131259.12849.cap_at_nsc.liu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20110913090732.E59A7147_at_pobox.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] #cpus/socket<br>
<strong>From:</strong> Peter Kjellstr&#195;&#182;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 06:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17244.php">nn3003: "[OMPI users] #cpus/socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Reply:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, September 13, 2011 09:07:32 AM nn3003 wrote:
<br>
<span class="quotelev1">&gt; Hello !
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am running wrf model on 4x AMD 6172 which is 12 core CPU. I use OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.4.3 and libgomp 4.3.4. I have binaries compiled for shared-memory and
</span><br>
<span class="quotelev1">&gt; distributed-memory (OpenMP and OpenMPI) I use following command
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --cpus-per-proc 6 --report-bindings --bysocket wrf.exe
</span><br>
<span class="quotelev1">&gt; It works ok and in top i see there are 4 wrf.exe and each has 6 threads on
</span><br>
<span class="quotelev1">&gt; cpu0-5 12-17 24-29 36-41 However, if I want to run 8 or more e.g.
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --cpus-per-proc 12 --report-bindings --bysocket wrf.exe
</span><br>
<span class="quotelev1">&gt; I get error
</span><br>
<span class="quotelev1">&gt; Your job has requested more cpus per process(rank) than there
</span><br>
<span class="quotelev1">&gt; are cpus in a socket:
</span><br>
<span class="quotelev1">&gt;   Cpus/rank: 8
</span><br>
<span class="quotelev1">&gt;   #cpus/socket: 6
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Why is that ? There are 12 cores per socket in AMD 6172.
</span><br>
<p>In reality a 12 core Magnycours is two 6 core dies on a socket. I'm guessing 
<br>
that the topology code sees your 4x 12 core as a 8x 6 core.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17248/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17247.php">devendra rai: "[OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17244.php">nn3003: "[OMPI users] #cpus/socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Reply:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
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
