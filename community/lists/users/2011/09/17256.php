<?
$subject_val = "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 10:38:31 2011" -->
<!-- isoreceived="20110913143831" -->
<!-- sent="Tue, 13 Sep 2011 09:38:25 -0500" -->
<!-- isosent="20110913143825" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions" -->
<!-- id="20110913143825.GB13972_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="980556946.263985.1315881865124.JavaMail.root_at_zm09.stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 10:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17288.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17288.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Sep 12, 2011 at 07:44:25PM -0700, Steve Jones wrote:
<br>
<span class="quotelev1">&gt; Hi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've run into an IO issue with 1.4.1 and earlier versions. We're
</span><br>
<span class="quotelev1">&gt; able to reproduce the issue in around 120 lines of code to help. 
</span><br>
<p>Hi Steve Jones
<br>
<p>I'm the ROMIO maintainer, and always looking for ways to improve our
<br>
test coverage.  
<br>
<p>While it looks like this workload has been fixed in recent versions of
<br>
code, I'd like to include your test case to help us catch any
<br>
regressions we might introduce down the line. I'd change it to be
<br>
straight c and have rank 0 read back the file with MPI_File_read.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt; [smjones_at_frontend iotest]$ cat iotest.cpp 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using std::cout;
</span><br>
<span class="quotelev1">&gt; using std::cerr;
</span><br>
<span class="quotelev1">&gt; using std::endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // iotest
</span><br>
<span class="quotelev1">&gt; // This simple test reproduces a problem with writing in MPI_Type_indexed in openmpi.
</span><br>
<span class="quotelev1">&gt; // 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc,char * argv[]) {
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   int mpi_size;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_size);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   int mpi_rank;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;mpi_rank);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   if (mpi_rank == 0)
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; &quot;iotest running on mpi_size: &quot; &lt;&lt; mpi_size &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   if (argc != 2) { 
</span><br>
<span class="quotelev1">&gt;     if (mpi_rank == 0)
</span><br>
<span class="quotelev1">&gt;       cout &lt;&lt; &quot;\n\nUsage: \n\nmpirun -np X iotest &lt;global_number_of_ints&gt;\n\n&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return(-1);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   // how many ints to write...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   int n = atoi(argv[1]); 
</span><br>
<span class="quotelev1">&gt;   if (mpi_rank == 0)
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; &quot;writing &quot; &lt;&lt; n &lt;&lt; &quot; ints to file iotest.dat...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   // everybody figure out their local offset and size...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   int my_disp = mpi_rank*n/mpi_size;
</span><br>
<span class="quotelev1">&gt;   int my_n = (mpi_rank+1)*n/mpi_size - my_disp;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   cout &lt;&lt; &quot;rank &quot; &lt;&lt; mpi_rank &lt;&lt; &quot; writing: &quot; &lt;&lt; my_disp &lt;&lt; &quot; to &quot; &lt;&lt; my_disp+my_n-1 &lt;&lt; endl; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_File fh;
</span><br>
<span class="quotelev1">&gt;   int ierr = MPI_File_open(MPI_COMM_WORLD,&quot;iotest.dat&quot;,
</span><br>
<span class="quotelev1">&gt; 			   MPI_MODE_WRONLY | MPI_MODE_CREATE,
</span><br>
<span class="quotelev1">&gt; 			   MPI_INFO_NULL,&amp;fh);
</span><br>
<span class="quotelev1">&gt;   assert(ierr == 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // build the type...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Datatype int_type;
</span><br>
<span class="quotelev1">&gt;   MPI_Type_indexed(1,&amp;my_n,&amp;my_disp,MPI_INT,&amp;int_type);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Type_commit(&amp;int_type);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // fill a buffer of ints with increasing values, starting with our offset...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   int * buf = new int[my_n];
</span><br>
<span class="quotelev1">&gt;   for (int i = 0; i &lt; my_n; ++i) 
</span><br>
<span class="quotelev1">&gt;     buf[i] = my_disp + i;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // set our view into the file...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   MPI_Offset offset = 0;
</span><br>
<span class="quotelev1">&gt;   MPI_File_set_view(fh, offset, MPI_INT, int_type, &quot;native&quot;, MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   // and write...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;   MPI_File_write_all(fh, buf, my_n, MPI_INT, &amp;status);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   // trim the file to the current size and close...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   offset += n*sizeof(int);
</span><br>
<span class="quotelev1">&gt;   MPI_File_set_size(fh,offset);
</span><br>
<span class="quotelev1">&gt;   MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // cleanup...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   delete[] buf;
</span><br>
<span class="quotelev1">&gt;   MPI_Type_free(&amp;int_type);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // now let rank 0 read the file using standard io and check for 
</span><br>
<span class="quotelev1">&gt;   // correctness...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (mpi_rank == 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (mpi_rank == 0)
</span><br>
<span class="quotelev1">&gt;       cout &lt;&lt; &quot;reading &quot; &lt;&lt; n &lt;&lt; &quot; ints from file iotest.dat...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     FILE * fp = fopen(&quot;iotest.dat&quot;,&quot;rb&quot;);
</span><br>
<span class="quotelev1">&gt;     for (int i = 0; i &lt; n; ++i) {
</span><br>
<span class="quotelev1">&gt;       // just read one at a time - ouch!
</span><br>
<span class="quotelev1">&gt;       int ibuf;
</span><br>
<span class="quotelev1">&gt;       fread(&amp;ibuf,sizeof(int),1,fp);
</span><br>
<span class="quotelev1">&gt;       cout &lt;&lt; &quot;just read: &quot; &lt;&lt; i &lt;&lt; &quot; &quot; &lt;&lt; ibuf &lt;&lt; endl; 
</span><br>
<span class="quotelev1">&gt;       assert(ibuf == i);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     fclose(fp);
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; &quot;File looks good.&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   // shut down MPI stuff...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return(0);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6.
</span><br>
<span class="quotelev1">&gt; [smjones_at_frontend iotest]$ ompi_info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI root_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.4.3
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r23834
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.4.3
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r23834
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.4.3
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r23834
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.4.3
</span><br>
<span class="quotelev1">&gt;                   Prefix: /share/apps/openmpi/1.4.3/intel-12
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: frontend.somewhere.com
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Sep 12 18:02:17 PDT 2011
</span><br>
<span class="quotelev1">&gt;           Configure host: frontend.somewhere.com
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon Sep 12 18:13:08 PDT 2011
</span><br>
<span class="quotelev1">&gt;               Built host: frontend.somewhere.com
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: icc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /opt/intel/composerxe-2011.2.137/bin/intel64/icc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: icpc
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /opt/intel/composerxe-2011.2.137/bin/intel64/icpc
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/intel/composerxe-2011.2.137/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/intel/composerxe-2011.2.137/bin/intel64/ifort
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17257.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17255.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>In reply to:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17288.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17288.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
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
