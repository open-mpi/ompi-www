<?
$subject_val = "[OMPI users] Programming help required in Interleaving computation+communication !";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 15:03:11 2009" -->
<!-- isoreceived="20091119200311" -->
<!-- sent="Fri, 20 Nov 2009 01:33:07 +0530" -->
<!-- isosent="20091119200307" -->
<!-- name="souvik bhattacherjee" -->
<!-- email="souvik99_at_[hidden]" -->
<!-- subject="[OMPI users] Programming help required in Interleaving computation+communication !" -->
<!-- id="b568ee700911191203j58927ac8m2c5d5265fc89afe9_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Programming help required in Interleaving computation+communication !<br>
<strong>From:</strong> souvik bhattacherjee (<em>souvik99_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 15:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11241.php">Terry Dontje: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<li><strong>Reply:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<li><strong>Reply:</strong> <a href="11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm trying to interleave computation with communication. As a result, I have
<br>
resorted to using MPI with POSIX threads. Primarily, I am trying to
<br>
communicate a partial vector v3 while computing an inner product v1*v2 (mod
<br>
q). To give you an idea of the platform and the libraries:
<br>
1. Intel dual-socket quadcore m/c (total 8 cores/machine)
<br>
2. openmpi 1.3.3 (separate installations on ict6 and ict4 machines)
<br>
3. lib64gmp3 4.3.1
<br>
4. gcc 4.3.2
<br>
5. interconnect: Gigabit ethernet
<br>
<p>I have used a single thread for most of the communication and the remaining
<br>
7 threads for computation. Perhaps, this portion of the code has gone wrong
<br>
somewhere and the program terminates with the following error message.
<br>
<p>$ mpicc test-vecvecmul.c -lgmp -pthread -Wall -o tvmul
<br>
<p>$ mpirun --prefix /usr/local/openmpi-1.3.3/ -np 2 --host ict6,ict4 ./tvmul
<br>
<p>[err] event_queue_remove: 0xc1d6b0(fd 10) not on queue 8
<br>
[err] event_queue_remove: 0xc1d6b0(fd 10) not on queue 8
<br>
[ict6][[21545,1],0][../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 17154 on
<br>
node ict4 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>The code is attached along with. Please suggest where in the code have I
<br>
gone wrong. Also, a more efficient way of interleaving (if exists) is
<br>
something that I am interested in.
<br>
<p>**** Can anyone suggest a good tutorial sort of thing where I can get to
<br>
know about programming in MPI with POSIX threads/OpenMP.
<br>
<p>Regards,
<br>
<pre>
-- 
Souvik

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11240/test-vecvecmul.c">test-vecvecmul.c</a>
</ul>
<!-- attachment="test-vecvecmul.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11241.php">Terry Dontje: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>Previous message:</strong> <a href="11239.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] exceedingly virtual memory consumption of MPI environment if higher-setting &quot;ulimit -s&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<li><strong>Reply:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<li><strong>Reply:</strong> <a href="11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
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
