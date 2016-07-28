<?
$subject_val = "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 09:50:03 2013" -->
<!-- isoreceived="20130618135003" -->
<!-- sent="Tue, 18 Jun 2013 15:49:53 +0200" -->
<!-- isosent="20130618134953" -->
<!-- name="Elias Rudberg" -->
<!-- email="elias.rudberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple" -->
<!-- id="20130618154953.11172nm56p616ttt_at_webmail.uu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0406688D-3B9A-402C-B503-F3F5BF6A7BA3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple<br>
<strong>From:</strong> Elias Rudberg (<em>elias.rudberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 09:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Previous message:</strong> <a href="22122.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I now tried using --enable-opal-multi-threads (I added an &quot;s&quot; in the  
<br>
end, since &quot;--enable-opal-multi-thread&quot; was not recognized by the  
<br>
configure script).
<br>
<p>However, my test code still hangs in the same way as before.
<br>
<p>To be clear, I now configure like this:
<br>
./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
<br>
<p>but the problem remains: MPI_Init_thread still hangs when trying to  
<br>
run the test case with -np 2.
<br>
<p>Any other ideas?
<br>
Are there other configure options that must be used together with  
<br>
--enable-mpi-thread-multiple to make it work?
<br>
<p>Best regards,
<br>
Elias
<br>
<p><p>Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hmmm...well, your code runs fine for me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralphs-iMac:mpi rhc$ mpirun -n 2 ./thread_init
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt; Ralphs-iMac:mpi rhc$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the key, however, is that you also have to configure with  
</span><br>
<span class="quotelev1">&gt; --enable-opal-multi-thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2013, at 8:54 AM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to report what seems to be a bug in MPI_Init_thread in  
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.7.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The bug can be reproduced with the following test program  
</span><br>
<span class="quotelev2">&gt;&gt; (test_mpi_thread_support.c):
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, const char* argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;  int provided = -1;
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Calling MPI_Init_thread...\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init_thread(NULL, NULL, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;MPI_Init_thread returned, provided = %d\n&quot;, provided);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When trying to run this when OpenMPI was configured with  
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple, the program hangs when trying to run  
</span><br>
<span class="quotelev2">&gt;&gt; using anything more than one process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steps I use to reproduce this in Ubuntu:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1) Download openmpi-1.7.1.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (2) Configure like this:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (3) make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (4) Compile test program like this:
</span><br>
<span class="quotelev2">&gt;&gt; mpicc test_mpi_thread_support.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (5) Run like this:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Then you see the following two lines of output:
</span><br>
<span class="quotelev2">&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev2">&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev2">&gt;&gt; And then it hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init_thread did not hang in earlier OpenMPI versions (for  
</span><br>
<span class="quotelev2">&gt;&gt; example it worked in 1.5.* and 1.6.*), so it seems like a bug  
</span><br>
<span class="quotelev2">&gt;&gt; introduced in 1.7.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The description above shows how I reproduce this in Ubuntu on my  
</span><br>
<span class="quotelev2">&gt;&gt; local desktop computer, but the same problem exists for the OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.1 installation at the UPPMAX computer center where I wan to run  
</span><br>
<span class="quotelev2">&gt;&gt; my code in the end. I don't know all details about how they  
</span><br>
<span class="quotelev2">&gt;&gt; installed it there, but I know they set  
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple. So maybe it hangs in 1.7.1 on any  
</span><br>
<span class="quotelev2">&gt;&gt; computer as long as you use MPI_THREAD_MULTIPLE. At least I have  
</span><br>
<span class="quotelev2">&gt;&gt; not seen it work anywhere.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you agree that this is a bug, or am I doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<li><strong>Previous message:</strong> <a href="22122.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22129.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
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
