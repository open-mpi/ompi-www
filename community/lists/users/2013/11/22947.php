<?
$subject_val = "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 11:18:06 2013" -->
<!-- isoreceived="20131112161806" -->
<!-- sent="Tue, 12 Nov 2013 16:18:06 +0000" -->
<!-- isosent="20131112161806" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()" -->
<!-- id="CAHCaCk+8eLjtTk3ppd2vADSBnL3HgfzNKYtZ-CVJ94dwckhMfQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFd+rVOCbTQSOt6kU-5rJ8Jr5JN1bL9Uv=08xtpxRK4T1cvQJg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-11-12 11:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22946.php">Tang, Yu-Hang: "[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22946.php">Tang, Yu-Hang: "[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Reply:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Are you sure this is the correct code? This seems strange and not a good idea:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// do something...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;delete [] argv;
<br>
<p>Did you mean argc_new and argv_new instead?
<br>
Do you have the same error without CUDA?
<br>
<p>Cheers,
<br>
<p>Matthieu
<br>
<p><p>2013/11/12 Tang, Yu-Hang &lt;yuhang_tang_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to augment the command line argument list by allocating my own list
</span><br>
<span class="quotelev1">&gt; of strings and passing them to MPI_Init, yet I got a segmentation fault for
</span><br>
<span class="quotelev1">&gt; both OpenMPI 1.6.3 and 1.7.2, while the code works fine with MPICH2. The
</span><br>
<span class="quotelev1">&gt; code is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;cuda_runtime.h&quot;
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
<span class="quotelev1">&gt;     int device = 0;
</span><br>
<span class="quotelev1">&gt;     int skip = 0;
</span><br>
<span class="quotelev1">&gt;     bool skipmode = false;
</span><br>
<span class="quotelev1">&gt;     bool specified = false;
</span><br>
<span class="quotelev1">&gt;     for( int i = 0 ; i &lt; argc ; i++ )
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         if ( strcmp( argv[i], &quot;-device&quot; ) == 0 )
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             i++;
</span><br>
<span class="quotelev1">&gt;             if ( argv[i][0] == '-' )
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;                 skipmode = true;
</span><br>
<span class="quotelev1">&gt;                 skip = fabs( atoi( argv[i] ) );
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             else
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;                 skipmode = false;
</span><br>
<span class="quotelev1">&gt;                 device = atoi( argv[i] );
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             specified = true;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if ( !specified || skipmode )
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         char* var;
</span><br>
<span class="quotelev1">&gt;         int dev_count, local_rank = 0;
</span><br>
<span class="quotelev1">&gt;         if ( (var = getenv(&quot;SLURM_LOCALID&quot;)) != NULL) local_rank =
</span><br>
<span class="quotelev1">&gt; atoi(var);
</span><br>
<span class="quotelev1">&gt;         else if( (var = getenv(&quot;MV2_COMM_WORLD_LOCAL_RANK&quot;))  != NULL)
</span><br>
<span class="quotelev1">&gt; local_rank = atoi(var);
</span><br>
<span class="quotelev1">&gt;         else if( (var = getenv(&quot;OMPI_COMM_WORLD_LOCAL_RANK&quot;)) != NULL)
</span><br>
<span class="quotelev1">&gt; local_rank = atoi(var);
</span><br>
<span class="quotelev1">&gt;         cudaGetDeviceCount( &amp;dev_count );
</span><br>
<span class="quotelev1">&gt;         if ( skipmode )
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             device = 0;
</span><br>
<span class="quotelev1">&gt;             if ( device == skip ) local_rank++;
</span><br>
<span class="quotelev1">&gt;             while( local_rank-- &gt; 0 )
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;                 device = (++device) % dev_count;
</span><br>
<span class="quotelev1">&gt;                 if ( device == skip ) local_rank++;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         else device = local_rank % dev_count;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;     sprintf( argv_new[argc+1], &quot;%d&quot;, device );
</span><br>
<span class="quotelev1">&gt;     argc += 2;
</span><br>
<span class="quotelev1">&gt;     argv = argv_new;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cudaSetDevice( device );
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
<span class="quotelev1">&gt;     cudaDeviceReset();
</span><br>
<span class="quotelev1">&gt;     for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
</span><br>
<span class="quotelev1">&gt;     delete [] argv;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When compiled using nvcc -ccbin mpic++, The error I got was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jueying:16317] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [jueying:16317] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [jueying:16317] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [jueying:16317] Failing at address: 0x21
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 0] /usr/lib64/libpthread.so.0() [0x39e5e0f000]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 1] /usr/lib64/libc.so.6() [0x39e5760551]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.7.2/lib/libopen-pal.so.5(opal_argv_join+0x39)
</span><br>
<span class="quotelev1">&gt; [0x7f460b993079]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 3] /opt/openmpi/1.7.2/lib/libmpi.so.1(ompi_mpi_init+0x347)
</span><br>
<span class="quotelev1">&gt; [0x7f460c106a57]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 4] /opt/openmpi/1.7.2/lib/libmpi.so.1(MPI_Init+0x16b)
</span><br>
<span class="quotelev1">&gt; [0x7f460c12523b]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 5] ./lmp_jueying() [0x40c035]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 6] /usr/lib64/libc.so.6(__libc_start_main+0xf5)
</span><br>
<span class="quotelev1">&gt; [0x39e5621a05]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] [ 7] ./lmp_jueying() [0x40dd21]
</span><br>
<span class="quotelev1">&gt; [jueying:16317] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Yu-Hang Tang
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
<li><strong>Next message:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22946.php">Tang, Yu-Hang: "[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>In reply to:</strong> <a href="22946.php">Tang, Yu-Hang: "[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Reply:</strong> <a href="22948.php">Tang, Yu-Hang: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
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
