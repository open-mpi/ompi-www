<?
$subject_val = "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 12:21:25 2012" -->
<!-- isoreceived="20120807162125" -->
<!-- sent="Tue, 7 Aug 2012 11:21:19 -0500" -->
<!-- isosent="20120807162119" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?" -->
<!-- id="20120807162119.GL16771_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FFEE500.70103_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 12:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19900.php">Zbigniew Koza: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">Jonathan Dursi: "[OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Reply:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 12, 2012 at 10:53:52AM -0400, Jonathan Dursi wrote:
<br>
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of our users is reporting trouble reading large files with
</span><br>
<span class="quotelev1">&gt; MPI_File_read (or read_all).  With a few different type sizes, to
</span><br>
<span class="quotelev1">&gt; keep count lower than 2^31, the problem persists.   A simple C
</span><br>
<span class="quotelev1">&gt; program to test this is attached; we see it in both OpenMPI 1.4.4
</span><br>
<span class="quotelev1">&gt; and OpenMPI 1.6, with the only difference being the error code
</span><br>
<span class="quotelev1">&gt; returned.   We can read the amount of data required by looping over
</span><br>
<span class="quotelev1">&gt; MPI_File_read()s, but in more complicated scenarios this gets
</span><br>
<span class="quotelev1">&gt; awkward.  I always thought that the 32-bit signed count limitation
</span><br>
<span class="quotelev1">&gt; wasn't so bad because you could create larger data types to get
</span><br>
<span class="quotelev1">&gt; around it, but this appears not to be the case here.   Is this a
</span><br>
<span class="quotelev1">&gt; known problem that we should just work around?
</span><br>
<p>Hi.  Known problem in the ROMIO MPI-IO implementation (which OpenMPI
<br>
uses).  Been on my list of &quot;things to fix&quot; for a while.   
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt; Output from ompi_info --all for the 1.4.4 build is also attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trying 268435457 of float, 1073741828 bytes: successfully read 268435457
</span><br>
<span class="quotelev1">&gt; Trying 536870913 of float, 2147483652 bytes: failed: err=35, MPI_ERR_IO: input/output error
</span><br>
<span class="quotelev1">&gt; Trying 134217729 of double, 1073741832 bytes: successfully read 134217729
</span><br>
<span class="quotelev1">&gt; Trying 268435457 of double, 2147483656 bytes: failed: err=35, MPI_ERR_IO: input/output error
</span><br>
<span class="quotelev1">&gt; Trying 67108865 of 2xdouble, 1073741840 bytes: successfully read 67108865
</span><br>
<span class="quotelev1">&gt; Trying 134217729 of 2xdouble, 2147483664 bytes: failed: err=35, MPI_ERR_IO: input/output error
</span><br>
<span class="quotelev1">&gt; Trying 524289 of 256xdouble, 1073743872 bytes: successfully read 524289
</span><br>
<span class="quotelev1">&gt; Trying 1048577 of 256xdouble, 2147485696 bytes: failed: err=35, MPI_ERR_IO: input/output error
</span><br>
<span class="quotelev1">&gt; Chunk 1/2: Trying 524288 of 256xdouble, chunked, 1073741824 bytes: successfully read 524288
</span><br>
<span class="quotelev1">&gt; Chunk 2/2: Trying 524289 of 256xdouble, chunked, 1073743872 bytes: successfully read 524289
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6
</span><br>
<span class="quotelev1">&gt; Trying 268435457 of float, 1073741828 bytes: successfully read 268435457
</span><br>
<span class="quotelev1">&gt; Trying 536870913 of float, 2147483652 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; Trying 134217729 of double, 1073741832 bytes: successfully read 134217729
</span><br>
<span class="quotelev1">&gt; Trying 268435457 of double, 2147483656 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; Trying 67108865 of 2xdouble, 1073741840 bytes: successfully read 67108865
</span><br>
<span class="quotelev1">&gt; Trying 134217729 of 2xdouble, 2147483664 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; Trying 524289 of 256xdouble, 1073743872 bytes: successfully read 524289
</span><br>
<span class="quotelev1">&gt; Trying 1048577 of 256xdouble, 2147485696 bytes: failed: err=13, MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; Chunk 1/2: Trying 524288 of 256xdouble, chunked, 1073741824 bytes: successfully read 524288
</span><br>
<span class="quotelev1">&gt; Chunk 2/2: Trying 524289 of 256xdouble, chunked, 1073743872 bytes: successfully read 524289
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - Jonathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int tryToRead(const MPI_File file, const MPI_Datatype type, const int count, 
</span><br>
<span class="quotelev1">&gt;                const size_t size, const char *typename, void *buf) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int ierr;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     size_t bufsize = (size_t)count * size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Trying %d of %s, %lu bytes: &quot;, count, typename, bufsize );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ierr = MPI_File_read(file, buf, count, type, &amp;status);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if ( !ierr  ) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         int gotcount;
</span><br>
<span class="quotelev1">&gt;         MPI_Get_count( &amp;status, type, &amp;gotcount );
</span><br>
<span class="quotelev1">&gt;         printf(&quot;successfully read %d\n&quot;, gotcount);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         char err[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev1">&gt;         int len;
</span><br>
<span class="quotelev1">&gt;         MPI_Error_string(ierr, err, &amp;len);
</span><br>
<span class="quotelev1">&gt;         printf(&quot;failed: err=%d, %s\n&quot;, ierr, err);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     return ierr;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int tryToReadInChunks(const MPI_File file, const MPI_Datatype type, const int count, 
</span><br>
<span class="quotelev1">&gt;                const size_t size, const char *typename, void *buf, int nchunks) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int ierr;
</span><br>
<span class="quotelev1">&gt;     int nsofar = 0;
</span><br>
<span class="quotelev1">&gt;     int chunksize = count / nchunks;
</span><br>
<span class="quotelev1">&gt;     char *cbuf = buf;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     for (int chunk = 0; chunk &lt; nchunks; chunk++ ) {
</span><br>
<span class="quotelev1">&gt;         int thischunk = chunksize;
</span><br>
<span class="quotelev1">&gt;         if (chunk == nchunks-1) thischunk = count - nsofar;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Chunk %d/%d: &quot;, chunk+1, nchunks);
</span><br>
<span class="quotelev1">&gt;         ierr = tryToRead(file, type, thischunk, size, typename, &amp;(cbuf[nsofar*size]));
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;         if (ierr) break;
</span><br>
<span class="quotelev1">&gt;         nsofar += thischunk;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return ierr;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) 
</span><br>
<span class="quotelev1">&gt; { 
</span><br>
<span class="quotelev1">&gt;     int count;
</span><br>
<span class="quotelev1">&gt;     MPI_File fh;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv); 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_File_open(MPI_COMM_WORLD, &quot;/dev/zero&quot;, MPI_MODE_RDONLY, MPI_INFO_NULL, &amp;fh); 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     char *buf = malloc( ((size_t)1 &lt;&lt; 31)+1024 );
</span><br>
<span class="quotelev1">&gt;     if (buf == NULL) {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Malloc failed.\n&quot;);
</span><br>
<span class="quotelev1">&gt;         exit(-1);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* integers */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 28) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, MPI_FLOAT, count, sizeof(float), &quot;float&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 29) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, MPI_FLOAT, count, sizeof(float), &quot;float&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* doubles */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 27) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, MPI_DOUBLE, count, sizeof(double), &quot;double&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 28) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, MPI_DOUBLE, count, sizeof(double), &quot;double&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* 2 x doubles */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype TwoDoubles;
</span><br>
<span class="quotelev1">&gt;     MPI_Type_contiguous(2, MPI_DOUBLE, &amp;TwoDoubles);
</span><br>
<span class="quotelev1">&gt;     MPI_Type_commit(&amp;TwoDoubles);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 26) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, TwoDoubles, count, 2*sizeof(double), &quot;2xdouble&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 27) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, TwoDoubles, count, 2*sizeof(double), &quot;2xdouble&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Type_free(&amp;TwoDoubles);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* 256 x doubles */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype TwoFiftySixDoubles;
</span><br>
<span class="quotelev1">&gt;     MPI_Type_contiguous(256, MPI_DOUBLE, &amp;TwoFiftySixDoubles);
</span><br>
<span class="quotelev1">&gt;     MPI_Type_commit(&amp;TwoFiftySixDoubles);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 19) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, TwoFiftySixDoubles, count, 256*sizeof(double), &quot;256xdouble&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 20) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToRead(fh, TwoFiftySixDoubles, count, 256*sizeof(double), &quot;256xdouble&quot;, buf);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* 256 x doubles, in 2 chunks */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     count = (1 &lt;&lt; 20) + 1;
</span><br>
<span class="quotelev1">&gt;     tryToReadInChunks(fh, TwoFiftySixDoubles, count, 256*sizeof(double), &quot;256xdouble, chunked&quot;, buf, 2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Type_free(&amp;TwoFiftySixDoubles);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_File_close(&amp;fh); 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize(); 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     free(buf);
</span><br>
<span class="quotelev1">&gt;     return 0; 
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt;                  Package: Open MPI root_at_gpc-f109n010 Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.4.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r25188
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Sep 27, 2011
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.4.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r25188
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Sep 27, 2011
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.4.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r25188
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Sep 27, 2011
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.4.4
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.4)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1
</span><br>
<span class="quotelev1">&gt;              Exec_prefix: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1
</span><br>
<span class="quotelev1">&gt;                   Bindir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/bin
</span><br>
<span class="quotelev1">&gt;                  Sbindir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/sbin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/include
</span><br>
<span class="quotelev1">&gt;                   Mandir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share/man
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Libexecdir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/libexec
</span><br>
<span class="quotelev1">&gt;              Datarootdir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share
</span><br>
<span class="quotelev1">&gt;                  Datadir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/etc
</span><br>
<span class="quotelev1">&gt;           Sharedstatedir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/com
</span><br>
<span class="quotelev1">&gt;            Localstatedir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/var
</span><br>
<span class="quotelev1">&gt;                  Infodir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share/info
</span><br>
<span class="quotelev1">&gt;               Pkgdatadir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share/openmpi
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/lib/openmpi
</span><br>
<span class="quotelev1">&gt;            Pkgincludedir: /scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/include/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: gpc-f109n010
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Fri Nov 25 14:12:53 EST 2011
</span><br>
<span class="quotelev1">&gt;           Configure host: gpc-f109n010
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Fri Nov 25 14:23:02 EST 2011
</span><br>
<span class="quotelev1">&gt;               Built host: gpc-f109n010
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
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /scinet/gpc/compilers/gcc-4.6.1/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /scinet/gpc/compilers/gcc-4.6.1/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /scinet/gpc/compilers/gcc-4.6.1/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /scinet/gpc/compilers/gcc-4.6.1/bin/gfortran
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: no
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: 32
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: 16
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: 16
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
<span class="quotelev1">&gt;           Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS: 
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: 
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic  
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lm 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:  -L/opt/torque/lib -Wl,--rpath -Wl,/opt/torque/lib   
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS: -lrdmacm -libverbs -ltorque -ldl   -Wl,--export-dynamic -lnsl -lutil -lm -ldl 
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
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
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value: &quot;/home/s/scinet/ljdursi/.openmpi/mca-params.conf:/scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/etc/openmpi-mca-params.conf&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_prefix&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter file sets
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_path&quot; (current value: &quot;/scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share/openmpi/amca-param-sets:/scratch/s/scinet/ljdursi/Testing/mpi&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_base_param_file_path_force&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Forced Aggregate MCA parameter Search path
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value: &quot;/scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/lib/openmpi:/home/s/scinet/ljdursi/.openmpi/components&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that failed to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;, data source: default value, synonym of: opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters checked at run-time or not.  Possible values are 0 (no checking) and 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI communication (for MPI processes, will default to 1 when oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles that were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when their handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mpi_alloc_mem_leaks&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If &gt;0, MPI_FINALIZE will show up to this many instances of memory allocated by MPI_ALLOC_MEM that was not freed by MPI_FREE_MEM
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter values during MPI_INIT or not (good for reproducability of MPI jobs for debug purposes). Accepted values are all, default, file, api, and enviro - or a comma delimited combination of them
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting this string to a valid filename tells Open MPI to dump all the MCA parameter values into a file suitable for reading via the mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of all MPI peer processes (mostly for error / debugging output messages).  This can add quite a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying message when MPI_ABORT is invoked (hostname, PID of the process that called MPI_ABORT) and delay for that many seconds before exiting (a negative delay value means to never abort).  This allows attaching of a debugger before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_mpi&quot; (current value: &quot;0&quot;, data source: default value, synonyms: mpi_preconnect_all)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully wire-up the MPI connections between MPI processes during MPI_INIT (vs. making connections lazily -- upon the first MPI traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;0&quot;, data source: default value, deprecated, synonym of: mpi_preconnect_mpi)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully wire-up the MPI connections between MPI processes during MPI_INIT (vs. making connections lazily -- upon the first MPI traffic between each process peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this setting can help bandwidth performance when repeatedly sending and receiving large messages with the same buffers over RDMA-based networks (0 = do not use &quot;leave pinned&quot; protocol, 1 = use &quot;leave pinned&quot; protocol, -1 = allow network to choose at runtime).
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_warn_on_fork&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, issue a warning if program forks under conditions that could cause system errors
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: information &quot;mpi_have_sparse_group_storage&quot; (value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether this Open MPI installation supports storing of data in MPI groups in &quot;sparse&quot; formats (good for extremely large process count MPI jobs that create many communicators/groups)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_use_sparse_group_storage&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use &quot;sparse&quot; storage formats for MPI groups (only relevant if mpi_have_sparse_group_storage is 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_help_aggregate&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If orte_base_help_aggregate is true, duplicate help messages will be aggregated rather than displayed individually.  This can be helpful for parallel jobs that experience multiple identical failures; rather than print out the same help/failure message N times, display it once with a count of how many processes sent the same message.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tmpdir_base&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Base of the session directory tree
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_session_dirs&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Prohibited locations for session directories (multiple locations separated by ',', default=NULL)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch (default verbosity: 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_verbose&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for ORTE debug messages (default: 1)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_daemons&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to debug the ORTE daemons or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug_daemons_file&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether want stdout/stderr of daemons to go to a file or not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_leave_session_attached&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether applications and/or daemons should leave their sessions attached so that any output can be received - this allows X forwarding without all the attendant debugging output
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_do_not_launch&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Perform all necessary operations to prepare to launch the application, but do not actually launch it
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_spin&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have any orteds spin until we can connect a debugger to them
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_fail&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after init for debugging purposes
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_daemon_fail_delay&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Have the specified orted fail after specified number of seconds (default: 0 =&gt; no delay)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_heartbeat_rate&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Seconds between checks for daemon state-of-health (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_startup_timeout&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Milliseconds/daemon to wait for startup before declaring failed_to_start (default: 0 =&gt; do not check)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a @mpirun_args@ : ddt -n @np@ -start @executable@ @executable_argv@ @single_app@ : fxp @mpirun@ -a @mpirun_args@&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search for in orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Max time to wait [in secs] before aborting an ORTE operation (default: 1sec)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timeout_step&quot; (current value: &quot;1000&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in usecs/proc] before aborting an ORTE operation (default: 1000 usec/proc)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_default_hostfile&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of the default hostfile (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_rankfile&quot; (current value: &lt;none&gt;, data source: default value, synonyms: rmaps_rank_file_path)
</span><br>
<span class="quotelev1">&gt;                           Name of the rankfile to be used for mapping processes (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_keep_fqdn_hostnames&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to keep FQDN hostnames [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_contiguous_nodes&quot; (current value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of nodes after which contiguous nodename encoding will automatically be used [default: INT_MAX]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_tag_output&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Tag all output with [job,rank] (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xml_output&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Display all output in XML format (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xml_file&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Provide all output in XML format to the specified file
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timestamp_output&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Timestamp all application process output (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_output_filename&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Redirect output from application processes into filename.rank [default: NULL]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_show_resolved_nodenames&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Display any node names that are resolved to a different name (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_hetero_apps&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Indicates that multiple app_contexts are being provided that are a mix of 32/64 bit binaries (default: false)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_launch_agent&quot; (current value: &quot;orted&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Command used to start processes on remote nodes (default: orted)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_allocation_required&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether or not an allocation by a resource manager is required [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_xterm&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Create a new xterm window and display output from the specified ranks there [default: none]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_forward_job_control&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Forward SIGTSTP (after converting to SIGSTOP) and SIGCONT signals to the application procs [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_report_launch_progress&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Output a brief periodic report on launch progress [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_num_boards&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of processor boards/node (1-256) [default: 1]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_num_sockets&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of sockets/board (1-256)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_num_cores&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of cores/socket (1-256)
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_cpu_set&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-separated list of ranges specifying logical cpus allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_process_binding&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Policy for binding processes [none | core | socket | board] (supported qualifier: if-avail)
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_net_private_ipv4&quot; (current value: &quot;10.0.0.0/8;172.16.0.0/12;192.168.0.0/16;169.254.0.0/16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Semicolon-delimited list of CIDR notation entries specifying what networks are considered &quot;private&quot; (default value based on RFC1918 and RFC3330)
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value: &quot;6,7,8,11&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of integer signal numbers to Open MPI to attempt to intercept.  Upon receipt of the intercepted signal, Open MPI will display a stack trace and abort.  Open MPI will *not* replace signals if handlers are already installed by the time MPI_INIT is invoked.  Optionally append &quot;:complain&quot; to any signal number in the comma-delimited list to make Open MPI complain if it detects another signal handler (and therefore does not insert its own).
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_paffinity_alone&quot; (current value: &quot;0&quot;, data source: default value, synonyms: mpi_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_set_max_sys_limits&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Set to non-zero to automatically set any system-imposed limits to the maximum allowed
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_event_include&quot; (current value: &quot;poll&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of libevent subsystems to use (poll, select -- available on your platform)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the backtrace framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;           MCA memchecker: parameter &quot;memchecker&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memchecker framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the memory framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the paffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the paffinity framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_plpa_version&quot; (value: &quot;1.3.2&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Version of PLPA that is embedded in Open MPI
</span><br>
<span class="quotelev1">&gt;                MCA carto: parameter &quot;carto_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the carto framework
</span><br>
<span class="quotelev1">&gt;                MCA carto: parameter &quot;carto&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the carto framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA carto: parameter &quot;carto_auto_detect_priority&quot; (current value: &quot;11&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the auto_detect carto component
</span><br>
<span class="quotelev1">&gt;                MCA carto: parameter &quot;carto_file_path&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The path to the cartography file
</span><br>
<span class="quotelev1">&gt;                MCA carto: parameter &quot;carto_file_priority&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the file carto component
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the maffinity framework
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the maffinity framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the timer framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: parameter &quot;dpm&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the dpm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: parameter &quot;dpm_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the dpm framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pubsub framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pubsub framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: parameter &quot;pubsub_orte_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the allocator framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the coll framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Minimum number of processes in a communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the hierarchical coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Turn verbose message of the hierarchical coll component on/off
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_use_rdma&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Switch from the send btl list used to detect hierarchies to the rdma btl list
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_ignore_sm&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Ignore sm protocol when detecting hierarchies. Required to enable the usage of protocol specific collective operations
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_hierarch_detection_alg&quot; (current value: &quot;2&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Used to specify the algorithm for detecting Hierarchy.To specify all levels or two levels of hierarchy
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_inter_priority&quot; (current value: &quot;40&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the inter coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_inter_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Turn verbose message of the inter coll component on/off
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current value: &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Length of the control data -- should usually be either the length of a cache line on most SMPs, or the size of a page on machines that support direct memory affinity page placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Fragment size (in bytes) used for passing data through shared memory (will be rounded up to the nearest control_size size)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of &quot;in use&quot; flags, used to mark a message passing area segment as currently being used or not (must be &gt;= 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current value: &quot;128&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in each communicator's shared memory message passing area (must be &gt;= 2, and must be a multiple of comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Degree of the tree for tree-based operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of processes to use for the calculation of the shared_mem_size MCA information parameter (must be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;8413184&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used, per communicator, in the shared memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sync_priority&quot; (current value: &quot;50&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sync coll component; only relevant if barrier_before or barrier_after is &gt; 0
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sync_barrier_before&quot; (current value: &quot;1000&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Do a synchronization before each Nth collective
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sync_barrier_after&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Do a synchronization after each Nth collective
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current value: &quot;30&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value: &quot;32768&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Size of communicator were we stop pre-allocating memory for the fixed internal buffer used for message requests etc that is hung off the communicator data segment. I.e. if you have a 100'000 nodes you might not want to pre-allocate 200'000 request handle slots per communicator instance!
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the tree topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the chain (fanout followed by pipeline) topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Switch used to decide if we use static (compiled/if statements) or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the io framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: information &quot;io_romio_version&quot; (value: &quot;from MPICH2 v1.0.7 with additional compilation/bug patches from romio-maint_at_[hidden]&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Version of ROMIO
</span><br>
<span class="quotelev1">&gt;                   MCA io: information &quot;io_romio_user_configure_params&quot; (value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           User-specified command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt;                   MCA io: information &quot;io_romio_complete_configure_params&quot; (value: &quot; CFLAGS='-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread' CPPFLAGS=' ' FFLAGS='' LDFLAGS=' ' --enable-shared --enable-static  --prefix=/scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1 --with-mpi=open_mpi --disable-aio&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Complete set of command line parameters passed to ROMIO's configure script
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mpool framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_fake_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The name of the registration cache the mpool should use
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           the maximum size of registration cache in bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value: &quot;67108864&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for mpool sm component
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the PML framework
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of elements to add when growing request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_free_list_num&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_free_list_inc&quot; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_send_pipeline_depth&quot; (current value: &quot;3&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_recv_pipeline_depth&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_rdma_put_retries_limit&quot; (current value: &quot;5&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_max_rdma_per_request&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_max_send_per_range&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_unexpected_limit&quot; (current value: &quot;128&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_allocator&quot; (current value: &quot;bucket&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_csum_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_rdma_put_retries_limit&quot; (current value: &quot;5&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_max_rdma_per_request&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_max_send_per_range&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_unexpected_limit&quot; (current value: &quot;128&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_allocator&quot; (current value: &quot;bucket&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component for unexpected messages
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_v_priority&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_v_output&quot; (current value: &quot;stderr&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_v_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the bml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rcache framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level of the BTL framework
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the btl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_rndv_eager_limit&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_rdma_pipeline_send_length&quot; (current value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_rdma_pipeline_frag_size&quot; (current value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_rdma_pipeline_size&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_bandwidth&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_latency&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;8&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_fifo_size&quot; (current value: &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_fifo_lazy_free&quot; (current value: &quot;120&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_flags&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_rndv_eager_limit&quot; (current value: &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &quot;4096&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_send_size&quot; (current value: &quot;32768&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_bandwidth&quot; (current value: &quot;900&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_max_btls&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of HCAs/ports to use
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_mpool&quot; (current value: &quot;rdma&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of the memory pool to be used
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_ib_pkey_index&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           IB pkey index
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_ib_qkey&quot; (current value: &quot;20119859&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           IB qkey
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_ib_service_level&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           IB service level
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_ib_src_path_bits&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           IB source path bits
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_sd_num&quot; (current value: &quot;128&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           maximum send descriptors to post
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_rd_num&quot; (current value: &quot;6000&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           number of receive buffers
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_min_send_size&quot; (current value: &quot;2048&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           minimum send size
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_max_send_size&quot; (current value: &quot;2048&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           maximum send size
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_exclusivity&quot; (current value: &quot;1024&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_bandwidth&quot; (current value: &quot;800&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_ofud_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Output some verbose OpenIB BTL information (0 = no output, nonzero = output)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_no_device_params_found&quot; (current value: &quot;1&quot;, data source: default value, synonyms: btl_openib_warn_no_hca_params_found)
</span><br>
<span class="quotelev1">&gt;                           Warn when no device-specific parameters are found in the INI file specified by the btl_openib_device_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot; (current value: &quot;1&quot;, data source: default value, deprecated, synonym of: btl_openib_warn_no_device_params_found)
</span><br>
<span class="quotelev1">&gt;                           Warn when no device-specific parameters are found in the INI file specified by the btl_openib_device_param_files MCA parameter (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Warn when there is more than one active ports and at least one of them connected to the network with only default GID prefix configured (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Warn if non-existent devices and/or ports are specified in the btl_openib_if_[in|ex]clude MCA parameters (0 = do not warn; any other value = warn)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_want_fork_support&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether fork support is desired or not (negative = try to enable fork support, but continue even if it is not available, 0 = do not enable fork support, positive = try to enable fork support and fail if it is not available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_device_param_files&quot; (current value: &quot;/scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source: default value, synonyms: btl_openib_hca_param_files)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited list of INI-style files that contain device vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_hca_param_files&quot; (current value: &quot;/scinet/gpc/mpi/openmpi/1.4.4-gcc-v4.6.1/share/openmpi/mca-btl-openib-device-params.ini&quot;, data source: default value, deprecated, synonym of: btl_openib_device_param_files)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited list of INI-style files that contain device vendor/part-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_device_type&quot; (current value: &quot;all&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Specify to only use IB or iWARP network adapters (infiniband = only use InfiniBand HCAs; iwarp = only use iWARP NICs; all = use any available adapters)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_btls&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of device ports to use (-1 = use all available, otherwise must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_num&quot; (current value: &quot;8&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Intial size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of free lists (-1 = infinite, otherwise must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_free_list_inc&quot; (current value: &quot;32&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Increment size of free lists (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_mpool&quot; (current value: &quot;rdma&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Name of the memory pool to be used (it is unlikely that you will ever want to change this
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_reg_mru_len&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Length of the registration cache most recently used list (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cq_size&quot; (current value: &quot;1000&quot;, data source: default value, synonyms: btl_openib_ib_cq_size)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the OpenFabrics completion queue (CQs are automatically sized based on the number of peer MPI processes; this value determines the *minimum* size of all CQs)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_cq_size&quot; (current value: &quot;1000&quot;, data source: default value, deprecated, synonym of: btl_openib_cq_size)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the OpenFabrics completion queue (CQs are automatically sized based on the number of peer MPI processes; this value determines the *minimum* size of all CQs)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default value, synonyms: btl_openib_ib_max_inline_data)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must be &gt;= 0). If not explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_inline_data&quot; (current value: &quot;-1&quot;, data source: default value, deprecated, synonym of: btl_openib_max_inline_data)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of inline data segment (-1 = run-time probe to discover max value, otherwise must be &gt;= 0). If not explicitly set, use max_inline_data from the INI file containing device-specific parameters
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_pkey&quot; (current value: &quot;0&quot;, data source: default value, synonyms: btl_openib_ib_pkey_val)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and will be masked against the maximum allowable IB paritition key value (0x7fff)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_pkey_val&quot; (current value: &quot;0&quot;, data source: default value, deprecated, synonym of: btl_openib_pkey)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics partition key (pkey) value. Unsigned integer decimal or hex values are allowed (e.g., &quot;3&quot; or &quot;0x3f&quot;) and will be masked against the maximum allowable IB paritition key value (0x7fff)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_psn&quot; (current value: &quot;0&quot;, data source: default value, synonyms: btl_openib_ib_psn)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_psn&quot; (current value: &quot;0&quot;, data source: default value, deprecated, synonym of: btl_openib_psn)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics packet sequence starting number (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_qp_ous_rd_atom&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand outstanding atomic reads (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_mtu&quot; (current value: &quot;3&quot;, data source: default value, synonyms: btl_openib_ib_mtu)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_mtu&quot; (current value: &quot;3&quot;, data source: default value, deprecated, synonym of: btl_openib_mtu)
</span><br>
<span class="quotelev1">&gt;                           OpenFabrics MTU, in bytes (if not specified in INI files).  Valid values are: 1=256 bytes, 2=512 bytes, 3=1024 bytes, 4=2048 bytes, 5=4096 bytes
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_min_rnr_timer&quot; (current value: &quot;25&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand minimum &quot;receiver not ready&quot; timer, in seconds (must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_timeout&quot; (current value: &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit timeout, plugged into formula: 4.096 microseconds * (2^btl_openib_ib_timeout)(must be &gt;= 0 and &lt;= 31)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_retry_count&quot; (current value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand transmit retry count (must be &gt;= 0 and &lt;= 7)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_rnr_retry&quot; (current value: &quot;7&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand &quot;receiver not ready&quot; retry count; applies *only* to SRQ/XRC queues.  PP queues use RNR retry values of 0 because Open MPI performs software flow control to guarantee that RNRs never occur (must be &gt;= 0 and &lt;= 7; 7 = &quot;infinite&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_max_rdma_dst_ops&quot; (current value: &quot;4&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand maximum pending RDMA destination operations (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ib_service_level&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           InfiniBand service level (must be &gt;= 0 and &lt;= 15)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_eager_rdma&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for eager messages (-1 = use device default, 0 = do not use eager RDMA, 1 = use eager RDMA)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_threshold&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use RDMA for short messages after this number of messages are received from a given peer (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_eager_rdma&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of peers allowed to use RDMA for short messages (RDMA is used for all long messages, except if explicitly disabled, such as with the &quot;dr&quot; pml) (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_num&quot; (current value: &quot;16&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of RDMA buffers to allocate for small messages(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_btls_per_lid&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of BTLs to create for each InfiniBand LID (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_lmc&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of LIDs to use for each device port (must be &gt;= 0, where 0 = use all available)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_enable_apm_over_lmc&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of alterative paths for each device port (must be &gt;= -1, where 0 = disable apm, -1 = all availible alternative paths )
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_enable_apm_over_ports&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Enable alterative path migration (APM) over different ports of the same device (must be &gt;= 0, where 0 = disable APM over ports , 1 = enable APM over ports of the same device)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_async_event_thread&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, use the thread that will handle InfiniBand asyncihronous events 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_buffer_alignment&quot; (current value: &quot;64&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Prefered communication buffer alignment, in bytes (must be &gt; 0 and power of two)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_use_message_coalescing&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use message coalescing
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cq_poll_ratio&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           how often poll high priority CQ versus low priority CQ
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_rdma_poll_ratio&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           how often poll eager RDMA channel versus CQ
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_hp_cq_poll_per_progress&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           max number of completion events to process for each call of BTL progress engine
</span><br>
<span class="quotelev1">&gt;                  MCA btl: information &quot;btl_openib_have_fork_support&quot; (value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether the OpenFabrics stack supports applications that invoke the &quot;fork()&quot; system call or not (0 = no, 1 = yes).  Note that this value does NOT indicate whether the system being run on supports &quot;fork()&quot; with OpenFabrics applications or not.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;310&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rndv_eager_limit&quot; (current value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_eager_limit&quot; (current value: &quot;12288&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_max_send_size&quot; (current value: &quot;65536&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rdma_pipeline_send_length&quot; (current value: &quot;1048576&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_rdma_pipeline_frag_size&quot; (current value: &quot;1048576&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_min_rdma_pipeline_size&quot; (current value: &quot;262144&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_bandwidth&quot; (current value: &quot;800&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_latency&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_receive_queues&quot; (current value: &quot;P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Colon-delimited, comma delimited list of receive queues: P,4096,8,6,4:P,32768,8,6,4
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_if_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of devices/ports to be used (e.g. &quot;mthca0,mthca1:2&quot;; empty value means to use all ports found).  Mutually exclusive with btl_openib_if_exclude.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of device/ports to be excluded (empty value means to not exclude any ports).  Mutually exclusive with btl_openib_if_include.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ipaddr_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of IP Addresses to be used (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with btl_openib_ipaddr_exclude.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_ipaddr_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of IP Addresses to be excluded (e.g. &quot;192.168.1.0/24&quot;).  Mutually exclusive with btl_openib_ipaddr_include.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cpc_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Method used to select OpenFabrics connections (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_cpc_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Method used to exclude OpenFabrics connections (valid values: oob,xoob,rdmacm)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_oob_priority&quot; (current value: &quot;50&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The selection method priority for oob
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_xoob_priority&quot; (current value: &quot;60&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The selection method priority for xoob
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_priority&quot; (current value: &quot;30&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The selection method priority for rdma_cm
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_port&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The selection method port for rdma_cm
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_resolve_timeout&quot; (current value: &quot;30000&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The timeout (in miliseconds) for address and route resolution
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_retry_count&quot; (current value: &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of times rdmacm will retry route resolution
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_connect_rdmacm_reject_causes_connect_error&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The drivers for some devices are buggy such that an RDMA REJECT action may result in a CONNECT_ERROR event instead of a REJECTED event.  Setting this MCA parameter to true tells Open MPI to treat CONNECT_ERROR events on connections where a REJECT is expected as a REJECT (default: false)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_openib_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_links&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The size of the internal cache for each TCP connection. This cache is used to reduce the number of syscalls, by replacing them with memcpy. Every read will read the expected data plus the amount of the endpoint_cache
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_use_nagle&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to use Nagle's algorithm or not (using Nagle's algorithm may increase short message latency)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current value: &quot;1024&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The minimum port where the TCP BTL will try to bind (default 1024)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current value: &quot;64511&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The number of ports where the TCP BTL will try to bind (default 64511). This parameter together with the port min, define a range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_port_min_v6&quot; (current value: &quot;1024&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The minimum port where the TCP BTL will try to bind (default 1024)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_port_range_v6&quot; (current value: &quot;64511&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The number of ports where the TCP BTL will try to bind (default 64511). This parameter together with the port min, define a range of ports where Open MPI will open sockets.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;314&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           BTL bit flags (general flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8, RDMA_MATCHED=64, HETEROGENEOUS_RDMA=256; flags only used by the &quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rndv_eager_limit&quot; (current value: &quot;65536&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) of &quot;phase 1&quot; fragment sent for all large messages (must be &gt;= 0 and &lt;= eager_limit)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1).
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 2&quot; fragment of a long message when using the pipeline protocol (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rdma_pipeline_send_length&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Length of the &quot;phase 2&quot; portion of a large message (in bytes) when using the pipeline protocol.  This part of the message will be split into fragments of size max_send_size and sent using send/receive semantics (must be &gt;= 0; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rdma_pipeline_frag_size&quot; (current value: &quot;2147483647&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum size (in bytes) of a single &quot;phase 3&quot; fragment from a long message when using the pipeline protocol.  These fragments will be sent using RDMA semantics (must be &gt;= 1; only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_pipeline_size&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Messages smaller than this size (in bytes) will not use the RDMA pipeline protocol.  Instead, they will be split into fragments of max_send_size and sent using send/receive semantics (must be &gt;=0, and is automatically adjusted up to at least (eager_limit+btl_rdma_pipeline_send_length); only relevant when the PUT flag is set)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_bandwidth&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of interconnect(must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_latency&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Approximate latency of interconnect (must be &gt;= 0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_disable_family&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mtl framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the topo framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_unity_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the osc framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current value: &quot;16384&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_eager_send&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Attempt to start data movement during communication call, instead of at synchrnoization time.  Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_use_buffers&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Coalesce messages during an epoch to reduce network utilization.  Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_use_rdma&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use real RDMA operations to transfer data.  Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_rdma_completion_wait&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Wait for all completion of rdma events before sending acknowledgment.  Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_no_locks&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if MPI_LOCK is not used.  Info key of same name overrides this value.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_rdma_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the iof framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the iof framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_hnp_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_orted_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_tool_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the oob framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbose level for the OOB tcp component
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of peer connections to simultaneously maintain (-1 = infinite)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Number of times to try shutting down a connection before giving up
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Enable (1) / disable (0) debugging output for this component
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           TCP socket send buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           TCP socket receive buffering size (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to use
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to exclude
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Enable (1) / disable (0) random sleep for connection wireup.
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value: &quot;event&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Mode for HNP to accept incoming connections: event, listen_thread.
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           High water mark for queued accepted socket list size.  Used only when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_wait_time&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Time in milliseconds to wait before actively checking for new connections when listen_mode is listen_thread.
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_port_min_v4&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Starting port allowed (IPv4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_port_range_v4&quot; (current value: &quot;65535&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Range of allowed ports (IPv4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_disable_family&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Disable IPv4 (4) or IPv6 (6)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_port_min_v6&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Starting port allowed (IPv6)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_port_range_v6&quot; (current value: &quot;65535&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Range of allowed ports (IPv6)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_sigkill_timeout&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Time to wait for a process to die after issuing a kill signal to it
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_report_bindings&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Report process bindings [default: no]
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the odls framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the odls framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: parameter &quot;odls_default_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_display_alloc&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the allocation after it is determined
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_display_devel_alloc&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a developer-detail allocation after it is determined
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ras framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ras framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current value: &quot;75&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_tm_priority&quot; (current value: &quot;100&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_tm_nodefile_dir&quot; (current value: &quot;/var/spool/torque/aux&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The directory where the PBS nodefile can be found
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_rank_file_path&quot; (current value: &lt;none&gt;, data source: default value, synonym of: orte_rankfile)
</span><br>
<span class="quotelev1">&gt;                           Name of the rankfile to be used for mapping processes (relative or absolute path)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current value: &quot;slot&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Scheduling Policy for RMAPS. [slot (alias:core) | socket | board | node]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_perboard&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/board
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_persocket&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/socket
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_loadbalance&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Balance total number of procs across all allocated nodes
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_cpus_per_proc&quot; (current value: &quot;1&quot;, data source: default value, synonyms: rmaps_base_cpus_per_rank)
</span><br>
<span class="quotelev1">&gt;                           Number of cpus to use for each rank [1-2**15 (default=1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_cpus_per_rank&quot; (current value: &quot;1&quot;, data source: default value, synonym of: rmaps_base_cpus_per_proc)
</span><br>
<span class="quotelev1">&gt;                           Number of cpus to use for each rank [1-2**15 (default=1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_stride&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           When binding multiple cores to a rank, the step size to use between cores [1-2**15 (default: 1)]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_slot_list&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           List of processor IDs to bind MPI processes to (e.g., used in conjunction with rank files) [default=NULL]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI applications on the same node as mpirun (default).  If true, do not schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow oversubscription of nodes - mpirun will return an error if there aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_map&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display the process map after it is computed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_display_devel_map&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether to display a developer-detail process map after it is computed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmaps framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_load_balance_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_rank_file_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_seq_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_wrapper&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Use a Wrapper component around the selected RML component
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rml framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the routed framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the routed framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_binomial_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_direct_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;               MCA routed: parameter &quot;routed_linear_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the plm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the plm framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_num_concurrent&quot; (current value: &quot;128&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           How many plm_rsh_agent instances to invoke concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_force_rsh&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Force the launcher to always use rsh
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_disable_qrsh&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Disable the launcher to use qrsh when under the SGE parallel environment
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_daemonize_qrsh&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Daemonize the orted under the SGE parallel environment
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_priority&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh plm component
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_delay&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Delay (in seconds) between invocations of the remote agent, but only used when the &quot;debug&quot; MCA parameter is true, or the top-level MCA debugging is enabled (otherwise this value is ignored)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_assume_same_shell&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, assume that the shell on the remote node is the same as the shell on the local node.  Otherwise, probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;, data source: default value, synonyms: pls_rsh_agent)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_rsh_tree_spawn&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, launch via a tree-based topology
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_slurm_args&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_slurm_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_tm_want_path_check&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Whether the launching process should check for the plm_tm_orted executable in the PATH before launching (the TM API does not give an indication of failure; this is a somewhat-lame workaround; non-zero values enable this check)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: parameter &quot;plm_tm_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Which Filem component to use (empty = auto-select)
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the filem framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_rsh_priority&quot; (current value: &quot;20&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Priority of the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_rsh_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbose level for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_rsh_rcp&quot; (current value: &quot;scp&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The rsh cp command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_rsh_rsh&quot; (current value: &quot;ssh&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           The remote shell command for the FILEM rsh component
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_rsh_max_incomming&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of incomming connections
</span><br>
<span class="quotelev1">&gt;                MCA filem: parameter &quot;filem_rsh_max_outgoing&quot; (current value: &quot;10&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of out going connections (Currently not used)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the errmgr framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the errmgr framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_default_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ess framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the ess framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_env_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_hnp_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_singleton_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_slurm_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: parameter &quot;ess_tool_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm&quot; (current value: &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the grpcomm framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm_base_verbose&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the grpcomm framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm_bad_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: parameter &quot;grpcomm_basic_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19902.php">Jeff Squyres: "Re: [OMPI users] Parallel I/O doesn't work for derived datatypes with Fortran 90 interface"</a>
<li><strong>Previous message:</strong> <a href="19900.php">Zbigniew Koza: "Re: [OMPI users] 1D and 2D arrays allocate memory by maloc() and MPI_Send and MPI_Recv problem."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">Jonathan Dursi: "[OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
<li><strong>Reply:</strong> <a href="19906.php">Richard Shaw: "Re: [OMPI users] Can't read more than 2^31 bytes with MPI_File_read, regardless of type?"</a>
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
