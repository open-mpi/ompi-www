<?
$subject_val = "Re: [OMPI users] MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 13:39:11 2010" -->
<!-- isoreceived="20100707173911" -->
<!-- sent="Wed, 7 Jul 2010 13:39:23 -0400" -->
<!-- isosent="20100707173923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_GET beyond 2 GB displacement" -->
<!-- id="1B835886-DABC-4C3F-AABC-6E19177E9DB4_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="07E77CF9C426584F8126A762FD1AFEA4147F27E3B7_at_HDXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_GET beyond 2 GB displacement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 13:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13441.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.  :-(
<br>
<p>It's because for a 32 bit signed int, at 2GB, the value turns negative.
<br>
<p><p>On Jun 29, 2010, at 1:46 PM, Price, Brian M (N-KCI) wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI version: 1.3.3
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Platform: IBM P5
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Built OpenMPI 64-bit (i.e., CFLAGS=-q64, CXXFLAGS=-q64, -FFLAGS=-q64, -FCFLAGS=-q64)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; FORTRAN 90 test program:
</span><br>
<span class="quotelev1">&gt; -          Create a large array (3.6 GB of 32-bit INTs)
</span><br>
<span class="quotelev1">&gt; -          Initialize MPI
</span><br>
<span class="quotelev1">&gt; -          Create a large window to encompass large array (3.6 GB)
</span><br>
<span class="quotelev1">&gt; -          Have PE 0 get 1 32-bit INT from PE1
</span><br>
<span class="quotelev1">&gt; o   Lock the window
</span><br>
<span class="quotelev1">&gt; o   MPI_GET
</span><br>
<span class="quotelev1">&gt; o   Unlock the window
</span><br>
<span class="quotelev1">&gt; -          Free the window
</span><br>
<span class="quotelev1">&gt; -          Finalize MPI
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Built FORTRAN 90 test program 64-bit using OpenMPI wrapper compiler (mpif90 &#150;q64).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Why would this MPI_GET work fine with displacements all the way up to just under 2 GB, and then fail as soon as the displacement hits 2 GB?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The MPI_GET succeeds with a displacement of 2147483644 (4 bytes less than 2 GB).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I get a segmentation fault (address not mapped) when the displacement is 2147483648 (2 GB) or larger.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13512.php">David Roundy: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13441.php">Price, Brian M (N-KCI): "[OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13526.php">Changsheng Jiang: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
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
