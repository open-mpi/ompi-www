<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 13 23:44:08 2006" -->
<!-- isoreceived="20061014034408" -->
<!-- sent="Sat, 14 Oct 2006 09:13:57 +0530" -->
<!-- isosent="20061014034357" -->
<!-- name="Aleph One" -->
<!-- email="perfektionist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_accept: accept() failed with errno 24" -->
<!-- id="4adf6df80610132043t74b8949dsb64723840b623ff3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45300097.6000502_at_llnl.gov" -->
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
<strong>From:</strong> Aleph One (<em>perfektionist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 23:43:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1975.php">Adam Moody: "[OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
errno 24 means &quot;Too many open files&quot;.
<br>
Looks like you may be hitting the upper limit for the number of open file
<br>
descriptors.
<br>
Check /proc/sys/fs/file-max and see if you need to bump it up.
<br>
Not sure if you need to bump up &quot;ulimit -n&quot;, but worth a try.
<br>
<p>-Aleph
<br>
<p>On 10/14/06, Adam Moody &lt;moody20_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I'm trying to run a 500 node job using mpirun / slurm with OpenMPI-1.1.1
</span><br>
<span class="quotelev1">&gt; and see the following errors at startup:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rhea342:09444] [0,1,318]-[0,0,0] mca_oob_tcp_peer_recv_blocking: recv()
</span><br>
<span class="quotelev1">&gt; failed with errno=104
</span><br>
<span class="quotelev1">&gt; [rhea32:13463] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [rhea32:13463] mca_oob_tcp_accept: accept() failed with errno 24.
</span><br>
<span class="quotelev1">&gt; [rhea326:09641] [0,1,302]-[0,0,0] mca_oob_tcp_peer_recv_blocking: recv()
</span><br>
<span class="quotelev1">&gt; failed with errno=104
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm starting the job with the following commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; srun -N 500 -A
</span><br>
<span class="quotelev1">&gt; mpirun -np 500 -bynode hello_mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Smaller jobs around 50 nodes run just fine.  Any ideas?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Adam Moody
</span><br>
<span class="quotelev1">&gt; LLNL
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1979.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1977.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1975.php">Adam Moody: "[OMPI users] mca_oob_tcp_accept: accept() failed with errno 24"</a>
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
