<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 13:18:54 2010" -->
<!-- isoreceived="20100813171854" -->
<!-- sent="Fri, 13 Aug 2010 13:18:50 -0400" -->
<!-- isosent="20100813171850" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="1281719930.22705.8.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="4D5F2CD4-CEA6-4855-BEDF-FB6C87AE7A28_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 13:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14018.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to all who replied.  
<br>
<p>First, I'm running openmpi 1.4.2.  
<br>
<p>Second coredumpsize is unlimited, and indeed I DO get core dumps when
<br>
I'm running a single-processor version.  Third, the problem isn't
<br>
stopping the program, MPI_Abort does that just fine, rather it's getting
<br>
a cordump.  According to the man page, MPI_Abort sends a SIGTERM, not a
<br>
SIGABRT so perhaps that's what should happen.   
<br>
<p>Finally, my guess as to what's happening if I use the libc abort is that
<br>
the other nodes get stuck in an MPI call (I do lots of MPI_Reduces or
<br>
MPI_Bcasts in this code), but this doesn't explain why the node calling
<br>
abort doesn't exit with a coredump.
<br>
<p>David
<br>
<p>On Thu, 2010-08-12 at 20:44 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Sounds very strange - what OMPI version, on what type of machine, and how was it configured?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2010, at 7:49 PM, David Ronis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've got a mpi program that is supposed to to generate a core file if
</span><br>
<span class="quotelev2">&gt; &gt; problems arise on any of the nodes.   I tried to do this by adding a
</span><br>
<span class="quotelev2">&gt; &gt; call to abort() to my exit routines but this doesn't work; I get no core
</span><br>
<span class="quotelev2">&gt; &gt; file, and worse, mpirun doesn't detect that one of my nodes has
</span><br>
<span class="quotelev2">&gt; &gt; aborted(?) and doesn't kill off the entire job, except in the trivial
</span><br>
<span class="quotelev2">&gt; &gt; case where the number of processors I'm running on is 1.   I've replaced
</span><br>
<span class="quotelev2">&gt; &gt; abort with MPI_Abort, which kills everything off, but leaves no core
</span><br>
<span class="quotelev2">&gt; &gt; file.  Any suggestions how I can get one and still have mpi exit?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14018.php">Michael E. Thomadakis: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>In reply to:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14020.php">Jeff Squyres: "Re: [OMPI users] Abort"</a>
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
