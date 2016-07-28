<?
$subject_val = "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 12:49:37 2011" -->
<!-- isoreceived="20110914164937" -->
<!-- sent="Wed, 14 Sep 2011 09:49:31 -0700 (PDT)" -->
<!-- isosent="20110914164931" -->
<!-- name="Steve Jones" -->
<!-- email="stevejones_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions" -->
<!-- id="1056883641.329809.1316018971142.JavaMail.root_at_zm09.stanford.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20110913143825.GB13972_at_mcs.anl.gov" -->
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
<strong>From:</strong> Steve Jones (<em>stevejones_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 12:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17289.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; On Mon, Sep 12, 2011 at 07:44:25PM -0700, Steve Jones wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We've run into an IO issue with 1.4.1 and earlier versions. We're
</span><br>
<span class="quotelev2">&gt; &gt; able to reproduce the issue in around 120 lines of code to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Steve Jones
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm the ROMIO maintainer, and always looking for ways to improve our
</span><br>
<span class="quotelev1">&gt; test coverage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While it looks like this workload has been fixed in recent versions of
</span><br>
<span class="quotelev1">&gt; code, I'd like to include your test case to help us catch any
</span><br>
<span class="quotelev1">&gt; regressions we might introduce down the line. I'd change it to be
</span><br>
<span class="quotelev1">&gt; straight c and have rank 0 read back the file with MPI_File_read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<p>Hi Rob,
<br>
<p>Thanks for the quick reply. I've copied Frank Ham, our lead developer, as he wrote the test case below. The test was helpful for us to determine which version worked and also to compare against other MPI variants. It's good if the test case helps you out as well.
<br>
<p>Thanks.
<br>
<p>Steve
<br>
<p><p><span class="quotelev2">&gt; &gt; [smjones_at_frontend iotest]$ cat iotest.cpp
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; using std::cout;
</span><br>
<span class="quotelev2">&gt; &gt; using std::cerr;
</span><br>
<span class="quotelev2">&gt; &gt; using std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; // iotest
</span><br>
<span class="quotelev2">&gt; &gt; // This simple test reproduces a problem with writing in
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Type_indexed in openmpi.
</span><br>
<span class="quotelev2">&gt; &gt; //
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc,char * argv[]) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int mpi_size;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int mpi_rank;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;mpi_rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (mpi_rank == 0)
</span><br>
<span class="quotelev2">&gt; &gt;     cout &lt;&lt; &quot;iotest running on mpi_size: &quot; &lt;&lt; mpi_size &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (argc != 2) {
</span><br>
<span class="quotelev2">&gt; &gt;     if (mpi_rank == 0)
</span><br>
<span class="quotelev2">&gt; &gt;       cout &lt;&lt; &quot;\n\nUsage: \n\nmpirun -np X iotest
</span><br>
<span class="quotelev2">&gt; &gt;       &lt;global_number_of_ints&gt;\n\n&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;     return(-1);
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // how many ints to write...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int n = atoi(argv[1]);
</span><br>
<span class="quotelev2">&gt; &gt;   if (mpi_rank == 0)
</span><br>
<span class="quotelev2">&gt; &gt;     cout &lt;&lt; &quot;writing &quot; &lt;&lt; n &lt;&lt; &quot; ints to file iotest.dat...&quot; &lt;&lt;
</span><br>
<span class="quotelev2">&gt; &gt;     endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // everybody figure out their local offset and size...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int my_disp = mpi_rank*n/mpi_size;
</span><br>
<span class="quotelev2">&gt; &gt;   int my_n = (mpi_rank+1)*n/mpi_size - my_disp;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   cout &lt;&lt; &quot;rank &quot; &lt;&lt; mpi_rank &lt;&lt; &quot; writing: &quot; &lt;&lt; my_disp &lt;&lt; &quot; to &quot;
</span><br>
<span class="quotelev2">&gt; &gt;   &lt;&lt; my_disp+my_n-1 &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_File fh;
</span><br>
<span class="quotelev2">&gt; &gt;   int ierr = MPI_File_open(MPI_COMM_WORLD,&quot;iotest.dat&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; 			   MPI_MODE_WRONLY | MPI_MODE_CREATE,
</span><br>
<span class="quotelev2">&gt; &gt; 			   MPI_INFO_NULL,&amp;fh);
</span><br>
<span class="quotelev2">&gt; &gt;   assert(ierr == 0);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // build the type...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Datatype int_type;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Type_indexed(1,&amp;my_n,&amp;my_disp,MPI_INT,&amp;int_type);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Type_commit(&amp;int_type);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // fill a buffer of ints with increasing values, starting with our
</span><br>
<span class="quotelev2">&gt; &gt;   offset...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   int * buf = new int[my_n];
</span><br>
<span class="quotelev2">&gt; &gt;   for (int i = 0; i &lt; my_n; ++i)
</span><br>
<span class="quotelev2">&gt; &gt;     buf[i] = my_disp + i;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // set our view into the file...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Offset offset = 0;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_File_set_view(fh, offset, MPI_INT, int_type, &quot;native&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_INFO_NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // and write...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_File_write_all(fh, buf, my_n, MPI_INT, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // trim the file to the current size and close...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   offset += n*sizeof(int);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_File_set_size(fh,offset);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // cleanup...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   delete[] buf;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Type_free(&amp;int_type);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // ---------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // now let rank 0 read the file using standard io and check for
</span><br>
<span class="quotelev2">&gt; &gt;   // correctness...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (mpi_rank == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (mpi_rank == 0)
</span><br>
<span class="quotelev2">&gt; &gt;       cout &lt;&lt; &quot;reading &quot; &lt;&lt; n &lt;&lt; &quot; ints from file iotest.dat...&quot; &lt;&lt;
</span><br>
<span class="quotelev2">&gt; &gt;       endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     FILE * fp = fopen(&quot;iotest.dat&quot;,&quot;rb&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;     for (int i = 0; i &lt; n; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt;       // just read one at a time - ouch!
</span><br>
<span class="quotelev2">&gt; &gt;       int ibuf;
</span><br>
<span class="quotelev2">&gt; &gt;       fread(&amp;ibuf,sizeof(int),1,fp);
</span><br>
<span class="quotelev2">&gt; &gt;       cout &lt;&lt; &quot;just read: &quot; &lt;&lt; i &lt;&lt; &quot; &quot; &lt;&lt; ibuf &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;       assert(ibuf == i);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;     fclose(fp);
</span><br>
<span class="quotelev2">&gt; &gt;     cout &lt;&lt; &quot;File looks good.&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   // shut down MPI stuff...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;   return(0);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 6.
</span><br>
<span class="quotelev2">&gt; &gt; [smjones_at_frontend iotest]$ ompi_info
</span><br>
<span class="quotelev2">&gt; &gt;                  Package: Open MPI root_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;                  Distribution
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI: 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI SVN revision: r23834
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE: 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE SVN revision: r23834
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL: 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL SVN revision: r23834
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt; &gt;             Ident string: 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt;                   Prefix: /share/apps/openmpi/1.4.3/intel-12
</span><br>
<span class="quotelev2">&gt; &gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: frontend.somewhere.com
</span><br>
<span class="quotelev2">&gt; &gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt; &gt;            Configured on: Mon Sep 12 18:02:17 PDT 2011
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: frontend.somewhere.com
</span><br>
<span class="quotelev2">&gt; &gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt; &gt;                 Built on: Mon Sep 12 18:13:08 PDT 2011
</span><br>
<span class="quotelev2">&gt; &gt;               Built host: frontend.somewhere.com
</span><br>
<span class="quotelev2">&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt; &gt;               C compiler: icc
</span><br>
<span class="quotelev2">&gt; &gt;      C compiler absolute:
</span><br>
<span class="quotelev2">&gt; &gt;      /opt/intel/composerxe-2011.2.137/bin/intel64/icc
</span><br>
<span class="quotelev2">&gt; &gt;             C++ compiler: icpc
</span><br>
<span class="quotelev2">&gt; &gt;    C++ compiler absolute:
</span><br>
<span class="quotelev2">&gt; &gt;    /opt/intel/composerxe-2011.2.137/bin/intel64/icpc
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran77 compiler abs:
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/intel/composerxe-2011.2.137/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev2">&gt; &gt;   /opt/intel/composerxe-2011.2.137/bin/intel64/ifort
</span><br>
<span class="quotelev2">&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt; &gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt; &gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt; &gt;   Internal debug support: yes
</span><br>
<span class="quotelev2">&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt; &gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt; &gt; Symbol visibility support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;            v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;               v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;            v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA carto: file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;            v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA timer: linux (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;          v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;               v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;            v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;            v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: self (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: romio (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                   v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: self (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA odls: default (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                 v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;                Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;               v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA routed: direct (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;               v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA routed: linear (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;               v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;               v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;                  v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev2">&gt; &gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.4.3)
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17289.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17287.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
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
