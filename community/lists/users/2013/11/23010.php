<?
$subject_val = "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 21 16:36:12 2013" -->
<!-- isoreceived="20131121213612" -->
<!-- sent="Thu, 21 Nov 2013 16:36:14 -0500" -->
<!-- isosent="20131121213614" -->
<!-- name="Dominique Orban" -->
<!-- email="dominique.orban_at_[hidden]" -->
<!-- subject="[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple" -->
<!-- id="9A634B41-B9CB-4B0C-913E-E19AA7B876C5_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple<br>
<strong>From:</strong> Dominique Orban (<em>dominique.orban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-21 16:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23011.php">Pierre Jolivet: "[OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23009.php">Venkat Reddy: "[OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm compiling the example code at the bottom of the following page that illustrates MPI_Init_Thread(): 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mpi.deino.net/mpi_functions/mpi_init_thread.html">http://mpi.deino.net/mpi_functions/mpi_init_thread.html</a>
<br>
<p>I have OpenMPI 1.7.3 installed on OSX 10.8.5 with --enable-thread-multiple compiled with clang-425.0.28. I can reproduce the following on OSX 10.9 (clang-500) and another user was able to reproduce it on some flavor of Linux:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpicc -g -o testmpi testmpi.c -lmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -n 2 ./testmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ # hangs forever
<br>
<p>I've no knowledge of how to debug MPI programs but it was suggested to me to do this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -n 2 xterm -e gdb ./testmpi
<br>
<p>In the first xterm, I say 'run' in gdb, interrupt the program after a while and get a backtrace:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program received signal SIGINT, Interrupt.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x00007fff99116322 in select$DARWIN_EXTSN ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#0  0x00007fff99116322 in select$DARWIN_EXTSN ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#1  0x00000001001963c2 in select_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#2  0x000000010018f178 in opal_libevent2021_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#3  0x000000010015f059 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#4  0x0000000100019321 in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#5  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#6  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) backtrace
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#0  0x00007fff99116322 in select$DARWIN_EXTSN ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/lib/system/libsystem_kernel.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#1  0x00000001001963c2 in select_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#2  0x000000010018f178 in opal_libevent2021_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#3  0x000000010015f059 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libopen-pal.6.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#4  0x0000000100019321 in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#5  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#6  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb)
<br>
<p>In the second xterm window:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program received signal SIGINT, Interrupt.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x00000001002e9a28 in mca_common_sm_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#0  0x00000001002e9a28 in mca_common_sm_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/libmca_common_sm.4.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#1  0x00000001002e5a38 in mca_mpool_sm_init ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_mpool_sm.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#2  0x00000001000793fa in mca_mpool_base_module_create ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#3  0x000000010053fb41 in mca_btl_sm_add_procs ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_btl_sm.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#4  0x0000000100535dfb in mca_bml_r2_add_procs ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_bml_r2.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#5  0x000000010051e59c in mca_pml_ob1_add_procs ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/Cellar/open-mpi/1.7.3/lib/openmpi/mca_pml_ob1.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#6  0x000000010001959b in ompi_mpi_init () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#7  0x00000001000334da in MPI_Init_thread () from /usr/local/lib/libmpi.1.dylib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#8  0x0000000100000ddb in main (argc=1, argv=0x7fff5fbfedc0) at testmpi.c:9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gdb) 
<br>
<p><p>The output of `ompi_info --parsable` is here: <a href="https://gist.github.com/7590040">https://gist.github.com/7590040</a>
<br>
<p>Thanks in advance.
<br>
<p>Dominique
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23011.php">Pierre Jolivet: "[OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Previous message:</strong> <a href="23009.php">Venkat Reddy: "[OMPI users] Request for help/suggestion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>Reply:</strong> <a href="23039.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
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
