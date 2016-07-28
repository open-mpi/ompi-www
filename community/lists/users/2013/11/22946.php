<?
$subject_val = "[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 12 11:12:28 2013" -->
<!-- isoreceived="20131112161228" -->
<!-- sent="Tue, 12 Nov 2013 11:11:57 -0500" -->
<!-- isosent="20131112161157" -->
<!-- name="Tang, Yu-Hang" -->
<!-- email="yuhang_tang_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()" -->
<!-- id="CAFd+rVOCbTQSOt6kU-5rJ8Jr5JN1bL9Uv=08xtpxRK4T1cvQJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()<br>
<strong>From:</strong> Tang, Yu-Hang (<em>yuhang_tang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-12 11:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22947.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22945.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22947.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Reply:</strong> <a href="22947.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to augment the command line argument list by allocating my own list
<br>
of strings and passing them to MPI_Init, yet I got a segmentation fault for
<br>
both OpenMPI 1.6.3 and 1.7.2, while the code works fine with MPICH2. The
<br>
code is:
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &quot;cuda_runtime.h&quot;
<br>
#include &lt;cstdlib&gt;
<br>
#include &lt;cstring&gt;
<br>
#include &lt;cmath&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int device = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int skip = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bool skipmode = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bool specified = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for( int i = 0 ; i &lt; argc ; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( strcmp( argv[i], &quot;-device&quot; ) == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( argv[i][0] == '-' )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skipmode = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skip = fabs( atoi( argv[i] ) );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skipmode = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device = atoi( argv[i] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specified = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( !specified || skipmode )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char* var;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dev_count, local_rank = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( (var = getenv(&quot;SLURM_LOCALID&quot;)) != NULL) local_rank =
<br>
atoi(var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if( (var = getenv(&quot;MV2_COMM_WORLD_LOCAL_RANK&quot;))  != NULL)
<br>
local_rank = atoi(var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if( (var = getenv(&quot;OMPI_COMM_WORLD_LOCAL_RANK&quot;)) != NULL)
<br>
local_rank = atoi(var);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cudaGetDeviceCount( &amp;dev_count );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( skipmode )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( device == skip ) local_rank++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while( local_rank-- &gt; 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device = (++device) % dev_count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( device == skip ) local_rank++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else device = local_rank % dev_count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// override command line arguments to make sure cudaengine get the
<br>
correct one
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char **argv_new = new char*[ argc + 2 ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for( int i = 0 ; i &lt; argc ; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv_new[i] = new char[ strlen( argv[i] ) + 1 ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy( argv_new[i], argv[i] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argv_new[ argc   ] = new char[ 32 ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argv_new[ argc+1 ] = new char[ 32 ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;strcpy( argv_new[argc],   &quot;-device&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sprintf( argv_new[argc+1], &quot;%d&quot;, device );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argc += 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;argv = argv_new;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cudaSetDevice( device );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// do something...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cudaDeviceReset();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for( int i = 0 ; i &lt; argc ; i++ ) delete [] argv[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;delete [] argv;
<br>
}
<br>
<p>When compiled using *nvcc -ccbin mpic++*, The error I got was:
<br>
<p>[jueying:16317] *** Process received signal ***
<br>
[jueying:16317] Signal: Segmentation fault (11)
<br>
[jueying:16317] Signal code: Address not mapped (1)
<br>
[jueying:16317] Failing at address: 0x21
<br>
[jueying:16317] [ 0] /usr/lib64/libpthread.so.0() [0x39e5e0f000]
<br>
[jueying:16317] [ 1] /usr/lib64/libc.so.6() [0x39e5760551]
<br>
[jueying:16317] [ 2]
<br>
/opt/openmpi/1.7.2/lib/libopen-pal.so.5(opal_argv_join+0x39)
<br>
[0x7f460b993079]
<br>
[jueying:16317] [ 3]
<br>
/opt/openmpi/1.7.2/lib/libmpi.so.1(ompi_mpi_init+0x347) [0x7f460c106a57]
<br>
[jueying:16317] [ 4] /opt/openmpi/1.7.2/lib/libmpi.so.1(MPI_Init+0x16b)
<br>
[0x7f460c12523b]
<br>
[jueying:16317] [ 5] ./lmp_jueying() [0x40c035]
<br>
[jueying:16317] [ 6] /usr/lib64/libc.so.6(__libc_start_main+0xf5)
<br>
[0x39e5621a05]
<br>
[jueying:16317] [ 7] ./lmp_jueying() [0x40dd21]
<br>
[jueying:16317] *** End of error message ***
<br>
<p>Thanks for the help.
<br>
<p>Best regards,
<br>
Yu-Hang Tang
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22946/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22947.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Previous message:</strong> <a href="22945.php">George Bosilca: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22947.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
<li><strong>Reply:</strong> <a href="22947.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault in MPI_Init when passing pointers allocated in main()"</a>
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
