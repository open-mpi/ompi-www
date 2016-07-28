<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 11:54:38 2013" -->
<!-- isoreceived="20131112165438" -->
<!-- sent="Tue, 12 Nov 2013 16:54:37 +0000" -->
<!-- isosent="20131112165437" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()" -->
<!-- id="CAHCaCkKndw-_Wq+Fkch5XP5akdDMLvtPTdZ8vy0=73e-8W9Btg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFd+rVN+RtxT=0B2QssCTOWxKULfuGV5F+bhsPsWTZ+cPeNj1w_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-12 11:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22950.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22950.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Reply:</strong> <a href="22950.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interestingly enough, in ompi_mpi_init, opal_argv_join is called
<br>
without then array length, so I suppose that in the usual argc/argv
<br>
couple, you have an additional value to argv which may be NULL. So try
<br>
allocating 3 additional values, the last being NULL, and it may work.
<br>
<p>Cheers,
<br>
<p>Matthieu
<br>
<p>2013/11/12 Tang, Yu-Hang &lt;yuhang_tang_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I tried the following code without CUDA, the error is still there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstring&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cmath&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     // override command line arguments to make sure cudaengine get the
</span><br>
<span class="quotelev1">&gt; correct one
</span><br>
<span class="quotelev1">&gt;     char **argv_new = new char*[ argc + 2 ];
</span><br>
<span class="quotelev1">&gt;     for( int i = 0 ; i &lt; argc ; i++ )
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         argv_new[i] = new char[ strlen( argv[i] ) + 1 ];
</span><br>
<span class="quotelev1">&gt;         strcpy( argv_new[i], argv[i] );
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     argv_new[ argc   ] = new char[ 32 ];
</span><br>
<span class="quotelev1">&gt;     argv_new[ argc+1 ] = new char[ 32 ];
</span><br>
<span class="quotelev1">&gt;     strcpy( argv_new[argc],   &quot;-device&quot; );
</span><br>
<span class="quotelev1">&gt;     sprintf( argv_new[argc+1], &quot;%d&quot;, 0 );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     argc += 2;
</span><br>
<span class="quotelev1">&gt;     argv = argv_new;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // do something...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
</span><br>
<span class="quotelev1">&gt;     delete [] argv;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the end of the program the pointer stored in argv is exactly that of
</span><br>
<span class="quotelev1">&gt; argv_new so this should not be a problem. Manually inserting printf tells me
</span><br>
<span class="quotelev1">&gt; that the fault occured at MPI_Init. The code works fine if I use
</span><br>
<span class="quotelev1">&gt; MPI_Init(NULL,NULL) instead. The same code also compiles and runs without a
</span><br>
<span class="quotelev1">&gt; problem on my laptop with mpich2-1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Yu-Hang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 12, 2013 at 11:18 AM, Matthieu Brucher
</span><br>
<span class="quotelev1">&gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure this is the correct code? This seems strange and not a good
</span><br>
<span class="quotelev2">&gt;&gt; idea:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     // do something...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
</span><br>
<span class="quotelev2">&gt;&gt;     delete [] argv;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you mean argc_new and argv_new instead?
</span><br>
<span class="quotelev2">&gt;&gt; Do you have the same error without CUDA?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthieu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2013/11/12 Tang, Yu-Hang &lt;yuhang_tang_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I tried to augment the command line argument list by allocating my own
</span><br>
<span class="quotelev3">&gt;&gt; &gt; list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; of strings and passing them to MPI_Init, yet I got a segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for
</span><br>
<span class="quotelev3">&gt;&gt; &gt; both OpenMPI 1.6.3 and 1.7.2, while the code works fine with MPICH2. The
</span><br>
<span class="quotelev3">&gt;&gt; &gt; code is:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &quot;cuda_runtime.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;cstring&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;cmath&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     int device = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     int skip = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     bool skipmode = false;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     bool specified = false;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     for( int i = 0 ; i &lt; argc ; i++ )
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         if ( strcmp( argv[i], &quot;-device&quot; ) == 0 )
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             i++;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             if ( argv[i][0] == '-' )
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 skipmode = true;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 skip = fabs( atoi( argv[i] ) );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             else
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 skipmode = false;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 device = atoi( argv[i] );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             specified = true;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     if ( !specified || skipmode )
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         char* var;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         int dev_count, local_rank = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         if ( (var = getenv(&quot;SLURM_LOCALID&quot;)) != NULL) local_rank =
</span><br>
<span class="quotelev3">&gt;&gt; &gt; atoi(var);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         else if( (var = getenv(&quot;MV2_COMM_WORLD_LOCAL_RANK&quot;))  != NULL)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; local_rank = atoi(var);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         else if( (var = getenv(&quot;OMPI_COMM_WORLD_LOCAL_RANK&quot;)) != NULL)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; local_rank = atoi(var);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         cudaGetDeviceCount( &amp;dev_count );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         if ( skipmode )
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             device = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             if ( device == skip ) local_rank++;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             while( local_rank-- &gt; 0 )
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 device = (++device) % dev_count;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                 if ( device == skip ) local_rank++;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         else device = local_rank % dev_count;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     // override command line arguments to make sure cudaengine get the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; correct one
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     char **argv_new = new char*[ argc + 2 ];
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     for( int i = 0 ; i &lt; argc ; i++ )
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         argv_new[i] = new char[ strlen( argv[i] ) + 1 ];
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         strcpy( argv_new[i], argv[i] );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     argv_new[ argc   ] = new char[ 32 ];
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     argv_new[ argc+1 ] = new char[ 32 ];
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     strcpy( argv_new[argc],   &quot;-device&quot; );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     sprintf( argv_new[argc+1], &quot;%d&quot;, device );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     argc += 2;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     argv = argv_new;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     cudaSetDevice( device );
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     // do something...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     cudaDeviceReset();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     delete [] argv;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When compiled using nvcc -ccbin mpic++, The error I got was:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] Failing at address: 0x21
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 0] /usr/lib64/libpthread.so.0() [0x39e5e0f000]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 1] /usr/lib64/libc.so.6() [0x39e5760551]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /opt/openmpi/1.7.2/lib/libopen-pal.so.5(opal_argv_join+0x39)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x7f460b993079]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /opt/openmpi/1.7.2/lib/libmpi.so.1(ompi_mpi_init+0x347)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x7f460c106a57]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 4] /opt/openmpi/1.7.2/lib/libmpi.so.1(MPI_Init+0x16b)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x7f460c12523b]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 5] ./lmp_jueying() [0x40c035]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 6] /usr/lib64/libc.so.6(__libc_start_main+0xf5)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [0x39e5621a05]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] [ 7] ./lmp_jueying() [0x40dd21]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [jueying:16317] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for the help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Yu-Hang Tang
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Yu-Hang Tang
</span><br>
<span class="quotelev1">&gt; Room 105, 37 Manning St
</span><br>
<span class="quotelev1">&gt; Division of Applied Mathematics, Brown University
</span><br>
<span class="quotelev1">&gt; Providence, RI 02912
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
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22950.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22950.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Reply:</strong> <a href="22950.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
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
