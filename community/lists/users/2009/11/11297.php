<?
$subject_val = "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 20:02:28 2009" -->
<!-- isoreceived="20091201010228" -->
<!-- sent="Mon, 30 Nov 2009 20:02:23 -0500" -->
<!-- isosent="20091201010223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Programming help required in Interleavingcomputation+communication !" -->
<!-- id="9F3DC4CF-650B-44A8-9BA7-D97DA9EF77A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b568ee700911191203j58927ac8m2c5d5265fc89afe9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Programming help required in Interleavingcomputation+communication !<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 20:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11298.php">amjad ali: "[OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11296.php">Jeff Squyres: "Re: [OMPI users] How to install openmpi to suportthread_level_multiple?"</a>
<li><strong>In reply to:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With a quick glance through your code, it doesn't look like there is  
<br>
synchronization between the (Tid == NCORES-1) thread and the other  
<br>
threads.  Is that intentional?
<br>
<p><p>On Nov 19, 2009, at 3:03 PM, souvik bhattacherjee wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to interleave computation with communication. As a  
</span><br>
<span class="quotelev1">&gt; result, I have resorted to using MPI with POSIX threads. Primarily,  
</span><br>
<span class="quotelev1">&gt; I am trying to communicate a partial vector v3 while computing an  
</span><br>
<span class="quotelev1">&gt; inner product v1*v2 (mod q). To give you an idea of the platform and  
</span><br>
<span class="quotelev1">&gt; the libraries:
</span><br>
<span class="quotelev1">&gt; 1. Intel dual-socket quadcore m/c (total 8 cores/machine)
</span><br>
<span class="quotelev1">&gt; 2. openmpi 1.3.3 (separate installations on ict6 and ict4 machines)
</span><br>
<span class="quotelev1">&gt; 3. lib64gmp3 4.3.1
</span><br>
<span class="quotelev1">&gt; 4. gcc 4.3.2
</span><br>
<span class="quotelev1">&gt; 5. interconnect: Gigabit ethernet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have used a single thread for most of the communication and the  
</span><br>
<span class="quotelev1">&gt; remaining 7 threads for computation. Perhaps, this portion of the  
</span><br>
<span class="quotelev1">&gt; code has gone wrong somewhere and the program terminates with the  
</span><br>
<span class="quotelev1">&gt; following error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc test-vecvecmul.c -lgmp -pthread -Wall -o tvmul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict6,ict4 ./ 
</span><br>
<span class="quotelev1">&gt; tvmul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [err] event_queue_remove: 0xc1d6b0(fd 10) not on queue 8
</span><br>
<span class="quotelev1">&gt; [err] event_queue_remove: 0xc1d6b0(fd 10) not on queue 8
</span><br>
<span class="quotelev1">&gt; [ict6][[21545,1],0][../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c: 
</span><br>
<span class="quotelev1">&gt; 216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed:  
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 17154 on
</span><br>
<span class="quotelev1">&gt; node ict4 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code is attached along with. Please suggest where in the code  
</span><br>
<span class="quotelev1">&gt; have I gone wrong. Also, a more efficient way of interleaving (if  
</span><br>
<span class="quotelev1">&gt; exists) is something that I am interested in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **** Can anyone suggest a good tutorial sort of thing where I can  
</span><br>
<span class="quotelev1">&gt; get to know about programming in MPI with POSIX threads/OpenMP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Souvik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;test-vecvecmul.c&gt;_______________________________________________
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11298.php">amjad ali: "[OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11296.php">Jeff Squyres: "Re: [OMPI users] How to install openmpi to suportthread_level_multiple?"</a>
<li><strong>In reply to:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<!-- nextthread="start" -->
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
