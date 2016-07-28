<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 12:30:40 2013" -->
<!-- isoreceived="20131112173040" -->
<!-- sent="Tue, 12 Nov 2013 12:30:17 -0500" -->
<!-- isosent="20131112173017" -->
<!-- name="Tang, Yu-Hang" -->
<!-- email="yuhang_tang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()" -->
<!-- id="CAFd+rVNUJ-vNusjiHvU-9u7aSdY5BzFr0Y0UbfvQQhtYhUqnww_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7D48BD45-1D5F-45F9-8524-9237972D7D58_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()<br>
<strong>From:</strong> Tang, Yu-Hang (<em>yuhang_tang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-12 12:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22957.php">Alex A. Granovsky: "Re: [OMPI users] Segmentation fault in MPI_Init when passingpointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22955.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22955.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22957.php">Alex A. Granovsky: "Re: [OMPI users] Segmentation fault in MPI_Init when passingpointers allocated in main()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After appending an additional NULL the code works now. I admit such use of
<br>
argv/argc could be confusing... thanks for pointing that out. And thank you
<br>
all for figuring out my problem!
<br>
<p>Best,
<br>
Yu-Hang
<br>
<p><p>On Tue, Nov 12, 2013 at 12:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Kernighan and Richie's C programming language manual - it goes all the way
</span><br>
<span class="quotelev1">&gt; back to the original C definition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 12, 2013, at 9:15 AM, Alex A. Granovsky &lt;gran_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems that argv[argc] should always be NULL according to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; standard. So OMPI failure is not actually a bug!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; could you please point to the exact document where this is explicitly
</span><br>
<span class="quotelev1">&gt; stated?
</span><br>
<span class="quotelev2">&gt; &gt; Otherwise, I'd assume this is a bug.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Alex Granovsky
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message----- From: Matthieu Brucher
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, November 12, 2013 8:56 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Segmentation fault in MPI_Init when passing
</span><br>
<span class="quotelev1">&gt; pointers allocated in main()
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that argv[argc] should always be NULL according to the
</span><br>
<span class="quotelev2">&gt; &gt; standard. So OMPI failure is not actually a bug!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2013/11/12 Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Interestingly enough, in ompi_mpi_init, opal_argv_join is called
</span><br>
<span class="quotelev3">&gt; &gt;&gt; without then array length, so I suppose that in the usual argc/argv
</span><br>
<span class="quotelev3">&gt; &gt;&gt; couple, you have an additional value to argv which may be NULL. So try
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allocating 3 additional values, the last being NULL, and it may work.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Matthieu
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2013/11/12 Tang, Yu-Hang &lt;yuhang_tang_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I tried the following code without CUDA, the error is still there:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;cstring&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #include &lt;cmath&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    // override command line arguments to make sure cudaengine get the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; correct one
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    char **argv_new = new char*[ argc + 2 ];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    for( int i = 0 ; i &lt; argc ; i++ )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        argv_new[i] = new char[ strlen( argv[i] ) + 1 ];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;        strcpy( argv_new[i], argv[i] );
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    argv_new[ argc   ] = new char[ 32 ];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    argv_new[ argc+1 ] = new char[ 32 ];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    strcpy( argv_new[argc],   &quot;-device&quot; );
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    sprintf( argv_new[argc+1], &quot;%d&quot;, 0 );
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    argc += 2;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    argv = argv_new;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    // do something...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    delete [] argv;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; At the end of the program the pointer stored in argv is exactly that of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; argv_new so this should not be a problem. Manually inserting printf
</span><br>
<span class="quotelev1">&gt; tells me
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that the fault occured at MPI_Init. The code works fine if I use
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Init(NULL,NULL) instead. The same code also compiles and runs
</span><br>
<span class="quotelev1">&gt; without a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problem on my laptop with mpich2-1.4.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Best,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yu-Hang
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tue, Nov 12, 2013 at 11:18 AM, Matthieu Brucher
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Are you sure this is the correct code? This seems strange and not a
</span><br>
<span class="quotelev1">&gt; good
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; idea:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    // do something...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    delete [] argv;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Did you mean argc_new and argv_new instead?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Do you have the same error without CUDA?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Matthieu
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2013/11/12 Tang, Yu-Hang &lt;yuhang_tang_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; I tried to augment the command line argument list by allocating my
</span><br>
<span class="quotelev1">&gt; own
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; of strings and passing them to MPI_Init, yet I got a segmentation &gt;
</span><br>
<span class="quotelev1">&gt; fault
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; both OpenMPI 1.6.3 and 1.7.2, while the code works fine with
</span><br>
<span class="quotelev1">&gt; MPICH2. &gt; The
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; code is:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; #include &quot;cuda_runtime.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; #include &lt;cstring&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; #include &lt;cmath&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     int device = 0;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     int skip = 0;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     bool skipmode = false;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     bool specified = false;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     for( int i = 0 ; i &lt; argc ; i++ )
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         if ( strcmp( argv[i], &quot;-device&quot; ) == 0 )
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             i++;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             if ( argv[i][0] == '-' )
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;                 skipmode = true;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;                 skip = fabs( atoi( argv[i] ) );
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             else
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;                 skipmode = false;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;                 device = atoi( argv[i] );
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             specified = true;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     if ( !specified || skipmode )
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         char* var;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         int dev_count, local_rank = 0;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         if ( (var = getenv(&quot;SLURM_LOCALID&quot;)) != NULL) local_rank =
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; atoi(var);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         else if( (var = getenv(&quot;MV2_COMM_WORLD_LOCAL_RANK&quot;))  !=
</span><br>
<span class="quotelev1">&gt; NULL)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; local_rank = atoi(var);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         else if( (var = getenv(&quot;OMPI_COMM_WORLD_LOCAL_RANK&quot;)) !=
</span><br>
<span class="quotelev1">&gt; NULL)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; local_rank = atoi(var);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         cudaGetDeviceCount( &amp;dev_count );
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         if ( skipmode )
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             device = 0;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             if ( device == skip ) local_rank++;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             while( local_rank-- &gt; 0 )
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;                 device = (++device) % dev_count;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;                 if ( device == skip ) local_rank++;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         else device = local_rank % dev_count;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     // override command line arguments to make sure cudaengine get
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; correct one
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     char **argv_new = new char*[ argc + 2 ];
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     for( int i = 0 ; i &lt; argc ; i++ )
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         argv_new[i] = new char[ strlen( argv[i] ) + 1 ];
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;         strcpy( argv_new[i], argv[i] );
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     argv_new[ argc   ] = new char[ 32 ];
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     argv_new[ argc+1 ] = new char[ 32 ];
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     strcpy( argv_new[argc],   &quot;-device&quot; );
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     sprintf( argv_new[argc+1], &quot;%d&quot;, device );
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     argc += 2;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     argv = argv_new;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     cudaSetDevice( device );
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     // do something...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     cudaDeviceReset();
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;     delete [] argv;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; When compiled using nvcc -ccbin mpic++, The error I got was:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] Failing at address: 0x21
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 0] /usr/lib64/libpthread.so.0() [0x39e5e0f000]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 1] /usr/lib64/libc.so.6() [0x39e5760551]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; /opt/openmpi/1.7.2/lib/libopen-pal.so.5(opal_argv_join+0x39)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [0x7f460b993079]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 3]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; /opt/openmpi/1.7.2/lib/libmpi.so.1(ompi_mpi_init+0x347)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [0x7f460c106a57]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 4] &gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.7.2/lib/libmpi.so.1(MPI_Init+0x16b)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [0x7f460c12523b]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 5] ./lmp_jueying() [0x40c035]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 6] /usr/lib64/libc.so.6(__libc_start_main+0xf5)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [0x39e5621a05]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] [ 7] ./lmp_jueying() [0x40dd21]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; [jueying:16317] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; Thanks for the help.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; Yu-Hang Tang
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yu-Hang Tang
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Room 105, 37 Manning St
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Division of Applied Mathematics, Brown University
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Providence, RI 02912
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt; &gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt; &gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
Yu-Hang Tang
Room 105, 37 Manning St
Division of Applied Mathematics, Brown University
Providence, RI 02912
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22956/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22957.php">Alex A. Granovsky: "Re: [OMPI users] Segmentation fault in MPI_Init when passingpointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22955.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22955.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22957.php">Alex A. Granovsky: "Re: [OMPI users] Segmentation fault in MPI_Init when passingpointers allocated in main()"</a>
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
