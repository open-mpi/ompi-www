<?
$subject_val = "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 03:10:57 2013" -->
<!-- isoreceived="20130619071057" -->
<!-- sent="Wed, 19 Jun 2013 09:10:45 +0200" -->
<!-- isosent="20130619071045" -->
<!-- name="Elias Rudberg" -->
<!-- email="elias.rudberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple" -->
<!-- id="20130619091045.173921ufgucpenw5_at_webmail.uu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130618154953.11172nm56p616ttt_at_webmail.uu.se" -->
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
<strong>Date:</strong> 2013-06-19 03:10:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22130.php">Sergio Maffioletti: "[OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22128.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22123.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has now been solved.
<br>
<p>The solution (as suggested by Ralph) is to use the following four  
<br>
configure options together:
<br>
./configure --enable_event_thread_support --enable_opal_multi_threads  
<br>
--enable_orte_progress_threads --enable_mpi_thread_multiple
<br>
<p>So, apparently the --enable_mpi_thread_multiple option cannot be used  
<br>
by itself, it must be combined with the other three options, otherwise  
<br>
MPI_Init_thread will hang.
<br>
<p>/ Elias
<br>
<p><p>Quoting Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now tried using --enable-opal-multi-threads (I added an &quot;s&quot; in the  
</span><br>
<span class="quotelev1">&gt; end, since &quot;--enable-opal-multi-thread&quot; was not recognized by the  
</span><br>
<span class="quotelev1">&gt; configure script).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, my test code still hangs in the same way as before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear, I now configure like this:
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but the problem remains: MPI_Init_thread still hangs when trying to  
</span><br>
<span class="quotelev1">&gt; run the test case with -np 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other ideas?
</span><br>
<span class="quotelev1">&gt; Are there other configure options that must be used together with  
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple to make it work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...well, your code runs fine for me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralphs-iMac:mpi rhc$ mpirun -n 2 ./thread_init
</span><br>
<span class="quotelev2">&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev2">&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev2">&gt;&gt; Ralphs-iMac:mpi rhc$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the key, however, is that you also have to configure with  
</span><br>
<span class="quotelev2">&gt;&gt; --enable-opal-multi-thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 16, 2013, at 8:54 AM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to report what seems to be a bug in MPI_Init_thread  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in OpenMPI 1.7.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The bug can be reproduced with the following test program  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (test_mpi_thread_support.c):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, const char* argv[]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int provided = -1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;Calling MPI_Init_thread...\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init_thread(NULL, NULL, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf(&quot;MPI_Init_thread returned, provided = %d\n&quot;, provided);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When trying to run this when OpenMPI was configured with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-thread-multiple, the program hangs when trying to run  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using anything more than one process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steps I use to reproduce this in Ubuntu:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) Download openmpi-1.7.1.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2) Configure like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-mpi-thread-multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (3) make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (4) Compile test program like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc test_mpi_thread_support.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (5) Run like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then you see the following two lines of output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And then it hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init_thread did not hang in earlier OpenMPI versions (for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example it worked in 1.5.* and 1.6.*), so it seems like a bug  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; introduced in 1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The description above shows how I reproduce this in Ubuntu on my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local desktop computer, but the same problem exists for the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.7.1 installation at the UPPMAX computer center where I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wan to run my code in the end. I don't know all details about how  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they installed it there, but I know they set  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-thread-multiple. So maybe it hangs in 1.7.1 on any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer as long as you use MPI_THREAD_MULTIPLE. At least I have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not seen it work anywhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you agree that this is a bug, or am I doing something wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Elias
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22130.php">Sergio Maffioletti: "[OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22128.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="22123.php">Elias Rudberg: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="22131.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
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
