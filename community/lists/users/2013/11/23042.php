<?
$subject_val = "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 21:23:10 2013" -->
<!-- isoreceived="20131124022310" -->
<!-- sent="Sat, 23 Nov 2013 20:22:32 -0600" -->
<!-- isosent="20131124022232" -->
<!-- name="Pierre Jolivet" -->
<!-- email="jolivet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple" -->
<!-- id="1F786E6A-CEF7-47C5-B2DA-15FC5148BAB2_at_ann.jussieu.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAC39606-7908-469D-B171-3D174B4E1659_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple<br>
<strong>From:</strong> Pierre Jolivet (<em>jolivet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 21:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23043.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23044.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23044.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23045.php">Jed Brown: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominique,
<br>
It looks like you are compiling Open MPI with Homebrew. The flags they use in the formula when --enable-mpi-thread-multiple is wrong.
<br>
c.f. a similar problem with MacPorts <a href="https://lists.macosforge.org/pipermail/macports-tickets/2013-June/138145.html">https://lists.macosforge.org/pipermail/macports-tickets/2013-June/138145.html</a>.
<br>
<p>Pierre
<br>
<p>On Nov 23, 2013, at 4:56 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...well, it seems to work for me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 ./thread_init
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt; Calling MPI_Init_thread...
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread returned, provided = 3
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with the current 1.7 code branch, so it's possible something has been updated. You might try it with the next nightly tarball and see if it helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW: The correct configure option is --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My test program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, const char* argv[]) {
</span><br>
<span class="quotelev1">&gt;  int provided = -1;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Calling MPI_Init_thread...\n&quot;);
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread(NULL, NULL, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;MPI_Init_thread returned, provided = %d\n&quot;, provided);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 21, 2013, at 1:36 PM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm compiling the example code at the bottom of the following page that illustrates MPI_Init_Thread(): 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://mpi.deino.net/mpi_functions/mpi_init_thread.html">http://mpi.deino.net/mpi_functions/mpi_init_thread.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have OpenMPI 1.7.3 installed on OSX 10.8.5 with --enable-thread-multiple compiled with clang-425.0.28. I can reproduce the following on OSX 10.9 (clang-500) and another user was able to reproduce it on some flavor of Linux:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	$ mpicc -g -o testmpi testmpi.c -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; 	$ mpirun -n 2 ./testmpi
</span><br>
<span class="quotelev2">&gt;&gt; 	$ # hangs forever
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've no knowledge of how to debug MPI programs but it was suggested to me to do this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	$ mpirun -n 2 xterm -e gdb ./testmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the first xterm, I say 'run' in gdb, interrupt the program after a while and get a backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	^C
</span><br>
<span class="quotelev2">&gt;&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev2">&gt;&gt; 	0x00007fff99116322 in select$DARWIN_EXTSN ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	(gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; 	#0  0x00007fff99116322 in select$DARWIN_EXTSN ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#1  0x00000001001963c2 in select_dispatch ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#2  0x000000010018f178 in opal_libevent2021_event_base_loop ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#3  0x000000010015f059 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#4  0x0000000100019321 in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#5  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#6  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
</span><br>
<span class="quotelev2">&gt;&gt; 	(gdb) backtrace
</span><br>
<span class="quotelev2">&gt;&gt; 	#0  0x00007fff99116322 in select$DARWIN_EXTSN ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#1  0x00000001001963c2 in select_dispatch ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#2  0x000000010018f178 in opal_libevent2021_event_base_loop ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#3  0x000000010015f059 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#4  0x0000000100019321 in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#5  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#6  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
</span><br>
<span class="quotelev2">&gt;&gt; 	(gdb)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the second xterm window:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	^C
</span><br>
<span class="quotelev2">&gt;&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev2">&gt;&gt; 	0x00000001002e9a28 in mca_common_sm_init ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	(gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; 	#0  0x00000001002e9a28 in mca_common_sm_init ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#1  0x00000001002e5a38 in mca_mpool_sm_init ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; 	#2  0x00000001000793fa in mca_mpool_base_module_create ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#3  0x000000010053fb41 in mca_btl_sm_add_procs ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt; 	#4  0x0000000100535dfb in mca_bml_r2_add_procs ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; 	#5  0x000000010051e59c in mca_pml_ob1_add_procs ()
</span><br>
<span class="quotelev2">&gt;&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; 	#6  0x000000010001959b in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#7  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev2">&gt;&gt; 	#8  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
</span><br>
<span class="quotelev2">&gt;&gt; 	(gdb) 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The output of `ompi_info --parsable` is here: <a href="https://gist.github.com/7590040">https://gist.github.com/7590040</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dominique
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23043.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23041.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>In reply to:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23044.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23044.php">Dominique Orban: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23045.php">Jed Brown: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
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
