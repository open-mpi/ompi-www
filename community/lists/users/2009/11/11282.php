<?
$subject_val = "Re: [OMPI users] Programming help required in Interleaving	computation+communication !";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 06:48:03 2009" -->
<!-- isoreceived="20091125114803" -->
<!-- sent="Wed, 25 Nov 2009 12:47:58 +0100" -->
<!-- isosent="20091125114758" -->
<!-- name="Atle Rudshaug" -->
<!-- email="atle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Programming help required in Interleaving	computation+communication !" -->
<!-- id="4B0D196E.5010501_at_numericalrocks.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Programming help required in Interleaving	computation+communication !<br>
<strong>From:</strong> Atle Rudshaug (<em>atle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-25 06:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11283.php">Qing Pang: "[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Previous message:</strong> <a href="11281.php">Ashley Pittman: "Re: [OMPI users] Help tracing casue of readv errors"</a>
<li><strong>In reply to:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
souvik bhattacherjee wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to interleave computation with communication. As a result, 
</span><br>
<span class="quotelev1">&gt; I have resorted to using MPI with POSIX threads. Primarily, I am 
</span><br>
<span class="quotelev1">&gt; trying to communicate a partial vector v3 while computing an inner 
</span><br>
<span class="quotelev1">&gt; product v1*v2 (mod q). To give you an idea of the platform and the 
</span><br>
<span class="quotelev1">&gt; libraries:
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
<span class="quotelev1">&gt; remaining 7 threads for computation. Perhaps, this portion of the code 
</span><br>
<span class="quotelev1">&gt; has gone wrong somewhere and the program terminates with the following 
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc test-vecvecmul.c -lgmp -pthread -Wall -o tvmul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict6,ict4 ./tvmul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [err] event_queue_remove: 0xc1d6b0(fd 10) not on queue 8
</span><br>
<span class="quotelev1">&gt; [err] event_queue_remove: 0xc1d6b0(fd 10) not on queue 8
</span><br>
<span class="quotelev1">&gt; [ict6][[21545,1],0][../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] 
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
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
<span class="quotelev1">&gt; The code is attached along with. Please suggest where in the code have 
</span><br>
<span class="quotelev1">&gt; I gone wrong. Also, a more efficient way of interleaving (if exists) 
</span><br>
<span class="quotelev1">&gt; is something that I am interested in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **** Can anyone suggest a good tutorial sort of thing where I can get 
</span><br>
<span class="quotelev1">&gt; to know about programming in MPI with POSIX threads/OpenMP.
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
I got a similar error when using non-blocking communication on large 
<br>
datasets. I eventually had to switch to blocking communication... Try to 
<br>
make the code work with blocking communication first and see if that 
<br>
removes your error, then re-implement it from there with non-blocking 
<br>
again. Doesn't MPI have decent threading performance if the processes 
<br>
are located on the same node? Could you perhaps use MPI only?
<br>
<p>- Atle
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11283.php">Qing Pang: "[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Previous message:</strong> <a href="11281.php">Ashley Pittman: "Re: [OMPI users] Help tracing casue of readv errors"</a>
<li><strong>In reply to:</strong> <a href="11240.php">souvik bhattacherjee: "[OMPI users] Programming help required in Interleaving computation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
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
