<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 14:23:47 2007" -->
<!-- isoreceived="20070608182347" -->
<!-- sent="Fri, 8 Jun 2007 14:23:36 -0400" -->
<!-- isosent="20070608182336" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes" -->
<!-- id="9F7EA221-8BF4-4E44-A39B-AB1B1F9B6A3B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1626092b0706080629k72ad8231y945df65a2c520b90_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 14:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
<li><strong>Previous message:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3409.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3423.php">Code Master: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Reply:</strong> <a href="3423.php">Code Master: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 8, 2007, at 9:29 AM, Code Master wrote:
<br>
<p><span class="quotelev1">&gt; I compiled openmpi-1.2.2 with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CFLAGS=-g -pg -O3 --prefix=/home/foo/490_research/490/ 
</span><br>
<span class="quotelev1">&gt; src/mpi.optimized_profiling/  \
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --enable-progress-threads --enable-static -- 
</span><br>
<span class="quotelev1">&gt; disable-shared --without-memory-manager  \
</span><br>
<span class="quotelev1">&gt; --without-libnuma --disable-mpi-f77 --disable-mpi-f90 --disable-mpi- 
</span><br>
<span class="quotelev1">&gt; cxx --disable-mpi-cxx-seek --disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Thanks Jeff, now I know that I have to add --without-memory- 
</span><br>
<span class="quotelev1">&gt; manager and --without-libnuma for static linking)
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; make all
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then I run my client app with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/foo/490_research/490/src/mpi.optimized_profiling/bin/mpirun -- 
</span><br>
<span class="quotelev1">&gt; hostfile ../hostfile -n 32 raytrace -finputs/car.env
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program runs well and each process completes succssfully (I can  
</span><br>
<span class="quotelev1">&gt; tell because all processes have now generated gmon.out successfully  
</span><br>
<span class="quotelev1">&gt; and a &quot;ps aux&quot; on other slave nodes (except the originating node)  
</span><br>
<span class="quotelev1">&gt; show that my program in slave nodes have already exited (not  
</span><br>
<span class="quotelev1">&gt; existant).  Therefore I think this may have something to do with  
</span><br>
<span class="quotelev1">&gt; mpirun,which hangs forever.
</span><br>
<p>Be aware that you may have problems with multiple processes writing  
<br>
to the same gmon.out, unless you're running each instance in a  
<br>
different directory (your command line doesn't indicate that you are,  
<br>
but that doesn't necessarily prove anything).
<br>
<p><span class="quotelev1">&gt; Can you see anything wrong in my ./configure command which explains  
</span><br>
<span class="quotelev1">&gt; the mpirun hang at the end of the run?  How can I fix it?
</span><br>
<p>No, everything looks fine.
<br>
<p>So you confirm that all raytrace instances have exited and all orteds  
<br>
have exited, leaving *only* mpirun runnning?
<br>
<p>There was a race condition about this at one point; Ralph -- can you  
<br>
comment further?
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
<li><strong>Next message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
<li><strong>Previous message:</strong> <a href="3415.php">Jeff Squyres: "Re: [OMPI users] v1.2.2 mca base unable to open pls/ras tm"</a>
<li><strong>In reply to:</strong> <a href="3409.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3423.php">Code Master: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Reply:</strong> <a href="3423.php">Code Master: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
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
