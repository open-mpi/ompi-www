<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 17:51:53 2010" -->
<!-- isoreceived="20100707215153" -->
<!-- sent="Wed, 07 Jul 2010 15:51:41 -0600" -->
<!-- isosent="20100707215141" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA4147F418685_at_HDXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1B835886-DABC-4C3F-AABC-6E19177E9DB4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 17:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13520.php">Jeff Squyres: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I understand what you've said about 32-bit signed INTs, but in my program, the displacement variable that I use for the MPI_GET call is a 64-bit INT (KIND = 8).
<br>
<p>In fact, the only thing in my program that isn't a 64-bit INT is the array that I'm trying to transfer values from.
<br>
<p>I would post my entire test program, but I don't have direct internet access from the machine that I'm working on.  Do you need to see the test program?
<br>
<p>Am I still missing something?
<br>
<p>Thanks.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Wednesday, July 07, 2010 10:39 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] MPI_GET beyond 2 GB displacement
<br>
<p>Sorry for the delay in replying.  :-(
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
<span class="quotelev1">&gt; Built OpenMPI 64-bit (i.e., CFLAGS=-q64, CXXFLAGS=-q64, -FFLAGS=-q64, 
</span><br>
<span class="quotelev1">&gt; -FCFLAGS=-q64)
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
<span class="quotelev1">&gt; Built FORTRAN 90 test program 64-bit using OpenMPI wrapper compiler (mpif90 -q64).
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13520.php">Jeff Squyres: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>In reply to:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
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
