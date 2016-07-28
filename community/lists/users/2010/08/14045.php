<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 13:24:12 2010" -->
<!-- isoreceived="20100816172412" -->
<!-- sent="Mon, 16 Aug 2010 13:23:50 -0400" -->
<!-- isosent="20100816172350" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="1281979430.6786.7.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="20100816165315.C4E05F44093_at_asmx4.McGill.CA" -->
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
<strong>Date:</strong> 2010-08-16 13:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14046.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14044.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I've reproduced your test here, with the same results.  Moreover, if I
<br>
put the nodes with rank&gt;0 into a blocking MPI call (MPI_Bcast or
<br>
MPI_Barrier) I still get the same behavior; namely, rank 0's calling
<br>
abort() generates a core file and leads to termination, which is the
<br>
behavior I want.  I'll look at my code a bit more, but the only
<br>
difference I see now is that in my code a floating point exception
<br>
triggers a signal-handler that calls abort().   I don't see why that
<br>
should be different from your test.
<br>
<p>Thanks for your help.
<br>
<p>David
<br>
<p>On Mon, 2010-08-16 at 09:54 -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FWIW, I'm unable to replicate your behavior.  This is with Open MPI 1.4.2 on RHEL5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [9:52] svbu-mpi:~/mpi % cat abort.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     if (0 == rank) {
</span><br>
<span class="quotelev1">&gt;         abort();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Rank %d sleeping...\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;     sleep(600);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Rank %d finalizing...\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [9:52] svbu-mpi:~/mpi % mpicc abort.c -o abort
</span><br>
<span class="quotelev1">&gt; [9:52] svbu-mpi:~/mpi % ls -l core*
</span><br>
<span class="quotelev1">&gt; ls: No match.
</span><br>
<span class="quotelev1">&gt; [9:52] svbu-mpi:~/mpi % mpirun -np 4 --bynode --host svbu-mpi055,svbu-mpi056 ./abort
</span><br>
<span class="quotelev1">&gt; Rank 1 sleeping...
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] [ 0] /lib64/libpthread.so.0 [0x2b45caac87c0]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x2b45cad05265]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] [ 2] /lib64/libc.so.6(abort+0x110) [0x2b45cad06d10]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] [ 3] ./abort(main+0x36) [0x4008ee]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] [ 4] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2b45cacf2994]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] [ 5] ./abort [0x400809]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi055:03991] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Rank 3 sleeping...
</span><br>
<span class="quotelev1">&gt; Rank 2 sleeping...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 3991 on node svbu-mpi055 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [9:52] svbu-mpi:~/mpi % ls -l core*
</span><br>
<span class="quotelev1">&gt; -rw------- 1 jsquyres eng5 26009600 Aug 16 09:52 core.abort-1281977540-3991
</span><br>
<span class="quotelev1">&gt; [9:52] svbu-mpi:~/mpi % file core.abort-1281977540-3991 
</span><br>
<span class="quotelev1">&gt; core.abort-1281977540-3991: ELF 64-bit LSB core file AMD x86-64, version 1 (SYSV), SVR4-style, from 'abort'
</span><br>
<span class="quotelev1">&gt; [9:52] svbu-mpi:~/mpi % 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see that all processes die immediately, and I get a corefile from the process that called abort().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2010, at 9:25 AM, David Ronis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've tried both--as you said, MPI_Abort doesn't drop a core file, but
</span><br>
<span class="quotelev2">&gt; &gt; does kill off the entire MPI job.   abort() drops core when I'm running
</span><br>
<span class="quotelev2">&gt; &gt; on 1 processor, but not in a multiprocessor run.  In addition, a node
</span><br>
<span class="quotelev2">&gt; &gt; calling abort() doesn't lead to the entire run being killed off.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt; O
</span><br>
<span class="quotelev2">&gt; &gt; n Mon, 2010-08-16 at 08:51 -0700, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 13, 2010, at 12:53 PM, David Ronis wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm using mpirun and the nodes are all on the same machin (a 8 cpu box
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with an intel i7).  coresize is unlimited:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ulimit -a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That looks good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In reviewing the email thread, it's not entirely clear: are you calling abort() or MPI_Abort()?  MPI_Abort() won't drop a core file.  abort() should.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14046.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14044.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
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
