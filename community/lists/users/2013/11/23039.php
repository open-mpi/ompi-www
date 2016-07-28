<?
$subject_val = "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 17:56:23 2013" -->
<!-- isoreceived="20131123225623" -->
<!-- sent="Sat, 23 Nov 2013 14:56:10 -0800" -->
<!-- isosent="20131123225610" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple" -->
<!-- id="BAC39606-7908-469D-B171-3D174B4E1659_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A634B41-B9CB-4B0C-913E-E19AA7B876C5_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 17:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23040.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23038.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23010.php">Dominique Orban: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23042.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23042.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, it seems to work for me:
<br>
<p>$ mpirun -n 4 ./thread_init
<br>
Calling MPI_Init_thread...
<br>
Calling MPI_Init_thread...
<br>
Calling MPI_Init_thread...
<br>
Calling MPI_Init_thread...
<br>
MPI_Init_thread returned, provided = 3
<br>
MPI_Init_thread returned, provided = 3
<br>
MPI_Init_thread returned, provided = 3
<br>
MPI_Init_thread returned, provided = 3
<br>
$
<br>
<p>This is with the current 1.7 code branch, so it's possible something has been updated. You might try it with the next nightly tarball and see if it helps.
<br>
<p>BTW: The correct configure option is --enable-mpi-thread-multiple
<br>
<p>My test program:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main(int argc, const char* argv[]) {
<br>
&nbsp;int provided = -1;
<br>
&nbsp;printf(&quot;Calling MPI_Init_thread...\n&quot;);
<br>
&nbsp;MPI_Init_thread(NULL, NULL, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
&nbsp;printf(&quot;MPI_Init_thread returned, provided = %d\n&quot;, provided);
<br>
&nbsp;MPI_Finalize();
<br>
&nbsp;return 0;
<br>
}
<br>
<p><p>On Nov 21, 2013, at 1:36 PM, Dominique Orban &lt;dominique.orban_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm compiling the example code at the bottom of the following page that illustrates MPI_Init_Thread(): 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	<a href="http://mpi.deino.net/mpi_functions/mpi_init_thread.html">http://mpi.deino.net/mpi_functions/mpi_init_thread.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have OpenMPI 1.7.3 installed on OSX 10.8.5 with --enable-thread-multiple compiled with clang-425.0.28. I can reproduce the following on OSX 10.9 (clang-500) and another user was able to reproduce it on some flavor of Linux:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	$ mpicc -g -o testmpi testmpi.c -lmpi
</span><br>
<span class="quotelev1">&gt; 	$ mpirun -n 2 ./testmpi
</span><br>
<span class="quotelev1">&gt; 	$ # hangs forever
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've no knowledge of how to debug MPI programs but it was suggested to me to do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	$ mpirun -n 2 xterm -e gdb ./testmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the first xterm, I say 'run' in gdb, interrupt the program after a while and get a backtrace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	^C
</span><br>
<span class="quotelev1">&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev1">&gt; 	0x00007fff99116322 in select$DARWIN_EXTSN ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev1">&gt; 	(gdb) where
</span><br>
<span class="quotelev1">&gt; 	#0  0x00007fff99116322 in select$DARWIN_EXTSN ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev1">&gt; 	#1  0x00000001001963c2 in select_dispatch ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev1">&gt; 	#2  0x000000010018f178 in opal_libevent2021_event_base_loop ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev1">&gt; 	#3  0x000000010015f059 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev1">&gt; 	#4  0x0000000100019321 in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev1">&gt; 	#5  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev1">&gt; 	#6  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
</span><br>
<span class="quotelev1">&gt; 	(gdb) backtrace
</span><br>
<span class="quotelev1">&gt; 	#0  0x00007fff99116322 in select$DARWIN_EXTSN ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/lib/system/libsystem_kernel.dylib
</span><br>
<span class="quotelev1">&gt; 	#1  0x00000001001963c2 in select_dispatch ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev1">&gt; 	#2  0x000000010018f178 in opal_libevent2021_event_base_loop ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev1">&gt; 	#3  0x000000010015f059 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
</span><br>
<span class="quotelev1">&gt; 	#4  0x0000000100019321 in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev1">&gt; 	#5  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev1">&gt; 	#6  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
</span><br>
<span class="quotelev1">&gt; 	(gdb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the second xterm window:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	^C
</span><br>
<span class="quotelev1">&gt; 	Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev1">&gt; 	0x00000001002e9a28 in mca_common_sm_init ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
</span><br>
<span class="quotelev1">&gt; 	(gdb) where
</span><br>
<span class="quotelev1">&gt; 	#0  0x00000001002e9a28 in mca_common_sm_init ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
</span><br>
<span class="quotelev1">&gt; 	#1  0x00000001002e5a38 in mca_mpool_sm_init ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev1">&gt; 	#2  0x00000001000793fa in mca_mpool_base_module_create ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev1">&gt; 	#3  0x000000010053fb41 in mca_btl_sm_add_procs ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; 	#4  0x0000000100535dfb in mca_bml_r2_add_procs ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; 	#5  0x000000010051e59c in mca_pml_ob1_add_procs ()
</span><br>
<span class="quotelev1">&gt; 	   from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; 	#6  0x000000010001959b in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev1">&gt; 	#7  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
</span><br>
<span class="quotelev1">&gt; 	#8  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
</span><br>
<span class="quotelev1">&gt; 	(gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of `ompi_info --parsable` is here: <a href="https://gist.github.com/7590040">https://gist.github.com/7590040</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dominique
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23040.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23038.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23010.php">Dominique Orban: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23042.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23042.php">Pierre Jolivet: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
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
