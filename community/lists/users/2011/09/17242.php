<?
$subject_val = "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 22:44:31 2011" -->
<!-- isoreceived="20110913024431" -->
<!-- sent="Mon, 12 Sep 2011 19:44:25 -0700 (PDT)" -->
<!-- isosent="20110913024425" -->
<!-- name="Steve Jones" -->
<!-- email="stevejones_at_[hidden]" -->
<!-- subject="[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions" -->
<!-- id="980556946.263985.1315881865124.JavaMail.root_at_zm09.stanford.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="143905986.263715.1315880804559.JavaMail.root_at_zm09.stanford.edu" -->
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
<strong>Subject:</strong> [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions<br>
<strong>From:</strong> Steve Jones (<em>stevejones_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 22:44:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17243.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>We've run into an IO issue with 1.4.1 and earlier versions. We're able to reproduce the issue in around 120 lines of code to help, I'd like to find if there's something we're simply doing incorrectly with the build or if it's in fact a known bug. I've included the following in order:
<br>
<p>1. Configure options used on all versions tested
<br>
2. Successful run on 1.4.3
<br>
3. Failed run on 1.3.1
<br>
4. Failed run on 1.4.1
<br>
5. Source code of test
<br>
6. ompi_info
<br>
<p>We're running this on a single node with 2 processes.
<br>
<p>An additional thing to note is we can load the 1.4.2 or 1.4.3 environment and successfully run the 1.4.1 or 1.3.1 executable.
<br>
<p>Thanks.
<br>
<p>Steve
<br>
<p><p>1.
<br>
./configure --prefix=/share/apps/openmpi/1.4.1/intel-12 --with-tm=/opt/torque --enable-debug --with-openib --with-wrapper-cflags=&quot;-shared-intel&quot; --with-wrapper-cxxflags=&quot;-shared-intel&quot; --with-wrapper-fflags=&quot;-shared-intel&quot; --with-wrapper-fcflags=&quot;-shared-intel&quot;
<br>
<p>2.
<br>
[smjones_at_compute-1-1 ~]$ mpiexec codes/cti/tests/iotest/iotest.openmpi-1.4.3 10 
<br>
iotest running on mpi_size: 2
<br>
writing 10 ints to file iotest.dat...
<br>
rank 0 writing: 0 to 4
<br>
rank 1 writing: 5 to 9
<br>
reading 10 ints from file iotest.dat...
<br>
just read: 0 0
<br>
just read: 1 1
<br>
just read: 2 2
<br>
just read: 3 3
<br>
just read: 4 4
<br>
just read: 5 5
<br>
just read: 6 6
<br>
just read: 7 7
<br>
just read: 8 8
<br>
just read: 9 9
<br>
File looks good.
<br>
<p><p>3.
<br>
[smjones_at_compute-1-1 ~]$ mpiexec codes/cti/tests/iotest/iotest.openmpi-1.3.1 100
<br>
iotest running on mpi_size: 2
<br>
writing 100 ints to file iotest.dat...
<br>
rank 0 writing: 0 to 49
<br>
rank 1 writing: 50 to 99
<br>
reading 100 ints from file iotest.dat...
<br>
just read: 0 50
<br>
iotest.openmpi-1.3.1: iotest.cpp:105: int main(int, char**): Assertion `ibuf == i' failed.
<br>
[compute-1-1:18731] *** Process received signal ***
<br>
[compute-1-1:18731] Signal: Aborted (6)
<br>
[compute-1-1:18731] Signal code:  (-6)
<br>
[compute-1-1:18731] [ 0] /lib64/libpthread.so.0 [0x357800e7c0]
<br>
[compute-1-1:18731] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3577830265]
<br>
[compute-1-1:18731] [ 2] /lib64/libc.so.6(abort+0x110) [0x3577831d10]
<br>
[compute-1-1:18731] [ 3] /lib64/libc.so.6(__assert_fail+0xf6) [0x35778296e6]
<br>
[compute-1-1:18731] [ 4] codes/cti/tests/iotest/iotest.openmpi-1.3.1(main+0x3db) [0x408e7f]
<br>
[compute-1-1:18731] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x357781d994]
<br>
[compute-1-1:18731] [ 6] codes/cti/tests/iotest/iotest.openmpi-1.3.1(__gxx_personality_v0+0x139) [0x408989]
<br>
[compute-1-1:18731] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 18731 on node compute-1-1.local exited on signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p>4.
<br>
[smjones_at_compute-1-1 ~]$ mpiexec codes/cti/tests/iotest/iotest.openmpi-1.4.1 100
<br>
iotest running on mpi_size: 2
<br>
writing 100 ints to file iotest.dat...
<br>
rank 1 writing: 50 to 99
<br>
rank 0 writing: 0 to 49
<br>
reading 100 ints from file iotest.dat...
<br>
just read: 0 50
<br>
iotest.openmpi-1.4.1: iotest.cpp:105: int __unixcall main(int, char **): Assertion `ibuf == i' failed.
<br>
[compute-1-1:19057] *** Process received signal ***
<br>
[compute-1-1:19057] Signal: Aborted (6)
<br>
[compute-1-1:19057] Signal code:  (-6)
<br>
[compute-1-1:19057] [ 0] /lib64/libpthread.so.0 [0x357800e7c0]
<br>
[compute-1-1:19057] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3577830265]
<br>
[compute-1-1:19057] [ 2] /lib64/libc.so.6(abort+0x110) [0x3577831d10]
<br>
[compute-1-1:19057] [ 3] /lib64/libc.so.6(__assert_fail+0xf6) [0x35778296e6]
<br>
[compute-1-1:19057] [ 4] codes/cti/tests/iotest/iotest.openmpi-1.4.1(main+0x472) [0x401ab2]
<br>
[compute-1-1:19057] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x357781d994]
<br>
[compute-1-1:19057] [ 6] codes/cti/tests/iotest/iotest.openmpi-1.4.1(__gxx_personality_v0+0x41) [0x401589]
<br>
[compute-1-1:19057] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 19057 on node compute-1-1.local exited on signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p>5.
<br>
[smjones_at_frontend iotest]$ cat iotest.cpp 
<br>
#include &lt;iostream&gt;
<br>
#include &lt;math.h&gt; 
<br>
#include &lt;assert.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>using std::cout;
<br>
using std::cerr;
<br>
using std::endl;
<br>
<p>// iotest
<br>
// This simple test reproduces a problem with writing in MPI_Type_indexed in openmpi.
<br>
// 
<br>
<p>int main(int argc,char * argv[]) {
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;int mpi_size;
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_size);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;int mpi_rank;
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;mpi_rank);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;if (mpi_rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;iotest running on mpi_size: &quot; &lt;&lt; mpi_size &lt;&lt; endl;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;if (argc != 2) { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mpi_rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;\n\nUsage: \n\nmpirun -np X iotest &lt;global_number_of_ints&gt;\n\n&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return(-1);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;// how many ints to write...
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;int n = atoi(argv[1]); 
<br>
&nbsp;&nbsp;if (mpi_rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;writing &quot; &lt;&lt; n &lt;&lt; &quot; ints to file iotest.dat...&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;// everybody figure out their local offset and size...
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;int my_disp = mpi_rank*n/mpi_size;
<br>
&nbsp;&nbsp;int my_n = (mpi_rank+1)*n/mpi_size - my_disp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;rank &quot; &lt;&lt; mpi_rank &lt;&lt; &quot; writing: &quot; &lt;&lt; my_disp &lt;&lt; &quot; to &quot; &lt;&lt; my_disp+my_n-1 &lt;&lt; endl; 
<br>
<p>&nbsp;&nbsp;MPI_File fh;
<br>
&nbsp;&nbsp;int ierr = MPI_File_open(MPI_COMM_WORLD,&quot;iotest.dat&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_WRONLY | MPI_MODE_CREATE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL,&amp;fh);
<br>
&nbsp;&nbsp;assert(ierr == 0);
<br>
<p>&nbsp;&nbsp;// build the type...
<br>
<p>&nbsp;&nbsp;MPI_Datatype int_type;
<br>
&nbsp;&nbsp;MPI_Type_indexed(1,&amp;my_n,&amp;my_disp,MPI_INT,&amp;int_type);
<br>
&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;MPI_Type_commit(&amp;int_type);
<br>
<p>&nbsp;&nbsp;// fill a buffer of ints with increasing values, starting with our offset...
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;int * buf = new int[my_n];
<br>
&nbsp;&nbsp;for (int i = 0; i &lt; my_n; ++i) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf[i] = my_disp + i;
<br>
<p>&nbsp;&nbsp;// set our view into the file...
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Offset offset = 0;
<br>
&nbsp;&nbsp;MPI_File_set_view(fh, offset, MPI_INT, int_type, &quot;native&quot;, MPI_INFO_NULL);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;// and write...
<br>
<p>&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;MPI_File_write_all(fh, buf, my_n, MPI_INT, &amp;status);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;// trim the file to the current size and close...
<br>
<p>&nbsp;&nbsp;offset += n*sizeof(int);
<br>
&nbsp;&nbsp;MPI_File_set_size(fh,offset);
<br>
&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
<p>&nbsp;&nbsp;// cleanup...
<br>
<p>&nbsp;&nbsp;delete[] buf;
<br>
&nbsp;&nbsp;MPI_Type_free(&amp;int_type);
<br>
<p>&nbsp;&nbsp;// ---------------------------------------------------
<br>
<p>&nbsp;&nbsp;// now let rank 0 read the file using standard io and check for 
<br>
&nbsp;&nbsp;// correctness...
<br>
<p>&nbsp;&nbsp;if (mpi_rank == 0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (mpi_rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;reading &quot; &lt;&lt; n &lt;&lt; &quot; ints from file iotest.dat...&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FILE * fp = fopen(&quot;iotest.dat&quot;,&quot;rb&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; n; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// just read one at a time - ouch!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ibuf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fread(&amp;ibuf,sizeof(int),1,fp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;just read: &quot; &lt;&lt; i &lt;&lt; &quot; &quot; &lt;&lt; ibuf &lt;&lt; endl; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(ibuf == i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fclose(fp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;File looks good.&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;// shut down MPI stuff...
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return(0);
<br>
&nbsp;&nbsp;
<br>
}
<br>
<p><p>6.
<br>
[smjones_at_frontend iotest]$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI root_at_[hidden] Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.4.3
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r23834
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Oct 05, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.4.3
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r23834
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Oct 05, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.4.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r23834
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Oct 05, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.4.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /share/apps/openmpi/1.4.3/intel-12
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: frontend.somewhere.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Sep 12 18:02:17 PDT 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: frontend.somewhere.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon Sep 12 18:13:08 PDT 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: frontend.somewhere.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: icc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/intel/composerxe-2011.2.137/bin/intel64/icc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: icpc
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /opt/intel/composerxe-2011.2.137/bin/intel64/icpc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: ifort
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /opt/intel/composerxe-2011.2.137/bin/intel64/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: ifort
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /opt/intel/composerxe-2011.2.137/bin/intel64/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.3)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17243.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17241.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
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
